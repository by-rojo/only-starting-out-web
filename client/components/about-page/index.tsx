import Link from 'next/link'
import React from 'react'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import HeroSubHeadline from '../hero/subHeadline'
import Article from './article'
import ProfileGrid from './profile-grid'

const NewsletterPage: React.FC = () => {
  return (
    <div>
      <Hero image={{ src: '/about-hero.jpg', alt: 'Image of team' }}>
        <HeroLayout>
          <br />
          <HeroHeadline>About Us</HeroHeadline>
          <HeroSubHeadline>
            Learn more about our team and our product.
          </HeroSubHeadline>
          <br />
        </HeroLayout>
      </Hero>
      <div className="container mt-4 mb-5">
        <Breadcrumbs>
          <Breadcrumb text="Home" href="/" />
          <Breadcrumb text="About" active href="/about" />
        </Breadcrumbs>
        <h1 className="mb-5 fw-bold mt-3">
          Accelerating career growth
          <hr />
        </h1>
      </div>
      <div className="container">
        <p className="mt-n3">
          {`We shouldn't have to figure everything out on our own. In an age where
          it's easier than ever to connect, let's give someone their start.`}
        </p>

        <div className="d-flex justify-content-start flex-wrap mt-5 mb-5 pb-2">
          <Link href="/register" passHref shallow>
            <a className="btn btn-dark col-12 col-lg-3 col-md-4">
              Join our program
            </a>
          </Link>
          <Link href="/help-center" passHref shallow>
            <a className="btn btn-info col-12 col-lg-3 ms-md-3 mt-3 mt-md-auto col-md-4">
              Frequently asked questions
            </a>
          </Link>
        </div>
      </div>
      <ProfileGrid />
      <Article />
    </div>
  )
}

export default NewsletterPage
