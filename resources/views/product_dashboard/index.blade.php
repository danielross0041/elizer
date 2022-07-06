@extends('layouts.main')
@section('content')
<main>
    <section class="main-content-custom">
        <div class="container">
            <div class="custom-top-bar">
                <div class="row align-items-end">
                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="row">
                            <div class="col-4 col-md-4 col-sm-4 col-lg-3 col-xl-3 col-xxl-3">
                                <img src="{{asset($product->image)}}" class="img-fluid" alt="img" />
                            </div>
                            <div class="col-8 col-md-8 col-sm-8 col-lg-9 col-xl-9 col-xxl-9">
                                <h3>{{$product->name}}</h3>
                                <!-- <h6>(2x8)</h6> -->
                                <p>${{$product->price}}</p>
                                <!-- <ul>
                                    <li><span>ASIN:</span>b000asda</li>
                                    <li><span>SKU:</span>b000asda</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="margin-set-hr" />
            <div class="surface-customization">
                <div class="row">
                    <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                        <h2>Manage Your Surface Customizations</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="first-surface-start">
                            <ul>
                                <li><h6>1</h6></li>
                                <li><i class="fas fa-pencil-alt"></i> Surface 1</li>
                                <li>
                                    <a href="javavoid:;"><i class="fas fa-trash-alt"></i></a>
                                </li>
                                <li>
                                    <a href="javavoid:;" id="surface-tab" class="icon-rotate"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="surface-custom-inner" id="surface-tab-start">
                <div class="img-information">
                    <h2>Preview Image</h2>
                    <h6>Add preview image for this surface</h6>
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12 col-lg-8 col-xl-8 col-xxl-8">
                            <div class="row">
                                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="custom-input">
                                        <label>label <abbr>*</abbr></label>
                                        <input type="text" class="customization" name="image_label" id="image-label" value="{{$product_customization->image_label??''}}" />
                                        <p>You have 91 of 100 characters remaining</p>
                                    </div>
                                    <div class="custom-input">
                                        <label>Instruction <abbr>(Optional)</abbr></label>
                                        <textarea placeholder="instruction" class="customization" name="image_instruction" id="image-instruction">{{$product_customization->image_instruction??''}}</textarea>
                                        <p>You have 200 of 200 characters remaining</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                                    <div class="custom-file">
                                        <label>Preview Image</label>
                                        <form id="image-form" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                            <div class="upload-file-body">
                                                <input type="file" name="image" id="upload-file" placeholder="" />
                                                <!-- <input type="file" name=""> -->
                                                @if($product_customization && $product_customization->image)
                                                <div class="image-upload-set-here" style="display:none;" >
                                                    <i class="fas fa-image"></i>
                                                    <p>Drag or upload square image</p>
                                                    <ul>
                                                        <li>Min: 400x400px</li>
                                                        <li>JPEG or PNG</li>
                                                        <li>Max Size: 3 MB</li>
                                                    </ul>
                                                </div>
                                                <img class="image-upload-default" src="{{asset($product_customization->image??'')}}" style="display:block;" >
                                                @else
                                                <div class="image-upload-set-here" style="display:block;" >
                                                    <i class="fas fa-image"></i>
                                                    <p>Drag or upload square image</p>
                                                    <ul>
                                                        <li>Min: 400x400px</li>
                                                        <li>JPEG or PNG</li>
                                                        <li>Max Size: 3 MB</li>
                                                    </ul>
                                                </div>
                                                <img class="image-upload-default" src="{{asset($product_customization->image??'')}}" style="display:none;" >
                                                @endif
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="surface-text-customization">
                        <h2>Customizations</h2>
                        <div class="surface-customization new-text-add">
                            <div class="row">
                                <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="first-surface-start">
                                        <ul>
                                            <li><h6>1</h6></li>
                                            <li><i class="fas fa-pencil-alt"></i> Text 1</li>
                                            <li>
                                                <a href="javavoid:;"><i class="fas fa-trash-alt"></i></a>
                                            </li>
                                            <li>
                                                <a href="javavoid:;" id="customization-tab" class="icon-rotate"><i class="fas fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="surface-custom-inner" id="customization-tab-start">
                            <div class="img-information">
                                <h2>Text Input</h2>
                                <h6>Add preview image for this surface</h6>
                                <h2>Fonts</h2>
                                <h6>Add preview image for this surface</h6>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5">
                                        <div class="custom-input">
                                            <label>label <abbr>*</abbr></label>
                                            <input type="text" name="font_label" id="font-label" class="customization" value="{{$product_customization->font_label??''}}" />
                                            <p>You have 100 of 100 characters remaining</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-sm-12 col-lg-7 col-xl-7 col-xxl-7">
                                        <div class="custom-input">
                                            <label>Instruction <abbr>(Optional)</abbr></label>
                                            <input type="text" name="font_instruction" id="font-instruction" class="customization" value="{{$product_customization->font_instruction??''}}" />
                                            <p>You have 200 of 200 characters remaining</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="added-fonts-color">
                                    <h2>Fonts Added</h2>
                                    <h6>Add preview image for this surface</h6>
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-12 col-sm-12 col-lg-8 col-xl-8 col-xxl-8">
                                            <div class="added-body">
                                                <ul id="font-added">
                                                    @foreach($fonts as $font)
                                                    @if(in_array($font->id,$product_font))
                                                    <li>
                                                        <h4 style="font-family:{{$font->name}};">{{$font->name}}</h4>
                                                        <a><i class="fas fa-times deleted-font-added" data-id="{{$font->id}}"></i></a>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                    <!-- <li>
                                                        <h4>Roboto</h4>
                                                        <a href="javavoid:;"><i class="fas fa-times"></i></a>
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                                            <button data-bs-toggle="modal" data-bs-target="#add-fonts">Add Fonts</button>
                                        </div>
                                    </div>
                                    <!-- <p>2 of 20 fonts added</p> -->
                                </div>
                                <hr />
                                <h2>Colors</h2>
                                <h6>Add preview image for this surface</h6>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5">
                                        <div class="custom-input">
                                            <label>label <abbr>*</abbr></label>
                                            <input type="text" name="color_label" id="color-label" class="customization" value="{{$product_customization->color_label??''}}" />
                                            <p>You have 100 of 100 characters remaining</p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-sm-12 col-lg-7 col-xl-7 col-xxl-7">
                                        <div class="custom-input">
                                            <label>Instruction <abbr>(Optional)</abbr></label>
                                            <input type="text" name="color_instruction" id="color-instruction" class="customization" value="{{$product_customization->color_instruction??''}}" />
                                            <p>You have 200 of 200 characters remaining</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="added-fonts-color">
                                    <h2>Colors Added</h2>
                                    <h6>Add preview image for this surface</h6>
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-12 col-sm-12 col-lg-8 col-xl-8 col-xxl-8">
                                            <div class="added-body">
                                                <ul id="color-added-list">
                                                    @foreach($product_color as $color)
                                                    <li>
                                                        <div class="color" style="background-color: {{$color->color}};"></div>
                                                        <h4>{{$color->name}}</h4>
                                                        <a class="edit-added-color" data-id="{{$color->id}}" data-name="{{$color->name}}" data-color="{{$color->color}}">
                                                            <i class="fas fa-pencil"></i>
                                                        </a>
                                                        <a class="remove-added-color" data-name="{{$color->name}}">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                                            <button data-bs-toggle="modal" data-bs-target="#add-color">Add color</button>
                                        </div>
                                    </div>
                                    <p>2 of 50 colors added</p>
                                </div>
                                <hr />
                                
                                <h2>Text blocks</h2>
                                <h6 class="mb-1">Add preview image for this surface</h6>
                                <div class="surface-customization new-text-add">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="first-surface-start">
                                                <ul>
                                                    <li><h6>1</h6></li>
                                                    <li><i class="fas fa-pencil-alt"></i> Text input 1</li>
                                                    <li>
                                                        <a href="javavoid:;"><i class="fas fa-trash-alt"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="javavoid:;" id="text-block-tab" class="icon-rotate"><i class="fas fa-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="surface-custom-inner" id="text-block-tab-start">
                                    <div class="img-information">
                                        <h2>Text Customization</h2>
                                        <h6>Add preview image for this surface</h6>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Make This Checkbox Require for Buyer
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5">
                                                <div class="custom-input">
                                                    <label>label <abbr>*</abbr></label>
                                                    <input type="text" name="surface" />
                                                    <p>You have 100 of 100 characters remaining</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-sm-12 col-lg-7 col-xl-7 col-xxl-7">
                                                <div class="custom-input">
                                                    <label>Instruction <abbr>(Optional)</abbr></label>
                                                    <input type="text" name="surface" />
                                                    <p>You have 200 of 200 characters remaining</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-sm-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <div class="custom-input">
                                                    <label>Sample Text <abbr>(Optional)</abbr></label>
                                                    <input type="text" name="surface" />
                                                    <p>You have 30 of 30 characters remaining</p>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-sm-12 col-lg-2 col-xl-2 col-xxl-2">
                                                <div class="values-increment-input">
                                                    <label>Character Limit <abbr>*</abbr></label>
                                                    <div class="input-main-div">
                                                        <div class="input-elemnts">
                                                            <input type="number" name="" placeholder="1" value="1" min="1" />
                                                            <span>Min</span>
                                                        </div>
                                                        <div class="input-elemnts">
                                                            <input type="number" name="" placeholder="200" value="200" min="1" max="200" />
                                                            <span>Max</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-sm-12 col-lg-3 col-xl-3 col-xxl-3">
                                                <div class="custom-input">
                                                    <label>Lines Of Text Allowed <abbr>*</abbr></label>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>1</option>
                                                        <option value="1">2</option>
                                                        <option value="2">3</option>
                                                        <option value="3">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row set-remove">
                                            <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                                                <div class="row">
                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="values-increment-input">
                                                            <label>Position <abbr>*</abbr></label>
                                                            <div class="input-main-div">
                                                                <div class="input-elemnts">
                                                                    <input type="number" name="" value="100" />
                                                                    <span>X</span>
                                                                </div>
                                                                <div class="input-elemnts">
                                                                    <input type="number" name="" value="200" />
                                                                    <span>Y</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="custom-input mt-3">
                                                            <label>Center design <abbr>*</abbr></label>
                                                            <div class="values-increment-input">
                                                                <div class="size_select mt-md-3">
                                                                    <ul class="p-0 m-0">
                                                                        <li>
                                                                            <input type="radio" id="size_xs" name="size" />
                                                                            <label for="size_xs"><img src="{{asset('admin/images/horizental.png')}}" class="img-fluid" alt="img" /></label>
                                                                            <span>Horizontally</span>
                                                                        </li>
                                                                        <li>
                                                                            <input type="radio" id="size_s" name="size" />
                                                                            <label for="size_s"> <img src="{{asset('admin/images/vertical.png')}}" class="img-fluid" alt="img" /></label>
                                                                            <span>Vertically</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                                        <div class="values-increment-input">
                                                            <label>Size <abbr>*</abbr></label>
                                                            <div class="input-main-div">
                                                                <div class="input-elemnts">
                                                                    <input type="number" name="" />
                                                                    <span>Width</span>
                                                                </div>
                                                                <div class="input-elemnts">
                                                                    <input type="number" name="" />
                                                                    <span>Height</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="custom-checkbox mt-3">
                                                            <h1>Input Placement</h1>
                                                            <ul>
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                                            Free Placement
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked />
                                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                                            Static Placement
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                                <div class="preview-wrapper">
                                                    <div class="img-canvas">
                                                        @if($product_customization && $product_customization->image)
                                                        <canvas id="canvas" class="canvas-image-custom" style="display: none;"></canvas>
                                                        <img class="canvas-default" src="{{asset($product_customization->image)}}" style="display: block;">
                                                        @else
                                                        <canvas id="canvas" class="canvas-image-custom" style="display:block;"></canvas>
                                                        <img class="canvas-default" src="{{asset($product_customization->image??'')}}" style="display:none;">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-customization-text">
                                                <button data-bs-toggle="modal" data-bs-target="#modal-name">Add Text Input</button>
                                                <p>You have 4 of 5 text remaining</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="add-customization-text">
                                    <button>Add Customizations</button>
                                    <p>You have 9 of 10 customizations remaining</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--
                    <div class="surface-customization new-text-add">
                        <div class="row mt-5">
                            <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="first-surface-start">
                                    <ul>
                                        <li><h6>2</h6></li>
                                        <li><i class="fas fa-pencil-alt"></i> Dat 1</li>
                                        <li>
                                            <a href="javavoid:;"><i class="fas fa-trash-alt"></i></a>
                                        </li>
                                        <li>
                                            <a href="javavoid:;" id="data-block-tab" class="icon-rotate"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="surface-custom-inner" id="data-block-tab-start">
                        <div class="img-information">
                            <h2>Data Input</h2>
                            <h6>Enter The Specifics of Your Data Requirements.</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-data" />
                                <label class="form-check-label" for="flexCheckDefault-data">
                                    Make This Checkbox Require for Buyer
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5">
                                    <div class="custom-input">
                                        <label>label <abbr>*</abbr></label>
                                        <input type="text" name="surface" />
                                        <p>You have 100 of 100 characters remaining</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-sm-12 col-lg-7 col-xl-7 col-xxl-7">
                                    <div class="custom-input">
                                        <label>Instruction <abbr>(Optional)</abbr></label>
                                        <input type="text" name="surface" />
                                        <p>You have 200 of 200 characters remaining</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-sm-12 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="custom-input">
                                        <label>Sample Text <abbr>(Optional)</abbr></label>
                                        <input type="text" name="surface" />
                                        <p>You have 30 of 30 characters remaining</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-sm-12 col-lg-2 col-xl-2 col-xxl-2">
                                    <div class="values-increment-input">
                                        <label>Character Limit <abbr>*</abbr></label>
                                        <div class="input-main-div">
                                            <div class="input-elemnts">
                                                <input type="number" name="" placeholder="1" value="1" min="1" />
                                                <span>Min</span>
                                            </div>
                                            <div class="input-elemnts">
                                                <input type="number" name="" placeholder="200" value="200" min="1" max="200" />
                                                <span>Max</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-sm-12 col-lg-3 col-xl-3 col-xxl-3">
                                    <div class="custom-input">
                                        <label>Lines Of Text Allowed <abbr>*</abbr></label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected="">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="surface-customization new-text-add">
                        <div class="row mt-5">
                            <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="first-surface-start">
                                    <ul>
                                        <li><h6>3</h6></li>
                                        <li><i class="fas fa-pencil-alt"></i> Option Dropdown 1</li>
                                        <li>
                                            <a href="javavoid:;"><i class="fas fa-trash-alt"></i></a>
                                        </li>
                                        <li>
                                            <a href="javavoid:;" id="option-block-tab" class="icon-rotate"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="surface-custom-inner" id="option-block-tab-start">
                        <div class="img-information">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-option" />
                                <label class="form-check-label" for="flexCheckDefault-option">
                                    Make This Checkbox Require for Buyer
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5">
                                    <div class="custom-input">
                                        <label>label <abbr>*</abbr></label>
                                        <input type="text" name="surface" />
                                        <p>You have 100 of 100 characters remaining</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-sm-12 col-lg-7 col-xl-7 col-xxl-7">
                                    <div class="custom-input">
                                        <label>Instruction <abbr>(Optional)</abbr></label>
                                        <input type="text" name="surface" />
                                        <p>You have 200 of 200 characters remaining</p>
                                    </div>
                                </div>
                            </div>
                            <div class="table-section-images-option">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="option-set-display">
                                            <h4>Option List</h4>
                                            <ul>
                                                <li>
                                                    <a href="javavoid:;"><i class="fas fa-images"></i>Add Many Options</a>
                                                </li>
                                                <li>
                                                    <a href="javavoid:;"><i class="fad fa-image"></i>Add Options</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Order</th>
                                                    <th scope="col">Option Name <span>*</span></th>
                                                    <th scope="col">Thumbnail</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Price Difference</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>
                                                        <input type="text" name="option" placeholder="Option 1" />
                                                        <p>You have 22 of 30 characters remaining</p>
                                                    </td>
                                                    <td>
                                                        <div class="camer-input">
                                                            <i class="fas fa-camera"></i>
                                                            <input type="file" name="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="camer-input">
                                                            <i class="fas fa-camera"></i>
                                                            <input type="file" name="" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon1">$+</span>
                                                            <input type="text" class="form-control" placeholder="0.00" aria-label="Username" aria-describedby="basic-addon1" />
                                                        </div>
                                                    </td>
                                                    <td><i class="fas fa-trash"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="surface-customization new-text-add">
                        <div class="row mt-5">
                            <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                                <div class="first-surface-start">
                                    <ul>
                                        <li><h6>4</h6></li>
                                        <li><i class="fas fa-pencil-alt"></i> Image 1</li>
                                        <li>
                                            <a href="javavoid:;"><i class="fas fa-trash-alt"></i></a>
                                        </li>
                                        <li>
                                            <a href="javavoid:;" id="image-block-tab" class="icon-rotate"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="surface-custom-inner" id="image-block-tab-start">
                        <div class="img-information">
                            <h2>Placement</h2>
                            <h6>Set where this customization is located on the preview</h6>
                            <h2>Image Customizatoin</h2>
                            <h6>Enter the Specifics for the image</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-image" />
                                <label class="form-check-label" for="flexCheckDefault-image">
                                    Make This Checkbox Require for Buyer
                                </label>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5">
                                    <div class="custom-input">
                                        <label>label <abbr>*</abbr></label>
                                        <input type="text" name="surface" />
                                        <p>You have 100 of 100 characters remaining</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-sm-12 col-lg-7 col-xl-7 col-xxl-7">
                                    <div class="custom-input">
                                        <label>Instruction <abbr>(Optional)</abbr></label>
                                        <input type="text" name="surface" />
                                        <p>You have 200 of 200 characters remaining</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                                    <div class="row">
                                        <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="values-increment-input">
                                                <label>Position <abbr>*</abbr></label>
                                                <div class="input-main-div">
                                                    <div class="input-elemnts">
                                                        <input type="number" name="" value="100" />
                                                        <span>X</span>
                                                    </div>
                                                    <div class="input-elemnts">
                                                        <input type="number" name="" value="200" />
                                                        <span>Y</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-input mt-3">
                                                <label>Center design <abbr>*</abbr></label>
                                                <div class="values-increment-input">
                                                    <div class="size_select mt-md-3">
                                                        <ul class="p-0 m-0">
                                                            <li>
                                                                <input type="radio" id="size_xs" name="size" />
                                                                <label for="size_xs"><img src="{{asset('admin/images/horizental.png')}}" class="img-fluid" alt="img" /></label>
                                                                <span>Horizontally</span>
                                                            </li>
                                                            <li>
                                                                <input type="radio" id="size_s" name="size" />
                                                                <label for="size_s"> <img src="{{asset('admin/images/vertical.png')}}" class="img-fluid" alt="img" /></label>
                                                                <span>Vertically</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="values-increment-input">
                                                <label>Size <abbr>*</abbr></label>
                                                <div class="input-main-div">
                                                    <div class="input-elemnts">
                                                        <input type="number" name="" />
                                                        <span>Width</span>
                                                    </div>
                                                    <div class="input-elemnts">
                                                        <input type="number" name="" />
                                                        <span>Height</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="preview-wrapper">
                                        <div class="img-canvas">
                                            <canvas id="canvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}
                    <div class="remaining-surface">
                        <button data-bs-toggle="modal" data-bs-target="#remains">Add Surface</button>
                        <p>You have 4 of 5 surfaces remaining</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="last-section-elizer">
        <a id="open-preview-modal" class="btn btn-secondary">Preview</a>
        <a href="javavoid:;" class="btn btn-primary">Save</a>
    </div>
    <div class="modal fade" id="remains" tabindex="-1" aria-labelledby="remainsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Customization</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="custom-check">
                                <input type="radio" id="text" name="flexRadioDefault" />
                                <span class="check-icon"></span>
                                <label for="text">
                                    <h4>Text</h4>
                                    <p>Trailers for all types of towing vehicles, including SUVs and pickups.</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="custom-check">
                                <input type="radio" id="data" name="flexRadioDefault" />
                                <span class="check-icon"></span>
                                <label for="data">
                                    <h4>Data</h4>
                                    <p>Trailers for all types of towing vehicles, including SUVs and pickups.</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="custom-check">
                                <input type="radio" id="drop" name="flexRadioDefault" />
                                <span class="check-icon"></span>
                                <label for="drop">
                                    <h4>Option Dropdown</h4>
                                    <p>Trailers for all types of towing vehicles, including SUVs and pickups.</p>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="custom-check">
                                <input type="radio" id="img" name="flexRadioDefault" />
                                <span class="check-icon"></span>
                                <label for="img">
                                    <h4>Image</h4>
                                    <p>Trailers for all types of towing vehicles, including SUVs and pickups.</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal">Add Customisation</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-fonts" tabindex="-1" aria-labelledby="add-fontsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Fonts</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Standard fonts</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Custom fonts</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Added</th>
                                        <th scope="col">Font Name</th>
                                        <th scope="col">Sample</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($fonts as $key => $font)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input font-check" type="checkbox" data-id="{{$font->id}}" value="{{$font->name}}" id="flexfont{{$font->id}}" {{in_array($font->id,$product_font)?'checked':''}}/>
                                            </div>
                                        </td>
                                        <td>{{$font->name}}</td>
                                        <td style="font-family: '{{$font->name}}';">Almost before we knew it, we had left the ground.</td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                            <!-- <div class="pagination">
                                <ul>
                                    <li>
                                        <a href="javavoid:;" class="active"><i class="fas fa-chevron-double-left"></i></a>
                                    </li>
                                    <li><a href="javavoid:;">1</a></li>
                                    <li><a href="javavoid:;">2</a></li>
                                    <li><a href="javavoid:;">3</a></li>
                                    <li><a href="javavoid:;">4</a></li>

                                    <li>
                                        <a href="javavoid:;"><i class="fas fa-chevron-double-right"></i></a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="custom-font-box">
                                <p>
                                    We accept .WOFF or .TTF files that are set to 'Installable'. Fonts, like images or software, may require you to purchase licensing rights in order to use them. View your file's properties or check with
                                    your font provider to determine whether your file is set to 'Installable'.
                                </p>
                                <a id="add-new-fonts" style="cursor: pointer;"><i class="fas fa-plus"></i> Add Fonts</a>
                                <div class="font-file">
                                    
                                    <form id="font-form" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="custom-input">
                                            <label>Font File <span>*</span></label>
                                            <div class="inner-file-box-body">
                                                <input type="file" id="font-input" name="fontFile" accept=".ttf,.woff"/>
                                                <h5><i class="fas fa-file"></i>choose or drag a file to upload</h5>
                                            </div>
                                        </div>
                                        <div class="custom-input">
                                            <label>Name <span>*</span></label>
                                            <input type="text" name="name" placeholder="Enter Font Name" name="fontFileText" id="fontFileText" />
                                            <p>You have 40 of 40 characters remaining</p>
                                        </div>
                                    </form>
                                    
                                    <div class="font-file-button">
                                        <a id="cancel-upload" style="cursor:pointer;">Cancel</a>
                                        <a id="add-font-upload" style="cursor:pointer;">Add Font</a>
                                    </div>
                                </div>
                            </div>
                            <table class="table accept-fonts">
                                <thead>
                                    <tr>
                                        <th scope="col">Added</th>
                                        <th scope="col">Font Name</th>
                                        <th scope="col">Sample</th>
                                    </tr>
                                </thead>
                                <tbody id="font-file-modal">
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tags-box">
                        <h4>Fonts available to your customers</h4>
                        <div class="tags-box-body">
                            <ul id="font-list">
                                @foreach($fonts as $font)
                                @if(in_array($font->id,$product_font))
                                <li id="remove_font{{$font->id}}" style="font-family: {{$font->name}};">{{$font->name}}<i class="fas fa-times remove_font" data-font_id="{{$font->id}}"></i></li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                        <p>2 of 20 fonts added</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="font-done" data-bs-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-color" tabindex="-1" aria-labelledby="add-colorLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Customization</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="vue-color-picker">
                        <div class="vue-color-picker-container">
                            <div id="vue_chrome_picker">
                                <chrome-color v-model="color"></chrome-color>
                            </div>
                            <div class="custom-input">
                                <label>Color Name</label>
                                <input type="hidden" name="record_id" id="record_id">
                                <input type="text" name="color" id="color-name" placeholder="Enter Color Name" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="color-submit">Add Customisation</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="preview" tabindex="-1" aria-labelledby="previewLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewLabel">Buyer Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-evenly">
                        <div>
                            <div class="img-canvas">
                                @if($product_customization && $product_customization->image)
                                <canvas id="canvas2" class="canvas-image-custom" style="display:none;"></canvas>
                                <img class="canvas-default" src="{{asset($product_customization->image)}}" style="display:block;">
                                @else
                                <canvas id="canvas2" class="canvas-image-custom" style="display:block;"></canvas>
                                <img class="canvas-default" src="{{asset($product_customization->image??'')}}" style="display:none;">
                                @endif
                            </div>
                            <p id="preview-canvas-text">bajajfjksf</p>
                        </div>
                        <div class="border-set">
                            <div class="preview-left">
                                <h3 id="modal-font-label">Font Name</h3>
                                <h6 id="modal-font-instruction">Roboto</h6>
                                <div class="custom-input">
                                    <select id="select-font-preview" aria-label="Default select example">
                                        
                                    </select>
                                </div>
                                <div class="colors_select">
                                    <div class="d-flex">
                                        <h5 id="modal-color-label">Colors:</h5>
                                        <span class="color-span">Green</span>
                                    </div>
                                    <h6 id="modal-color-instruction">Roboto</h6>
                                    <ul id="color-select-list">
                                        <li>
                                            <input type="radio" id="white" name="color_select" />
                                            <label style="background-color: #fff;" for="white"><i class="fas fa-check"></i></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="custom-input">
                                    <label><span>*</span>Line 1</label>
                                    <input type="text" name="name" />
                                    <p>200 character limits</p>
                                </div>
                                <div class="custom-input">
                                    <label><span>*</span>Line 2</label>
                                    <input type="text" name="name" />
                                    <p>200 character limits</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
