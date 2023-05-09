<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>ALAMAT</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>EMAIL</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>AGAMA</td>
                <td><input type="text" name="agama"></td>
            </tr>
            <tr> 
                <td>JNSKELAMIN</td>
                <td><input type="text" name="jnskelamin"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $agama = $_POST['agama'];
        $jnskelamin = $_POST['jnskelamin'];
        
        // include database connection file
        include_once("mhsw.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_mhsw(mhsw_nim,mhsw_nama,mhsw_alamat,mhsw_email,mhsw_agama,mhsw_jnskelamin) VALUES('$nim','$nama','$alamat','$email','$agama','$jnskelamin')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>