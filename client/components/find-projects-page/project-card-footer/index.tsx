const ProjectCardFooter: React.FC = () => {
  return (
    <>
      <div className="text-dark mt-2">
        <span>
          <strong>Hourly:</strong> $45.00-$90.00
        </span>
        <span className="ms-2">
          <strong>Project Length:</strong> 6 Months
        </span>
        <span className="ms-2">
          <strong>Posted: </strong> 2 hours ago
        </span>
      </div>
      <div className="text-muted mt-1">
        <span>
          <strong>
            <span className="text-success">✓</span> Payment verified
          </strong>
        </span>
        <span className="ms-2">⭐ ⭐ ⭐ ⭐ ⭐</span>
        <span className="ms-2">
          <strong>Spent:</strong> 100k+
        </span>
        <span className="ms-2">
          <strong>XP:</strong> 1000XP
        </span>
      </div>
    </>
  )
}

export default ProjectCardFooter
