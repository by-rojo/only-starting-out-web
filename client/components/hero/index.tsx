import Image from 'next/image'
import { DEFAULT_BLUR_URL } from '../../constants'
import HeroLayout from './layout'

const Hero: React.FC<HeroPropsWithChildren> = ({ children, image }) => {
  return (
    <section className="bg-dark position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
      {image && (
        <Image
          priority
          loading="eager"
          alt={image?.alt ?? 'hero image'}
          src={image?.src ?? DEFAULT_BLUR_URL}
          layout="fill"
          objectFit="cover"
          quality={100}
          placeholder="blur"
          blurDataURL={DEFAULT_BLUR_URL}
        />
      )}
      {children ?? <HeroLayout />}
    </section>
  )
}

export default Hero
