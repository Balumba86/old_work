import { CardsList } from '../../views'
import { belwestLogo } from '../../images'

import style from './cafe.module.scss'
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
      {/* search */}
      <CardsList list={list} />
    </>
  )
}

export default Cafe