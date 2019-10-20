<?php 
include('header.php');
?>

                <div class="container-fluid" style="padding-top: 70px;">
                    <div class="text-center">
                        <img src="imag/text.png" width="40%">
                    </div>
                </div>
                <br>
                <div class="container-fluid text-center">
                    <form action="sear.php" method="POST">
                      <select name="bra" class="headf">
                        <option value="">Branch</option>
                        <option value="CSE">B.Tech CSE</option>
                        <option value="FME">B.Tech FME</option>
                        <option value="ESE">B.Tech ESE</option>
                        <option value="Mech">B.Tech Mech</option>
                        <option value="ME">B.Tech ME</option>
                        <option value="PE">B.Tech PE</option>
                        <option value="MME">B.Tech MME</option>
                        <option value="EE">B.Tech EE</option>
                        <option value="ECE">B.Tech ECE</option>
                        <option value="CIV">B.Tech CIV</option>
                        <option value="DDCSE">DD (M.Tech + B.Tech) CSE</option>
                        <option value="MC">Int. M.Tech M&C</option>
                      </select>
                      <select name="year" class="headf">
                        <option value="">Year</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">Pre Final Year</option>
                        <option value="4">Final Year</option>
                        <option value="5">Super Final Year</option>
                      </select>
                      <select name="clubs" class="headf">
                        <option value="">Clubs</option>
                        <option value="adc">Abhay Dramatics Club</option>
                        <option value="litm">Legends in the Making</option>
                        <option value="wtc">We The Crew</option>
                        <option value="mech">Mechismu Racing</option>
                        <option value="cyber">Cyber Labs</option>
                        <option value="ffi">Fast Forward India</option>
                        <option value="kart">Kartavya</option>
                        <option value="art">Art freaks</option>
                        <option value="ecell">E-Cell</option>
                        <option value="manth">Manthan</option>
                        <option value="md">Mailer Daemon</option>
                      </select>
                      <select name="skills" class="headf">
                         <option value="">Skills</option>
                         <option value="grap">Graphic Designing</option>
                         <option value="phot">Photography</option>
                         <option value="webd">Web Designing</option>
                         <option value="appd">App Development</option>
                         <option value="mach">Machine Learning</option>
                         <option value="comp">Competitive Programming</option>
                         <option value="swim">Swimming</option>
                         <option value="boxi">Boxing</option>
                         <option value="tenn">Tennis</option>
                      </select>
                      <br>
                      <br>
                      <br>
                      <select name="Intern" class="headf">
                        <option value="">Intern</option>
                        <option value="micr">Microsoft</option>
                        <option value="gold">Goldman Sachs</option>
                        <option value="flip">Flipkart</option>
                        <option value="adob">Adobe</option>
                        <option value="sale">SalesForce</option>
                        <option value="foxm">Foxmula</option>
                        <option value="exxo">ExxonMobil</option>
                        <option value="schlu">Schlum</option>
                        <option value="cair">Cairn</option>
                        <option value="sams">Samsung</option>
                        <option value="lnt">L&T Construction</option>
                        <option value="amaz">Amazon</option>
                      </select>
                      <input type="text" name="place" placeholder="Place" class="log1" value="">
                      <select name="placement" class="headf">
                        <option value="">Placements</option>
                        <option value="micr">Microsoft</option>
                        <option value="gold">Goldman Sachs</option>
                        <option value="flip">Flipkart</option>
                        <option value="adob">Adobe</option>
                        <option value="sale">SalesForce</option>
                        <option value="foxm">Foxmula</option>
                        <option value="exxo">ExxonMobil</option>
                        <option value="schlu">Schlum</option>
                        <option value="cair">Cairn</option>
                        <option value="sams">Samsung</option>
                        <option value="lnt">L&T Construction</option>
                        <option value="amaz">Amazon</option>
                      </select>
                      <br><br>
                      <div class="text-center"><input type="submit" name="submit" value="Search.." class="sear4" style="width: 200px;" ></div>
                    </form>
                </div>


<?php 
include('footer.php');
?>