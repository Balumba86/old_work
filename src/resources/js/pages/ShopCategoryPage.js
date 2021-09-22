import { useLocation } from "react-router"
import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import api from "../api"

const ShopCategoryPage = () => {
  const location = useLocation()
  return (
    <VisitorsLayout title='Магазины'>
      <VisitorsList
        api={api.getShopsCategorySlug}
        initFilterParams={{
          page: 1,
          categorySlug: location.state.slug
        }}
        variant='shops'
      />
    </VisitorsLayout>
  )
}

export default ShopCategoryPage