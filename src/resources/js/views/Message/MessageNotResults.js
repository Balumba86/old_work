import style from './message.module.scss'

const MessageNotResults = ({text = ''}) => {
  return (
    <div className={style['not-results']}>{text}</div>
  )
}

export default MessageNotResults