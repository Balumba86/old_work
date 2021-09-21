import { useEffect, useState } from 'react'
import { useLocation } from 'react-router'
import { useStoreon } from 'storeon/react'
import Filters from '../Filters'
import { CardsList, LoaderPage, MessageNotResults } from '../../views'
import { LOADING_STATES, PATHS } from '../../const'

import style from './shops.module.scss'

const Shops = ({ 
  results = [],
  status,
  isNext,
  showMore = () => {},
  loadData = () => {},
  currentPage
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
      filters.shops.find(el => {
        if(el.value === location.state.slug) {
          setFilterValue(el)
        }
      })
    }
  }, [location, filters])

  return (
    <>
      <div className={style['shops-bgr']} />
      <Filters filterValue={filterValue} filters={filters.shops} />
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
        <MessageNotResults text='В этом разделе пока нет магазинов' />
      ) : null}
    </>
  )
}

export default Shops