import { PropsWithChildren } from 'react'

const Accordion: React.FC<PropsWithChildren<{}>> = ({ children }) => {
  return <div className="accordion">{children}</div>
}

export default Accordion
