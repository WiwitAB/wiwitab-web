@extends('admin.layouts.app')

@section('content')
    <style>
        .ui-datepicker {
            background: black;
            border: 1px solid #555;
            color: white;
        }
    </style>
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Input</h3>
                    <p class="text-subtitle text-muted">Fill data or information using input is better than writing by pen.
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Input</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Inputs</h4>
                </div>
                <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Desc</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="desc"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="helpInputTop">Website</label>
                                    <small class="text-muted"></small>
                                    <input type="text" class="form-control" name="website">
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">phone</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="helpInputTop">city</label>
                                    <input type="text" class="form-control" name="city">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="helpInputTop">age</label>
                                    <input type="text" class="form-control" name="age">
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">degree</label>
                                    <input type="text" class="form-control" name="degree">
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">work</label>
                                    <input type="text" class="form-control" name="work">
                                </div>

                                <div class="form-group">
                                    <label for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control" name="photo" type="file" id="formFile">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary">
                                        <i class="fa fa-paper-plane"></i> Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            $('#datepicker').datepicker({
                dateFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true,
                showAnim: 'slideDown',
                duration: 'fast',
                yearRange: new Date().getFullYear() + ':' + new Date().getFullYear(),
            });
        </script>
    @endsection
