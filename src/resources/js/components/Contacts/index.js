import LocationMap from '../LocationMap'
import style from './contacts.module.scss'

const Contacts = () => {
  return (
    <>
      <LocationMap />
      <div className={style.contacts}>
        <div className={style['contacts-row']}>
          <div className={style['contacts-col']}>Офис</div>
          <div className={style['contacts-col']}>+7 (800) 101-54-58</div>
          <div className={style['contacts-col']}>nikolskiy.adm@yandex.ru</div>
        </div>
        <div className={style['contacts-row']}>
          <div className={style['contacts-col']}>Коммерческий отдел</div>
          <div className={style['contacts-col']}>+7 (905) 107-31-11</div>
          <div className={style['contacts-col']}>manager_sity@mail.ru</div>
        </div>
        <div className={style['contacts-row']}>
          <div className={style['contacts-col']}>Административный отдел</div>
          <div className={style['contacts-col']}>+7 (960) 503-11-99</div>
          <div className={style['contacts-col']}>nikolskiy.adm@yandex.ru</div>
        </div>
      </div>
    </>
  )
}

export default Contacts;