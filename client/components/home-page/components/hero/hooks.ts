import { useState, useEffect } from 'react'
import {
  MESSAGES,
  LETTER_TIMEOUT,
  MESSAGES_LENGTH,
  PAUSE_TIMEOUT,
} from './constants'

export const useGetMessagePart = () => {
  const [messageIndex, setMessageIndex] = useState(0)
  const message = MESSAGES[messageIndex]
  const [messagePartIndex, setMessagePartIndex] = useState(message.length)
  const [isLeft, setIsLeft] = useState(true)
  const [pauseTicker, setPauseTicker] = useState(false)

  useEffect(() => {
    const tout = setTimeout(
      () => {
        if (pauseTicker) return
        let newIndex = message.length
        if (isLeft && messagePartIndex > 0) newIndex = messagePartIndex - 1
        else if (!isLeft && messagePartIndex < message.length)
          newIndex = messagePartIndex + 1
        setMessagePartIndex(newIndex)
      },
      isLeft ? LETTER_TIMEOUT / 2 : LETTER_TIMEOUT
    )
    return () => clearTimeout(tout)
  }, [messagePartIndex, message, pauseTicker])

  useEffect(() => {
    if (messagePartIndex === 0) {
      setMessageIndex(
        messageIndex >= MESSAGES_LENGTH - 1 ? 0 : messageIndex + 1
      )
      setIsLeft(false)
    } else if (messagePartIndex === message.length) {
      setIsLeft(true)
      setPauseTicker(true)
    }
  }, [messagePartIndex])

  useEffect(() => {
    if (pauseTicker) {
      const tout = setTimeout(() => {
        setPauseTicker(false)
      }, PAUSE_TIMEOUT)

      return () => clearTimeout(tout)
    }
  }, [pauseTicker])
  return message.substring(0, messagePartIndex)
}

export default useGetMessagePart
