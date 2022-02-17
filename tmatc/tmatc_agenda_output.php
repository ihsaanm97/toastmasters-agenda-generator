<?php 

if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $meeting_no = $_POST['meeting_no'];
    $meeting_venue = $_POST['meeting_venue'];
    $meeting_date = $_POST['meeting_date'];
    $meeting_time = $_POST['meeting_time'];
    // $meeting_start_arr = split(" ", $meeting_time);                              'might use these later - felt nice to use the split function :D
    // $meeting_start_time = trim($meeting_start_arr[0],"apm,- ");
    // $meeting_end_time = trim($meeting_start_arr[2],"apm,- ");
    
    // $meeting_date = date_format_new($meeting_date);
    $meeting_theme = $_POST['meeting_theme'];
    $role_players_time = $_POST['role_players_time'];

    $tech_master = $_POST['tech_master'];
    $tech_master_time = $_POST['tech_master_time'];

    $saa = $_POST['saa'];
    $saa_time = $_POST['saa_time'];

    $po = $_POST['po'];
    $tmod = $_POST['tmod'];
    $tmod_time2 = $_POST['tmod_time2'];
    $tmod_time3 = $_POST['tmod_time3'];
    $grammarian = $_POST['grammarian'];
    $timer = $_POST['timer'];
    $ac = $_POST['ac'];
    
    $prep_speeches_time = $_POST['prep_speeches_time'];
    $sp1_name = $_POST['sp1_name'];
    $sp1_title = $_POST['sp1_title'];
    $sp2_name = $_POST['sp2_name'];
    $sp2_title = $_POST['sp2_title'];
    
    if(isset($_POST['sp3_name']))
        $sp3_name = $_POST['sp3_name'];
    if(isset($_POST['sp3_title']))
        $sp3_title = $_POST['sp3_title'];
    if(isset($_POST['sp4_name']))
        $sp4_name = $_POST['sp4_name'];
    if(isset($_POST['sp4_title']))
        $sp4_title = $_POST['sp4_title'];
    if(isset($_POST['sp5_name']))
        $sp5_name = $_POST['sp5_name'];
    if(isset($_POST['sp5_title']))
        $sp5_title = $_POST['sp5_title'];
    if(isset($_POST['sp6_name']))
        $sp6_name = $_POST['sp6_name'];
    if(isset($_POST['sp6_title']))
        $sp6_title = $_POST['sp6_title'];
    if(isset($_POST['sp7_name']))
        $sp7_name = $_POST['sp7_name'];
    if(isset($_POST['sp7_title']))
        $sp7_title = $_POST['sp7_title'];
    if(isset($_POST['sp8_name']))
        $sp8_name = $_POST['sp8_name'];
    if(isset($_POST['sp8_title']))
        $sp8_title = $_POST['sp8_title'];

    $ttm = $_POST['ttm'];
    $ttm_time = $_POST['ttm_time'];
    if(isset($_POST['ttm_include']))
        $ttm_include = $_POST['ttm_include'];
    
    $ev_time = $_POST['ev_time'];
    $ge = $_POST['ge'];
    if(isset($_POST['ev1_name']))
        $ev1_name = $_POST['ev1_name'];
    if(isset($_POST['ev2_name']))
        $ev2_name = $_POST['ev2_name'];
    if(isset($_POST['ev3_name']))
        $ev3_name = $_POST['ev3_name'];
    if(isset($_POST['ev4_name']))
        $ev4_name = $_POST['ev4_name'];
    if(isset($_POST['ev5_name']))
        $ev5_name = $_POST['ev5_name'];
    if(isset($_POST['ev6_name']))
        $ev6_name = $_POST['ev6_name'];
    if(isset($_POST['ev7_name']))
        $ev7_name = $_POST['ev7_name'];
    if(isset($_POST['ev8_name']))
        $ev8_name = $_POST['ev8_name'];
    
    $po_closing_time = $_POST['po_closing_time'];

    $meeting_adj_time = $_POST['meeting_adj_time'];




