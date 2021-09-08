import { PATHS } from "../../const"
import { DetailBlock } from "../../views"

const ShopDetail = () => {
  return (
    <DetailBlock baseUrl={PATHS.visitors_shops.path} linkLabel='К списку магазинов' />
  )
}

export default ShopDetail