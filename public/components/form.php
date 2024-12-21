<div class="formContainer">
    <div>
        <h3 style="color: white; font-family: Arial, Helvetica, sans-serif; padding: 3px ;">Add
            player
        </h3>
    </div>

    <?php if (isset($_SESSION["name.Error"])): ?>
        <p class="message"><?php echo $_SESSION["name.Error"]; ?></p>
        <?php unset($_SESSION["name.Error"]); ?>
    <?php endif; ?>
    <?php if (isset($_SESSION["successfully"])): ?>
        <p class="message-seccsusfely"><?php echo $_SESSION["successfully"]; ?></p>
        <?php unset($_SESSION["successfully"]); ?>
    <?php endif; ?>




    <section class="section2">
        <form action="process.php" id="formData" method="POST" enctype="multipart/form-data">
            <div class="textInputs">
                <div>
                    <label for="name" class="laber">Name</label>
                    <input type="text" id="name" name="name" placeholder="Player name">
                </div>
                <div>
                    <label for="">Nationality</label>
                    <select name="nationality" id="nationality">
                        <option value="" selected>Nationality</option>
                        <?php
                        include('../src/config/database.php');
                        $query = "SELECT * FROM nationality";
                        $data = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($data)) {
                            echo '<option value="' . $row['id'] . '">' . $row['nom_natio'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="">Club</label>
                    <select name="club" id="club">
                        <option value="" selected>Name of club</option>
                        <?php
                        include('../src/config/database.php');
                        $query = "SELECT * FROM clubs";
                        $data = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($data)) {
                            echo '<option value="' . $row['id'] . '">' . $row['name_club'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="positionSelect">
                    <label for="">Position</label>
                    <select name="positionSelect" id="positionSelect">
                        <option value="Position" selected>Position</option>
                        <option value="ST">ST</option>
                        <option value="LM">LW</option>
                        <option value="RW">RW</option>
                        <option value="CM">CM</option>
                        <option value="LB">LB</option>
                        <option value="CB">CB</option>
                        <option value="RB">RB</option>
                        <option value="GK">GK</option>
                    </select>
                </div>
            </div>
            <div class="filesInput">
                <div class="fileContainer">
                    <label for="photo">Photo</label>
                    <input type="file" id="photo" name="photo">
                    <div class="photoOutput">
                        <img src="./images/default-pic.jpg" alt="" id="photoOutput">
                    </div>
                </div>
            </div>
            <div class="numInputs" id="numInputs">
                <div class="div">
                    <label for="">RAT</label>
                    <input class="num" type="number" name="ratingPL" id="rating2" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">PAC</label>
                    <input class="num" type="number" name="pace" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">SHO</label>
                    <input class="num" type="number" name="shooting" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">PAS</label>
                    <input class="num" type="number" name="passing" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">DRI</label>
                    <input class="num" type="number" name="dribbling" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">DEF</label>
                    <input class="num" type="number" name="defending" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">PHY</label>
                    <input class="num" type="number" name="physical" placeholder="10 -> 99">
                </div>
                <button type="submit" class="createBtn">Submit</button>
            </div>
            <div class="numInputs GKinputs" id="numInputsGK" style="display: none;">
                <div class="div">
                    <label for="">RAT</label>
                    <input class="numPlayer" type="number" name="ratingGK" id="rating1" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">DIV</label>
                    <input class="numPlayer" type="number" name="diving" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">HAN</label>
                    <input class="numPlayer" type="number" name="handling" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">KIC</label>
                    <input class="numPlayer" type="number" name="kicking" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">REF</label>
                    <input class="numPlayer" type="number" name="reflexes" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">SPD</label>
                    <input class="numPlayer" type="number" name="speed" placeholder="10 -> 99">
                </div>
                <div class="div">
                    <label for="">POS</label>
                    <input class="numPlayer" type="number" name="positioning" placeholder="10 -> 99">
                </div>
                <button name="addPlayer" type="submit" class="createBtn">Submit</button>
            </div>
        </form>
    </section>


</div>

<script>
    //     function create () {
    //         const formData = new FormData(document.getElementById('formData'));
    //         const playerData = Object.fromEntries(formData.entries());
    //         console.log(playerData)
    //     $.ajax({
    //         url:"process.php",
    //         type: "post",
    //         dataType: 'json',
    //         data: playerData,
    //         success:function(result){
    //             console.log(result.abc);
    //         }
    //     });
    // }




    // document.getElementById('formData').addEventListener('submit', function (e) {
    //     e.preventDefault();

    //     const formData = new FormData(this);
    //     // const playerData = Object.fromEntries(formData.entries());
    //     // body: JSON.stringify({playerData})

    //     const playerData = {};
    //     formData.forEach((value, key) => playerData[key] = value);


    //     fetch("test.php", {
    //         method: "POST",
    //         headers: {
    //             "Content-Type": "application/json"
    //         },
    //         body: JSON.stringify({playerData})
    //     })
    //         .then(response => response.json())
    //         .then(data => {
    //             console.log(data);
    //             // const messageElement = document.querySelector('.message');
    //             // if (data.success) {
    //             //     messageElement.textContent = 'Formulaire soumis avec succès !';
    //             //     messageElement.style.color = 'green';
    //             // } else {
    //             //     messageElement.textContent = data.message || 'Une erreur s\'est produite.';
    //             //     messageElement.style.color = 'red';
    //             // }
    //         })
    //         .catch(error => {
    //             console.log('Erreur:', error);
    //             // const messageElement = document.querySelector('.message');
    //             // messageElement.textContent = 'Erreur lors de la soumission.';
    //             // messageElement.style.color = 'red';
    //         });
    // });
</script>