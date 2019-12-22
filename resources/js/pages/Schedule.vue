<template lang="pug">
  .wrapper()
    .tabs(:dir="locale === '_ar' ? 'rtl' : 'ltr'")
      .tab(
        :key="day.date"
        :class="{highlighted: day.date === isHighlighted.date}"
        @click="changeDay(day)"
        v-for="day in week.match_days"
      ) {{ day.name }}
    div(v-if="locale === '_ar' ? schedule_ar : schedule")
      schedule-game(:key="league.id" v-for="league in (locale === '_ar' ? schedule_ar : schedule)" :league="league")
    loading-indicator(v-else)
</template>

<script>
  import ScheduleGame from "../components/ScheduleGame"
  import {getGames} from "../api/schedule"
  import LoadingIndicator from "../components/LoadingIndicator"
  import store from "../stores/store"
  import moment from "moment"

  export default {
    name: "schedule",
    data() {
      return {
        schedule: null,
        schedule_ar: null,
        week: {
          today: '',
          selected_day: {},
          match_days: [],
          days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
          days_ar: ['الاحد', 'الاثنين', 'الثلاثاء', 'الاربعاء', 'الخميس', 'الجمعة', 'السبت']
        },
        isHighlighted: {}
      }
    },
    components: {ScheduleGame, LoadingIndicator},
    async mounted() {

      this.setupDays()


      await this.getSchedule(this.isHighlighted.date, localStorage.getItem('locale'))
      setInterval(() => {
        this.getSchedule(this.isHighlighted.date)
      }, 20000)
    },
    methods: {
      async getSchedule(date) {

        const result = await getGames(date)

        this.schedule = result.schedule["competitions"].map(competition => {
          const schedule = result.schedule;
          const games = schedule.games.filter(
            ({competitionId}) => competitionId === competition.id
          )
          const country = schedule.countries.find(
            country => country.id === competition.countryId
          )
          return {competition, games, country}
        })

        this.schedule_ar = result.schedule_ar["competitions"].map(competition => {
          const schedule = result.schedule_ar;
          const games = schedule.games.filter(
            ({competitionId}) => competitionId === competition.id
          )
          const country = schedule.countries.find(
            country => country.id === competition.countryId
          )
          return {competition, games, country}
        })
      },
      changeDay(day) {
        this.isHighlighted = day
      },

      setupDays() {
        const today = moment()
        const dayBeforeYesterday = moment(today).subtract(2, 'days')
        const yesterday = moment(today).subtract(1, 'days')
        const tomorrow = moment(today).add(1, 'days')
        const dayAfterTomorrow = moment(today).add(2, 'days')


        const days = this.week['days' + this.locale]


        this.week.match_days = [
          {name: days[dayBeforeYesterday.day()], date: dayBeforeYesterday.format('DD/MM/YYYY')},
          {name: days[yesterday.day()], date: yesterday.format('DD/MM/YYYY')},
          {name: this.locale === '_ar' ? 'اليوم' : 'Today', date: today.format('DD/MM/YYYY')},
          {name: days[tomorrow.day()], date: tomorrow.format('DD/MM/YYYY')},
          {name: days[dayAfterTomorrow.day()], date: dayAfterTomorrow.format('DD/MM/YYYY')},
        ]
        this.week.today = this.week.match_days[2]

        this.isHighlighted = this.week.today
      }

    },
    watch: {
      locale(newValue, oldValue) {
        if (newValue !== oldValue) {
          this.setupDays()
          // this.schedule = null
          // this.getSchedule(this.isHighlighted.date)
        }
      },

      isHighlighted(newValue, oldValue) {
        if (newValue.date !== oldValue.date) {
          this.schedule = null
          this.schedule_ar = null
          this.getSchedule(newValue.date)
        }
      }
    },
    computed: {
      locale() {
        return store.state.locale
      }
    }
  }
</script>

<style lang="scss" scoped>
  .tabs {
    display: flex;
    flex-direction: row;
    font-family: "Dubai-Light", sans-serif;
    text-align: center;
    justify-content: center;
    margin-bottom: 50px;

    .tab {
      margin: 10px;
      padding: 2px;
      cursor: pointer;
    }

    .highlighted {
      font-family: "Dubai-Regular", sans-serif;
      border-bottom: 1px solid red;
    }

  }
</style>
