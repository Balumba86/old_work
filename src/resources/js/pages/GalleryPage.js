import Gallery from '../components/Gallery'
import ScrollingLayout from '../components/ScrollingLayout'
import { Layout } from '../views'

const GalleryPage = () => {
  return (
    <ScrollingLayout>
      {(props) => (
        <Layout>
          <Gallery {...props} />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default GalleryPage