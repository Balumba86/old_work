const newsListSerializer = (res) => {
  const data = {
    next: res.data?.next_page_url || null,
    prev: res?.data?.prev_page_url || null,
    results: res?.data?.data || [],
    currentPage: res?.data?.current_page || 1,
    pageSize: res?.data?.per_page || 10
  }
  return data
}

export default newsListSerializer