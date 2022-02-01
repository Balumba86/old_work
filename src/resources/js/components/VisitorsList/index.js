import InfiniteList from "../InfiniteList"
import Visitors from "../Visitors"

const VisitorsList = ({
  api,
  initFilterParams = {},
  variant = null,
  ...props
}) => {
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
        filterParams = {}
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
            filterParams={filterParams}
            {...props}
          />
        )
      }}
    </InfiniteList>
  )
}

export default VisitorsList