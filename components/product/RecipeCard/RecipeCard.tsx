import { FC } from 'react'
import cn from 'classnames'
import Link from 'next/link'
import type { Recipe } from '@commerce/types/recipe'
import s from './dist/RecipeCard.module.css'
import Image, { ImageProps } from 'next/image'

interface Props {
  className?: string
  recipe: Recipe
  variant?: 'slim' | 'simple'
  imgProps?: Omit<ImageProps, 'src'>
}

const placeholderImg = '/product-img-placeholder.svg'

const RecipeCard: FC<Props> = ({
  className,
  recipe,
  variant,
  imgProps,
  ...props
}) => (
  //<Link href={`/product/${recipe.id}`} {...props}>
  <Link href={recipe.url} {...props}>
    <a className={cn(s.root, { [s.simple]: variant === 'simple' }, className)}>
      {variant === 'slim' ? (
        <div>
          <div className="root">
            <figure className={s.thumb}>
              <div className={s.imageContainer}>
                <div className={s.squareBg} />
                <Image
                  alt={recipe.title || 'Recipe Image'}
                  className={s.recipeImage}
                  src={recipe.photo_url || placeholderImg}
                  height={540}
                  width={540}
                  quality="85"
                  layout="responsive"
                  {...imgProps}
                />
              </div>
              <figcaption className={s.caption}>
                <h2 className={s.title}>{recipe.title}</h2>
                <p className={s.snippet}>
                  {recipe.rating_stars} ({recipe.review_count})
                </p>
                <a href="" className={s.button}>
                  View Original Recipe
                </a>
              </figcaption>
            </figure>
          </div>
        </div>
      ) : (
        <>
          <div className={s.squareBg} />
          <div className="flex flex-row justify-between box-border w-full z-20 absolute">
            <div className="absolute top-0 left-0 pr-16 max-w-full">
              <h3 className={s.recipeTitle}>
                <span>{recipe.title}</span>
              </h3>
              <span className={s.productRating}>
                {recipe.rating_stars}
                &nbsp; ({recipe.review_count})
              </span>
            </div>
          </div>
          <div className={s.imageContainer}>
            <Image
              alt={recipe.title || 'Recipe Image'}
              className={s.recipeImage}
              src={recipe.photo_url || placeholderImg}
              height={540}
              width={540}
              quality="85"
              layout="responsive"
              {...imgProps}
            />
          </div>
        </>
      )}
    </a>
  </Link>
)

export default RecipeCard
