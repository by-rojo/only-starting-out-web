import { KPIS } from './constants'

const TrustSection: React.FC = () => {
  return (
    <div className="bg-dark text-light text-center py-5">
      <div className="container">
        <h2 className="h1 fw-light mb-3 mt-5">
          Trusted by people from all around the world
        </h2>
        <p className="text-light opacity-75 fs-5 mb-5">
          Only Starting Out attracts driven, highly ambitious talent who are
          looking to grow in their careers, businesses and portfolio.
        </p>
        <div className="d-flex justify-content-center mb-4 flex-wrap">
          {KPIS.map((kpi) => (
            <div
              key={kpi.title}
              className="col-12 col-sm-4 col-lg-3 mb-3 mb-md-0  text-center"
            >
              <div className="h1 fw-bolder">{kpi.metric}</div>
              <p className="opacity-75 ">{kpi.title}</p>
            </div>
          ))}
        </div>
      </div>
    </div>
  )
}

export default TrustSection
