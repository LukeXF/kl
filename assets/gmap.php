<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script type="text/javascript" src="http://joemethven.com/assets/js/vendors/gmap3.min.js"></script>


<script>

    /* google map
----------------------------------------------*/
    var $gmap = $("#gmap , .gmap");
    if ($gmap.length > 0) {
        $gmap.each(function() {
            var $gmap = $(this);
            var address = $gmap.attr('data-address') || 'Wheatear Industrial Estate, Perry Road, Witham, Essex, CM8 3YY';

            $gmap.gmap3({
                map: {
                    options: {
                        maxZoom: 20,
                        minZoom: 10,
                        streetViewControl: false,
                        mapTypeControl: false,
                    }
                },
                styledmaptype: {
                    id: "mystyle",
                    options: {
                        name: "Style 1"
                    },
                    styles: [{
                        featureType: "all",
                        stylers: [{
                            "saturation": -100
                        }, {
                            "gamma": 0.9
                        }, {
                            "background": "black"
                        }]
                    }]
                },
                overlay: {
                    //Edit following line and enter your own address
                    address: address,
                    options: {
                        content: '<div id="map-marker"><i class="fa fa-4x fa-map-marker"></i></div>',
                        offset: {
                            y: -65,
                            x: -20
                        }
                    }
                }, //Following maxZoom option is for setting the initial zoom of google map
                autofit: {
                    maxZoom: 14
                }
            }, "autofit");

            $gmap.gmap3('get').setMapTypeId("mystyle");
        });


    }



</script>