import { PropsWithChildren } from 'react'

const CardFooter: React.FC<PropsWithChildren<{}>> = ({ children }) => {
  return (
    <div className="card-footer p-3 justify-content-center justify-content-md-start d-flex">
      {children}
    </div>
  )
}

export default CardFooter
