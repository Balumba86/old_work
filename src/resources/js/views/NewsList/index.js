import style from './news-list.module.scss'
import { belwestLogo, gallery, gallery2 } from '../../images'

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
    title: 'Только в сентябре в магазинах Belwest небывалые скидки! Только в сентябре в магазинах',
    link: ''
  },
  {
    id: 4,
    image: gallery,
    date: '26.08.2021',
    title: 'Только в сентябре',
    link: ''
  },
  {
    id: 5,
    image: belwestLogo,
    date: '20.08.2021',
    title: 'Только в сентябре в магазинах Belwest небывалые скидки!',
    link: ''
  },
  {
    id: 6,
    image: gallery2,
    date: '20.08.2021',
    title: 'Только в сентябре в магазинах Belwest небывалые скидки! Только в сентябре в магазинах',
    link: ''
  },
  {
    id: 7,
    image: gallery,
    date: '26.08.2021',
    title: 'Только в сентябре',
    link: ''
  },
  {
    id: 8,
    image: belwestLogo,
    date: '20.08.2021',
    title: 'Только в сентябре в магазинах Belwest небывалые скидки!',
    link: ''
  },
  {
    id: 9,
    image: gallery2,
    date: '20.08.2021',
    title: 'Только в сентябре в магазинах Belwest небывалые скидки! Только в сентябре в магазинах',
    link: ''
  }
]

const NewsList = ({ list = defaultList }) => {
  return (
    <>
      <h2 className={style['news-title']}>Новости</h2>
      <ul className={style['news-list']}>
        {list && list.map(item => (
          <li key={item.id} className={style['news-list__item']}>
            <a className={style['news-list__link']}>
              <img className={style['news-list__img']} width='300' height='400' src={item.image} alt='' />
              <time className={style['news-list__date']} dateTime={item.date}>{item.date}</time>
              <h3 className={style['news-list__title']}>{item.title}</h3>
            </a>
          </li>
        ))}
      </ul>
    </>
  )
}

export default NewsList;