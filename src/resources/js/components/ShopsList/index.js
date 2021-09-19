import InfiniteList from "../InfiniteList"
import Shops from "../Shops"

const ShopsList = () => {
  return (
    <InfiniteList>
      {({
        results = [],
        isNext,
        isPrev,
        currentPage,
        status,
        showMore
      }) => {
        return (
          <Shops results={results} status={'loaded'} showMore={showMore} />
        )
      }}
    </InfiniteList>
  )
}

export default ShopsList