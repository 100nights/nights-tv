import request from '@/js/utils/request'
import moment from "moment"

export function getTvGuideChannels(page = 1) {
  return request({
    url: `/tv_guide_channels?page=${page}`,
    method: 'get'
  })
}

export function getChannelPrograms(channelCode, date = moment().format('MM/DD/YYYY')) {
  return request({
    url: `http://tv.sawadland.com/api/tv_guide?channel_code=${channelCode}&date=${date}`,
    method: 'get'
  })
}

