<template>
  <span :style="style" class="down-arrow">
  </span>


</template>

<script>
    export default {
        name: "down-arrow",
        props: ['down'],
        computed: {
            style() {
                return this.down ? 'transform: rotate(135deg)' : 'transform: rotate(-45deg)';
            }
        }
    }
</script>

<style scoped>
  .down-arrow {
    width: 10px;
    height: 10px;
    border-right-width: 0;
    border-top-width: 0;
    border-left-width: 2px;
    border-bottom-width: 2px;
    border-style: solid;
    border-color: white;
  }
</style>
