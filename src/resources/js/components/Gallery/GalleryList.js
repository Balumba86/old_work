import { useEffect } from 'react'
import SimpleReactLightbox, { SRLWrapper } from 'simple-react-lightbox'
import { LOADING_STATES } from '../../const'
import style from './gallery.module.scss'

const GalleryList = ({ results = [], isNext, isLoadMore, status, showMore }) => {
  useEffect(() => {
    if(isNext && isLoadMore && status !== LOADING_STATES.loading) {
      showMore()
    }
  }, [isLoadMore, isNext])

  return (
    <SimpleReactLightbox>
      <SRLWrapper>
        <div className={style['gallery-list']}>
          {results?.length ? (
            <>
              {results.map((el, idx) => {
                const key = `${el.type}-${idx}`
                if(el.type === 'video') {
                  return (
                    <a key={key} href={el?.path}>
                      <iframe controls={1} src={el?.path} allowFullScreen />
                    </a>
                  )
                }
                if(el.type === 'pic') {
                  return (
                    <a key={key} href={el?.path}>
                      <img src={el?.path} alt="" />
                    </a>
                  )
                }
              })}
            </>
          ) : null}
        </div>
      </SRLWrapper>
    </SimpleReactLightbox>
  )
}

export default GalleryList