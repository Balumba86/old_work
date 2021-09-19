import { useEffect, useState } from 'react'
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
    value: '/visitors/shops'
  },
  {
    id: 'cafe',
    label: 'Кафе и рестораны',
    link: PATHS.visitors_cafe.path,
    value: '/visitors/cafe'
  },
  {
    id: 'services',
    label: 'Сервисы и услуги',
    link: PATHS.visitors_services.path,
    value: '/visitors/services'
  }
]

const Filters = ({ filters = [], filterValue = undefined }) => {
  const location = useLocation();
  const [defaultPageValue, setValue] = useState(undefined)

  useEffect(() => {
    if(location.pathname) {
      let value = undefined
      optNav.forEach(el => {
        if(location.pathname.includes(el.value)) {
          value = el
        }
      })
      setValue(value)
    }
  }, [location.pathname])
  
  return (
    <div className={style['filters']}>
      <div className={style['filters-left']}>
        <Search />
      </div>
      <div className={style['filters-right']}>
        <div className={style['filters-select']}>
          <BaseSelect
            value={defaultPageValue}
            options={optNav}
            label='Раздел'
            id='page-select'
          />
        </div>
        <div className={style['filters-select']}>
          <BaseSelect value={filterValue} options={filters} placeholder='Выберите категорию' label='Категория' />
        </div>
      </div>
    </div>
  )
}

export default Filters