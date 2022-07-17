/** @type {import('next').NextConfig} */
const path = require('path')

const nextConfig = {
  reactStrictMode: true,
  images: {
    domains: [process.env.IMAGE_DOMAIN_1, 'localhost'],
    formats: ['image/avif', 'image/webp'],
    deviceSizes: [640, 750, 828, 1080, 1200, 1920, 2048, 3840],
  },
  webpack(config) {
    config.module.rules.push({
      test: /\.svg$/,
      use: ['@svgr/webpack'],
    })

    return config
  },
  sassOptions: {
    includePaths: [path.join(__dirname, 'styles')],
    additionalData: '@import "variables";',
  },
}

module.exports = nextConfig
