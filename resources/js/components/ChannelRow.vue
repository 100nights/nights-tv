<template lang="pug">
  .channel-row-wrapper
    .title {{ category['name' + locale] }}
    .channel-row(:class="collapsed ? 'collapse' : ''" v-if="channels")
      channel-card(v-for="channel in data" :channel="channel" :key="channel.id")
    .see-more(:dir="locale === '_ar' ? 'rtl' : 'ltr'" v-on:click="collapse")
      div(:style="style")
        span {{ collapsed ? locale === '_ar' ? 'المزيد'  : 'See More' : locale === '_ar' ? 'اقل' : 'See Less' }}
        down-arrow(:down="!collapsed")

</template>

<script>
  import ChannelCard from "./ChannelCard"
  import DownArrow from "./DownArrow"

  export default {
    name: "channel-row",
    data() {
      return {
        collapsed: true,
        data: this.channels.filter(channel => channel.category_id === this.category.id)
      }
    },
    props: {
      'channels': {type: Array},
      'category': {type: Object},
      'locale': {type: String},
    },
    components: {DownArrow, 'channel-card': ChannelCard},
    methods: {
      collapse() {
        this.collapsed = !this.collapsed
      },

    },
    computed: {
      style() {
        return !this.collapsed ? "background: transparent !important" : ""
      }
    }
  }
</script>

<style lang="scss" scoped>
  @import '../../sass/variables.scss';

  .channel-row-wrapper {
    margin-bottom: 10px;
  }

  .collapse {
    padding: 3px 0;
    overflow: hidden;
    height: 12.3vw;
  }

  .see-more {
    text-align: center;
    margin-top: 10px;
    div {
      display: flex;
      min-width: 8rem;
      max-width: 9rem;
      margin: auto;
      justify-content: space-between;
      align-items: center;
      background: $color-red;
      padding: 10px 20px;
      border-radius: 9999px;
    }
  }

  .see-more span {
    display: inline-block;
    font-size: 1rem;
    cursor: pointer;
    margin-right: 8px;
    color: #fff;
    font-family: "Dubai-Regular", sans-serif;
  }


  .title {
    display: inline-block;
    font-size: 1.5rem;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .channel-row {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
  }


  @media screen and (max-width: 700px) {
    .collapse {
      overflow: hidden;
      height: 28vw;
    }
  }
</style>
