@props(['works'])

<div class="swiper mySwiper">
      <div class="swiper-wrapper">
          @foreach($works as $work)
              <div class="swiper-slide">
                <x-work-card :work="$work"></x-work-card>
                  <!-- <img class="object-cover w-1/2 h-1/2" src="{{ asset($work->thumbnail) }}" alt="{{ $work->title }}" /> -->
              </div>
          @endforeach
      </div>
      <div class="swiper-button-next"></div>

      <div class="swiper-button-prev"></div>

    </div>
