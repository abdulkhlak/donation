@extends('layouts.admin.master')
@section('title')
    {{ __('Create New Nearest')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('nearest_store')}}" id="nearestFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Create New nearest</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-select" aria-label="Default select example"
                                            name="district_id" id="district_id">
                                        <option selected>Select District</option>
                                        @foreach($districts as $district)
                                            @if($district)
                                        <option value="{{$district->id}}">{{$district->district_name}}</option>
                                            @endif
                                            @endforeach
                                    </select>
                                    <font style="color: red">{{($errors->has('district_id'))?($errors->first
                                    ('district_id'))
                                    :''}}</font>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nearest Name</label>
                                    <input type="text" class="form-control" name="nearest_name" id="nearest_name"
                                           placeholder="nearest Name *"
                                           value=""/>
                                    <font style="color: red">{{($errors->has('nearest_name'))?($errors->first
                                    ('nearest_name'))
                                    :''}}</font>
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
                            <button type="submit" class="btn btn-primary">Create New Nearest</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection

