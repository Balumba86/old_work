import style from './textarea.module.scss'

const TextArea = ({ label = '', id = '', ...props }) => {
  return (
    <>
      <label className={style['label']} htmlFor={id}>{label}</label>
      <textarea className={style['textarea']} id={id} {...props}></textarea>
    </>
  )
}

export default TextArea