@extends('user.layouts.master')
@section('title')
    {{ env('APP_NAME') }} | Create Invoice
@endsection
<!--<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">-->
   
@push('styles')
<style>
    .kbw-signature { width: 100%; height: 100px;}
    #sig canvas{ width: 100% !important; height: auto;}
</style>

@endpush

@section('content')
    <div class="page-wrapper">

        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Create</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('invoice.index') }}">Invoice</a></li>
                            <li class="breadcrumb-item active">Create Invoice</li>
                        </ul>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="{{ route('invoice.index') }}"><button type="button" class="btn btn-dark">
                            < Back</button></a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-xl-12 mx-auto">
                                <h6 class="mb-0 text-uppercase">Create A Invoice</h6>
                                <hr>
                                <div class="card border-0 border-4">
                                    <div class="card-body">
                                        <form action="{{ route('invoice.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="border p-4 rounded">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">From</label>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Bill
                                                            To</label>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Name <span
                                                                style="color: red;">*</span></label>
                                                        <input type="text" name="from_name" id=""
                                                            class="form-control" value="{{ Auth::user()->name }}"
                                                            placeholder="Enter Name">
                                                        @if ($errors->has('from_name'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('from_name') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Name <span
                                                                style="color: red;">*</span></label>
                                                        <input type="text" name="bil_to_name" class="form-control"
                                                            value="{{ old('bil_to_name') }}" placeholder="Enter Name">
                                                        @if ($errors->has('bil_to_name'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('bil_to_name') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Email <span
                                                                style="color: red;">*</span></label>
                                                        <input type="text" name="from_email" class="form-control"
                                                            value="{{ Auth::user()->email }}" placeholder="Enter Email">
                                                        @if ($errors->has('from_email'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('from_email') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Email <span
                                                                style="color: red;">*</span></label>
                                                        <input type="text" name="bil_to_email" id=""
                                                            class="form-control" value="{{ old('bil_to_email') }}"
                                                            placeholder="Enter Email">
                                                        @if ($errors->has('bil_to_email'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('bil_to_email') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Address<span
                                                                style="color: red;">*</span></label>
                                                        <textarea name="from_address" id="" class="form-control" value="{{ old('from_address') }}"></textarea>
                                                        @if ($errors->has('from_address'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('from_address') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label">Address<span
                                                                style="color: red;">*</span></label>
                                                        <textarea name="bil_to_address" id="" class="form-control" value="{{ old('bil_to_address') }}"></textarea>
                                                        @if ($errors->has('bil_to_address'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('bil_to_address') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Phone <span
                                                                style="color: red;">*</span></label>
                                                        <input type="text" name="from_phone" id=""
                                                            class="form-control" value="{{ Auth::user()->phone }}"
                                                            placeholder="Enter Phone">
                                                        @if ($errors->has('from_phone'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('from_phone') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Phone
                                                            <span style="color: red;">*</span></label>
                                                        <input type="text" name="bil_to_phone" id=""
                                                            class="form-control" value="{{ old('bil_to_phone') }}"
                                                            placeholder="Enter Phone">
                                                        @if ($errors->has('bil_to_phone'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('bil_to_phone') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Gst <span
                                                                style="color: red;">*</span></label>
                                                        <input type="text" name="gst" id=""
                                                            class="form-control" value="{{ old('gst') }}"
                                                            placeholder="Enter Gst">
                                                        @if ($errors->has('gst'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('gst') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Mobile
                                                            <span style="color: red;">*</span></label>
                                                        <input type="text" name="bil_to_mobile" id=""
                                                            class="form-control" value="{{ old('bil_to_mobile') }}"
                                                            placeholder="Enter Mobile">
                                                        @if ($errors->has('bil_to_mobile'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('bil_to_mobile') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Tax (%)</label>
                                                        <input type="text" name="tax" 
                                                            class="form-control" value="{{ old('tax') }}"
                                                            placeholder="Enter tax" >
                                                        @if ($errors->has('tax'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('tax') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Fax </label>
                                                        <input type="text" name="bil_to_faxNo" id=""
                                                            class="form-control" value="{{ old('bil_to_faxNo') }}"
                                                            placeholder="Enter Fax">
                                                        @if ($errors->has('bil_to_faxNo'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('bil_to_faxNo') }}</div>
                                                        @endif
                                                    </div>


                                                    <div class="col-md-12">
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="inputEnterYourName" class="col-form-label"> Terms
                                                            <span style="color: red;">*</span></label>
                                                        <input type="text" name="terms" id=""
                                                            class="form-control" value="{{ old('terms') }}"
                                                            placeholder="Enter terms">
                                                        @if ($errors->has('terms'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('terms') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-12">
                                                        <hr>
                                                    </div>

                                                    
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Item
                                                            Description <span style="color: red;">*</span></label>
                                                        <input type="text" name="item_description[]" 
                                                            class="form-control" 
                                                            placeholder="Enter Description">
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Additional
                                                            Details <span style="color: red;">*</span></label>
                                                        <input type="text" name="additional_details[]" id=""
                                                            class="form-control" 
                                                            placeholder="Enter Additional Details">
                                                        
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="inputEnterYourName" class="col-form-label"> Rate <span
                                                                style="color: red;">*</span></label>
                                                        <input type="text" name="rate[]" 
                                                            class="form-control" 
                                                            placeholder="Enter Rate" id="rate_1" oninput="rating(1)">
                                                        
                                                    </div>
                                                    <div class="col-md-3" >
                                                        <label for="inputEnterYourName" class="col-form-label"> Quantity
                                                            <span style="color: red;">*</span></label>
                                                        <input type="text" name="quantity[]" id="quan_1"
                                                            class="form-control" 
                                                            placeholder="Enter Quantity" oninput="quant(1)" >
                                                        
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="inputEnterYourName" class="col-form-label">
                                                            Amount</label>

                                                        <input type="text" name="amount[]" id="amount_1"
                                                            style="border:none;border-bottom: 2px solid rgb(223, 123, 10);" readonly>
                                                    </div>
                                                    </div>
                                                       

                                                    <div class="add-item">
                                                    </div>
                

                                                    <div class="col-sm-9" style="margin-top: 10px;">
                                                        <a class="btn submit-btn" id="add">Add Item</a>
                                                    </div>

                                                    <div class="col-md-8">
                                                        
                                                    </div>
                                                    <!-- <div class="col-md-4">-->
                                                    <!--    <td> Total Amount($): <input id="total_amount" name="total" value="00"></td>-->
                                                            
                                                    <!--</div> -->

                                                    <div class="col-md-12">
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label for="inputEnterYourName" class="col-form-label"> Notes
                                                            <span style="color: red;">*</span></label>
                                                        <textarea name="notes" id=""
                                                            class="form-control" value="{{ old('notes') }}"
                                                            placeholder="Enter Notes..."></textarea>
                                                        @if ($errors->has('notes'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('notes') }}</div>
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Date
                                                            <span style="color: red;">*</span></label>
                                                        <input type="date" name="invoice_date" id=""
                                                            class="form-control" value="{{ old('invoice_date') }}">
                                                        @if ($errors->has('invoice_date'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('invoice_date') }}</div>
                                                        @endif
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Invoice No.
                                                            <span style="color: red;">*</span></label>
                                                        <input type="text" name="invoice_no" id=""
                                                            class="form-control" value="{{ old('invoice_no') }}" placeholder="Enter Invoice No">
                                                        @if ($errors->has('invoice_no'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('invoice_no') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label  for="inputEnterYourName" class="col-form-label">Draw Signature <span style="color: red;">*</span></label>
                                                        <br/>
                                                        <div id="signature"></div>
                                                        <br><br>
                                                        <button id="reset" class="btn btn-danger">Clear Signature</button>
                                                        <!--<button class="btn btn-success">Save</button> -->
                                                        <textarea id="signature_capture" name="signed" hidden></textarea>
                                                        @if ($errors->has('signed'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('signed') }}</div>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="inputEnterYourName" class="col-form-label"> Logo (ratio:426px,137px; type: .png; max-size:2048;)
                                                            <span style="color: red;">*</span></label>
                                                        <input type="file" name="photo" 
                                                            class="form-control" id="selectImage">
                                                        @if ($errors->has('photo'))
                                                            <div class="error" style="color:red;">
                                                                {{ $errors->first('photo') }}</div>
                                                        @endif

                                                        <img id="preview" src="#" alt="your image" class="mt-3" style="display:none;"/>
                                                    </div>
                                                    
                                                    
                                                    <div class="row" style="margin-top: 20px; float: left;">
                                                        <div class="col-sm-9">
                                                            <button type="submit"
                                                                class="btn px-5 submit-btn">Create</button>
                                                        </div>
                                                        
                                                       
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@push('scripts')


<script type="text/javascript" src="https://cdn.rawgit.com/willowsystems/jSignature/master/libs/jSignature.min.js"></script>
<script type="text/javascript">

$(document).ready(function() { 

    $('#signature').jSignature();
    var $sigdiv = $('#signature');
    var datapair = $sigdiv.jSignature('getData', 'svgbase64');

    $('#signature').bind('change', function(e) {
        var data = $('#signature').jSignature('getData');
        $("#signature_capture").val(data);
        $("#signature_capture").show();
    });
  
    $('#reset').click(function(e){
    $('#signature').jSignature('clear');
        var data = $('#signature').jSignature('getData');
    $("#signature_capture").val('');
    e.preventDefault();
    });
  
});

</script>

<script>
    selectImage.onchange = evt => {
        preview = document.getElementById('preview');
        preview.style.display = 'block';
        const [file] = selectImage.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>

<script>
    var i = 1;
    $("#add").click(function(){
        i++;
        
        $(".add-item").append('<div class="row" id="addMoreInputFields_'+i+'"><div class="col-md-6"><label for="inputEnterYourName" class="col-form-label"> Item Description <span style="color: red;">*</span></label><input type="text" name="item_description[]"  class="form-control"  placeholder="Enter Description">@if ($errors->has('item_description'))<div class="error" style="color:red;">{{ $errors->first('item_description') }}</div>@endif</div><div class="col-md-6"><label for="inputEnterYourName" class="col-form-label"> AdditionalDetails <span style="color: red;">*</span></label><input type="text" name="additional_details[]" id="" class="form-control"  placeholder="Enter Description">@if ($errors->has('additional_details'))<div class="error" style="color:red;">{{ $errors->first('additional_details') }}</div>@endif</div><div class="col-md-3"><label for="inputEnterYourName" class="col-form-label"> Rate <span style="color: red;">*</span></label><input type="text" name="rate[]" id="rate_'+i+'"  class="form-control"  oninput="rating('+i+')" placeholder="Enter Rate">@if ($errors->has('rate'))<div class="error" style="color:red;">{{ $errors->first('rate') }}</div>@endif</div><div class="col-md-3" ><label for="inputEnterYourName" class="col-form-label"> Quantity<span style="color: red;">*</span></label><input type="text" name="quantity[]" id="quan_'+i+'" class="form-control" oninput="quant('+i+')"  placeholder="Enter Quantity">@if ($errors->has('quantity'))<div class="error" style="color:red;">{{ $errors->first('quantity') }}</div>@endif</div><div class="col-md-2"><label for="inputEnterYourName" class="col-form-label"> Amount</label><input type="text" id="amount_'+i+'" name="amount[]" style="border:none;border-bottom: 2px solid rgb(223, 123, 10);" readonly></div><div class="col-md-2"><label for="inputEnterYourName" class="col-form-label"></lable><a class="btn btn-danger btn_remove" onclick="remove('+i+')" >remove</a></div></div>');
    });

    function remove(i)
    {
        var total_amount = $('#total_amount').val();
        var amount = $('#amount_'+i).val();
        var calculate = (total_amount - amount);
        $('#total_amount').val(calculate); 
        $('#addMoreInputFields_'+i).remove();
    }

</script>
 <script>
    
    function quant(i)
    {
       var rate = $('#rate_'+i).val();
       var quant = $('#quan_'+i).val();
       var amount = (rate * quant);
       var total_amount = $('#total_amount').val();
       
       $('#amount_'+i).val(amount);
    //    var sum = parseInt(total_amount)+parseInt(amount);
    //    $('#total_amount').val(sum); 
       
    }

    function rating(i)
    {
       var rate = $('#rate_'+i).val();
       var quant = $('#quan_'+i).val();
       var amount = (rate * quant);
       $('#amount_'+i).val(amount);
    //    var total_amount = $('#total_amount').val();
    //    alert(total_amount);
    //    var sum = parseInt(total_amount)+parseInt(amount);
    //    alert(sum);
    //    $('#total_amount').val(sum); 
    }
    </script> 

    


@endpush
