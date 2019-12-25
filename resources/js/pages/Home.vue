<template lang="pug">

  .home-container
    home-featured
    .wrapper
      .survey-container(v-if="vote_post")
        .survey {{ vote_post["title" + locale] }}
        .vote-container
          .team-container(:class="{highlighted: vote === 'home'}" @click="voteTo('home')")
            .home.team(:class="{highlightedTeam: vote === 'home'}")
            .team-name {{ vote_post["home_name" + locale] }}
            .result(v-if="vote != null") {{ home_ratio }}%
          .team-container(:class="{highlighted: vote === 'draw'}" @click="voteTo('draw')")
            .draw.team(:class="{highlightedTeam: vote === 'draw'}")
            .team-name  {{ vote_post["draw_name" + locale] }}
            .result(v-if="vote != null") {{ draw_ratio }}%
          .team-container(:class="{highlighted: vote === 'away'}" @click="voteTo('away')")
            .away.team(:class="{highlightedTeam: vote === 'away'}")
            .team-name {{ vote_post["away_name" + locale] }}
            .result(v-if="vote != null") {{ away_ratio }}%

      transition(name="fade")
        router-view.home-view(name="homeView")


</template>

<script>
  import HomeFeatured from "../components/HomeFeatured"
  import LoadingIndicator from "../components/LoadingIndicator"
  import ChannelList from "./ChannelList"
  import {getVotePost, newVote} from "../api/vote"

  export default {
    name: "home",
    data() {
      return {
        vote_post: null,
        total_votes: 0,
        home_votes: 0,
        home_ratio: 0,
        away_votes: 0,
        away_ratio: 0,
        draw_votes: 0,
        draw_ratio: 0,
        vote: null,
        timer: null
      }
    },
    async created() {
      await this.getVotePost()

      this.timer = setInterval(this.getVotePost, 10000)
    },
    components: {ChannelList, LoadingIndicator, HomeFeatured},
    methods: {
      async getVotePost() {
        const res = await getVotePost()

        this.vote_post = res.vote_post
        this.total_votes = res.total_votes
        this.home_votes = res.home_votes
        this.home_ratio = Math.round(res.home_ratio * 100)
        this.away_votes = res.away_votes
        this.away_ratio = Math.round(res.away_ratio * 100)
        this.draw_votes = res.draw_votes
        this.draw_ratio = Math.round(res.draw_ratio * 100)
        this.vote = res.vote
      },
      async voteTo(vote) {
        await newVote({vote})
        await this.getVotePost()
      }
    },
    computed: {
      locale() {
        return this.$store.state.locale
      }
    },
    destroyed() {
      clearInterval(this.timer)
    }

  }
</script>

<style lang="scss" scoped>

  .wrapper {
    padding: 50px;
  }

  .fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
  }

  .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
  {
    opacity: 0;
  }

  .survey-container {
    text-align: center;

    .survey {
      margin-bottom: 10px;
    }
  }

  .vote-container {
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin-bottom: 50px;

    .team-container {
      text-align: center;
      width: 80px;
      font-family: 'Dubai-Light', sans-serif;
      font-size: .8rem;

      display: flex;
      flex-direction: column;
      /*justify-content: center;*/
      align-items: center;
      cursor: pointer;
    }

    .team {
      background: #d60000;
      /*box-shadow: 0 0 0 2px #d60000;*/
      width: 25px;
      height: 5px;
      /*height: 25px;*/
      border-radius: 5px;
      margin-bottom: 5px;
    }
  }

  .highlighted {
    color: #edb329;
  }

  .highlightedTeam {
    background: #edb329 !important;
  }


  @media screen and (max-width: 700px) {
    .wrapper {
      padding: 10px;
    }
  }
</style>
