import { gallery, Icon } from '../../images'
import style from './detail.module.scss'

const DetailBlock = ({ baseUrl = '/', linkLabel = '', data = {} }) => {
  console.log(data, 'data', baseUrl, linkLabel)

// category:
// id: 6
// slug: "zenskaya-odezda"
// title: "Женская одежда"
// description: null
// hours_work: "09:00 - 21:00"
// id: 16
// images: [{…}]
// level: 1
// logo: "http://176.99.11.26/storage/shop/IpNMw8TC0egqT2YZZzMIsOgHoS87tw33JOoK8oaa.jpg"
// meta_description: "тест"
// meta_keywords: "тест"
// meta_title: "тест"
// phone: null
// point: "8"
// slug: "test8"
// title: "Тест8"
// website: null

  return (
    <section className={style['section']}>
      <a href={baseUrl} className={style['back-link']}>&#8592; {linkLabel}</a>
      <h2 className={style['detail-title']}>{data.title || ''}</h2>
      <div className={style['detail-content']}>
        <div className={style['detail-gallery']}>
          {data.images ? (
            <>
              <img src={gallery} alt='image' />
              <div className={style['detail-gallery__miniatures']}>
                <img src={gallery} alt='image' />
                <img src={gallery} alt='image' />
                <img src={gallery} alt='image' />
                <img src={gallery} alt='image' />
              </div>
            </>
          ) : (
            <div></div>
          )}
          
        </div>
        <div className={style['detail-info']}>
          {data.description && data.description !== '' && (
            <p className={style['detail-info_p']}>{data.description}</p>
          )}
          <div className={style['detail-contacts']}>
            {data.phone && (
              <span className={style['detail-contacts__item']}>
                <Icon name='phone' />
                {data.phone}
              </span>
            )}
            {data.hours_work && (
              <span className={style['detail-contacts__item']}>
                <Icon name='time' />
                {data.hours_work}
              </span>
            )}
            {data.level && (
              <span className={style['detail-contacts__item']}>
                <Icon name='geo' />
                {data.level} уровень
              </span>
            )}
          </div>
          <div className={style['detail-categories']}>
            Категории: <a href={`${baseUrl}/${data?.category?.slug || ''}`}>{data?.category?.title || ''}</a>
          </div>
        </div>
      </div>
    </section>
  )
}

export default DetailBlock