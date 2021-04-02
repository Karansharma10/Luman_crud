<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
    body {
        margin: 0;
        min-width: 250px;
    }

    /* Include the padding and border in an element's total width and height */
    * {
        box-sizing: border-box;
    }

    /* Remove margins and padding from the list */
    ul {
        margin: 0;
        padding: 0;
    }

    /* Style the list items */
    ul li {
        cursor: pointer;
        position: relative;
        padding: 12px 8px 12px 40px;
        list-style-type: none;
        background: #eee;
        font-size: 18px;
        transition: 0.2s;

        /* make the list items unselectable */
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Set all odd list items to a different color (zebra-stripes) */
    ul li:nth-child(odd) {
        background: #f9f9f9;
    }

    /* Darker background-color on hover */
    ul li:hover {
        background: #ddd;
    }

    /* When clicked on, add a background color and strike out text */
    ul li.checked {
        background: #888;
        color: #fff;
        text-decoration: line-through;
    }

    /* Add a "checked" mark when clicked on */
    ul li.checked::before {
        content: '';
        position: absolute;
        border-color: #fff;
        border-style: solid;
        border-width: 0 2px 2px 0;
        top: 10px;
        left: 16px;
        transform: rotate(45deg);
        height: 15px;
        width: 7px;
    }

    /* Style the close button */
    .close {
        position: absolute;
        right: 0;
        top: 0;
        padding: 12px 16px 12px 16px;
    }

    .close:hover {
        background-color: #f44336;
        color: white;
    }

    /* Style the header */
    .header {
        background-color: #f44336;
        padding: 30px 40px;
        color: white;
        text-align: center;
    }

    /* Clear floats after the header */
    .header:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Style the input */
    input {
        margin: 0;
        border: none;
        border-radius: 0;
        width: 75%;
        padding: 10px;
        float: left;
        font-size: 16px;
        color: black;
    }

    i.fa.fa-edit {
        float: right;
        margin-left: 30px;
        margin-right: 30px;
    }

    /* Style the "Add" button */
    .addBtn {
        padding: 10px;
        width: 25%;
        background: #d9d9d9;
        color: #555;
        float: left;
        text-align: center;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
        border-radius: 0;
        border: none;
    }

    .addBtn1 {
        padding: 10px;
        width: 10%;
        background: #d9d9d9;
        color: #555;
        float: left;
        text-align: center;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
        border-radius: 0;
        border: none;
    }

    i.fa.fa-close {
        float: right;
        margin-right: 30px;
    }

    .addBtn:hover {
        background-color: #bbb;
    }

    .img_1 {
        height: 55px;
        width: 55px;
        float: right;
        border-radius: 30px;
    }
    </style>
</head>

<body>
    <div id="myDIV" class="header">
        <button type="submit" class="addBtn1" onclick="logout()">Logout</button>
        <img class="img_1" src="{{ URL::to('/') }}/UserImages/<?php echo $_SESSION['image']?>">
        <h2 style="margin:5px">My To Do List</h2>
        <form method="POST" action="inserttodo" style="
    margin-top: 30px;
">
            <input type="text" id="myInput" placeholder="Title..." name="name">
            <button type="submit" class="addBtn">Add</button>
        </form>
    </div>
    <ul id="myUL">
        @foreach ($data as $i)
        <li id="i{{ $i->id }}">{{$i->name}}



            <i class="fa fa-close" value="{{ $i->id }}" onclick='one({{ $i->id }},"i{{ $i->id }}")'></i>

            <i class="fa fa-edit" value="{{ $i->id }}" data-toggle="modal"
                data-target="#exampleModalCenter{{ $i->id }}"></i>
        </li>


        <div class="modal fade" id="exampleModalCenter{{ $i->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Change Value</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <!-- <span aria-hidden="true">&times;</span> -->
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" value="{{$i->name}}" id="n{{$i->id}}">
                        <button type="button" class="btn btn-primary" value="{{$i->id}}"
                            onclick="update_data({{$i->id}},'n{{$i->id}}')" aria-hidden="true" data-dismiss="modal">Save
                            changes</button>

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" onclick="close1()">Close</button> -->

                    </div>
                </div>
            </div>
        </div>



        @endforeach


    </ul>


    <script>
    function logout() {

        axios.post('logout', {



            })
            .then((res) => {

                window.location = "/";


            }).catch((err) => {
                console.log(err);
            })
    }


    function update_data(id, value) {

        var n = document.getElementById(value).value;

        axios.post('updatetodo', {

                id,
                n

            })
            .then((res) => {

                window.location.reload();


            }).catch((err) => {
                console.log(err);
            })
    }

    function one(id, test) {


        // alert(id);
        axios.post('deletetodo', {

                id

            })
            .then((res) => {

                document.getElementById(test).style.display = 'none';


            }).catch((err) => {
                console.log(err);
            })

    }
    </script>

</body>


</html>