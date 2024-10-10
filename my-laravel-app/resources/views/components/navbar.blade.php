<div>
    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
    <x-nav-link href="/add_post" :active="request()->is('add_post')">Add Post</x-nav-link>
    <x-nav-link href="/add_user" :active="request()->is('add_user')">Add User</x-nav-link>
</div>