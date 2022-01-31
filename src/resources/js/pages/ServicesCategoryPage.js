import { useEffect, useState } from "react"
import { useLocation } from "react-router"
import ScrollingLayout from "../components/ScrollingLayout"
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
      const newSlug = pathname.replace(`${PATHS.services.path}`, '').replace('/', '')
      setSlug(newSlug)
    }
  }, [])
  
  return (
    <ScrollingLayout>
      {(props) => (
        <VisitorsLayout title='Сервисы и услуги'>
          {slug && (
            <VisitorsList
              api={api.getServicesCategorySlug}
              initFilterParams={{
                page: 1,
                search: '',
                categorySlug: slug
              }}
              variant='services'
              {...props}
            />
          )}
        </VisitorsLayout>
      )}
    </ScrollingLayout>
  )
}

export default ServicesCategoryPage