import Image from 'next/image'

const AltContact: React.FC = () => {
  return (
    <div className="position-relative col-12 col-sm-6 d-flex align-items-center">
      <Image
        className="px-5 py-2"
        src="/mail.jpg"
        alt="mail"
        objectFit="cover"
        layout="fill"
      />
    </div>
  )
}

export default AltContact
