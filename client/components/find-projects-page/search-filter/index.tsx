import Input from '../../input'
import InputGroup from '../../input-group'
import SearchIcon from './magnifying-glass.svg'

const SearchFilter: React.FC = () => {
  return (
    <InputGroup
      suffix={<SearchIcon width="1rem" height="1rem" color="white" />}
      primary
    >
      <Input />
    </InputGroup>
  )
}

export default SearchFilter
