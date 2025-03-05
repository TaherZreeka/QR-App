<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generation in Laravel 11</title>

    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            /* Light gray background */
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 600px;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .card-header {
            background-color: #0d6efd;
            /* Primary blue */
            color: #ffffff;
            text-align: center;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }

        .card-footer {
            background-color: #e9ecef;
            /* Light gray */
            text-align: center;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .btn-primary {
            background-color: #0d6efd;
            /* Primary blue */
            border-color: #0d6efd;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            /* Darker blue on hover */
            border-color: #0a58ca;
        }

        .form-control:focus {
            border-color: #0d6efd;
            /* Blue focus border */
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }

        .qr-code-preview {
            margin-top: 20px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-12">
                <form action="{{ route('generate-qr-code') }}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">QR Code Generator</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="qr-code" class="form-label">Enter Text for QR Code:</label>
                                <input type="text" id="qr-code" class="form-control" placeholder="Enter your text here"
                                    name="qrCode" required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary w-100">Generate QR Code</button>
                        </div>
                    </div>

                    <!-- Display QR Code if generated -->
                    @if (Session::has('QrCode'))
                    <div class="mt-4 qr-code-preview text-center">
                        {!! Session::get('QrCode') !!}
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
