import { Link } from 'react-router-dom'
import { PATHS } from '../../const'
import style from './footer-nav.module.scss'

const FooterNav = () => {
  return (
    <ul className={style['nav']}>
      <li className={style['nav-item']}>
        <Link className={style['nav-link']} to={PATHS.home.path}>Главная</Link>
      </li>
      <li className={style['nav-item']}>
        <Link className={style['nav-link']} to={PATHS.news.path}>События</Link>
      </li>
      <li className={style['nav-item']}>
        <Link className={style['nav-link']} to={PATHS.about.path}>О комплексе</Link>
      </li>
      <li className={style['nav-item']}>
        <Link className={style['nav-link']} to={PATHS.renter.path}>Арендаторам</Link>
      </li>
      <li className={style['nav-item']}>
        <Link className={style['nav-link']} to={PATHS.visitors_shops.path}>Магазины</Link>
      </li>
      <li className={style['nav-item']}>
        <Link className={style['nav-link']} to={'/'}>Вакансии</Link>
      </li>
      <li className={style['nav-item']}>
        <Link className={style['nav-link']} to={PATHS.visitors_cafe.path}>Кафе и рестораны</Link>
      </li>
      <li className={style['nav-item']}>
        <Link className={style['nav-link']} to={PATHS.contacts.path}>Контакты</Link>
      </li>
      <li className={style['nav-item']}>
        <Link className={style['nav-link']} to={PATHS.visitors_services.path}>Сервисы и услуги</Link>
      </li>
    </ul>
  )
}

export default FooterNav