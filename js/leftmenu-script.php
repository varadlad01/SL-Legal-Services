<script type="text/javascript">
		
	/*	
		$('#myTab a').click(function(e) {
		  e.preventDefault();
		  $(this).tab('show');
		});

		// store the currently selected tab in the hash value
		$("ul.nav-stacked > li > a").on("shown.bs.tab", function(e) {
		  var id = $(e.target).attr("href").substr(1);
		  window.location.hash = id;
		});

		// on load of the page: switch to the currently selected tab
		var hash = window.location.hash;
		$('#myTab a[href="' + hash + '"]').tab('show');

		//lcation refresh on modal close
		$('#myModal').on('hidden.bs.modal', function () {
 		location.reload();
		});

		*/

		/**
 * Check a href for an anchor. If exists, and in document, scroll to it.
 * If href argument ommited, assumes context (this) is HTML Element,
 * which will be the case when invoked by jQuery after an event
 */

 /*
function scroll_if_anchor(href) {
    href = typeof(href) == "string" ? href : $(this).attr("href");
    
    // You could easily calculate this dynamically if you prefer
    var fromTop = 50;
    
    // If our Href points to a valid, non-empty anchor, and is on the same page (e.g. #foo)
    // Legacy jQuery and IE7 may have issues: http://stackoverflow.com/q/1593174
    if(href.indexOf("#") == 0) {
        var $target = $(href);
        
        // Older browser without pushState might flicker here, as they momentarily
        // jump to the wrong position (IE < 10)
        if($target.length) {
            $('html, body').animate({ scrollTop: $target.offset().top - fromTop });
            if(history && "pushState" in history) {
                history.pushState({}, document.title, window.location.pathname + href);
                return false;
            }
        }
    }
}    

// When our page loads, check to see if it contains and anchor
scroll_if_anchor(window.location.hash);

// Intercept all anchor clicks
$("body").on("click", "a", scroll_if_anchor); */
	</script>
