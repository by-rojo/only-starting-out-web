import Hero from '../../hero'
import HeroHeadline from '../../hero/headline'
import HeroLayout from '../../hero/layout'
import HeroSubHeadline from '../../hero/subHeadline'

const FindTalentHero: React.FC = () => {
  return (
    <Hero
      image={{
        objectPosition: 'top',
        src: '/find-talent-hero.jpg',
        alt: '3 people walking down a hall wearing business attire.',
      }}
    >
      <HeroLayout>
        <br />
        <HeroHeadline>Find Talent</HeroHeadline>
        <HeroSubHeadline>
          Find the right talent for your project or business. Everyone is and
          eager to start.
        </HeroSubHeadline>
        <br />
      </HeroLayout>
    </Hero>
  )
}

export default FindTalentHero
