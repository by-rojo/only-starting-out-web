import ProjectCard from '../project-card'
import ProjectFilters from '../project-filters'
import ProjectListFooter from '../project-list-footer'
import { PROJECT_DATA } from './constants'

const ProjectList: React.FC = () => {
  return (
    <div className="position-relative">
      <ProjectFilters />
      {PROJECT_DATA.map((project) => {
        return (
          <ProjectCard
            key={project.id}
            name={project.name}
            projectId={project.id}
          />
        )
      })}
      <ProjectListFooter />
    </div>
  )
}

export default ProjectList
