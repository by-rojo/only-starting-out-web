import Link from 'next/link'
import { TalentCardProps } from './types'
import styles from './style.module.scss'
import classNames from 'classnames'
import TalentCardFooter from '../talent-card-footer'
import Image from 'next/image'

const TalentCard: React.FC<TalentCardProps> = ({
  name,
  id,
  image,
  description,
  experiencePoints,
  hourlyRate,
  className,
  skills,
  ...divProps
}) => {
  return (
    <div className={classNames(styles.card, className)} {...divProps}>
      <Link
        href={`/find-talent/?id=${id}`}
        scroll={false}
        shallow={true}
        passHref
      >
        <a>
          <div className="border-1 border-top-0 border-start-0 border-end-0 border-black border p-5">
            <div className="d-flex flex-column flex-sm-row align-items-center">
              <div className="flex-grow-0 flex-shrink-0 text-center text-sm-start">
                <Image
                  className="rounded-circle"
                  alt="profile image"
                  src={`https://randomuser.me/api/portraits/${
                    Math.random() > 0.5 ? 'men' : 'women'
                  }/${id}.jpg`}
                  width={200}
                  height={200}
                />
              </div>
              <div className="ms-sm-5 text-center text-sm-start">
                <h3 className="h5">{name}</h3>
                <TalentCardFooter
                  skills={skills}
                  hourlyRate={hourlyRate}
                  description={description}
                  experiencePoints={experiencePoints}
                />
              </div>
            </div>
          </div>
        </a>
      </Link>
    </div>
  )
}
export default TalentCard
