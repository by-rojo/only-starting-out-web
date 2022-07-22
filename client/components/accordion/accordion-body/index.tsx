import { PropsWithChildren } from 'react'

const AccordionBody: React.FC<PropsWithChildren<{}>> = ({ children }) => {
  return <div className="accordion-body p-1">{children}</div>
}

export default AccordionBody
