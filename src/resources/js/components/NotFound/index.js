import { PATHS } from '../../const'
import style from './not-found.module.scss'

const NotFound = () => {
  return (
    <section className={style['section']}>
      <div className={style['content']}>
        <h2 className={style['title']}>Страница не найдена</h2>
        <p>Страница которую вы ищете не существует</p>
        <a href={PATHS.home.path} className={style['link']}>Вернуться на главную</a>
      </div>
    </section>
  )
}

export default NotFound