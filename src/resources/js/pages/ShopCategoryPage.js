import ShopsCategoryList from "../components/ShopsCategoryList"
import { VisitorsLayout } from "../views"

const ShopCategoryPage = () => {
  return (
    <VisitorsLayout title='Магазины'>
      <ShopsCategoryList />
    </VisitorsLayout>
  )
}

export default ShopCategoryPage