import ProjectCard from '../project-card'
import ProjectFilters from '../project-filters'

const ProjectList: React.FC = () => {
  return (
    <div>
      Project list
      <ProjectFilters />
      {[].map((_, index) => {
        return <ProjectCard key={index} />
      })}
    </div>
  )
}

export default ProjectList
