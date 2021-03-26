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
                <style>
                    .btn:focus, .btn:active, button:focus, button:active {
                        outline: none !important;
                        box-shadow: none !important;
                    }
                    #image-gallery .modal-footer {
                        display: block;
                    }
                    .thumb {
                        margin-top: 15px;
                        margin-bottom: 15px;
                    }
                    .img-thumbnail{
                        width: 500px;
                    }
                </style>
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

                <!------ Include the above in your HEAD tag ---------->

                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
                      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


                    <div class="row">
                        <div class="col-md-12">

                            <h1>Image Gallery</h1> <a href="{{route('gallery_add')}}" class="btn btn-info btn-sm"><i
                                        class="fa fa-plus"></i>
                                Create </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a class="thumbnail" href="#">
                                        <img class="img-thumbnail"
                                             src=""
                                             alt="Another alt text">
                                    </a>
                                </div>

                        </div>
                        <div class="row">

                        </div>

                        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="image-gallery-title"></h4>
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                                    class="sr-only">Close</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i
                                                    class="fa fa-arrow-left"></i>
                                        </button>

                                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                                                    class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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

