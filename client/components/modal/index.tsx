import { ReactElement, useEffect, useRef } from 'react'
import { createPortal } from 'react-dom'
import { useModal } from './context'

const Modal: React.FC<{ children: ReactElement | undefined }> = ({
  children,
}) => {
  const { toggled } = useModal()
  const divRef = useRef<HTMLDivElement | undefined>()

  useEffect(() => {
    if (typeof window !== 'undefined') {
      divRef.current = divRef.current || document.createElement('div')
      const modalRoot = document.getElementById('modal-portal')
      if (modalRoot) modalRoot.appendChild(divRef.current)
      return () => {
        if (divRef.current) modalRoot?.removeChild(divRef.current)
      }
    }
  }, [])

  return toggled && divRef.current
    ? createPortal(children, divRef.current)
    : null
}

export default Modal
