import React from 'react'
import Breadcrumbs from '../breadcrumbs'
import Breadcrumb from '../breadcrumbs/breadcrumb'
import Hero from '../hero'
import HeroHeadline from '../hero/headline'
import HeroLayout from '../hero/layout'
import HeroSubHeadline from '../hero/subHeadline'
import { CONDITIONS_DATA } from './constants'
const ConditionsPage: React.FC<{
  type: 'codeOfConduct' | 'privacyPolicy'
}> = (props) => {
  const data = CONDITIONS_DATA[props.type as string]
  return (
    <div>
      <Hero image={{ src: data.image, alt: '' }}>
        <HeroLayout>
          <br />
          <HeroHeadline>{data.title}</HeroHeadline>
          <HeroSubHeadline>{data.description}</HeroSubHeadline>
          <br />
        </HeroLayout>
      </Hero>
      <div className="container mt-4 mb-5">
        <Breadcrumbs>
          <Breadcrumb text="Home" href="/" />
          <Breadcrumb text={data.title} active href={data.href} />
        </Breadcrumbs>
        <div className="row mt-2">
          <div className="col-12">
            <p className="text-muted small">
              <strong>Last revised: </strong> 1/1/22
            </p>
            <strong className="mb-1 d-block">Clause Thing:</strong>
            <p>
              Aliquip adipisicing in cillum occaecat proident qui esse ex ad
              anim enim sint dolore amet. Minim irure labore tempor minim
              consectetur. Culpa sit eu deserunt qui proident in. Mollit sunt
              pariatur irure fugiat dolore amet pariatur dolore. Fugiat
              exercitation voluptate esse labore.
            </p>
            <p>
              Dolor labore esse do sit nulla Lorem eu reprehenderit veniam
              cupidatat consectetur consectetur laborum sunt. Ad ad laborum eu
              anim laboris voluptate ad culpa adipisicing consequat commodo
              voluptate occaecat. Commodo ipsum do commodo deserunt ullamco
              labore et. Voluptate voluptate dolor enim elit quis amet dolore
              mollit cupidatat non eiusmod.
            </p>
            <strong className="mb-1 d-block">Clause Thing:</strong>

            <p>
              Eiusmod cupidatat culpa esse elit. Aliquip irure in culpa enim
              anim eu. Cupidatat irure aute commodo aute mollit. Laboris ipsum
              labore laboris consequat cillum ut exercitation non dolor.
            </p>
            <p>
              Sit nulla aliquip anim amet ut id fugiat. Ad aliqua incididunt
              occaecat pariatur consectetur in cillum. Aliqua sint fugiat quis
              consectetur exercitation incididunt adipisicing aliquip cillum
              duis elit.
            </p>
            <p>
              Esse veniam sunt nulla ad. Do labore reprehenderit deserunt ex
              non. Aute reprehenderit magna amet aliqua nostrud eu dolor tempor
              nulla laborum laboris dolore incididunt. Nisi sint veniam in irure
              pariatur cupidatat tempor sit nulla anim duis dolor qui. Nostrud
              sint in cupidatat dolore aliqua ad dolor aute. Aliqua dolore
              laborum sit aliquip id dolor est pariatur nostrud ea.
            </p>
            <strong className="mb-1 d-block">Clause Thing:</strong>

            <p>
              Ipsum culpa do elit mollit irure in culpa exercitation aute qui
              consectetur sint tempor. Ex mollit ad culpa duis tempor
              consectetur adipisicing cupidatat nisi. Exercitation commodo
              occaecat non sit anim sit nostrud minim consectetur ex laboris.
            </p>
            <p>
              In minim et mollit tempor do qui ullamco minim et anim minim quis
              id. Consequat sunt qui mollit ipsum non fugiat ullamco ipsum.
              Tempor dolor aute ad quis pariatur laboris dolor dolor. Aliqua sit
              sint incididunt id eiusmod eiusmod. Deserunt velit qui pariatur
              eiusmod velit ex sunt est veniam Lorem mollit ipsum mollit
              eiusmod. Aliqua aute voluptate occaecat minim non fugiat eu
              deserunt ullamco non.
            </p>
            <p>
              Proident do dolore nisi eiusmod ad ex et proident consectetur
              velit non. Ut aliqua excepteur eiusmod ex esse velit nostrud sint
              duis. Quis labore labore esse est incididunt officia. Consectetur
              officia aute reprehenderit proident adipisicing qui irure laboris
              et non. Mollit elit amet ipsum anim esse mollit enim pariatur
              eiusmod ipsum occaecat sunt. Ex nulla ex ea ex consequat duis in
              labore.
            </p>
            <strong className="mb-1 d-block">Clause Thing:</strong>

            <p>
              Eu pariatur amet reprehenderit voluptate eu id consectetur
              voluptate. Ea tempor amet tempor excepteur commodo enim do irure
              exercitation ex do ut magna aliqua. Veniam do ullamco esse et
              nulla ad incididunt voluptate ipsum nulla.
            </p>
            <p>
              Mollit elit enim in amet dolore esse non ad exercitation sint
              cillum amet dolor. Anim adipisicing incididunt Lorem ipsum officia
              mollit adipisicing sunt irure ut aliquip do et. Nulla non ut culpa
              amet nostrud veniam. Enim proident dolor cupidatat voluptate magna
              commodo culpa nisi proident anim fugiat minim cupidatat sunt. In
              incididunt commodo incididunt ut ullamco aliquip amet labore ad
              non.
            </p>
          </div>
        </div>
      </div>
    </div>
  )
}

export default ConditionsPage
