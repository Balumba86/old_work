import { Layout } from '..'
import style from './visitors.module.scss'

const VisitorsLayout = ({ children = null, title = '' }) => (
  <Layout>
    <section className={style['section']}>
      <div className={style['page-content']}>
        <h2 className={style['page-title']}>{title}</h2>
        {children}
      </div>
    </section>
  </Layout>
)

export default VisitorsLayout