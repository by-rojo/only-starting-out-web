import GettingStarted from './components/getting-started'
import HomePageHero from './components/hero'
import FindTalent from './components/find-talent'

const HomePage: React.FC = () => {
  return (
    <>
      <HomePageHero />
      <GettingStarted />

      <FindTalent />
    </>
  )
}

export default HomePage
