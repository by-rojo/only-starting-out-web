import classNames from 'classnames'
import Link from 'next/link'
import { useRouter } from 'next/router'
import Grid from '../grid'

const Tabs: React.FC = () => {
  const router = useRouter()
  const { tab } = router.query
  return (
    <div>
      <ul className="nav nav-pills border-bottom pb-2 mb-3">
        <li className="nav-item">
          <Link shallow href="/help-center?tab=general" passHref scroll={false}>
            <a
              className={classNames('nav-link', {
                active: tab === 'general' || !tab,
              })}
            >
              General
            </a>
          </Link>
        </li>
        <li className="nav-item">
          <Link
            shallow
            href="/help-center?tab=business"
            passHref
            scroll={false}
          >
            <a
              className={classNames('nav-link', {
                active: tab === 'business',
              })}
            >
              Business
            </a>
          </Link>
        </li>
        <li className="nav-item">
          <Link shallow href="/help-center?tab=talent" passHref scroll={false}>
            <a
              className={classNames('nav-link', {
                active: tab === 'talent',
              })}
            >
              Talent
            </a>
          </Link>
        </li>
      </ul>
      {(tab === 'general' || !tab) && <Grid />}
      {tab === 'business' && <Grid />}
      {tab === 'talent' && <Grid />}
    </div>
  )
}

export default Tabs
