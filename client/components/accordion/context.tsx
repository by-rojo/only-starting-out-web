import { createContext, PropsWithChildren, useContext, useState } from 'react'
import { AccordionContextValue } from './types'

const defaultValue: AccordionContextValue = { openIndex: 0 }
const context = createContext(defaultValue)
const { Provider } = context

export const AccordionProvider: React.FC<PropsWithChildren<{}>> = ({
  children,
}) => {
  const [openIndex, setOpenIndex] = useState(defaultValue.openIndex)

  return (
    <Provider
      value={{
        openIndex,
        setOpenIndex,
      }}
    >
      {children}
    </Provider>
  )
}

export const useAccordion = (): [
  number,
  AccordionContextValue['setOpenIndex']
] => {
  const { openIndex, setOpenIndex } = useContext(context)
  return [openIndex, setOpenIndex]
}

export default context
