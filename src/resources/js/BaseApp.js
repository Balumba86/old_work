import { useEffect } from 'react';
import { Switch, Route } from 'react-router-dom'
import { useStoreon } from 'storeon/react';
import {
  CafeCategoryPage,
  CafeDetailPage,
  CafePage,
  ContactsPage,
  HomePage,
  LevelsPage,
  NewsDetailPage,
  NewsPage,
  NotFoundPage,
  PersonalDataPolicyPage,
  RentersPage,
  ServiceDetailPage,
  ServicesCategoryPage,
  ServicesPage,
  ShopCategoryPage,
  ShopDetailPage,
  ShopsPage,
  VacanciesPage,
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
          path={PATHS.scheme.path}
          exact={PATHS.scheme.exact}
          component={LevelsPage}
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
          path={PATHS.cafe.path}
          exact={PATHS.cafe.exact}
          component={CafePage}
        />
        <Route
          path={PATHS.services.path}
          exact={PATHS.services.exact}
          component={ServicesPage}
        />
        <Route
          path={PATHS.shops.path}
          exact={PATHS.shops.exact}
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
        <Route
          path={PATHS.vacancies.path}
          exact={PATHS.vacancies.exact}
          component={VacanciesPage}
        />

        <Route
          path={PATHS.personal_data.path}
          exact={PATHS.personal_data.exact}
          component={PersonalDataPolicyPage}
        />

        <Route component={NotFoundPage} />
      </Switch>
    </>
  );
}

export default App;
