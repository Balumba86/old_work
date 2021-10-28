import classNames from 'classnames'
// import { Link } from 'react-router-dom'
import { NEWS_TYPES_TITLES, PATHS } from '../../const'

import style from './news.module.scss'

const NewsBlock = ({ list = [] }) => {
  return (
    <section className={style['section']}>
      <ul className={style['news-list']}>
        {list && list.map((item) => {
          const path = `${PATHS.news.path}/${item.slug}`
          const eventsClasses = classNames([style['news-list__type'], style[`event-${item.type}`]])
          return(
            <li key={item.slug} className={style['news-list__item']}>
              <a href={path} onClick={() => handleClick(path, { slug: item.slug })} className={style['news-list__link']}>
                <img className={style['news-list__img']} width='300' height='400' src={item.main_img} alt='' />
                <div className={eventsClasses}>{NEWS_TYPES_TITLES[item.type]}</div>
                <h3 className={style['news-list__title']}>{item.title}</h3>
              </a>
            </li>
          )
        })}
      </ul>
      {/* <Link className='link' to={PATHS.news.path}>Перейти к списку событий</Link> */}
    </section>
  )
}

export default NewsBlock