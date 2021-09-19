import InfiniteList from "../InfiniteList"
import { LoaderPage, NewsList } from "../../views"
import api from "../../api"

import style from './news.module.scss'
import { LOADING_STATES } from "../../const"

const News = () => {

  return ( 
    <InfiniteList api={api.getNewsList}>
      {({
        results = [],
        isNext,
        isPrev,
        currentPage,
        status,
        showMore
      }) => {
        return (
          <section className={style['section']}>
            {status === LOADING_STATES.loading ? <LoaderPage /> : null}
            {status === LOADING_STATES.loaded && results.length > 0 ? (
              <>
                <NewsList list={results} />
                {isNext ? (
                  <div>
                    <button onClick={showMore} type='button' className='link'>Загрузить еще</button>
                  </div>
                ) : null}
              </>
            ) : null}
            
          </section>
        )
      }}
    </InfiniteList>
  )
}

export default News