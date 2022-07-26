import { ProjectCardProps } from './types'

const ProjectCard: React.FC<ProjectCardProps> = ({ name, ...divProps }) => {
  return (
    <>
      <div {...divProps}>
        <div className="border-1 border-top-0 border-start-0 border-end-0 border-black border bg-white p-3 p-sm-5">
          project {name}
        </div>
      </div>
    </>
  )
}
export default ProjectCard