?>
<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
    <title>Meeting #<?php echo $meeting_no; ?> Agenda</title>
    <meta name="keywords" content="Toastmasters, Agenda, Meeting, TMATC, TCS Maitree, Adibatla">
    <meta name="author" content="Ihsaan Muhiyadheen">
    <base target='_blank' />
    <style>
        *{
            font-family: Gotham, Calibri, Arial, Helvetica, sans-serif;
        }
        body{
            display:block;
            margin-left: auto;
            margin-right: auto;
            width: 100%; 
        }
        img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width:100%;
        }
        #left-inner-table{
            margin-left: 5px;
            width:90%;
        }
        #master-table{
            margin-top: 20px;
            width:100%;
        }
        .xcom-title{
            margin-top: 10px;
            font-size: large;
            color: #004165;
            font-weight: bold;
        }
        .xcom-name{
            font-weight: 500;
            margin-top: 3px;
        }
        .xcom-email{
            font-style: italic;
            margin-right: 2px;
            margin-top: 2px;
        }
        .additional-info-header{
            margin-top: 12px;
            text-align: left;
            font-weight: bold;
            font-size: large;
            color: #772432;
        }
        .time-td{
            font-weight: bold;
            text-align: center;
        }
        .normal-text{
            font-weight: 400;
        }
        .empty-tr{
            height: 8px;
        }
        
        footer{
            margin-top: 20px;
            font-size: small;
            font-weight: 500;
            text-align: center;
            width: 95%;
            margin: 20px auto;
        }
        a:visited{
            color:blue;
        }
        .contact-name{
            font-weight: 500;
            margin-top: 3px;
        }
    </style>
