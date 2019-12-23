<template>
  <span :style="style" class="down-arrow">
    <img src="/images/arrow.png">
  </span>


</template>

<script>
    export default {
        name: "down-arrow",
        props: ['down'],
        computed: {
            style() {
                return this.down ? 'transform: rotate(180deg)' : '';
            }
        }
    }
</script>

<style scoped>
  .down-arrow {
    fill: #d60000;
    /*margin-top: 5px;*/
  }

  .down-arrow img {
    width: 13px;
  }
</style>
