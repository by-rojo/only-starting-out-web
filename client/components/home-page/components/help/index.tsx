import Link from 'next/link'

const Help: React.FC = () => {
  return (
    <div className="container my-5 mx-3">
      <div className="d-flex flex-wrap justify-content-start justify-content-md-center align-items-baseline">
        <div className="col-12 col-md-5">
          <h2 className="h2 fw-light">Have questions?</h2>
          <p>
            Get answers in our Help Center or connect with Customer Support.
          </p>
        </div>
        <div>
          <Link passHref href="/contact-us">
            <a className="btn btn-outline-primary me-3">Contact us</a>
          </Link>
          <Link passHref href="/help-center">
            <a className="btn btn-outline-primary">Get answers</a>
          </Link>
        </div>
      </div>
    </div>
  )
}

export default Help
