import cn from 'classnames'
import axios from 'axios'
import type { GetStaticPropsContext, InferGetStaticPropsType } from 'next'
import Link from 'next/link'
import { useState, useEffect } from 'react'
import { useRouter } from 'next/router'

import { Layout } from '@components/common'
import { RecipeCard } from '@components/product'
import type { Recipe } from '@commerce/types/recipe'
import { Container, Grid, Skeleton } from '@components/ui'

import rangeMap from '@lib/range-map'

import {
  filterQuery,
  getCategoryPath,
  getDesignerPath,
  useSearchMeta,
} from '@lib/search'

// TODO(bc) Remove this. This should come from the API
import getSlug from '@lib/get-slug'

export async function getServerSideProps(context) {
  const { q } = context.query

  axios.defaults.baseURL = process.env.REACT_APP_API_URL
  const res = await axios.get('/search', { params: { q: q } })
  const results = JSON.parse(JSON.stringify(res.data))
  return {
    props: {
      results,
    },
  }
}

export default function Search({ results }) {
  const [activeFilter, setActiveFilter] = useState('')
  const [toggleFilter, setToggleFilter] = useState(false)

  const router = useRouter()
  const q = router.query.q

  const handleClick = (event: any, filter: string) => {
    if (filter !== activeFilter) {
      setToggleFilter(true)
    } else {
      setToggleFilter(!toggleFilter)
    }
    setActiveFilter(filter)
  }

  return (
    <Container>
      <div className="grid grid-cols-1 lg:grid-cols-12 gap-4 mt-3 mb-20">
        {/* Products */}
        <div className="col-span-8 order-3 lg:order-none">
          <div className="mb-12 transition ease-in duration-75">
            {results ? (
              <>
                <span
                  className={cn('animated', {
                    fadeIn: results.length,
                    hidden: !results.length,
                  })}
                >
                  Showing {results.length} results{' '}
                  {q && (
                    <>
                      for "<strong>{q}</strong>"
                    </>
                  )}
                </span>
                <span
                  className={cn('animated', {
                    fadeIn: !results.length,
                    hidden: results.length,
                  })}
                >
                  {q ? (
                    <>
                      There are no products that match "<strong>{q}</strong>"
                    </>
                  ) : (
                    <>
                      There are no products that match the selected category &
                      designer
                    </>
                  )}
                </span>
              </>
            ) : q ? (
              <>
                Searching for: "<strong>{q}</strong>"
              </>
            ) : (
              <>Searching...</>
            )}
          </div>

          {results ? (
            <Grid layout="normal">
              {results.map((recipe) => (
                <RecipeCard key={recipe.id} recipe={recipe} variant="slim" />
              ))}
            </Grid>
          ) : (
            <Grid layout="normal">
              {rangeMap(12, (i) => (
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

Search.Layout = Layout
