<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container">
        <div class="row">

            <div class="col-md-4 mb-4">
                <h5>{{ __('footer.about_us_title') }}</h5>
                <p>{{ __('footer.about_us_text') }}</p>
            </div>

            <div class="col-md-4 mb-4">
                <h5>{{ __('footer.contact_title') }}</h5>
                <ul class="list-unstyled">
                    <li>{{ __('footer.email') }}:
                        <a href="mailto:info@bedrijfx.nl" class="text-white">info@bedrijfx.nl</a>
                    </li>
                    <li>{{ __('footer.phone') }}:
                        <a href="tel:+31555123456" class="text-white">+31 (0)555 123 456</a>
                    </li>
                    <li>{{ __('footer.address') }}: Hoofdstraat 123, 1234 AB Amsterdam</li>
                    <li>
                        <a href="{{ url('/contact') }}" class="text-white">{{ __('footer.contact_form') }}</a>
                    </li>
                </ul>
            </div>

            <!-- Social media -->
            <div class="col-md-4 mb-4">
                <h5>{{ __('footer.follow_us') }}</h5>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" class="text-white">{{ __('footer.social_facebook') }}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">{{ __('footer.social_instagram') }}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">{{ __('footer.social_linkedin') }}</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">{{ __('footer.social_twitter') }}</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="d-flex flex-column align-items-center">
        <h5 class="mb-2">{{ __('footer.change_lang') }}</h5>
        <div class="language-switch">
            @if (app()->getLocale() === 'nl')
                <a href="{{ route('lang.switch', 'en') }}" class="text-white text-decoration-none">
                    🇬🇧 English
                </a>
            @else
                <a href="{{ route('lang.switch', 'nl') }}" class="text-white text-decoration-none">
                    🇳🇱 Nederlands
                </a>
            @endif
        </div>
    </div>
    <div class="text-center mt-3">
        <p class="mb-0">© {{ __('misc.copyright') }}</p>
    </div>
</footer>

<!-- Google Analytics -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-30506707-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

<script type="text/javascript">
    if (top.location !== self.location) {
        top.location = self.location.href;
    }
</script>
