import { CardsList } from '../../views'
import { belwestLogo } from '../../images'

import style from './cafe.module.scss'
import Filters from '../Filters'
const list = [
  {
    id: 'cafe-1',
    image: belwestLogo
  },
  {
    id: 'cafe-2',
    image: belwestLogo
  },
  {
    id: 'cafe-3',
    image: belwestLogo
  },
  {
    id: 'cafe-4',
    image: belwestLogo
  },
  {
    id: 'cafe-5',
    image: belwestLogo
  },
  {
    id: 'cafe-6',
    image: belwestLogo
  },
  {
    id: 'cafe-7',
    image: belwestLogo
  },
]


const Cafe = () => {
  return (
    <>
      <div className={style['cafe-bgr']} />
      <Filters />
      <CardsList list={list} />
    </>
  )
}

export default Cafe