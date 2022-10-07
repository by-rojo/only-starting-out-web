import Image from 'next/image'
import Link from 'next/link'
import { MOCK_DATA } from './constants'

const ProfileGrid: React.FC<{}> = () => {
  return (
    <div className="bg-dark">
      <div className="container py-5 text-white">
        <h2 className="fs-1">Meet the team</h2>
        <p className="text-white-50 fs-5">
          The team that created Only Starting Out is here to improve and provide
          you with the best resources possible. We all share the same mission –
          to get someone their first start.
        </p>
        <div className="mx-sm-n4 mx-lg-n5 row d-flex flex-wrap">
          {MOCK_DATA.map((data) => (
            <div
              className="p-3 p-sm-4 p-lg-5 col-12 col-sm-6 col-md-4"
              key={data.id}
            >
              <Link passHref href={`/profile/${data.id}`}>
                <a>
                  <div className="card bg-primary text-white">
                    <div className="p-3 card-img-top d-flex justify-content-center">
                      <Image
                        className="rounded-circle"
                        alt="Profile image"
                        src={data.image}
                        width="200"
                        height="200"
                      />
                    </div>
                    <div className="card-footer">
                      <p className="my-1">{data.name}</p>
                      <small className="d-block text-warning">
                        {data.role}
                      </small>
                    </div>
                  </div>
                </a>
              </Link>
            </div>
          ))}
        </div>
      </div>
    </div>
  )
}

export default ProfileGrid
