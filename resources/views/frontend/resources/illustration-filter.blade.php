<div class="row">
    @if (count($illustrations))
        @foreach ($illustrations as $illustration)
            <div class="col-lg-3">
                <div class="fre_icons">
                    <a href="javascript:void(0)" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <span><img src="{{ Storage::url($illustration['images']) }}" alt="" /></span>
                        <a href="javascript:void(0)" class="click-btn text-center">{{ $illustration['imgage_name'] }}</a>
                        <div class="download_icon">
                            <a href="{{route('download.illustration', $illustration['id'])}}"> <img src="{{ asset('frontend_assets/assets/images/download.png') }}"
                                    alt="" /><a>
                        </div>
                    </a>

                </div>
            </div>
        @endforeach

    @else
        <div class="col-lg-12">
            <div class="alert alert-danger">No Illustration Found</div>
        </div>
    @endif

</div>
