import Link from 'next/link'

const LinkBank: React.FC<{
  title: string
  links: { href: string; text: string }[]
}> = ({ links, title }) => {
  return (
    <div className="col-12 col-sm-4 col-xl-3 mb-5 mt-md-0">
      <h6 className="text-uppercase fw-bold text-muted ">{title}</h6>
      {links.map((link) => (
        <div key={link.text}>
          <Link passHref href={link.href}>
            <a className="btn btn-link px-0">{link.text}</a>
          </Link>
        </div>
      ))}
    </div>
  )
}

export default LinkBank
