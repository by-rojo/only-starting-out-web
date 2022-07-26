import Link from 'next/link'
import { ProjectCardProps } from './types'
import styles from './style.module.scss'
import classNames from 'classnames'

const ProjectCard: React.FC<ProjectCardProps> = ({
  name,
  className,
  ...divProps
}) => {
  return (
    <div className={classNames(styles.card, className)} {...divProps}>
      <Link href="/" passHref>
        <a>
          <div className="border-1 border-top-0 border-start-0 border-end-0 border-black border p-3 p-sm-5">
            <h3 className="h5">{name}</h3>
            <div className="text-dark">
              <span>
                <strong>Hourly:</strong> $45.00-$90.00
              </span>
              <span className="ms-2">
                <strong>Project Length:</strong> 6 Months
              </span>
              <span className="ms-2">
                <strong>Posted: </strong> 2 hours ago
              </span>
            </div>
            <div className="text-muted">
              <span>
                <strong>
                  <span className="text-success">✓</span> Payment verified
                </strong>
              </span>
              <span className="ms-2">⭐ ⭐ ⭐ ⭐ ⭐</span>
              <span className="ms-2">
                <strong>Spent:</strong> 100k+
              </span>
              <span className="ms-2">
                <strong>XP:</strong> 1000XP
              </span>
            </div>
          </div>
        </a>
      </Link>
    </div>
  )
}
export default ProjectCard
