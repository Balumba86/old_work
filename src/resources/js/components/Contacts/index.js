import { useEffect, useState } from 'react'
import LocationMap from '../LocationMap'
import { LoaderPage } from '../../views'
import { LOADING_STATES } from '../../const'
import api from '../../api'

import style from './contacts.module.scss'

const Contacts = () => {
  const [contactsList, setCotactsList] = useState(null)
  const [loadingStatus, setLoadingStatus] = useState(LOADING_STATES.loading)

  useEffect(() => {
    api.getContacts()
      .then(res => {
        setCotactsList(res.data)
        setLoadingStatus(LOADING_STATES.loaded)
      })
      .catch(err => console.log(err))
  }, [])
  
  return (
    <section className={style['section']}>
      <h2 className={style['title']}>Контактная информация</h2>
      <LocationMap />
      <div className={style.contacts}>
        {contactsList && contactsList.map((el, idx) => (
          <div key={`contacts-${idx}`} className={style['contacts-row']}>
            <div className={style['contacts-col']}>{el.department_name}</div>
            <div className={style['contacts-col']}>{el.phone}</div>
            <div className={style['contacts-col']}>{el.email}</div>
          </div>
        ))}
      </div>
      {loadingStatus === LOADING_STATES.loading && (
        <LoaderPage />
      )}
    </section>
  )
}

export default Contacts;