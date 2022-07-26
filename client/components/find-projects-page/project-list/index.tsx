import ProjectCard from '../project-card'
import ProjectFilters from '../project-filters'
import { LIST_CONTAINER_CLASSES, PROJECT_DATA } from './constants'

const ProjectList: React.FC = () => {
  return (
    <div className="position-relative">
      <ProjectFilters />
      {PROJECT_DATA.map((project) => {
        return (
          <ProjectCard
            key={project.id}
            name={project.name}
            className={LIST_CONTAINER_CLASSES}
          />
        )
      })}
    </div>
  )
}

export default ProjectList
