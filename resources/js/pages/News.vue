<template lang="pug">
  .news-wrapper(v-if="articles" dir="rtl")
    article-item(:key="article.id" v-for="article in articles" :article="article")
  loading-indicator(v-else)

</template>

<script>
  import {getArticles} from "../api/news"
  import ArticleItem from "../components/ArticleItem"
  import LoadingIndicator from "../components/LoadingIndicator"

  export default {
    name: "news",
    components: {LoadingIndicator, ArticleItem},
    data() {
      return {
        articles: [],
        nextPageToken: null,
        hasMore: true
      }
    },
    async created() {
      await this.getArticles()

      window.onscroll = async () => {
        let bottomOfWindow = document.documentElement.scrollTop + window.innerHeight === document.documentElement.offsetHeight

        if (bottomOfWindow) {
          if (this.hasMore) {
            await this.getArticles()
          }
        }
      }

    },
    methods: {
      async getArticles() {
        const res = await getArticles(this.nextPageToken)
        this.articles = [...this.articles, ...res.contentItems]
        this.nextPageToken = res.nextPageToken
        this.hasMore = res.hasMore
      },
    }
  }
</script>

<style lang="scss" scoped>
  .news-wrapper {
    max-width: 800px;
    text-align: start;
    margin: auto;
  }
</style>
