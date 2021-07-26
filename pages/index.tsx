// import {recipeAPI} from '../lib/api/recipeAPI'
import { Layout } from '@components/common'
import { RecipeCard } from '@components/product'
import { Grid, Marquee, Hero } from '@components/ui'
// import HomeAllProductsGrid from '@components/common/HomeAllProductsGrid'
import type { GetStaticPropsContext, InferGetStaticPropsType } from 'next'

export async function getStaticProps() {
  const res = await fetch(process.env.REACT_APP_API_URL + '/default')
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
          <RecipeCard key={recipe.id} recipe={recipe} variant="slim" />
        ))}
      </Grid>
    </>
  )
}

Home.Layout = Layout
