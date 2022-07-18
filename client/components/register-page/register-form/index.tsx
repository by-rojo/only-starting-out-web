import classNames from 'classnames'
import Link from 'next/link'
import { FormEvent } from 'react'
import styles from './styles.module.scss'

const RegisterPage: React.FC = () => {
  const onSubmit = (e: FormEvent<HTMLFormElement>) => {
    e.preventDefault()
  }

  return (
    <div className={classNames('mt-3', styles.container)}>
      <form onSubmit={onSubmit}>
        <div className="form-group mb-3">
          <label htmlFor="firstNameInput">First name</label>
          <input
            type="name"
            className="form-control"
            id="firstNameInput"
            name="firstName"
            aria-describedby="firstNameHelp"
            required
            placeholder="Enter first name"
          />
        </div>
        <div className="form-group mb-3">
          <label htmlFor="secondNameINput">Last name</label>
          <input
            type="name"
            className="form-control"
            id="lastNameInput"
            name="lastName"
            aria-describedby="lastNameHelp"
            required
            placeholder="Enter last name"
          />
        </div>
        <div className="form-group mb-3">
          <label htmlFor="exampleInputEmail1">Email address</label>
          <input
            type="email"
            className="form-control"
            id="exampleInputEmail1"
            name="email"
            aria-describedby="emailHelp"
            required
            placeholder="Enter email"
          />
          <small id="emailHelp" className="form-text text-muted">
            We&apos;ll never share your email with anyone else.
          </small>
        </div>
        <div className="form-group mb-3">
          <label htmlFor="passwordInput">Password</label>
          <input
            type="password"
            className="form-control"
            name="password"
            id="passwordInput"
            placeholder="Password"
            required
          />
        </div>
        <div className="form-group mb-3">
          <label htmlFor="confirmPasswordInput">Confirm password</label>
          <input
            type="password"
            className="form-control"
            name="confirmPassword"
            id="confirmPasswordInput"
            placeholder="Confirm password"
            required
          />
        </div>
        <button type="submit" className="btn btn-primary my-3 w-100">
          Sign up
        </button>

        <p>
          By clicking &quot;Sign Up&quot; you accept the{' '}
          <Link href="/tos">Terms of Service</Link> and{' '}
          <Link href="/privacy-policy">Privacy Policy</Link>.
        </p>
      </form>
    </div>
  )
}

export default RegisterPage
