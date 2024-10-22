@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Inquirie</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Inquirie</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Inquirie @endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" id="check_success" value="0">
                    <center><p style="color:red;">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                    </p>
                    @if(session()->has('status-s'))
                        <div class="alert alert-success enq-msg-mAdmin text-center">
                            {{ session()->get('status-s') }}
                        </div>
                    @elseif(session()->has('status-f'))
                        <div class="alert alert-danger enq-msg-mAdmin text-center">
                            {{ session()->get('status-f') }}
                        </div>
                    @else

                    @endif 
                    </center>
                    <!-- <a href="{{ route('add_banner_master') }}"><button type="button" class="btn waves-effect waves-light btn-rounded btn-success text-white text-end" style="float: right;margin-bottom: 20px;">+ Add Banner</button></a> -->
                    <div class="table-responsive m-t-30">
                        <table class="nowrap table table-hover border dataTable no-footer" id="listBrands">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Banner Text</th>
                                    <th>Banner Image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ABC</td>
                                    <td>9898235871</td>
                                    <td>abc@gmail.com</td>
                                    <td>
                                        <a href="#" class="text-inverse p-r-10" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a> 

                                        <a href="#" class="text-inverse" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="mdi mdi-delete-forever" style="font-size: 15px;"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Zaid Khan</td>
                                    <td>9722110859</td>
                                    <td>zaid@gmail.com</td>
                                    <td>
                                        <a href="#" class="text-inverse p-r-10" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a> 

                                        <a href="#" class="text-inverse" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="mdi mdi-delete-forever" style="font-size: 15px;"></i></a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
$(document).ready(function () {
        $(".alert-success").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert-success").slideUp(500);
        });
         $(".alert-danger").fadeTo(2000, 500).slideUp(500, function() {
                $(".alert-success").slideUp(500);
        });
         
    });
    $(function () {  
        $('#custom_table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary me-1');
    });
</script>
<style>
tr{vertical-align: middle;}
</style>
@endsection
