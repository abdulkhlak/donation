@extends('layouts.admin.master')
@section('title')
    {{ __('Update Blood Group')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('blood_group_update',$blood_group_edit->id)}}" id="bloodFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Update Group</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Group Name</label>
                                    <input type="text" class="form-control" name="blood_group_name" id="blood_group_name"
                                           placeholder="Group Name *"
                                           value="{{$blood_group_edit->blood_group_name}}"/>
                                    <font style="color: red">{{($errors->has('blood_group_name'))?($errors->first('blood_group_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option value="1" {{($blood_group_edit->status =="1")
                                        ?"selected":""}}>Publish</option>
                                        <option value="0" {{($blood_group_edit->status =="0")
                                        ?"selected":""}}>Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Group</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->
@endsection

