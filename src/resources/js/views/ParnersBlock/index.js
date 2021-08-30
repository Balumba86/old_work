import { shop1, shop2, shop3, shop4 } from '../../images'
import style from './parners.module.scss'

const ParnersBlock = () => {
  return (
    <section className={style['partners-section']}>
      <h2 className={style['partners-title']}>Наши партнеры</h2>
      <ul className={style['partners-list']}>
        <li className={style['partners-list__item']}>
          <a className={style['partners-list__link']}>
            <img className={style['partners-list__logo']} src={shop1} />
          </a>
        </li>
        <li className={style['partners-list__item']}>
          <a className={style['partners-list__link']}>
            <img className={style['partners-list__logo']} src={shop2} />
          </a>
        </li>
        <li className={style['partners-list__item']}>
          <a className={style['partners-list__link']}>
            <img className={style['partners-list__logo']} src={shop3} />
          </a>
        </li>
        <li className={style['partners-list__item']}>
          <a className={style['partners-list__link']}>
            <img className={style['partners-list__logo']} src={shop4} />
          </a>
        </li>
        <li className={style['partners-list__item']}>
          <a className={style['partners-list__link']}>
            <img className={style['partners-list__logo']} src={shop1} />
          </a>
        </li>
        <li className={style['partners-list__item']}>
          <a className={style['partners-list__link']}>
            <img className={style['partners-list__logo']} src={shop2} />
          </a>
        </li>
      </ul>
    </section>
  )
}

export default ParnersBlock;