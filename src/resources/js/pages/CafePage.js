import ScrollingLayout from "../components/ScrollingLayout"
import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import api from "../api"

const CafePage = () => {
  return (
    <ScrollingLayout>
      {(props) => (
        <VisitorsLayout title='Кафе и рестораны'>
          <VisitorsList
            api={api.getCafeList}
            initFilterParams={{
              page: 1,
              search: ''
            }}
            variant='cafe'
            {...props}
          />
        </VisitorsLayout>
      )}
    </ScrollingLayout>
  )
}

export default CafePage