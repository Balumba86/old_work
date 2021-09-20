import RentersForm from '../RentersForm'
import {
  planParking,
  planLevel1,
  planLevel2,
  planLevel3,
  planLevel4
} from '../../images'
import style from './renters.module.scss'

const Renters = () => {
  return (
    <section className={style['section']}>
      <h2 className={style['renters-title']}>Арендаторам</h2>
      <div className={style['renters-info']}>
        <div className={style['renters-info__wrapper']}>
          <p className={style['renters-info__p']}>Аренда помещения в торговом центре Иваново — именно тот случай, с которым сталкивается любая фирма, деятельность которой, так или иначе, свазанная с торговлей и посетителями. Наличие хорошего, стабильного потока потенциальных покупателей и потребителей услуг, в купе с выгодным расположением ТЦ, делают аренду<span className={style['text-bold']}> в торговом центре "Никольский"</span> наиболее выгодным предложением по реализации вашего товара.</p>
          <p className={style['renters-info__p']}>Отметим, что на сегодня в Иваново построено достаточно много торговых помещений, поэтому можно легко запутаться в таком обилии предложений. <span className={style['text-bold']}>Мы поможем Вам сделать правильный выбор - аренду торговых помещений именно в ТЦ "Никольский"</span></p>
        </div>
      </div>
      <div className={style['renters-content']}>
        <div className={style['benefits']}>
          <h3 className={style['block-title']}>Наши преимущества</h3>
          <ul className={style['benefits-list']}>
            <li>Расположение в самом густонаселенном районе города на главной транспортной магистрали</li>
            <li>Активная маркетинговая поддержка Арендаторов</li>
            <li>Заключение как краткосрочного (на 11 месяцев), так и долгосрочного (от 2 до 7 лет) договора аренды</li>
            <li>Индивидуальный подход к каждому Арендатору</li>
            <li>Профессиональная управляющая компания</li>
            <li>Присутствуют современные инженерно-технические условия и все необходимые коммуникации</li>
          </ul>
        </div>
        <div className={style['plans']}>
          <h3 className={style['block-title']}>Планы помещений</h3>
          <ul className={style['plans-list']}>
            <li className={style['plans-list__item']}>
              <img src={planParking} alt='План парковки' />
            </li>
            <li className={style['plans-list__item']}>
              <img src={planLevel1} alt='План первого уровня' />
            </li>
            <li className={style['plans-list__item']}>
              <img src={planLevel2} alt='План второго уровня' />
            </li>
            <li className={style['plans-list__item']}>
              <img src={planLevel3} alt='План третьего уровня' />
            </li>
            <li className={style['plans-list__item']}>
              <img src={planLevel4} alt='План четвертого уровня' />
            </li>
          </ul>
          <a className={style['download-link']} href='#'>Скачать всю карту торгового центра</a>
        </div>
        <RentersForm />
      </div>
    </section>
  )
}

export default Renters