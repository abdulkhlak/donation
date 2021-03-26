@extends('layouts.admin.master')
@section('title')
    {{ __('Update Nearest')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('nearest_update',$district_edit->id)}}" id="nearestFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Update Nearest</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>District Name</label>
                                    <input type="text" class="form-control" name="nearest_name" id="nearest_name"
                                           placeholder="Nearest Name *"
                                           value="{{$district_edit->nearest_name}}"/>
                                    <font style="color: red">{{($errors->has('nearest_name'))?($errors->first('nearest_name')):''}}</font>
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

