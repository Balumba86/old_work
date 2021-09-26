import { PATHS } from "../const";
import BaseApi from "./base";
import {
  categoriesSerializer,
  categoryListSerializer,
  newsListSerializer
} from './serializers'

class Api extends BaseApi {

  getHomeData = async () => {
    const res = await this.get('/home')
    return res.data
  }

  getNewsList = async (params = {}) => {
    const res = await this.get('/news/list', params)
    return newsListSerializer(res.data)
  }

  getNewsDetail = async ({ postSlug = ''}) => {
    const res = await this.get(`/news/${postSlug}`)
    return res.data
  }

  getShopList = async (params = {}) => {
    console.log(params, 'get list')
    const res = await this.get('/shop/list', params)
    return categoryListSerializer(res.data)
  }

  getCatogoriesShops = async () => {
    const res = await this.get('/shop/categories')
    return categoriesSerializer(res.data, PATHS.visitors_shops.path)
  }

  getShopsCategorySlug = async (params = {}) => {
    const newParams = {...params};
    delete newParams.categorySlug;
    const res = await this.get(`/shop/category/${params.categorySlug}`, newParams)
    return categoryListSerializer(res.data)
  }

  getShopDetail = async (shopSlug = '') => {
    const res = await this.get(`/shop/${shopSlug}`)
    return res.data
  }

  getCafeList = async (params = {}) => {
    const res = await this.get('/restaurant/list', params)
    return categoryListSerializer(res.data)
  }

  getCatogoriesCafe = async () => {
    const res = await this.get('/restaurant/categories')
    return categoriesSerializer(res.data, PATHS.visitors_cafe.path)
  }

  getCafeCategorySlug = async ({ categorySlug = '', params = {} }) => {
    const res = await this.get(`/restaurant/category/${categorySlug}`, params)
    return categoryListSerializer(res.data)
  }

  // getCafeDetail = (restaurantSlug = '') => {
  //   const res = this.get(`/restaurant/${restaurantSlug}`, {})
  //   return res
  // }

  getServicesList = async (params = {}) => {
    const res = await this.get('/service/list', params)
    return res.data
  }

  getCatogoriesServices = async () => {
    const res = await this.get('/service/categories')
    return categoriesSerializer(res.data, PATHS.visitors_services.path)
  }

  getServicesCategorySlug = async ({ categorySlug = '', params = {} }) => {
    const res = await this.get(`/service/category/${categorySlug}`, params)
    return categoryListSerializer(res.data)
  }

  // getServiceDetail = (serviceSlug = '') => {
  //   const res = this.get(`/service​/${serviceSlug}`, {})
  //   return res
  // }

  // sendSubscribeData = ({ params = {} }) => {
  //   const res = this.post('​/system​/email​/subscribe', params)
  //   return res
  // }

  getContacts = async () => {
    const res = await this.get('/contacts')
    return res.data
  }

}

const MAIN_URL = process.env.MIX_REACT_APP_API_URL;
console.log(MAIN_URL, 'MAIN_URL', process.env)
const api = new Api(`${MAIN_URL}`);
export default api;