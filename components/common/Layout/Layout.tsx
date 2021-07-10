import React, { FC } from 'react'
import { useRouter } from 'next/router'
import dynamic from 'next/dynamic'
import cn from 'classnames'
import type { Page } from '@commerce/types/page'
import type { Category } from '@commerce/types/site'
import { useAcceptCookies } from '@lib/hooks/useAcceptCookies'
import { useUI } from '@components/ui/context'
import { Navbar, Footer } from '@components/common'
import { Sidebar, Button, Modal, LoadingDots } from '@components/ui'
import s from './Layout.module.css'

const Loading = () => (
  <div className="w-80 h-80 flex items-center text-center justify-center p-3">
    <LoadingDots />
  </div>
)

const dynamicProps = {
  loading: () => <Loading />,
}

const FeatureBar = dynamic(
  () => import('@components/common/FeatureBar'),
  dynamicProps
)

interface Props {
  pageProps: {
    pages?: Page[]
    categories: Category[]
  }
}

const Layout: FC<Props> = ({
  children,
  pageProps: { categories = [], ...pageProps },
}) => {
  const { displaySidebar, displayModal, closeSidebar, closeModal, modalView } =
    useUI()
  const { acceptedCookies, onAcceptCookies } = useAcceptCookies()
  const { locale = 'en-US' } = useRouter()

  const navBarlinks = categories.slice(0, 2).map((c) => ({
    label: c.name,
    href: `/search/${c.slug}`,
  }))

  return (
    <div className={cn(s.root)}>
      <Navbar links={navBarlinks} />
      <main className="fit">{children}</main>
      <Footer pages={pageProps.pages} />

      {/* <Modal open={displayModal} onClose={closeModal}>
        {modalView === 'LOGIN_VIEW' && <LoginView />}
        {modalView === 'SIGNUP_VIEW' && <SignUpView />}
        {modalView === 'FORGOT_VIEW' && <ForgotPassword />}
      </Modal> */}
      <FeatureBar
        title="This site uses cookies to improve your experience. By clicking, you agree to our Privacy Policy."
        hide={acceptedCookies}
        action={
          <Button className="mx-5" onClick={() => onAcceptCookies()}>
            Accept cookies
          </Button>
        }
      />
    </div>
  )
}

export default Layout
