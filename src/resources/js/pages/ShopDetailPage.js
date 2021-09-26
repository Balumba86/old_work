import VisitorsDetail from '../components/VisitorsDetail'
import { Layout } from '../views'
import { PATHS } from '../const'
import api from '../api'

const ShopDetailPage = () => {
  return (
    <Layout>
      <VisitorsDetail
        baseUrl={PATHS.visitors_shops.path}
        linkLabel='К списку магазинов'
        api={api.getShopDetail}
        pathDetail={PATHS.shops_detail.path}
      />
    </Layout>
  )
}

export default ShopDetailPage