</head>
    <body onload="printPage()">
    <script>
        function printPage(){
            window.print();
        }
    </script>
    <header>
        <img src="TMATC Agenda Header2.jpg" alt="TMATC Web Header">
    </header>
    <table id="master-table">
        <tr>                                            <!---The only single row of master table--->
            <td id="left-table-cell" style="width: 27%;">
                <table id="left-inner-table">
                    <th style="text-align: left; font-size: x-large; color: #772432;" >
                        <div>Executive</div>
                        <div>Committee</div>
                    </th>
                    <tr>                                <!--President-->
                        <td>                
                            <div class="xcom-title">President</div>
                            <div class="xcom-name">Venu Alampally <span class="xcom-empid" style="font-weight: normal; font-style:italic;">(1100170)</span></div>
                            <div class="xcom-email">A.venu@tcs.com</div>
                        </td>
                    </tr>
                    <tr>                                <!--Vice President Education-->
                        <td>                
                            <div class="xcom-title">VP Education</div>
                            <div class="xcom-name">Gudimetla Naga Monika <span class="xcom-empid" style="font-weight: normal; font-style:italic;">(1581917)</span></div>
                            <div class="xcom-email">gudimetla.monika@tcs.com</div>
                        </td>
                    </tr>
                    <tr>                                <!--Vice President Membership-->
                        <td>                
                            <div class="xcom-title">VP Membership</div>
                            <div class="xcom-name">Marru Mani Sai Deeraj <span class="xcom-empid" style="font-weight: normal; font-style:italic;">(1527867)</span></div>
                            <div class="xcom-email">manisai.marru@tcs.com</div>
                        </td>
                    </tr>
                    <tr>                                <!--Vice President Public Relations-->
                        <td>                
                            <div class="xcom-title">VP Public Relations</div>
                            <div class="xcom-name">Kiranmaye Vuyyuru <span class="xcom-empid" style="font-weight: normal; font-style:italic;">(1752724)</span></div>
                            <div class="xcom-email">kiranmaye.vuyyuru@tcs.com</div>
                        </td>
                    </tr>
                    <tr>                                <!--Secretary-->
                        <td>                
                            <div class="xcom-title">Secretary</div>
                            <div class="xcom-name">Lavanya Pobbathi <span class="xcom-empid" style="font-weight: normal; font-style:italic;">(1542399)</span></div>
                            <div class="xcom-email">lavanya.pobbathi3@tcs.com</div>
                        </td>
                    </tr>
                    <tr>                                <!--Treasurer-->
                        <td>                
                            <div class="xcom-title">Treasurer</div>
                            <div class="xcom-name">Radhika <span class="xcom-empid" style="font-weight: normal; font-style:italic;">(245602)</span></div>
                            <div class="xcom-email">radhika.madgula@tcs.com</div>
                        </td>
                    </tr>
                    <tr>                                <!--Sergeant at Arms-->
                        <td>                
                            <div class="xcom-title">Sergeant at Arms</div>
                            <div class="xcom-name">Kancherla Sai Bharat Kumar <span class="xcom-empid" style="font-weight: normal; font-style:italic;">(1345589)</span></div>
                            <div class="xcom-email">saibharath.kancherla@tcs.com</div>
                        </td>
                    </tr>
                    <tr >                                <!--Schedule-->
                        <td>
                            <div style="font-weight: bold; margin-top:12px;">We meet Every Saturday from 10:30am to 12:30pm.</div>
                    </tr>
                    <tr class="additional-info">                                <!--Toastmasters International Website-->
                        <td>                
                            <div class="additional-info-header">Toastmasters International Website</div>
                            <div><a href="https://www.toastmasters.org/">www.toastmasters.org</a></div>
                        </td>
                    </tr>
                    
                    <tr class="additional-info">                                <!--Contact Us-->
                        <td>                
                            <div class="additional-info-header">Contact Us</div>
                            <div class="contact-name">Rohit - <a style="font-weight:normal" class="contact-anchor" href="https://wa.me/919494185727">+91 94941 85727</a></div>
                            <div class="contact-name">Mail To - <span class="xcom-empid" style="font-weight: normal; font-style:italic;">adibatla.toastmasters@tcs.com</span></div>
                        </td>
                    </tr>
                    <tr class="additional-info">                                <!--Contact Us-->
                        <td>                
                            <div class="additional-info-header">Follow Us On</div>
                            <div class="contact-name"><a style="font-weight:normal;" class="contact-anchor" href="https://www.facebook.com/TMADB1/">Facebook</a></div>
                            <div class="contact-name"><a style="font-weight:normal;" class="contact-anchor" href="www.instagram.com/tmadb1">Instagram</a></div>
                            <!-- <div class="contact-name"><a style="font-weight:normal" class="contact-anchor" href="">Instagram</a></div>                             -->
                        </td>
                    </tr>
                    <!-- <tr class="additional-info">
                        <td>
                            <div class="additional-info-header">Club Mission</div>
                            <div style="font-style:italic; margin-bottom: 10px; margin-top:5px;">The mission of a Toastmasters Club is to provide a supportive and positive learning experience in which members are
        empowered to develop communication and leadership skills, resulting in greater self-confidence and personal growth.</div>
                        </td>
                    </tr> -->
                </table>
            </td>
            <td style="background-color: black; width: 0.5px;"></td>
            <td id="right-table-cell" style="padding-right: 5px;">
                <table id="right-inner-table" style=" width: 100%;">
                    <th colspan="3" style="font-size: larger; color: #004165;">
                        <div>Venue: <?php echo $meeting_venue . " #" . $meeting_no; ?> </div>
                        <div>Date: <?php echo $meeting_date; ?></div>
                        <div>Time: <?php echo $meeting_time; ?></div>
                        <div>Theme: "<?php echo $meeting_theme; ?>"</div>
                    </th>
                    <tr class="empty-tr">
                        
                    </tr>
                    <tr style="color: #772432; font-size: large;">
                        <th style="width: 10%;">Time</th><th style="width: 70%;">Program</th><th style="width: 20%; text-align: left;">Role Players</th>
                    </tr>
                    <tr class="empty-tr">
                        
                    </tr>
                    <tr>
                        <td class="time-td"><?php echo $role_players_time; ?></td><td class="normal-text">Role Players Discussion to Know Your Role Responsiblities.</td><td class="normal-text">All</td>
                    </tr>
                    <tr class="empty-tr">
                        
                    </tr>
                    <tr>
                        <td class="time-td"><?php echo $tech_master_time; ?></td><td class="normal-text">Zoom Master opens the meeting room.</td><td class="normal-text"><?php echo $tech_master; ?></td>
                    </tr>
                    <tr class="empty-tr">
                        
                    </tr>
                    <tr>
                        <td class="time-td"><?php echo $saa_time; ?></td><td class="normal-text">General Instructions by the Sergeant-at-Arms.</td><td class="normal-text"><?php echo $saa;?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">Address by the Presiding Officer.</td><td class="normal-text"><?php echo $po; ?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">Toastmaster of the Day.</td><td class="normal-text"><?php echo $tmod; ?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">Grammarian</td><td class="normal-text"><?php echo $grammarian; ?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">Ah-Counter</td><td class="normal-text"><?php echo $ac; ?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">Timer</td><td class="normal-text"><?php echo $timer; ?></td>
                    </tr>
                    <tr class="empty-tr">
                        
                    </tr>
                    <tr>
                        <th><?php echo $prep_speeches_time; ?></th><th style="text-align:left;">Prepared Speeches</th><td></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text"><?php echo $sp1_title; ?></td><td class="normal-text"><?php echo $sp1_name; ?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text"><?php echo $sp2_title; ?></td><td class="normal-text"><?php echo $sp2_name; ?></td>
                    </tr>
                    <tr style="display:<?php if(!isset($_POST['sp3_title'])) echo 'none';?>;">
                        <td class="time-td"></td><td class="normal-text"><?php echo $sp3_title; ?></td><td class="normal-text"><?php echo $sp3_name; ?></td>
                    </tr>
                    <?php if(isset($_POST['sp4_title']) && $sp4_title != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>$sp4_title</td><td class='normal-text'>$sp4_name</td>
                    </tr>
                    ";?>
                    <?php if(isset($_POST['sp5_title']) && $sp5_title != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>$sp5_title</td><td class='normal-text'>$sp5_name</td>
                    </tr>
                    ";?>
                    <?php if(isset($_POST['sp6_title']) && $sp6_title != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>$sp6_title</td><td class='normal-text'>$sp6_name</td>
                    </tr>
                    ";?>
                    <?php if(isset($_POST['sp7_title']) && $sp7_title != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>$sp7_title</td><td class='normal-text'>$sp7_name</td>
                    </tr>
                    ";?>
                    <?php if(isset($_POST['sp8_title']) && $sp8_title != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>$sp8_title</td><td class='normal-text'>$sp8_name</td>
                    </tr>
                    ";?>
                    <tr class="empty-tr">
                        
                    </tr>
                    <tr>
                        <td class="time-td"><?php echo $tmod_time2; ?></td><td class="normal-text">Toastmaster of the Day.</td><td class="normal-text"><?php echo $tmod;?></td>
                    </tr>
                    <tr style="display: <?php if(!isset($_POST['ttm_include']) || $ttm_include != 'ttmYes') echo 'none';?>;" class="empty-tr">
                        
                    </tr>
                    <tr style="display: <?php if(!isset($_POST['ttm_include']) || $ttm_include != 'ttmYes') echo 'none';?>;">
                        <th><?php echo $ttm_time; ?></th><th style="text-align:left;">Table Topics Session</th><td class="normal-text"><?php echo $ttm; ?></td>
                    </tr style="display: <?php if(!isset($_POST['ttm_include'])) echo 'none';?>;">
                    <tr style="display: <?php if(!isset($_POST['ttm_include']) || $ttm_include != 'ttmYes') echo 'none';?>;" class="empty-tr">
                        
                    </tr>
                    <tr  style="display: <?php if(!isset($_POST['ttm_include']) || $ttm_include != 'ttmYes') echo 'none';?>;">
                        <td class="time-td"><?php echo $tmod_time3; ?></td><td class="normal-text">Toastmaster of the Day.</td><td class="normal-text"><?php echo $tmod;?></td>
                    </tr>
                    <tr class="empty-tr">
                        
                    </tr>
                    <tr>
                        <th><?php echo $ev_time; ?></th><th style="text-align:left;">Evaluation</th><td></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">General Evaluator explains the evaluation round.</td><td class="normal-text"><?php echo $ge; ?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">Speech Evaluator 1</td><td class="normal-text"><?php echo $ev1_name; ?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">Speech Evaluator 2</td><td class="normal-text"><?php echo $ev2_name; ?></td>
                    </tr>
                    
                    <?php if(isset($_POST['ev3_name']) && $ev3_name != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>Speech Evaluator 3</td><td class='normal-text'>$ev3_name</td>
                    </tr>
                    ";?>
                    <?php if(isset($_POST['ev4_name']) && $ev4_name != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>Speech Evaluator 4</td><td class='normal-text'>$ev4_name</td>
                    </tr>
                    ";?>
                    <?php if(isset($_POST['ev5_name']) && $ev5_name != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>Speech Evaluator 5</td><td class='normal-text'>$ev5_name</td>
                    </tr>
                    ";?>
                    <?php if(isset($_POST['ev6_name']) && $ev6_name != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>Speech Evaluator 6</td><td class='normal-text'>$ev6_name</td>
                    </tr>
                    ";?>

                    <?php if(isset($_POST['ev7_name']) && $ev7_name != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>Speech Evaluator 7</td><td class='normal-text'>$ev7_name</td>
                    </tr>
                    ";?>
                    <?php if(isset($_POST['ev8_name']) && $ev8_name != "") echo "
                    <tr>
                        <td class='time-td'></td><td class='normal-text'>Speech Evaluator 8</td><td class='normal-text'>$ev8_name</td>
                    </tr>
                    ";?>
                    
                    <tr class="empty-tr">
                        
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">Ah-Counter's Report</td><td class="normal-text"><?php echo $ac; ?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">Timer's Report</td><td class="normal-text"><?php echo $timer; ?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">Grammarian's Report</td><td class="normal-text"><?php echo $grammarian; ?></td>
                    </tr>
                    <tr>
                        <td class="time-td"></td><td class="normal-text">General evaluator provides an overall evaluation.</td><td class="normal-text"><?php echo $ge; ?></td>
                    </tr>
                    <tr class="empty-tr">
                        
                    </tr>
                    <tr>
                        <td class="time-td"><?php echo $po_closing_time;?></td><td class="normal-text">Awards and closing remarks by Presiding Officer.</td><td class="normal-text"><?php echo $po; ?></td>
                    </tr>             
                    <tr class="empty-tr">
                        
                    </tr>
                    <tr>
                        <td class="time-td"><?php echo $meeting_adj_time; ?></td><td class="normal-text">Meeting adjourned.</td><td class="normal-text"></td>
                    </tr>
                </table>
            </td>
            
            </td>
        </tr>
    </table>
    <footer>The mission of a Toastmasters Club is to provide a supportive and positive learning experience in which members are
        empowered to develop communication and leadership skills, resulting in greater self-confidence and personal growth.</footer>
</body>
</html>
<?php 
}
// function date_format_new($meeting_date)
// {
//     $date_arr = split("\\", $meeting_date);
//     $day = $date_arr[2];
//     $month = $date_arr[1];
//     $year = $date_arr[0];

//     $meeting_date_new = $day . "th";

//     return $meeting_date;

// }

?>