import { withPageAuthRequired } from '@auth0/nextjs-auth0'
import { Layout } from '@components/common'
import { RecipeCard } from '@components/product'
import { Container, Text, Grid, Skeleton } from '@components/ui'
import useSWR from 'swr'
import rangeMap from '@lib/range-map'

const fetcher = async (uri) => {
  const response = await fetch(uri)
  return response.json()
}

export default withPageAuthRequired(function Recommend({ user }) {
  const { data, error } = useSWR('/api/recommend', fetcher)
  if (error) return <div>oops... {error.message}</div>
  if (data === undefined) return <div>Loading...</div>
  return (
    <Layout pageProps={user}>
      <Container>
        <Text variant="pageHeading">Recommendations</Text>
        {user && (
          <div className="grid lg:grid-cols-12">
            <div className="lg:col-span-8 pr-4">
              <div>
                <Text variant="sectionHeading">Full Name</Text>
                <span>{user.name}</span>
              </div>
              <div className="mt-5">
                <Text variant="sectionHeading">Email</Text>
                <span>{user.email}</span>
              </div>
            </div>
          </div>
        )}
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-4 mt-3 mb-20">
          <div className="col-span-8 order-3 lg:order-none">
            {data ? (
              <Grid layout="normal">
                {data.map((recipe) => (
                  <RecipeCard key={recipe.id} recipe={recipe} variant="slim" />
                ))}
              </Grid>
            ) : (
              <Grid layout="normal">
                {rangeMap(30, (i) => (
                  <Skeleton
                    key={i}
                    className="w-full animated fadeIn"
                    height={325}
                  />
                ))}
              </Grid>
            )}
          </div>
        </div>
      </Container>
    </Layout>
  )
})
