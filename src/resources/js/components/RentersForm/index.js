import { useEffect, useState } from 'react'
import classNames from 'classnames'
import { useFormik } from 'formik'
import { Icon } from '../../images'
import { rentApplicationSchema } from '../../schema'
import { Button, Input, InputPhone, LoaderPage, LoaderRing, MessageSuccess, TextArea } from '../../views'
import style from './renters-form.module.scss'
import api from '../../api'

const SHOW_TYPES = {
  fail: 'fail',
  form: 'form',
  loading: 'loading',
  success: 'success'
}

const RentersForm = () => {
  const [showType, setShowType] = useState(SHOW_TYPES.form)
  const [message, setMessage] = useState(null)
  const [isPageLoading, setLoading] = useState(true)

  useEffect(() => {
    const timeout = setTimeout(() => setLoading(false), 2500)
    return () => {
      clearTimeout(timeout)
    }
  }, [])

  const onSubmit = (values, actions) => {
    setShowType(SHOW_TYPES.loading)
    api.sentRenterData(values)
      .then(res => {
        actions.resetForm()
        actions.setSubmitting(false)
        setShowType(SHOW_TYPES.success)
        setMessage(res.message)
      })
      .catch(err => {
        console.log(err)
      })
  }

  const formik = useFormik({
    initialValues: {
      name: '',
      email: '',
      phone: '',
      comment: ''
    },
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
    <>
      <div className={style['container']}>
        <div className={style['content']}>
          <div className={contactsClasses}>
            <h4 className={style['block-title']}>Контакты</h4>
            <div className={style['contacts']}>
              <div className={style['contacts-item']}><Icon name='geo' />г. Иваново, проспект Ленина, д. 57А</div>
              <div className={style['contacts-item']}><Icon name='time' />c 09:00 до 18:00 </div>
              <div className={style['contacts-item']}><Icon name='phone' />+7 (800) 101-54-58</div>
              <div className={style['contacts-item']}><Icon name='phone' />+7 (905) 107-31-11</div>
              <div className={classNames([style['contacts-item'], style['email']])}><Icon name='email' width="90%" />manager_sity@mail.ru</div>
            </div>
          </div>
          <div className={formClasses}>
            <h4 className={style['block-title']}>Заявка на аренду</h4>
            {showType === SHOW_TYPES.form && (
              <form onSubmit={formik.handleSubmit}>
                <fieldset className={style['fieldset']}>
                  <Input
                    label='ФИО'
                    id='userName'
                    placeholder="Фамия Имя Отчечтво"
                    type="text"
                    name='name'
                    value={formik.values.name}
                    onInput={formik.handleChange}
                    onBlur={formik.handleBlur}
                    error={formik.errors.name}
                    touched={formik.touched.name}
                  />
                </fieldset>
                <fieldset className={style['fieldset']}>
                  <InputPhone
                    label='Номер телефона'
                    id='userPhone'
                    placeholder="+7 (ххх) ххх-хх-хх"
                    type="tel"
                    name='phone'
                    value={formik.values.phone}
                    setFieldValue={formik.setFieldValue}
                    onBlur={formik.handleBlur}
                    error={formik.errors.phone}
                    touched={formik.touched.phone}
                  />
                </fieldset>
                <fieldset className={style['fieldset']}>
                  <Input
                    label='E-mail'
                    id='userEmail'
                    placeholder="mail@mail.ru"
                    type="email"
                    name='email'
                    value={formik.values.email}
                    onInput={formik.handleChange}
                    onBlur={formik.handleBlur}
                    error={formik.errors.email}
                    touched={formik.touched.email}
                  />
                </fieldset>
                <fieldset className={style['fieldset']}>
                  <TextArea
                    label='Комментарий'
                    id='comment'
                    placeholder='Введите ваш комментарий'
                    name='comment'
                    value={formik.values.comment}
                    onInput={formik.handleChange}
                    onBlur={formik.handleBlur}
                  />
                </fieldset>
                <Button type='submit'>Отправить</Button>
              </form>        
            )}
            {showType === SHOW_TYPES.success && message && (
              <MessageSuccess text={message} />
            )}
            {showType === SHOW_TYPES.loading && (
              <LoaderRing />
            )}
          </div>
        </div>
      </div>
      {isPageLoading && (
        <LoaderPage />
      )}
    </>
  )
}

export default RentersForm