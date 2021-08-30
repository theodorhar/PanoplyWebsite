import { withPageAuthRequired } from '@auth0/nextjs-auth0'
import { Layout } from '@components/common'
import { RecipeCard } from '@components/product'
import { Container, Text, Grid, Skeleton } from '@components/ui'
import axios from 'axios'
import rangeMap from '@lib/range-map'

export const getServerSideProps = withPageAuthRequired({
  async getServerSideProps(context) {
    axios.defaults.baseURL = process.env.REACT_APP_API_URL
    const res = await axios.get('/default', {
      //change this to /recommend
      headers: {
        //'Authorization':
      },
    })
    const results = JSON.parse(JSON.stringify(res.data))
    return {
      props: {
        results,
      },
    }
  },
})

export default function Recommend({ user, results }) {
  return (
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
        {/* Products */}
        <div className="col-span-8 order-3 lg:order-none">
          {results ? (
            <Grid layout="normal">
              {results.map((recipe) => (
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
  )
}

Recommend.Layout = Layout
