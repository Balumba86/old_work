import style from './cards.module.scss'

const CardsList = ({ list = [], baseUrl = '/' }) => {
  return (
    <ul className={style['list']}>
      {list && list.map(item => (
        <li key={item.id} className={style['list-item']}>
          <a href={`${baseUrl}/${item.slug}`} className={style['list-link']}>
            <img className={style['list-item__img']} src={item.image} alt='' />
            <h3 className={style['list-item__title']}>Belwest</h3>
            <span className={style['list-item__level']}>Уровень</span>
            <span className={style['list-item__category']}>Женская одежда, Обувь, Аксессуары, Украшения/ часы, Сумки и чемоданы, Украшения/ часы, Сумки и чемоданы</span>
          </a>
        </li>
      ))}
    </ul>
  )
}

export default CardsList