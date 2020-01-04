<template lang="pug">
  div
    #player
    .back-button
      router-link(to="/kids-tv")
        i.arrow.left

</template>

<script>

  import ChannelCard from "../components/ChannelCard"
  import ChannelList from "./ChannelList"
  import ChannelRow from "../components/ChannelRow"
  import {getChannel, getChannelsByCategory} from "@/js/api/channel"
  import {getCategory} from "../api/category"
  import store from "../stores/store"

  export default {
    name: "kids-player",
    components: {ChannelRow, ChannelList, ChannelCard},
    data() {
      return {
        channel: null,
        channels: null,
        player: null,
        category: null,
        isHighlighted: true
      }
    },
    watch: {
      $route(toRoute, fromRoute) {
        this.player.destroy()
        this.getChannel()
      }
    },

    methods: {
      async getChannel() {
        const channel = await getChannel(this.$route.params.id)
        this.channel = channel.channel
        if (this.player) {
          this.player.destroy()
        }
        this.player = new Clappr.Player({
          source: this.channel.url,
          parentId: "#player",
          poster: this.channel.image,
          width: '100%',
          height: '100%',
          autoPlay: true,
        })
      },

    },
    async created() {
      await this.getChannel()
    },
    destroyed() {
      this.player.destroy()
    }

  }
</script>

<style lang="scss" scoped>
  #player {
    position: absolute;
    width: 100%;
    height: 100%;
  }

  .back-button {
    position: absolute;
    top: 50px;
    left: 50px;
    text-align: center;
    cursor: pointer;
  }

  i {
    border: solid white;
    border-width: 0 5px 5px 0;
    display: inline-block;
    padding: 15px;
  }

  .arrow.left {
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    box-shadow: 2px 2px 2px 0px black;
  }

</style>
