export const PATHS = {
  home: {
    path: '/',
    exact: true
  },
  scheme: {
    path: '/levels',
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
  personal_data: {
    path: '/personal-data-policy',
    exact: false
  },
  renter: {
    path: '/renters',
    exact: false
  },
  cafe: {
    path: '/cafe',
    exact: true
  },
  cafe_category: {
    path: '/cafe/:category',
    exact: false
  },
  cafe_detail: {
    path: '/cafe/detail/:slug',
    exact: false
  },
  gallery: {
    path: '/gallery',
    exact: false
  },
  services: {
    path: '/services',
    exact: true
  },
  services_category: {
    path: '/services/:category',
    exact: false
  },
  services_detail: {
    path: '/services/detail/:slug',
    exact: false
  },  
  shops: {
    path: '/shops',
    exact: true
  },
  shops_category: {
    path: '/shops/:category',
    exact: false
  },
  shops_detail: {
    path: '/shops/detail/:slug',
    exact: false
  },
  vacancies: {
    path: '/vacancies',
    exact: false
  },
  parking_rules: {
    path: "/parking-rules",
    exact: false
  }
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

export const NEWS_TYPES_TITLES = {
  news: 'Новости',
  openings: 'Открытия',
  events: 'Мероприятия',
  promotions_and_discounts: 'Акции и скидки',
  film: 'Фильм'
}

export const NEWS_TYPES = {
  news: 'news',
  openings: 'openings',
  events: 'events',
  promotions_and_discounts: 'promotions_and_discounts',
  film: 'film'
}

export const SOCIAL_LINKS = {
  instagram: 'https://www.instagram.com/nikolskymall/',
  ok: 'https://ok.ru/nikolskymalll',
  vk: 'https://vk.com/nikolskymall',
  youtube: 'https://www.youtube.com/channel/UCiaxe3Z2cb6WM0f8q4II5fA'
}

export const SLUG_PAGES = {
  parking: 'parking-level',
  parkingRules: 'parking-rules',
  personal_data: 'personal-data-policy',
  renters: 'renters',
}