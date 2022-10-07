import Image from 'next/image'
//import useBlog from '../../../../api-factory/api/client/products/use-blog'
import { DEFAULT_BLUR_URL } from '../../../../constants'
import { cleanHtmlString } from '../../../../utils'
import AppHead from '../../../app-head'
import styles from './style.module.scss'

const ArticleContainer: React.FC = () => {
  //const blog = useBlog()
  //const image = blog?.media?.[1]
  const blog = {
    content: { rendered: 'test' },
    title: { rendered: 'Test' },
    excerpt: { rendered: 'Test' },
  }
  const image = {
    alt_text: 'test',
    media_details: {
      sizes: { full: { source_url: '/blog-4.jpg' } },
    },
  }
  return (
    <div className={styles.blogContainer}>
      <AppHead
        title={cleanHtmlString(blog?.title?.rendered)}
        description={cleanHtmlString(blog?.excerpt?.rendered)}
      ></AppHead>

      {image && (
        <Image
          src={image.media_details?.sizes?.full?.source_url || ''}
          alt={image.alt_text}
          width={900}
          height={500}
          objectPosition="center"
          objectFit="fill"
          quality={100}
          placeholder="blur"
          blurDataURL={DEFAULT_BLUR_URL}
          className="mb-3"
        />
      )}
      <h2>{blog?.title?.rendered}</h2>

      <article
        dangerouslySetInnerHTML={{ __html: blog?.content?.rendered || '' }}
      />
    </div>
  )
}

export default ArticleContainer
