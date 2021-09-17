import InfiniteList from "../InfiniteList"
import { NewsList } from "../../views"
import api from "../../api"

import style from './news.module.scss'

const News = () => {

  return ( 
    <InfiniteList api={api.getNewsList}>
      {({
        results = [],
        isNext,
        isPrev,
        currentPage,
        showMore
      }) => {
        return (
          <section className={style['section']}>
            <NewsList list={results} />
            {isNext ? (
              <div>
                <button onClick={showMore} type='button' className='link'>Загрузить еще</button>
              </div>
            ) : null}
          </section>
        )
      }}
    </InfiniteList>
  )
}

export default News