import Hero from '../../../hero'
import HeroHeadline from '../../../hero/headline'
import HeroLayout from '../../../hero/layout'
import HeroSubHeadline from '../../../hero/subHeadline'
import { useGetMessagePart } from './hooks'
import styles from './styles.module.scss'

const HomePageHero: React.FC = () => {
  const message = useGetMessagePart()

  return (
    <Hero>
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
          Start building projects with fresh talent by your side. Grow your
          business, resume, and porfolio and start to take the next steps in
          your career. All on your terms, for a flat monthly price.
        </HeroSubHeadline>
      </HeroLayout>
    </Hero>
  )
}

export default HomePageHero
