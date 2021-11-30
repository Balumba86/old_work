import { ReactSVG } from 'react-svg'
import { planParking } from '../../images'

const ParkingLevel = () => {
  return (
    <div
    style={{width: '100%', height: '500px'}}
    >
      <ReactSVG style={{width: '100%', height: '100%'}} src={planParking} />
    </div>
  )
}

export default ParkingLevel