import { FILTER_MENU_INPUT_TYPES } from '../types'

export interface AdvancedFiltersFilterProps {
  title: string
  type: FILTER_MENU_INPUT_TYPES
  name: string
  min?: number
  max?: number
  step?: number
  index: number
  suffix?: 'xp' | string
  unit?: '$' | string
  defaultValue?: number[] | string | number
  options?: {
    value: string
    text: string
  }[]
}
