import { useEffect, useState } from 'react'
import { ReactSVG } from 'react-svg'
import { LoaderPage } from '../../views'
import { planParking } from '../../images'
import { PATHS, SLUG_PAGES } from '../../const'
import api from '../../api'
import style from './levels.module.scss'
import { Link } from 'react-router-dom'

const ParkingLevel = () => {
  const [data, setData] = useState(null)

  useEffect(() => {
    api.getStaticPage({pageSlug: SLUG_PAGES.parking})
      .then(res => {
        setData({
          text: res.data.content.description,
          title: res.data.title
        })
      })
      .catch(err => console.log(err))
  }, [])

  return (
    <>
      <ReactSVG src={planParking} />
      {data ? (
        <>
          <h2 className={style['page-title']}>{data.title}</h2>
          <div className={style['parking-policy']} dangerouslySetInnerHTML={{__html: data.text || ''}} />
          <div>С полными правилами работы парковок вы можете ознакомиться <Link className={style['link']} to={PATHS.parking_rules.path}>здесь</Link>.</div>
        </>
      ) : <LoaderPage /> }
    </>
  )
}

export default ParkingLevel