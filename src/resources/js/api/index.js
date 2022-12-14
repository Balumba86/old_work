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
    const res = await this.get('/shop/list', params)
    return categoryListSerializer(res.data)
  }

  getCatogoriesShops = async () => {
    const res = await this.get('/shop/categories')
    return categoriesSerializer(res.data, PATHS.shops.path)
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
    return categoriesSerializer(res.data, PATHS.cafe.path)
  }

  getCafeCategorySlug = async (params = {}) => {
    const newParams = {...params};
    delete newParams.categorySlug;
    const res = await this.get(`/restaurant/category/${params.categorySlug}`, newParams)
    return categoryListSerializer(res.data)
  }

  getCafeDetail = async (restaurantSlug = '') => {
    const res = await this.get(`/restaurant/${restaurantSlug}`)
    return res.data
  }

  getServicesList = async (params = {}) => {
    const res = await this.get('/service/list', params)
    return categoryListSerializer(res.data)
  }

  getCatogoriesServices = async () => {
    const res = await this.get('/service/categories')
    return categoriesSerializer(res.data, PATHS.services.path)
  }

  getServicesCategorySlug = async (params = {}) => {
    const newParams = {...params};
    delete newParams.categorySlug;
    const res = await this.get(`/service/category/${params.categorySlug}`, newParams)
    return categoryListSerializer(res.data)
  }

  getServiceDetail = async (serviceSlug = '') => {
    const res = await this.get(`/service/${serviceSlug}`)
    return res.data
  }

  sendSubscribeData = async ({ params = {} }) => {
    const res = await this.post('/system/email/subscribe', params)
    return res.data
  }

  getContacts = async () => {
    const res = await this.get('/contacts')
    return res.data
  }

  getVacanciesList = async () => {
    const res = await this.get('/opening-jobs')
    return res.data
  }

  sentRenterData = async (params = {}) => {
    const res = await this.post('/system/rent', params)
    return res.data
  }

  getLevelsImages = async () => {
    const res = await this.get('/plans')
    return res.data
  }

  getLevelInfo = async ({ id = null }) => {
    const res = await this.get(`/level/${id}`)
    return res.data
  }

  getStaticPage = async ({ pageSlug = '' }) => {
    const res = await this.get(`/page/${pageSlug}`)
    return res.data
  }

  getGalleryHome = async (params) => {
    const res = await this.get('/gallery', params)
    return res.data
  }

  getGallery = async (params) => {
    const res = await this.get('/gallery', params)
    return categoryListSerializer(res.data)
  }

}

const MAIN_URL = process.env.MIX_REACT_APP_API_URL;
console.log(MAIN_URL, 'MAIN_URL', process.env)
const api = new Api(`${MAIN_URL}`);
export default api;