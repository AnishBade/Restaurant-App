<!DOCTYPE html>
<html>
    <head>
        <link rel=stylesheet href="style.css">
        <title>Profile page</title>
        <h3>YOUR PROFILE PAGE</h1>
            <?php 
                if(isset($_SESSION['customer_name'])){
                echo '<h1>'.$_POST['customer_name'].'</h1>';
                ?>
                }
    </head>
    <body>
        <p>
            <br>
            
            <p6>
            Select your Preferences:
            </p6>
            
            <form>
                <FIELDSET>
                <div><label><input type=radio name=preference>VEG</label></div>
                <div><label><input type=radio name=preference></label>NON-VEG</div>
                <div><label><input type=radio name=preference></label>VEGAN</div>
                </fieldset>
                    <section 2>
                        <p><h2>Select Food Items:</h2></p>
                        <h3>
                        <div><label>momo(Rs-50)<input type=checkbox></label></div>
                        <div><label>chowmin(Rs-50)<input type=checkbox></label></div>
                        <div><label>pizza(Rs-50)<input type=checkbox></label></div>
                                    </h3>

                    </section>


            </form>
            
        </p>

        <h2>
            <h2>Confirm your choice</h2>
           
        </h2>
        <h3> <a href="final_page.html"><button>Confirm</button></a></h3>

        <script src="restaurant.js"></script>
    </body>
</html>