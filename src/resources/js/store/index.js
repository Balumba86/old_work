import { createStoreon } from 'storeon';
// import { storeonDevtools } from 'storeon/devtools';

const storeonParams = [
  // filtersOpenClose,
  // modalFn,
  // settingsListItems,
  // userInfo,
  // FilterParams,
  // filtersList,
];

// if (process.env.NODE_ENV === 'development') {
//   storeonParams.push(storeonDevtools);
// }

const store = createStoreon(storeonParams);
export default store;