@hookinsert('layout.footer.top')

<footer id="appFooter">
  <div class="footer-box">
    <div class="container">
      <div class="footer-top-links">
        <div class="row">
          <div class="col-14 col-md-14 footer-item">
            <div class="about">
              <div class="footer-link-title">
                <span>{{ __('front/common.about_us') }}</span>
                <div class="footer-link-icon"><i class="bi bi-plus-lg"></i></div>
              </div>
              <div class="about-text footer-item-content">
                <p>
                  <b>{{ system_setting_locale('meta_description') }}</b>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

@hookinsert('layout.footer.bottom')

@if (system_setting('js_code'))
  {!! system_setting('js_code') !!}
@endif
