<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TecVive | Where Quality Meets Perfection</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="icon" href="assets/img/fav.png" type="images/png" sizes="16x16">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-179378971-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-179378971-1');
    </script>
           
    <?php
    
    if(isset($_POST['submit']))
    {
        //echo "<script>alert('Hai');</script>";
    $fullname = $_POST["fullname"];
    $BusinessName = $_POST["BusinessName"];
    $Address = $_POST["Address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $services = $_POST["services"];
    $country = $_POST["country"];
    $pincode = $_POST["pincode"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $customMessage = $_POST["message"];
    
    // // echo $fullname."-".$BusinessName."-".$Address."-".$city."-".$state."-".$services."-".$country."-".$pincode."-".$phone."-".$email."-".$message;

    $to = "support@tecvive.com,amundakkal@tecvive.com";
    $subject = "Tecvive Contact Data";

    $message = "Full Name :".$fullname."<br/>";
    $message .= "\r Business Name :".$BusinessName."<br/>";
    $message .= "\r Address :".$Address."<br/>";
    $message .= "\r City :".$city."<br/>";
    $message .= "\r State :".$state."<br/>";
    $message .= "\r Services :".$services."<br/>";
    $message .= "\r Country :".$country."<br/>";
    $message .= "\r Pincode :".$pincode."<br/>";
    $message .= "\r Phone Number :".$phone."<br/>";
    $message .= "\r Email :".$email."<br/>";
    $message .= "\r Message :".$customMessage."<br/>";
    
    $message1 = $message . "<br/> Your mail  successfully delivered.Thank you for contacting with us.";

    //  $headers = "From:calcustechies@gmail.com" . "\r\n";
    $headers = "From:support@tecvive.com" . "\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
     
    // $header = "From:calcustechies@gmail.com \r\n";
    $retval = mail($to,$subject,$message,$headers);
    $retval1 = mail($email,$subject,$message1,$headers);
    
    if(isset($retval))//change
    {
        echo "<script>alert('Message Send Successully..!');</script>";
    }
    else
    {
        echo "Message could not be sent...";
    }
      }
     ?>

</head>

<body>
    <div class="shadow" style="background-color: #7F23A2;color: rgb(255,255,255);">
        <div class="container">
            <div class="row text-center">
                <!--div class="col-md-12">
                    <h5 style="font-family: 'Alegreya SC', serif;"><strong>Where Quality Meets Perfection</strong><br>
                    </h5>
                </div-->
            </div>
        </div>
    </div>
    <div>
        <!-- <nav class="navbar navbar-light navbar-expand-md navigation-clean" id="navigation" style="background-color: rgba(127,35,162,0.04);color: rgb(255,255,255);">
            <div class="container"><a class="navbar-brand" href="index.html"><img
                        src="assets/img/logo-1.png"></a><button data-toggle="collapse" class="navbar-toggler"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav border rounded shadow-lg ml-auto" style="background-color: #834cb9;">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html"
                                style="color: rgb(255,255,255);">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.html"
                                style="color: rgb(255,255,255);">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="services.html"
                                style="color: rgb(255,255,255);">Services</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.php"
                                style="color: rgb(255,255,255);">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav> -->
  
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" id="navigation" style="background-color:#d2dadf;color:rgb(255,255,255);">
                <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/logo-1.png"></a><button data-toggle="collapse" class="navbar-toggler"
                    data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav border rounded shadow-lg ml-auto" style="background-color:  hsl(209, 68%, 48%);">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="index.html"
                                style="color: rgb(255,255,255);">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.html"
                                style="color: rgb(255,255,255);">About Us</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="medical_devices.html"
                                style="color: rgb(255,255,255);">Medical Devices</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="placement.html"
                            style="color: rgb(255,255,255);">Placement Services</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="contactus.php"
                                style="color: rgb(255,255,255);">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container" style="padding-top: 25px;">
        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Contact Information</h4><button type="button" class="close" data-dismiss="modal"
                            aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <!--<form id="contactForm" action="javascript:void();" method="get"><input class="form-control"-->
                        <!--        type="hidden" name="Introduction"-->
                        <!--        value="This email was sent from www.mywebsite.com"><input class="form-control"-->
                        <!--        type="hidden" name="subject" value="My Contact Form"><input class="form-control"-->
                        <!--        type="hidden" name="to" value="email@mywebsite.com">-->
                        <!--    <div class="form-row">-->
                        <!--        <div class="col-md-6">-->
                        <!--            <div id="modal-successfail"></div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="form-row">-->
                        <!--        <div class="col-md-6" id="modal-message">-->
                        <!--            <fieldset>-->
                        <!--                <legend><i class="fa fa-envelope"></i> Contact Us</legend>-->
                        <!--            </fieldset>-->
                        <!--            <div class="form-group has-feedback"><label for="modal_from_name">Name</label><input-->
                        <!--                    class="form-control" type="text" id="modal_from_name" tabindex="-1"-->
                        <!--                    name="from_name" required="" placeholder="Full Name"></div>-->
                        <!--            <div class="form-group has-feedback"><label-->
                        <!--                    for="modal_from_email">Email</label><input class="form-control" type="email"-->
                        <!--                    id="modal_from_email" name="from_email" required=""-->
                        <!--                    placeholder="Email Address"></div>-->
                        <!--            <div class="form-row">-->
                        <!--                <div class="col-sm-6">-->
                        <!--                    <div class="form-group has-feedback"><label-->
                        <!--                            for="modal_from_phone">Phone</label><input class="form-control"-->
                        <!--                            type="text" id="modal_from_phone" name="from_phone"-->
                        <!--                            placeholder="Primary Phone"></div>-->
                        <!--                </div>-->
                        <!--                <div class="col-sm-6">-->
                        <!--                    <div class="form-group"><label for="modal_calltime">Best Time to-->
                        <!--                            Call</label><select class="form-control" id="modal_calltime"-->
                        <!--                            name="Call Time">-->
                        <!--                            <optgroup label="This is a group">-->
                        <!--                                <option value="12" selected="">This is item 1</option>-->
                        <!--                                <option value="13">This is item 2</option>-->
                        <!--                                <option value="14">This is item 3</option>-->
                        <!--                            </optgroup>-->
                        <!--                        </select></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="form-group"><label for="modal_comments">Comments</label><textarea-->
                        <!--                    class="form-control" id="modal_comments" name="Comments"-->
                        <!--                    placeholder="Enter comments here" rows="5"></textarea></div>-->
                        <!--            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Send-->
                        <!--                    <i class="fa fa-chevron-circle-right"></i></button></div>-->
                        <!--            <hr>-->
                        <!--        </div>-->
                        <!--        <div class="col-md-6">-->
                        <!--            <fieldset>-->
                        <!--                <legend> <i class="fa fa-location-arrow"></i> Locate Us</legend>-->
                        <!--            </fieldset>-->
                        <!--            <div class="form-row">-->
                        <!--                <div class="col-md-12">-->
                        <!--                    <div class="static-map"><a-->
                        <!--                            href="https://www.google.com/maps/place/2+15th+St+NW+Washington+DC+20024"-->
                        <!--                            target="_blank"><img class="img-fluid"-->
                        <!--                                src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12"-->
                        <!--                                alt="Google Map of Washington Monument"></a></div>-->
                        <!--                </div>-->
                        <!--                <div class="col-sm-6">-->
                        <!--                    <fieldset>-->
                        <!--                        <legend><i class="fa fa-envelope"></i> Contact Us</legend>-->
                        <!--                    </fieldset>-->
                        <!--                    <div><span><strong>Name</strong></span></div>-->
                        <!--                    <div><span>email@address.com</span></div>-->
                        <!--                    <div><span>www.awebsite.com</span></div>-->
                        <!--                    <hr>-->
                        <!--                </div>-->
                        <!--                <div class="col-sm-6">-->
                        <!--                    <fieldset>-->
                        <!--                        <legend><i class="fa fa-location-arrow"></i> Our Address</legend>-->
                        <!--                    </fieldset>-->
                        <!--                    <div><span><strong>Office Name</strong></span></div>-->
                        <!--                    <div><span>55 Icannot Dr.</span></div>-->
                        <!--                    <div><span>Daytona Beach, FL 81500</span></div>-->
                        <!--                    <div><abbr data-toggle="tooltip" data-placement="top"-->
                        <!--                            title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</form>-->
                    </div>
                </div>
            </div>
        </div>
        <form id="contactForm1" action="" method="POST">
            <input class="form-control" type="hidden" name="Introduction"
                value="This email was sent from www.mywebsite.com"><input class="form-control" type="hidden"
                name="subject" value="My Contact Form"><input class="form-control" type="hidden" name="to"
                value="email@mywebsite.com">
            <div class="form-row">
                <div class="col-md-6">
                    <div id="successfail"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-8" id="message">
                    <fieldset>
                        <!-- <legend style="font-family: Baloo, cursive;"><i class="fa fa-envelope"></i> Contact Us</legend> -->
                        <legend style="color: rgb(0,0,0)"><i class="fa fa-envelope"></i> <strong>Contact Us</strong></legend>
                    </fieldset>
                    <strong>
                        <div class="form-group has-feedback"><label for="from_name">Full Name *</label><input
                                class="form-control" type="text" id="from_name" tabindex="-1" name="fullname" required=""
                                placeholder="Full Name"></div>
                        <div class="form-group has-feedback"><label for="from_email">Business Name</label><input
                                class="form-control" type="text" id="from_email" required="" placeholder="Business Name"
                                name="BusinessName"></div>
                        <div class="form-group has-feedback"><label for="from_email">Address</label><input
                                class="form-control" type="text" id="from_email" required="" placeholder="Address"
                                name="Address"></div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback"><label for="from_phone">City</label><input
                                        class="form-control" type="text" id="from_phone" placeholder="City" name="city">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="calltime">State</label><input class="form-control"
                                        type="text" id="from_phone" placeholder="State" name="state"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback"><label for="from_phone">Country</label><select
                                        class="form-control" name="country">
                                        <option selected="true" disabled="disabled">Select</option>
                                        <option value="Afghanistan" title="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands" title="Åland Islands">Åland Islands</option>
                                        <option value="Albania" title="Albania">Albania</option>
                                        <option value="Algeria" title="Algeria">Algeria</option>
                                        <option value="American Samoa" title="American Samoa">American Samoa</option>
                                        <option value="Andorra" title="Andorra">Andorra</option>
                                        <option value="Angola" title="Angola">Angola</option>
                                        <option value="Anguilla" title="Anguilla">Anguilla</option>
                                        <option value="Antarctica" title="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda" title="Antigua and Barbuda">Antigua and Barbuda
                                        </option>
                                        <option value="Argentina" title="Argentina">Argentina</option>
                                        <option value="Armenia" title="Armenia">Armenia</option>
                                        <option value="Aruba" title="Aruba">Aruba</option>
                                        <option value="Australia" title="Australia">Australia</option>
                                        <option value="Austria" title="Austria">Austria</option>
                                        <option value="Azerbaijan" title="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas" title="Bahamas">Bahamas</option>
                                        <option value="Bahrain" title="Bahrain">Bahrain</option>
                                        <option value="Bangladesh" title="Bangladesh">Bangladesh</option>
                                        <option value="Barbados" title="Barbados">Barbados</option>
                                        <option value="Belarus" title="Belarus">Belarus</option>
                                        <option value="Belgium" title="Belgium">Belgium</option>
                                        <option value="Belize" title="Belize">Belize</option>
                                        <option value="Benin" title="Benin">Benin</option>
                                        <option value="Bermuda" title="Bermuda">Bermuda</option>
                                        <option value="Bhutan" title="Bhutan">Bhutan</option>
                                        <option value="Bolivia, Plurinational State of"
                                            title="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                        <option value="Bonaire, Sint Eustatius and Saba"
                                            title="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba
                                        </option>
                                        <option value="Bosnia and Herzegovina" title="Bosnia and Herzegovina">Bosnia and
                                            Herzegovina</option>
                                        <option value="Botswana" title="Botswana">Botswana</option>
                                        <option value="Bouvet Island" title="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil" title="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory"
                                            title="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam" title="Brunei Darussalam">Brunei Darussalam
                                        </option>
                                        <option value="Bulgaria" title="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso" title="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi" title="Burundi">Burundi</option>
                                        <option value="Cambodia" title="Cambodia">Cambodia</option>
                                        <option value="Cameroon" title="Cameroon">Cameroon</option>
                                        <option value="Canada" title="Canada">Canada</option>
                                        <option value="Cape Verde" title="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands" title="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic" title="Central African Republic">Central
                                            African Republic</option>
                                        <option value="Chad" title="Chad">Chad</option>
                                        <option value="Chile" title="Chile">Chile</option>
                                        <option value="China" title="China">China</option>
                                        <option value="Christmas Island" title="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands" title="Cocos (Keeling) Islands">Cocos
                                            (Keeling) Islands</option>
                                        <option value="Colombia" title="Colombia">Colombia</option>
                                        <option value="Comoros" title="Comoros">Comoros</option>
                                        <option value="Congo" title="Congo">Congo</option>
                                        <option value="Congo, the Democratic Republic of the"
                                            title="Congo, the Democratic Republic of the">Congo, the Democratic Republic of
                                            the</option>
                                        <option value="Cook Islands" title="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica" title="Costa Rica">Costa Rica</option>
                                        <option value="Côte d'Ivoire" title="Côte d'Ivoire">Côte d'Ivoire</option>
                                        <option value="Croatia" title="Croatia">Croatia</option>
                                        <option value="Cuba" title="Cuba">Cuba</option>
                                        <option value="Curaçao" title="Curaçao">Curaçao</option>
                                        <option value="Cyprus" title="Cyprus">Cyprus</option>
                                        <option value="Czech Republic" title="Czech Republic">Czech Republic</option>
                                        <option value="Denmark" title="Denmark">Denmark</option>
                                        <option value="Djibouti" title="Djibouti">Djibouti</option>
                                        <option value="Dominica" title="Dominica">Dominica</option>
                                        <option value="Dominican Republic" title="Dominican Republic">Dominican Republic
                                        </option>
                                        <option value="Ecuador" title="Ecuador">Ecuador</option>
                                        <option value="Egypt" title="Egypt">Egypt</option>
                                        <option value="El Salvador" title="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea" title="Equatorial Guinea">Equatorial Guinea
                                        </option>
                                        <option value="Eritrea" title="Eritrea">Eritrea</option>
                                        <option value="Estonia" title="Estonia">Estonia</option>
                                        <option value="Ethiopia" title="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)" title="Falkland Islands (Malvinas)">
                                            Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands" title="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji" title="Fiji">Fiji</option>
                                        <option value="Finland" title="Finland">Finland</option>
                                        <option value="France" title="France">France</option>
                                        <option value="French Guiana" title="French Guiana">French Guiana</option>
                                        <option value="French Polynesia" title="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories" title="French Southern Territories">
                                            French Southern Territories</option>
                                        <option value="Gabon" title="Gabon">Gabon</option>
                                        <option value="Gambia" title="Gambia">Gambia</option>
                                        <option value="Georgia" title="Georgia">Georgia</option>
                                        <option value="Germany" title="Germany">Germany</option>
                                        <option value="Ghana" title="Ghana">Ghana</option>
                                        <option value="Gibraltar" title="Gibraltar">Gibraltar</option>
                                        <option value="Greece" title="Greece">Greece</option>
                                        <option value="Greenland" title="Greenland">Greenland</option>
                                        <option value="Grenada" title="Grenada">Grenada</option>
                                        <option value="Guadeloupe" title="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam" title="Guam">Guam</option>
                                        <option value="Guatemala" title="Guatemala">Guatemala</option>
                                        <option value="Guernsey" title="Guernsey">Guernsey</option>
                                        <option value="Guinea" title="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau" title="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana" title="Guyana">Guyana</option>
                                        <option value="Haiti" title="Haiti">Haiti</option>
                                        <option value="Heard Island and McDonald Islands"
                                            title="Heard Island and McDonald Islands">Heard Island and McDonald Islands
                                        </option>
                                        <option value="Holy See (Vatican City State)" title="Holy See (Vatican City State)">
                                            Holy See (Vatican City State)</option>
                                        <option value="Honduras" title="Honduras">Honduras</option>
                                        <option value="Hong Kong" title="Hong Kong">Hong Kong</option>
                                        <option value="Hungary" title="Hungary">Hungary</option>
                                        <option value="Iceland" title="Iceland">Iceland</option>
                                        <option value="India" title="India">India</option>
                                        <option value="Indonesia" title="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of" title="Iran, Islamic Republic of">Iran,
                                            Islamic Republic of</option>
                                        <option value="Iraq" title="Iraq">Iraq</option>
                                        <option value="Ireland" title="Ireland">Ireland</option>
                                        <option value="Isle of Man" title="Isle of Man">Isle of Man</option>
                                        <option value="Israel" title="Israel">Israel</option>
                                        <option value="Italy" title="Italy">Italy</option>
                                        <option value="Jamaica" title="Jamaica">Jamaica</option>
                                        <option value="Japan" title="Japan">Japan</option>
                                        <option value="Jersey" title="Jersey">Jersey</option>
                                        <option value="Jordan" title="Jordan">Jordan</option>
                                        <option value="Kazakhstan" title="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya" title="Kenya">Kenya</option>
                                        <option value="Kiribati" title="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of"
                                            title="Korea, Democratic People's Republic of">Korea, Democratic People's
                                            Republic of</option>
                                        <option value="Korea, Republic of" title="Korea, Republic of">Korea, Republic of
                                        </option>
                                        <option value="Kuwait" title="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan" title="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic"
                                            title="Lao People's Democratic Republic">Lao People's Democratic Republic
                                        </option>
                                        <option value="Latvia" title="Latvia">Latvia</option>
                                        <option value="Lebanon" title="Lebanon">Lebanon</option>
                                        <option value="Lesotho" title="Lesotho">Lesotho</option>
                                        <option value="Liberia" title="Liberia">Liberia</option>
                                        <option value="Libya" title="Libya">Libya</option>
                                        <option value="Liechtenstein" title="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania" title="Lithuania">Lithuania</option>
                                        <option value="Luxembourg" title="Luxembourg">Luxembourg</option>
                                        <option value="Macao" title="Macao">Macao</option>
                                        <option value="Macedonia, the former Yugoslav Republic of"
                                            title="Macedonia, the former Yugoslav Republic of">Macedonia, the former
                                            Yugoslav Republic of</option>
                                        <option value="Madagascar" title="Madagascar">Madagascar</option>
                                        <option value="Malawi" title="Malawi">Malawi</option>
                                        <option value="Malaysia" title="Malaysia">Malaysia</option>
                                        <option value="Maldives" title="Maldives">Maldives</option>
                                        <option value="Mali" title="Mali">Mali</option>
                                        <option value="Malta" title="Malta">Malta</option>
                                        <option value="Marshall Islands" title="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique" title="Martinique">Martinique</option>
                                        <option value="Mauritania" title="Mauritania">Mauritania</option>
                                        <option value="Mauritius" title="Mauritius">Mauritius</option>
                                        <option value="Mayotte" title="Mayotte">Mayotte</option>
                                        <option value="Mexico" title="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of"
                                            title="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of" title="Moldova, Republic of">Moldova, Republic
                                            of</option>
                                        <option value="Monaco" title="Monaco">Monaco</option>
                                        <option value="Mongolia" title="Mongolia">Mongolia</option>
                                        <option value="Montenegro" title="Montenegro">Montenegro</option>
                                        <option value="Montserrat" title="Montserrat">Montserrat</option>
                                        <option value="Morocco" title="Morocco">Morocco</option>
                                        <option value="Mozambique" title="Mozambique">Mozambique</option>
                                        <option value="Myanmar" title="Myanmar">Myanmar</option>
                                        <option value="Namibia" title="Namibia">Namibia</option>
                                        <option value="Nauru" title="Nauru">Nauru</option>
                                        <option value="Nepal" title="Nepal">Nepal</option>
                                        <option value="Netherlands" title="Netherlands">Netherlands</option>
                                        <option value="New Caledonia" title="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand" title="New Zealand">New Zealand</option>
                                        <option value="Nicaragua" title="Nicaragua">Nicaragua</option>
                                        <option value="Niger" title="Niger">Niger</option>
                                        <option value="Nigeria" title="Nigeria">Nigeria</option>
                                        <option value="Niue" title="Niue">Niue</option>
                                        <option value="Norfolk Island" title="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands" title="Northern Mariana Islands">Northern
                                            Mariana Islands</option>
                                        <option value="Norway" title="Norway">Norway</option>
                                        <option value="Oman" title="Oman">Oman</option>
                                        <option value="Pakistan" title="Pakistan">Pakistan</option>
                                        <option value="Palau" title="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied"
                                            title="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                        <option value="Panama" title="Panama">Panama</option>
                                        <option value="Papua New Guinea" title="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay" title="Paraguay">Paraguay</option>
                                        <option value="Peru" title="Peru">Peru</option>
                                        <option value="Philippines" title="Philippines">Philippines</option>
                                        <option value="Pitcairn" title="Pitcairn">Pitcairn</option>
                                        <option value="Poland" title="Poland">Poland</option>
                                        <option value="Portugal" title="Portugal">Portugal</option>
                                        <option value="Puerto Rico" title="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar" title="Qatar">Qatar</option>
                                        <option value="Réunion" title="Réunion">Réunion</option>
                                        <option value="Romania" title="Romania">Romania</option>
                                        <option value="Russian Federation" title="Russian Federation">Russian Federation
                                        </option>
                                        <option value="Rwanda" title="Rwanda">Rwanda</option>
                                        <option value="Saint Barthélemy" title="Saint Barthélemy">Saint Barthélemy</option>
                                        <option value="Saint Helena, Ascension and Tristan da Cunha"
                                            title="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and
                                            Tristan da Cunha</option>
                                        <option value="Saint Kitts and Nevis" title="Saint Kitts and Nevis">Saint Kitts and
                                            Nevis</option>
                                        <option value="Saint Lucia" title="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Martin (French part)" title="Saint Martin (French part)">Saint
                                            Martin (French part)</option>
                                        <option value="Saint Pierre and Miquelon" title="Saint Pierre and Miquelon">Saint
                                            Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines"
                                            title="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                        </option>
                                        <option value="Samoa" title="Samoa">Samoa</option>
                                        <option value="San Marino" title="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe" title="Sao Tome and Principe">Sao Tome and
                                            Principe</option>
                                        <option value="Saudi Arabia" title="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal" title="Senegal">Senegal</option>
                                        <option value="Serbia" title="Serbia">Serbia</option>
                                        <option value="Seychelles" title="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone" title="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore" title="Singapore">Singapore</option>
                                        <option value="Sint Maarten (Dutch part)" title="Sint Maarten (Dutch part)">Sint
                                            Maarten (Dutch part)</option>
                                        <option value="Slovakia" title="Slovakia">Slovakia</option>
                                        <option value="Slovenia" title="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands" title="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia" title="Somalia">Somalia</option>
                                        <option value="South Africa" title="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands"
                                            title="South Georgia and the South Sandwich Islands">South Georgia and the South
                                            Sandwich Islands</option>
                                        <option value="South Sudan" title="South Sudan">South Sudan</option>
                                        <option value="Spain" title="Spain">Spain</option>
                                        <option value="Sri Lanka" title="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan" title="Sudan">Sudan</option>
                                        <option value="Suriname" title="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen" title="Svalbard and Jan Mayen">Svalbard and
                                            Jan Mayen</option>
                                        <option value="Swaziland" title="Swaziland">Swaziland</option>
                                        <option value="Sweden" title="Sweden">Sweden</option>
                                        <option value="Switzerland" title="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic" title="Syrian Arab Republic">Syrian Arab
                                            Republic</option>
                                        <option value="Taiwan, Province of China" title="Taiwan, Province of China">Taiwan,
                                            Province of China</option>
                                        <option value="Tajikistan" title="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of" title="Tanzania, United Republic of">
                                            Tanzania, United Republic of</option>
                                        <option value="Thailand" title="Thailand">Thailand</option>
                                        <option value="Timor-Leste" title="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo" title="Togo">Togo</option>
                                        <option value="Tokelau" title="Tokelau">Tokelau</option>
                                        <option value="Tonga" title="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago" title="Trinidad and Tobago">Trinidad and Tobago
                                        </option>
                                        <option value="Tunisia" title="Tunisia">Tunisia</option>
                                        <option value="Turkey" title="Turkey">Turkey</option>
                                        <option value="Turkmenistan" title="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands" title="Turks and Caicos Islands">Turks and
                                            Caicos Islands</option>
                                        <option value="Tuvalu" title="Tuvalu">Tuvalu</option>
                                        <option value="Uganda" title="Uganda">Uganda</option>
                                        <option value="Ukraine" title="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates" title="United Arab Emirates">United Arab
                                            Emirates</option>
                                        <option value="United Kingdom" title="United Kingdom">United Kingdom</option>
                                        <option value="United States" title="United States">United States</option>
                                        <option value="United States Minor Outlying Islands"
                                            title="United States Minor Outlying Islands">United States Minor Outlying
                                            Islands</option>
                                        <option value="Uruguay" title="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan" title="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu" title="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela, Bolivarian Republic of"
                                            title="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of
                                        </option>
                                        <option value="Viet Nam" title="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British" title="Virgin Islands, British">Virgin
                                            Islands, British</option>
                                        <option value="Virgin Islands, U.S." title="Virgin Islands, U.S.">Virgin Islands,
                                            U.S.</option>
                                        <option value="Wallis and Futuna" title="Wallis and Futuna">Wallis and Futuna
                                        </option>
                                        <option value="Western Sahara" title="Western Sahara">Western Sahara</option>
                                        <option value="Yemen" title="Yemen">Yemen</option>
                                        <option value="Zambia" title="Zambia">Zambia</option>
                                        <option value="Zimbabwe" title="Zimbabwe">Zimbabwe</option>
                                    </select></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="calltime">Zip/PIN Code</label><input
                                        class="form-control" type="text" id="from_phone" placeholder="Zip/PIN Code"
                                        name="pincode"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback"><label for="from_phone">Email</label><input
                                        class="form-control" type="text" id="from_phone" placeholder="Email" name="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="calltime">Phone</label><input class="form-control"
                                        type="text" id="from_phone" placeholder="Phone" name="phone"></div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group has-feedback"><label for="from_email">Service Required
                                        *</label><select class="form-control" name="services">
                                        <optgroup label="Choose Service">
                                            <option value="Technology Products" selected="">Technology Products</option>
                                            <option value="Placement">Placement</option>
                                        </optgroup>
                                    </select></div>
                            </div>
                        </div>
                        <div class="form-group"><label for="comments">Message</label><textarea class="form-control"
                                id="comments" name="message" placeholder="Message" rows="5"></textarea>
                        </div>
                    </strong>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" style="padding: 1%; background-color: hsl(209, 68%, 48%);" name="submit"  data-callback="onSubmit" data-action="submit" value="    Send    ">
                        <!-- <input type="submit" class="btn btn-primary btn-block" style="padding: 1%; background-color: hsl(209, 68%, 48%);" name="submit"  data-callback="onSubmit" data-action="submit" value="Send"> -->
                    </div>
                            <!--<a class="btn btn-primary" role="button" style="padding: 1%; background-color: hsl(209, 68%, 48%);" href="contactus.php">Contact Us</a> -->
                            <!--data-sitekey="reCAPTCHA_site_key" g-recaptcha-->
                    <hr>
                </div>
                <!-- <div class="col-md-6 text-center"><img class="border rounded shadow-lg" src="assets/img/9393%20West,%20110th%20St.%2051%20Corporate%20Woods,%20Suite%20500.png"></div> -->
                <!-- <div class="col-md-4>
                    <p style="padding-top: 10px;"><img class="border rounded-0 shadow-lg" src="assets/img/9393%20West,%20110th%20St.%2051%20Corporate%20Woods,%20Suite%20500.png" width = 300px height = 810px class="right"></p>
                </div>   -->
                <!-- <div class="col-md-4>
                    <p style="padding-top: 10px;"><img class="border rounded-0 shadow-lg" src="assets/img/19.jpg" width = 300px height = 810px class="right"></p>
                </div> -->

                <div class="col-md-4">
                    <p style="padding-top: 10px;"><img class="border rounded-0 shadow-lg" src="assets/img/22.jpg" width = 350px height = 850px class="right"></p>
                </div>
            </div>
        </form>
    </div>
    <footer style="margin-top: 0px;background-color: #1b1b1b;">
        <div class="row">
            <!--div class="col-sm-6 col-md-4 footer-navigation">
                <h3><a href="#"><img src="assets/img/logo-1.png"></a></h3>
                <p class="links" style="font-family: Amaranth, sans-serif;"><strong>Where Quality Meets
                        Perfection</strong><br></p>
                <p class="company-name">©2017 TecVive, LLC.All Rights Reserved.<br></p>
            </div>
            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">9393 West<br></span>110th St. 51 Corporate Woods, Suite
                        500<br>Overland Park, Kansas USA<br></p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left">(913)-220-2457<br></p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@tecvive.com</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p>TecVive Brings The World Class Technology Products and Placement Services To Your Reach<br></p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i
                            class="fa fa-github"></i></a></div>
            </div-->
            <div class="col-md-4 footer-about">
                <h3><a href="#"><img src="assets/img/logo-1.png"></a></h3>
                <h1 style="color: rgb(255,255,255);font-size:17px;"><strong>Where Quality Meets Perfection</strong></h1>
                <p style="color: rgb(121, 120, 120);font-size:15px;"> ©2017 TecVive, LLC.All Rights Reserved.<br></p>               
            </div>

            <div class="col-sm-6 col-md-4 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span" style="color: rgb(255,255,255);font-size:15px;">9393 West, 110th St.<br>
                       51 Corporate Woods, Suite 500<br>Overland Park, Kansas USA<br>
                       </span>
                    </p>
                </div>
                <div><span class="fa fa-phone footer-contacts-icon"></span>
                    <p><span class="new-line-span" style="color: rgb(255,255,255);font-size:15px;">(913)-220-2457<br>
                       </span>
                    </p>
                </div>
                <div><span class="fa fa-envelope footer-contacts-icon"></span>
                    <p><span class="new-line-span" style="color: rgb(255,255,255);font-size:15px;">support@tecvive.com<br>
                       </span>
                    </p>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 footer-about">
            <h1 style="color: rgb(255,255,255);font-size:17px;"><strong>About the company</strong></h1>
                <p style="color: rgb(121, 120, 120);font-size:15px;">TecVive Brings The World Class Medical Devices and Placement Services To Your Reach<br></p>
                <!-- <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                     class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i
                     class="fa fa-github"></i></a>
                </div> -->
            </div>
        </div>
    </footer>
    <script>
        function onSubmit(token) {
            document.getElementById("demo-form").submit();
        }
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>

