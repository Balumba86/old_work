import { useFormik } from 'formik'
import { Icon } from '../../images'
import style from './search.module.scss'

const Search = () => {

  const onSubmit = (values, actions) => {}

  const formik = useFormik({
    initialValues: {
      search: '',
      onSubmit
    }
  })
  return (
    <form
      className={style['search']}
      onSubmit={formik.handleSubmit}>
      <input
        className={style['search-input']}
        name='search'
        placeholder='Поиск по названию'
        value={formik.values.search}
        onInput={formik.handleChange}
      />
      <button type='submit' className={style['search-btn']}>
        {/* <Icon name='audio' /> */}
      </button>

    </form>
  )
}

export default Search