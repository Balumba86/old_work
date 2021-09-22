import { useLocation } from "react-router"
import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import api from "../api"

const ServicesCategoryPage = () => {
  const location = useLocation()
  return (
    <VisitorsLayout title='Сервисы и услуги'>
      <VisitorsList
        api={api.getServicesCategorySlug}
        initFilterParams={{
          page: 1,
          categorySlug: location.state.slug
        }}
        variant='services'
      />
    </VisitorsLayout>
  )
}

export default ServicesCategoryPage