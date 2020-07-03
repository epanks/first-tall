<div class="bg-teal-500" x-data="{ open: false }">
    <div class="flex justify-between flex-col md:flex-row items-center">
        <div class="flex justify-between w-full md:w-auto px-4 py-4 bg-teal-500 md:bg-transparent md:border-b-0">
            <div>
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                    </svg>
                    <a href="/" class="font-semibold text-lg tracking-tight">
                        {{ config('app.name') }}
                    </a>
                </div>
            </div>
            <div class="block md:hidden">
                <button @click="open=!open" class="text-white focus:outline-none">
                    <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="open" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div x-bind:class="{ 'hidden':!open }"
            class="leading-loose py-1 md:py-0 md:flex md:items-center justify-between w-full">

            <div class="flex flex-col md:flex-row md:items-center py-2 md:py-0">
                @auth
                <a href="#" class="block text-teal-200 hover:text-white px-4 md:py-4">Progres</a>
                <a href="#" class="block text-teal-200 hover:text-white px-4 md:py-4">Program</a>
                <a href="{{ route('paket-list') }}" class="block text-teal-200 hover:text-white px-4 md:py-4">Paket</a>
                @endauth
            </div>
            <div class="flex flex-col md:flex-row md:items-center">
                @auth
                <div x-data="{ dropdownIsOpen:false }" class="py-4 md:py-0">
                    <div>
                        <button @click="dropdownIsOpen = !dropdownIsOpen"
                            class="flex items-center focus:outline-none px-4 md:px-0">
                            <div class="flex-shrink-0 mr-2">
                                <img class="w-8 h-8 rounded object-center object-cover"
                                    src="{{ auth()->user()->gravatar() }}">
                            </div>
                            <div class="block text-teal-200 hover:text-white pr-4 md:py-4">
                                {{ auth()->user()->name }}
                            </div>
                        </button>
                    </div>
                    <div :class="{ 'md:hidden': !dropdownIsOpen }"
                        class="md:absolute top-0 right-0 md:mr-4 mt-2 md:mt-15 md:bg-cool-gray-700 md:w-56 md:rounded md:shadow md:py-2 leading-relaxed md:leading-loose">
                        <a href="{{ route('settings') }}" class="block text-teal-200 hover:text-white px-4">Settings</a>
                        <a href="{{ route('account.show',auth()->user()->usernameOrHash) }}"
                            class="block text-teal-200 hover:text-white px-4">Profile</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block text-teal-200 hover:text-white px-4">
                            Log out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}" class="block text-teal-200 hover:text-white px-4 md:py-4">Log
                    in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="block text-teal-200 hover:text-white px-4 md:py-4">Register</a>
                @endif
                @endauth
            </div>
        </div>
    </div>
</div>