@extends('layouts.admin.master')
@section('title')
    {{ __('Update District')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('district_update',$district_edit->id)}}" id="districtFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Update District</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>District Name</label>
                                    <input type="text" class="form-control" name="district_name" id="district_name"
                                           placeholder="District Name *"
                                           value="{{$district_edit->district_name}}"/>
                                    <font style="color: red">{{($errors->has('district_name'))?($errors->first('district_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option value="1" {{($district_edit->status =="1")
                                        ?"selected":""}}>Publish</option>
                                        <option value="0" {{($district_edit->status =="0")
                                        ?"selected":""}}>Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update District</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->
@endsection

