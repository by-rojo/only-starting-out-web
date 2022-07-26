import { SelectHTMLAttributes, ReactElement } from 'react'
export interface SelectProps extends SelectHTMLAttributes<HTMLSelectElement> {
  defaultOptionLabel?: string
}
