import GetStartedHero from './get-started-hero'
import HowItWorks from './how-it-works'
import TrustSection from './trust-section'
import FAQSection from './faq-section'

const GetStartedPage: React.FC = () => {
  return (
    <div>
      <GetStartedHero />
      <HowItWorks />
      <TrustSection />
      <FAQSection />
    </div>
  )
}

export default GetStartedPage
