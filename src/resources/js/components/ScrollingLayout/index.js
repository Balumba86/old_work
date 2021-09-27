import { useEffect, useState } from "react"
import { Button } from "../../views"

const ScrollingLayout = ({ children = null }) => {
  const [showBtn, setShowBtn] = useState(false)
  const [isLoadMore, setLoadMore] = useState(false)

  const scrollingTop = () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    })
  }

  const scrollingPage = (e) => {
    e.stopPropagation();
    const { scrollHeight, scrollTop, clientHeight } = e.target.scrollingElement;
    const scrollPercent = Math.floor((scrollTop / (scrollHeight - clientHeight)) * 100);

    if (scrollPercent > 60 && scrollPercent < 70) {
      setLoadMore(true)
    } else {
      setLoadMore(false)
    }
    if(scrollPercent > 20) {
      setShowBtn(true)
    }
    if(scrollPercent === 0) {
      setShowBtn(false)
    }
  }

  useEffect(() => {
    if(document) {
      document.addEventListener('scroll', scrollingPage)
    }
    
    return () => {
      setShowBtn(false)
      setLoadMore(false)
      document.removeEventListener('scroll', scrollingPage)
      scrollingTop()
    }
    
  }, [document])

  return (
    <>
      {children({
        isLoadMore
      })}
      {showBtn ? <Button type='button' onClick={scrollingTop} variant='scroll-top'></Button> : null}
    </>
  )
}

export default ScrollingLayout