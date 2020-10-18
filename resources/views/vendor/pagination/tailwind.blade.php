@if ($paginator->hasPages())

<div class="row">
    <div class="col-xl-12">
        <div
            class="project-single-prev-next-button wow slideInUp"
            data-wow-delay="00ms"
            data-wow-duration="1500ms"
          >
          <div class="button">
            
            @if ($paginator->onFirstPage())
                <a class="prev" href="#"
              > {!! __('pagination.previous') !!}</a
            >
            <a class="middle" href="#">
                <img
                  src="{{asset('images/icon/prev-next-button-icon.png')}}"
                  alt="Button Icon"
                />
              </a>
            @else
                
                <a class="prev" href="{{ $paginator->previousPageUrl() }}"
                > {!! __('pagination.previous') !!}</a
              >
              <a class="middle" href="#">
                <img
                  src="{{asset('images/icon/prev-next-button-icon.png')}}"
                  alt="Button Icon"
                />
              </a>
            @endif

            @if ($paginator->hasMorePages())
                
                <a class="next" href="{{ $paginator->nextPageUrl() }}"
                >{!! __('pagination.next') !!}</a>
            @else
               
                <a class="next" href="#"
                    >{!! __('pagination.next') !!}</a>
            @endif
        </div>




          
            
              
            
            </div>
          </div>
        </div>
@endif
