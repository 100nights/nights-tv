<template lang="pug">
  div
    .container-fluid.guide-container
      .left-col
        ul.channels
          .title Channels
          li.channel(:key="channel.id" v-for="channel in channels")
            span.channel-number {{ 'CH #' + channel.number }}
            .container-img
              img(:src="`//content.osn.com/logo/channel/cropped/${channel.channel_code}.png`")
      .right-col
        .now(:style="'left: ' + nowPosition + 'px'")
        .fade
        .timeline(v-if="timeline")
          .timeline-item(:key="item" v-for="item in timeline") {{ item }}
        .program-row(:key="channelPrograms.id" v-for="channelPrograms in programs")
          .program(:key="program.id" v-for="(program, index) in channelPrograms.data" :style="calcWidth(channelPrograms.data, index)") {{ program['title' + locale] }}

    a.button.load-more(v-if="current_page < last_page"  @click="loadMore") Load More

</template>

<script>
  import {getChannelPrograms, getTvGuideChannels} from "../api/tv_guide"
  import moment from "moment"

  export default {
    name: "tv-guide",
    data() {
      return {
        channels: [],
        programs: [],
        timeline: [],
        current_page: 0,
        last_page: 1,
        nowPosition: 0,
        nowInterval: null
      }
    },
    async created() {
      for (let i = 0; i < 48; i++) {
        const timeMinutes = i * 30
        let hours = Math.floor(timeMinutes / 60)
        let minutes = timeMinutes % 60
        if (hours < 10) {
          hours = `0${hours}`
        }

        if (minutes < 10) {
          minutes = `0${minutes}`
        }

        this.timeline.push(`${hours}: ${minutes}`)
      }

      this.updateNowPosition()
      this.nowInterval = setInterval(this.updateNowPosition, 60000)


      await this.loadMore()
    },
    mounted() {
      document.querySelector('.right-col').scroll({
        left: this.nowPosition - 200,
        behavior: "smooth"
      })
    },
    methods: {
      calcWidth(programs, index) {
        let width = 500;
        if (index === 0) {
          width = programs[index].empty_div_width
        } else {
          width = programs[index].total_div_width
        }
        // else if (next) {
        //   const currentStartDate = moment(current.start_date_time, 'YYYY-MM-DD hh:mm:ss')
        //   const nextStartDate = moment(next.start_date_time, 'YYYY-MM-DD hh:mm:ss')
        //   const minutes = nextStartDate.diff(currentStartDate, 'minutes')
        //   width = 3.857142857142857 * minutes;
        // } else {
        //   width = programs[index].total_div_width
        // }

        return `min-width: ${width}px;`
      },
      updateNowPosition() {
        const now = moment()
        const minutes = parseInt(now.format('m'))
        const hours = parseInt(now.format('H'))
        const totalMinutes = (hours * 60) + minutes
        this.nowPosition = (totalMinutes / 30) * 144
      },

      async loadMore() {
        if (this.current_page <= this.last_page) {
          const res = await getTvGuideChannels(this.current_page + 1)
          this.current_page = res.current_page
          this.last_page = res.last_page
          this.channels = [...this.channels, ...res.data]

          for (let channel of res.data) {
            // get programs for each channel
            const data = await getChannelPrograms(channel.channel_code)

            const program = {id: channel.id, data}

            this.programs.push(program)
          }
        }
      }
    },
    computed: {
      locale() {
        return this.$store.state.locale
      }
    },
    destroyed() {
      clearInterval(this.nowInterval)
    }
  }
</script>

<style lang="scss" scoped>
  .left-col .title {
    border-bottom: 1px solid #555;
    min-height: 30px;
    text-align: center;
  }

  ul {
    list-style: none;
  }

  ul.channels li.channel {
    text-align: center;
    display: flex;
    align-items: center;
    border-bottom: 1px solid #555;
    min-height: 80px;

    .container-img {
      float: left;
      min-width: 190px;
    }

    .container-img > img {
      max-height: 40px !important;
      max-width: 70% !important;
    }


    span {
      min-width: 60px;
    }

    img {
      height: auto;
    }
  }

  .guide-container {
    display: flex;

    .left-col {
      overflow: hidden;
      min-width: 250px;
    }

    .right-col {
      position: relative;
      overflow: auto;
    }

    margin-bottom: 20px;
  }

  .timeline {
    display: flex;

    .timeline-item {
      width: 144px;
      min-width: 144px;
      min-height: 30px;
      border-right: 1px solid #555;
      border-bottom: 1px solid #555;
      padding-left: 10px;
    }
  }

  .program-row {
    display: flex;

    .program {
      border: 1px solid #555;
      min-height: 80px;
      height: 80px;
      overflow: hidden;
      text-align: center;
      line-height: 80px;
    }
  }

  .load-more {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    font-size: 1rem;
    cursor: pointer;

    &:hover {
      background: #d60000;
    }
  }

  .now {
    position: absolute;
    width: 2px;
    height: 100%;
    background: #d60000;
  }

  .fade {
    position: absolute;
    right: 0;
    width: 100px;
    height: 100%;
    background: black;
  }
</style>
