import classNames from 'classnames'
import Link from 'next/link'
import { SEARCH_BANK_DEFAULT_LINKS } from './constants'

const SearchBank: React.FC = () => {
  return (
    <div
      className={classNames(
        'position-relative mt-4 rounded container p-3 bg-white'
      )}
    >
      <h5 className="mb-3">Popular Searches</h5>
      {SEARCH_BANK_DEFAULT_LINKS.map((link) => {
        return (
          <Link passHref href={link.href} key={link.text}>
            <a className="btn btn-outline-primary me-3">{link.text}</a>
          </Link>
        )
      })}
    </div>
  )
}

export default SearchBank
