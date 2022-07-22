const MAX_EXPERIENCE_POINTS = 1000
const MIN_EXPERIENCE_POINTS = 50
const MIN_JOB_PRICE = 100
const MAX_JOB_PRICE = 5000
const MIN_PROJECT_DAYS = 1
const MAX_PROJECT_DAYS = 200
import { FILTER_MENU_INPUT_TYPES } from './types'

export const FILTER_MENU = [
  {
    title: 'Experience Points',
    type: FILTER_MENU_INPUT_TYPES.RANGE,
    name: 'experiencePoints',
    min: MIN_EXPERIENCE_POINTS,
    max: MAX_EXPERIENCE_POINTS,
    step: 10,
    defaultValue: [MIN_EXPERIENCE_POINTS, MAX_EXPERIENCE_POINTS],
  },
  {
    title: 'Number of Proposals',
    type: FILTER_MENU_INPUT_TYPES.NUMBER,
    name: 'proposalCount',
    min: 0,
    max: 100,
    step: 1,
    defaultValue: [MIN_EXPERIENCE_POINTS, MAX_EXPERIENCE_POINTS],
  },
  {
    title: 'Category',
    name: 'categoryID',
    type: FILTER_MENU_INPUT_TYPES.SELECT,
  },
  {
    title: 'Job Price',
    type: FILTER_MENU_INPUT_TYPES.RANGE,
    name: 'jobPrice',
    min: MIN_JOB_PRICE,
    max: MAX_JOB_PRICE,
    step: 100,
    defaultVaue: [MIN_JOB_PRICE, MAX_JOB_PRICE],
  },
]
