import { useLocation } from "react-router"
import InfiniteList from "../InfiniteList"
import Services from "../Services"
import api from "../../api"

const ServicesCategoryList = () => {
  const location = useLocation()
  return (
    <InfiniteList
      api={api.getServicesCategorySlug}
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
          <Services isNext={isNext} loadData={loadData} results={results} status={status} showMore={showMore} />
        )
      }}
    </InfiniteList>
  )
}

export default ServicesCategoryList