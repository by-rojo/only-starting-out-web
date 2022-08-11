import Image from 'next/image'
import Card from '../../card'
import CardBody from '../../card/card-body'
import CardText from '../../card/card-text'
import CardTitle from '../../card/card-title'
import styles from './styles.module.scss'
const ProblemStatement: React.FC = () => {
  return (
    <div className="container py-5">
      <Card className={styles.card}>
        <div className="d-flex flex-wrap">
          <div
            className={`col-12 col-md-6 position-relative ${styles.imageContainer}`}
          >
            <Image
              layout="fill"
              objectFit="cover"
              src="/for-business-card-img-1.png"
              alt="Phones hanging"
            />
          </div>
          <div className="col-12 col-md-6 p-3 p-sm-5">
            <CardBody className="text-white text-center text-md-start">
              <CardTitle className="fs-2">
                We have incredible talent ready for thier first opportunity to
                shine.
              </CardTitle>
              <CardText className="d-block mt-4">
                You are building a business, that takes time, energy and
                determination.
              </CardText>
              <CardText className="d-block mt-3">
                We have the most determined and talented people in the industry.
                They are waiting to join your venture and help you build a
                successful product.
              </CardText>
              <CardText className="d-block mt-3">
                You are in full control of your business. No fine print.
              </CardText>
            </CardBody>
          </div>
        </div>
      </Card>
    </div>
  )
}

export default ProblemStatement
