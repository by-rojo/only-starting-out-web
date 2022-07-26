import Input from '../../input'
import InputGroup from '../../input-group'
import SearchIcon from './magnifying-glass.svg'

const SearchFilter: React.FC = () => {
  return (
    <InputGroup primary>
      <Input />
      <button className="input-group-text bg-primary text-white btn btn-primary">
        <SearchIcon width="1rem" height="1rem" />
      </button>
    </InputGroup>
  )
}

export default SearchFilter
