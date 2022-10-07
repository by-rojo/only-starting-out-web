import React from 'react'
import category from '../../api-factory/wp/category'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import HeroSubHeadline from '../hero/subHeadline'

const HelpCenterPage: React.FC = () => {
  return (
    <div>
      <Hero
        image={{
          objectPosition: 'top',
          src: '/help-center-hero.jpg',
          alt: 'Letter',
        }}
      >
        <HeroLayout>
          <br />
          <HeroHeadline>Help Center</HeroHeadline>
          <HeroSubHeadline>
            Find answers to all of your questions.
          </HeroSubHeadline>
          <br />
        </HeroLayout>
      </Hero>
      <div className="container mt-4 mb-5">
        <Breadcrumbs>
          <Breadcrumb text="Home" href="/" />
          <Breadcrumb text="Help Center" active href="/help-center" />
        </Breadcrumbs>
        <h1 className="mb-5 fw-bold mt-3">
          F.A.Q.
          <hr />
        </h1>
      </div>
    </div>
  )
}

export default HelpCenterPage
