import classNames from 'classnames'
import { Button, Input, TextArea } from '../../views'
import style from './renters-form.module.scss'

const RentersForm = () => {

  const formClasses = classNames({
    [style['content-item']]: true,
    [style['form']]: true,
  })

  const contactsClasses = classNames({
    [style['content-item']]: true,
    [style['contacts']]: true,
  })

  return (
    <div className={style['container']}>
      <div className={style['content']}>
        <div className={contactsClasses}>
          <h4 className={style['block-title']}>Контакты</h4>
          <div>
            <div>г. Иваново, проспект Ленина, д. 57А</div>
            <div>c 09:00 до 21:00 </div>
            <div>+7 (4932) 77-32-07</div>
            <div>+7 (905) 107-31-11</div>
            <div>manager_sity@mail.ru</div>
          </div>
        </div>
        <div className={formClasses}>
          <h4 className={style['block-title']}>Оставить заявку</h4>
          <form>
            <fieldset className={style['fieldset']}>
              <Input label='ФИО' id='userName' placeholder="Фамия Имя Отчечтво" type="text" />
            </fieldset>
            <fieldset className={style['fieldset']}>
              <Input label='Номер телефона' id='userPhone' placeholder="+7 (ххх) ххх-хх-хх" type="tel" />
            </fieldset>
            <fieldset className={style['fieldset']}>
              <Input label='E-mail' id='userEmail' placeholder="mail@mail.ru" type="email" />
            </fieldset>
            <fieldset className={style['fieldset']}>
              <TextArea label='Комментарий' id='comment' placeholder='Введите ваш комментарий' />
            </fieldset>
            <Button>Отправить</Button>
          </form>        
        </div>
      </div>
    </div>
  )
}

export default RentersForm