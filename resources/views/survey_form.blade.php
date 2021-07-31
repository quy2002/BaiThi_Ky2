<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">

    <link rel="stylesheet" href="{{asset("assets/vendors/iconly/bold.css")}}">

    <link rel="stylesheet" href="{{asset("assets/vendors/perfect-scrollbar/perfect-scrollbar.css")}}">
    <link rel="stylesheet" href="{{asset("assets/vendors/bootstrap-icons/bootstrap-icons.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/app.css")}}">
    <link rel="shortcut icon" href="{{asset("assets/images/favicon.svg")}}" type="image/x-icon">
</head>
<body>
    <div class="header">
        <div class="alert alert-warning" style=" height: 250px; display: flex;flex-direction: column; justify-content: center; align-items: center; background-color: #e2892e">
            <h2 class="alert-heading">FPT Aptech</h2>
            <h1 class="alert-heading" style="font-size: 55px">Survey students</h1>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="card">
                @if(Session::has("message"))
                    <div class="alert alert-success">
                        <i class="bi bi-check-circle"></i>
                        {{Session::get("message")}}
                    </div>
                @elseif(Session::has("errorMessage"))
                    <div class="alert alert-danger"><i class="bi bi-file-excel"></i>
                        {{Session::get("errorMessage")}}
                    </div>
                @endif

                <div class="card-header">
                    <h4 class="card-title">Fill in form</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{asset("/submit-form")}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="basicInput">Student name</label>
                                    <input type="text" name="student_name" class="form-control" id="basicInput"
                                           placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="helpInputTop">Email</label>
                                    <small class="text-muted">eg.<i>someone@example.com</i></small>
                                    <input type="email" name="student_email" class="form-control" id="helpInputTop">
                                </div>

                                <div class="form-group">
                                    <label for="helperText">Telephone</label>
                                    <input type="tel" name="student_phone" id="helperText" class="form-control" placeholder="">
                                    <p><small class="text-muted">Your phone</small>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <label for="helperText">Feedback</label>
                                    <textarea rows="10" name="feedback" class="form-control">

                               </textarea>
                                    <p><small class="text-muted">Feedback to school</small>
                                    </p>
                                </div>
                                <button type="submit" class="btn btn-info btn-lg float-sm-end">Submit</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
</body>
<script src="{{asset("assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>

<script src="{{asset("assets/vendors/apexcharts/apexcharts.js")}}"></script>
<script src="{{asset("assets/js/pages/dashboard.js")}}"></script>

<script src="{{asset("assets/js/main.js")}}"></script>
</html>
