<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>.
    <div class="container">

        <!-- Once this form is submitted the action's valur /formhandler.php will be directed-->

        <!-- This form when submitted will be caried by POST method
            
                that has an array of key value pairs 

                 -name-      - value - 

                firstname = "SHoSHO";
                lastname  = "SHox" ;

                       - option - 
                favouritepet = "Dog"; -->
        <form action="../includes/formhandler.php" method="post">
            <div class="mb-3">
                <!-- required inputs will be fill uped for the form to be submitted
                        but not gon be good security 
                    
                    you can delete required html attribute in dev tools and 
                    still submit the form without data-->


                <!-- Front end security is never secure 
                    
                        always use PHP for every security measures you implement
                        in your browser-->
                <label required for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="firstname">

                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="lastname">

                <br><br>
                <label for="favouritepet">Favourite pet</label>

                <select name="favouritepet" id="favouritepet">
                    <option value="none">None</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                    <option value="bird">Bird</option>
                    <option value="corodile">Corodile</option>
                </select>
                <button type="submit">Submit</button>

            </div>


        </form>
    </div>
</body>

</html>