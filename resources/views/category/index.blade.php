@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox" style="margin: 0px">

                        <div style="margin: 10px">
                            <h2>Category</h2>

                            <a class="btn btn-primary"
                               style="margin-bottom: 10px; float: right"
                               href="{{route('category.create')}}"
                               role="button">
                                Add new
                            </a>

                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Create New Post</button>

                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Options</th>

                                </tr>
                                </thead>

                                <tbody>

{{--                                    <tr>--}}
{{--                                        <th scope="row">{{$au->id}}</th>--}}
{{--                                        <th>{{$au->name}}</th>--}}
{{--                                        <th>{{$au->description}}</th>--}}
{{--                                        <th>--}}
{{--                                            <form action="{{route('category.destroy',$au->id)}}" method="post" >--}}
{{--                                                @csrf--}}
{{--                                                <a type="button" class="btn btn-info" href="{{route('category.edit',$au->id)}}">Update</a>--}}

{{--                                                <a type="button" class="btn btn-success" href="{{route('category.show',$au->id)}}">Detail</a>--}}
{{--                                                @method('delete')--}}
{{--                                                <button type="submit" class="btn btn-danger">Delete</button>--}}

{{--                                            </form>--}}
{{--                                        </th>--}}
{{--                                    </tr>--}}

                                </tbody>
                            </table>

                            <ul id="pagination" class="pagination-sm"></ul>


                        </div>


                    </div><!-- /row mt -->
                </div>
            </div>

            <!-- The Modal -->
            @include('category.edit')
            @include('category.create')

        </section>
    </section>

@endsection

