<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<head>

    <style>


        .container{
            position: absolute;
            left: 50px;
            top: 150px;

        }


    </style>

</head>

<div class="container">
    <center>  <h1> Create New Image Post</h1></center>
    <form class="form-group" method="post" action="store" enctype="multipart/form-data">
        <br>
        {!! csrf_field() !!}
        Upload your Image: <input class="form-control" type="file" name="File2Upload" required> <br>
       Title: <input class="form-control" type="text" name="title" required> <br>
        Short Description: <input class="form-control" type="text" name="short_description" required> <br>

        Full description: <input class="form-control" type="text" name="full_description" required> <br>

        <center>   <input type="submit"class="btn btn-primary" value="Create"></center>

    </form>

</div>

