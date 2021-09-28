import classNames from "classnames"
import { Icon } from "../../images"
import style from './message.module.scss'

const MessageSuccess = ({ text = '' }) => {
  return (
    <div className={classNames([style['message-block'], style['success']])}>
      <Icon name='success' />
      <div className={style['message-text']}>{text}</div>
    </div>
  )
}

export default MessageSuccess