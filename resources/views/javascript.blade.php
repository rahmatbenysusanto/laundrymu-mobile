<script src="{{ asset('mobile/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('mobile/js/slideToggle.min.js') }}"></script>
<script src="{{ asset('mobile/js/internet-status.js') }}"></script>
<script src="{{ asset('mobile/js/tiny-slider.js') }}"></script>
<script src="{{ asset('mobile/js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('mobile/js/rangeslider.min.js') }}"></script>
<script src="{{ asset('mobile/js/index.js') }}"></script>
<script src="{{ asset('mobile/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('mobile/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('mobile/js/dark-rtl.js') }}"></script>
<script src="{{ asset('mobile/js/active.js') }}"></script>
<script src="{{ asset('mobile/js/pwa.js') }}"></script>
<script src="https://app.laundrymu.id/assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="https://app.laundrymu.id/assets/js/pages/sweetalerts.init.js"></script>
<script src="{{ asset('mobile/js/jquery.js') }}"></script>

@if($alert = Session::get('success'))
    <script>
        Swal.fire({
            text: "{{ $alert }}",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    </script>
@endif

@if($alert = Session::get('error'))
    <script>
        Swal.fire({
            text: "{{ $alert }}",
            icon: "error",
            buttonsStyling: false,
            confirmButtonText: "Ok",
            customClass: {
                confirmButton: "btn btn-primary"
            }
        });
    </script>
@endif
