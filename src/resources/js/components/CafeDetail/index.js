import { PATHS } from "../../const"
import { DetailBlock } from "../../views"

const CafeDetail = () => {
  return (
    <DetailBlock baseUrl={PATHS.visitors_cafe.path} linkLabel='К списку кафе и ресторанов' />
  )
}

export default CafeDetail