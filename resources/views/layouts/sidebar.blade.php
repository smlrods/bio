<ul id="sidebar" class="menu bg-base-300 shadow-md w-56 hidden h-screen md:block sticky left-0">
    <li><a class="{{ request()->is('pageinfo') ? 'active' : '' }}" href="/pageinfo">Page Information</a></li>
    <li><a class="{{ request()->is('customize') ? 'active' : '' }}" href="/customize">Customize Colors</a></li>
    <li><a class="{{ request()->is('product-photos') ? 'active' : '' }}" href="/product-photos">Product Photos</a></li>
    <li><a class="{{ request()->is('testimonials') ? 'active' : '' }}" href="/testimonials">Testimonials</a></li>
    <li><a class="{{ request()->is('links') ? 'active' : '' }}" href="/links">Page Links</a></li>
</ul>
