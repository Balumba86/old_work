import { useEffect, useState } from "react"
import { useLocation } from "react-router"
import { LoaderPage } from "../../views";
import { LOADING_STATES, PATHS } from "../../const";
import api from "../../api";
import style from './detail-news.module.scss'

const NewsDetail = () => {
  const location = useLocation()
  const [data, setData] = useState(null);
  const [loading, setLoading] = useState(LOADING_STATES.loading)
  const [slug, setSlug] = useState(null)

  useEffect(() => {
    if(location && location.state) {
      setSlug(location.state.slug)
    } else {
      const { pathname } = location;
      const newSlug = pathname.replace(`${PATHS.news.path}`, '').replace('/', '')
      setSlug(newSlug)
    }
  }, [])

  useEffect(() => {
    if(!data && slug) {
      api.getNewsDetail({ postSlug: slug })
        .then(res => {
          setLoading(LOADING_STATES.loaded)
          setData(res.data)
        })
        .catch(({ response }) => console.log(response, 'err'))
    }
  }, [slug])

  console.log(data, 'check')

  return (
    <>
      {loading === LOADING_STATES.loaded && data ? (
        <section className={style['detail-news']}>
          <h2 className={style['detail-title']}>{data?.title || ''}</h2>
          <div dangerouslySetInnerHTML={{__html: data?.text || ''}} />
        </section>
      ) : null}
      {loading === LOADING_STATES.loading ? (
        <LoaderPage />
      ) : null}
    </>
  )
}

export default NewsDetail