import { useEffect } from 'react';
import { createPortal } from 'react-dom';
import style from './loader-page.module.scss'

const LoaderPage = () => {

  useEffect(() => {
    document.body.style.overflow = 'hidden'
    return function() {
      document.body.style.overflow = 'auto'
    }
  }, [])
  
  return createPortal(
    <div className={style['loader-wrapper']}>
      <div className={style['loader']}></div>
    </div>,
    document.body
  )
}

export default LoaderPage