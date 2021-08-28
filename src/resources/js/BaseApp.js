import { Switch, Route } from 'react-router-dom'
import {
  AboutPage,
  ContactsPage,
  HomePage,
  NewsPage,
  RentersPage,
  VisitorsPage
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
        path={PATHS.visitors.path}
        exact={PATHS.visitors.exact}
        component={VisitorsPage}
      />
    </Switch>
  );
}

export default App;
