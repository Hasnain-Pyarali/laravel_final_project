<x-layout>
    @slot('title'){{$title}}@endslot
    <div class="row">
      <!-- First card -->
      <div class="col-md-6" style="margin-top: 50px;">
        <div class="card shadow-sm mb-4" style="border-radius: 10px;">
          <img src="img/kylian.jpg" style="width: 200px; height: 200px; border-radius: 50%; margin: 0 auto; margin-top: -50px; border: 4px solid black;" alt="Another Contact">
          <div class="card-body" style="margin-top: 20px;">
            <h2 class="card-title" style="text-align: center; font-style: bold">Contact 1</h2>
            <div style="margin-left: 25%">
                <p class="card-text"><strong>Name:</strong> Kylian Taguelmint</p>
                <p class="card-text"><strong>Email:</strong> <a href="mailto:contact@example.com">kyliankylian2@gmail.com</a></p>
                <p class="card-text"><strong>Instagram:</strong> <a href="https://www.instagram.com/kylian.tglmnt" target="_blank">@kylian.tglmnt</a></p>
                <p class="card-text"><strong>Twitter:</strong> <a href="https://www.twitter.com/elonmusk" target="_blank">@elonmusk</a></p>
            </div>
            <div style="text-align: center">
                <a href="mailto:contact@example.com" class="btn btn-primary" style="text-align: center">Contact Me</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Second card -->
      <div class="col-md-6" style="margin-top: 50px;">
        <div class="card shadow-sm mb-4" style="border-radius: 10px;">
          <img src="https://media.licdn.com/dms/image/v2/D4E03AQGZjXLckVoq9w/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1707044923945?e=1734566400&v=beta&t=uUVJ9TEOI94BgqZAwFwZvU1qkHnMJy3eXQYdox0esqU" class="card-img-top" style="width: 200px; border-radius: 50%; margin: 0 auto; margin-top: -50px; border: 4px solid black; object-fit: cover" alt="Another Contact">
          <div class="card-body" style="margin-top: 20px;">
            <h2 class="card-title" style="text-align: center; font-style: bold">Contact 2</h2>
            <div style="margin-left: 25%">
                <p class="card-text"><strong>Name:</strong> Hasnain Pyarali</p>
                <p class="card-text"><strong>Email:</strong> <a href="mailto:contact@example.com">hasnain.pyarali@epitech.eu</a></p>
                <p class="card-text"><strong>Instagram:</strong> <a href="https://www.instagram.com/hasnain_p786" target="_blank">@hasnain_p786</a></p>
                <p class="card-text"><strong>Twitter:</strong> <a href="https://www.twitter.com/elonmusk" target="_blank">@elonmusk</a></p>
            </div>
            <div style="text-align: center">
                <a href="mailto:contact@example.com" class="btn btn-primary" style="text-align: center">Contact Me</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-layout>
