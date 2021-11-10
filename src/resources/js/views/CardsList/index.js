import { generatePath } from 'react-router';
import { Link } from 'react-router-dom';
import { PATHS } from '../../const';
import style from './cards.module.scss';

const CardsList = ({ list = [] }) => {

  return (
    <ul className={style['list']}>
      {list && list.map(item => (
        <li key={item.slug} className={style['list-item']}>
          <Link
            to={{
              pathname: generatePath(PATHS.shops_detail.path, { slug: item.slug }),
              state: {slug: item.slug}
            }}
            className={style['list-link']}
          >
            <img className={style['list-item__img']} src={item.logo} alt='' />
            <h3 className={style['list-item__title']}>{item.title}</h3>
            <span className={style['list-item__level']}>{item.level}</span>
            <span className={style['list-item__category']}>{item.category.title}</span>
          </Link>
        </li>
      ))}
    </ul>
  )
}

export default CardsList