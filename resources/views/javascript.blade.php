@if($message = Session::get('success'))
    <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast fade hide" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
        <div class="toast-body">
            <svg class="bi bi-bookmark-check text-white" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
            </svg>
            <div class="toast-text ms-3 me-2">
                <p class="mb-1 text-white">Berhasil!</p><small class="d-block">{{ $message }}.</small>
            </div>
        </div>
        <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        <span class="toast-autohide-animation" style="animation-duration: 7000ms;"></span>
    </div>
@endif

@if($message = Session::get('error'))
    <div class="toast toast-autohide custom-toast-1 toast-danger mb-2 fade hide" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="8000" data-bs-autohide="true">
        <div class="toast-body">
            <svg class="bi bi-bootstrap-fill text-white" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"></path>
            </svg>
            <div class="toast-text ms-3 me-2">
                <p class="mb-1 text-white">gagal!</p><small class="d-block">{{ $message }}.</small>
            </div>
        </div>
        <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        <span class="toast-autohide-animation" style="animation-duration: 8000ms;"></span></div>
@endif

<script src="{{ asset('mobile/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('mobile/js/slideToggle.min.js') }}"></script>
<script src="{{ asset('mobile/js/internet-status.js') }}"></script>
<script src="{{ asset('mobile/js/tiny-slider.js') }}"></script>
<script src="{{ asset('mobile/js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('mobile/js/rangeslider.min.js') }}"></script>
<script src="{{ asset('mobile/js/vanilla-dataTables.min.js') }}"></script>
<script src="{{ asset('mobile/js/index.js') }}"></script>
<script src="{{ asset('mobile/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('mobile/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('mobile/js/dark-rtl.js') }}"></script>
<script src="{{ asset('mobile/js/active.js') }}"></script>
<script src="{{ asset('mobile/js/pwa.js') }}"></script>
<script src="{{ asset('mobile/js/vanilla-dataTables.min.js') }}"></script>
<script src="https://app.laundrymu.id/assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="https://app.laundrymu.id/assets/js/pages/sweetalerts.init.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

