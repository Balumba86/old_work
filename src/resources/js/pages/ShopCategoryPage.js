import { useEffect, useState } from "react"
import { useLocation } from "react-router"
import ScrollingLayout from "../components/ScrollingLayout"
import VisitorsList from "../components/VisitorsList"
import { VisitorsLayout } from "../views"
import { PATHS } from "../const"
import api from "../api"

const ShopCategoryPage = () => {
  const location = useLocation()
  const [slug, setSlug] = useState(null)

  useEffect(() => {
    if(location && location.state) {
      setSlug(location.state.slug)
    } else {
      const { pathname } = location;
      const newSlug = pathname.replace(`${PATHS.shops.path}`, '').replace('/', '')
      setSlug(newSlug)
    }
  }, [])

  return (
    <ScrollingLayout>
      {(props) => (
        <VisitorsLayout title='Магазины'>
          {slug && (
            <VisitorsList
              api={api.getShopsCategorySlug}
              initFilterParams={{
                page: 1,
                search: '',
                categorySlug: slug
              }}
              variant='shops'
              {...props}
            />
          )}
        </VisitorsLayout>
      )}
    </ScrollingLayout>
  )
}

export default ShopCategoryPage