@section('css')

<link href="{{asset('admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/css/bootstrap.css.map')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/css/bootstrap.min.css.map')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/css/animate.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="icon" href="{{asset('admin/images/fav-icon.png')}}" type="image/png" sizes="">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
<link rel="stylesheet" href="{{asset('admin/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/slick/slick.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/slick-theme.css')}}" />
<link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
<link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('admin/css/colorpicker.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<style type="text/css">
@foreach($fonts as $font)

@font-face {

  font-family: "{{$font->name}}";

  src: url("{{asset($font->file)}}");

}
@endforeach

</style>

@endsection
@section('js')
<script src="{{asset('admin/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js.map')}}"></script>
<script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>

<script type="text/javascript" src="{{asset('admin/slick/slick.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-color/2.8.1/vue-color.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="{{asset('admin/js/custom.js')}}"></script>
<script src="https://malsup.github.com/jquery.form.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script type="text/javascript">
    $("body").on("change" ,".font-check",function(){
        var name = $(this).val();
        var id = $(this).data("id");

        if ($(this).prop('checked')) {
            var add = 1;
            var element = '<li id="remove_font'+id+'" style="font-family: '+name+';">'+name+'<i class="fas fa-times remove_font" data-font_id="'+id+'"></i></li>';
            $("#font-list").append(element);
        } else{
            $("#remove_font"+id).remove()
            var add = 0;
        }
    });
    $("body").on("click" ,".remove_font",function(){
        var id = $(this).data('font_id');
        $("#flexfont"+id).attr("checked",false);
        $(this).parent("li").remove();
    });
    $("body").on("click" ,"#font-done",function(){
        var font_id = [];
        var element = '';
        $(".font-check").each(function(i,e){
            if ($(e).prop('checked')) {
                var id = $(e).data("id");
                font_id.push(id)
                element = element+'<li>\
                                <h4 style="font-family:'+$(e).val()+';">'+$(e).val()+'</h4>\
                                <a><i class="fas fa-times deleted-font-added" data-id="'+id+'"></i></a>\
                            </li>'
            }
        }).get();

        $("#font-added").html(element)
        $.ajax({
            dataType : 'json',
            type:'POST',
            url: "{{route('choose_font_product')}}",
            data: {add:1, font_id: font_id, product_id: {{$product->id}}, _token: '{{csrf_token()}}'},
            success: function (response) {
                if(response.status == 0) {
                    Swal.fire(response.message, '', 'error');
                }
            }
        });
    });
    $("body").on("click" ,".deleted-font-added",function(){
        var id = $(this).data("id")
        $(this).closest("li").remove();
        $("#flexfont"+id).attr("checked",false);
        $("#remove_font"+id).remove()
        $.ajax({
            dataType : 'json',
            type:'POST',
            url: "{{route('choose_font_product')}}",
            data: {add:0, font_id: id, product_id: {{$product->id}}, _token: '{{csrf_token()}}'},
            success: function (response) {
                if(response.status == 0) {
                    Swal.fire(response.message, '', 'error');
                }
            }
        });
    });
    $("body").on("click" ,"#add-new-fonts",function(){
        $(this).css("display","none")
        $(".font-file").css("display", "block");
    });
    $("body").on("click" ,"#cancel-upload",function(){
        $("#add-new-fonts").css("display","block")
        $(".font-file").css("display", "none");
    });
    $("body").on("click" ,"#add-font-upload",function(){
        $("#font-form").submit()
    });
    $('#font-form').submit(function(e) {
        e.preventDefault();
        if ($("#font-input").val() == '') {
            Swal.fire("Please Upload File!", '', 'error');
        } else if ($("#fontFileText").val() == '') {
            Swal.fire("Please fill file name!", '', 'error');
        } else{
            let formData = new FormData(this);
            $.ajax({
                dataType : 'json',
                type:'POST',
                url: "{{route('add_font')}}",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if(response.status == 1) {
                        document.getElementById("font-form").reset();
                        Swal.fire(response.message, '', 'success');
                        
                        var element2 = '<style type="text/css">\
                                            @font-face {\
                                                font-family: "'+response.name+'";\
                                                src: url("'+document.location.origin+'/'+response.path+'");\
                                            }\
                                        </style>';
                        $("head").append(element2);
                        var element = '<li id="remove_font'+response.id+'" style="font-family: '+response.name+';">'+response.name+'<i class="fas fa-times remove_font" data-font_id="'+response.id+'"></i></li>';
                        $("#font-list").append(element);
                        var fontElement = '<tr>\
                                            <td>\
                                            <div class="form-check">\
                                                <input class="form-check-input font-check" type="checkbox" data-id="'+response.id+'" value="'+response.name+'" id="flexfont'+response.id+'" checked/>\
                                            </div>\
                                            </td>\
                                            <td>'+response.name+'</td>\
                                            <td style="font-family: '+response.name+';">Almost before we knew it, we had left the ground.</td>\
                                        </tr>';
                        $("#font-file-modal").append(fontElement);
                    }else{
                        Swal.fire(response.message, '', 'error');
                    }
                }
            });
        }
    });

    $("body").on("click" ,"#open-preview-modal",function(){
        $("#modal-color-label").text($("#color-label").val())
        $("#modal-color-instruction").text($("#color-instruction").val())
        $("#modal-font-label").text($("#font-label").val())
        $("#modal-font-instruction").text($("#font-instruction").val())
        var element = '';
        $("#font-added").find('h4').each(function(i,e){
            element = element + '<option style="font-family: '+$(e).text()+';" value="'+$(e).text()+'">'+$(e).text()+'</option>';
        }).get();
        var element2 = '';
        var flag = 'checked';
        $("#color-added-list").find('li').each(function(i,e){

            var color = $(e).find('div').attr('style');
            var name = $(e).find('h4').text();
            element2 = element2 + '<li>\
                                        <input type="radio" class="select-color" '+flag+' id="'+name+'" name="color_select" />\
                                        <label style="'+color+'" for="'+name+'"><i class="fas fa-check"></i></label>\
                                    </li>';
            if (flag == 'checked') {
                $(".color-span").text(name)
            }
            flag = '';
        }).get();
        $("#color-select-list").html(element2)
        $("#select-font-preview").html(element)
        $("#preview").modal("show");
    });
    $("body").on("change" ,".select-color",function(){
        $(".color-span").text($(this).attr('id'))
    });
    $("body").on("change" ,"#select-font-preview",function(){
        var font = $(this).find(":selected").text();
        $("#select-font-preview").css("font-family" , font)
        $("#preview-canvas-text").css("font-family" , font)
    });

    $("#upload-file").on("change", function() {
        let form = document.getElementById('image-form');
        let formData = new FormData(form);
        $.ajax({
            dataType : 'json',
            type:'POST',
            url: "{{route('product_detail_customization')}}",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if(response.status == 1) {
                    console.log(response.path)
                    $(".image-upload-set-here").css('display','none')
                    $(".image-upload-default").css('display','block')
                    $('.image-upload-default').attr('src','{{ asset('/') }}' + response.path)
                }else{
                    Swal.fire(response.message, '', 'error');
                }
            }
        });
    });
    $("body").on("change" ,".customization",function(){
        var name = $(this).attr('name')
        var value = $(this).val()
        $.ajax({
            dataType : 'json',
            type:'POST',
            url: "{{route('product_detail_customization')}}",
            data: {name:name, value:value, product_id: {{$product->id}}, _token: '{{csrf_token()}}'},
            success: function (response) {
                if(response.status == 0) {
                    Swal.fire(response.message, '', 'error');
                }
            }
        });
    });
    $("body").on("click" ,"#color-submit",function(){
        var name = $("#color-name").val();
        var color = $(".vc-input__input").val()
        if (name == '') {
            Swal.fire('Please name the color', '', 'error');
        } else{
            $.ajax({
                dataType : 'json',
                type:'POST',
                url: "{{route('add_color')}}",
                data: {name:name, color:color, product_id: {{$product->id}}, _token: '{{csrf_token()}}'},
                success: function (response) {
                    if(response.status == 0) {
                        Swal.fire(response.message, '', 'error');
                    } else{
                        var element = '<li>\
                                        <div class="color" style="background-color: '+color+';"></div>\
                                        <h4>'+name+'</h4>\
                                        <a class="edit-added-color" data-id="'+response.color_id+'" data-name="'+name+'" data-color="'+color+'">\
                                            <i class="fas fa-pencil"></i>\
                                        </a>\
                                        <a class="remove-added-color" data-name="'+name+'">\
                                            <i class="fas fa-times"></i>\
                                        </a>\
                                    </li>';
                        $("#color-added-list").append(element);
                        Swal.fire(response.message, '', 'success');
                        $('#add-color').modal('toggle');
                        $("#color-name").val('')
                    }
                }
            });
        }
    });
    $("body").on("change" ,".vc-input__input",function(){
        console.log("done")
    })
    $("body").on("click" ,".edit-added-color",function(){
        var name = $(this).data("name");
        var color = $(this).data("color");
        var record_id = $(this).data("id");
        $("#record_id").val(record_id);
        $("#color-name").val(name);
        $(".vc-input__input").trigger('value', color)
        var input = $('.vc-input__input').val(color);
        var e = document.createEvent('HTMLEvents');
        e.initEvent('input', true, true);
        input[0].dispatchEvent(e);
        $('#add-color').modal('show');
    })
    function hexToRgb(hex) {
      var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
      return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
      } : null;
    }
    $("body").on("click" ,".remove-added-color",function(){
        var name = $(this).data("name");
        var element = $(this);
        $.ajax({
            dataType : 'json',
            type:'POST',
            url: "{{route('remove_added_color')}}",
            data: {name:name, product_id: {{$product->id}}, _token: '{{csrf_token()}}'},
            success: function (response) {
                if(response.status == 0) {
                    Swal.fire(response.message, '', 'error');
                } else{
                    element.closest('li').remove()
                }
            }
        });
    });
    
</script>
@endsection


