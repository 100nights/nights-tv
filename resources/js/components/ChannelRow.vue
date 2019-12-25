<template lang="pug">
  .channel-row-wrapper
    .title {{ category['name' + locale] }}
    .channel-row(:class="collapsed ? 'collapse' : ''" v-if="channels")
      channel-card(v-for="channel in data" :channel="channel" :key="channel.id")
    .see-more(v-on:click="collapse")
      span {{ collapsed ? 'SEE MORE' : 'SEE LESS' }}
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

    }
  }
</script>

<style lang="scss" scoped>
  .channel-row-wrapper {
    margin-bottom: 10px;
  }

  .collapse {
    padding: 3px 0;
    overflow: hidden;
    height: 12.7vw;
  }

  .see-more {
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .see-more span {
    display: inline-block;
    font-size: 1.1rem;
    cursor: pointer;
    margin-right: 8px;
    font-weight: bold;
    color: #fff;
    font-family: "Dubai-Regular", sans-serif;

    /*&:hover {*/
    /*  color: red;*/
    /*}*/
  }


  .title {
    display: inline-block;
    font-size: 2.0rem;
    font-weight: bold;
    margin-bottom: 10px;
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
