<html lang="en">
<head>
    <link rel="stylesheet" href="css/Stylesheet.css">
    <title>User Login Form</title>
</head>
<header>
    <a href="index.html"><h2>Home</h2></a>
</header>
<body>
<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Driver Registration</h2>
                <form method="post" id="contactForm" action="CreateAccount.php" class="form-signup">
                    <!-- Email address input-->
                    <div class="row input-group-newsletter">
                        <div class="col"><input class="form-control" type="email" id="email" name="email" maxlength="50"
                                                required placeholder="Enter email address..."
                                                aria-label="Enter email address..."/></div>
                    </div>
                    <br>
                    <!-- First name input-->
                    <div class="row input-group-newsletter">
                        <div class="col"><input class="form-control" type="text" id="firstname" name="firstname"
                                                maxlength="25" required placeholder="Enter first name..."
                                                aria-label="Enter first name..."/></div>
                    </div>
                    <br>
                    <!-- Last name input-->
                    <div class="row input-group-newsletter">
                        <div class="col">
                            <input class="form-control" type="text" id="lastname" name="lastname"
                                   maxlength="25" required placeholder="Enter last name..."
                                   aria-label="Enter last name..."/></div>
                    </div>
                    <br>
                    <!-- Team input-->
                    <div class="row input-group-newsletter">
                        <div class="col">
                            <label class="col-form-label"  for="team">Select Team</label>
                            <select class="form-control" name="Team" id="team" required>
                                <option value="subaru_motorsports">Subaru Motorsports</option>
                                <option value="mitsubishi_ralliart">Mitsubishi Ralliart</option>
                                <option value="toyota_gazoo_racing">Toyota Gazoo Racing</option>
                                <option value="ford_world_rally_team">Ford World Rally Team</option>
                                <option value="hyundai_motorsport">Hyundai Motorsport</option>
                                <option value="citroen_world_rally_team">Citroën World Rally Team</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <label class="col-form-label" for="car">Select Car:</label>
                            <select class="form-control" name="Car" id="car" required>
                                <optgroup label="Subaru Cars">
                                    <option value="subaru_s8_wrc">Subaru S8 WRC</option>
                                    <option value="subaru_impreza_wrc">Subaru Impreza WRC</option>
                                    <option value="subaru_wrx_sti">Subaru WRX STI</option>
                                </optgroup>
                                <optgroup label="Mitsubishi Cars">
                                    <option value="mitsubishi_lancer_wrc">Mitsubishi Lancer WRC</option>
                                    <option value="mitsubishi_lancer_evo">Mitsubishi Lancer EVO</option>
                                    <option value="mitsubishi_xpander_ap4">Mitsubishi XPANDER AP4</option>
                                </optgroup>
                                <optgroup label="Toyota Cars">
                                    <option value="toyota_yaris_wrc">Toyota Yaris WRC</option>
                                    <option value="toyota_yaris_rally1">Toyota GR Yaris Rally1</option>
                                </optgroup>
                                <optgroup label="Ford Cars">
                                    <option value="ford_fiesta_wrc">Ford Fiesta WRC</option>
                                    <option value="ford_fiesta_rs_wrc">Ford Fiesta RS WRC</option>
                                    <option value="ford_puma_rally1">Ford Puma Rally1</option>
                                </optgroup>
                                <optgroup label="Hyundai Cars">
                                    <option value="hyundai_i20_coupe_wrc">Hyundai i20 Coupe WRC</option>
                                    <option value="hyundai_i20_n_rally1">Hyundai i20 N Rally1</option>
                                </optgroup>
                                <optgroup label="Citroën Cars">
                                    <option value="citroen_c3_wrc">Citroën C3 WRC</option>
                                    <option value="citroen_ds3_wrc">Citroën DS3 WRC</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row input-group-newsletter">
                        <div class="col">
                            <input class="form-control" type="password" id="password" name="password" maxlength="100"
                                   placeholder="Enter password..."
                                   aria-label="Enter password..."
                                   required/>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary" id="submitButton" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--<fieldset>
    <legend><h2>Driver Registration Form</h2></legend>
    <label class="form-label" for="email">E-Mail:</label>
    <input type="email" id="email" name="email" maxlength="50" required/>
    <br><br>
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" maxlength="25" required/>
    <br><br>
    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" maxlength="25" required/>
    <br><br>
    <label for="team">Team:</label>
    <select name="Team" id="team">
        <option value="subaru_motorsports">Subaru Motorsports</option>
        <option value="mitsubishi_ralliart">Mitsubishi Ralliart</option>
        <option value="toyota_gazoo_racing">Toyota Gazoo Racing</option>
        <option value="ford_world_rally_team">Ford World Rally Team</option>
        <option value="hyundai_motorsport">Hyundai Motorsport</option>
        <option value="citroen_world_rally_team">Citroën World Rally Team</option>
    </select>
    <br><br>
    <label for="car">Car:</label>
    <select name="Car" id="car">
        <optgroup label="Subaru Cars">
            <option value="subaru_s8_wrc">Subaru S8 WRC</option>
            <option value="subaru_impreza_wrc">Subaru Impreza WRC</option>
            <option value="subaru_wrx_sti">Subaru WRX STI</option>
        </optgroup>
        <optgroup label="Mitsubishi Cars">
            <option value="mitsubishi_lancer_wrc">Mitsubishi Lancer WRC</option>
            <option value="mitsubishi_lancer_evo">Mitsubishi Lancer EVO</option>
            <option value="mitsubishi_xpander_ap4">Mitsubishi XPANDER AP4</option>
        </optgroup>
        <optgroup label="Toyota Cars">
            <option value="toyota_yaris_wrc">Toyota Yaris WRC</option>
            <option value="toyota_yaris_rally1">Toyota GR Yaris Rally1</option>
        </optgroup>
        <optgroup label="Ford Cars">
            <option value="ford_fiesta_wrc">Ford Fiesta WRC</option>
            <option value="ford_fiesta_rs_wrc">Ford Fiesta RS WRC</option>
            <option value="ford_puma_rally1">Ford Puma Rally1</option>
        </optgroup>
        <optgroup label="Hyundai Cars">
            <option value="hyundai_i20_coupe_wrc">Hyundai i20 Coupe WRC</option>
            <option value="hyundai_i20_n_rally1">Hyundai i20 N Rally1</option>
        </optgroup>
        <optgroup label="Citroën Cars">
            <option value="citroen_c3_wrc">Citroën C3 WRC</option>
            <option value="citroen_ds3_wrc">Citroën DS3 WRC</option>
        </optgroup>
    </select>
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" maxlength="100" required/>
    <br><br>
    <p><input type="submit" name="submit" value="login"/></p>
</fieldset>
</form>-->
</body>
</html>
