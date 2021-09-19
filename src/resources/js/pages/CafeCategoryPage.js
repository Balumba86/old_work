import CafeCategoryList from "../components/CafeCategoryList"
import { VisitorsLayout } from "../views"

const CafeCategoryPage = () => {
  return (
    <VisitorsLayout title='Магазины'>
      <CafeCategoryList />
    </VisitorsLayout>
  )
}

export default CafeCategoryPage