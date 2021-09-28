
import { useEffect, useState } from 'react'
import { Link } from 'react-router-dom'
import Select, { components } from 'react-select'
import style from './select.module.scss'

const baseCustomStyles = () => {
  return {
    control: (base) => {
      return {
        ...base,
        minHeight: '100%',
        maxHeight: '100%',
        border: '1px solid #403f3f',
        boxShadow: 'none',
        borderRadius: '1px',
        '&:hover': {
          borderColor: 'hsla(127, 31%, 38%, 0.9)',
        },
        '&:focus': {
          borderColor: 'hsla(127, 31%, 38%, 0.8)',
        },
        '&:active': {
          borderColor: 'hsla(127, 31%, 38%, 0.8)',
        },
      }
    },
    indicatorSeparator: () => ({
      display: 'none',
    }),
    valueContainer: (base) => ({
      ...base,
      padding: '0px',
      paddingLeft: '12px',
    }),
    singleValue: (base) => ({
      ...base,
    }),
    menu: (base) => ({
      ...base,
    }),
    option: (base, { isSelected }) => ({
      ...base,
      color: isSelected ? '#fff' : '#403f3f',
      backgroundColor: isSelected ? 'hsla(127, 31%, 38%, 0.8)' : 'white',
      '&:hover': {
        color: isSelected ? 'hsla(127, 31%, 38%, 0.8)' : '#437F4A',
      },
      '&:active': {
        backgroundColor: '#437F4A',
        color: isSelected ? '#fff' : '#403f3f',
      },
      '&:focus': {
        backgroundColor: '#437F4A',
        color: isSelected ? '#fff' : '#403f3f',
      },
    })
  }
}

const DropdownIndicator = () => {
  return (
    <div style={{ marginRight: '16px' }}>
      <svg
        xmlns='http://www.w3.org/2000/svg'
        width='10'
        height='6'
        viewBox='0 0 10 6'
        fill='none'
      >
        <path d='M0 0H10L5.16129 6L0 0Z' fill='#403f3f' />
      </svg>
    </div>
  )
}

const Option = ({ children, data, ...props }) => {
  return (
    <components.Option className={style['select-option']} key={data.id} value={data.value} {...props}>
      <Link className={style['select-link']} to={{ pathname: data.link, state: { slug: data.slug } }}>
        {children}
      </Link>
    </components.Option>
  )
}

const BaseSelect = ({
  id,
  // isLoading = true,
  options = [],
  label = '',
  value = undefined,
  ...props
}) => {

  return (
    <>
      <label className={style['select-label']} htmlFor={id}>
        <span className={style['select-label__text']}>{label}</span>
      
        <Select
          id={id}
          className={style.select}
          styles={baseCustomStyles()}
          components={{
            DropdownIndicator,
            Option
          }}
          placeholder=''
          // isSearchable
          // isLoading={isLoading}
          options={options}
          value={value}
          {...props}
        />
      </label>
    </>
  )
}

export default BaseSelect
