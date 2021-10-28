import ScrollingLayout from '../components/ScrollingLayout'
import VisitorsDetail from '../components/VisitorsDetail'
import { Layout } from '../views'
import { PATHS } from '../const'
import api from '../api'

const ShopDetailPage = () => {
  return (
    <ScrollingLayout>
      {(props) => (
        <Layout>
          <VisitorsDetail
            baseUrl={PATHS.shops.path}
            linkLabel='К списку магазинов'
            api={api.getShopDetail}
            pathDetail={PATHS.shops_detail.path}
            {...props}
          />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default ShopDetailPage