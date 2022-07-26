import classNames from 'classnames'
import Slider, { SliderProps } from 'rc-slider'
import { useState } from 'react'
import style from './style.module.scss'

const RangeSlider: React.FC<
  SliderProps & {
    name?: string
    unit?: '$' | string
    suffix?: string
    renderValues?: boolean
  }
> = ({ name, unit, suffix, renderValues, ...props }) => {
  const [values, setValues] = useState(props.value || props.defaultValue)
  const isArrayValue = typeof values === 'object'

  const renderedValues = isArrayValue ? (
    <>
      {unit}
      {values[0] || props.min} – {values[1] || props.max}
      &nbsp;{suffix}
    </>
  ) : (
    <>
      {unit}
      {values || 0}
      &nbsp;{suffix}
    </>
  )
  return (
    <div>
      {renderValues && (
        <div className="fw-bold small text-dark opacity-75">
          {renderedValues}
        </div>
      )}
      <div
        className={classNames(style.rangeSlider, {
          [style.withIndicator]: renderValues,
        })}
      >
        <Slider
          allowCross={false}
          range={isArrayValue}
          onChange={(value) => {
            setValues(value)
          }}
          {...props}
        />
        <input
          type="hidden"
          name={name + 'Min'}
          value={(typeof values === 'object' ? values[0] : values) || 0}
        />
        {typeof values === 'object' && (
          <input type="hidden" name={name + 'Max'} value={values[1] || 0} />
        )}
      </div>
    </div>
  )
}

export default RangeSlider
