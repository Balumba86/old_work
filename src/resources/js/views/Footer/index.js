import FooterNav from '../FooterNav'
import Social from '../Social'
import { Icon } from '../../images'
import style from './footer.module.scss'

const Footer = () => {
  return (
    <footer className={style.footer}>
      <div className={style['footer-wrapper']}>
        <div className={style['footer-main']}>
          <FooterNav />
          <div>
            <div className={style['footer-contacts']}><Icon name='geo' />г. Иваново, пр. Ленина, 57А</div>
            <div className={style['footer-contacts']}><Icon name='time' />9:00 - 21:00</div>
            <div className={style['footer-contacts']}><Icon name='phone' />+7 (800) 101-54-58</div>
          </div>
          <Social variant='footer-social' />
        </div>
        <div className={style['footer-copyright']}>ТЦ НИКОЛЬСКИЙ &copy; 2021 / ВСЕ ПРАВА ЗАЩИЩЕНЫ.</div>
      </div>
    </footer>
  )
}

export default Footer