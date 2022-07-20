import Hero from '../../hero'
import HeroButton from '../../hero/button'
import HeroHeadline from '../../hero/headline'
import HeroLayout from '../../hero/layout'
import HeroSubHeadline from '../../hero/subHeadline'

const FindProjectsHero: React.FC = () => {
  return (
    <Hero image={{ src: '/find-work-1.jpg', alt: 'People working together' }}>
      <HeroLayout>
        <br />
        <HeroHeadline>Find Projects</HeroHeadline>
        <HeroSubHeadline>
          Gain experience to reach the next level in your career with projects
          that are perfect for your skill set.
        </HeroSubHeadline>
        <br />
      </HeroLayout>
    </Hero>
  )
}

export default FindProjectsHero
