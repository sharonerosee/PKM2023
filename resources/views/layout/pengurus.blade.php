
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Pengurus</h1>
        </div>
        <div class="row g-4">
            @if(isset($pengurus))
            @foreach($pengurus as $penguru)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded-circle w-75" src="{{ $penguru->photos }}" alt="">
                        <div class="team-text text-center">
                            <h3>{{ $penguru->name }}</h3> <!-- Fix the typo here -->
                            <p>{{ $penguru->position }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif

        </div>
    </div>
</div>