import Image from 'next/image'
import Link from 'next/link'
import { HOW_IT_WORKS_LIST } from './constants'

const HowItWorks: React.FC = () => {
  return (
    <div className="container my-5">
      <small className="text-center d-block fw-bold text-uppercase">
        How it works
      </small>
      <h2 className="h1 text-center fw-light">
        Get started in your new career path.
      </h2>
      <p className="text-center text-muted">
        Sometimes all you need is your start. Let us connect you with the
        perfect one.
      </p>
      <div className="d-flex flex-wrap mx-n3 mt-5">
        {HOW_IT_WORKS_LIST.map((item) => (
          <div key={item.title} className="col-12 col-lg-6 d-flex">
            <div className="card m-3 shadow-sm">
              <div className="row g-0 h-100">
                <div className="col-4 position-relative">
                  <Image
                    src={item.image.src}
                    alt={item.image.alt}
                    objectFit="cover"
                    layout="fill"
                  />
                </div>
                <div className="col-8">
                  <div className="card-body">
                    <h5 className="card-title text-primary fw-bold">
                      {item.title}
                    </h5>
                    <p className="card-text">{item.description}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        ))}
      </div>
      <div className="d-flex justify-content-center flex-wrap mt-5 mb-5 pb-2">
        <Link href="/register" passHref>
          <a className="btn btn-dark col-12 col-lg-3 col-md-4">
            Join our program
          </a>
        </Link>
        <Link href="/faq" passHref>
          <a className="btn btn-info col-12 col-lg-3 ms-md-3 mt-3 mt-md-auto col-md-4">
            Frequently asked questions
          </a>
        </Link>
      </div>
    </div>
  )
}

export default HowItWorks
