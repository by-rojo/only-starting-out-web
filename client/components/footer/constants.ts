import {
  FACEBOOK_PROFILE_URL,
  INSTAGRAM_PROFILE_URL,
  PINTEREST_PROFILE_URL,
  TIKTOK_PROFILE_URL,
  TWITTER_PROFILE_URL,
  YOUTUBE_PROFILE_URL,
} from '../../constants'

import Facebook from 'bootstrap-icons/icons/facebook.svg'
import Instagram from 'bootstrap-icons/icons/instagram.svg'
import Pinterest from 'bootstrap-icons/icons/pinterest.svg'
import Tiktok from 'bootstrap-icons/icons/tiktok.svg'
import Twitter from 'bootstrap-icons/icons/twitter.svg'
import Youtube from 'bootstrap-icons/icons/youtube.svg'

export const SOCIAL_ICONS = [
  {
    alt: 'tiktok',
    Icon: Tiktok,
    href: TIKTOK_PROFILE_URL,
  },
  {
    alt: 'pinterest',
    Icon: Pinterest,
    href: PINTEREST_PROFILE_URL,
  },
  {
    alt: 'youtube',
    Icon: Youtube,
    href: YOUTUBE_PROFILE_URL,
  },
  {
    alt: 'instagram',
    Icon: Instagram,
    href: INSTAGRAM_PROFILE_URL,
  },
  {
    alt: 'facebook',
    Icon: Facebook,
    href: FACEBOOK_PROFILE_URL,
  },
  {
    alt: 'twitter',
    Icon: Twitter,
    href: TWITTER_PROFILE_URL,
  },
]

export const PLATFORM_LINKS = [
  {
    href: '/find-talent',
    text: 'Browse Talent',
  },
  {
    href: '/find-projects',
    text: 'Browse Projects',
  },
  {
    href: '/help-center/book-meeting',
    text: 'Book Meeting',
  },
  {
    href: '/help-center/become-the-talent',
    text: 'Become the talent',
  },
  {
    href: '/help-center/list-a-venture',
    text: 'List a venture',
  },
]

export const RESOURCE_LINKS = [
  {
    href: '/newsletter',
    text: 'Newsletter',
  },
  {
    href: '/shop',
    text: 'Shop for resources',
  },
  {
    href: '/blog',
    text: 'Read our blog',
  },
  {
    href: '/templates',
    text: 'Templates',
  },
  {
    href: '/shop/book',
    text: 'Recommended Books',
  },
]

export const COMPANY_LINKS = [
  {
    href: '/about',
    text: 'About',
  },
  {
    href: '/partner-program',
    text: 'Partner Program',
  },
  {
    href: '/write-for-us',
    text: 'Write for us',
  },
  {
    href: '/code-of-conduct',
    text: 'Code of conduct',
  },
  {
    href: '/privacy-policy',
    text: 'Privacy policy',
  },
]
