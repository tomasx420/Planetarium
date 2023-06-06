<!-- Main navigation container -->
<nav
    class="relative flex w-full flex-wrap items-center justify-between bg-neutral-900 py-2 text-neutral-200 shadow-lg lg:flex-wrap lg:justify-start lg:py-4"
    data-te-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        <button
            class="block border-0 bg-transparent px-2 text-neutral-200 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
            type="button"
            data-te-collapse-init
            data-te-target="#navbarSupportedContent4"
            aria-controls="navbarSupportedContent4"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span class="[&>svg]:w-7">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-7 w-7">
          <path
              fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd" />
        </svg>
      </span>
        </button>

        <!-- Collapsible navigation container -->
        <div style="width: 100%; height:10%" class="flex items-center justify-center h-screen">
        <div
            class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
            id="navbarSupportedContent4"
            data-te-collapse-item>
            <!-- Navbar title -->
            <a class="text-xl font-semibold text-white" href="/">Planetarium<a class="pr-2 text-xl font-semibold text-amber-600">.</a></a>
            <!-- Left navigation links -->
            <ul
                class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row"
                data-te-navbar-nav-ref>
                <!-- Dashboard link -->
                <li class="my-4 lg:my-0 lg:pr-2" data-te-nav-item-ref>
                    <a
                        class="text-white lg:px-2 hover:opacity-80 focus:opacity-80
                        {{ Request::route()->getName() === 'curiosity.index' ? "" : "opacity-60" }}"
                        href="/curiosity"
                        data-te-nav-link-ref
                    >Curiosity</a
                    >
                </li>
                <!-- Team link -->
                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                    <a
                        class="p-0 text-white opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                        href="#"
                        data-te-nav-link-ref
                    >Opportunity</a
                    >
                </li>
                <!-- Projects link -->
                <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                    <a
                        class="p-0 text-white opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                        href="#"
                        data-te-nav-link-ref
                    >Spirit</a
                    >
                </li>
            </ul>
        </div>

        <!-- Right elements -->
        <div class="relative flex items-center">
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">

                            <a class="nav-link text-white lg:px-2 hover:opacity-80 focus:opacity-80" href="{{ route('login') }}">
                                <button class="bg-neutral-750 hover:bg-neutral-650 text-white font-bold py-2 px-4 border-b-4 border-neutral-700 hover:border-neutral-750 rounded">{{ __('Login') }}</button>
                            </a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-neutral-700 hover:bg-neutral-800 focus:ring-4 focus:outline-none focus:ring-neutral-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-neutral-600 dark:hover:bg-neutral-700 dark:focus:ring-neutral-800" type="button">{{ Auth::user()->name }} <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit Profile</a>
                                </li>
                                <li>
                                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                    </a>
                                </li>
                            </ul>
                        </div>


                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        </div>
    </div>
    </div>
    </div>
</nav>



