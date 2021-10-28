import { Swiper, SwiperSlide } from "swiper/react";
import SwiperCore, {
  Autoplay,
  Pagination,
  Navigation
} from 'swiper';

import "swiper/css";
import "swiper/css/pagination"
import "swiper/css/navigation"
import style from './banner.module.scss'
import classNames from "classnames";

SwiperCore.use([
  Autoplay,
  Pagination,
  Navigation
]);

const HomeBanner = ({ banners = [] }) => {
  const sectionClasses = classNames([style['section'], 'banners-slider'])
  
  return (
    <section className={sectionClasses}>
      <Swiper
        slidesPerView={1}
        loop={true}
        speed={500}
        pagination={{
          clickable: true
        }}
        navigation={true}
        autoplay={{
          delay: 5000,
        }}
        className={style['slider']}>
        {banners && banners.map((item, idx) => (
          <SwiperSlide key={`banner-${idx}`}>
            <img width='100%' src={item.path} />
          </SwiperSlide>
        ))}
        {!banners || banners.length === 0 ? (
          <SwiperSlide>
            <div style={{
              width: '100%',
              height: '100%',
              backgroundColor: 'rgba(155, 182, 162, 0.2)',
              display: 'flex',
              flexDirection: 'column',
              justifyContent: 'center',
              alignItems: 'center',
              color: '#403f3f'
            }}>
              <span>НОВЫЙ САЙТ ТЦ “НИКОЛЬСКИЙ”</span>
              <span>Новый дизайн</span>
              <span>Удобный интерфейс</span>
            </div>
          </SwiperSlide>
        ) : null}
      </Swiper>
    </section>
  )
}

export default HomeBanner