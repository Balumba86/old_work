import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import api from "../api"

const ShopsPage = () => {
  return (
    <VisitorsLayout title='Магазины'>
      <VisitorsList
        api={api.getShopList}
        initFilterParams={{
          page: 1,
          search: ''
        }}
        variant='shops'
      />
    </VisitorsLayout>
  )
}

export default ShopsPage