import type { NextPage } from 'next'
import { StaticPageContext } from '../../context/static-page-context'
import AppHead from '../../components/app-head'
import LoginPage from '../../components/login-page'

const Login: NextPage<{}> = () => {
  return (
    <StaticPageContext data={{}}>
      <>
        <AppHead
          title={`Login – ${process.env.NEXT_PUBLIC_SITE_NAME}`}
          description={process.env.NEXT_PUBLIC_BLOG_PAGE_DESCRIPTION}
        />
        <LoginPage />
      </>
    </StaticPageContext>
  )
}

export default Login
