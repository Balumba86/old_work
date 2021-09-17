import style from './news-list.module.scss'
import { gallery } from '../../images'
import { PATHS } from '../../const'

const defaultList = [
  {
    id: 1,
    image: gallery,
    date: '26.08.2021',
    title: 'Только в сентябре',
    link: 'detail'
  },
]

const NewsList = ({ list = [] }) => {
  return (
    <>
      <h2 className={style['news-title']}>Новости</h2>
      <ul className={style['news-list']}>
        {list && list.map((item, idx) => {
          const path = `${PATHS.news_detail.path}/${item.slug}`
          return (
          <li key={item.slug} className={style['news-list__item']}>
            <a href={path} className={style['news-list__link']}>
              <img className={style['news-list__img']} width='300' height='400' src={item.main_img} alt='' />
              <time className={style['news-list__date']} dateTime={item.date}>{item.date}</time>
              <h3 className={style['news-list__title']}>{item.title}</h3>
            </a>
          </li>
        )})}
      </ul>
    </>
  )
}

export default NewsList;