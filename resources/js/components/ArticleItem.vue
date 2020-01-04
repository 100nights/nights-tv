<template lang="pug">
  router-link(:to="to")
    .article-item
      img(:src="image" width="300px" height="170px")
      .text-container
        .article-headline {{ article["headline"] }}
        .article-summary {{ article["summary"] }}
        .article-date {{ date }}

</template>

<script>
  import moment from "moment"

  export default {
    name: "article-item",
    props: {
      article: Object
    },
    computed: {
      image() {
        const image = this.article.mediaAsset.imageUrl.replace('{width}/{height}', '600/264')
        return `https://www.skynewsarabia.com/images/${image}`
      },
      to() {
        return '/home/news/' + this.article.id
      },

      date() {
        return moment(this.article['date']).fromNow()
      }
    }
  }
</script>

<style lang="scss" scoped>
  .article-item {
    display: flex;
    margin: 1rem;

    transition: .2s;

    &:hover {
      background: #ffffff33;
    }
  }

  .article-item img {
    max-width: 300px;
    margin-left: .5rem;
    object-fit: cover;
  }

  .text-container {
    display: flex;
    flex-direction: column;
    .article-headline {
      font-size: 1.3rem;
      margin-bottom: .5rem;
      font-weight: bold;
    }

    .article-summary {
      font-family: 'Dubai-Light', sans-serif;
      font-size: 1rem;
      color: #f0f0f0d6;
    }

    .article-date {
      font-family: 'Dubai-Light', sans-serif;
      font-size: 1rem;
      color: #f0f0f0d6;
      flex: 1;
    }
  }

  @media screen and(max-width: 700px) {
    .article-item {
      flex-direction: column;
    }
    .article-item img {
      width: 100%;
    }
  }
</style>
