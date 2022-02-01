import { useEffect, useState } from "react"
import { useLocation } from "react-router"
import { DetailBlock, LoaderPage } from "../../views"
import { LOADING_STATES } from "../../const"

const VisitorsDetail = ({ api = null, ...props }) => {
  const location = useLocation();
  const [data, setData] = useState({})
  const [isLoading, setLoading] = useState(null)

  useEffect(() => {
    setLoading(LOADING_STATES.loading)
    let slug = null
    
    if(location) {
      const { pathname, state } = location;
      const startIndex = pathname.lastIndexOf('/')
      slug = state?.slug || pathname.slice(startIndex + 1)
    }
    if(api && slug && Object.keys(data).length === 0) {
      api(slug)
        .then(res => {
          setLoading(LOADING_STATES.loaded)
          setData(res.data)
        })
        .catch(err => console.log(err))
    }
  }, [location])

  return (
    <>
      <DetailBlock data={data} {...props} />
      {isLoading === LOADING_STATES.loading && (
        <LoaderPage />
      )}
    </>
  )
}

export default VisitorsDetail