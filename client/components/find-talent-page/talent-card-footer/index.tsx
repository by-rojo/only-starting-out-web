const TalentCardFooter: React.FC<{
  hourlyRate?: number
  description?: string
  experiencePoints?: number
  skills?: string[]
}> = ({ hourlyRate, description, experiencePoints, skills }) => {
  return (
    <>
      <div className="text-dark mt-2">
        <p className="mb-1">{description}</p>
        <div>
          {skills?.map((skill) => {
            return (
              <span
                key={skill}
                className="badge bg-info p-1 me-1 rounded-1 text-white px-2 small"
              >
                {skill}
              </span>
            )
          })}
        </div>
      </div>
      <div className="text-muted mt-3">
        <span>
          <strong>Hourly:</strong> ${hourlyRate}
        </span>

        <span className="ms-2">
          <strong>XP:</strong> {experiencePoints}XP
        </span>
        <span className="ms-2">⭐ ⭐ ⭐ ⭐ ⭐</span>
      </div>
    </>
  )
}

export default TalentCardFooter
