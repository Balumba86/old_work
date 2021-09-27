import ScrollingLayout from '../components/ScrollingLayout'
import VisitorsDetail from '../components/VisitorsDetail'
import { Layout } from '../views'
import { PATHS } from '../const'

const CafeDetailPage = () => {
  return (
    <ScrollingLayout>
      {() => (
        <Layout>
          <VisitorsDetail
            baseUrl={PATHS.visitors_cafe.path}
            linkLabel='К списку кафе и ресторанов'
            pathDetail={PATHS.cafe_detail.path}
          />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default CafeDetailPage