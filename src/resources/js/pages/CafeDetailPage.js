import ScrollingLayout from '../components/ScrollingLayout'
import VisitorsDetail from '../components/VisitorsDetail'
import { Layout } from '../views'
import { PATHS } from '../const'
import api from '../api'

const CafeDetailPage = () => {
  return (
    <ScrollingLayout>
      {(props) => (
        <Layout>
          <VisitorsDetail
            baseUrl={PATHS.cafe.path}
            linkLabel='К списку кафе и ресторанов'
            api={api.getCafeDetail}
            path_category={PATHS.cafe_category.path}
            pathDetail={PATHS.cafe_detail.path}
            {...props}
          />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default CafeDetailPage