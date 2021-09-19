import ShopsList from '../components/ShopsList'
import { VisitorsLayout } from '../views'

const ShopsPage = () => {
  return (
    <VisitorsLayout title='Магазины'>
      <ShopsList />
    </VisitorsLayout>
  )
}

export default ShopsPage