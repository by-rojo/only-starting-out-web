import Paginate from '../../paginate'

const ProjectListFooter: React.FC = () => {
  return (
    <div className="mt-4 mb-2 d-flex px-3 px-sm-5 align-items-center">
      <Paginate pageCount={3} />
    </div>
  )
}
export default ProjectListFooter
