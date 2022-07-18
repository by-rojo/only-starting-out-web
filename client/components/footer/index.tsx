import Link from 'next/link'
import React from 'react'
import { COMPANY_NAME, SITE_NAME } from '../../constants'
import LinkBank from './components/link-bank'
import {
  COMPANY_LINKS,
  PLATFORM_LINKS,
  RESOURCE_LINKS,
  SOCIAL_ICONS,
} from './constants'

const year = new Date().getFullYear()

const Footer: React.FC = () => {
  return (
    <footer className="text-dark bg-white">
      <hr />
      <div className=" container-md pt-4">
        <div className="container-fluid px-3">
          <footer className="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
            <div className="col-12 col-lg-4">
              <div className="h2 mb-3 text-primary">{SITE_NAME}</div>
              <p className="text-muted">
                Your trusted source to find highly-vetted entry-level
                professionals to move careers and ventures ahead.
              </p>
              <ul className="justify-content-start list-unstyled d-flex">
                {SOCIAL_ICONS.map(({ alt, Icon, href }) => {
                  return (
                    <li key={alt} className="me-3">
                      <Link href={href} passHref>
                        <a
                          className="text-muted"
                          target="_blank"
                          aria-label={alt}
                        >
                          <Icon />
                        </a>
                      </Link>
                    </li>
                  )
                })}
              </ul>
            </div>
            <div className="mt-4 mt-md-0 d-flex col justify-content-center flex-wrap">
              <LinkBank title="Platform" links={PLATFORM_LINKS} />
              <LinkBank title="Resources" links={RESOURCE_LINKS} />
              <LinkBank title="Company" links={COMPANY_LINKS} />
            </div>
            <div className="col-12 text-center text-muted mt-5 mb-3">
              &copy; {year}{' '}
              <a className="text-muted" href="https://byrojo.com">
                {COMPANY_NAME}
              </a>
              . All rights reserved.
            </div>
          </footer>
        </div>
      </div>
    </footer>
  )
}
export default Footer
