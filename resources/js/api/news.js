import request from '@/js/utils/request'

export function getArticles(nextPageToken) {
  let url = 'http://tv.sawadland.com:8999/https://api.skynewsarabia.com/rest/v2/latest.json?defaultSectionId=6&pageSize=20&types=ARTICLE'
  if (nextPageToken) {
    url = `${url}&nextPageToken=${nextPageToken}`
  }
  return request({
    url,
    method: 'get'
  })
}

export function getArticle(id) {
  return request({
    url: `http://tv.sawadland.com:8999/https://api.skynewsarabia.com/rest/v2/article/${id}.json?client=web&deviceType=MOBILE`,
    method: 'get'
  })
}
