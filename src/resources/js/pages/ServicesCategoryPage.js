import { useEffect, useState } from "react"
import { useLocation } from "react-router"
import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import { PATHS } from "../const"
import api from "../api"

const ServicesCategoryPage = () => {
  const location = useLocation()
  const [slug, setSlug] = useState(null)

  useEffect(() => {
    if(location && location.state) {
      setSlug(location.state.slug)
    } else {
      const { pathname } = location;
      const newSlug = pathname.replace(`${PATHS.visitors_services.path}`, '').replace('/', '')
      setSlug(newSlug)
    }
  }, [])
  
  return (
    <VisitorsLayout title='Сервисы и услуги'>
      {slug && (
        <VisitorsList
          api={api.getServicesCategorySlug}
          initFilterParams={{
            page: 1,
            categorySlug: slug
          }}
          variant='services'
        />
      )}
    </VisitorsLayout>
  )
}

export default ServicesCategoryPage