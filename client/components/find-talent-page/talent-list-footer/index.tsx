import Paginate from '../../paginate'

const TalentListFooter: React.FC = () => {
  return (
    <div className="mt-4 mb-2 d-flex px-3 px-sm-5 align-items-center justify-content-center">
      <Paginate pageCount={3} />
    </div>
  )
}
export default TalentListFooter
