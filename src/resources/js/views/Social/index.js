import classNames from 'classnames'
import { Icon } from '../../images'
import style from './social.module.scss'

const Social = ({ variant = null}) => {
  const classes = classNames({
    [style['social__wrapper']]: true,
    [style[variant]]: variant
  })
  return (
    <div className={classes}>
      <span>Связаться с нами</span>
      <ul className={style['social']}>
        <li className={style['social__item']}>
          <a href='#' className={style['social__link']}>
            <Icon name='vk' />
          </a>
        </li>
        <li className={style['social__item']}>
          <a href='#' className={style['social__link']}>
            <Icon name='instagram' />
          </a>
        </li>
        <li className={style['social__item']}>
          <a href='#' className={style['social__link']}>
            <Icon name='ok' />
          </a>
        </li>
        <li className={style['social__item']}>
          <a href='#' className={style['social__link']}>
            <Icon name='youtube' />
          </a>
        </li>
      </ul>
    </div>
  )
}

export default Social