import NewsList from '../components/NewsList'
import { Layout } from '../views'

const NewsPage = () => {
  return (
    <Layout>
      <section className='section'>
        <NewsList />
      </section>
    </Layout>
  )
}

export default NewsPage