@extends('layouts.admin.master')
@section('title')
    {{ __('Update Diseases Name')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('diseases_update',$diseases_edit->id)}}" id="districtFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Diseases Name</label>
                                    <input type="text" class="form-control" name="diseases_name" id="diseases_name"
                                           placeholder="Diseases Name *"
                                           value="{{$diseases_edit->diseases_name}}"/>
                                    <font style="color: red">{{($errors->has('diseases_name'))?($errors->first('diseases_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option value="1" {{($diseases_edit->status =="1")
                                        ?"selected":""}}>Publish</option>
                                        <option value="0" {{($diseases_edit->status =="0")
                                        ?"selected":""}}>Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->
@endsection

