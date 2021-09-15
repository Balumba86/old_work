import { useStoreon } from 'storeon/react'
import Filters from '../Filters'
import { CardsList } from '../../views'
import { belwestLogo } from '../../images'
import { PATHS } from '../../const'

import style from './services.module.scss'

const list = [
  {
    id: 'service-1',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'service-2',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'service-3',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'service-4',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'service-5',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'service-6',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'service-7',
    image: belwestLogo,
    slug: 'detail'
  },
]

const Services = () => {
  const { filters } = useStoreon('filters')

  return (
    <>
      <div className={style['services-bgr']} />
      <Filters filters={filters.services} />
      <CardsList list={list} baseUrl={PATHS.visitors_services.path} />
    </>
  )
}

export default Services