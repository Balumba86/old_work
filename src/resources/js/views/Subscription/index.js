import style from './subscription.module.scss'

const Subscription = () => {
  return (
    <section className={style['subscr-section']}>
      <h2 className={style['subscr-title']}>Подпишитесь на нашу рассылку<br />
      <span className={style['subscr-subtitle']}>и узнавайте обо всем первыми</span></h2>
      <form className={style['subscr-form']}>
        <fieldset className={style['subscr-form__body']}>
          <label htmlFor='subscrInput' className={style['subscr-label']}>Введите ваш e-mail</label>
          <input id='subscrInput' className={style['subscr-input']} />
        </fieldset>
        <fieldset className={style.agree}>
          <input checked id='agree' className={style['agree-input']} type='checkbox' />
          <label htmlFor='agree' className={style['agree-label']}>
            Согласен<span>&nbsp;</span>
          </label>
          <a className={style['agree-link']} href='#'>на обработку моих персональных данных</a>
        </fieldset>
        <fieldset className={style['subscr-form__bottom']}>
          <button className={style['subscr-button']}>Подписаться</button>
        </fieldset>
      </form>
    </section>
  )
}

export default Subscription