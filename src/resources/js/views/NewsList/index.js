import { useHistory } from 'react-router'
import { PATHS } from '../../const'

import style from './news-list.module.scss'

const NewsList = ({ list = [] }) => {
  const history = useHistory();

  const handleClick = (path, state) => {
    history.push({pathname: path, state})
  }

  return (
    <>
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
    </>
  )
}

export default NewsList;