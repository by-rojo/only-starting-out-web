import { SORT_FILTERS } from './filter/constants'
const MAX_EXPERIENCE_POINTS = 1000
const MIN_EXPERIENCE_POINTS = 50
const MIN_JOB_PRICE = 100
const MAX_JOB_PRICE = 5000
const MIN_PROPOSALS = 0
const MAX_PROPOSALS = 100
import { FILTER_MENU_INPUT_TYPES } from './types'

export const FILTER_MENU = [
  {
    title: 'Sort By',
    type: FILTER_MENU_INPUT_TYPES.SELECT,
    name: 'sort',
    options: SORT_FILTERS,
  },
  {
    title: 'Experience Points',
    type: FILTER_MENU_INPUT_TYPES.RANGE,
    name: 'experiencePoints',
    min: MIN_EXPERIENCE_POINTS,
    max: MAX_EXPERIENCE_POINTS,
    step: 10,
    defaultValue: [MIN_EXPERIENCE_POINTS, MAX_EXPERIENCE_POINTS],
    suffix: 'xp',
  },
  {
    title: 'Number of Proposals',
    type: FILTER_MENU_INPUT_TYPES.RANGE,
    name: 'proposalCount',
    min: MIN_PROPOSALS,
    max: MAX_PROPOSALS,
    step: 1,
    suffix: 'proposals',
    defaultValue: MAX_PROPOSALS,
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
    defaultValue: [MIN_JOB_PRICE, MAX_JOB_PRICE],
    unit: '$',
  },
]
