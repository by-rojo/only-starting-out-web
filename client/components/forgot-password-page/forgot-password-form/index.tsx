import Link from 'next/link'
import { FormEvent } from 'react'

const ForgotPasswordForm: React.FC = () => {
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
        </div>
        <button type="submit" className="btn btn-primary mt-3 w-100">
          Confirm
        </button>
      </form>
    </div>
  )
}

export default ForgotPasswordForm
