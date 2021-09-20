import classNames from 'classnames'
import { useStoreon } from 'storeon/react'
import { NavLink, useLocation } from 'react-router-dom'
import Search from '../Search'
import { PATHS } from '../../const'

import style from './aside.module.scss'

const VisitorsNav = () => {
  const { filters } = useStoreon('filters')
  const location = useLocation()

  const subShops = classNames({
    [style['sub-menu']]: true,
    [style['visible']]: location.pathname === PATHS.visitors_shops.path
  })
  const subCafe = classNames({
    [style['sub-menu']]: true,
    [style['visible']]: location.pathname === PATHS.visitors_cafe.path
  })
  const subServices = classNames({
    [style['sub-menu']]: true,
    [style['visible']]: location.pathname === PATHS.visitors_services.path
  })

  return (
    <aside className={style['aside']}>
      <Search />
      <nav className={style['aside-nav']}>
        <ul className={style['aside-nav__list']}>
          <li className={style['aside-nav__item']}>
            <NavLink
              activeClassName={style['aside-nav__link_active']}
              className={style['aside-nav__link']}
              to={PATHS.visitors_shops.path}>
                Магазины
            </NavLink>
            <ul className={subShops}>
              {filters && filters.shops.map(item => (
                <li key={item.id} className={style['sub-menu__item']}>
                  <NavLink to={item.link} className={style['sub-menu__link']}>{item.label}</NavLink>
                </li>
              ))}
            </ul>
          </li>
          <li className={style['aside-nav__item']}>
            <NavLink
              activeClassName={style['aside-nav__link_active']}
              className={style['aside-nav__link']}
              to={PATHS.visitors_cafe.path}>
                Кафе и рестораны
            </NavLink>
            <ul className={subCafe}>
              {filters && filters.cafe.map(item => (
                <li key={item.id} className={style['sub-menu__item']}>
                  <NavLink to={item.link} className={style['sub-menu__link']}>{item.label}</NavLink>
                </li>
              ))}
            </ul>
          </li>
          <li className={style['aside-nav__item']}>
            <NavLink
              activeClassName={style['aside-nav__link_active']}
              className={style['aside-nav__link']}
              to={PATHS.visitors_services.path}>
                Сервисы и услуги
            </NavLink>
            <ul className={subServices}>
              {filters && filters.services.map(item => (
                <li key={item.id} className={style['sub-menu__item']}>
                  <NavLink to={item.link} className={style['sub-menu__link']}>{item.label}</NavLink>
                </li>
              ))}
            </ul>
          </li>
        </ul>
      </nav>
    </aside>
  )
}

export default VisitorsNav