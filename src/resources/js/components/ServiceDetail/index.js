import { PATHS } from "../../const"
import { DetailBlock } from "../../views"

const ServiceDetail = () => {
  return (
    <DetailBlock baseUrl={PATHS.visitors_services.path} linkLabel='К списку сервисов и услуг' />
  )
}

export default ServiceDetail