import React from 'react'
import useBlog from '../../api-factory/api/client/products/use-blog'
import { cleanHtmlString } from '../../utils'
import Sidebar from '../blogs-page/components/sidebar'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import HeroSubHeadline from '../hero/subHeadline'
import BlogContainer from './components/blog-container'

const BlogDetailsPage = () => {
  const blog = useBlog()
  const image = blog?.media?.[0]
  return (
    <div>
      <Hero
        image={{
          src: image?.media_details?.sizes?.full?.source_url || '/blog-4.jpg',
          alt: image?.alt_text,
        }}
      >
        <HeroLayout>
          <br />
          <HeroHeadline>{cleanHtmlString(blog?.title?.rendered)}</HeroHeadline>
          <HeroSubHeadline>
            {cleanHtmlString(blog?.excerpt?.rendered)}
          </HeroSubHeadline>
          <br />
        </HeroLayout>
      </Hero>

      <div className="container mt-4 mb-5">
        <Breadcrumbs>
          <Breadcrumb text="Home" href="/" />
          <Breadcrumb text="Blog" href="/blog" />
          <Breadcrumb
            text={cleanHtmlString(blog?.title?.rendered) || ''}
            href={`/blog/${blog?.slug}`}
            active
          />
        </Breadcrumbs>
        <h1 className="mb-5 fw-bold mt-3">
          {cleanHtmlString(blog?.title?.rendered || '')}
          <hr />
        </h1>
        <div className="d-flex justify-content-between flex-wrap">
          <div className="col-12 col-md-8">
            <BlogContainer />
          </div>
          <div className="col-12 col-md-4">
            <Sidebar />
          </div>
        </div>
      </div>
    </div>
  )
}

export default BlogDetailsPage
