export interface TalentCardProps extends React.HTMLAttributes<HTMLDivElement> {
  name: string
  id: string
  image?: string
  hourlyRate?: number
  skills?: string[]
  experiencePoints?: number
  description?: string
}
