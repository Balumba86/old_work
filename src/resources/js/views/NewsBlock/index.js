import { Link } from 'react-router-dom'
import { Swiper, SwiperSlide } from "swiper/react";
import SwiperCore, { Navigation } from 'swiper';
import { PATHS } from '../../const'

import "swiper/css";
import "swiper/css/navigation"
import style from './news.module.scss'

SwiperCore.use([
  Navigation
]);

const NewsBlock = ({ list = [] }) => {
  return (
    <section className={style['section']}>
      <h2 className={style['news-title']}>События</h2>

      <Swiper
        navigation={true}
        spaceBetween={20}
        breakpoints={{
          '359.98': {
            slidesPerView: 1,
          },
          '567.98': {
            slidesPerView: 2,
          },
          '991.98': {
            slidesPerView: 3,
          }
        }}
        className={style['news-list']}>
        {list && list.map((item) => {
          const path = `${PATHS.news.path}/${item.slug}`
          return (
          <SwiperSlide key={item.slug} className={style['news-list__item']}>
            <a href={path} onClick={() => handleClick(path, { slug: item.slug })} className={style['news-list__link']}>
              <img className={style['news-list__img']} width='300' height='400' src={item.main_img} alt='' />
              <time className={style['news-list__date']} dateTime={item.date}>{item.date}</time>
              <h3 className={style['news-list__title']}>{item.title}</h3>
            </a>
          </SwiperSlide>
        )})}
      </Swiper>
      <Link className='link' to={PATHS.news.path}>Перейти к списку событий</Link>
    </section>
  )
}

export default NewsBlock