import { useEffect, useState } from "react"
import { useLocation } from "react-router"
import { DetailBlock, LoaderPage } from "../../views"
import { LOADING_STATES, PATHS } from "../../const"

const VisitorsDetail = ({ baseUrl = '', api = null, linkLabel = '', pathDetail = '' }) => {
  const location = useLocation()
  const [data, setData] = useState({})
  const [isLoading, setLoading] = useState(null)

  useEffect(() => {
    setLoading(LOADING_STATES.loading)
    let slug = null

    if(location) {
      const { pathname } = location;
      slug = pathname.replace(pathDetail, '').replace('/', '')
    }
      
    if(api && slug) {
      api(slug)
        .then(res => {
          setLoading(LOADING_STATES.loaded)
          setData(res.data)
        })
        .catch(err => console.log(err))
    }
  }, [])

  return (
    <>
      <DetailBlock data={data} baseUrl={baseUrl} linkLabel={linkLabel} />
      {isLoading === LOADING_STATES.loading && (
        <LoaderPage />
      )}
    </>
  )
}

export default VisitorsDetail