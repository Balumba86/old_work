import classNames from 'classnames';
import { IMaskInput } from 'react-imask';
import style from './input.module.scss'

const InputPhone = ({
  value,
  setFieldValue,
  name,
  onBlur,
  id,
  label = '',
   error = null,
   touched = null,
   ...props
}) => {

  const inputClasses = classNames({
    [style['input']]: true,
    [style['input_error']]: error && touched,
  })
  return (
    <>
      <label htmlFor={id} className={style['label']}>{label}</label>
      <div className={style['input-overlay']}>
        <IMaskInput
          mask={'+{7}(000)000-00-00'}
          radix="."
          value={value}
          unmask={true}
          onAccept={(value, mask) => setFieldValue(name, value)}
          className={inputClasses}
          name={name}
          onBlur={onBlur}
          {...props}
        />
        {error && touched && (
          <div className={style['error-text']}>{error}</div>
        )}
      </div>
    </>
  )
}

export default InputPhone