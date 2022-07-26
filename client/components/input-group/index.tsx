import classNames from 'classnames'
import { InputGroupProps } from './types'

const InputGroup: React.FC<InputGroupProps> = ({
  className,
  children,
  suffix,
  prefix,
  success,
  primary,
  secondary,
  warning,
  info,
  ...props
}) => {
  const suffixPrefixClassNames = classNames('input-group-text', {
    'bg-success text-white': success,
    'bg-primary text-white': primary,
    'bg-secondary text-dark': secondary,
    'bg-info text-dark': info,
    'bg-warning text-dark': warning,
  })
  return (
    <div className={classNames(className, 'input-group')} {...props}>
      {prefix && <span className={suffixPrefixClassNames}>{prefix}</span>}
      {children}
      {suffix && <span className={suffixPrefixClassNames}>{suffix}</span>}
    </div>
  )
}

export default InputGroup
