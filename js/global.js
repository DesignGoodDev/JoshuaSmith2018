jQuery(function($){
	$(document).ready(function(){

		$(".fitvids").fitVids();

		$("ul.sf-menu").superfish({
			autoArrows: true,
			delay: 400
		});

		$('a[href="#toplink"]').click(function(){
			$('html, body').animate({scrollTop:0}, 200);
			return false;
		});

		$("li.comments-scroll a").click(function(event){
			event.preventDefault();
			$('html,body').animate({ scrollTop:$(this.hash).offset().top}, 'normal' );
		});

		$(".prettyphoto-link").prettyPhoto({
			theme: 'pp_default',
			animation_speed:'fast',
			allow_resize: true,
			keyboard_shortcuts: true,
			show_title: false,
			social_tools: false,
			autoplay_slideshow: false
		});

		$("a[rel^='prettyphoto']").prettyPhoto({
			theme: 'pp_default',
			animation_speed:'fast',
			allow_resize: true,
			keyboard_shortcuts: true,
			show_title: false,
			slideshow:3000,
			social_tools: false,
			autoplay_slideshow: false,
			overlay_gallery: true
		});

        $("a[rel^='prettyPhoto-news']").prettyPhoto({
            theme: 'pp_default',
            animation_speed:'fast',
            allow_resize: true,
            keyboard_shortcuts: true,
            show_title: false,
            slideshow:3000,
            social_tools: false,
            autoplay_slideshow: false,
            overlay_gallery: true,
            markup: '<div class="pp_pic_holder" id="nlp"> \
                        <div class="ppt">&nbsp;</div> \
                        <div class="pp_top"> \
                            <div class="pp_left"></div> \
                            <div class="pp_middle"></div> \
                            <div class="pp_right"></div> \
                        </div> \
                        <div class="pp_content_container newsletter-pop"> \
                            <div class="pp_left"> \
                            <div class="pp_right"> \
                                <div class="pp_content"> \
                                    <div class="pp_loaderIcon"></div> \
                                    <div class="pp_fade"> \
                                        <a href="#" class="pp_expand" title="Expand the image">Expand</a> \
                                        <div class="pp_hoverContainer"> \
                                            <a class="pp_next" href="#">next</a> \
                                            <a class="pp_previous" href="#">previous</a> \
                                        </div> \
                                        <div id="pp_full_res"></div> \
                                        <div class="pp_details"> \
                                            <div class="pp_nav"> \
                                                <a href="#" class="pp_arrow_previous">Previous</a> \
                                                <p class="currentTextHolder">0/0</p> \
                                                <a href="#" class="pp_arrow_next">Next</a> \
                                            </div> \
                                            <p class="pp_description"></p> \
                                            {pp_social} \
                                            <a class="pp_close" href="#">Close</a> \
                                        </div> \
                                    </div> \
                                </div> \
                            </div> \
                            </div> \
                        </div> \
                        <div class="pp_bottom"> \
                            <div class="pp_left"></div> \
                            <div class="pp_middle"></div> \
                            <div class="pp_right"></div> \
                        </div> \
                    </div> \
                    <div class="pp_overlay"></div>'
        });

        // $("a[rel^='prettyPhoto-news-second']").prettyPhoto({
        //     theme: 'pp_default',
        //     animation_speed:'fast',
        //     allow_resize: true,
        //     keyboard_shortcuts: true,
        //     show_title: false,
        //     slideshow:3000,
        //     social_tools: false,
        //     autoplay_slideshow: false,
        //     overlay_gallery: true,
        //     callback: function(){ $.cookie("short-newsletter", 1); },
        //     markup: '<div class="pp_pic_holder"> \
        //                 <div class="ppt">&nbsp;</div> \
        //                 <div class="pp_top"> \
        //                     <div class="pp_left"></div> \
        //                     <div class="pp_middle"></div> \
        //                     <div class="pp_right"></div> \
        //                 </div> \
        //                 <div class="pp_content_container newsletter-pop second"> \
        //                     <div class="pp_left"> \
        //                     <div class="pp_right"> \
        //                         <div class="pp_content"> \
        //                             <div class="pp_loaderIcon"></div> \
        //                             <div class="pp_fade"> \
        //                                 <a href="#" class="pp_expand" title="Expand the image">Expand</a> \
        //                                 <div class="pp_hoverContainer"> \
        //                                     <a class="pp_next" href="#">next</a> \
        //                                     <a class="pp_previous" href="#">previous</a> \
        //                                 </div> \
        //                                 <div id="pp_full_res"></div> \
        //                                 <div class="pp_details"> \
        //                                     <div class="pp_nav"> \
        //                                         <a href="#" class="pp_arrow_previous">Previous</a> \
        //                                         <p class="currentTextHolder">0/0</p> \
        //                                         <a href="#" class="pp_arrow_next">Next</a> \
        //                                     </div> \
        //                                     <p class="pp_description"></p> \
        //                                     {pp_social} \
        //                                     <a class="pp_close" href="#">Close</a> \
        //                                 </div> \
        //                             </div> \
        //                         </div> \
        //                     </div> \
        //                     </div> \
        //                 </div> \
        //                 <div class="pp_bottom"> \
        //                     <div class="pp_left"></div> \
        //                     <div class="pp_middle"></div> \
        //                     <div class="pp_right"></div> \
        //                 </div> \
        //             </div> \
        //             <div class="pp_overlay"></div>'
        // });


        $("#fancy-cta").fancybox();


        // function ppopen() {
        //     if (document.cookie.indexOf('newsletter=') < 0) {
        //         $.fancybox({
        //              'transitionIn': 'elastic',
        //              'transitionOut': 'elastic',
        //              'speedIn': 500,
        //              'speedOut': 300,
        //              'href' : '#newsletter',
        //              'afterClose' : function() {
        //                 $.cookie("short-newsletter", 1);
        //              }
        //           });
        //     };
        // }
        // setTimeout(ppopen, 20000);

        if (window.location.href.indexOf("?thank-you") > -1) {
            $('.thank-you-message').show();
        }

        $("#newsletter-second form input[type='submit']").attr("value", "I'm in!");

        $('#sidebar .sidebar-box:nth-child(4)').remove();

        //$('#reply-title').empty().html('Leave a Comment:');

	});
    $(window).load(function() {
      $("#page-heading-content h1").show();
    });
});

