interface HeroProps {
  image?: WPImage & { objectPosition: string }
}

type HeroPropsWithChildren = PropsWithChildren<HeroProps>
