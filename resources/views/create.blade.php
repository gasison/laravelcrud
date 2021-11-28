@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    
                    {{ __('Add Job') }}
                    
                    <a class="btn btn-primary" href="{{ route('jobListing.index') }}">Back</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                
                    <div class="container">

                        

                            <form action="{{ route('jobListing.store')}}" method="POST">
                                                
                                @csrf
                               
                                
                                <div class="form-group">
                                    <label for="name">Job Name</label>
                                    <input type="text" name="name" id="name" placeholder="Job Name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description">Job Description</label>
                                    <input type="text" name="description" id="description" placeholder="Description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="vacancy">Vacancy</label>
                                    <input type="text" name="vacancy" id="vacancy" placeholder="Vacancy" class="form-control">
                                </div>
                                
                                <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                            
                            </form>
                        
                    
                    </div>

                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
