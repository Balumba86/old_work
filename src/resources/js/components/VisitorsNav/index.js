import classNames from 'classnames'
import { useStoreon } from 'storeon/react'
import { NavLink, useLocation } from 'react-router-dom'
import Search from '../Search'
import { PATHS } from '../../const'

import style from './aside.module.scss'
import SubMenu from './SubMenu'

const VisitorsNav = () => {
  const { filters } = useStoreon('filters')
  const location = useLocation()

  const subShops = classNames({
    [style['sub-menu']]: true,
    [style['visible']]: filters && filters.shops.length > 0 && location.pathname.includes('shops')
  })
  const subCafe = classNames({
    [style['sub-menu']]: true,
    [style['visible']]: filters && filters.cafe.length > 0 && location.pathname.includes('cafe')
  })
  const subServices = classNames({
    [style['sub-menu']]: true,
    [style['visible']]: filters && filters.services.length > 0 && location.pathname.includes('services')
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
            <SubMenu itemsList={filters.shops} menuClasses={subShops} />
          </li>
          <li className={style['aside-nav__item']}>
            <NavLink
              activeClassName={style['aside-nav__link_active']}
              className={style['aside-nav__link']}
              to={PATHS.visitors_cafe.path}>
                Кафе и рестораны
            </NavLink>
            <SubMenu itemsList={filters.cafe} menuClasses={subCafe} />
          </li>
          <li className={style['aside-nav__item']}>
            <NavLink
              activeClassName={style['aside-nav__link_active']}
              className={style['aside-nav__link']}
              to={PATHS.visitors_services.path}>
                Сервисы и услуги
            </NavLink>
            <SubMenu itemsList={filters.services} menuClasses={subServices} />
          </li>
        </ul>
      </nav>
    </aside>
  )
}

export default VisitorsNav