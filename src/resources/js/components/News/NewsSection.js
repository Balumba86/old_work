import { useEffect } from "react"
import { LoaderPage, LoaderRing, MessageError, NewsList } from "../../views"
import { LOADING_STATES } from "../../const"
import style from './news.module.scss'

const NewsSection = ({
  results = [],
  isNext = false,
  isLoadMore = false,
  currentPage = 1,
  status = '',
  showMore = () => {}
}) => {

  useEffect(() => {
    if(isNext && isLoadMore && status !== LOADING_STATES.loading) {
      showMore()
    }
  }, [isLoadMore, isNext])

  return (
    <section className={style['section']}>
      <h2 className={style['news-title']}>События</h2>
      {status === LOADING_STATES.loading && currentPage === 1 && (
        <LoaderPage />
      )}
      {status === LOADING_STATES.loaded && results.length > 0 ? (
        <>
          <NewsList list={results} />
          {status === LOADING_STATES.loading && currentPage > 1 && (
            <LoaderRing />
          )}
        </>
      ) : null}
      {status === LOADING_STATES.failed && (
        <MessageError />
      )}
    </section>
  )
}

export default NewsSection