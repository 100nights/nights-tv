<template lang="pug">
  div
    div(v-if="$route.name !== 'kids-tv' && $route.name !== 'kids-player'")
      nav.nav-bar.gradient
        router-link.logo(:to="$route.path === '/home/live-tv' ? '/' : '/home/live-tv'")
          img(src="/images/logo.svg")
        .expanded
        .left
          router-link.button.downloads(to="/home/downloads") {{ locale === '_ar' ? 'التحميلات' : 'Downloads'}}
          router-link.button.schedule(to="/home/schedule") {{ locale === '_ar' ? 'الجدول' : 'Schedule'}}
          a(@click="changeLocale('')" :class="{highlighted: locale === ''}") English
          .divider
          a(@click="changeLocale('_ar')" :class="{highlighted: locale === '_ar'}") العربية
      router-view
      app-footer
    transition(name="fade")
      router-view.kids-view(name="kidsView")
</template>
<script>
  import Footer from "../components/Footer"
  import {mapState} from "vuex"

  export default {
    components: {'app-footer': Footer},
    mounted() {
      const locale = localStorage.getItem('locale') || ''
      this.changeLocale(locale)
    },
    methods: {
      changeLocale(locale) {
        this.$store.dispatch({type: 'changeLocale', locale: locale})
      },
    },
    computed: mapState({
      locale: state => state.locale
    })
  }
</script>


<style lang="scss" scoped>
  @media screen and (max-width: 700px) {
    .button.downloads {
      display: none;
    }
    .button.schedule {
      display: none;
    }
  }
</style>