/* Image Comparison Slider */
window.Scrobbleme = {
    widthToScaleUp: 300,
    methods: ['overlay'],
    versions: {
        'ImageComparisonSlider': '1.12'
    }
};

Scrobbleme.ImageComparisonSlider = function (element, jQuery) {
    var slide, slider;

    if (jQuery == undefined) {
        jQuery = window.jQuery;
    }

    this.domNode = jQuery(element);
    this.domNode.originalWidth = this.domNode[0].style.width;
    this.domNode.find('.images .left').width(this.domNode.width() / 2);
    this.domNode.find('.images img').width(this.domNode.width());
    slide = this.slide_overlay;
    slider = this.domNode.find('.slider');
    slider.noUiSlider({
            start: 50,
            animate: false,
            range: {
                'min': 0,
                'max': 100
            }
        }, true
    ).on({
            slide: function (event, value) {
                this.domNode.attr('data-ic-slider-value', value);
                jQuery.proxy(slide, this)(event, {value: value});
            }.bind(this)
        });
    jQuery.proxy(slide, this)(null, {value: 50});
    jQuery.proxy(this.resize_callback, this)({data: {'slider': slider, 'slide': slide, 'element': this}});
    jQuery(window).resize({'slider': slider, 'slide': slide, 'element': this}, this.resize_callback);
    this.domNode.find('.images').click({'slider': slider, 'slide': slide}, this.clickable_callback.bind(this));

    /** Extras */
    if (this.domNode.hasClass('hover') && this.supports_hover()) {
        this.domNode.find('.images').mousemove({
            'slider': slider,
            'slide': slide
        }, this.throttle(this.clickable_callback.bind(this), 15));
    }
}
;

Scrobbleme.ImageComparisonSlider.prototype = {

    slide_overlay: function (event, ui) {
        this.domNode.find('.images .left').width(ui.value * this.domNode.width() / 100);
    },

    clickable_callback: function (event) {

        var newValue = (event.pageX - event.currentTarget.getBoundingClientRect().left) / event.currentTarget.clientWidth * 100;
        jQuery.proxy(event.data.slide, this)(null, {value: newValue});
        event.data.slider.val(newValue);
    },

    resize_callback: function (options) {
        var data = options.data;
        var domNode = data.element.domNode;
        if (domNode.width() <= Scrobbleme.widthToScaleUp && !domNode.modeChanged) {
            domNode.modeChanged = true;
            domNode[0].style.width = '100%';
            domNode.upperSizeBound = domNode.width();
        } else if (domNode.modeChanged && domNode.width() > domNode.upperSizeBound) {
            domNode[0].style.width = domNode.originalWidth;
            domNode.modeChanged = false;
        }

        domNode.find('.images img').height('auto');
        if (domNode.hasClass('overlay')) {
            domNode.find('.images .left').width(domNode.width() / 2);
            domNode.find('.images img').width(domNode.width());
        }
        var currentValue = data.slider.val();
        jQuery.proxy(data.slide, data.element)(null, {value: currentValue});
    },

    /**
     * Returns true, if the device supports "hover" in the plugins sense.
     */
    supports_hover: function () {
        return !navigator.userAgent.match(/(iPod|iPhone|iPad|Android|Windows\sPhone|BlackBerry)/i);
    },

    // Thanks: http://sampsonblog.com/749/simple-throttle-function
    throttle: function (callback, threshhold) {
        var wait = false;
        return function (event) {
            if (!wait) {
                callback(event);
                wait = true;
                setTimeout(function () {
                    wait = false;
                }, threshhold);
            }
        }
    }
};

jQuery(function (jQuery) {
    jQuery('.image-comparator').each(function (index, element) {
        new Scrobbleme.ImageComparisonSlider(element, jQuery);
    });
});



