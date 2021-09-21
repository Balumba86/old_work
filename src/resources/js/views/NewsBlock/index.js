import { Link } from 'react-router-dom'
import NewsList from '../NewsList'
import { PATHS } from '../../const'
import { belwestLogo, gallery, gallery2 } from '../../images'
import style from './news.module.scss'

const defaultList = [
  {
    id: 1,
    image: gallery,
    date: '26.08.2021',
    title: 'Только в сентябре',
    link: ''
  },
  {
    id: 2,
    image: belwestLogo,
    date: '20.08.2021',
    title: 'Только в сентябре в магазинах Belwest небывалые скидки!',
    link: ''
  },
  {
    id: 3,
    image: gallery2,
    date: '20.08.2021',
    title: 'Только в сентябре в магазинах Belwest небывалые скидки!',
    link: ''
  }
]

const NewsBlock = ({ list = [] }) => {
  console.log(list, 'list')
  return (
    <section className={style['section']}>
      <h2 className={style['news-title']}>События</h2>
      <ul className={style['news-list']}>
        {list && list.map((item) => {
          const path = `${PATHS.news.path}/${item.slug}`
          return (
          <li key={item.slug} className={style['news-list__item']}>
            <a href={path} onClick={() => handleClick(path, { slug: item.slug })} className={style['news-list__link']}>
              <img className={style['news-list__img']} width='300' height='400' src={item.main_img} alt='' />
              <time className={style['news-list__date']} dateTime={item.date}>{item.date}</time>
              <h3 className={style['news-list__title']}>{item.title}</h3>
            </a>
          </li>
        )})}
      </ul>
      <Link className='link' to={PATHS.news.path}>Перейти к списку событий</Link>
    </section>
  )
}

export default NewsBlock