import { useEffect, useState } from 'react'
import api from '../../api'
import { LOADING_STATES } from '../../const'
import { HomeBanner, LoaderPage, NewsBlock, ShopsBlock, Subscription } from '../../views'

const Home = () => {
  const [loading, setLoading] = useState(LOADING_STATES.loading)
  const [banners, setBanners] = useState([])
  const [events, setEvents] = useState([])
  const [shops, setShops] = useState([])

  useEffect(() => {
    api.getHomeData()
      .then(({ data }) => {
        setLoading(LOADING_STATES.loaded)
        setBanners(data.banners || [])
        setEvents(data.news || [])
        setShops(data.shops || [])
      })
      .catch(err => console.log(err, 'err home'))
  }, [])

  return (
    <>
      {loading === LOADING_STATES.loaded && (
        <>
          <HomeBanner banners={banners} />
          <NewsBlock list={events} />
          <Subscription />
          <ShopsBlock shops={shops} />
        </>
      )}
      {loading === LOADING_STATES.loading && (
        <LoaderPage />
      )}
    </>
  )
}

export default Home