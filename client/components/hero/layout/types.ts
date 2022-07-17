import { ReactNode } from 'react'

export interface HeroLayoutProps {
  children?: ReactNode | undefined
  headline?: string
  subHeadline?: string
  href?: string
  linkText?: string | ReactNode
}
