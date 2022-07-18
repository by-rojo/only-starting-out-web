import GettingStarted from './components/getting-started'
import HomePageHero from './components/hero'
import FindTalent from './components/find-talent'
import GetIt from './components/get-it'
import StartProject from './components/start-project'
import Help from './components/help'

const HomePage: React.FC = () => {
  return (
    <>
      <HomePageHero />
      <GettingStarted />
      <GetIt />
      <FindTalent />
      <StartProject />
      <Help />
    </>
  )
}

export default HomePage
