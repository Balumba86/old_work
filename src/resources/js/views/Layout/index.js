import Header from '../Header'

const Layout = ({children = null}) => {
  return (
    <>
      <Header />
      <main>
        {children}
      </main>
      
    </>
  )
}

export default Layout