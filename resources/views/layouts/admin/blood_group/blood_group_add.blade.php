@extends('layouts.admin.master')
@section('title')
    {{ __('Create New Blood Group')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('blood_group_store')}}" id="bloodFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Create New Blood Group</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Group Name</label>
                                    <input type="text" class="form-control" name="blood_group_name" id="blood_group_name"
                                           placeholder="Group Name *"
                                           value=""/>
                                    <font style="color: red">{{($errors->has('blood_group_name'))?($errors->first('blood_group_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create New Blood Group</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

@endsection

