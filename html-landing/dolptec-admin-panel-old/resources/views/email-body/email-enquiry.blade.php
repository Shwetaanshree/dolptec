<!DOCTYPE html>

<html>



<head>

    <title>Admin Mail</title>

</head>

<body>

    <p>Dear Admin,</p>
    <p>We have received an enquiry through the form.</p>
    <p>Below are the details submitted from the customer.</p>
     <strong>Name:</strong> {{ $name }}<br>
    <strong>Email:</strong> {{ $fromEmail }}<br>
   
     <strong>Company Size:</strong> {{ $city }}<br>
     <strong>About Project:</strong> {{ $aboutProject }}<br>


    <br>
    Rgds,

</body>
</html>