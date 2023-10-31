<div class="row">
    @if (count($icons))
        @foreach ($icons as $icon)
            <div class="col-lg-3">
                <div class="fre_icons">
                    <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span><img src="{{ Storage::url($icon['images']) }}" alt="" /></span>
                        <a href="javascript:void(0)" class="click-btn text-center">{{ $icon['image_name'] }}</a>
                        <div class="download_icon">
                            <a href="{{route('download.icon', $icon['id'])}}"> <img src="{{ asset('frontend_assets/assets/images/download.png') }}"
                                    alt="" /><a>
                        </div>
                    </a>

                </div>
            </div>
        @endforeach

    @else
        <div class="col-lg-12">
            <div class="alert alert-danger">No Icon Found</div>
        </div>
    @endif

</div>
