import React from 'react'
import category from '../../api-factory/wp/category'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import HeroSubHeadline from '../hero/subHeadline'
import ContactForm from './contact-form'
import AltContact from './alt-contact'
const ContactUsPage: React.FC = () => {
  return (
    <div>
      <Hero image={{ src: '/contact-us-hero.jpg', alt: 'Letter' }}>
        <HeroLayout>
          <br />
          <HeroHeadline>Contact Us</HeroHeadline>
          <HeroSubHeadline>We are always here to help you.</HeroSubHeadline>
          <br />
        </HeroLayout>
      </Hero>
      <div className="container mt-4 mb-5">
        <Breadcrumbs>
          <Breadcrumb text="Home" href="/" />
          <Breadcrumb text="Contact Us" active href="/contact-us" />
        </Breadcrumbs>
        <h1 className="mb-5 fw-bold mt-3">
          Leave us a message
          <hr />
        </h1>
        <div className="row">
          <ContactForm />
          <AltContact />
        </div>
      </div>
    </div>
  )
}

export default ContactUsPage
