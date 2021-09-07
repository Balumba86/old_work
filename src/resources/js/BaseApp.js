import { Switch, Route } from 'react-router-dom'
import {
  AboutPage,
  CafeDetailPage,
  CafePage,
  ContactsPage,
  HomePage,
  NewsPage,
  RentersPage,
  ServiceDetailPage,
  ServicesPage,
  ShopDetailPage,
  ShopsPage,
} from './pages'
import { LoaderPage } from './views';

import {PATHS} from './const'
 
function App() {
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
      </Switch>
    </>
  );
}

export default App;
