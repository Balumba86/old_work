import { useEffect, useState } from 'react'
import { useLocation } from 'react-router'
import { useStoreon } from 'storeon/react'
import Filters from '../Filters'
import { CardsList, LoaderPage, MessageNotResults } from '../../views'
import { LOADING_STATES, PATHS } from '../../const'
import classNames from 'classnames'

import style from './visitors.module.scss'

const Visitors = ({ 
  results = [],
  status,
  isNext,
  showMore = () => {},
  loadData = () => {},
  currentPage,
  variant = null
}) => {
  const [slug, setSlug] = useState(null)
  const [filterValue, setFilterValue] = useState(undefined)
  const location = useLocation()
  const { filters } = useStoreon('filters')

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

  const classes = classNames({
    [style[`${variant}-bgr`]]: variant,
    [style['bgr']]: true
  })

  return (
    <>
      <div className={classes} />
      <Filters filterValue={filterValue} filters={filters[variant]} />
      {status === LOADING_STATES.loading && currentPage === 1 ? <LoaderPage /> : null}
      {results.length > 0 ? (
        <>
          <CardsList isNext={isNext} list={results} baseUrl={PATHS.visitors_shops.path} />
          {isNext && (
            <div>
              <button onClick={showMore} type='button' className='link'>Загрузить еще</button>
            </div>
          )}
        </>
      ) : null}
      {status === LOADING_STATES.loaded && results.length === 0 ? (
        <MessageNotResults text='В этом разделе пока нет магазинов' /> // add text variants
      ) : null}
    </>
  )
}

export default Visitors