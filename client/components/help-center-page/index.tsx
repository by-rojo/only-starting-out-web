import React from 'react'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import HelpHero from './hero'
import Tabs from './tabs'

const HelpCenterPage: React.FC = () => {
  return (
    <div>
      <HelpHero />
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
