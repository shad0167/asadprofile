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
    <center>  <h1> Create CityList</h1></center>
    <form class="form-group" method="post" action="store">
        {!! csrf_field() !!}
        Person Name-
        <input class="form-control" type="text" name="name" required> <br>
        <br>
        Chose Your City <br>

        <input list="cityName"name="cityName"class="form-control">
        <datalist id="cityName"class="input-group">
            <option value="Bangladesh">
            <option value="Belzie">
            <option value="Bhutan">
            <option value="Brazil">
            <option value="Burma">
            <option value="India">
            <option value="Pakistan">
            <option value="Canada">
            <option value="Srilanka">
            <option value="Australia">
            <option value="USA">
            <option value="UK">
            <option value="Maynmer">
            <option value="Afganistan">
            <option value="Albania">
            <option value="Ageria">
            <option value="America">
            <option value="Angola">
            <option value="Argentina">
        </datalist>

        <center>   <input type="submit"class="btn btn-primary" value="Create"></center>

    </form>

</div>

