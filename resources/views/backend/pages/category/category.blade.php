@extends('backend.master')
@section('title', 'Quản lý danh mục')
@section('content')
<section class="panel" ng-controller="categoryController">
    <div class="panel-heading my-panel-heading">
        <div class="row">
            <div class="col-md-4 col-ms-12 title-panel">
                <h3>Quản lý danh mục //1+1//</h3>
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
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Date</th>
                                            <th>Salary</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr class="odd">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1">Ada.Hoppe</td>
                                            <td>69842 Peyton Viaduct</td>
                                            <td>South Geovannyburgh</td>
                                            <td>89</td>
                                            <td>2013/05/13</td>
                                            <td>$211,76</td>
                                            <td style="text-align: center">
                                                <i class="fa fa-trash my-fa-delete"></i>
                                                <i class="fa fa-pencil-square-o my-fa-edit"></i>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1">Adrianna_Durgan</td>
                                            <td>75151 Kshlerin Square</td>
                                            <td>North Elwynfurt</td>
                                            <td>25</td>
                                            <td>2014/02/26</td>
                                            <td>$481,980</td>
                                            <td style="text-align: center">
                                                <i class="fa fa-trash my-fa-delete"></i>
                                                <i class="fa fa-pencil-square-o my-fa-edit"></i>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1">Albin.Kreiger</td>
                                            <td>111 Hershel Stream</td>
                                            <td>Hermannborough</td>
                                            <td>90</td>
                                            <td>2013/11/27</td>
                                            <td>$921,021</td>
                                            <td style="text-align: center">
                                                <i class="fa fa-trash my-fa-delete"></i>
                                                <i class="fa fa-pencil-square-o my-fa-edit"></i>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1">Alisa</td>
                                            <td>64838 D'Amore Cove</td>
                                            <td>Port Lempi</td>
                                            <td>25</td>
                                            <td>2016/04/28</td>
                                            <td>$226,459</td>
                                            <td style="text-align: center">
                                                <i class="fa fa-trash my-fa-delete"></i>
                                                <i class="fa fa-pencil-square-o my-fa-edit"></i>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1">August</td>
                                            <td>731 Stiedemann Crossing</td>
                                            <td>Rolfsonborough</td>
                                            <td>98</td>
                                            <td>2013/11/12</td>
                                            <td>$203,952</td>
                                            <td style="text-align: center">
                                                <i class="fa fa-trash my-fa-delete"></i>
                                                <i class="fa fa-pencil-square-o my-fa-edit"></i>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1">Bell.Mueller</td>
                                            <td>083 Kshlerin Forest</td>
                                            <td>Clintmouth</td>
                                            <td>98</td>
                                            <td>2013/10/12</td>
                                            <td>$571,46</td>
                                            <td style="text-align: center">
                                                <i class="fa fa-trash my-fa-delete"></i>
                                                <i class="fa fa-pencil-square-o my-fa-edit"></i>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1">Bret</td>
                                            <td>282 Susana Heights</td>
                                            <td>Kaneport</td>
                                            <td>47</td>
                                            <td>2013/05/28</td>
                                            <td>$445,494</td>
                                            <td style="text-align: center">
                                                <i class="fa fa-trash my-fa-delete"></i>
                                                <i class="fa fa-pencil-square-o my-fa-edit"></i>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1">Ceasar_Orn</td>
                                            <td>2795 Clement Ridges</td>
                                            <td>Beckerhaven</td>
                                            <td>78</td>
                                            <td>2013/11/27</td>
                                            <td>$958,117</td>
                                            <td style="text-align: center">
                                                <i class="fa fa-trash my-fa-delete"></i>
                                                <i class="fa fa-pencil-square-o my-fa-edit"></i>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1">Chester</td>
                                            <td>14095 Kling Gateway</td>
                                            <td>Andresmouth</td>
                                            <td>26</td>
                                            <td>2014/09/27</td>
                                            <td>$177,404</td>
                                            <td style="text-align: center">
                                                <i class="fa fa-trash my-fa-delete"></i>
                                                <i class="fa fa-pencil-square-o my-fa-edit"></i>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td><input type="checkbox"></td>
                                            <td class="sorting_1">Citlalli_Wehner</td>
                                            <td>139 Ebert Freeway</td>
                                            <td>Lake Esperanzamouth</td>
                                            <td>78</td>
                                            <td>2016/01/27</td>
                                            <td>$892,012</td>
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
</section>
@endsection
@section('script')
<script src="{{asset('/public/backend')}}/assets/plugins/angular/controller/category.js"></script>
@endsection