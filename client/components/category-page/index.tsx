import React from 'react'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import HeroSubHeadline from '../hero/subHeadline'
import ProductList from './components/products-list'
import { ProductListContext } from './context'
const CategoryPage: React.FC = () => {
  return (
    <div>
      <Hero image={{ src: '/shop-1.jpg', alt: 'shopping image' }}>
        <HeroLayout>
          <br />
          <HeroHeadline>Shop for resources</HeroHeadline>
          <HeroSubHeadline>
            Find books, videos, and more to help advance your projects and
            careers.
          </HeroSubHeadline>
          <br />
        </HeroLayout>
      </Hero>
      <ProductListContext>
        <ProductList />
      </ProductListContext>
    </div>
  )
}

export default CategoryPage
