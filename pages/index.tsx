// import {recipeAPI} from '../lib/api/recipeAPI'
import { Layout } from '@components/common'
import { ProductCard } from '@components/product'
import { Grid, Marquee, Hero } from '@components/ui'
// import HomeAllProductsGrid from '@components/common/HomeAllProductsGrid'
import type { GetStaticPropsContext, InferGetStaticPropsType } from 'next'

export async function getStaticProps() {
  const res = await fetch(process.env.REACT_APP_API_URL)
  const recipes = await res.json()

  // if (!recipes) {
  //   return {
  //     notFound: true,
  //   }
  // }

  return {
    props: {
      recipes,
    },
  }
}

export default function Home({ recipes }) {
  return (
    <ul>
      {Array.from(recipes).map((recipe) => (
        <li>{recipe.title}</li>
      ))}
    </ul>
  )
}

// export default function Home({data
//   ,
// }: InferGetStaticPropsType<typeof getStaticProps>) {
//   return (
//     <>
//       <Grid>
//         {recipes.slice(0, 3).map((product, i) => (
//           <ProductCard
//             key={product.id}
//             product={product}
//             imgProps={{
//               width: i === 0 ? 1080 : 540,
//               height: i === 0 ? 1080 : 540,
//             }}
//           />
//         ))}
//       </Grid>
//       <Marquee variant="secondary">
//         {recipes.slice(0, 3).map((product, i) => (
//           <ProductCard key={product.id} product={product} variant="slim" />
//         ))}
//       </Marquee>
//       <Hero
//         headline="Release Details: The Yeezy BOOST 350 V2 ‘Natural'"
//         description="
//         The Yeezy BOOST 350 V2 lineup continues to grow. We recently had the
//         ‘Carbon’ iteration, and now release details have been locked in for
//         this ‘Natural’ joint. Revealed by Yeezy Mafia earlier this year, the
//         shoe was originally called ‘Abez’, which translated to ‘Tin’ in
//         Hebrew. It’s now undergone a name change, and will be referred to as
//         ‘Natural’."
//       />
//       <Grid layout="B">
//         {recipes.slice(0, 3).map((product, i) => (
//           <ProductCard
//             key={product.id}
//             product={product}
//             imgProps={{
//               width: i === 0 ? 1080 : 540,
//               height: i === 0 ? 1080 : 540,
//             }}
//           />
//         ))}
//       </Grid>
//       <Marquee>
//         {recipes.slice(0, 3).map((product, i) => (
//           <ProductCard key={product.id} product={product} variant="slim" />
//         ))}
//       </Marquee>
//       {/* <HomeAllProductsGrid
//         newestProducts={products}
//         categories={categories}
//         brands={brands}
//       /> */}
//     </>
//   )
// }

Home.Layout = Layout
