export const PATHS = {
  home: {
    path: '/',
    exact: true
  },
  about: {
    path: '/about',
    exact: false
  },
  contacts: {
    path: '/contacts',
    exact: false
  },
  news: {
    path: '/events',
    exact: true
  },
  news_detail: {
    path: '/events/:slug',
    exact: false
  },
  renter: {
    path: '/renters',
    exact: false
  },
  cafe_detail: {
    path: '/visitors/cafe/detail/',
    exact: false
  },
  services_detail: {
    path: '/visitors/services/detail/',
    exact: false
  },
  shops_detail: {
    path: '/visitors/shops/detail/',
    exact: false
  },
  cafe_category: {
    path: '/visitors/cafe/:category',
    exact: false
  },
  services_category: {
    path: '/visitors/services/:category',
    exact: false
  },
  shops_category: {
    path: '/visitors/shops/:category',
    exact: false
  },
  visitors: {
    path: '/visitors',
    exact: true
  },
  visitors_cafe: {
    path: '/visitors/cafe',
    exact: true
  },
  visitors_services: {
    path: '/visitors/services',
    exact: true
  },
  visitors_shops: {
    path: '/visitors/shops',
    exact: true
  },
}

export const LOADING_STATES = {
  'loading': 'loading',
  'loaded': 'loaded',
  'failed': 'failed'
}

export const NOT_DATA_VISITORS = {
  cafe: 'В этом разделе пока нет кафе и ресторанов',
  services: 'В этом разделе пока нет сервисов и услуг',
  shops: 'В этом разделе пока нет магазинов'
}