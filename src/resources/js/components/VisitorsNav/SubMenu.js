import classNames from 'classnames'
import { NavLink, useLocation } from 'react-router-dom'
import style from './aside.module.scss'

const SubMenu = ({ itemsList = [], menuClasses = '' }) => {
  const location = useLocation()

  return (
    <ul className={menuClasses}>
      {itemsList && itemsList.map(item => {
        const classes = classNames({
          [style['sub-menu__link']]: true,
          [style['sub-menu__link_active']]: location.pathname.includes(item.slug)
        })
        return (
          <li key={item.id} className={style['sub-menu__item']}>
            <NavLink to={{
              pathname: item.link,
              state: {
                slug: item.slug
              }
            }} className={classes}>{item.label}</NavLink>
          </li>
        )}
      )}
    </ul>
  )
}

export default SubMenu