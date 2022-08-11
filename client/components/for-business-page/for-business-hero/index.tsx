import Hero from '../../hero'
import HeroButton from '../../hero/button'
import HeroHeadline from '../../hero/headline'
import HeroLayout from '../../hero/layout'
import HeroSubHeadline from '../../hero/subHeadline'

const ForBusinessHero: React.FC = () => {
  return (
    <Hero
      image={{
        src: '/for-business-hero-2.jpg',
        alt: 'People working together',
      }}
    >
      <HeroLayout>
        <br />
        <HeroHeadline>Find fresh new talent, just one click away</HeroHeadline>
        <HeroSubHeadline>
          Everyone needs their start. Find the right person for your business
          needs.
        </HeroSubHeadline>
        <br />
        <HeroButton href="/register">Find New Talent</HeroButton>
      </HeroLayout>
    </Hero>
  )
}

export default ForBusinessHero
