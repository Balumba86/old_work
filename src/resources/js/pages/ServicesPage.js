import ServicesList from '../components/ServicesList'
import { VisitorsLayout } from '../views'

const ServicesPage = () => {
  return (
    <VisitorsLayout title='Сервисы и услуги'>
      <ServicesList />
    </VisitorsLayout>
  )
}

export default ServicesPage