import TalentCard from '../talent-card'
import TalentFilters from '../talent-filters'
import TalentListFooter from '../talent-list-footer'
import { TALENT_DATA } from './constants'

const TalentList: React.FC = () => {
  return (
    <div className="position-relative">
      <TalentFilters />
      {TALENT_DATA.map((talent) => {
        return <TalentCard key={talent.id} {...talent} id={`${talent.id}`} />
      })}
      <TalentListFooter />
    </div>
  )
}

export default TalentList
