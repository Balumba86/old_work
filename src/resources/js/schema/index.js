import * as Yup from 'yup';

const subscriptionSchema = Yup.object().shape({
  email: Yup.string().email('Введите корректный email').required('Это поле обязательно для заполнения')
})

const rentApplicationSchema = Yup.object().shape({

})

export {
  rentApplicationSchema,
  subscriptionSchema
}