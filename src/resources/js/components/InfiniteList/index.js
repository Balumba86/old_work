import { useEffect, useState } from "react"
import { LOADING_STATES } from "../../const"

const InfiniteList = ({ api, children = null, initFilterParams = {} }) => {
  const [results, setResults] = useState([])
  const [filterParams, setFilterParams] = useState(initFilterParams)
  const [isNext, setIsNext] = useState(false)
  const [isPrev, setIsPrev] = useState(false)
  const [currentPage, setCurrentPage] = useState(1)
  const [status, setStatus] = useState(LOADING_STATES.loading)

  const getData = (fp = {}) => {
    setStatus(LOADING_STATES.loading)
    if(api) {
      api({ ...fp })
        .then(res => {
          const newRes = fp.page !== 1 ? [...results, ...res.results] : res.results
          setResults(newRes)
          setStatus(LOADING_STATES.loaded)
          setIsNext(Boolean(res.next))
          setIsPrev(Boolean(res.prev))
          setCurrentPage(res.currentPage)
        })
        .catch(err => {
          console.log(err)
          setStatus(LOADING_STATES.failed)
        })
    }
  }

  const loadData = (page = 1, params = {}) => {
    const fp = { ...filterParams, ...params, page }
    setFilterParams(fp)
    getData(fp)
  }

  useEffect(() => {
    setCurrentPage(filterParams.page || 1)
  }, [filterParams])

  useEffect(() => {
    getData(initFilterParams)
  }, [])

  const showMore = (e = null) => {
    if(e) {
      e.preventDefault()
    }
    if(isNext) {
      loadData(currentPage + 1, {})
      setCurrentPage(currentPage + 1)
    }
  }

  return (
    <>{children({
      results,
      isNext,
      isPrev,
      currentPage,
      status,
      filterParams,
      showMore,
      loadData
    })}</>
  )
}

export default InfiniteList