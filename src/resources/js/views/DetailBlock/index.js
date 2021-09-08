import { gallery, Icon } from '../../images'
import style from './detail.module.scss'

const DetailBlock = ({ baseUrl = '/', linkLabel = '' }) => {

  return (
    <section className={style['section']}>
      <a href={baseUrl} className={style['back-link']}>&#8592; {linkLabel}</a>
      <h2 className={style['detail-title']}>Belwest</h2>
      <div className={style['detail-content']}>
        <div className={style['detail-gallery']}>
          <img src={gallery} alt='image' />
          <div className={style['detail-gallery__miniatures']}>
            <img src={gallery} alt='image' />
            <img src={gallery} alt='image' />
            <img src={gallery} alt='image' />
            <img src={gallery} alt='image' />
          </div>
        </div>
        <div className={style['detail-info']}>
          <p className={style['detail-info_p']}>
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
          </p>
          <div className={style['detail-contacts']}>
            <span className={style['detail-contacts__item']}>
              <Icon name='phone' />
              8 999 999 99 99
            </span>
            <span className={style['detail-contacts__item']}>
              <Icon name='time' />
              9:00 - 21:00
            </span>
            <span className={style['detail-contacts__item']}>
              <Icon name='geo' />
              1 уровень
            </span>
          </div>
          <div className={style['detail-categories']}>Категории: <a href='#'>category</a></div>
        </div>
      </div>
    </section>
  )
}

export default DetailBlock