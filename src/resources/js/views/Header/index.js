import HeaderNav from '../HeaderNav'
import style from './header.module.scss'
const classNames = require('classnames')

const Header = () => {
  const vkClasses = classNames({
    [style['header-social__link']]: true,
    [style['link-vk']]: true
  })
  const instClasses = classNames({
    [style['header-social__link']]: true,
    [style['link-instagram']]: true
  })
  const okClasses = classNames({
    [style['header-social__link']]: true,
    [style['link-ok']]: true
  })

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
          <ul className={style['header-social']}>
            <li className={style['header-social__item']}>
              <a href='#' className={vkClasses} />
            </li>
            <li className={style['header-social__item']}>
              <a href='#' className={instClasses} />
            </li>
            <li className={style['header-social__item']}>
              <a href='#' className={okClasses} />
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