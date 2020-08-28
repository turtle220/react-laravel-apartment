<!doctype html>

<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">

    <title>Apartment</title>

    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/selectFX/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="{{asset('css/icheck-material.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('css/icheck-material- custom.min.css')}}"> -->
    <!--     <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>-->

    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <!-- url ajax -->
    <input type="hidden" id="user-setrole" value="{{url('user/setrole')}}">
    <input type="hidden" id="invoicelist-pdf" value="{{url('/invoicelist/pdf')}}">
    <input type="hidden" id="area-store" value="{{url('/area/store')}}">
    <input type="hidden" id="BookingTickets-show" value="{{url('/BookingTickets/show?BTicketId=')}}">
    <input type="hidden" id="BookingTickets-edit" value="{{url('/BookingTickets/edit?BTicketId=')}}">
    <input type="hidden" id="BookingTickets-save" value="{{url('/BookingTickets/save?BTicketId=')}}">
    <input type="hidden" id="BookingTickets-resave" value="{{url('/BookingTickets/resave')}}">
    <input type="hidden" id="BookingTickets-search" value="{{url('BookingTickets/search')}}">
    <input type="hidden" id="getuserlistajax" value="{{ url('/getuserlistajax')}}">
    <input type="hidden" id="setcheck1" value="{{url('/invoice/setcheck')}}">
    <input type="hidden" id="setcheck" value="{{url('/BookingTickets/setcheck')}}">
    <input type="hidden" id="getuserlistajax" value="{{url('/getuserlistajax')}}">
    <input type="hidden" id="carstore" value="{{url('/car/store')}}">

    <!-- MSG TEXT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> --}}
 
    <!-- successMsg errorMsg-->
    <input type="hidden" id="successmsg" value="{{__('custom.successmsg')}}">
    <input type="hidden" id="existUserName" value="{{__('custom.existUserName')}}">
    <input type="hidden" id="required" value="{{__('custom.required')}}">
    <input type="hidden" id="successMsg" value="{{__('custom.successMsg')}}">
    <input type="hidden" id="errorMsg" value="{{__('custom.errorMsg')}}">
    <input type="hidden" id="all1" value="{{url('/invoice/allcheck')}}">
    <input type="hidden" id="allcheck" value="{{url('/BookingTickets/allcheck')}}">
</head>

