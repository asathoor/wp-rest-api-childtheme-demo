/**
 * Introduction to WordPress REST API
 **/
 
// js test:
console.log('Cheers from js/js.js');

// endpoints
let someposts = 'http://localhost:8888/wordpress/wp-json/wp/v2/pages';

// jQuery:
(function($) {
    $(document).ready(function() {
        
        // --- enter your code below
        
        // test
        console.log('You\'re lucky: jQuery runs in protected mode. \nThe document is ready.');
        
        // AJAX and jSon     
        $.ajax({
            url: someposts,
            jsonp: "callback",
            dataType: "json",
 
            data: {
                format: "json"
            },
            success: function( response ) {
    	
                console.log( response ); // server response
                
                // if there's only one result you can:
                // console.log( response.title.rendered )
        
                /**
                 * load in a div ...
                 **/
			    for( var i = 0; i < response.length; i++){
                    
                    // test
				    console.log( response );
                    
				    $('#rest').append( '<div><h2>' 
					    + response[i].title.rendered 
					    + '</h2>' 
					    + '<div class="articleContent">' 
					    + response[i].content.rendered 
					    + '</div>');
			    }
                
            }
        });
        
    })
})(jQuery);