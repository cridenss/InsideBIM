<?php

function main_theme_setup()
{
    add_theme_support('block-patterns');
}
add_action('after_setup_theme', 'main_theme_setup');

function insidebim_smooth_scroll()
{
?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll fluide pour liens ancres
            const links = document.querySelectorAll('a[href^="#"]');
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
<?php
}
add_action('wp_footer', 'insidebim_smooth_scroll');
