import { useLocation } from "react-router"
import InfiniteList from "../InfiniteList"
import Shops from "../Shops"
import api from "../../api"

const ShopsCategoryList = () => {
  const location = useLocation()
  return (
    <InfiniteList
      api={api.getShopsCategorySlug}
      initFilterParams={{
        page: 1,
        search: '',
        categorySlug: location.state.slug
      }}
      >
      {({
        results = [],
        isNext,
        status,
        showMore,
        loadData,
        currentPage
      }) => {
        console.log(results, 'results', currentPage)
        return (
          <Shops isNext={isNext} currentPage={currentPage} loadData={loadData} results={results} status={status} showMore={showMore} />
        )
      }}
    </InfiniteList>
  )
}

export default ShopsCategoryList