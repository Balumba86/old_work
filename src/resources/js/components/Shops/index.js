import { useStoreon } from 'storeon/react'
import Filters from '../Filters'
import { CardsList } from '../../views'
import { belwestLogo } from '../../images'
import { PATHS } from '../../const'

import style from './shops.module.scss'

const list = [
  {
    id: 'shop-1',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'shop-2',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'shop-3',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'shop-4',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'shop-5',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'shop-6',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'shop-7',
    image: belwestLogo,
    slug: 'detail'
  },
]

const Shops = () => {
  const { filters } = useStoreon('filters')
  
  return (
    <>
      <div className={style['shops-bgr']} />
      <Filters filters={filters.shops} />
      <CardsList list={list} baseUrl={PATHS.visitors_shops.path} />
    </>
  )
}

export default Shops