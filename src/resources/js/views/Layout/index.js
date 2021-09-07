import { useEffect, useState } from 'react';
import Footer from '../Footer'
import Header from '../Header'
import LoaderPage from '../LoaderPage';
import style from './layout.module.scss'

const Layout = ({ children = null }) => {
  const [loading, setLoading] = useState(true)
  useEffect(() => {
    const timer = setTimeout(() => setLoading(false), 3000)

    return () => {
      clearTimeout(timer)
    }
  }, [])
  return (
    <>
      <Header />
      <main className={style['layout']}>
        {children}
      </main>
      <Footer />
      {loading ? <LoaderPage /> : null}
    </>
  )
}

export default Layout