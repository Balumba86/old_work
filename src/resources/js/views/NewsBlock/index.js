import { Link } from 'react-router-dom'
import { PATHS } from '../../const'
import { belwestLogo, gallery, gallery2 } from '../../images'
import style from './news.module.scss'

const NewsBlock = () => {
  return (
    <section className={style['news-section']}>
      <h2 className={style['news-title']}>Новости</h2>
      <ul className={style['news-list']}>
        <li className={style['news-list__item']}>
          <a className={style['news-list__link']}>
            <img className={style['news-list__img']} width='300' height='400' src={gallery} alt='' />
            <time className={style['news-list__date']} dateTime='26.08.2021'>26.08.2021</time>
            <h3 className={style['news-list__title']}>Только в сентябре</h3>
          </a>
        </li>
        <li className={style['news-list__item']}>
          <a className={style['news-list__link']}>
            <div className={style['news-list__img']}>
              <img width='300' height='400' src={belwestLogo} alt='' />
            </div>
            <time className={style['news-list__date']} dateTime='20.08.2021'>20.08.2021</time>
            <h3 className={style['news-list__title']}>Только в сентябре в магазинах Belwest небывалые скидки!</h3>
          </a>
        </li>
        <li className={style['news-list__item']}>
          <a className={style['news-list__link']}>
            <div className={style['news-list__img']}>
              <img width='300' height='400' src={gallery2} alt='' />
            </div>
            <time className={style['news-list__date']} dateTime='20.08.2021'>20.08.2021</time>
            <h3 className={style['news-list__title']}>Только в сентябре в магазинах Belwest небывалые скидки! Только в сентябре в магазинах Belwest! Belwes</h3>
          </a>
        </li>
      </ul>
      <Link className='link' to={PATHS.news.path}>Перейти к списку новостей</Link>
    </section>
  )
}

export default NewsBlock