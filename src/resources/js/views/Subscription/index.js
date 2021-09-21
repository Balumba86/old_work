import { Button, Input } from '..'
import style from './subscription.module.scss'

const Subscription = () => {
  return (
    <section className={style['subscr-section']}>
      <div className={style['subscr-content']}>
        <h2 className={style['subscr-title']}>Подпишитесь <br/> на нашу рассылку<br />
        <span className={style['subscr-subtitle']}>и узнавайте обо всем первыми</span></h2>
        <form className={style['subscr-form']}>
          <fieldset className={style['subscr-form__body']}>
            <Input id='subscrInput' label='Введите ваш e-mail' />
          </fieldset>
          <fieldset className={style.agree}>
            <input defaultChecked id='agree' className={style['agree-input']} type='checkbox' />
            <label htmlFor='agree' className={style['agree-label']} />
            <a className={style['agree-link']} href='#'>Согласен <span>на обработку моих персональных данных</span></a>
          </fieldset>
          <fieldset className={style['subscr-form__bottom']}>
            <Button>Подписаться</Button>
          </fieldset>
        </form>
      </div>
    </section>
  )
}

export default Subscription