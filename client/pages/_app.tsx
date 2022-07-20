import { useState } from 'react'
import type { AppProps } from 'next/app'
import '../styles/app.scss'
import { QueryClient, QueryClientProvider, Hydrate } from 'react-query'
import { ModalProvider } from '../components/modal/context'

function MyApp({ Component, pageProps }: AppProps) {
  const [queryClient] = useState(() => new QueryClient())
  return (
    <>
      <QueryClientProvider client={queryClient}>
        <Hydrate state={pageProps.dehydratedState}>
          <ModalProvider>
            <Component {...pageProps} />
          </ModalProvider>
        </Hydrate>
      </QueryClientProvider>
    </>
  )
}

export default MyApp
