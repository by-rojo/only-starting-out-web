import Link, { LinkProps } from 'next/link'
import { PropsWithChildren } from 'react'

const HeroButton: React.FC<PropsWithChildren<LinkProps>> = ({
  children,
  ...props
}) => {
  return (
    <Link passHref {...props}>
      <a className="btn btn-outline-light btn-lg">{children}</a>
    </Link>
  )
}

export default HeroButton
