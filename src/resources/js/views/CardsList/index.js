import style from './cards.module.scss'

const CardsList = ({ list = [] }) => {
  return (
    <ul className={style['list']}>
      {list && list.map(item => (
        <li key={item.id} className={style['list-item']}>
          <a href='' className={style['list-link']}>
            <img className={style['list-img']} src={item.image} alt='' />
          </a>
        </li>
      ))}
    </ul>
  )
}

export default CardsList