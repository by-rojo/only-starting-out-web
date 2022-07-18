import GettingStarted from './components/getting-started'
import HomePageHero from './components/hero'
import FindTalent from './components/find-talent'
import GetIt from './components/get-it'
import StartProject from './components/start-project'

const HomePage: React.FC = () => {
  return (
    <>
      <HomePageHero />
      <GettingStarted />
      <GetIt />
      <FindTalent />
      <StartProject />
    </>
  )
}

export default HomePage
