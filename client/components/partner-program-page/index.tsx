import Breadcrumb from '../breadcrumbs/breadcrumb'
import Breadcrumbs from '../breadcrumbs'
import React from 'react'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import HeroSubHeadline from '../hero/subHeadline'
import FAQSection from './faq-section'
import PartnerTypes from './partner-types'
import PartnerForm from './partner-form'

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
      <FAQSection />
      <hr className="my-5" />
      <div className="container mt-4 px-5 mb-5">
        <div className="row">
          <div className="col-12 col-md-6 mb-4">
            <h3 className="mb-0">Let's partner up!</h3>
            <h3>Get up and running today</h3>
            <p className="fw-bold col-9">
              Become a partner with us. Talk to our founder Robert and find out
              how Only Starting Out can help you!
            </p>
          </div>
          <PartnerForm />
        </div>
      </div>
    </div>
  )
}

export default PartnerProgramPage
