import classNames from 'classnames'
import Image from 'next/image'
import { LOGOS } from './constants'
import styles from './styles.module.scss'

const FindTalent: React.FC = () => {
  return (
    <div className="container my-5">
      <h2 className="text-center fw-light h1 my-5">
        Find ventures started by industry veterans
      </h2>
      <div className="d-flex flex-wrap ">
        {LOGOS.map((logo) => (
          <div
            key={logo.src}
            className={classNames(
              'col-6 col-sm-3 position-relative',
              styles.logo
            )}
          >
            <Image
              className="p-4"
              alt={logo.alt}
              src={logo.src}
              objectFit="contain"
              layout="fill"
            />
          </div>
        ))}
      </div>
    </div>
  )
}

export default FindTalent
