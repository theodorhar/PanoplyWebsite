import { useUser } from '@auth0/nextjs-auth0'
import { Layout } from '@components/common'
import { Container, Text } from '@components/ui'

export default function Profile() {
  const { user, error, isLoading } = useUser()

  if (isLoading) return <div>Loading...</div>
  if (error) return <div>{error.message}</div>
  return (
    <Container>
      <Text variant="pageHeading">My Profile</Text>
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
    </Container>
  )
}

Profile.Layout = Layout
