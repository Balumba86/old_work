import classNames from 'classnames'
import { NavLink, useLocation } from 'react-router-dom'
import { PATHS } from '../../const'

import style from './aside.module.scss'

const VisitorsNav = () => {
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
              <li className={style['sub-menu__item']}>
                <a className={style['sub-menu__link']}>Категория</a>
              </li>
              <li className={style['sub-menu__item']}>
                <a className={style['sub-menu__link']}>Категория</a>
              </li>
              <li className={style['sub-menu__item']}>
                <a className={style['sub-menu__link']}>Категория</a>
              </li>
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
              <li className={style['sub-menu__item']}>
                <a className={style['sub-menu__link']}>Категория</a>
              </li>
              <li className={style['sub-menu__item']}>
                <a className={style['sub-menu__link']}>Категория</a>
              </li>
              <li className={style['sub-menu__item']}>
                <a className={style['sub-menu__link']}>Категория</a>
              </li>
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
              <li className={style['sub-menu__item']}>
                <a className={style['sub-menu__link']}>Категория</a>
              </li>
              <li className={style['sub-menu__item']}>
                <a className={style['sub-menu__link']}>Категория</a>
              </li>
              <li className={style['sub-menu__item']}>
                <a className={style['sub-menu__link']}>Категория</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>
  )
}

export default VisitorsNav