import { useEffect, useState } from 'react'
import classNames from 'classnames'
import MobileNav from '../MobileNav'
import HeaderNav from '../HeaderNav'
import Social from '../Social'
import { Icon } from '../../images'
import { PATHS } from '../../const'
import style from './header.module.scss'

const Header = () => {
  const [menuOpen, setMenuOpen] = useState(false)

  useEffect(() => {
    if(window) {
      window.addEventListener('resize', (e) => {
        if(window.innerWidth > 991.98) {
          setMenuOpen(false)
        }
      })
    }
  }, [window])

  const clickMenuBtn = (e) => {
    e.preventDefault();
    setMenuOpen(!menuOpen)
  }

  const menuBtnClasses = classNames({
    [style['header--mobile-btn']]: true,
    [style['header--mobile-btn_open']]: menuOpen
  })

  return (
    <>
      <header className={style.header}>
        <div className={style['header-top']}>
          <div className={style['header--mobile']}>
            <a className={style['header--mobile-logo']} />
            <a href='#' role='button' onClick={clickMenuBtn} className={menuBtnClasses}>
              <span></span>
            </a>
          </div>
          <div className={style['header-top__left']}>
            <a className={style['header-logo']}/>
            <div className={style['header-contacts__block_a']}>
              <a href={PATHS.scheme.path} className={style['header-contacts__link']}><Icon name='parking' />Парковка</a>
              <a href='tel:+78001015458' className={style['header-contacts__link']}><Icon name='phone' />+7 (800) 101-54-58</a>
            </div>
            <div className={style['header-contacts__block']}>
              <div className={style['header-contacts__time']}><Icon name='time' />9:00 - 21:00</div>
              <div className={style['header-contacts__address']}><Icon name='geo' />г. Иваново, пр. Ленина, 57А</div>
            </div>
          </div>
          <div className={style['header-top__right']}>
            <Social />
          </div>
        </div>
        <div className={style['header-bottom']}>
          <HeaderNav />
        </div>      
      </header>
      {menuOpen && <MobileNav />}
    </>
  )
}

export default Header