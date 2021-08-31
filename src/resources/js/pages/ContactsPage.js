import { Layout } from '../views'

const ContactsPage = () => {
  return (
    <Layout>
      <section className='section'>
        <h2 className={''}>Контакты</h2>
        <div>
          <aside>
            <ul>
              <li>
                <a>Комплекс</a>
              </li>
              <li>
                <a>Коммерческий отдел</a>
              </li>
              <li>
                <a>Административный отдел</a>
              </li>
            </ul>
          </aside>
          <div>
            <h3>Комплекс</h3>
            <div>
              г. Иваново пр.Ленина, 57А
              Контактный телефон/ факс
              +7 (800) 101-54-58
              Основной e-mail
              nikolskiy.adm@yandex.ru
              09:00-21:00
            </div>
          </div>
          <div>
            <h3>Коммерческий отдел</h3>
            <div>
              153025, г. Иваново пр.Ленина, 57А
              e-mail: manager_sity@mail.ru
              тел. +7(905) 107-31-11
              Дунаенко Юрий
            </div>
          </div>
          <div>
            <h3>Административный отдел</h3>
            <div>
              153025, г. Иваново пр.Ленина, 57А
              e-mail: nikolskiy.adm@yandex.ru
              Административный отдел
              +7 (960) 503-11-99 (сот.)
            </div>
          </div>
        </div>
      </section>
    </Layout>
  )
}

export default ContactsPage