import Link from 'next/link'
import { MOCK_DATA } from './constants'

const Grid: React.FC<{
  gridData?: {
    title: string
    slug: string
    data: { id: number; title: string; slug: string }[]
  }[]
}> = ({ gridData }) => {
  return (
    <div className="row d-flex flex-wrap">
      {(gridData || MOCK_DATA).map((data) => {
        return (
          <div className="col-12 col-md-6 col-lg-4 mb-3" key={data.title}>
            <div className="card">
              <div className="card-body">
                <h5 className="card-title mb-4">{data.title}</h5>
                <div>
                  {data.data.map((item) => {
                    return (
                      <Link
                        passHref
                        href={`/help-center/${item.slug}`}
                        key={item.id}
                      >
                        <a className="d-block text-decoration-none text-body my-2">
                          {item.title}
                        </a>
                      </Link>
                    )
                  })}
                </div>
              </div>
              <div className="card-body mt-n3">
                <Link passHref href={`/help-center/${data.slug}`}>
                  <a className="text-decoration-none">See all articles</a>
                </Link>
              </div>
            </div>
          </div>
        )
      })}
    </div>
  )
}

export default Grid
