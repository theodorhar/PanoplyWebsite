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
        <div className="col-span-8 lg:col-span-2 order-1 lg:order-none">
          {/* Categories */}
          <div className="relative inline-block w-full">
            <div className="lg:hidden">
              <span className="rounded-md shadow-sm">
                <button
                  type="button"
                  onClick={(e) => handleClick(e, 'categories')}
                  className="flex justify-between w-full rounded-sm border border-gray-300 px-4 py-3 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-normal active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150"
                  id="options-menu"
                  aria-haspopup="true"
                  aria-expanded="true"
                >
                  {/* {activeCategory?.name
                    ? `Category: ${activeCategory?.name}`
                    : 'All Categories'} */}
                  <svg
                    className="-mr-1 ml-2 h-5 w-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fillRule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clipRule="evenodd"
                    />
                  </svg>
                </button>
              </span>
            </div>
            <div
              className={`origin-top-left absolute lg:relative left-0 mt-2 w-full rounded-md shadow-lg lg:shadow-none z-10 mb-10 lg:block ${
                activeFilter !== 'categories' || toggleFilter !== true
                  ? 'hidden'
                  : ''
              }`}
            >
              <div className="rounded-sm bg-white shadow-xs lg:bg-none lg:shadow-none">
                <div
                  role="menu"
                  aria-orientation="vertical"
                  aria-labelledby="options-menu"
                ></div>
              </div>
            </div>
          </div>
        </div>
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

Search.Layout = Layout
