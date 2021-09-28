import classNames from "classnames"
import { Icon } from "../../images"
import style from './message.module.scss'

const MessageError = ({ text = 'На сервере произошла ошибка. Пожалуйста, попробуйте позже' }) => {
  return (
    <div className={classNames([style['message-block'], style['fail']])}>
      <Icon name='error' />
      <div className={style['message-text']}>{text}</div>
    </div>
  )
}

export default MessageError