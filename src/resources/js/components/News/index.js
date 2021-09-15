import { useEffect } from "react"
import { NewsList } from "../../views"
import api from "../../api"

import style from './news.module.scss'

const News = () => {
  useEffect(() => {
    api.getNewsList({})
      .then(res => console.log(res))
      .catch(err => console.log(err))

  }, [])
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