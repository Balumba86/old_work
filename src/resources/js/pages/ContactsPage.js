import Contacts from '../components/Contacts'
import { Layout } from '../views'

const ContactsPage = () => {

  return (
    <Layout>
      <section className='section'>
        <h2 className={'page-title'}>Контактная информация</h2>
        <Contacts />
      </section>
    </Layout>
  )
}

export default ContactsPage