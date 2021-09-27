import { useEffect } from 'react';
import { Switch, Route } from 'react-router-dom'
import { useStoreon } from 'storeon/react';
import {
  AboutPage,
  CafeCategoryPage,
  CafeDetailPage,
  CafePage,
  ContactsPage,
  HomePage,
  NewsDetailPage,
  NewsPage,
  NotFoundPage,
  RentersPage,
  ServiceDetailPage,
  ServicesCategoryPage,
  ServicesPage,
  ShopCategoryPage,
  ShopDetailPage,
  ShopsPage,
} from './pages'

import { PATHS } from './const'
import api from './api'
 
const App = () => {
  const { dispatch } = useStoreon()

  const getShopsFilters = () => {
    api.getCatogoriesShops()
      .then(res => {
        dispatch('filters/update', { shops: res || [] })
      })
      .catch(err => console.log(err))
  }

  const getCafeFilters = () => {
    api.getCatogoriesCafe()
      .then(res => {
        dispatch('filters/update', { cafe: res || [] })
      })
      .catch(err => console.log(err))
  }

  const getServicesFilters = () => {
    api.getCatogoriesServices()
      .then(res => {
        dispatch('filters/update', { services: res || [] })
      })
      .catch(err => console.log(err))
  }

  useEffect(() => {
    getShopsFilters();
    getCafeFilters();
    getServicesFilters();
  }, [])

  return (
    <>
      <Switch>
        <Route
          strict
          path={PATHS.home.path}
          exact={PATHS.home.exact}
          component={HomePage}
        />
        <Route
          path={PATHS.about.path}
          exact={PATHS.about.exact}
          component={AboutPage}
        />
        <Route
          path={PATHS.news_detail.path}
          exact={PATHS.news_detail.exact}
          component={NewsDetailPage}
        />
        <Route
          path={PATHS.news.path}
          exact={PATHS.news.exact}
          component={NewsPage}
        />
        <Route
          path={PATHS.contacts.path}
          exact={PATHS.contacts.exact}
          component={ContactsPage}
        />
        <Route
          path={PATHS.renter.path}
          exact={PATHS.renter.exact}
          component={RentersPage}
        />
        <Route
          path={PATHS.visitors_cafe.path}
          exact={PATHS.visitors_cafe.exact}
          component={CafePage}
        />
        <Route
          path={PATHS.visitors_services.path}
          exact={PATHS.visitors_services.exact}
          component={ServicesPage}
        />
        <Route
          path={PATHS.visitors_shops.path}
          exact={PATHS.visitors_shops.exact}
          component={ShopsPage}
        />
        <Route 
          path={PATHS.shops_detail.path}
          exact={PATHS.shops_detail.exact}
          component={ShopDetailPage}
        />
        <Route
          path={PATHS.services_detail.path}
          exact={PATHS.services_detail.exact}
          component={ServiceDetailPage}
        />
        <Route
          path={PATHS.cafe_detail.path}
          exact={PATHS.cafe_detail.exact}
          component={CafeDetailPage}
        />
        <Route 
          path={PATHS.shops_category.path}
          exact={PATHS.shops_category.exact}
          component={ShopCategoryPage}
        />
        <Route
          path={PATHS.cafe_category.path}
          exact={PATHS.cafe_category.exact}
          component={CafeCategoryPage}
        />
        <Route
          path={PATHS.services_category.path}
          exact={PATHS.services_category.exact}
          component={ServicesCategoryPage}
        />

        <Route component={NotFoundPage} />
      </Switch>
    </>
  );
}

export default App;
