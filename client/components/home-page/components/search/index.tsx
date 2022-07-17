import classNames from 'classnames'
import { FormEvent } from 'react'
import styles from './styles.module.scss'

const Search: React.FC = () => {
  const onSubmit = (e: FormEvent<HTMLFormElement>) => {
    e.preventDefault()
    const fdata = new FormData(e.target as HTMLFormElement)
    const params = {
      search: fdata.get('search'),
    }
    console.log('search')
  }
  return (
    <div
      className={classNames(
        styles.search,
        'container p-3 bg-primary text-white'
      )}
    >
      <form onSubmit={onSubmit} className="d-flex">
        <div className="form-group flex-grow-1">
          <input
            type="search"
            autoFocus
            className="form-control form-control-lg"
            aria-describedby="Serch to get started"
            placeholder={`Try "Marketing", "Web Developer", or "React JS`}
            required
            name="search"
            min={3}
          />
        </div>
        <button className="btn btn-lg btn-success ms-3">Get Started</button>
      </form>
    </div>
  )
}

export default Search
