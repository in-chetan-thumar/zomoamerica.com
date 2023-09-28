<!DOCTYPE html>
<html>
<head>
    <title>New Distibutor Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 25px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* text-align: center; */
        }
        h1 {
            color: #333;
            text-align: center; /* Center-align the heading */
        }
        p {
            margin-left: 25px;
            margin-bottom: 10px;
        }
        .sender-info {
            color: #888;
        }
        .warning {
            color: red;
            font-weight: bold;
            background-color: #ffebeb; /* Highlight background for warning message */
            padding: 10px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .reason {
            color: #888;
        }
        @media screen and (max-width: 600px) {
            .container {
                width: 100%;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>AUTHORIZED STATE DISTRIBUTOR</h1>
        <p class="sender-info"><strong>Hello Zomoamerica</strong></p>
        <p><strong>First Name:</strong> {{ $data['first_name'] }}</p>
        <p><strong>Last name:</strong> {{ $data['last_name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Number:</strong> {{ $data['telephone'] }}</p>
        <p><strong>City:</strong> {{ $data['state'] }}</p>
        <p><strong>State:</strong> {{ $data['city'] }}</p>
        <div class="warning">Please do not reply to this email. It is an automated notification.</div>
        <p class="reason">If you have any questions, please contact us through our official channels. </p>
        <p class="reason"> This is an automated e-mail message sent from our support system.
                Do not reply to this e-mail as we will not receive your reply!</p>
        <br>
        <br>
        <p class="reason">Actual Email notification recipients:</p>
        <p class="reason">Email Notification - To: info@zomoamerica.com</p>
        <p class="reason">Email Notification - CC:</p>
    </div>           
</body>
</html>