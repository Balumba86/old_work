import classNames from 'classnames'
import { NavLink, useLocation } from 'react-router-dom'
import { PATHS } from '../../const'
import style from './nav.module.scss'

const HeaderNav = () => {
  const location = useLocation()

  const visitorsClasses = classNames({
    [style['nav-link']]: true,
    [style['nav-link_active']]: location.pathname.includes(PATHS.visitors.path)
  })

  return (
    <nav className={style.nav}>
      <ul className={style['nav-list']}>
        <li className={style['nav-item']}>
          <NavLink
            to={PATHS.home.path}
            className={style['nav-link']}
            activeClassName={location.pathname === PATHS.home.path ? style['nav-link_active'] : ''}>Главная</NavLink>
        </li>
        <li className={style['nav-item']}>
          <NavLink
            to={PATHS.about.path}
            className={style['nav-link']}
            activeClassName={style['nav-link_active']}>О комплексе</NavLink>
        </li>
        <li className={style['nav-item']}>
          <NavLink
            to={PATHS.visitors_shops.path}
            className={visitorsClasses}>Посетителям</NavLink>
        </li>
        <li className={style['nav-item']}>
          <NavLink
            to={PATHS.news.path}
            className={style['nav-link']}
            activeClassName={style['nav-link_active']}>События</NavLink>
        </li>
        <li className={style['nav-item']}>
          <NavLink
            to={PATHS.renter.path}
            className={style['nav-link']}
            activeClassName={style['nav-link_active']}>Арендаторам</NavLink>
        </li>
        <li className={style['nav-item']}>
          <NavLink
            to={PATHS.contacts.path}
            className={style['nav-link']}
            activeClassName={style['nav-link_active']}>Контакты</NavLink>
        </li>
      </ul>
    </nav>
  )
}

export default HeaderNav