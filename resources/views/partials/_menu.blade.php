<nav class="dropdown">
        <li class="menu-item drop">
            <div class="menu_img">
                <img class="ico" src="{{ Auth::user()->photoUrl }}">
            </div>
            <a href="/home">{{ Auth::user()->name }}</a>
        </li>
            <ul class="dropdown-content">
                @if(Auth::user()->isAdmin)
                    <li class="menu-item">
                        <div class="menu_img">
                        <span class="ico ico-dictionary"></span>
                        </div>
                        <a href="/words">Dictionary managment</a>
                    </li>   
                    <li class="menu-item">
                        <div class="menu_img">
                        <span class="ico ico-user"></span>
                        </div>
                        <a href="/users">User managment</a>
                    </li>   
                @else
                    <li class="menu-item">
                        <div class="menu_img">
                        <span class="ico ico-dictionary"></span>
                        </div>
                        <a href="/words">My dictionary</a>
                    </li>
                    <li class="menu-item">
                        <div class="menu_img">
                        <span class="ico ico-interest"></span>
                        </div>
                        <a href="/common-dictionary">Common dictionary</a>
                    </li>
                @endif
                <li class="menu-item">
                    <div class="menu_img">
                    <span class="ico ico-edit"></span>
                    </div>
                    <a href="/users/{{Auth::user()->id}}/edit">Edit profile</a>
                </li>
                <li class="menu-item">
                    <div class="menu_img">
                        <span class="ico ico-logout"></span>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    <button type="submit">Logout</button>
                        @csrf
                    </form>
                </li>
            </ul>
    </nav>