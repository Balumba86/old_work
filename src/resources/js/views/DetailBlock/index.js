import { useState } from 'react'
import { generatePath, useHistory } from 'react-router';
import { Link } from 'react-router-dom';
import { Swiper, SwiperSlide } from "swiper/react";
import SwiperCore, { Navigation, Thumbs } from 'swiper';
import { Icon } from '../../images'
import style from './detail.module.scss'

import "swiper/css";
import "swiper/css/navigation"
import "swiper/css/thumbs"
import classNames from 'classnames';

SwiperCore.use([Navigation, Thumbs]);

const DetailBlock = ({ baseUrl = '/', path_category = '/', linkLabel = '', data = {} }) => {
  const [thumbsSwiper, setThumbsSwiper] = useState(null);
  const history = useHistory();

  const goToPrevPage = e => {
    e.preventDefault()
    history.push(baseUrl)
  }

  const galleryClasses = classNames([style['gallery'], 'gallery'])

  return (
    <section className={style['section']}>
      <a onClick={goToPrevPage} className={style['back-link']}>&#8592; {linkLabel}</a>
      <h2 className={style['detail-title']}>{data.title || ''}</h2>
      <div className={style['detail-content']}>
        <div className={galleryClasses}>
          <Swiper thumbs={{ swiper: thumbsSwiper }} className={style['detail-gallery']} navigation={true} slidesPerView={1}>
            {data.images && data.images.length > 0 ? (
              <>
                {data.images.map(el => (
                  <SwiperSlide key={el.id}>
                    <img width='300' src={el.path} alt='image' />
                  </SwiperSlide>
                ))}
              </>
            ) : (
              <SwiperSlide>
                <img width='300' className={style['img-logo']} src={data.logo} alt='image' />
              </SwiperSlide>
            )}
          </Swiper>
          <Swiper
            className={style['gallery-miniatures']}
            spaceBetween={10}
            freeMode={true}
            watchSlidesProgress={true}
            onSwiper={setThumbsSwiper}
            navigation={true}
            slidesPerView={4}
          >
            {data.images && data.images.length > 0 ? (
              <>
                {data.images.map(el => (
                  <SwiperSlide key={el.id} className={style['gallery-miniatures__item']}>
                    <img src={el.path} alt='image' />
                  </SwiperSlide>
                ))}
              </>
            ) : null}
          </Swiper>
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
            Категории: <Link to={generatePath(path_category, { category: data?.category?.slug || '/' })}>
              {data?.category?.title || ''}
            </Link>
          </div>
        </div>
      </div>
    </section>
  )
}

export default DetailBlock