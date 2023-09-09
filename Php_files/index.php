<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <style>
            .container{
                display:flex;
                justify-content:space-between;
            }
        </style>
    </head>

    <body>
        
        <div class="container">
        <form action="process-signup.php" method="post" novalidate>
        <h1>Signup</h1>
            <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            </div>

            <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
            </div>
            
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            
            <div>
                <label for="password_confirmation">Repeat password</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>

            <button>Signup</button>

        </form>

        <form action="signin.php" method="post" novalidate>
        <h1>Sign In</h1>   
        <div>
            <label for="name">Name</label>
            <input type="text" name="sign_name" id="name">
            </div>

            <div>
            
            
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="sign_password">
            </div>
            
            

            <button>Sign In</button>

        </form>
    </div>
    </body>

    </html>