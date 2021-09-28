import classNames from 'classnames'
import style from './button.module.scss'

const Button = ({ children = null, variant = null, ...props }) => {
  const classes = classNames({
    [style[variant]]: variant,
    [style['button']]: true
  })
  return (
    <button className={classes} {...props}>{children}</button>
  )
}

export default Button