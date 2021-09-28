import { useState } from 'react'
import { useFormik } from 'formik'
import { Icon } from '../../images'
import style from './search.module.scss'

const Search = ({ loadData = () => {} }) => {
  const [isInputEmpty, setInputEmpty] = useState(true)

  const onSubmit = (values, actions) => {
    if(!isInputEmpty) {
      loadData(1, { search: values.search })
      actions.setSubmitting(false)
      if(values.search === '') {
        setInputEmpty(true)
      }
    }
  }

  const formik = useFormik({
    initialValues: {
      search: '',
    },
    onSubmit
  })

  const handleChange = (e) => {
    const { value } = e.target;
    if(value !== '') {
      setInputEmpty(false)
    }
    formik.handleChange(e)
  }

  return (
    <form
      className={style['search']}
      onSubmit={formik.handleSubmit}>
      <input
        className={style['search-input']}
        name='search'
        placeholder='Поиск по названию'
        value={formik.values.search}
        onInput={handleChange}
      />
      <button type='submit' disabled={isInputEmpty || formik.isSubmitting} className={style['search-btn']}>
        <Icon name='search' />
      </button>

    </form>
  )
}

export default Search