import Input from '../../input'

const ContactForm: React.FC = () => {
  return (
    <form className="col-12 col-md-6">
      <div className="mb-3">
        <label className="fw-bold mb-2">Name</label>
        <Input required placeholder="Enter your name" />
      </div>

      <div className="mb-3">
        <label className="fw-bold mb-2">Email</label>
        <Input required placeholder="Enter your email" />
      </div>

      <div className="mb-3">
        <label className="fw-bold mb-2">Message</label>
        <textarea required className="form-control form-control-lg" rows={4} />
      </div>

      <button className="btn btn-lg btn-success text-white mt-4 w-50">
        Send
      </button>
    </form>
  )
}

export default ContactForm
