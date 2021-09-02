import { createRef, useState } from 'react';
import {
  YMaps,
  Map,
  ZoomControl,
  TrafficControl,
  GeolocationControl,
  Placemark,
} from 'react-yandex-maps';

import style from './map.module.scss'

const LocationMap = () => {
  const [openMap, setOpenMap] = useState(false)
  const mapRef = createRef(null);

  const toggleOpen = () => {
    setOpenMap(!openMap);
  };

  return (
    <div className={style['map']}>
      <YMaps>
        <Map
          instanceRef={mapRef}
          width='100%'
          height={openMap ? 550 : 300}
          defaultState={{
            center: [57.018219374241085, 40.96831532544931],
            zoom: 16,
            controls: [],
            behaviors: ['drag', 'dblClickZoom', 'rightMouseButtonMagnifier', 'multiTouch']
          }}>
            <GeolocationControl options={{ float: 'left' }} />
            <ZoomControl options={{ float: 'right' }} />
            <TrafficControl options={{ float: 'right' }} />
            <Placemark geometry={[57.018219374241085, 40.96831532544931]}/>
          </Map>
        <button
          className={style['toggle-open-btn']}
          type='button'
          onClick={toggleOpen}>
            &#8645;
          </button>
      </YMaps>
    </div>
  )
}

export default LocationMap