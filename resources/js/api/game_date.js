import request from '@/js/utils/request'

export function getGameDate() {
  return request({ url: '/game_date', method: 'get' })
}

