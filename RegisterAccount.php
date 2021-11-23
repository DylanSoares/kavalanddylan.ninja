<html lang="en">
<head>
    <link rel="stylesheet" href="Stylesheet.css">
    <title>User Login Form</title>
</head>
<body>
<form method="post" action="CreateAccount.php">
    <fieldset>
        <legend><h2>Driver Registration Form</h2></legend>
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" maxlength="30" required/>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" maxlength="30" required/>

        <label for="team">Team:</label>
        <select name="Team" id="team">
            <option value="subaru_motorsports">Subaru Motorsports</option>
            <option value="mitsubishi_ralliart">Mitsubishi Ralliart</option>
            <option value="toyota_gazoo_racing">Toyota Gazoo Racing</option>
            <option value="ford_world_rally_team">Ford World Rally Team</option>
            <option value="hyundai_motorsport">Hyundai Motorsport</option>
            <option value="citroen_world_rally_team">Citroën World Rally Team</option>
        </select>

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

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" maxlength="100" required/>

        <p><input type="submit" name="submit" value="login"/></p>
    </fieldset>
</form>
</body>
</html>
