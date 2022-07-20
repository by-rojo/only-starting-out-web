import type { NextPage } from 'next'
import wpMenues from '../../api-factory/wp/menus'
import wpProducts from '../../api-factory/wp/products'
import Footer from '../../components/footer'
import Page from '../../components/category-page'
import NavBar from '../../components/nav-bar'
import { DEFAULT_RECENT_PRODUCTS_PARAMS } from '../../constants'
import { StaticPageContext } from '../../context/static-page-context'
import AppHead from '../../components/app-head'
import { dehydrate, QueryClient } from 'react-query'

//todo this needs to be like the old home page with sections split out

const ProductCategoryPage: NextPage<CategoryPageStaticData> = ({
  menu,
  products,
}) => {
  return (
    <StaticPageContext data={{ menu, products }}>
      <>
        <AppHead title="Shop" description="Shop for the best resources" />
        <NavBar />
        <Page />
        <Footer />
      </>
    </StaticPageContext>
  )
}

// This function gets called at build time on server-side.
// It may be called again, on a serverless function, if
// revalidation is enabled and a new request comes in
export async function getStaticProps() {
  const menu = await wpMenues()
  const queryClient = new QueryClient()
  const products = await wpProducts({
    ...DEFAULT_RECENT_PRODUCTS_PARAMS,
  })

  await queryClient.prefetchQuery('products', () => products)

  return {
    props: {
      menu: menu.message ? { data: [], message: menu.message } : { data: menu },
      products,
      dehydratedState: dehydrate(queryClient),
    },
    // Next.js will attempt to re-generate the page:
    // - When a request comes in
    // - At most once every 10 seconds
    revalidate: parseInt(`${process.env.HOME_PAGE_CACHE_SECONDS ?? 60}`, 10),
  }
}

export default ProductCategoryPage
