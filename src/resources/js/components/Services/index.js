import { useEffect, useState } from 'react'
import { useLocation } from 'react-router'
import { useStoreon } from 'storeon/react'
import Filters from '../Filters'
import { CardsList, LoaderPage, MessageNotResults } from '../../views'
import { LOADING_STATES, PATHS } from '../../const'

import style from './services.module.scss'

const Services = ({
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
      filters.services.find(el => {
        if(el.value === location.state.slug) {
          setFilterValue(el)
        }
      })
    }
  }, [location, filters])

  return (
    <>
      <div className={style['services-bgr']} />
      <Filters filterValue={filterValue} filters={filters.services} />
      {status === LOADING_STATES.loading ? <LoaderPage /> : null}
      {status === LOADING_STATES.loaded && results.length > 0 ? (
        <CardsList list={results} baseUrl={PATHS.visitors_services.path} />
      ) : null}
      {status === LOADING_STATES.loaded && results.length === 0 ? (
        <MessageNotResults text='В этом разделе пока нет сервисов и услуг' />
      ) : null}
    </>
  )
}

export default Services