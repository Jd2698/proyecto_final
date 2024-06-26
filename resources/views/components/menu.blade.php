<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mb-4 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ env('APP_NAME') }}</a>

        {{-- Haburguesa --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                Log in
                            </a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <div id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ Auth::user()->file->route }}" alt=""
                                style="height: 30px; width: 30px; object-fit:cover; border-radius: 50%; ">
                            <span>
                                {{ Auth::user()->name }}
                            </span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @role('admin')
                                <a class="dropdown-item" href="{{ route('users.index') }}">
                                    Users
                                </a>

                                <a class="dropdown-item" href="{{ route('products.index') }}">
                                    Products
                                </a>

                                <a class="dropdown-item" href=" {{ route('categories.index') }}">
                                    Categories
                                </a>
                            @endrole
                            <a class="dropdown-item" href="{{ route('products.cart') }}">
                                Cart
                                {{-- <i class="fas fa-shopping-cart"></i> --}}
                            </a>

                            {{-- Logout --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
