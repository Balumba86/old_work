import { createStoreon } from 'storeon';
// import { storeonDevtools } from 'storeon/devtools';

const filters = store => {
  store.on('@init', () => ({ filters: { cafe: [], services: [], shops: [] }}));
  store.on('filters/save', ({ }, { ...params }) => ({ filters: { ...params }}));
  store.on('filters/update', ({ filters }, params) => {
    const newFilters = {
      ...filters,
      ...params
    };
    store.dispatch('filters/save', newFilters);
  });
}

const storeonParams = [
  filters
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