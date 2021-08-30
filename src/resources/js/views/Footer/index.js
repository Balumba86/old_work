import style from './footer.module.scss'

const Footer = () => {
  return (
    <footer className={style.footer}>
      <div className={style['footer-copyright']}>ТЦ НИКОЛЬСКИЙ &copy; 2021 / ВСЕ ПРАВА ЗАЩИЩЕНЫ.</div>
    </footer>
  )
}

export default Footer