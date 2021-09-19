import ServicesCategoryList from "../components/ServicesCategoryList"
import { VisitorsLayout } from "../views"

const ServicesCategoryPage = () => {
  return (
    <VisitorsLayout title='Магазины'>
      <ServicesCategoryList />
    </VisitorsLayout>
  )
}

export default ServicesCategoryPage