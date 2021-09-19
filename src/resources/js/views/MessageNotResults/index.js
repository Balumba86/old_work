import style from './not-results.module.scss'

const MessageNotResults = ({text = ''}) => {
  return (
    <div className={style['not-results']}>{text}</div>
  )
}

export default MessageNotResults