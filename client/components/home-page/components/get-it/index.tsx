import classNames from 'classnames'
import Image from 'next/image'
import Link from 'next/link'
import { DEFAULT_BLUR_URL } from '../../../../constants'
import { SEARCH_BANK_DEFAULT_LINKS } from '../search-bank/constants'
import styles from './styles.module.scss'

const GetIt: React.FC = () => {
  return (
    <div className="d-flex my-5 flex-wrap bg-warning">
      <div
        className={classNames(
          'col-12 col-md-7 position-relative',
          styles.image
        )}
      >
        <Image
          priority
          loading="eager"
          alt="??"
          src="/birds-eye-view-desk-work.jpg"
          layout="fill"
          objectFit="cover"
          quality={100}
          placeholder="blur"
          blurDataURL={DEFAULT_BLUR_URL}
        />
      </div>
      <div className="my-5 py-2 py-md-5 col-12 col-md-5 d-flex flex-column justify-content-center align-items-center text-center">
        <h2>You&apos;ve got this!</h2>
        <p className="mb-4">Find someone who needs experience in:</p>

        {SEARCH_BANK_DEFAULT_LINKS.map((link) => (
          <Link href={link.href} passHref key={link.text}>
            <a className="btn btn-link text-decoration-none">{link.text}</a>
          </Link>
        ))}
        <Link href="/get-started" passHref>
          <a className="btn btn-primary mt-5 btn-lg w-50">Get Started</a>
        </Link>
      </div>
    </div>
  )
}

export default GetIt
