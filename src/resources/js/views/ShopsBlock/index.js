import { shop1 } from '../../images'
import style from './shops.module.scss'

const ShopsBlock = ({ shops = [] }) => {
  return (
    <>
    <section className={style['shops-section']}>
      {shops && shops.length > 0 ? (
        <>
          <h2 className={style['shops-title']}>Магазины</h2>
          <ul className={style['shops-list']}>
            {shops.map(el => (
              <li className={style['shops-list__item']}>
                <a className={style['shops-list__link']}>
                  <img className={style['shops-list__logo']} src={shop1} />
                </a>
              </li>
            ))}
          </ul>
        </>      
      ) : null}
       </section>
      <section style={{overflow: 'hidden'}}>
        <div className={style.shadow} />
        <div className={style.bgr} />
      </section>
    </>
  )
}

export default ShopsBlock;