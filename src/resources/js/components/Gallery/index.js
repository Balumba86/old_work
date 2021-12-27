import InfiniteList from "../InfiniteList"
import GalleryList from "./GalleryList"
import { LoaderPage, LoaderRing, MessageError } from '../../views'
import { LOADING_STATES } from '../../const'
import api from "../../api"
import style from './gallery.module.scss'

const Gallery = (props) => {
  return (
    <section className={style['gallery-section']}>
      <h2 className={style['gallery-title']}>Галерея</h2>
      <InfiniteList
        api={api.getGallery}
        initFilterParams={{ page: 1 }}
      >
        {({
          results = [],
          isNext,
          isPrev,
          currentPage,
          status,
          showMore,
          loadData,
          filterParams = {}
        }) => {
          return (
            <>
              {results.length > 0 ? (
                <GalleryList
                  results={results}
                  showMore={showMore}
                  isNext={isNext}
                  status={status}
                  {...props}
                />
              ) : null}
              {status === LOADING_STATES.loading && currentPage === 1 && (
                <LoaderPage />
              )}
              {status === LOADING_STATES.loading && currentPage > 1 && (
                <LoaderRing />
              )}
              {status === LOADING_STATES.failed && (
                <MessageError />
              )}
            </>
          )
        }}
      </InfiniteList>
    </section>
  )
}

export default Gallery