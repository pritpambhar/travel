<html>
    <head>
    </head>
    <body>
        <form method="post">
            NAME:<input type="text" name="name" id="name"/><br>
            EMAIL:<input type="email" name="email" id="email"/><br>
            PASSWORD:<input type="password" name="password" id="password"/><br>
            MOBILE NO:<input type="number" name="mobile" id="mobile"/><br>
            <input type="submit" name="submit" value="submit"/>
        </form>
        <?php
            if(isset($_POST["submit"]))
            {
                echo "first";
                $con=mysqli_connect("127.0.0.1","root","root","travel");
                $cmd=mysqli_query($con, "insert into register (name,email,password,mobile) values ('prit','a@a.a','12345',12345)");
                echo "success";
            }
        ?>
    </body>
</html>