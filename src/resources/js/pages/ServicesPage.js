import ScrollingLayout from "../components/ScrollingLayout"
import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import api from "../api"

const ServicesPage = () => {
  return (
    <ScrollingLayout>
      {(props) => (
        <VisitorsLayout title='Сервисы и услуги'>
          <VisitorsList
            api={api.getServicesList}
            initFilterParams={{
              page: 1,
              search: ''
            }}
            variant='services'
            {...props}
          />
        </VisitorsLayout>
      )}
    </ScrollingLayout>
  )
}

export default ServicesPage