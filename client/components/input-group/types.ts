import { ReactElement } from 'react'
interface InputGroup {
  suffix?: ReactElement | string | number
  prefix?: ReactElement | string | number
  success?: boolean
  primary?: boolean
  secondary?: boolean
  info?: boolean
  warning?: boolean
}

export type InputGroupProps = InputGroup & React.HTMLAttributes<HTMLDivElement>
