@if($message = Session::get('success'))
    <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast fade hide" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
        <div class="alert custom-alert-2 alert-danger alert-dismissible fade show" role="alert"><i class="bi bi-x-circle"></i>Message not sent!
            <button class="btn btn-close btn-close-white position-relative p-1 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif

@if($message = Session::get('error'))
    <div class="toast toast-autohide custom-toast-1 toast-danger mb-2 fade hide" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="8000" data-bs-autohide="true">
        <div class="alert custom-alert-2 alert-danger alert-dismissible fade show" role="alert"><i class="bi bi-x-circle"></i>Message not sent!
            <button class="btn btn-close btn-close-white position-relative p-1 ms-auto" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
