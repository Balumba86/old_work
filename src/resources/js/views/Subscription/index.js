import SubscriptionForm from '../../components/SubscriptionForm'
import style from './subscription.module.scss'

const Subscription = () => {
  return (
    <section className={style['subscr-section']}>
      <div className={style['subscr-content']}>
        <h2 className={style['subscr-title']}>Подпишитесь <br/> на нашу рассылку<br />
        <span className={style['subscr-subtitle']}>и узнавайте обо всем первыми</span></h2>
        <SubscriptionForm />
      </div>
    </section>
  )
}

export default Subscription