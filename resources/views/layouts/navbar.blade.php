<div id="navbar" class="drawer sticky top-0 left-0 shadow-md">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content flex flex-col">
        <!-- Navbar -->
        <div class="w-full navbar bg-neutral">
            <div class="flex-none md:hidden">
                <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-neutral">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block w-6 h-6 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </label>
            </div>
            <div class="flex-1">
                <a href="/dashboard" class="btn btn-ghost text-xl text-neutral-content">BIO</a>
            </div>
            <div class="flex-none gap-2">
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            @if (auth()->user()->pageInfo->logo_url)
                                <img alt="User logo" src="{{ auth()->user()->pageInfo->logo_url ?? '' }}" />
                            @else
                                <div
                                    class="w-10 rounded-full h-10 bg-primary text-primary-content flex justify-center items-center">
                                    {{ auth()->user()->name[0] }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-200 rounded-box w-52">
                        <li>
                            <a href="/profile" class="justify-between">
                                Profile
                            </a>
                        </li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li>
                                <button type="submit">
                                    Log Out
                                </button>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="drawer-side z-50">
        <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu bg-base-200 w-56 h-screen flex-none overflow-x-scroll">
            <li><a class="{{ request()->is('pageinfo') ? 'active' : '' }}" href="/pageinfo">Page Information</a></li>
            <li><a class="{{ request()->is('customize') ? 'active' : '' }}" href="/customize">Customize Colors</a></li>
            <li><a class="{{ request()->is('product-photos') ? 'active' : '' }}" href="/product-photos">Product
                    Photos</a></li>
            <li><a class="{{ request()->is('testimonials') ? 'active' : '' }}" href="/testimonials">Testimonials</a>
            </li>
            <li><a class="{{ request()->is('links') ? 'active' : '' }}" href="/links">Page Links</a></li>
        </ul>
    </div>
</div>
