import HeaderNav from '../HeaderNav'
import { Icon } from '../../images'
import style from './header.module.scss'

const Header = () => {

  return (
    <header className={style.header}>
      <div className={style['header-top']}>
        <div className={style['header-top__left']}>
          <a className={style['header-logo']}/>
          <div className={style['header-contacts__block_a']}>
            <a href='#' className={style['header-contacts__link']}><Icon name='scheme' />Схема ТЦ</a>
            <a href='#' className={style['header-contacts__link']}><Icon name='parking' />Парковка</a>
            <a href='#' className={style['header-contacts__link']}><Icon name='phone' />8 800 XXX XX XX</a>
          </div>
          <div className={style['header-contacts__block']}>
            <div className={style['header-contacts__time']}><Icon name='time' />9:00 - 21:00</div>
            <div className={style['header-contacts__address']}><Icon name='geo' />г. Иваново, пр. Ленина, 57А</div>
          </div>
        </div>
        <div className={style['header-top__right']}>
          <ul className={style['header-social']}>
            <li className={style['header-social__item']}>
              <a href='#' className={style['header-social__link']}>
                <Icon name='vk' />
              </a>
            </li>
            <li className={style['header-social__item']}>
              <a href='#' className={style['header-social__link']}>
                <Icon name='instagram' />
              </a>
            </li>
            <li className={style['header-social__item']}>
              <a href='#' className={style['header-social__link']}>
                <Icon name='ok' />
              </a>
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