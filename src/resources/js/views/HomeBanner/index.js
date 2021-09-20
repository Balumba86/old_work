
import classNames from 'classnames'
import { Carousel } from 'react-responsive-carousel'
import { banner } from '../../images'

import style from './banner.module.scss'
import "react-responsive-carousel/lib/styles/carousel.min.css"

const HomeBanner = () => {
  return (
    <section className={style['section']}>
      <Carousel className={style['slider']}
        showIndicators={false}
        showThumbs={false}
        showStatus={false}
        autoPlay={true}
        infiniteLoop={true}
        interval={5000}
        showArrows={true}
        // renderArrowPrev={() => <button className={classNames([style['slider-btn'], style['btn-prev']])} />}
        // renderArrowNext={() => <button className={classNames([style['slider-btn'], style['btn-next']])} />}
      >
        <img width='100%' src={banner} />
        <img width='100%' src={banner} />
        <img width='100%' src={banner} />
      </Carousel>
    </section>
  )
}

export default HomeBanner