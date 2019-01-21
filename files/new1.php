<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn,'test');
if(!$conn)
{
die("failed".mysqli_error($conn));
}
if(isset($_POST['submit']))
{
$vend_Code=$_POST['V_code'];
$barea=$_POST['business_area'];
$req_type="a";
$altvend_code=$_POST['a_name'];
$reason=$_POST['reason'];
$bn=$_POST['bank_name'];
$ifsc=$_POST['ifsc_code'];
$neft=$_POST['neft_code'];
$baddr=$_POST['bank_addr'];
$acctype=$_POST['acc_type'];
$acc_no=$_POST['acc_no'];
$reacc=$_POST['re_acc_no'];
$email=$_POST['email'];
$cancel=$_POST['can_cheque'];
$letter=$_POST['letter'];
$site_co=$_POST['site_co'];
$s="select emp_no from emp_master where emp_name='$site_co';";
$Ch=mysqli_query($conn,$s);
$Ch=mysqli_fetch_assoc($Ch);
$emp_no=$Ch['emp_no'];
$sq="select SYSDATE();";
$c=mysqli_query($conn,$sq);
$x=mysqli_fetch_assoc($c);
$x=$x['SYSDATE()'];

$sql="INSERT INTO vendor_account_req_info
   (VENDOR_CODE,
  REQUEST_TYPE,
  REASON,
    BANK_NAME, 
    BANK_ADDRESS, 
    ACCOUNT_NO, 
    ACCOUNT_TYPE, 
    BANK_FILE_NAME, 
    VENDOR_FILE_NAME, 
    REQUESTING_DATE, 
    BUSINESS_AREA, 
    IFSC_CODE,
    NEFT_CODE,
    VENDOR_EMAIL,
    SITE_CO_EMP_NO,
    ALTERNATEVENDORCODE) VALUES('$vend_Code','$req_type', '$reason',
    '$bn', '$baddr' , 'acc_no', '$acctype', '$cancel', '$letter', '$x' , '$barea', '$ifsc', '$neft', '$email', '$emp_no', 
    '$altvend_code');" ;

    $check=mysqli_query($conn,$sql);
    if(!$check)
    {
      die("failed".mysqli_error($conn));
    }
   else{
       ?>
       <script>
        function pageredirect()
        {
            window.location.replace("re.html");
        }
        setTimeout("pageredirect()", 1);

      
    </script>
    <?php
}
   }
   else{
    die("failed");
   }
    ?>
   