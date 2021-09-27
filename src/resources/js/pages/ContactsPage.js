import Contacts from '../components/Contacts'
import ScrollingLayout from '../components/ScrollingLayout'
import { Layout } from '../views'

const ContactsPage = () => {
  return (
    <ScrollingLayout>
      {() => (
        <Layout>
          <Contacts />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default ContactsPage