import Home from '../components/Home'
import ScrollingLayout from '../components/ScrollingLayout'
import { Layout } from '../views'

const HomePage = () => {
  return (
    <ScrollingLayout>
      {() => (
        <Layout>
          <h1 style={{width: '0px', height: '0px', visibility: 'hidden', opacity: '0'}}>ТЦ “НИКОЛЬСКИЙ”</h1>
          <Home />      
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default HomePage