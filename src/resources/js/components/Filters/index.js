import { useLocation } from 'react-router'
import { PATHS } from '../../const'
import { BaseSelect } from '../../views'
import Search from '../Search'
import style from './filters.module.scss'

const optNav = [
  {
    id: 'shops',
    label: 'Магазины',
    link: PATHS.visitors_shops.path,
    value: '/shops'
  },
  {
    id: 'cafe',
    label: 'Кафе и рестораны',
    link: PATHS.visitors_cafe.path,
    value: '/cafe'
  },
  {
    id: 'services',
    label: 'Сервисы и услуги',
    link: PATHS.visitors_services.path,
    value: '/services'
  }
]

const Filters = () => {
  const location = useLocation();
console.log(location)
  return (
    <div className={style['filters']}>
      <div className={style['filters-right']}>
        <Search />
      </div>
      <div className={style['filters-left']}>
        <div className={style['filters-select']}>
          <BaseSelect value={location.pathname} options={optNav} label='Раздел' id='page-select' />
        </div>
        <div className={style['filters-select']}>
          <BaseSelect label='Категория' />
        </div>
      </div>
    </div>
  )
}

export default Filters