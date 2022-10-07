import SearchFilter from '../search-filter'
import styles from './style.module.scss'
const TalentFilters: React.FC = () => {
  return (
    <div className={`position-sticky shadow-sm ${styles.talentFilters}`}>
      <div
        className={`border-1 border-start-0 border-end-0 border-black border bg-white p-3 p-sm-4`}
      >
        <SearchFilter />
      </div>
    </div>
  )
}

export default TalentFilters
