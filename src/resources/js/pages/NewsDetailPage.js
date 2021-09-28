import NewsDetail from '../components/NewsDetail'
import ScrollingLayout from '../components/ScrollingLayout'
import { Layout } from '../views'

const NewsDetailPage = () => {
  return (
    <ScrollingLayout>
      {() => (
        <Layout>
          <NewsDetail />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default NewsDetailPage