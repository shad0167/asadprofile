<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<head>

    <style>

        td{

            width:100px;
            height:50px


        }

        .container{
            position: absolute;
            left: 50px;
            top: 150px;

        }


    </style>

</head>




<div class="container">

    <table class="table table-bordered table table-striped" >

        <th>Name</th>
        <th>City</th>

        <th>Action Buttons</th>


            <tr>

                <td>  {!! $city['name'] !!} </td>
                <td>  {!! $city['cityName'] !!} </td>


               <td>
                   <a href="../index"> <button class="btn btn-success">Back to Index</button></a>

               </td>

            </tr>




    </table>

</div>

