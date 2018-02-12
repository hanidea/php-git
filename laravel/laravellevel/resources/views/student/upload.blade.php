@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">文件上传</div>

                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf

                        

                        <div class="form-group row">
                            <label for="file" class="col-md-4 col-form-label text-md-right">请选择文件</label>

                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="source" required>

                                
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    上传
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
