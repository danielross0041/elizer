@extends('layouts.main')
@section('content')
<main>
    <section class="main-content-custom">
        <div class="container">
            <div class="custom-top-bar">
                <div class="row align-items-end">
                    <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                        <h4>Drag the mouse to create a rectangle</h4>
                        <div id = "canvasWrapper">
                            <canvas id="overlay" width=300 height=300></canvas>
                            <canvas id="canvas" width=300 height=300></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
@section('css')
<style type="text/css">
canvas{
  border: 1px solid red;
  position: absolute;
}
#canvasWrapper{
  position:relative;
}
</style>
@endsection
@section('js')
<script type="text/javascript">
    // get references to the canvas and context
var canvas = document.getElementById("canvas");
var overlay = document.getElementById("overlay");
var ctx = canvas.getContext("2d");
var ctxo = overlay.getContext("2d");

// style the context
ctx.strokeStyle = "blue";
ctx.lineWidth = 3;
ctxo.strokeStyle = "blue";
ctxo.lineWidth = 3;

// calculate where the canvas is on the window
// (used to help calculate mouseX/mouseY)
var $canvas = $("#canvas");
var canvasOffset = $canvas.offset();
var offsetX = canvasOffset.left;
var offsetY = canvasOffset.top;
var scrollX = $canvas.scrollLeft();
var scrollY = $canvas.scrollTop();

// this flage is true when the user is dragging the mouse
var isDown = false;

// these vars will hold the starting mouse position
var startX;
var startY;

var prevStartX = 0;
var prevStartY = 0;

var prevWidth  = 0;
var prevHeight = 0;

function handleMouseDown(e) {
    e.preventDefault();
    e.stopPropagation();

    // save the starting x/y of the rectangle
    startX = parseInt(e.clientX - offsetX);
    startY = parseInt(e.clientY - offsetY);

    // set a flag indicating the drag has begun
    isDown = true;
}

function handleMouseUp(e) {
    e.preventDefault();
    e.stopPropagation();

    // the drag is over, clear the dragging flag
    isDown = false;
    ctxo.strokeRect(prevStartX, prevStartY, prevWidth, prevHeight);
}

function handleMouseOut(e) {
    e.preventDefault();
    e.stopPropagation();

    // the drag is over, clear the dragging flag
    isDown = false;
}

function handleMouseMove(e) {
    e.preventDefault();
    e.stopPropagation();

    // if we're not dragging, just return
    if (!isDown) {
        return;
    }

    // get the current mouse position
    mouseX = parseInt(e.clientX - offsetX);
    mouseY = parseInt(e.clientY - offsetY);

    // Put your mousemove stuff here

    

    // calculate the rectangle width/height based
    // on starting vs current mouse position
    var width = mouseX - startX;
    var height = mouseY - startY;

        // clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // draw a new rect from the start position 
    // to the current mouse position
    ctx.strokeRect(startX, startY, width, height);
    
        prevStartX = startX;
        prevStartY = startY;

        prevWidth  = width;
        prevHeight = height;
}

// listen for mouse events
$("#canvas").mousedown(function (e) {
    handleMouseDown(e);
});
$("#canvas").mousemove(function (e) {
    handleMouseMove(e);
});
$("#canvas").mouseup(function (e) {
    handleMouseUp(e);
});

$("#canvas").mouseout(function (e) {
    handleMouseOut(e);
});
</script>
@endsection