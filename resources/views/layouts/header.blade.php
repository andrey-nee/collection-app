<header class="main-header p-3">
    <div class="main-header__container container">

      <div class="logo col d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="logo__link d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="site-nav nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('welcome') }}" class="site-nav__link nav-link px-2 @linkactive('/')" data-page="welcome">Главная</a></li>
          <li><a href="{{ route('films') }}" class="site-nav__link nav-link px-2 @linkactive('films')" data-page="films">Фильмы</a></li>
        </ul>

        {{-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="user-nav text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div> --}}

      </div>
    </div>
  </header>
