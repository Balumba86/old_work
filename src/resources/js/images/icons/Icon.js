import icons from './icons.svg'

const Icon = ({ name = '' }) => (
	<svg xmlns="http://www.w3.org/2000/svg" xmlnsXlink="http://www.w3.org/1999/xlink" width="100%" height='100%'>
    <use xlinkHref={`${icons}#${name}`} />
	</svg>
)

export default Icon