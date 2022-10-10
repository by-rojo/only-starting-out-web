export const CONDITIONS_DATA = {
  codeOfConduct: {
    image: '/conditions-hero.jpg',
    title: 'Code of Conduct',
    href: '/code-of-conduct',
    description:
      'The Code of Conduct is a set of rules that all participants must follow.',
  },
  privacyPolicy: {
    image: '/conditions-hero.jpg',
    title: 'Privacy Policy',
    href: '/privacy-policy',
    description:
      'The Code of Conduct is a set of rules that all participants must follow.',
  },
} as {
  [key: string]: {
    href: string
    image: string
    title: string
    description: string
  }
}
