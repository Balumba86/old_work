import { Swiper, SwiperSlide } from "swiper/react";
import SwiperCore, { Navigation } from 'swiper';
// import { PATHS } from '../../const'

import style from './shops.module.scss'
import "swiper/css";
import "swiper/css/navigation"

SwiperCore.use([Navigation]);

const ShopsBlock = ({ shops = [] }) => {
  return (
    <>
    <section className={style['shops-section']}>
      {shops && shops.length > 0 ? (
        <>
          <h2 className={style['shops-title']}>Магазины</h2>
          <Swiper
            navigation={true}
            spaceBetween={10}
            slidesPerView={1}
            breakpoints={{
              '329.98': {
                slidesPerView: 1
              },
              '359.98': {
                slidesPerView: 2,
              },
              '567.98': {
                slidesPerView: 4,
              },
              '991.98': {
                slidesPerView: 6,
              }
            }}
            className={style['shops-list']}>
            {shops.map(el => (
              <SwiperSlide key={`shop-${el.slug}`} className={style['shops-list__item']}>
                <a className={style['shops-list__link']}>
                  <img className={style['shops-list__logo']} src={el.logo} />
                </a>
              </SwiperSlide>
            ))}
          </Swiper>
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