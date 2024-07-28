<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">DONOR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('viewStok') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Input
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('FormInputDonor') }}">Input Donor</a>
                    <a class="dropdown-item" href="{{ route('pegawai') }}">Input Petugas</a>
                    <a class="dropdown-item" href="{{ route('formRs') }}">Input RS</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Data
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('viewDataDonor') }}">Data Donor</a>
                    <a class="dropdown-item" href="{{ route('viewPegawai') }}">Data Petugas</a>
                    <a class="dropdown-item" href="{{ route('viewRs') }}">Data RS</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
