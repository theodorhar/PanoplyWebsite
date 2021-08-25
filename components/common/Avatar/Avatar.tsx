import { FC, useRef, useEffect } from 'react'
import { useUserAvatar } from '@lib/hooks/useUserAvatar'
import { useUser } from '@auth0/nextjs-auth0'

interface Props {
  className?: string
  children?: any
}

const Avatar: FC<Props> = ({}) => {
  let ref = useRef() as React.MutableRefObject<HTMLInputElement>
  let { userAvatar } = useUserAvatar()
  const { user, error, isLoading } = useUser()
  if (isLoading) return <div>Loading...</div>
  if (error) return <div>{error.message}</div>
  return (
    <div
      ref={ref}
      style={{ backgroundImage: userAvatar }}
      className="inline-block h-8 w-8 rounded-full border-2 border-primary hover:border-secondary focus:border-secondary transition linear-out duration-150"
    >
      <img
        alt="Profile Picture"
        src={user.picture}
        style={{ borderRadius: 50 }}
      />
    </div>
  )
}

export default Avatar
