import Link from 'next/link'
import { FAQ } from './constants'

const FAQSection: React.FC = () => {
  return (
    <div className="pt-3">
      <div className="container d-flex my-5 flex-wrap">
        <div className="col-12 col-md-4 col-lg-3">
          <div className="mb-5">
            <h2 className="h1 fw-light ">Frequently asked questions</h2>
            <p>
              Can&apos;t find the answer you&apos;re looking for? Reach out to
              our&nbsp;
              <Link href="/customer-support">customer support</Link> team.
            </p>
          </div>
        </div>
        <div className="col-12 col-md-8 col-lg-9">
          <div className="ms-md-5">
            {FAQ.map((item, i) => (
              <div key={item.title}>
                <h3 className="fw-light text-dark">{item.title}</h3>
                <p>{item.description}</p>
                {i !== FAQ.length - 1 && <hr className="my-4" />}
              </div>
            ))}
          </div>
        </div>
      </div>
    </div>
  )
}

export default FAQSection
