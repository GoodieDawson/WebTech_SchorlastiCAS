<!Doctype html>
<html >
<head>
    <title> <title>FlickTick</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
    <link rel="stylesheet" type ="text/css" href="../css/register.css"/>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    
</head>
<body style = "background-image:url(https://images.unsplash.com/photo-1502847427791-d0194ec4cff4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80); height:100px; ">  

<div class="container">
    <div class="row">
        
    <br><br><br><br><br>

       <h2 style= "color:blanchedalmond; text-align:center" class="col-sm-offset-3 col-sm-6">REGISTER <br> <br></h3>
      

    </div class="row">
        <div class="col-sm-offset-1 col-sm-2">
        </div>
        <div class="col-sm-6">
            <form action="r" method="post" accept-charset="utf-8" class="form" role="form">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name"  />                        </div>
                    <div class="col-xs-6 col-md-6">
                        <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"  />                        </div>
                </div>
                <br>
                <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  />
                <br>
                <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
                <br>
                <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"  />
                    
                <BR> <label style= color:blanchedalmond;>BIRTH DATE</label>
            
                <br>
                    <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select name="month" class = "form-control input-lg">
                                <option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option>
                                <option value="04">Apr</option><option value="05">May</option><option value="06">Jun</option>
                                <option value="07">Jul</option><option value="08">Aug</option><option value="09">Sep</option>
                                <option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-xs-4 col-md-4">
                            <select name="day" class = "form-control input-lg">
                                <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
                                <option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                                <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
                                <option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="21">21</option>
                                <option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
                                <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option>
                                <option value="30">30</option><option value="31">31</option>
                            </select>                        
                        </div>
                  

                        <div class="col-xs-4 col-md-4">
                            <select name="year" class = "form-control input-lg">
                                <option value="1997">1997</option> <option value="1998">1998</option> <option value="1999">1999</option> <option value="2000">2000</option>
                                <option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option>
                                <option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option>
                                <option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option>
                                <option value="2013">2013</option><option value="2014">2014</option> <option value="2015">2015</option> <option value="2016">2016</option>
                                <option value="2017">2017</option> <option value="2018">2018</option> <option value="2019">2019</option>
                            </select>
                        </div>
                        <br>
                    </div>
                    <label style= color:blanchedalmond;>GENDER : </label>
                    &nbsp; <label style= color:blanchedalmond; class="radio-inline">
                        <input  type="radio" name="gender" value="M" id=male />Male
                    </label>
                    &nbsp; <label style= color:blanchedalmond; class="radio-inline">
                        <input type="radio" name="gender" value="F" id=female />Female
                    </label>
                    <br />

                    <BR>
                <span style= color:blanchedalmond; class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                <BR>
                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="cbuttton" style ="background-color:black;color:white;width:500px;height:50px;border" >CREATE ACCOUNT</button>
            </form>          
        </div>
      </div>
    </div>
</div>
</body>
</html>