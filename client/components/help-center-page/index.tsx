import React from 'react'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import Input from '../input'
import Tabs from './tabs'

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
          <Input placeholder="Search" />
          <br />
        </HeroLayout>
      </Hero>
      <div className="container mt-4 mb-5">
        <Breadcrumbs>
          <Breadcrumb text="Home" href="/" />
          <Breadcrumb text="Help Center" active href="/help-center" />
        </Breadcrumbs>
      </div>
      <div className="container">
        <Tabs />
      </div>
    </div>
  )
}

export default HelpCenterPage
