(function($) {
    //Animation titres
    jQuery(document).ready(function() {
        const spans = document.querySelectorAll('#studio h2 span');
        let delay = 0;

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    spans.forEach((span, index) => {
                        setTimeout(() => {
                            span.classList.add('animated');
                        }, delay);
                        delay += 500; // Delay between each word animation
                    });

                    return;
                }

                spans.forEach(span => {
                    span.classList.remove('animated');
                });

                delay = 0; // Reset the delay when elements are out of the trigger range
            });
        });

        observer.observe(document.querySelector('#studio'));
    });

    jQuery(document).ready(function() {
        const spanElement = document.querySelector('.story h2 span');
    
        if (spanElement) {
           
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        spanElement.classList.add('animated');
                    } else {
                        spanElement.classList.remove('animated');
                    }
                });
            });
           
            observer.observe(spanElement);
        } 
    });

    //Parallax Logo
    jQuery(document).ready(function() {
        var logo = $('.content');
        var logoOffset = logo.offset().top;
      
        setTimeout(function(){
            jQuery(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            var parallaxValue = (scrollTop - logoOffset) * 0.25;
            logo.css('transform', 'translateY(' + parallaxValue + 'px)');
            });
        }, 3000);
    });
    //Animation nuages
    jQuery(document).ready(function() {
        const clouds = $('.cloud');
        const amplitude = 300;
        const placeOffset = $('#characters').offset().top;

        jQuery(window).on('scroll', function() {
            const scrollPosition = $(this).scrollTop();

            if (scrollPosition >= placeOffset) {
                const displacement = -amplitude * ((scrollPosition - placeOffset) / $(window).height());
                clouds.each(function() {
                    $(this).css('transform', `translateX(${displacement}px)`);
                });
            }
        });
    });
})(jQuery);
