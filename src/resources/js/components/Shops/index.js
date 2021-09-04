import { CardsList } from '../../views'
import { belwestLogo } from '../../images'

import style from './shops.module.scss'

const list = [
  {
    id: 'shop-1',
    image: belwestLogo
  },
  {
    id: 'shop-2',
    image: belwestLogo
  },
  {
    id: 'shop-3',
    image: belwestLogo
  },
  {
    id: 'shop-4',
    image: belwestLogo
  },
  {
    id: 'shop-5',
    image: belwestLogo
  },
  {
    id: 'shop-6',
    image: belwestLogo
  },
  {
    id: 'shop-7',
    image: belwestLogo
  },
]

const Shops = () => {
  return (
    <>
      <div className={style['shops-bgr']} />
      {/* search */}
      <CardsList list={list} />
    </>
  )
}

export default Shops