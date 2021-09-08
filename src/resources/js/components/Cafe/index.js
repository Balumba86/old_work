import Filters from '../Filters'
import { CardsList } from '../../views'
import { belwestLogo } from '../../images'
import { PATHS } from '../../const'

import style from './cafe.module.scss'

const list = [
  {
    id: 'cafe-1',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'cafe-2',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'cafe-3',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'cafe-4',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'cafe-5',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'cafe-6',
    image: belwestLogo,
    slug: 'detail'
  },
  {
    id: 'cafe-7',
    image: belwestLogo,
    slug: 'detail'
  },
]

const Cafe = () => {
  return (
    <>
      <div className={style['cafe-bgr']} />
      <Filters />
      <CardsList list={list} baseUrl={PATHS.visitors_cafe.path} />
    </>
  )
}

export default Cafe