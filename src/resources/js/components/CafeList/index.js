import InfiniteList from "../InfiniteList"
import Cafe from '../Cafe'
import api from "../../api"

const CafeList = () => {
  return (
    <InfiniteList
      api={api.getCafeList}
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
        showMore
      }) => {
        return (
          <Cafe results={results} status={'loaded'} showMore={showMore} />
        )
      }}
    </InfiniteList>
  )
}

export default CafeList