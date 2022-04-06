
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
                   
                    <input type="datetime-local" name="phone_number"   placeholder="Date et Heure" required/>
                    <select name="people" required>
                        <option value="" disabled selected hidden>Nombre de personne</option>
                        
                        <option value="coffee">1</option>
                        <option value="tea">2</option>
                        <option value="milk">3</option>
                    </select>
                    <select name="people" required>
                      <option value="" disabled selected hidden>Type de reservation</option>
                      <option value="coffee">Reservation VIP</option>
                      <option value="tea">Reservation Standard</option>
                      
                  </select>
                  <input type="text" name="phone_number"   placeholder="Details complementaire" required/>
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
