import React from 'react'
import useBlog from '../../api-factory/api/client/products/use-blog'
import { cleanHtmlString } from '../../utils'
import Sidebar from '../blogs-page/components/sidebar'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import HelpHero from '../help-center-page/hero'
import ArticleContainer from './components/article-container'

const BlogDetailsPage = () => {
  const blog = useBlog()
  return (
    <div>
      <HelpHero />
      <div className="container mt-4 mb-5">
        <Breadcrumbs>
          <Breadcrumb text="Home" href="/" />
          <Breadcrumb text="Help Center" href="/help-center" />
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
            <ArticleContainer />
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
