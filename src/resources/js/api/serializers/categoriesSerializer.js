const categoriesSerializer = (res, baseUrl) => {
  const { data } = res;
  const categories = [];
  if(data) {
    data.map(el => {
      categories.push({
        value: el.slug,
        label: el.title,
        link: `${baseUrl}/${el.slug}`,
        id: el.id,
        slug: el.slug
      })
    })
  }
  return categories;
}

export default categoriesSerializer