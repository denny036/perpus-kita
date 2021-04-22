<!-- protect section start -->
<div class="protect_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="protect_taital">PerpusKita</h1>
                <p class="protect_text">
                    Aplikasi yang dibuat untuk memenuhi final-project Sanbercode
                    Laravel Development. <br>Sistem Informasi Perpustakaan &mdash; PerpusKita.
                </p>
            </div>
        </div>
        <div class="protect_section_2 layout_padding">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="hands_text"><a href="#">Sistem Informasi<br>Perpustakaan</a></h1>
                    <h1 class="hands_text_2"><a href="#">Developed by <br>Kelompok 24</a></h1>
                    <h1 class="hands_text"><a href="#">Final Project<br>Sanbercode</a></h1>
                </div>
                <div class="col-md-6">
                    <div class="image_2"><img src="{{ asset('templates/images/img-launch.png') }}"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- protect section end -->


<!-- news section start -->
<div class="news_section layout_padding">
    <div class="container">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            @if(session('success'))
            <span class="alert alert-success" role="alert">
                {{ session('success') }}
            </span>
            @endif
            <div class="carousel-inner">

                @foreach ($books as $book)
                <div class="carousel-item active">
                    <h1 class="news_taital">Buku Terbaru</h1>
                    <p class="news_text">Mari membaca dengan #kita!</p>
                    <div class="news_section_2 layout_padding">
                        <div class="box_main">
                            <div class="image_1">
                                @if(session('danger'))
                                <span class="alert alert-danger" role="alert">
                                    {{ session('danger') }}
                                </span>
                                @endif
                                <img src="{{ $book->getCover() }}" style="width: 50%">
                            </div>
                            <h2 class="design_text">{{ $book->title }}</h2>
                            <p class="lorem_text">{{ Str::limit($book->description, 140) }}</p>

                            <a href="#">
                                <form action="{{ route('book.borrow', $book) }}" method="POST">
                                    @csrf
                                    <input type="submit" class="text-center read_btn btn btn-primary rounded-pill w-10 "
                                        value="Pinjam Buku">
                                </form>
                            </a>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </div>
</div>
</div>
<!-- news section end -->
<!-- update section start -->
<div class="update_section">
    <div class="container">
        <h1 class="update_taital">Get Every Update.... </h1>
        <form action="">
            <div class="form-group">
                <textarea class="update_mail" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
            </div>
            <div class="subscribe_bt"><a href="#">Subscribe Now</a></div>
        </form>
    </div>
</div>
<!-- update section end -->
