
import { Carousel } from 'react-responsive-carousel'

import style from './banner.module.scss'
import "react-responsive-carousel/lib/styles/carousel.min.css"

const HomeBanner = ({ banners = [] }) => {
  return (
    <section className={style['section']}>
      <Carousel className={style['slider']}
        showIndicators={false}
        showThumbs={false}
        showStatus={false}
        autoPlay={true}
        infiniteLoop={true}
        interval={5000}
        showArrows={banners && banners.length > 1 ? true : false}
        // renderArrowPrev={() => <button className={classNames([style['slider-btn'], style['btn-prev']])} />}
        // renderArrowNext={() => <button className={classNames([style['slider-btn'], style['btn-next']])} />}
      >
        {banners && banners.map((item, idx) => (
          <img key={`banner-${idx}`} width='100%' src={item.path} />
        ))}
        {!banners || banners.length === 0 ? (
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
        ) : null}
      </Carousel>
    </section>
  )
}

export default HomeBanner