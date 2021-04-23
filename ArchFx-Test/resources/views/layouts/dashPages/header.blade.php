<a class="navbar-brand" href="#"><img src="../images/fxGlobe.gif" alt="LOGO" style="width:30px; ">ArchFxGlobe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="container collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">{{ $LoggedUserInfo['firstname'] }}</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item" aria-current="page" href="{{ route('auth.logout') }}">Log Out</a>
                <a class="dropdown-item" aria-current="page" href="{{ route('auth.logout') }}">Reset Password</a>
              </ul>
            </li>
          </ul>
        </div>