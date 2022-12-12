@extends('admin.master')
@section('content')
<div class="container-fluid">
    <!-- row -->

    <div class="row">



        <div class="card-body">

            <div class="bootstrap-modal">


                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">রিটার্ন নিবন্ধন ফর্ম</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('add_return')}}" method="post">
                                @csrf
                                <div class="modal-body">

                                  
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">রিটার্ন নাম:</label>
                                        <input type="text" class="form-control" name="name"
                                            id="recipient-name">
                                    </div>                                   
                                   
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">বাদ দিন</button>
                                    <button type="submit" class="btn btn-primary">বার্তা পাঠান</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Responsive Table</h4> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@getbootstrap">রিটার্ন যুক্ত করুন</button>
                    <div class="table-responsive">
                        <table class="table header-border">
                            @isset($result)
                            <thead>
                                <tr>
                                    <!-- <th>Invoice</th> -->
                                    <th>নং</th>
                                    <th>রিটার্ন নাম </th>
                                  

                                 
                                
                                </tr>
                            </thead>
                            <tbody>

                              

                            @foreach($result as $value)

                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->name}}</td>                                                           
                                
                                    <!-- <td><span class="text-muted"></span> </td> -->
                                   


                                    <!-- <td><span class="label gradient-1 rounded">Paid</span>
                                    </td> -->

                                </tr>


                                @endforeach

                               

                                <tr>
                                    <!-- <td>
                                        <form action="cancel_product_add" method="post">@csrf<button type="submit"
                                                class="btn btn-danger">Cancel</button></form>
                                    </td> -->
                                    <td>
                                        <!-- <form action="{{url('merchandis/store')}}" method="post">@csrf
                                            <input type="hidden" value="" name="total_amount">
                                            <button type="submit" class="btn btn-success">submit</button>
                                            </form> -->
                                    </td>
                                </tr>

                            </tbody>
                            @endisset
                        </table>
                    </div>
                </div>
            </div>
        </div>











 




    </div>
</div>
<!-- #/ container -->
@endsection