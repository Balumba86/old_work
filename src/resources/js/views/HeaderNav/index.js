import { NavLink, useLocation } from 'react-router-dom'
import { PATHS } from '../../const'
import style from './nav.module.scss'

const HeaderNav = () => {
  const location = useLocation()

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
            to={PATHS.scheme.path}
            className={style['nav-link']}
            activeClassName={style['nav-link_active']}>Карта ТЦ</NavLink>
        </li>
        <li className={style['nav-item']}>
          <NavLink
            to={PATHS.shops.path}
            className={style['nav-link']}
            activeClassName={style['nav-link_active']}>Магазины</NavLink>
        </li>
        <li className={style['nav-item']}>
          <NavLink
            to={PATHS.cafe.path}
            className={style['nav-link']}
            activeClassName={style['nav-link_active']}>Кафе и рестораны</NavLink>
        </li>
        <li className={style['nav-item']}>
          <NavLink
            to={PATHS.services.path}
            className={style['nav-link']}
            activeClassName={style['nav-link_active']}>Сервисы и услуги</NavLink>
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