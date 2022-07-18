import { SITE_NAME } from '../../constants'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import ForgotPasswordForm from './forgot-password-form'
import ForgotPasswordNav from './forgot-password-nav'

const ForgotPasswordPage = () => {
  return (
    <>
      <ForgotPasswordNav />
      <div className="d-flex flex-wrap vh-100">
        <div className="text-white d-none col-12 col-md-4 bg-primary d-md-flex justify-content-center align-items-center">
          <h1>{SITE_NAME}</h1>
        </div>
        <div className="col-12 col-md-8 d-flex justify-content-center align-items-center flex-column">
          <div>
            <Breadcrumbs>
              <Breadcrumb text="Home" href="/" />
              <Breadcrumb
                text="Forgot Password"
                href="/forgot-password"
                active
              />
            </Breadcrumbs>
            <h2 className="mt-3">Reset your password</h2>
            <p>A password reset link is going to be sent to you!</p>
            <ForgotPasswordForm />
          </div>
        </div>
      </div>
    </>
  )
}

export default ForgotPasswordPage
