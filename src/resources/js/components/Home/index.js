import { useEffect, useState } from 'react'
import { LOADING_STATES } from '../../const'
import { HomeBanner, LoaderPage, NewsBlock, ShopsBlock, Subscription } from '../../views'
import api from '../../api'

const Home = () => {
  const [loading, setLoading] = useState(LOADING_STATES.loading)
  const [banners, setBanners] = useState([])
  const [events, setEvents] = useState([])

  useEffect(() => {
    api.getHomeData()
      .then(({ data }) => {
        setLoading(LOADING_STATES.loaded)
        setBanners(data.banners || [])
        setEvents(data.news || [])
      })
      .catch(err => console.log(err, 'err home'))
  }, [])

  return (
    <>
      {loading === LOADING_STATES.loaded && (
        <>
          <HomeBanner banners={banners} />
          <NewsBlock list={events} />
          <ShopsBlock />
        </>
      )}
      {loading === LOADING_STATES.loading && (
        <LoaderPage />
      )}
    </>
  )
}

export default Home