import { Swiper, SwiperSlide } from "swiper/react";
import SwiperCore, { Navigation, Thumbs } from 'swiper';
import { Link } from "react-router-dom";
import classNames from 'classnames';
import { PATHS } from "../../const";
import style from './gallery.module.scss'

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/thumbs";

SwiperCore.use([Navigation, Thumbs]);

const Gallery = ({ galleryList = [] }) => {
  const galleryClasses = classNames([style['gallery-list'], 'gallery'])
  return (
    <>
      {galleryList?.length ? (
        <section className={style['section']}>
          <h2 className={style['title']}>Галерея</h2>
          <Swiper
            className={galleryClasses}
            spaceBetween={10}
            freeMode={true}
            breakpoints={{
              320: {
                slidesPerView: 1
              },
              568: {
                slidesPerView: 2
              },
              992: {
                slidesPerView: 3
              }
            }}
            watchSlidesProgress={true}
            navigation={true}
          >
            {galleryList.map((el, idx) => {
              const key = `${el.type}-${idx}`
              if(el.type === 'video') {
                return (
                  <SwiperSlide key={key}>
                    <iframe
                      width='100%'
                      height='100%'
                      style={{ objectFit: 'cover'}}
                      controls={1}
                      src={el?.path}
                      allowFullScreen
                    />
                  </SwiperSlide>
                )
              }
              if(el.type === 'pic') {
                return (
                  <SwiperSlide key={key}>
                    <img
                      width='100%'
                      height='100%'
                      style={{ objectFit: 'cover'}}
                      key={key}
                      src={el?.path}
                      alt={el.alt}
                    />
                  </SwiperSlide>
                )
              }
            })}
          </Swiper>
          <Link className={style['gallery-link']} to={PATHS.gallery.path}>Перейти в галерею</Link>
        </section>
      ) : null}
    </>
  )
}

export default Gallery