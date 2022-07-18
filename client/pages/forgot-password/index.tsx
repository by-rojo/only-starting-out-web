import type { NextPage } from 'next'
import { StaticPageContext } from '../../context/static-page-context'
import AppHead from '../../components/app-head'
import ForgotPasswordPage from '../../components/forgot-password-page'

const ForgotPassword: NextPage<{}> = () => {
  return (
    <StaticPageContext data={{}}>
      <>
        <AppHead
          title={`Forgot Password – ${process.env.NEXT_PUBLIC_SITE_NAME}`}
          description={process.env.NEXT_PUBLIC_BLOG_PAGE_DESCRIPTION}
        />
        <ForgotPasswordPage />
      </>
    </StaticPageContext>
  )
}

export default ForgotPassword
