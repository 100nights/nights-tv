<template lang="pug">
  .article-wrapper(v-if="article" dir="rtl")
    .article-title {{ article.headline }}
    .article-summary {{ article.summary }}
    img.article-img(:src="image" width="100%")
    .article-body(v-html="article.body")
    .related-articles
      article-item(:key="article.id" v-for="article in article['related-stories']" :article="article")

  loading-indicator(v-else)
</template>

<script>
  import {getArticle} from "../api/news"
  import LoadingIndicator from '../components/LoadingIndicator'
  import ArticleItem from "../components/ArticleItem"

  export default {
    name: "article-page",
    data() {
      return {
        article: null
      }
    },
    async created() {
      await this.getArticle()
    },
    methods: {
      async getArticle() {
        this.article = await getArticle(this.$route.params.id)
      },
    },
    computed: {
      image() {
        const image = this.article.mediaAsset.imageUrl.replace('{width}/{height}', '1200/528')
        return `https://www.skynewsarabia.com/images/${image}`
      },
    },
    components: {LoadingIndicator, ArticleItem}
  }
</script>

<style lang="scss" scoped>
  .article-wrapper {
    text-align: start;
    max-width: 900px;
    margin: auto;

    .article-title {
      font-weight: bold;
      font-size: 1.5rem;
      margin-bottom: .5rem;
    }

    .article-summary {
      font-family: 'Dubai-Light', sans-serif;

      font-size: 1rem;
      color: #f0f0f0;
      margin-bottom: .5rem;
    }

    .article-body {
      font-family: 'Dubai-Light', sans-serif;
      padding: 1rem 0;
      font-size: 1.1rem;
    }
  }
</style>
