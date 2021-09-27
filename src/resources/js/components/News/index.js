import InfiniteList from "../InfiniteList"
import NewsSection from "./NewsSection"
import api from "../../api"

const News = ({ isLoadMore = false }) => {

  return ( 
    <InfiniteList api={api.getNewsList}>
      {(props) => {
        return (
          <NewsSection
            isLoadMore={isLoadMore}
            {...props}
          />
        )
      }}
    </InfiniteList>
  )
}

export default News