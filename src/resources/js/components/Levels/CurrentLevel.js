import { useEffect, useState } from 'react'
import { ReactSVG } from 'react-svg'
import {
  planLevel1,
  planLevel2,
  planLevel3,
  planLevel4,
  planParking
} from '../../images'
import style from './levels.module.scss'

const types = {
  shop: 'Перейти на страницу магазина',
  restaurant: 'Перейти на страницу кафе/ресторана',
  service: 'Перейти на страницу услуги'
}

const SVG_TYPES = {
  1: planLevel1,
  2: planLevel2,
  3: planLevel3,
  4: planLevel4,
  5: planParking
}

const CurrentLevel = ({ levelInfo = [], currentLevel = [] }) => {
  const [top, setTop] = useState(null)
  const [left, setLeft] = useState(null)
  const [content, setContent] = useState(null)

  useEffect(() => {
    setContent(null)
  }, [currentLevel])

  const closeTooltip = e => {
    e.preventDefault();
    setContent(null);
  }

  return (
    <div style={{width: '100%', height: '500px'}}>
      {levelInfo && (
        <ReactSVG
          style={{width: '100%', height: '100%', position: 'relative'}}
          src={SVG_TYPES[currentLevel]}
          beforeInjection={(svg) => {
            svg.addEventListener('click', e => {
              e.stopPropagation();
              const { pageX, pageY } = e
              let elContent = null
              levelInfo.forEach(el => {
                if(e.target.classList.contains(`area-${el.id}`)) {
                  elContent = el
                  return false
                } 
              })
              setLeft(pageX)
              setTop(pageY)
              setContent(elContent)
            })
          }}
        />
      )}
      {content && (
        <div
          className={style['tooltip']}
          style={{
            top: `${top - 70}px`,
            left: `${left - 30}px`,
          }}
        >
          <div className={style['tooltip-content']}>
            <button
              onClick={closeTooltip}
              type='button'
              className={style['btn-close']}>
                &#10006;
              </button>
            <span className={style['content-title']}>{content.title}</span>
            <a className={style['content-link']}>{types[content.type]}</a>
          </div>
        </div>
      )}
    </div>
  )
}

export default CurrentLevel