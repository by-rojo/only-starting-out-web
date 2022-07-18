import type { NextPage } from 'next'
import { StaticPageContext } from '../../context/static-page-context'
import AppHead from '../../components/app-head'
import RegisterPage from '../../components/register-page'

const Register: NextPage<{}> = () => {
  return (
    <StaticPageContext data={{}}>
      <>
        <AppHead
          title={`Register – ${process.env.NEXT_PUBLIC_SITE_NAME}`}
          description={process.env.NEXT_PUBLIC_BLOG_PAGE_DESCRIPTION}
        />
        <RegisterPage />
      </>
    </StaticPageContext>
  )
}

export default Register
