import classNames from 'classnames'

const Input: React.FC<React.InputHTMLAttributes<HTMLInputElement>> = ({
  className,
  ...props
}) => {
  return (
    <input
      placeholder="Search for ventures"
      {...props}
      className={classNames(className, 'form-control form-control-lg')}
    ></input>
  )
}

export default Input
