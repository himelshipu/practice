@extends('layouts.app')

@section('content')




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Category</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Sl</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created at</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add Category</div>


                    @if(session('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('store.category')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input  type="text" class="category_name form-control @error('category_name') is-invalid @enderror"  id="category_name" aria-describedby="category_name" placeholder="category_name ">
                            @error('category_name')
                                <span class="text-danger">
                                    {{($message)}}
                                </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
