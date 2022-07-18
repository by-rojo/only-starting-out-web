import { SITE_NAME } from '../../constants'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import RegisterForm from './register-form'
import RegisterNav from './register-nav'

const RegisterPage = () => {
  return (
    <>
      <RegisterNav />
      <div className="d-flex flex-wrap vh-100">
        <div className="text-white d-none col-12 col-md-4 bg-primary d-md-flex justify-content-center align-items-center">
          <h1>{SITE_NAME}</h1>
        </div>
        <div className="col-12 col-md-8 d-flex justify-content-center align-items-center flex-column">
          <div>
            <Breadcrumbs>
              <Breadcrumb text="Home" href="/" />
              <Breadcrumb text="Register" href="/register" active />
            </Breadcrumbs>
            <h2 className="mt-3">Create an account</h2>
            <p>Manage, find, and build projects</p>
            <RegisterForm />
          </div>
        </div>
      </div>
    </>
  )
}

export default RegisterPage
