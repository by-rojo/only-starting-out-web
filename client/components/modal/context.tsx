import { createContext, ReactElement, useContext, useState } from 'react'
const defaultState: ModalState = { toggled: false }
const context = createContext(defaultState)
const { Provider } = context

export const ModalProvider: React.FC<{ children: ReactElement }> = (props) => {
  const [toggled, setToggled] = useState(defaultState.toggled)

  return (
    <Provider value={{ toggled, setToggled }}>
      {props.children}
      <div id="modal-portal" />
    </Provider>
  )
}

export const useModal = (): ModalState => {
  const values = useContext(context)
  return values
}

export default context
