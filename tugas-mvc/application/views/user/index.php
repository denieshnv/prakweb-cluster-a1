<html lang="en">

<head>
    <title>User PABW</title>
</head>

<body>
    <table border="0" cellpadding="10" cellspasing="1" width="100%">
        <tr>
            <td text-align="center">User Dashboard</td>
        </tr>
        <tr>
            <td>
                Selamat datang <?= $this->session->userdata('username'); ?>. Klik disini untuk <a href="<?= base_url('user/logout'); ?>" tite="Logout">Logout.</a>
            </td>
        </tr>
    </table>
   <?php 
   ?>
    <table border="1" cellpadding="10" cellspasing="1" width="100%">
        <tr>
            <td width="10%" text-align="center">User id</td>
            <td text-align="center">Artikel</td>
            <td width= "10%" text-align="center">Aksi</td>

        </tr>
        <tr>

        </tr>
    </table>

</body>

</html>