<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration From</title>
    <link rel="stylesheet" type="text/css" href="from.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="Icon" href="Image\favicon.ico" type="Icon" sizes="128x512">
    <!-- conn php -->
    <?php
    include('Conn.php');
    include('datainsert.php');

    ?>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        body {
            font-size: 14px;
            background-color: #f2f2f2;
        }

        .content {
            background-color: white;
            width: 500px;
            padding: 25px;
            margin: 50px auto 0px;
            border-top: 5px solid;
            border-color: blue;
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, 1.5);
        }

        .content h1 {
            font-size: 24px;
            line-height: 24px;
            padding: 30px;
            text-align: center;
        }

        .input-name {
            width: 90%;
            position: relative;
            margin: 20px auto;
        }

        .fa-user {
            padding: 8px 11px;
        }

        .input {
            width: 45%;
            padding: 8px 0 8px 40px;
        }

        .input-name span {
            margin-left: 35px;

        }

        .input-name .input-email {
            width: 100%;
            padding: 8px 0 8px 40px;
        }

        .input-name .input-lock {
            width: 100%;
            padding: 8px 0 8px 40px;
        }

        .input-name i {
            position: absolute;
            font-size: 18px;
            color: blue;
            border-right: solid 1px;
        }

        .email {
            padding: 8px;

        }

        .fa-lock {
            padding: 8px;
        }

        .input {
            border: 1px solid #cccccc;
            outline: none;

        }

        .input-email {
            border: 1px solid #cccccc;
            outline: none;

        }

        .input-lock {
            border: 1px solid #cccccc;
            outline: none;
        }

        .radio {
            margin-right: 4px;
        }

        .country {
            display: inline-block;
            width: 100%;
            height: 35px;
            padding: 0px 15px;
            cursor: pointer;
            border: 1px solid #cccccc;
        }

        .country:hover,
        .country:focus {
            background-color: #cccccc;
            color: blue;
            border-color: blue;
            border: 2px solid;
            border-radius: 5px;

        }

        .text-label {
            margin-right: 15px;
            position: relative;

        }

        .text-label::before {
            content: "";
            display: inline-block;
            width: 8px;
            margin-right: 8px;

        }

        .checkbox:hover {
            cursor: pointer;
        }

        .checkbox-terms {
            background-color: blue;
            color: white;
            height: 35px;
            line-height: 35px;
            width: 100%;
            border: none;
            outline: none;
            font-size: 20px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .checkbox-terms:hover {
            background-color: green;
        }

        @media (max-width:480px) {
            .content {
                width: 100%;
                padding: 4px;
            }

            .input-name {
                margin-bottom: -10px;
            }

            .input {
                margin-bottom: -10px;
                width: 100%;
                padding: 8px 0 8px 40px;
                margin-bottom: 10px;
            }

            .input-name span {
                padding: 0px;
                margin: 0px;
            }

            .fa1 {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Registration From</h1>
        <div class="from-content">
            <form class="fa1" method="POST">
                <div class="input-name">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Name" class="input" name='F-name'required>
                    <span>
                        <i class="fa fa-user"></i>
                        <input type="text" placeholder="Last name" class="input" name='L-name' required>
                    </span>
                </div>


                <div class="input-name">
                    <i class="fa fa-envelope email"></i>
                    <input type="Email" placeholder="Email" class="input-email" name='Email'required>
                </div>

                <div class="input-name">
                    <i class="fa fa-lock"></i>
                    <input type="Password" placeholder="Password" class="input-lock"  name='Password'required>
                </div>

                <div class="input-name">
                    <i class="fa fa-lock"></i>
                    <input type="Password" placeholder="Confirm Password" class="input-lock"  name="C_Password"required>
                </div>

                <div class="input-name">
                    <input type="radio" class="radio" name="name">
                    <label>Male</label>

                    <input type="radio" class="radio" name="name">
                    <label>Female</label>
                </div>


                <div class="input-name">
                    <select class="country" name='selection'>
                        <option value="not select" required>Select Country</option>
                        <option style="color: black;" value="India">India</option>
                        <option style="color: black;"value="Bangladesh">Bangladesh</option>
                        <option style="color: black;"value="China">China</option>
                        <option style="color: black;"value="Germany">Germany</option>
                        <option style="color: black;"value="Japan">Japan</option>
                        <option style="color: black;"value="Denmark">Denmark</option>
                        <option style="color: black;"value="Pakistan">Pakistan</option>
                    </select>
                </div>
                <div class="input-name">
                    <input type="checkbox" class="checkbox">
                    <label class="text-label" style="font-size: 16px;">I Accept the terms and conditions</label>
                </div>


                <div class="input-name">
                    <input type="submit" class="checkbox-terms" value="Register" name="submit">
                </div>


            </form>

        </div>
    </div>

</body>

</html>