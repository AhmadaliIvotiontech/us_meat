@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Dropdown</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dropdown</li>
            </ol>
        </div>
    </div>
</div>
@endsection
@section('title') Dropdown @endsection
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
                    <a href="{{ route('add_dropdown') }}"><button type="button" class="btn waves-effect waves-light btn-rounded btn-danger text-white text-end" style="float: right;margin-bottom: 20px;">+ Add Dropdown</button></a>
                    <div class="table-responsive m-t-30">
                        <table class="nowrap table table-hover border dataTable no-footer" id="custom_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Page Name</th>
                                    <th>Dropdown Name</th>
                                    <th>Dropdown Value</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($all_data))
                                <?php $i=1; ?>
                                @foreach ($all_data as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>
                                        @if($item->page_name == 1)
                                            About Us
                                        @elseif($item->page_name == 2)
                                            Experience
                                        @endif
                                    </td>
                                    <td>{{ $item->dropdown_name }}</td>

                                    <td>{{ $item->dropdown_value }}</td>
                                    <td>
                                        @if($item->status == 1)
                                        <span class="label label-rounded label-inverse">Active</span>
                                        @elseif($item->status == 0)
                                        <span class="label label-rounded label-inverse">Deactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/master/edit-dropdown/'.$item->id) }}" class="text-inverse p-r-10" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a> 

                                        <a href="{{ url('admin/master/delete-dropdown/'.$item->id) }}" class="text-inverse" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="mdi mdi-delete-forever" style="font-size: 15px;"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                                @endforeach
                                @endif
                                
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
