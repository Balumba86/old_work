import { PATHS } from "../const";
import BaseApi from "./base";
import { categoriesSerializer } from './serializers'

class Api extends BaseApi {

  getNewsList = async (params = {}) => {
    const res = await this.get('/news/list', params)
    return res.data
  }

  // getNewsDetail = ({ postSlug = ''}) => {
  //   const res = this.get(`/news/${postSlug}`, {})
  //   return res
  // }

  getCatogoriesShops = async () => {
    const res = await this.get('/shop/categories')
    return categoriesSerializer(res.data, PATHS.visitors_shops.path)
  }

  // getShopsCategorySlug = ({ categorySlug = '' }) => {
  //   const res = this.get(`/shop​/category/${categorySlug}`, {})
  //   return res
  // }

  // getShopDetail = ({ shopSlug = '' }) => {
  //   const res = this.get(`/shop​/${shopSlug}`, {})
  //   return res
  // }

  getCatogoriesCafe = async () => {
    const res = await this.get('/restaurant/categories')
    return categoriesSerializer(res.data, PATHS.visitors_cafe.path)
  }

  // getCafeCategorySlug = ({ categorySlug = '' }) => {
  //   const res = this.get(`/restaurant/category/${categorySlug}`, {})
  //   return res
  // }

  // getCafeDetail = ({ restaurantSlug = '' }) => {
  //   const res = this.get(`/restaurant/${restaurantSlug}`, {})
  //   return res
  // }

  getCatogoriesServices = async () => {
    const res = await this.get('/service/categories')
    return categoriesSerializer(res.data, PATHS.visitors_services.path)
  }

  // getServicesCategorySlug = ({ categorySlug = '' }) => {
  //   const res = this.get(`/service​/category/${categorySlug}`, {})
  //   return res
  // }

  // getServiceDetail = ({ serviceSlug = '' }) => {
  //   const res = this.get(`/service​/${serviceSlug}`, {})
  //   return res
  // }

  // sendSubscribeData = ({ params = {} }) => {
  //   const res = this.post('​/system​/email​/subscribe', params)
  //   return res
  // }

}

const MAIN_URL = process.env.MIX_REACT_APP_API_URL;
console.log(MAIN_URL, 'MAIN_URL', process.env)
const api = new Api(`${MAIN_URL}`);
export default api;