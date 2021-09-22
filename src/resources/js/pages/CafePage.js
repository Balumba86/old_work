import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import api from "../api"

const CafePage = () => {
  return (
    <VisitorsLayout title='Кафе и рестораны'>
      <VisitorsList
        api={api.getCafeList}
        initFilterParams={{
          page: 1,
          search: ''
        }}
        variant='cafe'
      />
    </VisitorsLayout>
  )
}

export default CafePage