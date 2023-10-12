@extends('admin.layouts.master')
@section('title')
    Solution Edit - {{ env('APP_NAME') }}
@endsection
@push('styles')
@endpush

@section('content')
    <section class="section_breadcrumb d-block d-sm-flex justify-content-between">
        <div class="">
            <h4 class="page-title m-b-0">Edit Solution</h4>
            <!-- <h5 class="page">Hello Evano 👋🏼,</h5> -->
        </div>
        <div class="">
            <ul class="breadcrumb breadcrumb-style">
                <li class="breadcrumb-item">
                    Home
                </li>
                <li class=""> >> Solution</li>
            </ul>
        </div>
    </section>

    <div class="main-content">
        <div class="inner_page">
            <div class="card-title">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <h4 class="mb-0">Edit</h4>
                    </div>
                </div>
            </div>
            <div class="card search_bar sales-report-card">
                <div class="sales-report-card-wrap">
                    <div class="form-head">
                        <h4>Solution Information</h4>
                    </div>
                    <form action="{{ route('solution.design.update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $solution->id }}">
                        <label for="inputEnterYourName" class="col-form-label"><h4>SHORT-TERM COSTS:</h4></label>   
                        <hr> 

                        <div class="row justify-content-between">
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Freelancer*</label>
                                        <select name="short_freelancer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->short_freelancer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->short_freelancer == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->short_freelancer == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->short_freelancer == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->short_freelancer == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->short_freelancer == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->short_freelancer == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->short_freelancer == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->short_freelancer == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->short_freelancer == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('short_freelancer'))
                                            <div class="error" style="color:red;">{{ $errors->first('short_freelancer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> In-house Designers*</label>
                                        <select name="short_inhouse_designer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->short_inhouse_designer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->short_inhouse_designer == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->short_inhouse_designer == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->short_inhouse_designer == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->short_inhouse_designer == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->short_inhouse_designer == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->short_inhouse_designer == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->short_inhouse_designer == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->short_inhouse_designer == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->short_inhouse_designer == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('short_inhouse_designer'))
                                            <div class="error" style="color:red;">{{ $errors->first('short_inhouse_designer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Design Journey*</label>
                                        <select name="short_design_journey" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->short_design_journey == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->short_design_journey == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->short_design_journey == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->short_design_journey == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->short_design_journey == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->short_design_journey == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->short_design_journey == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->short_design_journey == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->short_design_journey == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->short_design_journey == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('short_design_journey'))
                                            <div class="error" style="color:red;">{{ $errors->first('short_design_journey') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label"><h4>LONG-TERM COSTS:</h4></label>   
                        <hr> 
                        <div class="row justify-content-between">
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Freelancer*</label>
                                        <select name="long_freelancer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->long_freelancer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->long_freelancer == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->long_freelancer == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->long_freelancer == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->long_freelancer == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->long_freelancer == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->long_freelancer == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->long_freelancer == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->long_freelancer == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->long_freelancer == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('long_freelancer'))
                                            <div class="error" style="color:red;">{{ $errors->first('long_freelancer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> In-house Designers*</label>
                                        <select name="long_inhouse_designer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->long_inhouse_designer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->long_inhouse_designer == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->long_inhouse_designer == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->long_inhouse_designer == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->long_inhouse_designer == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->long_inhouse_designer == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->long_inhouse_designer == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->long_inhouse_designer == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->long_inhouse_designer == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->long_inhouse_designer == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('long_inhouse_designer'))
                                            <div class="error" style="color:red;">{{ $errors->first('long_inhouse_designer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Design Journey*</label>
                                        <select name="long_design_journey" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->long_design_journey == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->long_design_journey == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->long_design_journey == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->long_design_journey == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->long_design_journey == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->long_design_journey == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->long_design_journey == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->long_design_journey == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->long_design_journey == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->long_design_journey == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('long_design_journey'))
                                            <div class="error" style="color:red;">{{ $errors->first('long_design_journey') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label"><h4>FLAT RATES:</h4></label>   
                        <hr> 
                        <div class="row justify-content-between">
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Freelancer*</label>
                                        <select name="flat_rate_freelancer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->flat_rate_freelancer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->flat_rate_freelancer == 0 ? 'selected' : '' }}>No</option>
                                           
                                        </select>
                                        @if ($errors->has('flat_rate_freelancer'))
                                            <div class="error" style="color:red;">{{ $errors->first('flat_rate_freelancer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> In-house Designers*</label>
                                        <select name="flat_rate_inhouse_designer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->flat_rate_inhouse_designer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->flat_rate_inhouse_designer == 0 ? 'selected' : '' }}>No</option>
                                            
                                        </select>
                                        @if ($errors->has('flat_rate_inhouse_designer'))
                                            <div class="error" style="color:red;">{{ $errors->first('flat_rate_inhouse_designer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Design Journey*</label>
                                        <select name="flat_rate_design_journey" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->flat_rate_design_journey == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->flat_rate_design_journey == 0 ? 'selected' : '' }}>No</option>
                                            
                                        </select>
                                        @if ($errors->has('flat_rate_design_journey'))
                                            <div class="error" style="color:red;">{{ $errors->first('flat_rate_design_journey') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label"><h4>HIRING & ADMIN:</h4></label>   
                        <hr> 
                        <div class="row justify-content-between">
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Freelancer*</label>
                                        <select name="hiring_freelancer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->hiring_freelancer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->hiring_freelancer == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->hiring_freelancer == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->hiring_freelancer == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->hiring_freelancer == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->hiring_freelancer == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->hiring_freelancer == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->hiring_freelancer == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->hiring_freelancer == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->hiring_freelancer == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('hiring_freelancer'))
                                            <div class="error" style="color:red;">{{ $errors->first('hiring_freelancer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> In-house Designers*</label>
                                        <select name="hiring_inhouse_designer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->hiring_inhouse_designer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->hiring_inhouse_designer == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->hiring_inhouse_designer == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->hiring_inhouse_designer == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->hiring_inhouse_designer == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->hiring_inhouse_designer == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->hiring_inhouse_designer == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->hiring_inhouse_designer == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->hiring_inhouse_designer == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->hiring_inhouse_designer == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('hiring_inhouse_designer'))
                                            <div class="error" style="color:red;">{{ $errors->first('hiring_inhouse_designer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Design Journey*</label>
                                        <select name="hiring_design_journey" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->hiring_design_journey == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->hiring_design_journey == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->hiring_design_journey == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->hiring_design_journey == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->hiring_design_journey == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->hiring_design_journey == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->hiring_design_journey == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->hiring_design_journey == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->hiring_design_journey == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->hiring_design_journey == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('hiring_design_journey'))
                                            <div class="error" style="color:red;">{{ $errors->first('hiring_design_journey') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label"><h4>VERSTATILE SKILLS:</h4></label>   
                        <hr> 
                        <div class="row justify-content-between">
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Freelancer*</label>
                                        <select name="verstatile_freelancer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->verstatile_freelancer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->verstatile_freelancer == 0 ? 'selected' : '' }}>No</option>
                                            
                                        </select>
                                        @if ($errors->has('verstatile_freelancer'))
                                            <div class="error" style="color:red;">{{ $errors->first('verstatile_freelancer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> In-house Designers*</label>
                                        <select name="verstatile_inhouse_designer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->verstatile_inhouse_designer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->verstatile_inhouse_designer == 0 ? 'selected' : '' }}>No</option>
                                            
                                        </select>
                                        @if ($errors->has('verstatile_inhouse_designer'))
                                            <div class="error" style="color:red;">{{ $errors->first('verstatile_inhouse_designer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Design Journey*</label>
                                        <select name="verstatile_design_journey" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->verstatile_design_journey == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->verstatile_design_journey == 0 ? 'selected' : '' }}>No</option>
                                            
                                        </select>
                                        @if ($errors->has('verstatile_design_journey'))
                                            <div class="error" style="color:red;">{{ $errors->first('verstatile_design_journey') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label"><h4>TURNAROUND TIME:</h4></label>   
                        <hr> 
                        <div class="row justify-content-between">
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Freelancer*</label>
                                        <select name="turnaround_freelancer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->turnaround_freelancer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->turnaround_freelancer == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->turnaround_freelancer == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->turnaround_freelancer == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->turnaround_freelancer == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->turnaround_freelancer == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->turnaround_freelancer == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->turnaround_freelancer == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->turnaround_freelancer == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->turnaround_freelancer == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('turnaround_freelancer'))
                                            <div class="error" style="color:red;">{{ $errors->first('turnaround_freelancer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> In-house Designers*</label>
                                        <select name="turnaround_inhouse_designer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->turnaround_inhouse_designer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->turnaround_inhouse_designer == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->turnaround_inhouse_designer == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->turnaround_inhouse_designer == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->turnaround_inhouse_designer == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->turnaround_inhouse_designer == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->turnaround_inhouse_designer == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->turnaround_inhouse_designer == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->turnaround_inhouse_designer == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->turnaround_inhouse_designer == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('turnaround_inhouse_designer'))
                                            <div class="error" style="color:red;">{{ $errors->first('turnaround_inhouse_designer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Design Journey*</label>
                                        <select name="turnaround_design_journey" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->turnaround_design_journey == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->turnaround_design_journey == 0 ? 'selected' : '' }}>No</option>
                                            <option value="Affordable" {{ $solution->turnaround_design_journey == 'Affordable' ? 'selected' : '' }}>Affordable</option>
                                            <option value="Expensive" {{ $solution->turnaround_design_journey == 'Expensive' ? 'selected' : '' }}>Expensive</option>
                                            <option value="Very Expensive" {{ $solution->turnaround_design_journey == 'Very Expensive' ? 'selected' : '' }}>Very Expensive</option>
                                            <option value="Difficult" {{ $solution->turnaround_design_journey == 'Difficult' ? 'selected' : '' }}>Difficult</option>
                                            <option value="Very Easy" {{ $solution->turnaround_design_journey == 'Very Easy' ? 'selected' : '' }}>Very Easy</option>
                                            <option value="Slow" {{ $solution->turnaround_design_journey == 'Slow' ? 'selected' : '' }}>Slow</option>
                                            <option value="Quick" {{ $solution->turnaround_design_journey == 'Quick' ? 'selected' : '' }}>Quick</option>
                                            <option value="1-2 Business Days" {{ $solution->turnaround_design_journey == '1-2 Business Days' ? 'selected' : '' }}>1-2 Business Days</option>
                                        </select>
                                        @if ($errors->has('turnaround_design_journey'))
                                            <div class="error" style="color:red;">{{ $errors->first('turnaround_design_journey') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <label for="inputEnterYourName" class="col-form-label"><h4>FLEXIBLE & SCALABLE:</h4></label>   
                        <hr> 
                        <div class="row justify-content-between">
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Freelancer*</label>
                                        <select name="flexible_freelancer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->flexible_freelancer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->flexible_freelancer == 0 ? 'selected' : '' }}>No</option>
                                            
                                        </select>
                                        @if ($errors->has('flexible_freelancer'))
                                            <div class="error" style="color:red;">{{ $errors->first('flexible_freelancer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> In-house Designers*</label>
                                        <select name="flexible_inhouse_designer" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->flexible_inhouse_designer == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->flexible_inhouse_designer == 0 ? 'selected' : '' }}>No</option>
                                            
                                        </select>
                                        @if ($errors->has('flexible_inhouse_designer'))
                                            <div class="error" style="color:red;">{{ $errors->first('flexible_inhouse_designer') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-md-4">
                                <div class="form-group-div">
                                    <div class="form-group">
                                        <label for="floatingInputValue"> Design Journey*</label>
                                        <select name="flexible_design_journey" class="form-select" aria-label="Default select example">
                                            <option value="1" {{ $solution->flexible_design_journey == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $solution->flexible_design_journey == 0 ? 'selected' : '' }}>No</option>
                                            
                                        </select>
                                        @if ($errors->has('flexible_design_journey'))
                                            <div class="error" style="color:red;">{{ $errors->first('flexible_design_journey') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <div class="row justify-content-between">
                    <div class="col-xl-12">
                        <div class="btn-1">
                            <button type="submit">Update</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush
