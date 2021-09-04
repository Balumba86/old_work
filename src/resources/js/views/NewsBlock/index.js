import { Link } from 'react-router-dom'
import NewsList from '../NewsList'
import { PATHS } from '../../const'
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
    title: 'Только в сентябре в магазинах Belwest небывалые скидки!',
    link: ''
  }
]

const NewsBlock = () => {
  return (
    <section className='section'>
      <NewsList list={defaultList} />
      <Link className='link' to={PATHS.news.path}>Перейти к списку новостей</Link>
    </section>
  )
}

export default NewsBlock