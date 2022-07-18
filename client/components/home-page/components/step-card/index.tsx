import classNames from 'classnames'
import styles from './styles.module.scss'

const StepCard: React.FC<{
  number: number
  header: string
  subHeader: string
  className?: string
}> = ({ className, number, header, subHeader }) => {
  return (
    <div
      className={classNames(
        className,
        'col-12 col-lg-4 p-4 text-center d-flex flex-column justify-content-center align-items-center'
      )}
    >
      <div
        className={classNames(
          styles.stepNumber,
          'rounded-circle border border-primary border-5 d-inline-block'
        )}
      >
        <span className="fw-normal">{number}</span>
      </div>
      <h3 className="mt-3">{header}</h3>
      <p>{subHeader}</p>
    </div>
  )
}

export default StepCard
