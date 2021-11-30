import ScrollingLayout from '../components/ScrollingLayout'
import Levels from '../components/Levels'
import { Layout } from '../views'

const LevelsPage = () => {
  return (
    <ScrollingLayout>
      {() => (
        <Layout>
          <Levels />
        </Layout>
      )}
    </ScrollingLayout>
    
  )
}

export default LevelsPage