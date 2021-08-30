import Footer from '../Footer'
import Header from '../Header'

const Layout = ({children = null}) => {
  return (
    <>
      <Header />
      <main>
        {children}
      </main>
      <Footer />
    </>
  )
}

export default Layout