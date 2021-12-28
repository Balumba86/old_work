import ParkingRules from "../components/ParkingRules"
import ScrollingLayout from "../components/ScrollingLayout"
import { Layout } from "../views"

const ParkingRulesPage = () => {
  return (
    <ScrollingLayout>
      {() => (
        <Layout>
          <ParkingRules />
        </Layout>
      )}
    </ScrollingLayout>
  )
}

export default ParkingRulesPage