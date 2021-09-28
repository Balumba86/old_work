import NotFound from "../components/NotFound"
import ScrollingLayout from "../components/ScrollingLayout"
import { Layout } from "../views"

const NotFoundPage = () => {
  return (
    <ScrollingLayout>
      {() => (
        <Layout>
          <NotFound />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default NotFoundPage