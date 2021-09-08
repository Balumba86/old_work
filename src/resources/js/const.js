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
    path: '/news',
    exact: true
  },
  news_detail: {
    path: '/news/:slug',
    exact: false
  },
  renter: {
    path: '/renters',
    exact: false
  },
  cafe_detail: {
    path: '/visitors/cafe/:slug',
    exact: false
  },
  services_detail: {
    path: '/visitors/services/:slug',
    exact: false
  },
  shops_detail: {
    path: '/visitors/shops/:slug',
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