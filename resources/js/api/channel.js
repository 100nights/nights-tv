import request from '@/js/utils/request'

export function getChannels() {
  return request({
    url: '/channels',
    method: 'get'
  })
}


export function getKidsChannels() {
  return request({
    url: '/kids-channels',
    method: 'get'
  })
}


export function getChannelsByCategory(id) {
  return request({
    url: `/channels/category/${id}`,
    method: 'get'
  })
}

export function getChannel(id) {
  return request({
    url: `/channels/${id}`,
    method: 'get'
  })
}
