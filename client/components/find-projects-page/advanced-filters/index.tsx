import styles from './styles.module.scss'
import { FILTER_MENU } from './constants'
import classNames from 'classnames'
import Filter from './filter'
import { Fragment } from 'react'

const AdvancedFilters: React.FC = () => {
  return (
    <div
      className={classNames(
        styles.advancedFilters,
        'd-flex justify-content-end align-items-end pe-4 h-100'
      )}
    >
      <div className="col-11 col-lg-8 mb-3">
        <h4 className="px-3 mx-1 my-4">Filter by</h4>
        {FILTER_MENU.map((filter, index) => (
          <Fragment key={filter.name}>
            <Filter index={index} {...filter} />
            {index !== FILTER_MENU.length - 1 && <hr />}
          </Fragment>
        ))}
      </div>
    </div>
  )
}
export default AdvancedFilters
