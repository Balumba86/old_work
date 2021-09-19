import InfiniteList from "../InfiniteList"
import Services from '../Services'

const ServicesList = () => {
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
          <Services results={results} status={'loaded'} showMore={showMore} />
        )
      }}
    </InfiniteList>
  )
}

export default ServicesList