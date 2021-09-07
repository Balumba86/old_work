import { NewsList } from "../../views"
import style from './news.module.scss'

const News = () => {
  return (
    <section className={style['section']}>
      <NewsList />
      <div>
        <button type='button' className='link'>Загрузить еще</button>
      </div>
    </section>
  )
}

export default News