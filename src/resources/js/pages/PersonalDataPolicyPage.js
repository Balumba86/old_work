import PersonalDataPolicy from "../components/PersonalDataPolicy"
import ScrollingLayout from "../components/ScrollingLayout"
import { Layout } from "../views"

const PersonalDataPolicyPage = () => {
  return (
    <ScrollingLayout>
      {() => (
        <Layout>
          <PersonalDataPolicy />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default PersonalDataPolicyPage