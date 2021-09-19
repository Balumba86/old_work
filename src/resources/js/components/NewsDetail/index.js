import { useEffect, useState } from "react"
import { useLocation } from "react-router"
import api from "../../api";
import { LOADING_STATES } from "../../const";
import { LoaderPage } from "../../views";

const NewsDetail = () => {
  const [data, setData] = useState(null);
  const [loading, setLoading] = useState(LOADING_STATES.loading)
  const location = useLocation()

  useEffect(() => {
    if(!data && location) {
      const { state } = location
      api.getNewsDetail({ postSlug: state.slug })
        .then(res => {
          setLoading(LOADING_STATES.loaded)
          setData(res.data.text)
        })
        .catch(err => console.log(err, 'err'))
    }
  }, [location])

  return (
    <>
      {loading === LOADING_STATES.loaded ? (
        <section dangerouslySetInnerHTML={{__html: data}}></section>
      ) : null}
      {loading === LOADING_STATES.loading ? (
        <LoaderPage />
      ) : null}
    </>
  )
}

export default NewsDetail