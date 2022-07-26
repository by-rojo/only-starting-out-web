import { SelectProps } from './types'
import classNames from 'classnames'

const Select: React.FC<SelectProps> = ({
  children,
  defaultOptionLabel,
  className,
  ...props
}) => {
  return (
    <select className={classNames('form-select', className)} {...props}>
      {defaultOptionLabel && <option value="">{defaultOptionLabel}</option>}
      {children}
    </select>
  )
}

export default Select
