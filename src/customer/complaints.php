
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#317EFB"/>
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#317EFB" />
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black" />
    <meta name="description" content="Admin Landing Page of iCRM after successful login.">
    <title>iCRM</title>
    <!--bootstrap links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" media="screen,speeech">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="screen,speeech">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' media="screen,speeech">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" media="screen,speeech">
    
    <link rel="stylesheet" href="./assets/css/stylesheet1.css" media="screen,speeech">

    <link rel="stylesheet" href="./assets/css/stylesheet2.css" media="screen,speeech">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" async defer></script>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js" async defer></script>
    
</head>
<body>
     <?php
        session_start();
        if(isset($_SESSION['id'])){
            require_once('./inc/header.php');
            require_once('./inc/complaintsSection.php');
            require_once('./inc/footer.php');
    ?>
     <script type="text/javascript">
        var btn = document.getElementById('btn_comp');
        var btnContent = btn.innerHTML
        var issue_form = document.getElementById('compForm');
        btn.addEventListener('click',function(){
            issue_form.classList.toggle("hide")
            btn.classList.toggle("btn-danger");
            if(btn.classList.contains("btn-danger"))
                btn.innerHTML = "<span class='fa fa-times-circle'></span>"
            else
                btn.innerHTML = btnContent
        })
    </script>
    <?php
        }
        else{
            header("refresh:0;url=./logina.php");
        }
    ?>
</body>
</html>