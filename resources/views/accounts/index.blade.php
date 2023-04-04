<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/dashboard.css') }}">
    <link rel="stylesheet" href="https://kit.fontawesome.com/7e14f8359f.css" crossorigin="anonymous">
    <title>ERP|Accounts</title>
</head>
<body>
   <div id="app">
     <accounts-component />
   </div>
</body>
<script src="{{ mix('/js/accounts.js') }}"></script>
<script src="https://kit.fontawesome.com/7e14f8359f.js" crossorigin="anonymous"></script>
</html>