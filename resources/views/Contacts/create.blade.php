@extends('layouts.app')
@section('title')Dashboard | POS @endsection
@section('content')

    <div class="content-wrapper">
        @include('layouts.errors')
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Advanced Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Advanced Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-danger">
                                    <form action="{{route('contacts.store')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Contact type:*</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control contact_type" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="contact_type">
                                                        <span class="text-danger contact_type_error"></span>
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name:*</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control name" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="name">
                                                         <span class="text-danger name_error"></span>
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Business Name:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control business_name" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="business_name">
                                                        <span class="text-danger business_name_error"></span>
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Contact ID:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="contact_id">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Tax number:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="tax_number">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>                                       
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Opening Balance:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="opening_balance">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Pay term:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="pay_term">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Customer Group:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="customer_group">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>                                       
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Credit Limit:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="credit_limit">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>                                       
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="email" class="form-control email" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="email">
                                                        <span class="text-danger email_error"></span>
                                                    </div>
                                                  
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Mobile:*</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control check_mobile" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="mobile">
                                                        <span class="text-danger message"></span>
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Alternate contact number:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="alternate_contact_number">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Landline:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="landline">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                                                                  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>City:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="city">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>State:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="state">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Country:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="country">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Landmark:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="landmark">
                                                    </div>
                                                      <!-- /.input group -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Custom Field 1:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="custom_field_1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Custom Field 2:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="custom_field_2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Custom Field 3:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="custom_field_3">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Custom Field 4:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                          <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" name="custom_field_4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" class="btn btn-success submit_data" value="submit">
                                    </form>
                                </div>
                                  <!-- /.card-body -->
                            </div>
                                <!-- /.card -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            //Check Mobile Exists or Not
              $(".check_mobile").keyup(function(){
                    var get_value=$(this).val();
                    $.ajax({
                        url:'/check_email',
                        type:"POST",
                        data:{
                            '_token':"{{csrf_token()}}",
                            'get_value':get_value
                        },
                        success:function(response){
                            if(response)
                            {
                                $(".message").html("Phone Number Already Exists");
                                $(".submit_data").attr("disable","disable");
                            }
                            else
                            {
                                $(".message").html("Phone Number Avaialble");
                                $(".submit_data").removeAttr("disable");
                            }
                        }
                        
                    });
              });

              //Submit The Form
              $(".submit_data").click(function(){
                    var contact_type=$(".contact_type").val();
                    var business_name=$(".business_name").val();
                    var name=$(".name").val();
                    var email=$(".email").val();
                    var phone=$(".check_mobile").val();
                    if(contact_type=='')
                    {
                        $(".contact_type_error").html("Field Is Required");
                    }
                    else if(business_name=='')
                    {
                        $(".business_name_error").html("Field Is Required");
                    }
                    else if(name=='')
                    {
                         $(".name_error").html("Field Is Required");
                    }
                    else if(email=='')
                    {
                         $(".email_error").html("Field Is Required");
                    }
                    else if(phone=='')
                    {
                         $(".message").html("Field Is Required");
                    }
                    else
                    {
                        $.ajax({
                            url:'/contacts',
                            type:"POST",
                            data:{
                                'contact_type':contact_type,
                                'business_name':business_name,
                                'name':name,
                                'email':email,
                                'mobile':phone,
                                '_token':"{{csrf_token()}}",
                            },
                            success:function(response){
                                console.log(response);
                            }
                        });
                    }
              });


        });
    </script>
@endsection
