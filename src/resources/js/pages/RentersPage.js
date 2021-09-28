import Renters from '../components/Renters'
import ScrollingLayout from '../components/ScrollingLayout'
import { Layout } from '../views'

const RentersPage = () => {
  return (
    <ScrollingLayout>
      {() => (
        <Layout>
          <Renters />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default RentersPage