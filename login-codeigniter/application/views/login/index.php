
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?=$this->session->flashdata('message');?>
    <form method="post" action="<?=base_url('login/cekLogin')?>">
        <table>
            <tr>
                <td text-align="center" colspan="2">Enter Login Detils</td>
            </tr>
            <tr>
                <td text-align ="right">Username</td>
                <td>
                    <input type="text" name="user_name">
                </td> 
            </tr>
            <tr>
                <td text-align ="right">Password</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td text-align =  "center" colspan="2">
                    <button type ="submit">SUBMIT</button>
                </td>
            </tr>
        </table>  
    </form>
</body>
</html>