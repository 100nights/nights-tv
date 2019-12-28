<template lang="pug">
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

</template>

<script>
  import {getChannelPrograms, getTvGuideChannels} from "../api/tv_guide"

  export default {
    name: "tv-guide",
    data() {
      return {channels: null, programs: [], timeline: []}
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

      await this.getTvGuide()
    },
    methods: {
      async getTvGuide() {
        // get channels
        const res = await getTvGuideChannels(1)
        this.channels = res.data

        for (let channel of this.channels) {
          // get programs for each channel
          const data = await getChannelPrograms(channel.channel_code)

          const program = {id: channel.id, data}


          this.programs.push(program)
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
</style>
