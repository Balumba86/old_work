import News from '../components/News'
import ScrollingLayout from '../components/ScrollingLayout'
import { Layout } from '../views'

const NewsPage = () => {
  return (
    <ScrollingLayout>
      {(props) => (
        <Layout>
          <News {...props} />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default NewsPage