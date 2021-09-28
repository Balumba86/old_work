import { useState } from 'react'
import { useFormik } from 'formik'
import { Button, Input, LoaderRing, MessageSuccess } from '../../views'
import { subscriptionSchema } from '../../schema'
import { PATHS } from '../../const'
import api from '../../api'

import style from './form.module.scss'

const SHOW_TYPES = {
  fail: 'fail',
  form: 'form',
  loading: 'loading',
  success: 'success'
}

const SubscriptionForm = () => {
  const [showType, setShowType] = useState(SHOW_TYPES.form)
  const [message, setMessage] = useState(null)

  const onSubmit = (values, actions) => {
    setShowType(SHOW_TYPES.loading)
    api.sendSubscribeData({params: { ...values }})
      .then((res) => {
        setShowType(SHOW_TYPES.success)
        setMessage(res.message)
        actions.setSubmitting(false)
        actions.resetForm()
      })
      .catch(({ response }) => {
        setShowType(SHOW_TYPES.form)
        actions.setFieldError('email', response?.data?.errors?.email[0] || '')
      })
  }

  const formik = useFormik({
    initialValues: {
      email: '',
      accept: true
    },
    validationSchema: subscriptionSchema,
    onSubmit
  })

  return (
    <>
      {showType === SHOW_TYPES.form && (
        <form onSubmit={formik.handleSubmit} className={style['subscr-form']}>
          <fieldset className={style['subscr-form__body']}>
            <Input
              value={formik.values.email}
              onInput={formik.handleChange}
              onBlur={formik.handleBlur}
              id='subscrInput'
              name='email'
              label='Введите ваш e-mail'
              error={formik.errors.email}
              touched={formik.touched.email}
            /> 
          </fieldset>
          <fieldset className={style.agree}>
            <div className={style['agree-text']}>Нажимая на кнопку "Отправить", вы даете <a className={style['agree-link']} href={PATHS.personal_data.path}>согласие на обработку ваших персональных данных</a> в соответствии с ФЗ от 27.07.2006 N 152-ФЗ.</div>
          </fieldset>
          <fieldset className={style['subscr-form__bottom']}>
            <Button disabled={formik.isSubmitting || formik.values.email === ''} type='submit'>Подписаться</Button>
          </fieldset>
        </form>
      )}
      {showType === SHOW_TYPES.success && message && (
        <MessageSuccess text={message} />
      )}
      {showType === SHOW_TYPES.loading && (
        <LoaderRing />
      )}
    </>
  )
}

export default SubscriptionForm