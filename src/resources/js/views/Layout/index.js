import Footer from '../Footer'
import Header from '../Header'
import style from './layout.module.scss'

const Layout = ({ children = null }) => {
  return (
    <>
      <Header />
      <main className={style['layout']}>
        {children}
      </main>
      <Footer />
    </>
  )
}

export default Layout