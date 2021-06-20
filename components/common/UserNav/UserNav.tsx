import { FC } from 'react'
import cn from 'classnames'
import { useUser } from '@auth0/nextjs-auth0'
import { Avatar } from '@components/common'
import { useUI } from '@components/ui/context'
import DropdownMenu from './DropdownMenu'
import s from './UserNav.module.css'

interface Props {
  className?: string
}

const UserNav: FC<Props> = ({ className }) => {
  const { openModal } = useUI()
  const { user, error, isLoading } = useUser()
  if (isLoading) return <div>Loading...</div>
  if (error) return <div>{error.message}</div>
  return (
    <nav className={cn(s.root, className)}>
      <div className={s.mainContainer}>
        <ul className={s.list}>
          <li className={s.item}>
            {!user ? <a href="/api/auth/login">Login</a> : <a></a>}
          </li>
          <li className={s.item}>
            {user ? (
              <DropdownMenu />
            ) : (
              <button
                className={s.avatarButton}
                aria-label="Menu"
                onClick={() => openModal()}
              >
                <Avatar />
              </button>
            )}
          </li>
        </ul>
      </div>
    </nav>
  )
}

export default UserNav
