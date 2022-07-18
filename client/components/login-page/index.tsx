import { SITE_NAME } from '../../constants'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import LoginForm from './login-form'
import LoginNav from './login-nav'

const LoginPage = () => {
  return (
    <>
      <LoginNav />
      <div className="d-flex flex-wrap vh-100">
        <div className="text-white d-none col-12 col-md-4 bg-primary d-md-flex justify-content-center align-items-center">
          <h1>{SITE_NAME}</h1>
        </div>
        <div className="col-12 col-md-8 d-flex justify-content-center align-items-center flex-column">
          <div>
            <Breadcrumbs>
              <Breadcrumb text="Home" href="/" />
              <Breadcrumb text="Login" href="/login" active />
            </Breadcrumbs>

            <LoginForm />
          </div>
        </div>
      </div>
    </>
  )
}

export default LoginPage
