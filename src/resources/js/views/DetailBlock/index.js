import { useState } from 'react'
import { gallery, Icon } from '../../images'
import { Swiper, SwiperSlide } from "swiper/react";
import SwiperCore, { Navigation, Thumbs } from 'swiper';

import style from './detail.module.scss'
import "swiper/css";
import "swiper/css/navigation"
import "swiper/css/thumbs"

SwiperCore.use([Navigation, Thumbs]);

const DetailBlock = ({ baseUrl = '/', linkLabel = '', data = {} }) => {
  const [thumbsSwiper, setThumbsSwiper] = useState(null);
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
        <div className={style['gallery']}>
          <Swiper thumbs={{ swiper: thumbsSwiper }} className={style['detail-gallery']} navigation={true} slidesPerView={1}>
            <SwiperSlide><img width='300' src={gallery} alt='image' /></SwiperSlide>
            <SwiperSlide><img width='300' src={gallery} alt='image' /></SwiperSlide>
            <SwiperSlide><img width='300' src={gallery} alt='image' /></SwiperSlide>
            <SwiperSlide><img width='300' src={gallery} alt='image' /></SwiperSlide>
          </Swiper>
          <Swiper className={style['gallery-miniatures']} spaceBetween={10} freeMode={true} watchSlidesProgress={true} onSwiper={setThumbsSwiper} navigation={true}
          slidesPerView={4}
          >
            <SwiperSlide className={style['gallery-miniatures__item']}><img src={gallery} alt='image' /></SwiperSlide>
            <SwiperSlide className={style['gallery-miniatures__item']}><img src={gallery} alt='image' /></SwiperSlide>
            <SwiperSlide className={style['gallery-miniatures__item']}><img src={gallery} alt='image' /></SwiperSlide>
            <SwiperSlide className={style['gallery-miniatures__item']}><img src={gallery} alt='image' /></SwiperSlide>
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
            Категории: <a href={`${baseUrl}/${data?.category?.slug || ''}`}>{data?.category?.title || ''}</a>
          </div>
        </div>
      </div>
    </section>
  )
}

export default DetailBlock