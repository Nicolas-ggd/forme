<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/public/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/public/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

    <link rel="stylesheet" href="/public/plugins/bs-stepper/css/bs-stepper.min.css">

    <link rel="stylesheet" href="/public/plugins/dropzone/min/dropzone.min.css">

    <link rel="stylesheet" href="/public/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="/public/dist/css/adminlte.min.css?v=3.2.0">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- Navbar -->
    <?php require 'admin/view/components/Header.php'; ?>
    <!-- Navbar -->

    <!-- Side Navbar -->
    <?php require 'admin/view/components/SideNavbar.php'; ?>
    <!-- Side Navbar -->

    <div class="content-wrapper" style="min-height: 1602px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>პროფილი</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">მთავარი</a></li>
                            <li class="breadcrumb-item active">მომხმარებლის პროფილი</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                         src="/public/dist/img/user4-128x128.jpg" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center"><?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] . ' ' . $_SESSION['user_lastname'] : 'user'; ?></h3>
                                <p class="text-muted text-center">future self-made millionare</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Followers</b> <a class="float-right">XXX</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Following</b> <a class="float-right">XXX</a>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                            </div>

                        </div>


                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">შესახებ</h3>
                            </div>

                            <div class="card-body">
                                <strong><i class="bi bi-envelope"></i> იმეილი</strong>
                                <p class="text-muted">
                                    <?php echo isset($_SESSION['user_email']) ? $_SESSION['user_email'] : 'user'; ?>
                                </p>
                                <hr>
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> ლოკაცია</strong>
                                <p class="text-muted">Malibu, California</p>
                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1"></i> უნარები</strong>
                                <p class="text-muted">
                                    <span class="tag tag-danger"></span>

                                </p>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link" href="#timeline"
                                                            data-toggle="tab">დროის ხაზი</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">პარამეტრები</a>
                                    <li class="nav-item"><a class="nav-link" href="#aboutme"
                                                            data-toggle="tab">შესახებ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body ">
                                <div class="tab-content">

                                    <div class="tab-pane" id="timeline">

                                        <div class="timeline timeline-inverse">

                                            <div class="time-label">
                                                <span class="bg-danger">
                                                    10 Feb. 2014
                                                </span>
                                            </div>


                                            <div>
                                                <i class="fas fa-envelope bg-primary"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 12:05</span>
                                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an
                                                        email</h3>
                                                    <div class="timeline-body">
                                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo
                                                        kaboodle
                                                        quora plaxo ideeli hulu weebly balihoo...
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div>
                                                <i class="fas fa-user bg-info"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>
                                                    <h3 class="timeline-header border-0"><a href="#">Sarah Young</a>
                                                        accepted your friend request
                                                    </h3>
                                                </div>
                                            </div>


                                            <div>
                                                <i class="fas fa-comments bg-warning"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>
                                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on
                                                        your post</h3>
                                                    <div class="timeline-body">
                                                        Take me to your leader!
                                                        Switzerland is small and neutral!
                                                        We are more like Germany, ambitious and misunderstood!
                                                    </div>
                                                    <div class="timeline-footer">
                                                        <a href="#" class="btn btn-warning btn-flat btn-sm">View
                                                            comment</a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="time-label">
                                                <span class="bg-success">
                                                    3 Jan. 2014
                                                </span>
                                            </div>

                                            <div>
                                                <i class="fas fa-camera bg-purple"></i>
                                                <div class="timeline-item">
                                                    <span class="time"><i class="far fa-clock"></i> 2 days ago</span>
                                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new
                                                        photos</h3>

                                                </div>
                                            </div>

                                            <div>
                                                <i class="far fa-clock bg-gray"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane active" id="settings">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">სახელი</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName"
                                                           placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">გვარი</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName"
                                                           placeholder="Lastname">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">იმეილი</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail"
                                                           placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience"
                                                       class="col-sm-2 col-form-label">პაროლი</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="inputEmail"
                                                           placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience"
                                                       class="col-sm-2 col-form-label">განმეორებითი პაროლი</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="inputEmail"
                                                           placeholder="Re-enter Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> ვეთანხმები საიტის წესებს

                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">გაგზავნა</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="aboutme">
                                        <form class="form-horizontal">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">პროფილის ფოტოს
                                                    ატვირთვა</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="fileToUpload"
                                                           id="fileToUpload"
                                                           placeholder="Image">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">ლოკაცია</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputName"
                                                           placeholder="Location">
                                                </div>
                                            </div>

                                            <div class="form-group row" data-select2-id="47">
                                                <label class="col-sm-2 col-form-label">უნარები</label>
                                                <div class="col-sm-10">
                                                    <form method="post" id="add_form">
                                                        <select name="skills" id="skills"
                                                                class="select2 form-control select2-hidden-accessible"
                                                                multiple="" data-placeholder="Select a State"
                                                                style="width: 100%;" data-select2-id="7"
                                                                tabindex="-1" aria-hidden="true">

                                                            data-select2-id="38">
                                                            </option>
                                                            <option data-select2-id="39">Java</option>
                                                            <option data-select2-id="40">PHP</option>
                                                            <option data-select2-id="41">Go</option>
                                                            <option data-select2-id="42">Kotlin</option>
                                                            <option data-select2-id="43">Python</option>
                                                            <option data-select2-id="44">Javascript</option>
                                                            <option data-select2-id="45">C#</option>
                                                            <option data-select2-id="46">C++</option>
                                                        </select>
                                                    </form>
                                                </div>

                                            </div>

                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" form="add_form" class="btn btn-danger">
                                                        გაგზავნა
                                                    </button>
                                                </div>
                                            </div>

                                    </div>

                                </div>


                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
    </div>

</div>
</section>

</div>


<script src="/public/plugins/jquery/jquery.min.js"></script>
<script src="/public/lib/CodeSeven-toastr-2.1.4-7-g50092cc/CodeSeven-toastr-50092cc/toastr.js"></script>
<script src="/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/public/plugins/jszip/jszip.min.js"></script>
<script src="/public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="/public/dist/js/adminlte.min.js?v=3.2.0"></script>
<script src="/public/dist/js/demo.js"></script>
<script src="/public/js/Request.js" defer></script>
<!-- checkbox select js -->
<script src="/public/js/CheckboxSelect.js" defer></script>
<script src="/public/plugins/select2/js/select2.full.min.js"></script>
<script src="/public/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="/public/plugins/moment/moment.min.js"></script>
<script src="/public/plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="/public/plugins/daterangepicker/daterangepicker.js"></script>
<script src="/public/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="/public/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="/public/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<script src="/public/plugins/dropzone/min/dropzone.min.js"></script>

<script>

    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
        //Money Euro
        $('[data-mask]').inputmask()

        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });

        //Date and time picker
        $('#reservationdatetime').datetimepicker({icons: {time: 'far fa-clock'}});

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function (event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        })

        $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
        window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
        url: "/target-url", // Set the url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function (file) {
        // Hookup the start button
        file.previewElement.querySelector(".start").onclick = function () {
            myDropzone.enqueueFile(file)
        }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function (file) {
        // Show the total progress bar when upload starts
        document.querySelector("#total-progress").style.opacity = "1"
        // And disable the start button
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
        document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function () {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function () {
        myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End

</script>
</body>
</html>
