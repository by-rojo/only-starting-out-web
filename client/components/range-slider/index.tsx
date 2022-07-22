import Slider, { SliderProps } from 'rc-slider'
import style from './style.module.scss'

//TODO: figure out a way to use this with fdata / stateless unctonrolled inputs
const RangeSlider: React.FC<SliderProps & { name?: string }> = ({
  name,
  ...props
}) => {
  return (
    <div className={style.rangeSlider}>
      <Slider {...props} />
    </div>
  )
}

export default RangeSlider
