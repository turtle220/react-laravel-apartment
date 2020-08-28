@extends('admin.admin')

@section('content')
    {{-- <form id="file-upload-form" class="uploader">
        <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
    
        <label for="file-upload" id="file-drag">
            <img id="file-image" src="#" alt="Preview" class="hidden">
            <div id="start">
                <i class="fa fa-download" aria-hidden="true"></i>
                <div>Select a Slide Image or drag here</div>
                <div id="notimage" class="hidden">Please select a Slide image</div>
                <span id="file-upload-btn" class="btn btn-primary">Select a Slide Image</span>
            </div>
            <div id="response" class="hidden">
                <div id="messages"></div>
                <progress class="progress" id="file-progress" value="0">
                <span>0</span>%
                </progress>
            </div>
        </label>
    </form> --}}

    <form action="{{ url('/home/Home') }}">
        <div style="display:flex; width:111%">
            <div style="display:block; width:27%; margin:0, auto; text-align:center;">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload4" name="slideimage1" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload4"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview4"  value="" style="border-radius:0%; margin-left:-60px; width:350px;height:200px; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ5OHM4aYsvhGYFelXHdW6Ov833noXFhzF1Ww&usqp=CAU);">
                        </div>
                        <p style="border-radius:0%; margin-left:-60px; width:350px;height:200px;">
                            Slide Image1
                        </p>
                    </div>
                </div>
            </div>
            <div style="display:block; width:31%; margin:0, auto; text-align:center;">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload5" name="slideimage2" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload5"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview5" style="border-radius:0%; margin-left:-60px; width:350px;height:200px; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ5OHM4aYsvhGYFelXHdW6Ov833noXFhzF1Ww&usqp=CAU);">
                        </div>
                        <p style="border-radius:0%; margin-left:-60px; width:350px;height:200px;">
                            Slide Image2
                        </p>
                    </div>
                </div>
            </div>
            <div style="display:block; width:30%; margin:0, auto; text-align:center;">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload6" name="slideimage3" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload6"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview6" style="border-radius:0%; margin-left:-60px; width:350px;height:200px; background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ5OHM4aYsvhGYFelXHdW6Ov833noXFhzF1Ww&usqp=CAU);">
                        </div>
                        <p style="border-radius:0%; margin-left:-60px; width:350px;height:200px;">
                            Slide Image3
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="display:flex;width:111%">
            <div style="display:block; width:30%; margin:0, auto; text-align:center;">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload1" name="clientimage1" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload1"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview1" style="background-image: url(https://image.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5377.jpg);">
                        </div>
                    </div>
                </div>
                <textarea placeholder="Testimonial Client1" name="client1" style="text-align:center;width:80%;" rows="20" name="comment[text]" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea><br>
                {{-- <textarea placeholder="Testimonial Client2" name="client2" style="text-align:center" rows="20" name="comment[text]" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea><br>
                <textarea placeholder="Testimonial Client3" name="client3" style="text-align:center" rows="20" name="comment[text]" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea><br>             --}}
            </div>
            <div style="display:block; width:30%; margin:0, auto; text-align:center;">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload2" name="clientimage2" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload2"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview2" style="background-image: url(https://image.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5377.jpg);">
                        </div>
                    </div>
                </div>
                <textarea placeholder="Testimonial Client2" name="client2" style="text-align:center;width:80%" rows="20" name="comment[text]" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea><br>
            </div>
            <div style="display:block; width:30%; margin:0, auto; text-align:center;">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload3" name="clientimage3" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload3"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview3" style="background-image: url(https://image.freepik.com/free-photo/beautiful-girl-stands-near-walll-with-leaves_8353-5377.jpg);">
                        </div>
                    </div>
                </div>
                <textarea placeholder="Testimonial Client3" name="client3" style="text-align:center;width:80%" rows="20" name="comment[text]" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea><br>            
            </div>
        </div>

        {{-- <div style="display:block; width:90%; margin:0, auto; text-align:center; margin-top:30px">
            <input type="file" name="clientImage" id="files1" style="display: none;" />
            <button type="button" style="width: 500px;heigth:400px;border-radius: 6px;" class="btn btn-secondary" onclick="files1.click();">Testimonial Client Image Upload</p></button>
        </div> --}}
        <div style="display:block;  width:100%; margin:0, auto; text-align:center; margin-top:50px">
            <button type="submit" style="width: 400px;heigth:200px; border-radius: 6px;" class="btn btn-secondary">Submit</button>
        </div>
    </form>
@endsection

<style>


/* h2 {margin-left: 55px;} */
.fa-tasks{
    margin-top:12px !important;
}
textarea {
  margin-top: 10px;
  margin-left: 50px;
  width: 500px;
  height: 100px;
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
  border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
  border-image: none;
  border-radius: 6px 6px 6px 6px;
  border-style: none solid solid none;
  border-width: medium 1px 1px medium;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
  color: #555555;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 1em;
  line-height: 1.4em;
  padding: 5px 8px;
  transition: background-color 0.2s ease 0s;
}

textarea:focus {
    background: none repeat scroll 0 0 #FFFFFF;
    outline-width: 0;
}

.avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
/* 
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);
@import url('https://fonts.googleapis.com/css?family=Roboto');
 .uploader {
	 display: block;
	 clear: both;
	 margin: 0 auto;
	 width: 100%;
	 max-width: 600px;
}
 .uploader label {
	 float: left;
	 clear: both;
	 width: 50%;
	 padding: 2rem 1.5rem;
	 text-align: center;
	 background: #fff;
	 border-radius: 7px;
	 border: 3px solid #eee;
	 transition: all 0.2s ease;
	 user-select: none;
}
 .uploader label:hover {
	 border-color: #454cad;
}
 .uploader label.hover {
	 border: 3px solid #454cad;
	 box-shadow: inset 0 0 0 6px #eee;
}
 .uploader label.hover #start i.fa {
	 transform: scale(0.8);
	 opacity: 0.3;
}
 .uploader #start {
	 float: left;
	 clear: both;
	 width: 100%;
}
 .uploader #start.hidden {
	 display: none;
}
 .uploader #start i.fa {
	 font-size: 50px;
	 margin-bottom: 1rem;
	 transition: all 0.2s ease-in-out;
}
 .uploader #response {
	 float: left;
	 clear: both;
	 width: 100%;
}
 .uploader #response.hidden {
	 display: none;
}
 .uploader #response #messages {
	 margin-bottom: 0.5rem;
}
 .uploader #file-image {
	 display: inline;
	 margin: 0 auto 0.5rem auto;
	 width: auto;
	 height: auto;
	 max-width: 180px;
}
 .uploader #file-image.hidden {
	 display: none;
}
 .uploader #notimage {
	 display: block;
	 float: left;
	 clear: both;
	 width: 100%;
}
 .uploader #notimage.hidden {
	 display: none;
}
 .uploader progress, .uploader .progress {
	 display: inline;
	 clear: both;
	 margin: 0 auto;
	 width: 100%;
	 max-width: 180px;
	 height: 8px;
	 border: 0;
	 border-radius: 4px;
	 background-color: #eee;
	 overflow: hidden;
}
 .uploader .progress[value]::-webkit-progress-bar {
	 border-radius: 4px;
	 background-color: #eee;
}
 .uploader .progress[value]::-webkit-progress-value {
	 background: linear-gradient(to right, #393f90 0%, #454cad 50%);
	 border-radius: 4px;
}
 .uploader .progress[value]::-moz-progress-bar {
	 background: linear-gradient(to right, #393f90 0%, #454cad 50%);
	 border-radius: 4px;
}
 .uploader input[type="file"] {
	 display: none;
}
 .uploader div {
	 margin: 0 0 0.5rem 0;
	 color: #5f6982;
}
 .uploader .btn {
	 display: inline-block;
	 margin: 0.5rem 0.5rem 1rem 0.5rem;
	 clear: both;
	 font-family: inherit;
	 font-weight: 700;
	 font-size: 14px;
	 text-decoration: none;
	 text-transform: initial;
	 border: none;
	 border-radius: 0.2rem;
	 outline: none;
	 padding: 0 1rem;
	 height: 36px;
	 line-height: 36px;
	 color: #fff;
	 transition: all 0.2s ease-in-out;
	 box-sizing: border-box;
	 background: #454cad;
	 border-color: #454cad;
	 cursor: pointer;
} */
 
</style>
