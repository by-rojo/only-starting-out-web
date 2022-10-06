import classNames from 'classnames'
import { useRouter } from 'next/router'
import React, { PropsWithChildren } from 'react'
import BlowUpModal from '../../bubble-modal'
import CardBody from '../../card/card-body'
import CardFooter from '../../card/card-footer'
import CardText from '../../card/card-text'
import CardTitle from '../../card/card-title'
import ProjectCardFooter from '../project-card-footer'
import styles from './styles.module.scss'

const ProjectModal: React.FC<PropsWithChildren<{}>> = ({ children }) => {
  const {
    push,
    pathname,
    query: { id, ...query },
  } = useRouter()

  const onCloseModal = () => {
    push(
      {
        pathname: pathname,
        query: query,
      },
      undefined,
      { shallow: true, scroll: false }
    )
  }

  return (
    <>
      <BlowUpModal
        isVisible={!!id}
        onClose={onCloseModal}
        className={classNames(styles.projectModal)}
      >
        <CardTitle className="mx-3 my-4 fw-bold">Project Name</CardTitle>
        <CardBody className="overflow-auto h-100 pb-5">
          <CardText>
            <p>
              Tempor dolor ea cillum cillum ad tempor. Ex et proident ut
              laboris. Aliquip aliquip ea culpa in sint laborum eiusmod Lorem ea
              esse aliqua officia incididunt. Occaecat eiusmod aliqua nostrud
              consectetur cupidatat elit aliqua do fugiat sunt fugiat.
            </p>
          </CardText>
          <CardText>
            <p>
              Amet mollit consequat ad magna sunt aute proident ea cillum. Ipsum
              reprehenderit elit do anim Lorem irure ea Lorem ex velit magna. Ea
              ut tempor cillum nisi aliqua id et nulla velit deserunt nisi.
              Fugiat tempor sit est dolor cupidatat. Ullamco pariatur velit ex
              dolore anim consectetur voluptate proident ullamco eu. Aliqua
              dolor do excepteur laboris reprehenderit in. Ex veniam pariatur
              laborum exercitation dolore nisi deserunt consectetur aute.
            </p>
          </CardText>
          <CardText>
            <p>
              Ex laboris eu reprehenderit do culpa. Non minim quis qui qui non
              dolor. Commodo cillum minim Lorem labore. Ullamco sunt officia non
              Lorem Lorem Lorem. Tempor id est duis do culpa nisi dolor.
            </p>
          </CardText>
          <div className="mt-5 mb-2">
            <ProjectCardFooter />
          </div>
        </CardBody>
        <hr />
        <CardBody>
          <div>
            <label htmlFor="proposal">Create a proposal</label>
            <textarea className="form-control mt-2" id="proposal" rows={3} />
          </div>
        </CardBody>
        <CardFooter>
          <button className="btn btn-primary">Send Proposal</button>
          <button className="btn btn-success ms-2 text-white">Save</button>
          <button className="btn btn-danger ms-2" onClick={onCloseModal}>
            Close
          </button>
        </CardFooter>
      </BlowUpModal>
      <div>{children}</div>
    </>
  )
}

export default ProjectModal
