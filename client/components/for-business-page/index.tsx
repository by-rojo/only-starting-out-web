import FAQSection from './faq-section'
import ForBusinessHero from './for-business-hero'
import HowItWorks from './how-it-works'
import ProblemStatement from './problem-statement'
import ProfileGrid from './profile-grid'

const ForBusinessPage: React.FC = () => {
  return (
    <div>
      <ForBusinessHero />
      <HowItWorks />
      <ProblemStatement />
      <ProfileGrid />
      <FAQSection />
    </div>
  )
}

export default ForBusinessPage
