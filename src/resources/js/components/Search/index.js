import { useFormik } from 'formik'
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
      <button type='submit' className={style['search-btn']}></button>

    </form>
  )
}

export default Search