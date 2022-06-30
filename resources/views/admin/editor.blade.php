@extends('admin.layouts.main')
@section('content') 

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<div class="preview-wrapper">
  <canvas id="canvas"></canvas>
</div>

<div class="editor-buttons">
  <input type="file" id="upload-file" placeholder="" />
  <label for="upload-file">Upload a Picture</label>
  <button id="download-btn">Download Image</button> 
</div>



@endsection