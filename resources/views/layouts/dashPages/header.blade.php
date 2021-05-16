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
                <a class="dropdown-item" aria-current="page" href="{{ route('auth.resetpassword') }}">Reset Password</a>
              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav flex-column">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample" aria-current="page" href="#">Forex - Beginners   +</a>
                <div class="collapse" id="collapseExample1">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}" onclick="return show('Page2','Page1');">
                      Definition
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page2') }}" onclick="return show('Page3',value);">
                      Major Currencies
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page3') }}" onclick="return show('Page3',value);">
                      Currency pairs
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page4') }}" onclick="return show('Page3',value);">
                      Forex Terminologies
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page5') }}" onclick="return show('Page3',value);">
                      Forex Order Types
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page6') }}" onclick="return show('Page3',value);">
                      Forex Trading Time (or Session)
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page7') }}" onclick="return show('Page3',value);">
                      Forex Participants
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page8') }}" onclick="return show('Page3',value);">
                      Account Metrics and Meanings
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page9') }}" onclick="return show('Page3',value);">
                      Brokers
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page10') }}" onclick="return show('Page3',value);">
                      Factors: Broker Selection
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page11') }}" onclick="return show('Page3',value);">
                      Open Forex Trading Account: How?
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page12') }}" onclick="return show('Page3',value);">
                      Market Analysis
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page13') }}" onclick="return show('Page3',value);">
                      Video Recap
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page14') }}" onclick="return show('Page3',value);">
                      Remarks
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav flex-column">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample" aria-current="page" href="#" onclick="return show('Page1','Page2');">Forex - Intermediate   +</a>
                <div class="collapse" id="collapseExample2">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page15') }}">
                      Support and Resistance
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page16') }}" onclick="return show('Page3',value);">
                      Trend and Trend channels
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page17') }}" onclick="return show('Page3',value);">
                      Candlestick pattern
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page18') }}" onclick="return show('Page3',value);">
                      Chart Indicators
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page19') }}" onclick="return show('Page3',value);">
                      Chart Patterns
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page20') }}" onclick="return show('Page3',value);">
                      Divergence
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page21') }}" onclick="return show('Page3',value);">
                      Fundamental Analysis
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page22') }}" onclick="return show('Page3',value);">
                      Sentimental Analysis
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav flex-column">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample" aria-current="page" href="#" onclick="return show('Page1','Page2');">Forex - Advanced   +</a>
                <div class="collapse" id="collapseExample3">
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page23') }}">
                      Correlation
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('page24') }}" onclick="return show('Page3',value);">
                      Risk management
                    </a>
                  </li>
                </div>
              </ul>
            </li>
            <li class="nav-item">
              <ul class="nav flex-column">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample" aria-current="page" href="#" onclick="return show('Page1','Page2');">Our strategy   +</a>
                <div class="collapse" id="collapseExample4">
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      Disclaimer
                    </a>
                  </li><li class="nav-item">
                    <a class="nav-link" href="#" onclick="return show('Page3',value);">
                      Our Strategy
                    </a>
                  </li>
                </div>
              </ul>
            </li>
          </ul>
        </div>