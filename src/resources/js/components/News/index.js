import { NewsList } from "../../views"
const News = () => {
  return (
    <>
      <NewsList />
      <div>
        <button type='button' className='link'>Загрузить еще</button>
      </div>
    </>
  )
}

export default News