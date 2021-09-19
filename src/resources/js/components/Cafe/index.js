import { useEffect, useState } from 'react'
import { useLocation } from 'react-router'
import { useStoreon } from 'storeon/react'
import Filters from '../Filters'
import { CardsList, LoaderPage, MessageNotResults } from '../../views'
import { LOADING_STATES, PATHS } from '../../const'

import style from './cafe.module.scss'

const Cafe = ({
  results = [],
  status = '',
  isNext,
  showMore = () => {},
  loadData = () => {}
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
      filters.cafe.find(el => {
        if(el.value === location.state.slug) {
          setFilterValue(el)
        }
      })
    }
  }, [location, filters])

  return (
    <>
      <div className={style['cafe-bgr']} />
      <Filters filterValue={filterValue} filters={filters.cafe} />
      {status === LOADING_STATES.loading ? <LoaderPage /> : null}
      {status === LOADING_STATES.loaded && results.length > 0 ? (
        <CardsList list={results} baseUrl={PATHS.visitors_cafe.path} />
      ) : null}
      {status === LOADING_STATES.loaded && results.length === 0 ? (
        <MessageNotResults text='В этом разделе пока нет кафе и ресторанов' />
      ) : null}
    </>
  )
}

export default Cafe