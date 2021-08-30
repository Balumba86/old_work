import { HomeBanner, Layout, NewsBlock, ParnersBlock } from '../views'

const HomePage = () => {
  return (
    <Layout>
      <h1 style={{width: '0px', height: '0px', visibility: 'hidden', opacity: '0'}}>ТЦ “НИКОЛЬСКИЙ”</h1>
      <HomeBanner />
      <NewsBlock />
      <ParnersBlock />
    </Layout>
  )
}

export default HomePage