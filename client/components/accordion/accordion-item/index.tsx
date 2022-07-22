import classNames from 'classnames'
import {
  LegacyRef,
  MutableRefObject,
  PropsWithChildren,
  useEffect,
  useRef,
  useState,
} from 'react'
import { useAccordion } from '../context'
import { AccordionItem } from './types'
import styles from './styles.module.scss'

const AccordionItem: React.FC<PropsWithChildren<AccordionItem>> = (props) => {
  const [openIndex] = useAccordion()
  const [height, setHeight] = useState(openIndex === props.index ? 'auto' : '')
  const divRef = useRef<HTMLDivElement | null>()

  useEffect(() => {
    if (openIndex === props.index) {
      if (divRef?.current) {
        const newHeight = `${divRef.current.getBoundingClientRect().height}px`
        if (height !== newHeight) setHeight(newHeight)
      }
    } else if (height !== '' && height !== '0px') {
      setHeight('0px')
    }
  }, [height, openIndex, props.index])

  return (
    <div
      style={{ height }}
      className={classNames('accordion-item', styles.transition)}
    >
      <div
        ref={(node) => (divRef.current = node)}
        className={classNames('accordion-collapse collapse show')}
      >
        {props.children}
      </div>
    </div>
  )
}
export default AccordionItem
