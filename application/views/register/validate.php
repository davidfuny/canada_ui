<?php
$this->load->view('header.php');
?>

<div class="mobile_section">
    <div class="imgcontainer">

        <p><img class="police" src="<?php echo base_url(); ?>assets/images/police.png" alt="" ></p>
        <form class='form' action="<?php echo site_url('register/verify') ?>" method="post">
            <div class="container">
                <div style="color: red" align="center"> <?php
                    if(isset($message)) {
                        echo ($message);
                    }
                    ?></div>
                <label for="uname" id="'user"><b><?=$this->lang->line('sms_text');?></b></label>
                <input type="text" placeholder="SMS number" name="sms" id="sms_number"  style="float: left">
                <span id="count_time" >60s</span>
                <p id="demo"><?=$this->lang->line('sent');?></p>
                <button style="display: none " id="resend"><a style="text-decoration: none;color: white"  href="<?php echo site_url('register/resend') ?>" ><?=$this->lang->line('resend_sms');?></a></button>

                <button type="submit" id="login" style="display: block "><?=$this->lang->line('verify');?></button>


            </div>
        </form>

    </div>
</div>
<br>
<div  class="site-footer">

    <div class="textwidget" style="text-align: center;margin: auto"><p>All products and company names are patented worldwide, trademarks <sup>TM</sup> or registered<sup>®</sup> trademarks of MeFon.</p></div></section>


</div>
<style>
    #count_time{
        float: left;
        margin-left: -43px;
        margin-top: 23px
    }
    @media only screen and (max-width: 700px) {
        #count_time{
            margin-top: 20px
        }
    }
</style>
<!--<script type="text/javascript">-->
<!--    $( document ).ready(function() {-->
<!--        console.log( "ready!" );-->
<!--    });-->
<!--</script>-->
<script>
    // Set the date we're counting down to
    var countDownDate = 60;
    // Update the count down every 1 second
    var x = setInterval(function() {
        // Find the distance between now and the count down date
         countDownDate = countDownDate - 1;
        // Display the result in the element with id="demo"
        document.getElementById("count_time").innerHTML =countDownDate + "s ";
        // If the count down is finished, write some text
        if (countDownDate < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "<?=$this->lang->line('resend_issue');?>";
            document.getElementById("count_time").innerHTML ="";
            document.getElementById("resend").style.display = "block";
            document.getElementById("login").style.display = "none";
            document.getElementById("sms_number").style.display = "none";
        }
    }, 1000);
</script>
</body>
</html>