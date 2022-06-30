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
                                <img src="{{asset('admin/images/new-plat.png')}}" class="img-fluid" alt="img" />
                            </div>
                            <div class="col-8 col-md-8 col-sm-8 col-lg-9 col-xl-9 col-xxl-9">
                                <h3>File Name</h3>
                                <h6>(2x8)</h6>
                                <p>$33.99</p>
                                <ul>
                                    <li><span>ASIN:</span>b000asda</li>
                                    <li><span>SKU:</span>b000asda</li>
                                </ul>
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
                                        <input type="text" name="surface" />
                                        <p>You have 91 of 100 characters remaining</p>
                                    </div>
                                    <div class="custom-input">
                                        <label>Instruction <abbr>(Optional)</abbr></label>
                                        <textarea placeholder="instruction"></textarea>
                                        <p>You have 200 of 200 characters remaining</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                                    <div class="custom-file">
                                        <label>Preview Image</label>
                                        <div class="upload-file-body">
                                            <input type="file" id="upload-file" placeholder="" />
                                            <!-- <input type="file" name=""> -->
                                            <i class="fas fa-image"></i>
                                            <p>Drag or upload square image</p>
                                            <ul>
                                                <li>Min: 400x400px</li>
                                                <li>JPEG or PNG</li>
                                                <li>Max Size: 3 MB</li>
                                            </ul>
                                        </div>
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
                                <div class="added-fonts-color">
                                    <h2>Fonts Added</h2>
                                    <h6>Add preview image for this surface</h6>
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-12 col-sm-12 col-lg-8 col-xl-8 col-xxl-8">
                                            <div class="added-body">
                                                <ul>
                                                    <li>
                                                        <h4>Lato</h4>
                                                        <h5>Default</h5>
                                                        <a href="javavoid:;"><i class="fas fa-times"></i></a>
                                                    </li>
                                                    <li>
                                                        <h4>Roboto</h4>
                                                        <a href="javavoid:;"><i class="fas fa-times"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
                                            <button data-bs-toggle="modal" data-bs-target="#add-fonts">Add Fonts</button>
                                        </div>
                                    </div>
                                    <p>2 of 20 fonts added</p>
                                </div>
                                <hr />
                                <h2>Colors</h2>
                                <h6>Add preview image for this surface</h6>
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
                                <div class="added-fonts-color">
                                    <h2>Colors Added</h2>
                                    <h6>Add preview image for this surface</h6>
                                    <div class="row align-items-center">
                                        <div class="col-12 col-md-12 col-sm-12 col-lg-8 col-xl-8 col-xxl-8">
                                            <div class="added-body">
                                                <ul>
                                                    <li>
                                                        <div class="color"></div>
                                                        <h4>black</h4>
                                                        <h5>Default</h5>
                                                        <a href="javavoid:;"><i class="fas fa-pencil"></i></a><a href="javavoid:;"><i class="fas fa-times"></i></a>
                                                    </li>
                                                    <li>
                                                        <div class="color-fff"></div>
                                                        <h4>White</h4>
                                                        <h5>Default</h5>
                                                        <a href="javavoid:;"><i class="fas fa-pencil"></i></a><a href="javavoid:;"><i class="fas fa-times"></i></a>
                                                    </li>
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
                                                        <canvas id="canvas"></canvas>
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
                    <div class="remaining-surface">
                        <button data-bs-toggle="modal" data-bs-target="#remains">Add Surface</button>
                        <p>You have 4 of 5 surfaces remaining</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" />
                                            </div>
                                        </td>
                                        <td>Roboto</td>
                                        <td>Almost before we knew it, we had left the ground.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2" />
                                            </div>
                                        </td>
                                        <td>Lato</td>
                                        <td>Almost before we knew it, we had left the ground.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6" />
                                            </div>
                                        </td>
                                        <td>Inter</td>
                                        <td>Almost before we knew it, we had left the ground.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3" />
                                            </div>
                                        </td>
                                        <td>Poppins</td>
                                        <td>Almost before we knew it, we had left the ground.</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5" />
                                            </div>
                                        </td>
                                        <td>Montserrat</td>
                                        <td>Almost before we knew it, we had left the ground.</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="custom-font-box">
                                <p>
                                    We accept .WOFF or .TTF files that are set to 'Installable'. Fonts, like images or software, may require you to purchase licensing rights in order to use them. View your file's properties or check with
                                    your font provider to determine whether your file is set to 'Installable'.
                                </p>
                                <a href="javavoid:;" id="add-new-fonts"><i class="fas fa-plus"></i> Add Fonts</a>
                                <div class="font-file">
                                    <div class="custom-input">
                                        <label>Font File <span>*</span></label>
                                        <div class="inner-file-box-body">
                                            <input type="file" name="" />
                                            <h5><i class="fas fa-file"></i>choose or drag a file to upload</h5>
                                        </div>
                                    </div>
                                    <div class="custom-input">
                                        <label>Name <span>*</span></label>
                                        <input type="text" name="name" placeholder="Enter Font Name" />
                                        <p>You have 40 of 40 characters remaining</p>
                                    </div>
                                    <div class="font-file-button">
                                        <a href="javavoid:;">Cancel</a>
                                        <a href="javavoid:;">Add Font</a>
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
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4" />
                                            </div>
                                        </td>
                                        <td>----</td>
                                        <td>----</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tags-box">
                        <h4>Fonts available to your customers</h4>
                        <div class="tags-box-body">
                            <ul>
                                <li>Lato<i class="fas fa-times"></i></li>
                                <li>Roboto<i class="fas fa-times"></i></li>
                            </ul>
                        </div>
                        <p>2 of 20 fonts added</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-bs-dismiss="modal">Done</button>
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
                                <input type="text" name="text" placeholder="Enter Color Name" />
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
@endsection