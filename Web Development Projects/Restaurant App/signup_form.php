<form action="" method="POST">
                    
                        <span>Name: </span> 
                        <span id="signup_textbox"><input type=text placeholder='Enter you name' name="customer_name" required></span>
                        
                    <div><br>Email address: <input type="email"  placeholder='Enter you email address' name='email_address' required></label></div><br>
                    <div>Phone Number:<input type="number" placeholder="you contact number" name='phone_number' required>  </div>
                        <br>
                        <span>Address:</span>
                        <span id="address"> <input type="text" placeholder="Enter you address" name='address' required></span>
                        <br><br>
                            Age:
                        <span id="ages">                   
                            <select name="age">
                                <option value="15-20" >15-20</option> 
                                <option value="20-25" selected>20-25</option>
                                <option value="25-30" >25-30</option>
                                <option value="above 30" >above 30</option>
                                
                            
                            </select>
                        </span>
                       <p>
                        <input type="submit" name="create" value="Create" id="signup_button" >
                        </p>
                        <input type="submit" name="cancel" value="Cancel" >
                </form>