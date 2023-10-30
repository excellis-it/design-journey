
@extends('user.layouts.master')
@section('title')
    Dashboard - {{ env('APP_NAME') }} user
@endsection
@push('styles')
@endpush

@section('content')

<div class="main-content" style="min-height: 842px;">
  <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
    <div class="">
        <h4 class="page-title m-b-0">Dashboard</h4>
        <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
    </div>
    <div class="">
        <ul class="breadcrumb breadcrumb-style">
            <li class="breadcrumb-item">
                Home
            </li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ul>
    </div>
</section>

    {{-- <div class="orders-deliver">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                    aria-selected="true">Queue</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                    aria-selected="false">Delivered</button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                aria-labelledby="nav-home-tab" tabindex="0">
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                tabindex="0">
                <div class="tab-table">
                  <div class="table-responsive">
                    <table class="table rowNumbers">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col">Request name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Last Upadate</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="table-check"><span><i class="ph ph-check"></i></span></td>
                            <td>Panda's Love Logo</td>
                            <td>Logos</td>
                            <td>09 Oct, 17:00</td>
                            <td class="deliver">Delivered</td>
                            <td class="edit"><a><i class="ph ph-dots-three"></i></a></td>
                          </tr>
                          <tr>
                            <td class="table-check"><span><i class="ph ph-check"></i></span></td>
                            <td>Panda's Love Logo</td>
                            <td>Logos</td>
                            <td>09 Oct, 17:00</td>
                            <td class="deliver">Delivered</td>
                            <td class="edit"><a><i class="ph ph-dots-three"></i></a></td>
                          </tr>
                          <tr>
                            <td class="table-check"><span><i class="ph ph-check"></i></span></td>
                            <td>Panda's Love Logo</td>
                            <td>Logos</td>
                            <td>09 Oct, 17:00</td>
                            <td class="deliver">Delivered</td>
                            <td class="edit"><a><i class="ph ph-dots-three"></i></a></td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>

@endsection