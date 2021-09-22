import { useLocation } from "react-router"
import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import api from "../api"

const CafeCategoryPage = () => {
  const location = useLocation()
  return (
    <VisitorsLayout title='Кафе и рестораны'>
      <VisitorsList
        api={api.getCafeCategorySlug}
        initFilterParams={{
          page: 1,
          categorySlug: location.state.slug
        }}
        variant='cafe'
      />
    </VisitorsLayout>
  )
}

export default CafeCategoryPage