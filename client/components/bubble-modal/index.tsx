import classNames from 'classnames'
import { PropsWithChildren, useEffect } from 'react'
import styles from './styles.module.scss'

const BlowUpModal: React.FC<
  PropsWithChildren<{
    className?: string
    isVisible: boolean
    onClose: () => void
  }>
> = ({ isVisible, children, onClose, className }) => {
  useEffect(() => {
    if (isVisible) {
      document.body.classList.add(styles.modalOpen, styles.modalDirty)
    } else {
      document.body.classList.remove(styles.modalOpen)
    }
    return () => {
      document.body.classList.remove(styles.modalOpen)
    }
  }, [isVisible])

  return (
    <div
      className={classNames(styles.modalContainer, {
        [styles.blowContainer]: isVisible,
      })}
      onClick={(e) => {
        if (e.target === e.currentTarget) onClose()
      }}
    >
      <div className={classNames(styles.modal, 'card', className)}>
        {children}
      </div>
    </div>
  )
}

export default BlowUpModal
