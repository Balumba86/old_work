import InfiniteList from "../InfiniteList"
import Visitors from "../Visitors"

const VisitorsList = ({ api, initFilterParams = {}, variant = null }) => {
  return (
    <InfiniteList
      api={api}
      initFilterParams={initFilterParams}
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
          <Visitors
            loadData={loadData}
            isNext={isNext}
            currentPage={currentPage}
            results={results}
            status={status}
            showMore={showMore}
            variant={variant}
          />
        )
      }}
    </InfiniteList>
  )
}

export default VisitorsList