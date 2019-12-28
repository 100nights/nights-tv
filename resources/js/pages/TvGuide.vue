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
        .timeline(v-if="timeline")
          .timeline-item(:key="item" v-for="item in timeline") {{ item }}
        .program-row(:key="channelPrograms.id" v-for="channelPrograms in programs")
          .program(:key="program" v-for="program in channelPrograms.data" :style="`min-width: ${program.empty_div_width > program.total_div_width ? program.empty_div_width :  program.total_div_width}px; width: ${program.empty_div_width > program.total_div_width ? program.empty_div_width :  program.total_div_width}px`") {{ program.title }}
    .load-more(v-if="current_page < last_page"  @click="loadMore" class="btn-secondary") Load More

</template>

<script>
  import {getChannelPrograms, getTvGuideChannels} from "../api/tv_guide"

  export default {
    name: "tv-guide",
    data() {
      return {channels: [], programs: [], timeline: [], current_page: 0, last_page: 1}
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

      await this.loadMore()
    },
    methods: {
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
      flex: 1;
      overflow: hidden;
    }

    .right-col {
      flex: 4;
      overflow: auto;
    }
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
    margin: 10px 50px;
    text-align: center;
    cursor: pointer;
    padding: 5px;
  }
</style>
