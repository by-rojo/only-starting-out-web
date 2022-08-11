import AdvancedFilters from './advanced-filters'
import FindProjectsHero from './find-projects-hero'
import ProjectList from './project-list'
import ProjectModal from './project-modal'
const FindProjectsPage: React.FC = () => {
  //use static page context to get the data we need for the project
  //shallow route using query paramters to get new data when filters change
  //insure inputs have default values set

  return (
    <ProjectModal>
      <FindProjectsHero />
      <div className="d-flex mb-n3">
        <div className="d-none d-md-block col-md-4">
          <AdvancedFilters />
        </div>
        <div className="col-12 col-md-8">
          <ProjectList />
        </div>
      </div>
    </ProjectModal>
  )
}

export default FindProjectsPage
