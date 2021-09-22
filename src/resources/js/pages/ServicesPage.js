import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import api from "../api"

const ServicesPage = () => {
  return (
    <VisitorsLayout title='Сервисы и услуги'>
      <VisitorsList
        api={api.getServicesList}
        initFilterParams={{
          page: 1,
          search: ''
        }}
        variant='services'
      />
    </VisitorsLayout>
  )
}

export default ServicesPage