import Hero from '../../../hero'
import HeroHeadline from '../../../hero/headline'
import HeroLayout from '../../../hero/layout'
import HeroSubHeadline from '../../../hero/subHeadline'
import Search from '../search'
import SearchBank from '../search-bank'
import { useGetMessagePart } from './hooks'
import styles from './styles.module.scss'

const HomePageHero: React.FC = () => {
  const message = useGetMessagePart()

  return (
    <Hero
      image={{
        alt: 'Business people doing work',
        src: '/home-page-hero-2.jpg',
      }}
    >
      <HeroLayout>
        <HeroHeadline>
          The best place to
          <br />
          <span>
            {message}
            <span className={styles.cursor}>|</span>
          </span>
        </HeroHeadline>
        <HeroSubHeadline>
          Start a venture with fresh talent by your side. Grow your business,
          resume, porfolio and take the next steps in your career. All on your
          terms.
        </HeroSubHeadline>
      </HeroLayout>
      <Search />
      <SearchBank />
    </Hero>
  )
}

export default HomePageHero
