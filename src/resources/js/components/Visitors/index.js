import { useEffect, useState } from 'react'
import { useLocation } from 'react-router'
import { useStoreon } from 'storeon/react'
import Filters from '../Filters'
import { CardsList, LoaderPage, LoaderRing, MessageError, MessageNotResults } from '../../views'
import { LOADING_STATES, NOT_DATA_VISITORS, PATHS } from '../../const'
import classNames from 'classnames'

import style from './visitors.module.scss'

const Visitors = ({ 
  results = [],
  status,
  isNext,
  showMore = () => {},
  loadData = () => {},
  currentPage,
  variant = null,
  filterParams = {},
  isLoadMore = false,
}) => {
  const [slug, setSlug] = useState(null)
  const [filterValue, setFilterValue] = useState(undefined)
  const location = useLocation()
  const { filters } = useStoreon('filters')

  console.log(variant, 'check');

  useEffect(() => {
    if(location && location.state) {
      if(!slug) {
        setSlug(location.state.slug)
      }
      if(slug && slug !== location.state.slug) {
        loadData(1, { categorySlug: location.state.slug })
        setSlug(location.state.slug)
      }      
    }
  }, [location.state])

  useEffect(() => {
    if(location && location.state && filters) {
      filters[variant].find(el => {
        if(el.value === location.state.slug) {
          setFilterValue(el)
        }
      })
    }
  }, [location, filters])

  useEffect(() => {
    if(isNext && isLoadMore && status !== LOADING_STATES.loading) {
      showMore()
    }
  }, [isLoadMore, isNext])

  const classes = classNames({
    [style[`${variant}-bgr`]]: variant,
    [style['bgr']]: true
  })

  return (
    <>
      <div className={classes} />
      <Filters loadData={loadData} filterValue={filterValue} filters={filters[variant]} />
      {status === LOADING_STATES.loading && currentPage === 1 && (
        <LoaderPage />
      )}
      
      {results.length > 0 ? (
        <>
          <CardsList
            showMore={showMore}
            status={status}
            isNext={isNext}
            list={results}
            baseUrl={PATHS.shops_detail.path} />
        </>
      ) : null}
      {status === LOADING_STATES.loading && currentPage > 1 && (
        <LoaderRing />
      )}
      {status === LOADING_STATES.loaded && results.length === 0 && filterParams.search === '' ? (
        <MessageNotResults text={NOT_DATA_VISITORS[variant]} />
      ) : null}

      {status === LOADING_STATES.loaded && results.length === 0 && filterParams.search !== '' ? (
        <MessageNotResults text='По вашему запросу ничего не найдено' />
      ) : null}
      {status === LOADING_STATES.failed && (
        <MessageError />
      )}
    </>
  )
}

export default Visitors