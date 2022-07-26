import { ProjectCardProps } from './types'

const ProjectCard: React.FC<ProjectCardProps> = ({ name, ...divProps }) => {
  return (
    <div {...divProps}>
      <div className="card">project {name}</div>
    </div>
  )
}
export default ProjectCard
