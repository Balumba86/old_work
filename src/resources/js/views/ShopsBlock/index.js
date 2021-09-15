import { shop1, shop2, shop3, shop4 } from '../../images'
import style from './shops.module.scss'

const ShopsBlock = () => {
  return (
    <>
      <section className={style['shops-section']}>
        <h2 className={style['shops-title']}>Магазины</h2>
        <ul className={style['shops-list']}>
          <li className={style['shops-list__item']}>
            <a className={style['shops-list__link']}>
              <img className={style['shops-list__logo']} src={shop1} />
            </a>
          </li>
          <li className={style['shops-list__item']}>
            <a className={style['shops-list__link']}>
              <img className={style['shops-list__logo']} src={shop2} />
            </a>
          </li>
          <li className={style['shops-list__item']}>
            <a className={style['shops-list__link']}>
              <img className={style['shops-list__logo']} src={shop3} />
            </a>
          </li>
          <li className={style['shops-list__item']}>
            <a className={style['shops-list__link']}>
              <img className={style['shops-list__logo']} src={shop4} />
            </a>
          </li>
          <li className={style['shops-list__item']}>
            <a className={style['shops-list__link']}>
              <img className={style['shops-list__logo']} src={shop1} />
            </a>
          </li>
          <li className={style['shops-list__item']}>
            <a className={style['shops-list__link']}>
              <img className={style['shops-list__logo']} src={shop2} />
            </a>
          </li>
        </ul>
      </section>
      <section>
        <div className={style.shadow} />
        <div className={style.bgr} />
      </section>
    </>
  )
}

export default ShopsBlock;