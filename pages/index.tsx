// import {recipeAPI} from '../lib/api/recipeAPI'
import { Layout } from '@components/common'
import { ProductCard } from '@components/product'
import { Grid, Marquee, Hero } from '@components/ui'
// import HomeAllProductsGrid from '@components/common/HomeAllProductsGrid'
import type { GetStaticPropsContext, InferGetStaticPropsType } from 'next'

export async function getStaticProps() {
  const res = await fetch(process.env.REACT_APP_API_URL)
  const recipes = await res.json()

  if (!recipes) {
    return {
      notFound: true,
    }
  }

  return {
    props: {
      recipes,
    },
  }
}

export default function Home({ recipes }) {
  return (
    <>
      <Grid layout="normal">
        {recipes.map((recipe) => (
          <ProductCard key={recipe.id} recipe={recipe} variant="simple" />
        ))}
      </Grid>
    </>
  )
}

Home.Layout = Layout
