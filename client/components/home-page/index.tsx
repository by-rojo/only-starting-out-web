import GettingStarted from './components/getting-started'
import HomePageHero from './components/hero'
import FindTalent from './components/find-talent'
import GetIt from './components/get-it'

const HomePage: React.FC = () => {
  return (
    <>
      <HomePageHero />
      <GettingStarted />
      <GetIt />
      <FindTalent />
    </>
  )
}

export default HomePage
