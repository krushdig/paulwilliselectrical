;(function ($, undefined) {
    'use strict';

    $(function () {


		/*elementor.channels.data.on( 'element:after:add', function() {
			alert('dd');
		});*/

        /**
         * After Go Pricing widget panel is open
         */
        elementor.hooks.addAction('panel/open_editor/widget/go-pricing', function( self, model, view ) {

            var $select = $('select[data-setting="go_pricing--id"]');
            /**
             * After ajax refresh is ready
             */
            model.on( 'remote:render', function() {
                setTimeout(function() {
                    var iframe = $('#elementor-preview-iframe')[0];
					(iframe.contentWindow || iframe).jQuery.GoPricing.$wrap = $(iframe).contents().find('.gw-go');
					(iframe.contentWindow || iframe).jQuery.GoPricing.$wrap.data('anim', 'off').css('opacity',1);
                    (iframe.contentWindow || iframe).GoPricingTablespyInit();
                },10)
            });
			
        });
		
        /**
         * After preview is loaded
         */
        elementor.on( 'preview:loaded', function(e) {
			
			setTimeout(function() {
				var iframe = $('#elementor-preview-iframe')[0];
				(iframe.contentWindow || iframe).jQuery.GoPricing.$wrap.data('anim', 'off').css('opacity',1);
                (iframe.contentWindow || iframe).GoPricingTablespyInit();
				
				var $target = null;
				
				$(iframe).contents().on('mousedown mouseup', '.elementor-editor-element-duplicate', function(e) {
					if (e.type == 'mousedown')  {
						$target = $(this);
						return;
					}
					
					// Do click
					if ($target.is($(this))) {
						setTimeout(function() {
							var iframe = $('#elementor-preview-iframe')[0];
							(iframe.contentWindow || iframe).jQuery.GoPricing.$wrap = $(iframe).contents().find('.gw-go');
							(iframe.contentWindow || iframe).jQuery.GoPricing.$wrap.data('anim', 'off').css('opacity',1);
							(iframe.contentWindow || iframe).GoPricingTablespyInit();
						},100)						
					}
					
					$target = null;

				});
								
			},10);
			
            $('.elementor-panel').on('click', '.go-pricing_btn-edit-table', function(e) {
				e.preventDefault();
				var $select = $('.elementor-panel').find('select[data-setting="go_pricing--id"]');	
				if (!$select.length || $select.val() === null || $select.val().split('--')[0] == "0" ) return;
				window.open($(this).data('url-base') + '='+$select.val().split('--')[0], "_blank");
            });
        });		

    });

})(jQuery);