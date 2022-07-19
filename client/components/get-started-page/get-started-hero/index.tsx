import Hero from '../../hero'
import HeroButton from '../../hero/button'
import HeroHeadline from '../../hero/headline'
import HeroLayout from '../../hero/layout'
import HeroSubHeadline from '../../hero/subHeadline'

const GetStartedHero: React.FC = () => {
  return (
    <Hero image={{ src: '/get-started-7.jpg', alt: 'People working together' }}>
      <HeroLayout>
        <br />
        <HeroHeadline>New talent forging dreams into reality</HeroHeadline>
        <HeroSubHeadline>
          Get the resources you need to acheive your goals.
          <br />
          All on your terms.
        </HeroSubHeadline>
        <br />
        <HeroButton href="/register">Register Now</HeroButton>
      </HeroLayout>
    </Hero>
  )
}

export default GetStartedHero
