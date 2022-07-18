import Link from 'next/link'

const StartProject: React.FC = () => {
  return (
    <div className="bg-danger p-5">
      <div className="container py-5 mt-3 text-warning d-flex flex-column justify-content-center align-items-center">
        <h2 className="h1 mb-3 fw-light">List a project with us</h2>
        <p className="text-center">
          Post your venture and connect with fresh talent.
          <br />
          <span className="d-block d-sm-inline mt-3">
            Our talent pool has been vetted and ready to do their best work.
          </span>
        </p>
        <Link passHref href="/login">
          <a className="btn btn-lg btn-outline-warning mt-4">Apply today</a>
        </Link>
      </div>
    </div>
  )
}

export default StartProject
