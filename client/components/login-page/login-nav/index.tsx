import Link from 'next/link'

const LoginNav: React.FC = () => {
  return (
    <nav className="w-100 position-absolute">
      <div className="d-flex justify-content-end align-items-center m-4">
        <span className="text-muted">Don&apos;t have an account yet?</span>
        <Link passHref href="/register">
          <a className="btn btn-outline-primary ms-3 px-2 px-md-5">Sign Up</a>
        </Link>
      </div>
    </nav>
  )
}

export default LoginNav
