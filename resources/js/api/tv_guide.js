import request from '@/js/utils/request'
import moment from "moment"

export function getTvGuideChannels(page = 1) {
  return request({
    url: `/tv_guide_channels?page=${page}`,
    method: 'get'
  })
}

export function getChannelPrograms(channelCode, date = moment().format('YYYY-MM-DD')) {
  return request({
    url: `/tv_guide?channel_code=${channelCode}&date=${date}`,
    method: 'get'
  })
}

