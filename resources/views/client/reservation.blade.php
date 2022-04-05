
 <!-- //Modal Register-->
 <div class="modal fade" id="staticBackdropReservation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>						
        </div> 
        <div class="modal-body  "><!-- login-page -->     
            <div class="login-top sign-top">
                <div class="agileits-login">
                <h5>Reservation en ligne </h5>
                <form action="" method="post">
                  @csrf
                    <input type="text" name="lastname" class="" placeholder="Numéro de téléphone" required/>
                    <input type="datetime-local" name="phone_number"   placeholder="Numéro" required/>
                    <select name="people" required>
                        <option value="" disabled selected hidden>Nombre de personne</option>
                        <option value="coffee">1</option>
                        <option value="tea">2</option>
                        <option value="milk">3</option>
                    </select>
                    <select name="type" required>
                        <option value="" disabled selected hidden>Type </option>
                        <option value="coffee">Petit dejeuner</option>
                        <option value="tea">Resistance</option>
                        <option value="milk">Desserts</option>
                      </select>
                 <div class="w3ls-submit"> 
                        <input type="submit" value="Reserver">  	
                    </div>	
                </form>
                </div>  
            </div>
        </div> 
      </div>
    </div>
  </div>
