// animation.js
(function($) {
    $(document).ready(function() {
        const spans = document.querySelectorAll('#studio h2 span');
        let delay = 0;

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    spans.forEach((span, index) => {
                        setTimeout(() => {
                            span.classList.add('animated');
                        }, delay);
                        delay += 100; // Delay between each word animation
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
})(jQuery);
