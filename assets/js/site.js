import '../style/site.scss';

jQuery(document).ready(function() {

    jQuery(window).scroll(function() {
        let scroll = jQuery(this).scrollTop();

        if (scroll > 10) {
            jQuery('.site-header').addClass('site-header_scroll');
        } else {
            jQuery('.site-header').removeClass('site-header_scroll');
        }
    });

    jQuery('.site-header__mobile-toggle').click(function(e) {
        e.preventDefault();
        jQuery('.site-header__navigation').addClass('site-header__navigation_shown');
    });

    jQuery('.site-header__mobile-close').click(function(e) {
        e.preventDefault();
        jQuery('.site-header__navigation').removeClass('site-header__navigation_shown');
    });

    jQuery('.post-card__show-more').click(function(e) {
        e.preventDefault();
        let self = jQuery(this);

        if (self.data('action') == 'more') {
            self.data('action', 'less');
            self.find('.arrow-more').hide();
            self.find('span.more').hide();
            self.find('.arrow-less').show();
            self.find('span.less').show();

            self.siblings('.post-card__excerpt').addClass('post-card__excerpt_shown');
        } else {
            self.data('action', 'more');
            self.find('.arrow-more').show();
            self.find('span.more').show();
            self.find('.arrow-less').hide();
            self.find('span.less').hide();

            self.siblings('.post-card__excerpt').removeClass('post-card__excerpt_shown');
        }
    });
});