import request from "@/js/utils/request";
import moment from "moment";

const base = "http://tv.sawadland.com:8999/https://webws.365scores.com/web";

export function getGames(
  date = moment().format("DD/MM/YYYY")
) {
  return request({
    url: `/schedule?date=${date}`,
    method: "get"
  });
}

export function getGame(langId = 1, gameId) {
  return request({
    url: `${base}/game/?langId=${langId}&timezoneName=Asia/Baghdad&userCountryId=-1&appTypeId=5&gameId=${gameId}`,
    method: "get"
  });
}
