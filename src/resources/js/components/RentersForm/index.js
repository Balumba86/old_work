import { useState } from 'react'
import classNames from 'classnames'
import { useFormik } from 'formik'
import { Icon } from '../../images'
import { rentApplicationSchema } from '../../schema'
import { Button, Input, TextArea } from '../../views'
import style from './renters-form.module.scss'

const SHOW_TYPES = {
  fail: 'fail',
  form: 'form',
  loading: 'loading',
  success: 'success'
}

const RentersForm = () => {
  const [showType, setShowType] = useState(SHOW_TYPES.form)
  const [message, setMessage] = useState(null)
  
  const onSubmit = (values, actions) => {

  }

  const formik = useFormik({
    initialValues: {},
    validationSchema: rentApplicationSchema,
    onSubmit
  })

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
          <div className={style['contacts']}>
            <div className={style['contacts-item']}><Icon name='geo' />г. Иваново, проспект Ленина, д. 57А</div>
            <div className={style['contacts-item']}><Icon name='time' />c 09:00 до 21:00 </div>
            <div className={style['contacts-item']}><Icon name='phone' />+7 (4932) 77-32-07</div>
            <div className={style['contacts-item']}><Icon name='phone' />+7 (905) 107-31-11</div>
            <div className={classNames([style['contacts-item'], style['email']])}><Icon name='email' width="90%" />manager_sity@mail.ru</div>
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