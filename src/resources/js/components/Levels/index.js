import { useState, useEffect } from 'react'
import { Tabs } from '../../views'
import CurrentLevel from './CurrentLevel'
import api from '../../api'

import style from './levels.module.scss'

const tabsList = [
  {key: 'level-1', label: 'Уровень 1', value: 1},
  {key: 'level-2', label: 'Уровень 2', value: 2},
  {key: 'level-3', label: 'Уровень 3', value: 3},
  {key: 'level-4', label: 'Уровень 4', value: 4},
  {key: 'level-5', label: 'Парковка', value: 5},
]

const Levels = () => {
  const [currentLevel, setCurrentLevel] = useState(1)
  const [levelInfo, setLevelInfo] = useState(null)
  // const [idsList, setIdsList] = useState([])

  const setLevel = (level = 1) => {
    setCurrentLevel(level)
  }

  useEffect(() => {
    if(currentLevel) {
      api.getLevelInfo({id: currentLevel})
        .then(res => {
          // console.log(res, 'res')
          setLevelInfo(res.data)
          // const list = [...res.data].map(el => el.id)
          // setIdsList(list)
        })
        .catch(err => console.log(err, 'err'))
    }
  }, [currentLevel])

  return (
    <section className={style['section']}>
      <h2 className={style['levels-title']}>Карта торгового центра</h2>
      <Tabs
        setCurrentValue={setLevel}
        tabsList={tabsList}
        activeTab={currentLevel}
      />
      <div>
        {currentLevel && levelInfo ? (
          <CurrentLevel levelInfo={levelInfo} currentLevel={currentLevel} />
        ) : <>Loading</>}
{/*         
        {currentLevel === 1 && (
          <FirstLevel levelInfo={levelInfo} idsList={idsList} />
        )}
        {currentLevel === 2 && (
          <SecondLevel />
        )}
        {currentLevel === 3 && (
          <ThirdLevel />
        )}
        {currentLevel === 4 && (
          <FourthLevel />
        )}
        {currentLevel === 5 && (
          <ParkingLevel />
        )} */}
      </div>
    </section>
  )
}

export default Levels