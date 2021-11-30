import { BaseSelect } from '../../views'
import Search from '../Search'
import style from './filters.module.scss'

const Filters = ({
  filters = [],
  filterValue = null,
  loadData = () => {}
}) => {

  return (
    <div className={style['filters']}>
      <div className={style['filters-left']}>
        <Search loadData={loadData} />
      </div>
      <div className={style['filters-right']}>
        <div className={style['filters-select']}>
          <BaseSelect value={filterValue} options={filters} placeholder='Выберите категорию' label='Категория' />
        </div>
      </div>
    </div>
  )
}

export default Filters