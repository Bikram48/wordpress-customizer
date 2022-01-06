( function( $ ) {
    wp.customize( 'sample_default_text', function( value ) {
        console.log( "check" );

        value.bind( function( background ){
            console.log( background );
            var style = document.createElement( "style" );
            style.innerHTML = 'body{background-color:' + background + '; }';
            //var primaryColorStyle='<style id="estore-internal-primary-color">.body{ background-color: ' + background + '; }';
            // jQuery( 'head #estore-internal-primary-color' ).remove();
			// jQuery( 'head' ).append( primaryColorStyle );
            console.log( style );
            document.body.appendChild( style );
        })
    })
} )( jQuery );

