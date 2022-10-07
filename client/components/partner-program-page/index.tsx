import React from 'react'
import category from '../../api-factory/wp/category'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import HeroSubHeadline from '../hero/subHeadline'
import Input from '../input'

const PartnerProgramPage: React.FC = () => {
  return (
    <div>
      <Hero
        image={{
          src: '/partner-program-hero.jpg',
          alt: 'Letter',
        }}
      >
        <HeroLayout>
          <br />
          <HeroHeadline>Partner Program</HeroHeadline>
          <HeroSubHeadline>
            Join our partner program and help people gain the connections needed
            to start their first project.
          </HeroSubHeadline>
          <br />
        </HeroLayout>
      </Hero>
      <div className="container mt-4 mb-5">
        <Breadcrumbs>
          <Breadcrumb text="Home" href="/" />
          <Breadcrumb text="Partner Program" active href="/partner-program" />
        </Breadcrumbs>
        <h1 className="mb-5 fw-bold mt-3">
          A gem for your audience, community and network
        </h1>
        <p className="my-0 mt-n4">
          Partners come in all shapes and forms but they share one thing in
          common: the desire to help others.
        </p>
      </div>
    </div>
  )
}

export default PartnerProgramPage
