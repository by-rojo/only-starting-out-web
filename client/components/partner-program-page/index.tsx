import React from 'react'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import HeroSubHeadline from '../hero/subHeadline'
import PartnerTypes from './partner-types'

const PartnerProgramPage: React.FC = () => {
  return (
    <div>
      <Hero
        image={{
          src: '/partner-program-hero.jpg',
          alt: 'People shaking hands',
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
      <div className="container mt-4 mb-4">
        <Breadcrumbs>
          <Breadcrumb text="Home" href="/" />
          <Breadcrumb text="Partner Program" active href="/partner-program" />
        </Breadcrumbs>
        <h1 className="mb-5 fw-bold mt-3">The perfect tool for your network</h1>
        <p className="my-0 mt-n4">
          Partners come in all shapes and forms but they share one thing in
          common: the desire to help others.
        </p>
      </div>
      <PartnerTypes />
    </div>
  )
}

export default PartnerProgramPage
