var styles = [
    {
        featureType: 'landscape',
        elementType: 'all',
        stylers: [
            { hue: '#c9c9c9' },
            { saturation: -100 },
            { lightness: -11 },
            { visibility: 'on' }
        ]
    },{
        featureType: 'poi',
        elementType: 'all',
        stylers: [
            { hue: '#9e9e9e' },
            { saturation: -100 },
            { lightness: -21 },
            { visibility: 'on' }
        ]
    },{
        featureType: 'road',
        elementType: 'all',
        stylers: [
            { hue: '#2b9290' },
            { saturation: -46 },
            { lightness: -42 },
            { visibility: 'on' }
        ]
    },{
        featureType: 'road',
        elementType: 'labels',
        stylers: [
            { hue: '#71b7b5' },
            { saturation: -67 },
            { lightness: -9 },
            { visibility: 'on' }
        ]
    },{
        featureType: 'water',
        elementType: 'all',
        stylers: [
            { hue: '#d7edf7' },
            { visibility: 'on' }
        ]
    },{
        featureType: 'water',
        elementType: 'all',
        stylers: [

        ]
    }
];
var options = {
    mapTypeControlOptions: {
        mapTypeIds: [ 'Styled']
    },
    scrollwheel: false,
    center: new google.maps.LatLng(32.73887645253431, -117.13163604736326),
    zoom: 14,
    mapTypeId: 'Styled'
};
var div = document.getElementById('map');
var map = new google.maps.Map(div, options);
var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
map.mapTypes.set('Styled', styledMapType);
