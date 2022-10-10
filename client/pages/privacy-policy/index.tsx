import type { NextPage } from 'next'
import wpMenues from '../../api-factory/wp/menus'
import Footer from '../../components/footer'
import { dehydrate, QueryClient } from 'react-query'
import NavBar from '../../components/nav-bar'
import ConditionsPage from '../../components/conditions-page'
import { StaticPageContext } from '../../context/static-page-context'
import AppHead from '../../components/app-head'

const PrivacyPolicy: NextPage<BlogsPageStaticData> = ({ menu }) => {
  return (
    <StaticPageContext data={{ menu }}>
      <>
        <AppHead
          title={`Privacy Policy – ${process.env.NEXT_PUBLIC_SITE_NAME}`}
          description={process.env.NEXT_PUBLIC_BLOG_PAGE_DESCRIPTION}
        />
        <NavBar />
        <ConditionsPage type="privacyPolicy" />
        <Footer />
      </>
    </StaticPageContext>
  )
}

// This function gets called at build time on server-side.
// It may be called again, on a serverless function, if
// revalidation is enabled and a new request comes in
export async function getServerSideProps({
  query,
}: {
  query: { page: string }
}) {
  const queryClient = new QueryClient()
  const menu = await wpMenues()

  return {
    props: {
      dehydratedState: dehydrate(queryClient),
      menu: menu.message ? { data: [], message: menu.message } : { data: menu },
    },
  }
}

export default PrivacyPolicy
