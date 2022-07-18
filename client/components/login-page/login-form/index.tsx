import Link from 'next/link'
import { FormEvent } from 'react'

const LoginForm: React.FC = () => {
  const onSubmit = (e: FormEvent<HTMLFormElement>) => {
    e.preventDefault()
  }

  return (
    <div className="mt-3">
      <form onSubmit={onSubmit}>
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
          <label htmlFor="exampleInputPassword1">Password</label>
          <input
            type="password"
            className="form-control"
            name="password"
            id="exampleInputPassword1"
            placeholder="Password"
            required
          />
        </div>
        <div className="form-check">
          <input
            type="checkbox"
            className="form-check-input"
            id="exampleCheck1"
            name="remember"
          />
          <label className="form-check-label" htmlFor="exampleCheck1">
            Remember me
          </label>
        </div>
        <button type="submit" className="btn btn-primary mt-3 w-100">
          Login
        </button>
      </form>
      <p className="mt-4">
        Forgot your username/password?
        <Link href="/forgot-password" passHref>
          <a className="ms-1">Click here</a>
        </Link>
        .
      </p>
    </div>
  )
}

export default LoginForm
