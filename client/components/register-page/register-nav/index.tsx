import Link from 'next/link'

const RegisterNav: React.FC = () => {
  return (
    <nav className="w-100 position-absolute">
      <div className="d-flex justify-content-end align-items-center m-4">
        <span className="text-muted">Already have an account?</span>
        <Link passHref href="/login">
          <a className="btn btn-outline-primary ms-3 px-2 px-md-5">Sign In</a>
        </Link>
      </div>
    </nav>
  )
}

export default RegisterNav
