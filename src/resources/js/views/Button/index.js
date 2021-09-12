import style from './button.module.scss'

const Button = ({children = null, ...props}) => {
  return (
    <button className={style['button']} {...props}>{children}</button>
  )
}

export default Button