<?php include "./header.php" ?>
<!-- Code Here........ -->
<main style="width:1450px; margin:auto; padding:auto;">
        <section style="margin-bottom: 100px;">
            <span class="back">
                <a href="#">Home</a>    /   <span style="padding-left:10px ">Page</span> 
            </span>
            <div class="block">
                <div class="navUser">
                   <ul>
                        <a href="#"><li>Dashboard</li></a>
                        <a href="#"><li>Orders</li></a>
                        <a href="#"><li>Update Accounts</li></a>
                        <a href="#"><li>Logout</li></a>
                   </ul>
                </div>
                <div>
                    <form action="">
                        <div class="name">
                            <div>
                                <label for="firstName">First name *</label><br>
                                <input type="text" name="firstName" class="inputName">
                            </div>
                            <div>
                                <label for="lastName">Last name *</label><br>
                                <input type="text" name="lastName" class="inputName">
                            </div>
                        </div><br>
                        <label for="displayName">Display Name *</label><br>
                        <input type="text" name="displayName" class="dpName">
                        <p>This will be how your name will be displayed in the account section and in reviews</p><br>  
                        <div class="name">
                            <div>
                                <label for="displayName">Email address *</label><br>
                                <input type="text" name="mail" class="inputName"><br>
                            </div>
                            <div>
                                <label for="telephone">Telephone *</label><br>
                                <input type="number" name="tel" class="inputName">
                            </div>
                        </div><br>
                        <label for="address">Address *</label><br>
                        <input type="text" name="address" class="dpName">
                        <h2 class="changePass">Password change</h2>
                        <label for="password">Current password (leave blank to leave unchanged)</label><br>
                        <input type="password" name="pass" class="dpName">
                        <label for="password">New password (leave blank to leave unchanged)</label><br>
                        <input type="password" name="pass" class="dpName">
                        <label for="password">Confirm new password</label><br>
                        <input type="password" name="pass" class="dpName">
                        <input type="submit" class="sm-login" value="Save changes">
                    </form>
                </div>
            </div>
        </section>
    </main>
<?php include "./footer.php" ?>

