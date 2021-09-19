import { useLocation } from "react-router"
import InfiniteList from "../InfiniteList"
import Cafe from "../Cafe"
import api from "../../api"

const CafeCategoryList = () => {
  const location = useLocation()
  return (
    <InfiniteList
      api={api.getCafeCategorySlug}
      initFilterParams={{
        page: 1,
        categorySlug: location.state.slug
      }}
      >
      {({
        results = [],
        isNext,
        status,
        showMore,
        loadData
      }) => {
        return (
          <Cafe isNext={isNext} loadData={loadData} results={results} status={status} showMore={showMore} />
        )
      }}
    </InfiniteList>
  )
}

export default CafeCategoryList