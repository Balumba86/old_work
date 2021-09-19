import InfiniteList from "../InfiniteList"
import Cafe from '../Cafe'

const CafeList = () => {
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
          <Cafe results={results} status={'loaded'} showMore={showMore} />
        )
      }}
    </InfiniteList>
  )
}

export default CafeList