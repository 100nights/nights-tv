<template>
    <footer class="footer h-rainbow">
      <img class="footer-logo" src="/images/logo-white.svg">
          <span class="font-thin opacity-75 mx-2">Copyright © 2020 1001Nights All rights reserved.</span>
          <a
            href="https://fb.com/1001nights.fun"
            rel="noopener noreferrer"
            target="_blank"
          >
            <span>Contact Us on Facebook</span>
          </a>
        </footer>
</template>

<script>
    export default {
        name: "app-footer"
    }
</script>

<style lang="scss" scoped>
  footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: "Dubai-Light", sans-serif;
    padding: 2rem 4rem;
    .footer-logo {
      width: 10rem;
    }
  }

</style>
