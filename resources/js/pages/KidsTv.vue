<template lang="pug">
  .kids-wrapper
    .header
      img.header-img(src="/images/kids-header.png" width="100%")
      img.kids-logo(src="/images/kids-logo.png")
    .body
      .channels(v-if="channels")
        router-link(:key="channel.id" v-for="channel in channels" :to="'/kids-player/' + channel.id")
          img.channel( :src="'http://tv.sawadland.com' + channel.image")
    img.blob(src="/images/blob.png")
</template>

<script>
  import {getKidsChannels} from "../api/channel"

  export default {
    name: "kids-tv",
    data() {
      return {
        channels: null
      }
    },
    created() {
      this.getChannels()
    },
    methods: {
      async getChannels() {
        this.channels = await getKidsChannels()
      }
    }
  }
</script>

<style lang="scss" scoped>
  .kids-wrapper {
    color: black;
    background: #f2f2f2;
    /*background: url("/images/ocean.png");*/
    /*background-repeat: repeat-y;*/
    /*background-size: contain;*/
  }

  .kids-logo {
    position: absolute;
    left: 0;
    top: 0;
    height: 200px;
  }

  .channels {
    padding: 100px 50px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;

  }

  .channel {
    width: 300px;
    height: 300px;
    background-color: #F5334D;
    margin-right: 50px;
    margin-bottom: 200px;
    border-radius: 20px;
    object-fit: cover;
    box-shadow: 1px 1px 3px #444;

    transition: .2s;

    &:hover {
      box-shadow: 5px 5px 15px #333;
      transform: scale(1.1);
    }
  }

  img.blob {
    width: 100%;
    margin-bottom: 50px;
  }

  @media screen and (max-width: 700px) {
    .kids-wrapper {
      .header {
        position: relative;
      }

      .header-img {
        object-fit: cover;
        height: 500px;
      }

      .kids-logo {
        height: 100px;
      }
    }
    .channel {
      margin-right: 0;
      margin-bottom: 50px;
    }
  }

</style>
