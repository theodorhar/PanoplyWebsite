export type RecipeImage = {
  url: string
  alt?: string
}
//add more to me as more data comes in
export type Recipe = {
  id: string
  title: string
  url: string
  rating_stars: number
  review_count: number
  cook_time_minutes: string
  photo_url: string
}
