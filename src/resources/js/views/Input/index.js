import style from './input.module.scss';

const Input = ({ label = '', id = 'input', ...props}) => {
  return (
    <>
      <label htmlFor={id} className={style['label']}>{label}</label>
      <input id={id} className={style['input']} {...props} />
    </>
  )
}

export default Input