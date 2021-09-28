import style from './loader.module.scss'

const LoaderRing = () => {
  return (
    <div className={style['lds-ring']}>
      <div className={style['animate-block']} />
      <div className={style['animate-block']} />
      <div className={style['animate-block']} />
      <div className={style['animate-block']} />
    </div>
  )
}

export default LoaderRing