<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                {{--  <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">  --}}
            </a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('user.index') ? 'active' : '' }}" href="{{ route("user.index") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fa-solid fa-users"></i>
                        </span>
                        <span class="nav-link-title">
                            Users
                        </span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('resume.index') ? 'active' : '' }}" href="{{ route("resume.index") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-business-time"></i>
                        </span>
                        <span class="nav-link-title">
                            resumes
                        </span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('country.index') ? 'active' : '' }}" href="{{ route("country.index") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-flag-usa"></i>
                        </span>
                        <span class="nav-link-title">
                            countries
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('transaction.index') ? 'active' : '' }}" href="{{ route("transaction.index") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-money-check-alt"></i>
                        </span>
                        <span class="nav-link-title">
                            transaction
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('acat.index') ? 'active' : '' }}" href="{{ route("acat.index") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-money-check-alt"></i>
                        </span>
                        <span class="nav-link-title">
                            Blog category
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('comment.index') ? 'active' : '' }}" href="{{ route("comment.index") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-money-check-alt"></i>
                        </span>
                        <span class="nav-link-title">
                            Comments
                        </span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('write.index') ? 'active' : '' }}" href="{{ route("write.index") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-newspaper"></i>
                        </span>
                        <span class="nav-link-title">
                            write
                        </span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('language.index') ? 'active' : '' }}" href="{{ route("language.index") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-globe-asia"></i>
                        </span>
                        <span class="nav-link-title">
                            language
                        </span>
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('short.index') ? 'active' : '' }}" href="{{ route("short.index") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-language"></i>
                        </span>
                        <span class="nav-link-title">
                            Sentences
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('ticket.index') ? 'active' : '' }}" href="{{ route("ticket.index") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-language"></i>
                        </span>
                        <span class="nav-link-title">
                            tickets
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('setting.site') ? 'active' : '' }}" href="{{ route("setting.site") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-users-cog"></i>
                        </span>
                        <span class="nav-link-title">
                            Setting
                        </span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::url() == route('logoute') ? 'active' : '' }}" href="{{ route("logoute") }}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <span class="nav-link-title">
                            Log Out
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
