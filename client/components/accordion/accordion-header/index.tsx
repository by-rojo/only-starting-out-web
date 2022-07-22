import { PropsWithChildren } from 'react'
import { useAccordion } from '../context'

const AccordionHeader: React.FC<PropsWithChildren<{ index: number }>> = ({
  children,
  index,
}) => {
  const [openIndex, setOpenIndex] = useAccordion()
  return (
    <h2 className="accordion-header">
      <button
        className="btn btn-link p-1 text-decoration-none accordion-button"
        onClick={() => {
          if (setOpenIndex) setOpenIndex(index === openIndex ? -1 : index)
        }}
      >
        {children}
      </button>
    </h2>
  )
}

export default AccordionHeader
