import React from 'react'
import Button from '../button'
import Headline from '../headline'
import SubHeadline from '../subHeadline'
import { HeroLayoutProps } from './types'

const HeroLayout: React.FC<HeroLayoutProps> = ({
  headline,
  subHeadline,
  href,
  linkText,
  children,
}) => {
  return (
    <div className="col-sm-10 col-lg-7 col-xl-5 col-md-9 p-5 mx-auto mt-5 mb-3 position-relative text-white text-center">
      {headline && <Headline>{headline}</Headline>}
      {subHeadline && <SubHeadline>{subHeadline}</SubHeadline>}
      {linkText && <Button href={href || '#'}>{linkText}</Button>}
      {children}
    </div>
  )
}

export default HeroLayout
