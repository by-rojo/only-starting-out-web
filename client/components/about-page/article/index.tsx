import Link from 'next/link'

const Article: React.FC = () => {
  return (
    <>
      <div className="container my-5 fs-5" style={{ maxWidth: 800 }}>
        <p className="py-5">
          <strong>At MentorCruise we ask:</strong> How can we make access to
          mentoring easier, fairer and more effective? These questions guide as
          we build out the MentorCruise network and platform.
        </p>
        <p className="pb-5">
          <strong>
            We make mentoring easier by putting all the information out there in
            the public:
          </strong>{' '}
          Are mentors available? How much do they want for their services? What
          can you expect from a mentorship? Today, you can browse our incredible
          list of mentors and will always find someone that fits.
        </p>
        <p className="pb-5">
          <strong>We make mentoring fairer </strong>by creating equal
          opportunity for a mentorship. We do not put gates around our mentoring
          network, do not put priority on credentials or achievements. If you
          find a mentor that fits you, you will be able to talk to them.
        </p>
        <p className="pb-5">
          <strong>We make mentoring effective</strong> by being transparent with
          the achievements and feedback that our mentors get from their mentees
          and only allowing mentors in our network that we believe can help
          others. These credentials are what makes our mentors so different from
          coaches you&apos;ll find in the wild.
        </p>
      </div>
      <div className="container pb-5 d-flex justify-content-center flex-wrap mt-5 mb-5 pb-2">
        <Link href="/register" passHref shallow>
          <a className="btn btn-dark col-12 col-lg-3 col-md-4">
            Join our program
          </a>
        </Link>
        <Link href="/help-center" passHref shallow>
          <a className="btn btn-info col-12 col-lg-3 ms-md-3 mt-3 mt-md-auto col-md-4">
            Frequently asked questions
          </a>
        </Link>
      </div>
    </>
  )
}

export default Article
