import classNames from 'classnames'
import { useState } from 'react'
import {
  planParking,
  planLevel1,
  planLevel2,
  planLevel3,
  planLevel4
} from '../../images'
import style from './renters.module.scss'

const Renters = () => {
  const [showForm, setShowForm] = useState(false)

  const classesContacts = classNames({
    [style["form-item"]]: true,
    [style["contacts"]]: true,
    [style['active']]: !showForm
  })

  const classesForm = classNames({
    [style["form-item"]]: true,
    [style["form"]]: true,
    [style['active']]: showForm
  })

  const classesContainer = classNames({
    [style["container-form"]]: true,
    [style["container-form_right"]]: showForm
  })

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

        <div className={style["container"]}>
          <div className={style["box"]}></div>
           <div className={style["container-forms"]}>
            <div className={style["container-info"]}>
              
              <div className={style["info-item"]}>
                <div className={style["table"]}>
                  <div className={style["table-cell"]}>
                    <p>Связаться с нами для уточнения информации по аренде</p>
                    <button type='button' className={style["btn"]} onClick={() => setShowForm(false)}>
                      Посмотреть контакты
                    </button>
                  </div>
                </div>
              </div>
              <div className={style["info-item"]}>
                <div className={style["table"]}>
                  <div className={style["table-cell"]}>
                    <p>Вы можете оставить заявку на аренду онлайн</p>
                    <button type='button' className={style["btn"]} onClick={() => setShowForm(true)}>
                      Оставить заявку
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div className={classesContainer}>
              <div className={classesContacts}>
                <div className={style["table"]}>
                  <div className={style["table-cell"]}>
                    <h4>Контактная информация</h4>
                    <div>
                      <div>г. Иваново, проспект Ленина, д. 57А</div>
                      <div>c 09:00 до 21:00 </div>
                      <div>+7 (4932) 77-32-07</div>
                      <div>+7 (905) 107-31-11</div>
                      <div>manager_sity@mail.ru</div>
                    </div>
                  </div>
                </div>
              </div>
              <div className={classesForm}>
                <div className={style["table"]}>
                  <div className={style["table-cell"]}>
                    <form>
                      <input placeholder="Фамия Имя Отчечтво" type="text" />
                      <input placeholder="+7 (ххх) ххх-хх-хх" type="tel" />
                      <textarea placeholder="Username" type="text" />
                      <button className={style["btn"]}>Отправить</button>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
       
      </div>
    </section>
  )
}

export default Renters