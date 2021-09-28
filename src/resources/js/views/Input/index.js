import classNames from 'classnames';
import style from './input.module.scss';

const Input = ({ label = '', id = 'input', error = null, touched = null, ...props}) => {
  const inputClasses = classNames({
    [style['input']]: true,
    [style['input_error']]: error && touched,
  })
  return (
    <>
      <label htmlFor={id} className={style['label']}>{label}</label>
      <div className={style['input-overlay']}>
        <input id={id} className={inputClasses} {...props} />
        {error && touched && (
          <div className={style['error-text']}>{error}</div>
        )}
      </div>
    </>
  )
}

export default Input