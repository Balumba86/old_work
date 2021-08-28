import { banner } from '../../images'
import style from './banner.module.scss'

const HomeBanner = () => {
  return (
    <section className={style['section']}>
      {/* <p className={style['home-banner__subtitle']}>Ждёт новых посетителей</p> */}
      {/* TODO: gallery banners */}
      <img width='100%' src={banner} />
    </section>
  )
}

export default HomeBanner