import ScrollingLayout from '../components/ScrollingLayout'
import VisitorsDetail from '../components/VisitorsDetail'
import { Layout } from '../views'
import { PATHS } from '../const'

const ServiceDetailPage = () => {
  return (
    <ScrollingLayout>
      {(props) => (
        <Layout>
          <VisitorsDetail
            baseUrl={PATHS.visitors_services.path}
            linkLabel='К списку сервисов и услуг'
            pathDetail={PATHS.services_detail.path}
            {...props}
          />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default ServiceDetailPage