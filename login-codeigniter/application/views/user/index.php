<html lang="en">
<head>
    <title>User PABW</title>
</head>
<body>
    <table border="0" cellpadding ="10" cellspasing="1" width ="100%"> 
        <tr>
            <td text-align ="center">User Dashboard</td>
        </tr>
        <tr>
            <td>
                Selamat data <?= $this->session->userdata('username');?>. Klik disini untuk <a href="<?=base_url('user/logout');?>" tite="Logout">Logout.</a>
            </td>
        </tr>
    </table>
</body>
</html>