import { useFormik } from 'formik'
import { Button, Input } from '../../views'
import { subscriptionSchema } from '../../schema'
import { PATHS } from '../../const'
import api from '../../api'

import style from './form.module.scss'
import { Link } from 'react-router-dom'

const SubscriptionForm = () => {
  const onSubmit = (values, actions) => {
    api.sendSubscribeData({params: { ...values }})
      .then((res) => {
        actions.setSubmitting(false)
        actions.resetForm()
      })
      .catch(({ response }) => {
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
      <form onSubmit={formik.handleSubmit} className={style['subscr-form']}>
        <fieldset className={style['subscr-form__body']}>
          <Input
            error={formik.errors.email}
            label={null}
            name='email'
            placeholder='Введите Ваш e-mail'
            touched={formik.touched.email}
            value={formik.values.email}
            variant='subscr'
            onBlur={formik.handleBlur}
            onInput={formik.handleChange}
          />
          <Button
            disabled={formik.isSubmitting || formik.values.email === ''}
            type='submit'
            variant='btn-subscr'>ok</Button>
        </fieldset>
        <fieldset className={style['subscr-form__footer']}>
          <div className={style['agree-text']}>Нажимая на кнопку "Отправить", вы даете <Link className={style['agree-link']} to={PATHS.personal_data.path}>согласие на обработку ваших персональных данных</Link> в соответствии с ФЗ от 27.07.2006 N 152-ФЗ.</div>
        </fieldset>
      </form>
    </>
  )
}

export default SubscriptionForm