@extends('backend.master')
@section('title', 'Quản lý giáo viên')
@section('content')
<section class="panel" ng-controller="teacherController">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Quản lý giáo viên //1+1//</h3>
            </div>
            <div class="button-delete pull-right">
                <button type="button" class="btn btn-primary margin-inline"><i class="fa fa-trash-o"></i> Delete</button>
            </div>
            <div class="button-addnew pull-right">
                <button type="button" class="btn btn-danger margin-inline" ng-click="modalAdd()"><i class="fa fa-plus"></i> Add</button>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-bottom-50">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="dataTables_length" id="example1_length">
                                    <label>
                                        <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="overflow: auto;">
                                <table class="table table-hover nowrap dataTable dtr-inline" id="example1" width="100%" role="grid" aria-describedby="example1_info" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Check</th>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Ngày sinh</th>
                                            <th>Chủ nhiệm lớp</th>
                                            <th>Dạy môn</th>
                                            <th>Đang dạy lớp</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd" ng-repeat="x in list_teacher">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1" ng-bind="x.fullname"></td>
                                            <td ng-bind="x.email"></td>
                                            <td ng-bind="x.birthday"></td>
                                            <td ng-bind="x.home_class"></td>
                                            <td ng-bind="x.subject_id"></td>
                                            <td><a href="javascript:voide(0)" ng-click="getClassByTeacher(x.id)">Click để xem</a></td>
                                            <td style="text-align: center">
                                                <i class="fa fa-trash my-fa-delete"></i>
                                                <i class="fa fa-pencil-square-o my-fa-edit"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div ng-include="add">
        
    </div>
</section>
@endsection
@section('script')
<script src="{{asset('/public/backend')}}/controller/teacher.js"></script>
@endsection