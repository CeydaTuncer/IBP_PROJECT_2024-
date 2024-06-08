    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMİN LOGİN PAGE</title>
    </head>
    <body>
    <div class="login">

        <h1>Admin Login</h1>
        <form method="POST" action="/ADMIN/phpdatabase/admin_login.php" >
            <input type="text" name="email" placeholder="Email" required="required" />
            <input type="password" name="password" placeholder="Password" required="required" />
            <button type="submit" class="btn btn-primary btn-block btn-large">GİRİŞ YAP.</button>
        </form>
    </div>
    <style> 
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

    * {
        box-sizing: border-box;
    }

    html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Open Sans', sans-serif;
        overflow: hidden;
        background: #092756;
        background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -moz-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -moz-linear-gradient(-45deg, #670d10 0%, #092756 100%);
        background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -webkit-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -webkit-linear-gradient(-45deg, #670d10 0%, #092756 100%);
        background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -o-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -o-linear-gradient(-45deg, #670d10 0%, #092756 100%);
        background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), -ms-linear-gradient(top, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), -ms-linear-gradient(-45deg, #670d10 0%, #092756 100%);
        background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104, 128, 138, .4) 10%, rgba(138, 114, 76, 0) 40%), linear-gradient(to bottom, rgba(57, 173, 219, .25) 0%, rgba(42, 60, 87, .4) 100%), linear-gradient(135deg, #670d10 0%, #092756 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3E1D6D', endColorstr='#092756', GradientType=1);
    }

    .login {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 300px;
        background: rgba(0, 0, 0, 0.3);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .login h1 {
        color: #fff;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        letter-spacing: 1px;
        text-align: center;
        margin-bottom: 20px;
    }

    input {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        font-size: 13px;
        color: #fff;
        background: rgba(0, 0, 0, 0.3);
        border: none;
        outline: none;
        border-radius: 4px;
        box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.2), 0 1px 1px rgba(255, 255, 255, 0.2);
        transition: box-shadow 0.5s ease;
    }

    input:focus {
        box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.4), 0 1px 1px rgba(255, 255, 255, 0.2);
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 15px;
        color: #fff;
        text-align: center;
        text-decoration: none;
        background-color: #4a77d4;
        border: 1px solid #3762bc;
        border-radius: 5px;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5);
        transition: background-color 0.3s;
        cursor: pointer;
        width: 100%;
    }

    .btn:hover {
        background-color: #6eb6de;
    }

    .btn-primary {
        background-color: #4a77d4;
        border-color: #3762bc;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }

    .btn-primary:hover {
        background-color: #6eb6de;
    }

    .btn-block {
        width: 100%;
        display: block;
        margin-top: 10px;
    }




    </style>
    </body>
    </html>



