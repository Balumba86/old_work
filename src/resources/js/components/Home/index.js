import { useEffect, useState } from 'react'
import SwiperCore, { Navigation, Thumbs } from 'swiper';
import { LOADING_STATES } from '../../const'
import { HomeBanner, LoaderPage, NewsBlock, ShopsBlock } from '../../views'
import api from '../../api'

import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/thumbs";
import Gallery from './Gallery';

SwiperCore.use([Navigation, Thumbs]);

const Home = () => {
  const [loading, setLoading] = useState(LOADING_STATES.loading)
  const [banners, setBanners] = useState([])
  const [events, setEvents] = useState([])
  const [galleryList, setGalleryList] = useState([])

  useEffect(() => {
    api.getHomeData()
      .then(({ data }) => {
        setLoading(LOADING_STATES.loaded)
        setBanners(data.banners || [])
        setEvents(data.news || [])
      })
      .catch(err => console.log(err, 'err home'))
      api.getGalleryHome()
        .then(res => setGalleryList(res?.data?.data || []))
        .catch(err => console.log(err, 'gallery'))
  }, [])

  return (
    <>
      {loading === LOADING_STATES.loaded && (
        <>
          <HomeBanner banners={banners} />
          <NewsBlock list={events} />
          <Gallery galleryList={galleryList} />
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