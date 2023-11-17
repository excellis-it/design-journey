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
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Queue</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Delivered</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
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
                                @if($user_requests->count() == 0)
                                    <tbody>
                                        <tr>
                                            <td colspan="5" class="text-center">No request found</td>
                                        </tr>
                                    </tbody>
                                @else
                                    <tbody>
                                        @foreach ($user_requests as $request)
                                            <tr>
                                                <td class="table-check"><span><i class="ph ph-check"></i></span></td>
                                                <td>{{ $request->request_name }}</td>
                                                <td>{{ $request->SubType->name }}</td>
                                                <td>{{ $request->created_at->format('F j, g:i A') }}
                                                </td>
                                                
                                                <td class="deliver">{{ $request->status }}</td>
                                            
                                                <td class="edit text-center">
                                                    <div>
                                                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                href="{{ route('request.details', $request->id) }}">View</a>
                                                        
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endif    
                            </table>
                        </div>
                    </div>
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
                                @if($request_delivers->count() == 0)
                                    <tbody>
                                        <tr>
                                            <td colspan="5" class="text-center">No request found</td>
                                        </tr>
                                    </tbody>
                                @else
                                    <tbody>
                                        @foreach ($request_delivers as $delivery)
                                            <tr  data-route="{{ route('request.details', $request->id) }}">
                                                <td class="table-check"><span><i class="ph ph-check"></i></span></td>
                                                <td>{{ $delivery->request_name }}</td>
                                                <td>{{ $delivery->SubType->name }}</td>
                                                <td>{{ $delivery->created_at->format('F j, g:i A') }}
                                                </td>
                                                
                                                <td class="deliver">{{ $delivery->status }}</td>
                                            
                                                <td class="edit text-center" >
                                                    <div>
                                                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                href="{{ route('request.details', $request->id) }}">View</a>
                                                        
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>

                                @endif    
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection



@push('scripts')
<script>
    $(document).ready(function () {
        // Attach click event to table row
        $('tbody tr').on('click', function () {
            // Get the route from the data-route attribute
            var route = $(this).data('route');
            
            // Check if a route is specified
            if (route) {
                // Redirect to the specified route
                window.location.href = route;
            }
        });
    });
</script>
@endpush
