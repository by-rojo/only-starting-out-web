import Accordion from '../../../accordion'
import AccordionBody from '../../../accordion/accordion-body'
import AccordionHeader from '../../../accordion/accordion-header'
import AccordionItem from '../../../accordion/accordion-item'
import { AccordionProvider } from '../../../accordion/context'
import RangeSlider from '../../../range-slider'
import { FILTER_MENU_INPUT_TYPES } from '../types'
import { AdvancedFiltersFilterProps } from './types'

const Filter: React.FC<AdvancedFiltersFilterProps> = ({
  title,
  type,
  name,
  min,
  max,
  step,
  defaultValue,
  options,
  index,
  suffix,
  unit,
}) => {
  return (
    <>
      <div className="px-3">
        <AccordionProvider>
          <Accordion>
            <AccordionHeader index={index}>
              <h6 className="m-0">{title}</h6>
            </AccordionHeader>

            <AccordionItem index={index}>
              <AccordionBody>
                <div className="pb-2">
                  {(type === FILTER_MENU_INPUT_TYPES.TEXT ||
                    type === FILTER_MENU_INPUT_TYPES.NUMBER) && (
                    <input
                      type={type}
                      defaultValue={`${defaultValue}`}
                      min={min}
                      max={max}
                      name={name}
                      step={step}
                    />
                  )}
                  {type === FILTER_MENU_INPUT_TYPES.SELECT && (
                    <select name={name}>
                      <option value="">Select an option</option>
                      {options?.map((option) => (
                        <option
                          key={option.value}
                          selected={defaultValue === option.value}
                          value={option.value}
                        >
                          {option.text}
                        </option>
                      ))}
                    </select>
                  )}
                  {type === FILTER_MENU_INPUT_TYPES.RANGE && (
                    <RangeSlider
                      defaultValue={defaultValue as number | number[]}
                      min={min}
                      max={max}
                      name={name}
                      step={step}
                      suffix={suffix}
                      unit={unit}
                    />
                  )}
                </div>
              </AccordionBody>
            </AccordionItem>
          </Accordion>
        </AccordionProvider>
      </div>
    </>
  )
}

export default Filter
