import { useEffect, useState } from 'react'
import { LoaderPage } from '../../views'
import { SLUG_PAGES } from '../../const'
import api from '../../api'
import style from './personal-data.module.scss'

const PersonalDataPolicy = () => {

  const [data, setData] = useState(null)

  useEffect(() => {
    api.getStaticPage({ pageSlug: SLUG_PAGES.personal_data })
      .then(res => {
        setData({
          text: res.data.content.description,
          title: res.data.title
        })
      })
      .catch(err => console.log(err))
  }, [])

  return (
    <section className={style['section']}>
      {data ? (
        <>
          <h2 className={style['page-title']}>{data.title}</h2>
          <div className={style['personal-policy']} dangerouslySetInnerHTML={{__html: data.text || ''}} />
        </>
      ) : <LoaderPage /> }
    </section>
  )
}

export default PersonalDataPolicy