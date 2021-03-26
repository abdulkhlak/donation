@extends('layouts.admin.master')
@section('title')
    {{ __('Sliders List')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <section class="content-header">
                    <h1><a href="{{route('slider_add')}}" class="btn btn-primary">{{ __('Add New')}}</a></h1>

                </section>
                <div class="col-xs-12">


                    <div class="box">
                        <div class="box-header">
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>{{ __('SL')}}</th>
                                    <th>{{ __('Title')}}</th>
                                    <th>{{ __('Sub Title')}}</th>
                                    <th>{{ __('Image')}}</th>
                                    <th>{{ __('Btn name')}}</th>
                                    <th>{{ __('Call')}}</th>
                                    <th>{{ __('Status')}}</th>
                                    <th>{{ __('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $key => $slider)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>{{$slider->title}}</td>
                                        <td>{{$slider->sub_title}}</td>
                                        <td><img width="100" id="blah" src="{{(!empty($slider->image))?url
                                        ('images/slider_images/'.$slider->image):url('images/blank_image.jpg')}}" alt="your image" /></td>
                                        <td><a class="btn btn-primary btn-xs" target="_blank"
                                               href="{{$slider->url}}">{{$slider->btn_name}}</a> </td>
                                        <td><a class="btn btn-primary btn-xs" target="_blank"
                                               href="">{{$slider->call}}</a> </td>
                                        <td>@if ($slider->status=='1')
                                                <span style="color:#fff0ff; background: #00A65A; padding: 3px 10px 3px 10px">{{__('active')
                                    }}</span>
                                            @elseif($slider->status=='0')
                                                <span style="color:#fff0ff; background: #DD4B39; padding: 3px 5px 3px 5px">{{__('Inactive')
                                        }}</span>

                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('slider_edit', base64_encode($slider->id))}}"
                                               class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('slider_delete', base64_encode
                                     ($slider->id))}}" id="delete" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></a></td>

                                    </tr>
                                @endforeach



                                </tbody>

                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

@section('script')
    <!-- Notify allert script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <!-- Sweet Alert script -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if(session()->has('success'))
        <script type="text/javascript">
            $(function () {
                $.notify("{{session()->get('success')}}",{ globalPosition: 'top right',className:'success'});
            });
        </script>
    @endif

    <!-- Notify allert script end-->

    <!-- Sweet alert-->
    <script>
        $(function () {
            $(document).on('click','#delete',function (e) {
                e.preventDefault();
                var link=$(this).attr("href");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href=link;
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        })
    </script>
    <!-- Sweet alert end -->
@endsection
@endsection

