<?php
if (isset($_POST["submit"])) {
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
    $total = $_POST['total'];
    $gender = $_POST['gender'];
    
    //Menyimpan ke DataBase
    if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($phone) || !empty($tanggal) || !empty($total) || !empty($gender)) {
        $hostname = "localhost";
        $username = "id16484008_pujonstrawberry30";
        $password = "p<B)Aget1Hwr3vl4";
        $database = "id16484008_pujonstrawberry";
    
        $conn = new mysqli($hostname, $username, $password, $database);
    
        if ($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }
        else{
            
            //Mengirim email ke web owner serta ke customer
            if (isset($_POST['submit'])){
                $mailto = "adhi.renaldy2@gmail.com";
                $from = $_POST['email'];
                $name = $_POST['firstname'];
                $subject = "Booking Tiket Strawberry Highland Pujon";
                $subject2 = "Booking Success | Strawberry Highland Pujon";
                $message = "Pemesanan Tiket Masuk Strawberry Highland Pujon". "\n\n". "Nama Lengkap : ". $firstname. $lastname. "\n". "Email : ". $email. "\n". "No. Telp : ". $phone. "\n". "Tanggal Berkunjung : ". $tanggal. "\n". "Jumlah Pengunjung : ". $total. "\n". "Jenis Kelamin : ". $gender. "\n";
                $message2 = "Hallo, ". $name.  "\n". "Data pemesanan anda telah tersimpan sebagai berikut, ". "\n\n". "Nama Lengkap : ". $firstname. $lastname. "\n". "Email : ". $email. "\n". "No. Telp : ". $phone. "\n". "Tanggal Berkunjung : ". $tanggal. "\n". "Jumlah Pengunjung : ". $total. "\n". "Jenis Kelamin : ". $gender. "\n\n". "Untuk konfirmasi pemesanan, anda dapat membayar total harga seluruh pemesanan.\n Pembayaran dapat dilakukan melalui:\n OVO = 087876829794\n GoPay = 087876829794". "\n\n". "Terima Kasih atas pemesanan tiketnya. Kami tunggu kehadiran anda di Strawberry Highland Pujon! :)";
                $headers = "From: ". $from;
                $headers2 = "From: ". $mailto;
                mail($mailto, $subject, $message, $headers);
                mail($from, $subject2, $message2, $headers2); 
            }
    
            $stmt = $conn->prepare("insert into booking (firstname, lastname, email, phone, tanggal, total, gender)
                values(?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssis", $firstname, $lastname, $email, $phone, $tanggal, $total, $gender);
            $stmt->execute();
            echo '<script type="text/javascript">alert("Booking Success!, Data have been stored.") </script>';
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo '<script type="text/javascript">alert("ERROR!, Please re-submit your data.") </script>';
        die();
    }

}
else {
    header("location: booking.php");
    exit();
}
?>