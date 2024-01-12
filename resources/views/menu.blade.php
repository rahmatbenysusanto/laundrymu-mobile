<nav class="fixed-bottom">
    <div id="navbar">
        <div class="row" style="padding-left: 10px; padding-right: 10px">
            <a href="{{ route('dashboard') }}" class="col d-flex justify-content-center align-items-center flex-column" style="text-decoration: none; color: black">
                <i class="fa-duotone fa-house-chimney"></i>
                <span class="navbar-text">Home</span>
            </a>
            <div class="col d-flex justify-content-center align-items-center flex-column">
                <i class="fa-light fa-washing-machine"></i>
                <span class="navbar-text">Transaksi</span>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M6.66699 15.9998H16.0003M16.0003 15.9998H25.3337M16.0003 15.9998V6.6665M16.0003 15.9998V25.3332" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center flex-column">
                <i class="fa-light fa-chart-pie-simple"></i>
                <span class="navbar-text">Laporan</span>
            </div>
            <a href="{{ route('lainnya') }}" class="col d-flex justify-content-center align-items-center flex-column" style="text-decoration: none; color: black">
                <i class="fa-light fa-square-list"></i>
                <span class="navbar-text">Lainnya</span>
            </a>
        </div>
    </div>
</nav>
