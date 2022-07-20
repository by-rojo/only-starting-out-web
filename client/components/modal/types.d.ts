interface Modal {
  children?: ReactElement
}

interface ModalState {
  toggled: boolean
  setToggled?: (toggled: boolean) => void
}