<body>

    <style type="text/css">
        .alert-success {
            position: fixed;
            right: 0px;
            top: 10px;
            z-index: 20;
        }

        .ajax-alert {
            display: none;
        }

        .alert-danger {
            position: fixed;
            right: 0px;
            top: 10px;
            z-index: 20;
        }

    </style>

    <div class="alert alert-success ajax-alert alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> .
    </div>

    @if(session('success'))

    <script type="text/javascript">
        $(document).ready(function() {
            toastr['success']('Success: Your process has done sucessfully!');
        })

    </script>

    @endif

    @if(session('error'))

    <script type="text/javascript">
        $(document).ready(function() {
            toastr['error']('Error: please try again later on.');
        })

    </script>

    @endif

    @yield('modals')

    <div class="loading-overlay">
        <div id="fountainG">
            <div id="fountainG_1" class="fountainG"></div>
            <div id="fountainG_2" class="fountainG"></div>
            <div id="fountainG_3" class="fountainG"></div>
            <div id="fountainG_4" class="fountainG"></div>
            <div id="fountainG_5" class="fountainG"></div>
            <div id="fountainG_6" class="fountainG"></div>
            <div id="fountainG_7" class="fountainG"></div>
            <div id="fountainG_8" class="fountainG"></div>
        </div>
    </div>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/home') }}">Apartment</a>
                <a class="navbar-brand hidden" href="{{ url('/') }}">I</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/home') }}"> <i class="menu-icon fa fa-ticket"></i>Home</a>
                    </li>

                    {{-- Booking Ticket Management --}}
                    {{-- @if(Auth::user()->role == 1 || Auth::user()->role == 2 || Auth::user()->role == 3)
                    <li>
                        <a href="{{ url('/') }}"> <i class="menu-icon fa fa-ticket"></i>{{__('custom.ticket')}}</a>
                    </li>
                    @endif --}}

                    {{-- Invoice List --}}
                    {{-- @if(Auth::user()->role == 1)
                    <li>
                        <a href="{{ url('invoice') }}"> <i class="menu-icon fa fa-tag"></i>{{__('custom.titleinvoice')}}</a>
                    </li>
                    @endif --}}
                    
                    {{-- Generar Hoja de Ruta en Excel --}}
                    {{-- @if(Auth::user()->role == 1 || Auth::user()->role == 2)
                    <li>
                        <a href="{{ url('excel') }}"> <i class="menu-icon fa fa-table"></i>{{__('custom.generateroadmapinexcel')}}</a>
                    </li>
                    @endif --}}

                    {{-- usermanagement --}}
                    {{-- @if(Auth::user()->role == 1)
                    <li>
                        <a href="{{ url('users') }}"> <i class="menu-icon fa fa-users"></i>{{__('custom.usermanagement')}}</a>
                    </li>
                    @endif --}}
                </ul>
            </div>
            {{-- .navbar-collapse --}}
        </nav>
    </aside>
    {{-- /#left-panel --}}

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>
                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="content mt-3">
            <iframe id="my_iframe" style="display:none;"></iframe>
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
    @yield('scripts')
  
    <script>

        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview1').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview1').hide();
                    $('#imagePreview1').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload1").change(function() {
            readURL1(this);
        });
        function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview2').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview2').hide();
                    $('#imagePreview2').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload2").change(function() {
            readURL2(this);
        });
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview3').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview3').hide();
                    $('#imagePreview3').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload3").change(function() {
            readURL3(this);
        });
        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview4').css('background-image', 'url('+ e.target.result +')');
                    $('#imagePreview4').hide();
                    $('#imagePreview4').fadeIn(650);
                    // $('#imagePreview4').val(e.target.result);
                    // $('#imageUpload4').val(e.target.result);
                    // console.log("imagepath",e.target.result);
                    // var imageupload = e.target.result;
                    // console.log("imageupload", document.getElementById('imageUpload4'));
                    // document.getElementById("imageUpload4").name = e.target.result;
                    // var field = document.getElementById('imageUpload4');
                    // field.innerHTML = e.target.result;
                    // console.log("field",field)
                    // console.log(e.target.result);
                    // $.ajax({
                    //     url: "{{ url('/home/Home')}}",
                    //     type: "GET",
                    //     data: {
                    //         slide1: name: e.target.result
                    //     },
                    //     success: function(data) {
                    //         console.log('suscessful', data);
                    //     }
                    // });
                }   
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload4").change(function() {
            readURL4(this);
        });
        
        // console.log(document.getElementById('imagePreview4').value);
        // console.log(document.getElementById('imagePreview4').value);
        function readURL5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview5').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview5').hide();
                    $('#imagePreview5').fadeIn(650);

                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload5").change(function() {
            readURL5(this);
        });
        function readURL6(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview6').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview6').hide();
                    $('#imagePreview6').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageUpload6").change(function() {
            readURL6(this);
        });

    // File Upload 
    // function ekUpload(){
    //     function Init() {

    //         console.log("Upload Initialised");

    //         var fileSelect    = document.getElementById('file-upload'),
    //             fileDrag      = document.getElementById('file-drag'),
    //             submitButton  = document.getElementById('submit-button');

    //         fileSelect.addEventListener('change', fileSelectHandler, false);

    //         // Is XHR2 available?
    //         var xhr = new XMLHttpRequest();
    //         if (xhr.upload) {
    //         // File Drop
    //         fileDrag.addEventListener('dragover', fileDragHover, false);
    //         fileDrag.addEventListener('dragleave', fileDragHover, false);
    //         fileDrag.addEventListener('drop', fileSelectHandler, false);
    //         }
    //     }

    //     function fileDragHover(e) {
    //         var fileDrag = document.getElementById('file-drag');

    //         e.stopPropagation();
    //         e.preventDefault();

    //         fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
    //     }

    //     function fileSelectHandler(e) {
    //         // Fetch FileList object
    //         var files = e.target.files || e.dataTransfer.files;

    //         // Cancel event and hover styling
    //         fileDragHover(e);

    //         // Process all File objects
    //         for (var i = 0, f; f = files[i]; i++) {
    //         parseFile(f);
    //         uploadFile(f);
    //         }
    //     }

    //     // Output
    //     function output(msg) {
    //         // Response
    //         var m = document.getElementById('messages');
    //         m.innerHTML = msg;
    //     }

    //     function parseFile(file) {

    //         console.log(file.name);
    //         output(
    //         '<strong>' + encodeURI(file.name) + '</strong>'
    //         );

    //         var imageName = file.name;

    //         var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
    //         if (isGood) {
    //             document.getElementById('start').classList.add("hidden");
    //             document.getElementById('response').classList.remove("hidden");
    //             document.getElementById('notimage').classList.add("hidden");
    //             // Thumbnail Preview
    //             document.getElementById('file-image').classList.remove("hidden");
    //             document.getElementById('file-image').src = URL.createObjectURL(file);
    //         }
    //         else {
    //             document.getElementById('file-image').classList.add("hidden");
    //             document.getElementById('notimage').classList.remove("hidden");
    //             document.getElementById('start').classList.remove("hidden");
    //             document.getElementById('response').classList.add("hidden");
    //             document.getElementById("file-upload-form").reset();
    //         }
    //     }

    //     function setProgressMaxValue(e) {
    //         var pBar = document.getElementById('file-progress');

    //         if (e.lengthComputable) {
    //         pBar.max = e.total;
    //         }
    //     }

    //     function updateFileProgress(e) {
    //         var pBar = document.getElementById('file-progress');

    //         if (e.lengthComputable) {
    //             pBar.value = e.loaded;
    //         }
    //     }

    //     function uploadFile(file) {

    //     var xhr = new XMLHttpRequest(),
    //     fileInput = document.getElementById('class-roster-file'),
    //     pBar = document.getElementById('file-progress'),
    //     fileSizeLimit = 1024; // In MB
    //     if (xhr.upload) {
    //         // Check if file is less than x MB
    //         if (file.size <= fileSizeLimit * 1024 * 1024) {
    //             // Progress bar
    //             pBar.style.display = 'inline';
    //             xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
    //             xhr.upload.addEventListener('progress', updateFileProgress, false);

    //             // File received / failed
    //             xhr.onreadystatechange = function(e) {
    //                 if (xhr.readyState == 4) {
    //                     // Everything is good!

    //                     // progress.className = (xhr.status == 200 ? "success" : "failure");
    //                     // document.location.reload(true);
    //                 }
    //             };

    //             // Start upload
    //             xhr.open('POST', document.getElementById('file-upload-form').action, true);
    //             xhr.setRequestHeader('X-File-Name', file.name);
    //             xhr.setRequestHeader('X-File-Size', file.size);
    //             xhr.setRequestHeader('Content-Type', 'multipart/form-data');
    //             xhr.send(file);
    //             } else {
    //                 output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
    //             }
    //         }
    //     }

    //     // Check for the various File API support.
    //     if (window.File && window.FileList && window.FileReader) {
    //         Init();
    //     } else {
    //         document.getElementById('file-drag').style.display = 'none';
    //     }
    // }
    // ekUpload();
    
    </script>
</body>

</html>
