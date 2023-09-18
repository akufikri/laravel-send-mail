<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Mail With Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sora&display=swap');

        body {
            font-family: Sora
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex min-vh-100 align-items-center justify-content-center">
            <div class="col">
                <div class="car border-0">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-7">
                                <form action="/send" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded-0" name="name"
                                            id="" style="height: 50px" placeholder="Your Name.....">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded-0" name="email"
                                            id="" style="height: 50px" placeholder="Your Email.....">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded-0" name="subject"
                                            id="" style="height: 50px" placeholder="Subject">
                                    </div>
                                    <div class="mb-3">
                                        <textarea name="message" class="form-control rounded-0" style="resize: none" id="" cols="30"
                                            rows="7" placeholder="Message..."></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit"
                                            class="btn btn-primary rounded-0 fw-bold w-25">Send</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 ms-auto">
                                <h4 class="">Contact Information</h4>
                                <br>
                                <br>
                                <h4 class="text-muted ">Address: Jakarta</h4>
                                <br>
                                <br>
                                <h5 class="text-muted ">Phone: +62 812381233</h5>
                                <br>
                                <br>
                                <h5 class="text-muted ">Email: fikri@gmail.com</h5>
                                <br>
                                <br>
                                <h5 class="text-muted ">Website: fikri.com/h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>
