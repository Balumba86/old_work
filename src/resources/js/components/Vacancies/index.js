import { useEffect, useState } from 'react'
import { LoaderPage } from '../../views'
import { LOADING_STATES } from '../../const'
import api from '../../api'
import style from './vacancies.module.scss'

const Vacancies = () => {
  const [list, setList] = useState([])
  const [loadingStatus, setStatus] = useState(LOADING_STATES.loading)

  useEffect(() => {
    api.getVacanciesList()
      .then(res => {
        setList(res.data)
        setStatus(LOADING_STATES.loaded)
      })
      .catch(err => {
        console.log(err)
        setStatus(LOADING_STATES.failed)
      })
  }, [])

  return (
    <section className={style['section']}>
      <h2 className={style['title']}>Вакансии</h2>
      {loadingStatus === LOADING_STATES.loading && (
        <LoaderPage />
      )}
      {loadingStatus === LOADING_STATES.loaded && list.length > 0 && (
        <ul className={style['vacancies-list']}>
          {list.map(el => (
            <li className={style['vacancies-item']} key={el.id}>
              <div className={style['vacancies-item__title']}>{el.title}</div>
              <div className={style['vacancies-item__descr']} dangerouslySetInnerHTML={{ __html: el.description}} />
            </li>
          ))}
        </ul>
      )}
      {loadingStatus === LOADING_STATES.loaded && list.length === 0 && (
        <div className={style['message']}>На данный момент нет актуальных вакансий</div>
      )}
    </section>
  )
}

export default Vacancies