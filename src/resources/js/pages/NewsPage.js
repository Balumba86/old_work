import News from '../components/News'
import { Layout } from '../views'

const NewsPage = () => {
  return (
    <Layout>
      <section className='section'>
        <News />
      </section>
    </Layout>
  )
}

export default NewsPage