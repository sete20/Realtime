
﻿@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                        <div class="col-6 alert alert-success justify-content-center d-flex">
                        </div>
                            <div class="card-body">
                                    <div class="alert alert-success" role="alert">
                                    </div>
                                <h1> f</h1>
                                <br>

                                <br>
                                <br>
                                <form method="POST" action="" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="post_id" value="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="post_content">
                                        <small class="form-text text-danger"></small>
                                        @enderror
                                    </div>


                                    <button type="submit" class="btn btn-primary">أضافه ردك</button>
                                </form>


                            </div>

                </div>
            </div>
        </div>
    </div>
@endsection
