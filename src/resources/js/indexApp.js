import React from 'react';
import ReactDOM from 'react-dom';
import App from './BaseApp';
import { StoreContext } from 'storeon/react';
import { BrowserRouter as Router } from 'react-router-dom';
// import store from './store';
import './styles/index.scss'

const store = {}

ReactDOM.render(
  <StoreContext.Provider value={store}>
    <Router>
      <React.StrictMode>
        <App />
      </React.StrictMode>
    </Router>
  </StoreContext.Provider>,
  document.getElementById('root')
);