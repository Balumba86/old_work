import VisitorsDetail from '../components/VisitorsDetail'
import { Layout } from '../views'
import { PATHS } from '../const'

const ServiceDetailPage = () => {
  return (
    <Layout>
      <VisitorsDetail
        baseUrl={PATHS.visitors_services.path}
        linkLabel='К списку сервисов и услуг'
        pathDetail={PATHS.services_detail.path}
      />
    </Layout>
  )
}

export default ServiceDetailPage