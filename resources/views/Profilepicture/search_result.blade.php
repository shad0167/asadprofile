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

        <div class="navbar">

                <a href="create"><button type="button" class="btn btn-primary btn-lg">Add New</button></a>
        </div>

        Total: {!! $searchResult->total() !!} Profile picture(s) <br>

        Showing: {!! $searchResult->count() !!} Profile Picture(s) <br>

        {!! $searchResult->links() !!}
        <table class="table table-bordered table table-striped" >

                <th>Name</th>
                <th>profile
                    <picture></picture></th>

                <th>Action Buttons</th>

                @foreach($searchResult as $propic)

                        <tr>

                                <td>  {!! $propic['name'] !!} </td>
                                <td>  {!! $propic['roll'] !!} </td>
                                <td>  {!! $propic['result'] !!}</td>

                                <td>
                                    <a href="../view/{!! $propic['id'] !!}"><button class="btn btn-info">View</button></a>
                                    <a href="../edit/{!! $propic['id'] !!}"><button class="btn btn-primary">Edit</button></a>
                                    <a href="../delete/{!! $propic['id'] !!}"><button class="btn btn-danger">Delete</button></a>

                                </td>

                        </tr>


                @endforeach


        </table>
        {!! $searchResult->links() !!}
</div>
