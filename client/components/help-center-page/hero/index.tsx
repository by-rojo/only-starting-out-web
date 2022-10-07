import HeroHeadline from '../../hero/headline'
import HeroLayout from '../../hero/layout'
import Input from '../../input'
import Hero from '../../hero'
const HelpHero: React.FC = () => {
  return (
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
  )
}

export default HelpHero
