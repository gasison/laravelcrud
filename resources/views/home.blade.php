@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    
                    {{ __('Available Jobs') }}
                    
                    <a class="btn btn-primary" href="{{ route('jobListing.create') }}">Add New Job</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    
                       
                    <div class="container">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Job Name</th>
                                <th scope="col">Job Description</th>
                                <th scope="col">Vacancy</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->description }}</td>
                                        <td>{{ $value->vacancy }}</td>
                                        <td class="d-flex justify-content-around">
                                            <a class="btn btn-primary btn-sm" href="{{ route('jobListing.edit', $value->id) }}"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('jobListing.destroy', $value->id)}}" method="POST">
                                                
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                                            
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                              
                            </tbody>
                          </table>
                    </div>

                

                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
