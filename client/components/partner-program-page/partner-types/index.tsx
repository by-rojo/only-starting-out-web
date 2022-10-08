import Image from 'next/image'
import CardBody from '../../card/card-body'
import CardImg from '../../card/card-img'
import CardText from '../../card/card-text'
import CardTitle from '../../card/card-title'
import PARTNER_TYPES from './constants'

const PartnerTypes: React.FC = () => {
  return (
    <div className="text-white d-flex mx-sm-5 mx-md-3 justify-content-center flex-wrap">
      {PARTNER_TYPES.map((partner) => (
        <div key={partner.type} className="col-12 col-md-6 col-lg-4">
          <div className="card bg-dark m-3 overflow-hidden border-0 rounded-3">
            <CardImg
              src={partner.src}
              objectFit="cover"
              layout="responsive"
              alt={partner.type}
              width={500}
              height={300}
            />

            <CardBody className="position-absolute bottom-0">
              <CardTitle>{partner.type}</CardTitle>
              <CardText>{partner.description}</CardText>
            </CardBody>
          </div>
        </div>
      ))}
    </div>
  )
}

export default PartnerTypes
