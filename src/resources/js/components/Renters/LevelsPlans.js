import { useEffect, useState } from 'react'
import SimpleReactLightbox, { SRLWrapper } from 'simple-react-lightbox'
import { LoaderRing, MessageError } from '../../views'
import { LOADING_STATES } from '../../const'
import api from '../../api'

import style from './renters.module.scss'

const LevelsPlans = () => {
  const [plans, setPlans] = useState([])
  const [archive, setArchive] = useState(null)
  const [loadingStatus, setLoadingStatus] = useState(LOADING_STATES.loading)

  useEffect(() => {
    api.getLevelsImages()
      .then(res => {
        setArchive(res?.data?.archive || null)
        setPlans(res?.data?.images || [])
        setLoadingStatus(LOADING_STATES.loaded)
      })
      .catch(err => {
        setLoadingStatus(LOADING_STATES.failed)
      })
  }, [])

  return (
    <div className={style['plans']}>
      <h3 className={style['block-title']}>Планы помещений</h3>
      {loadingStatus === LOADING_STATES.loading && <LoaderRing />}
      {loadingStatus === LOADING_STATES.loaded && (
        <>
          <SimpleReactLightbox>
            <SRLWrapper>
              <div className={style['plans-list']}>
                {plans && plans.map(img => (
                  <a key={`plan-${img.image_id}`} href={img.path}>
                    <img src={img.path} alt="" />
                  </a>
                ))}
              </div>
            </SRLWrapper>
          </SimpleReactLightbox>
          <a className={style['download-link']} download href={archive}>Скачать всю карту торгового центра</a>
        </>
      )}
      {loadingStatus === LOADING_STATES.failed && (
        <MessageError />
      )}
    </div>
  )
}

export default LevelsPlans