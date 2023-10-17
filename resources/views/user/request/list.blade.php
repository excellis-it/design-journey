
@extends('user.layouts.master')
@section('title')
    Request - {{ env('APP_NAME') }} user
@endsection
@push('styles')
@endpush

@section('content')

<div class="main-content" style="min-height: 842px;">

    <div class="orders-deliver">
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
                              @foreach($user_requests as $request)
                            <tr>
                              <td class="table-check"><span><i class="ph ph-check"></i></span></td>
                              <td>{{ $request->request_name }}</td>
                              <td>{{ $request->SubType->name }}</td>
                              <td>{{ $request->created_at->format('F j, g:i A') }}
                              </td>
                              <td class="deliver">Request</td>
                              {{-- <td class="edit"><a><i class="ph ph-dots-three"></i></a></td> --}}
                              <td>
                                
                                <a href="{{ route('request.details',$request->id) }}" class="btn btn-sm btn-primary">View</a>

                              </td>
                            </tr>
                           @endforeach
                          </tbody>
                        </table>
                    </div>
                  </div>
            </div>

            
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                tabindex="0">
                {{-- <div class="tab-table">
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
                            @foreach($user_requests as $request)
                          <tr>
                            <td class="table-check"><span><i class="ph ph-check"></i></span></td>
                            <td>{{ $request->request_name }}</td>
                            <td>{{ $request->SubType->name }}</td>
                            <td>{{ $request->created_at->format('F j, g:i A') }}
                            </td>
                            <td class="deliver">Delivered</td>
                            <td class="edit"><a><i class="ph ph-dots-three"></i></a></td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>
                  </div>
                </div> --}}
            </div>
        </div>
        
    </div>
</div>

@endsection