import ScrollingLayout from "../components/ScrollingLayout"
import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import api from "../api"

const ShopsPage = () => {
  return (
    <ScrollingLayout>
      {(props) => (
        <VisitorsLayout title='Магазины'>
          <VisitorsList
            api={api.getShopList}
            initFilterParams={{
              page: 1,
              search: ''
            }}
            variant='shops'
            {...props}
          />
        </VisitorsLayout>
      )}
    </ScrollingLayout>
  )
}

export default ShopsPage