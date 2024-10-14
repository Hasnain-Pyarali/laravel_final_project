<nav class="navbar navbar-expand-lg navbar-light bg-light bg-primary" style="border-bottom: 2px solid #007BFF;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/the_bloggers.png" alt="The Bloggers Logo" style="height: 60px; width: 150px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <x-nav-link href="/home" active="{{ request()->is('/home') }}">Home</x-nav-link>
          </li>
          <li class="nav-item">
            <x-nav-link href="/contact" active="{{ request()->is('contact') }}">Contact</x-nav-link>
          </li>
          <li class="nav-item">
            <x-nav-link href="/posts" active="{{ request()->is('posts') }}">Blog</x-nav-link>
          </li>
          <li class="nav-item">
            <x-nav-link href="/add_post" active="{{ request()->is('add_post') }}">Add Post</x-nav-link>
          </li>
          <li class="nav-item">
            <x-nav-link href="/add_user" active="{{ request()->is('add_user') }}">Add User</x-nav-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>