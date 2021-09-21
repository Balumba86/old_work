import api from "../../api"
import InfiniteList from "../InfiniteList"
import Shops from "../Shops"

const ShopsList = () => {
  return (
    <InfiniteList
      api={api.getShopList}
      initFilterParams={{
        page: 1,
      }}
    >
      {({
        results = [],
        isNext,
        isPrev,
        currentPage,
        status,
        showMore,
        loadData,
      }) => {
        return (
          <Shops loadData={loadData} isNext={isNext} currentPage={currentPage} results={results} status={status} showMore={showMore} />
        )
      }}
    </InfiniteList>
  )
}

export default ShopsList