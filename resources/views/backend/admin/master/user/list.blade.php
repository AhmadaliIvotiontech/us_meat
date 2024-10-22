@extends('backend.layouts.admin.master.main')

@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">List User</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">List User</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- <script src="{{ asset('public/backend/assets/admin/master/user/add.js') }}" type="text/javascript"></script> -->
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
                    <div class="table-responsive m-t-30">
                        <table class="nowrap table table-hover border dataTable no-footer" id="listBrands">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Admin Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($users))
                                <?php $i=1; ?>
                                @foreach ($users as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        @if($item->role_id == 1)
                                        <span class="label label-rounded label-inverse">Master Admin</span>
                                        @elseif($item->role_id == 2)
                                        <span class="label label-rounded label-inverse">Sub Admin</span>
                                        @elseif($item->role_id == 3)
                                        <span class="label label-rounded label-inverse">Vendor</span>
                                        @elseif($item->role_id == 4)
                                        <span class="label label-rounded label-inverse">Customer</span>
                                        @endif
                                    </td>
                                    {{-- <td>{{ $item->fuel_type }}</td> --}}
                                    <td>
                                        <a href="{{ url('admin/master/edit-user/'.$item->id) }}" class="text-inverse p-r-10" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-edit"></i></a> 

                                        <a href="{{ url('admin/master/delete-user/'.$item->id) }}" class="text-inverse" title="" data-bs-toggle="tooltip" data-original-title="Delete"><i class="mdi mdi-delete-forever" style="font-size: 15px;"></i></a>
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
</script>
@endsection
