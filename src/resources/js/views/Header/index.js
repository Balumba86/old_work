import HeaderNav from '../HeaderNav'
import { logoNav } from '../../images'
import style from './header.module.scss'

const Header = () => {
  return (
    <header className={style.header}>
      <div className={style['header-top']}>
        <div className={style['header-top__left']}>
          <a className={style['header-logo']}/>
          <a href='#' className={style['header-contacts__link']}>Схема ТЦ</a>
          <a href='#' className={style['header-contacts__link']}>Парковка</a>
          <a href='#' className={style['header-contacts__link']}>8 800 XXX XX XX</a>
          <div className={style['header-contacts__phone']}>9:00 - 21:00</div>
          <div className={style['header-contacts__address']}>г. Иваново, пр. Ленина, 57А</div>
        </div>
        <div className={style['header-top__right']}>
          <ul className={style['header-contacts__social']}>
            <li>
              <a>VK</a>
            </li>
            <li>
              <a>Instagram</a>
            </li>
            <li>
              <a>OK</a>
            </li>
          </ul>
        </div>
      </div>
      <div className={style['header-bottom']}>
        <HeaderNav />
      </div>      
    </header>
  )
}

export default Header