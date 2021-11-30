import FooterNav from '../FooterNav'
import Social from '../Social'
import { Icon } from '../../images'
import style from './footer.module.scss'
import { useState } from 'react'
import classNames from 'classnames'
import SubscriptionForm from '../../components/SubscriptionForm'

const Footer = () => {
  const [isShow, setShow] = useState(null)

  const handleClickLink = (e, { currentBlock = null }) => {
    e.preventDefault();
    if(isShow === currentBlock) {
      setShow(null)
    } else {
      setShow(currentBlock)
    }
  }

  const menuClasses = classNames({
    [style['footer-container']]: true,
    [style['show']]: isShow === 'menu'
  })

  const contactsClasses = classNames({
    [style['footer-container']]: true,
    [style['show']]: isShow === 'contacts'
  })

  return (
    <footer className={style.footer}>
      <div className={style['footer-wrapper']}>
        <div className={style['footer-main']}>
          <div className={menuClasses}>
            <a onClick={e => handleClickLink(e, { currentBlock: 'menu'})} role='button' href='#' className={style['mobile-btn']}>Меню</a>
            <div className={style['footer-block']}>
              <FooterNav />
            </div>
          </div>
          <div className={contactsClasses}>
            <a onClick={e => handleClickLink(e, { currentBlock: 'contacts'})} role='button' href='#' className={style['mobile-btn']}>Контакты</a>
            <div className={classNames([style['footer-block'], style['contacts-overlay']])}>
              <div>
                <Social variant='footer-social' />
                <div className={style['footer-contacts']}><Icon name='geo' />г. Иваново, пр. Ленина, 57А</div>
                <div className={style['footer-contacts']}><Icon name='time' />9:00 - 21:00</div>
                <div className={style['footer-contacts']}><Icon name='phone' />+7 (800) 101-54-58</div>
              </div>
              <SubscriptionForm />
            </div>
          </div>          
        </div>
        <div className={style['footer-copyright']}>ТЦ НИКОЛЬСКИЙ &copy; 2021 / ВСЕ ПРАВА ЗАЩИЩЕНЫ.</div>
      </div>
    </footer>
  )
}

export default Footer