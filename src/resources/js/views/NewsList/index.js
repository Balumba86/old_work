import classNames from 'classnames'
import { useHistory } from 'react-router'
import { NEWS_TYPES_TITLES, PATHS } from '../../const'

import style from './news-list.module.scss'

const NewsList = ({ list = [] }) => {
  const history = useHistory();

  const handleClick = (path, state) => {
    history.push({pathname: path, state})
  }

  return (
    <>
      <ul className={style['news-list']}>
        {list && list.map((item) => {
          const path = `${PATHS.news.path}/${item.slug}`
          const eventsClasses = classNames([style['news-list__type'], style[`event-${item.type}`]])
          return (
            <li key={item.slug} className={style['news-list__item']}>
              <a href={path} onClick={() => handleClick(path, { slug: item.slug })} className={style['news-list__link']}>
                <img className={style['news-list__img']} width='300' height='400' src={item.main_img} alt='' />
                <div className={eventsClasses}>{NEWS_TYPES_TITLES[item.type]}</div>
                <div className={style['news-list__content']}>
                  <h3 className={style['news-list__title']}>{item.title}</h3>
                  <div className={style['news-list__text']}>{item.text}</div>
                </div>
              </a>
            </li>
          // <li key={item.slug} className={style['news-list__item']}>
          //   <a href={path} onClick={() => handleClick(path, { slug: item.slug })} className={style['news-list__link']}>
          //     <img className={style['news-list__img']} width='300' height='400' src={item.main_img} alt='' />
          //     <time className={style['news-list__date']} dateTime={item.date}>{item.date}</time>
          //     <h3 className={style['news-list__title']}>{item.title}</h3>
          //   </a>
          // </li>
        )})}
      </ul>
    </>
  )
}

export default NewsList;