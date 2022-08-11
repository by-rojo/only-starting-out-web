import Link from 'next/link'
import { ProjectCardProps } from './types'
import styles from './style.module.scss'
import classNames from 'classnames'
import ProjectCardFooter from '../project-card-footer'

const ProjectCard: React.FC<ProjectCardProps> = ({
  name,
  projectId,
  className,
  ...divProps
}) => {
  return (
    <div className={classNames(styles.card, className)} {...divProps}>
      <Link
        href={`/find-projects/?id=${projectId}`}
        scroll={false}
        shallow={true}
        passHref
      >
        <a>
          <div className="border-1 border-top-0 border-start-0 border-end-0 border-black border p-3 p-sm-5">
            <h3 className="h5">{name}</h3>
            <ProjectCardFooter />
          </div>
        </a>
      </Link>
    </div>
  )
}
export default ProjectCard
