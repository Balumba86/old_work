import Filters from '../Filters'
import { CardsList } from '../../views'
import { belwestLogo } from '../../images'

import style from './services.module.scss'

const list = [
  {
    id: 'service-1',
    image: belwestLogo
  },
  {
    id: 'service-2',
    image: belwestLogo
  },
  {
    id: 'service-3',
    image: belwestLogo
  },
  {
    id: 'service-4',
    image: belwestLogo
  },
  {
    id: 'service-5',
    image: belwestLogo
  },
  {
    id: 'service-6',
    image: belwestLogo
  },
  {
    id: 'service-7',
    image: belwestLogo
  },
]

const Services = () => {
  return (
    <>
      <div className={style['services-bgr']} />
      <Filters />
      <CardsList list={list} />
    </>
  )
}

export default Services