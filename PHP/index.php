<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebCl</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="#">WebClothes</a></div>
            <ul class="links">
                <li><a href="#"> Home </a></li>
                <li><a href="#"> Home </a></li>
                <li><a href="#"> Home </a></li>
                <li><a href="#"> Home </a></li>
                <li><a href="#"> Home </a></li>
                <li><a href="#"> Home </a></li>
            </ul>
            <div class="change">
                <a href="#" class="btnLogin">Login</a>
                <a href="#" class="btnRegistry">Registry</a>
           </div>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropmenu open">
            <li><a href="#"> Home </a></li>
            <li><a href="#"> Home </a></li>
            <li><a href="#"> Home </a></li>
            <li><a href="#"> Home </a></li>
            <li><a href="#"> Home </a></li>
            <li><a href="#"> Home </a></li>
            <li><a href="PHP/login.php" class="btnLogin">Login</a></li>
            <li><a href="#" class="btnRegistry">Registry</a></li>
        </div>
    </header>
    <script> 
        
        const toggleBtn = document.querySelector('.toggle-btn');
        const toggleBtnIcon = document.querySelector('.toggle-btn i');
        const dropmenu = document.querySelector('.dropmenu');

        toggleBtn.onclick = function () {
            dropmenu.classList.toggle('open')
            const isOpen = dropmenu.classList.contains('open');

            toggleBtnIcon.classList = isOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'
        }

    </script>
    <article></article>
    <footer></footer>
</body>
</html>