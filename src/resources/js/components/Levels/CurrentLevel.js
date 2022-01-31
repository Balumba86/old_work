import { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import { generatePath } from 'react-router'
import { ReactSVG } from 'react-svg'
import { PATHS } from '../../const'
import {
  planLevel1,
  planLevel2,
  planLevel3,
  planLevel4,
  planParking
} from '../../images'
import style from './levels.module.scss'

const types = {
  shop: {
    linkDisplay: 'Перейти на страницу магазина',
    path: PATHS.shops_detail.path
  },
  restaurant: {
    linkDisplay: 'Перейти на страницу кафе/ресторана',
    path: PATHS.cafe_detail.path
  },
  service: {
    linkDisplay: 'Перейти на страницу услуги',
    path: PATHS.services_detail.path
  }
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
    <div>
      {levelInfo && (
        <div className={style['level-overlay']}>
          <div className={style['drag']}>
            <ReactSVG
              src={SVG_TYPES[currentLevel]}
              beforeInjection={(svg) => {
                svg.addEventListener('click', e => {
                  e.stopPropagation();
                  const { pageX, pageY } = e
                  let elContent = null
                  levelInfo.forEach(el => {
                    if(e.target.classList.contains(`area-${el.point.toUpperCase()}`)) {
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
          </div>
        </div>
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
            <Link
              to={{
                pathname: generatePath(types[content.type].path, { slug: content.slug}),
                state: {slug: content.slug}
              }}
              className={style['content-link']}
            >{types[content.type].linkDisplay}</Link>
          </div>
        </div>
      )}
    </div>
  )
}

export default CurrentLevel