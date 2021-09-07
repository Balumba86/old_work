import style from './detail.module.scss'

const DetailBlock = () => {
  return (
    <section className={style['section']}>
      <a>Back</a>
      <h2>Name</h2>
      <div>
        <div>
          <img src='/' alt='image' />
        </div>
        <div>
          <p>descr</p>
          <div>
            <span>phone</span>
            <span>time</span>
            <span>level</span>
          </div>
          <div>category</div>
        </div>
      </div>
    </section>
  )
}

export default DetailBlock