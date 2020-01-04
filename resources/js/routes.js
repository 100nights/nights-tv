import Vue from "vue"
import VueRouter from "vue-router"

import Home from "./pages/Home"
import Landing from "./pages/Landing"
import Downloads from "./pages/Downloads"
import Player from "./pages/Player"
import ChannelList from "./pages/ChannelList"
import RelatedList from "./components/RelatedList"
import Schedule from "./pages/Schedule"
import TvGuide from "./pages/TvGuide"
import KidsTv from "./pages/KidsTv"
import KidsPlayer from "./pages/KidsPlayer"
import News from "./pages/News"
import Article from "./pages/Article"

Vue.use(VueRouter)

const router = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      name: "landing",
      component: Landing
    },
    {
      path: '/kids-tv',
      name: 'kids-tv',
      components: {
        kidsView: KidsTv
      }
    },
    {
      path: '/kids-player/:id',
      name: 'kids-player',
      components: {
        kidsView: KidsPlayer
      }
    },
    {
      path: "/home",
      name: "home",
      component: Home,
      children: [
        {
          name: 'live-tv',
          path: "live-tv",
          components: {
            homeView: ChannelList
          },
        },
        {
          name: "downloads",
          path: 'downloads',
          components: {
            homeView: Downloads
          },
        },
        {
          name: "schedule",
          path: 'schedule',
          components: {
            homeView: Schedule
          },
        },
        {
          name: "tv-guide",
          path: 'tv-guide',
          components: {
            homeView: TvGuide
          },
        },
        {
          name: "news",
          path: 'news',
          components: {
            homeView: News
          },
        },
        {
          name: "news-article",
          path: 'news/:id',
          components: {
            homeView: Article
          },
        }

      ]
    },

    {
      path: "/channel/:id",
      name: "player",
      component: Player,
      children: [
        {
          name: 'channels',
          path: 'all',
          components: {
            playerView: ChannelList
          }
        },
        {
          name: 'related',
          path: 'related',
          components: {
            playerView: RelatedList
          }
        }
      ]
    }
  ]
})

export default router
