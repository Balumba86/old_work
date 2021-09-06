import { Switch, Route } from 'react-router-dom'
import {
  AboutPage,
  CafePage,
  ContactsPage,
  HomePage,
  NewsPage,
  RentersPage,
  ServicesPage,
  ShopsPage,
} from './pages'

import {PATHS} from './const'
 
function App() {
  return (
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
    </Switch>
  );
}

export default App;
