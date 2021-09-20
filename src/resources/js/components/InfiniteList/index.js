import { useEffect, useState } from "react"

const InfiniteList = ({ api, children = null, initFilterParams = {} }) => {
  const [results, setResults] = useState([])
  const [filterParams, setFilterParams] = useState(initFilterParams)
  const [isNext, setIsNext] = useState(false)
  const [isPrev, setIsPrev] = useState(false)
  const [currentPage, setCurrentPage] = useState(1)

  const getData = () => {
    api(filterParams)
      .then(res => {
        setResults([...results, ...res.results])
        setIsNext(Boolean(res.next))
        setIsPrev(Boolean(res.prev))
        setCurrentPage(res.currentPage)
      })
      .catch(err => console.log(err))
  }

  useEffect(() => {
    getData()
  }, [])

  useEffect(() => {
    getData()
  }, [filterParams])

  const showMore = () => {
    if(isNext) {
      setFilterParams({ page: currentPage + 1 })
    }
  }

  return (
    <>{children({
      results,
      isNext,
      isPrev,
      currentPage,
      showMore
    })}</>
  )
}

export default InfiniteList