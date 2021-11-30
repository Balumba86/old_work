import classNames from 'classnames'
import style from './tabs.module.scss'

const Tabs = ({
  setCurrentValue = () => {},
  tabsList = null,
  activeTab
}) => {

  const handleClick = (e, value) => {
    e.preventDefault()
    setCurrentValue(value)
  }

  return (
    <ul className={style['tabs']}>
      {tabsList && tabsList.map(tab => {
        const linkClasses = classNames({
          [style['tabs--link']]: true,
          [style['tabs--link-active']]: activeTab && activeTab === tab.value
        })
        return (
        <li className={style['tabs--item']} key={tab.key}>
          <a className={linkClasses} onClick={e => handleClick(e, tab.value)}>{tab.label}</a>
        </li>
        )
      })}
    </ul>
  )
}

export default Tabs