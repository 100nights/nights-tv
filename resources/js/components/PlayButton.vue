<template lang="pug">
  .circle
    .play
</template>
<script>
  export default {
    name: "play-button"
  }
</script>
<style lang="scss" scoped>
  @import '../../sass/variables.scss';

  .circle {
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    width: 8vw;
    height: 8vw;
    transition: box-shadow 200ms;
    box-shadow: 0 0 20px $color-red;
    background: $color-red;
    
    &:hover {
      box-shadow: 0 0 40px $color-blue;
      background: linear-gradient(90deg, $color-blue, $color-red);
    }
  }

  .play {
    width: 0;
    height: 0;
    border-top: 1.3vw solid transparent;
    border-bottom: 1.3vw solid transparent;
    border-left: 1.8vw solid white;
    margin-right: -5px;
  }

  @media screen and (max-width: 700px) {
    .circle {
      width: 70px;
      height: 70px;
    }

    .play {
      width: 0;
      height: 0;
      border-top: 13px solid transparent;
      border-bottom: 13px solid transparent;
      border-left: 18px solid white;
      margin-right: -5px;
    }
  }
</style>
