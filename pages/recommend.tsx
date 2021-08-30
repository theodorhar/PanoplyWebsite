import { withPageAuthRequired } from '@auth0/nextjs-auth0'
import { Layout } from '@components/common'
import { Container, Text } from '@components/ui'

export default function Profile({ user }) {
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
    </Container>
  )
}
export const getServerSideProps = withPageAuthRequired()

Profile.Layout = Layout
