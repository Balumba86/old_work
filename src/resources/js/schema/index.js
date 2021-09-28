import * as Yup from 'yup';

const subscriptionSchema = Yup.object().shape({
  email: Yup.string().email('Введите корректный email').required('Это поле обязательно для заполнения')
})

const rentApplicationSchema = Yup.object().shape({
  name: Yup.string('').required('Это поле обязательно для заполнения'),
  email: Yup.string().email('Введите корректный email').required('Это поле обязательно для заполнения'),
  phone: Yup.string('').required('Это поле обязательно для заполнения'),
})

export {
  rentApplicationSchema,
  subscriptionSchema
}