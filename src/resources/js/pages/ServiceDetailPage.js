import ScrollingLayout from '../components/ScrollingLayout'
import VisitorsDetail from '../components/VisitorsDetail'
import { Layout } from '../views'
import { PATHS } from '../const'
import api from '../api'

const ServiceDetailPage = () => {
  return (
    <ScrollingLayout>
      {(props) => (
        <Layout>
          <VisitorsDetail
            baseUrl={PATHS.services.path}
            linkLabel='К списку сервисов и услуг'
            pathDetail={PATHS.services_detail.path}
            api={api.getServiceDetail}
            path_category={PATHS.services_category.path}
            {...props}
          />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default ServiceDetailPage