import React from 'react'
import category from '../../api-factory/wp/category'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import HeroSubHeadline from '../hero/subHeadline'
import Input from '../input'

const NewsletterPage: React.FC = () => {
  return (
    <div>
      <Hero image={{ src: '/newsletter-hero.jpg', alt: 'Letter' }}>
        <HeroLayout>
          <br />
          <HeroHeadline>Newsletter</HeroHeadline>
          <HeroSubHeadline>
            Signup for our newsletter to stay on top of the latest news and
            events.
          </HeroSubHeadline>
          <br />
        </HeroLayout>
      </Hero>
      <div className="container mt-4 mb-5">
        <Breadcrumbs>
          <Breadcrumb text="Home" href="/" />
          <Breadcrumb text="Newsletter" active href="/newsletter" />
        </Breadcrumbs>
        <h1 className="mb-5 fw-bold mt-3">
          Accelerate your career growth
          <hr />
        </h1>
        <p className="my-0 mt-n3">
          Learn from the best of the industry – be it honing your skill, growing
          your business or the hidden career hacks that will help you get where
          you want to be.
        </p>
        <div className="row">
          <div className="col-12 col-md-8 col-lg-5">
            <form>
              <div className="form-group mt-5 mb-4">
                <label htmlFor="email" className="fw-bold mb-2">
                  Email address
                </label>
                <Input
                  id="email"
                  required
                  type="email"
                  placeholder="Enter your email address"
                  name="email"
                />
              </div>
              <button type="submit" className="btn btn-primary">
                Submit
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  )
}

export default NewsletterPage
