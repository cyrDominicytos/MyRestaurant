{{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div> 
            <div class="modal-body  "><!-- login-page -->     
                <div class="login-top sign-top">
                    <div class="agileits-login">
                    <h5>Login Here</h5>
                    <form action="#" method="post">
                        <input type="email" class="email" name="Email" placeholder="Email" required=""/>
                        <input type="password" class="password" name="Password" placeholder="Password" required=""/>
                        <div class="wthree-text"> 
                            <ul> 
                                <li>
                                    <label class="anim">
                                        <input type="checkbox" class="checkbox">
                                        <span> Remember me ?</span> 
                                    </label> 
                                </li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>  
                        <div class="w3ls-submit"> 
                            <input type="submit" value="LOGIN">  	
                        </div>	
                    </form>

                    </div>  
                </div>
            </div>  
        </div> <!-- //login-page -->
    </div>
</div> --}}
<style>
    .top-nav-text a {
        display: inline-block;
        color: rgb(0, 0, 0);
        font-size: 1.2em;
        text-decoration: none;
        letter-spacing: 2px;
    }
    .agileits-login {
padding:3em;
}
.agileits-login input[type="text"], .agileits-login input[type="password"], .agileits-login input[type="email"], .agileits-login textarea {
outline: none;
font-size: 1em;
color: #fff;
padding: 1em;
letter-spacing: 1px;
margin: 0;
width: 100%;
border: none;
-webkit-appearance: none;
margin-bottom: 2em;
background: #353434;
border-bottom: 2px solid #eb422a;
}
.agileits-login textarea {
resize:none;
height:80px;
margin-bottom:0!important;
}
.agileits-login h5{
font-size:1.8em;
color:#000;
text-align:center;
text-transform:uppercase;
font-weight:600;
letter-spacing:1px;
margin-bottom:1.5em;
}
.agileits-login ::-webkit-input-placeholder {
color: #fff; 
} 
.agileits-login :-moz-placeholder { /* Firefox 18- */
color: #fff;
} 
.agileits-login ::-moz-placeholder {  /* Firefox 19+ */
color: #fff; 
} 
.agileits-login :-ms-input-placeholder {  
color: #fff; 
}
.modal-body {
padding: 0 !important;
}
/*-- checkbox --*/
.agileits-login label {
font-size: 1em;
color: #000;
letter-spacing: 0.5px;
font-weight: 400;
cursor: pointer;
position: relative;
}
input.checkbox {
background: #eb422a;
cursor: pointer;
width: 1.2em;
height: 1.2em;
display: inline-block;
margin: 0 5px 0 0;
vertical-align: text-bottom;
}
input.checkbox:before {
content: "";
position: absolute;
width: 1.2em;
height: 1.2em;
background: inherit;
cursor: pointer;
}
input.checkbox:after {
content: ""; 
position: absolute;
top: 0px;
left: 0;
z-index: 1;
width: 1.2em;
height: 1.2em;
border: 1px solid #fff; 
-webkit-transition: .4s ease-in-out;
-moz-transition: .4s ease-in-out; 
transition: .4s ease-in-out;
}
input.checkbox:checked:after {
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
-ms-transform: rotate(-45deg);
transform: rotate(-45deg);
height: 1.2em;
border-color: #fff;
border-top-color: transparent;
border-right-color: transparent;
}
.anim input.checkbox:checked:after {
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
-ms-transform: rotate(-45deg);
transform: rotate(-45deg);
height: .6em;
border-color: transparent;
border-right-color: transparent;
animation: .4s rippling .4s ease;
animation-fill-mode: forwards;
}
@keyframes rippling {
50% {
border-left-color: #fff;
}
100% {
border-bottom-color: #fff;
border-left-color: #fff;
}
} 
/*-- //checkbox --*/
.wthree-text {
margin-top: 0.5em;
}
.wthree-text ul li {
display: inline-block;
}
.wthree-text ul li a {
font-size: 1em;
color: #fff;
letter-spacing: 0.5px;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
-ms-transition: 0.5s all;
}
.wthree-text ul li a:hover {
text-decoration: underline;
}
.w3ls-submit {
text-align: center;
margin-top: 2.5em;
} 
.agileits-login input[type="submit"] {
font-size: 1em;
color: #fff;
border:none;
outline: none;
padding: .8em 5em;
-webkit-appearance: none;
text-transform: uppercase;
transition: .5s all;
background: #eb422a;
display: inline-block;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
-ms-transition: 0.5s all;
}
.agileits-login input[type="submit"]:hover {
background:#26d797;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
-ms-transition: 0.5s all;
} 
.modal-header {
border-bottom: none;
}
div#myModal2 {
z-index: 9999;
}

</style>




{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

<div class="container mt-5" >
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" v-if="!submitted">
                    <div class="forms-inputs mb-4"> <span>Email or username</span> <input autocomplete="off" type="text" v-model="email" v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}" v-on:blur="emailBlured = true">
                        <div class="invalid-feedback">A valid email is required!</div>
                    </div>
                    <div class="forms-inputs mb-4"> <span>Password</span> <input autocomplete="off" type="password" v-model="password" v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}" v-on:blur="passwordBlured = true">
                        <div class="invalid-feedback">Password must be 8 character!</div>
                    </div>
                    <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100">Login</button> </div>
                </div>
                <div class="success-data" v-else>
                    <div class="text-center d-flex flex-column"> <i class='bx bxs-badge-check'></i> <span class="text-center fs-1">You have been logged in <br> Successfully</span> </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

.card {
    border: none;
    height: 320px
}

.forms-inputs {
    position: relative
}

.forms-inputs span {
    position: absolute;
    top: -18px;
    left: 10px;
    background-color: #fff;
    padding: 5px 10px;
    font-size: 15px
}

.forms-inputs input {
    height: 50px;
    border: 2px solid #eee
}

.forms-inputs input:focus {
    box-shadow: none;
    outline: none;
    border: 2px solid #000
}

.btn {
    height: 50px
}

.success-data {
    display: flex;
    flex-direction: column
}

.bxs-badge-check {
    font-size: 90px
}
</style> --}}