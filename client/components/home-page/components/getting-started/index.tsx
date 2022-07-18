import Link from 'next/link'
import StepCard from '../step-card'

const GettingStarted: React.FC = () => {
  return (
    <div className="container mt-5 pt-2">
      <h2 className="text-center fw-light h1">
        Getting started is easier than you think
      </h2>
      <div className="d-flex flex-wrap mx-5 mt-5">
        <StepCard
          number={1}
          header="Tell us what you need"
          subHeader="Connect with experts in more than 300 skills and subjects."
        />
        <StepCard
          number={2}
          header="Choose who to work with"
          subHeader="Search online for a partner with the right qualifications and hourly rates."
        />
        <StepCard
          number={3}
          header="Book a meeting"
          subHeader="Meet with talented partners, and only pay for the time needed."
        />
      </div>
      <div className="d-flex justify-content-center align-items-center mb-5 pt-3">
        <Link passHref href="/get-started">
          <a className="btn btn-lg btn-primary">Get Started</a>
        </Link>
      </div>
    </div>
  )
}
export default GettingStarted
