<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="">
<meta name="author" content="index">

<title>
    EXAM BIX
</title>
<link rel="icon" href="qpic.png">


<!---BootStrap Core CSS(act as an import for different classes)-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!--CSS style sheets(used for specic class elements designing)-->
<link rel="stylesheet" href="inde.css"> 

<body >
    <style>
        ody:hover{background-color: darkslateblue;}
        body { background-image: linear-gradient(rgb(55, 10, 114),rgb(123, 103, 235));}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <div class="fluid block text-center row">
    <nav class="col-12 flex fluid navbar-dark bg-primary  border-bottom border-dark shadow">
        <span class="navbar-text text-dark font-weight-normal display-4" id="appName">
            <img style="" class="mr-2 mb-2" alt="Nothing" width="60px" height="60px" src="https://cdn3.iconfinder.com/data/icons/letters-and-numbers-1/32/letter_Q_blue-512.png">
            <u>exaMBix</u>
        </span>
    <nav>
    
    </div>
    <div class="row justify-contents-between">
        <div class="col-sm text-center pt-4  mx-4" style="max-width: 30rem;  max-height: 35rem;">
            <div class="jumbotron" style="background-color: rgba(146, 146, 241, 0.466);">
                <h1 class="text-dark"><i>Hello, there!</i></h1>
                <p class="lead"><i><b>EXAMBIX</b> is a web application designed for creating Quizzes, Tests etc.. by a user for differnt users. Create your own quiz invite people or students for the quiz; you can also mark them online.</p>
                <p>So what are you waiting for, create your quizzes and invite people. </p>
                <p class="lead">
                <a class="badge badge-primary" href="#" role="button">Learn more..</a>
                </p></i>
              </div>
        </div>
        
        <div class="col-sm py-4">
            <div class="card text-white text-center bg-info mx-auto shadow-lg" style="max-width: 30rem;">
            <div class="card-header border-bottom-dark">
               <b>WELCOME BACK!!<br><i>Please Login..</i></b> 
            </div>
            <div class="card-body">
              <!--<h5 class="card-title">Info card title</h5>-->
              <form class="form-group py-2" action="index.php" method="POST">
                <label for="emailbox" class="text-dark" style="float: left;">Please enter your registered Email ID.</label>
                <input type="email" name="email" id="emailbox" class="form-control" placeholder="Email Address.." required autofocus</div>
              
                <label for="password" class="text-dark pt-2" style="float: left;">Enter your Password</label>
                <input type="password" name="password" class="form-control mb-1" id=password" placeholder="Password" required autofocus>
                <div id="warn" class="mb-2"></div>
                <input class="btn-success mt-3" name="submit" type="submit" value="Login">
              </form>
            <hr class="my-3">
            <footer class="card-footer bg-secondary">
                <i>New user?</i><br>
                <button class="btn btn-primary" onClick="reg()">Register here</button>
            </footer>     
            </div>
            </div>
       </div>
    </div>

    <div class="md-flex-column row">
        <div class="container text-center py-4 mx-auto" style="max-width: 60rem;">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" alt="First slide" src="data:image/jpeg;base64,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" >
                            <div class="carousel-caption d-none d-md-block">
                                <h5>My Caption Title (1st Image)</h5>
                                <p>The whole caption will only show up if the screen is at least medium size.</p>
                            </div>
                    </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Second slide" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTB79miI0umokzIeueySGgciYg-vwdnbqYYhjMqXTQ4Fn-rQvZX&usqp=CAU" >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>My Caption Title (1st Image)</h5>
                        <p>The whole caption will only show up if the screen is at least medium size.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Second slide" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUTEhMVFRUXFRYWGBgYGRYXFxcXGBYXFxcXFxUYHSggGBolGxUYITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGy8lICUtLS0tLS8tMC8vLS0tLS0tLS01LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0rLS0tLf/AABEIAKwBJQMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAECAwQGBwj/xABKEAABAwIDBQUFBAYGCQUBAAABAAIRAyEEEjEFE0FRYRQicYGRBjKhsfBCUsHRFSNicpLSB1ODosLhM2NzgpOjw+LxNENEVLIk/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAIBAwQFBv/EACkRAAIBBAICAQMEAwAAAAAAAAABAgMREhMhMQRRQRQiYXGBscEF0fH/2gAMAwEAAhEDEQA/AL9yn3K3ikn3K6mZwNRgFFLcokKKfcIzG1A0UUtwiYoJ9wpzBUgXuUxoor2dN2dGwV0gTuU4pIocMo9nU5ka2gfu0t0iHZ0/Z0uQ6iDDRTblFOzJ+zIyJwBO5S3KK9mTdmU5CYgzcpbpE+zJ+zKbhZgk0VHcoucMonDKbkNAk0VE0kXdhlWcMmTFYLNJVmkijsOoGgmTKncFmiq3UEWNBQOHTqRXJXBDqCgaCMnDqBw6ZSKpUwRuU25KL9nTdnTZCKAJ3KiaSMdnTHCozJ1sD7tNu0XOEUeyozQKnIFbpLdIt2dMaCjYOqLBe6KSJ7hJRsJ0HWiipigtooqYpLkbD0CpGEUFIUVuFJOKSjMbWYRRT7lb9ylukZhrMG4T7hb9yn3SMw1mDs6XZ0QFJPukZkOmgb2ZSGGRIUlIU1OYagX2ZLs6KGmomkjYRqBvZ0uzoluk26U7BNQN7MkcOiJprPVrM7wDmlzQSRIkQJuBceinYRqB2Jexgl7g0aS4gD1KdlMESLg8Rp6ryf2n2pVL8xdmJc4FxEDmGtB7pa0GDInqp0MZjaDqLYPdy1BFQZXZrkOEgAR9kXg+iQ8hyV7cFk/Et88nrHZ1E4ZY8T7U4SmQH1WiSATwaTzPKeKOUwCARcESPAq1VU+mUOi12C3YZVnCo0aKicOn2lboAN2FUThkcOHUDh0yqiPxwIcMo9mRo4ZROHU7QfjgbsyRwyMdnTHDo3C/TAfsyXZkWNBRNBG0lUAUcMoHDouaKrdRRtG0Ak0FA0EWdRVTqSjYMqIMNFMiBpJI2E6TsezpxQRAUQnFILkZs7eswbhPuFv3SfdKcyNZg3CbcIhuktypzDAwblNuUQ3Kbc+CMyMDBuk+6W7cpbpGYazlfar2ko4FrTVDiXzla2JIEZjfgJC5rH/0igAupMpuYRLJe7PaxzU4gHMIAzX1XVe01PBVKtGjiBmqkzTAbJANi6SIyiBJ4EhcSzaOB33Y2US8UapezeU2kutL2iQIEyLi+UXViaaEcbdhT2b9vGVKbnYnKyPcLQe/rLQ2SZEa6eCK0va7D1KZdSD3PyOcKZY5pJacuWY58pXIbR9pTRNTK1tEGzabm5qedkw8OiM4lvA6dZHN4X2jxJfm7ujSMpYwZptZwmTHDLcSbJXNfAYez1HBe1dIgmuw0IEnMQRrHC4vzCjtb2ywlAEufmhocMsHNOkX0PPSxXk3tVj6mIJearSQSIa4gOEAkANbl48TJvCyN2Q+q0Oe8B1gS6TaBDQBEAfimSk+bi2T6PTdq/0i0GUWVqLd4H2IJylptMzrExbiFzdb2kpve2swsbSfmdiKVNoFTv8AvAuMZgbExBsfPm8BsBgqRUeMuoFuVifRWbcxRoOa1kRyIa5vd6DxQ/Q6ppRyYV23jMMaVTdMrVWEBlMQcrA1wgj7TSXQYP3QuJr7VruysMmHMhrhIJa7utI4jp1KObM27uQ/JTc8vcXEA9eTRZV7TxuLec5pim0OafdbrPdN7m8Iu+mHFrq5v2XjcI/M6rUdRxBhxyA7uSSHgWJB0BBMd0xwXrfs3galKmWPq71sywn3g0gd0nQgcI4eq8ZxGBY1we8DO/vOLTbMRex636r0n+iqsXYZ7ZlrapDRy7rSfiU2VoiSg2ztw1PkUmqSXYGoqLFE01csW0dp0qIBqOyzoLknyClTb4RDppcstNNRNNB2+2GEJgucPFjvwlEcFtWhW/0dRrjExo7+E3TPJdoVKL6Zdu1E01cXKJcl2D6ig01AsV5KrcVOZGkqLFW5iuLlW5ynMNSKHNVTmqvG7To0/feAeWp9BdBcT7XUWmzKjusAD4lPFSl0hZKEe2GyxJcu72xBPdYAP2iZ+AST66noTOn7PXBimfeCkMS3n80IG0j0UxtIrnYM37EFu0N5/NPv28/mhQ2iU/6QKnFkbEFN+3n8Cn3w5/NDBtAqXbyjFhmggao+gUhUH0Ch/bk3a0WYZoJioPoFM6sALn5ocMV4pOrgiDcdUYhmjyL2z9rXGu6pSqVN24/q2kgNc3Jkd3TcNnhEnMeMLijiN/iQ9z8rS8ExqxoPOOQXqXtlsFheHgHL3ZAJAgEcPVcfidnvo1HtpOc1kAxYjSDYjlPqtlOn9vHZgreXFStK9kYtt4jDGmYJc97jEmcjG6DW0oLTw1EGcxkC/pwIXRY3C1XaEOIuJZTNo/dQ+pgatQy5jSQI9xgjj9kC6WEHFWsNPy6Uuf6M1eqDTyUcoBN9G6dIv/kqRiXiG54j7Q5+nJan7PyiSxoj9kdPikMO37UprpLkXfk+CAx5DSM2b649UPoU3Pqte6AMwiTayOU6dED3D8k7MVSaYNKfH8lmdZL4ZqTytyZwKbHlzZzRFuKMs2RiDS3rqWZhM5mlj4AP3Wkm0XtYqpu0aOb/ANPSPixpPyXTf0e4oig9r2uaN68tkRmDoc4ttpmcY6c1W61+kaqcU+LnEYnFMMh0mDeeY+S7f+jDbVAMqUs7Q4vDg2QCZbFuenxWP2v2Uwk1adIPcT3paHE9R3dQrfYPAUS17n0Kedr4uwAtGUW0VsZKStYpq3g+z0cYxvVS7WORQqlXa33QBxsI+Skcb1UYibPybcXinZTu4DosXaA8yBquE2vsiu5xdUxDSTxMi3IWsutdjENxzgVfSbi+Citaa5Zyv6DdNqtPpJKsoezFQkEYhoI0LQZHnKNtACvp1AFe6sjOoRMbtm44NgY90dWyf4pn4ozsYVqdPLWq70zZ2UtMcnXM+KymuEt8OSqk3JWZfG0XdfyF3V/FVuxHihBrDkoOqjklUB3VZvZVqd7M4G/dhsR494z8EJxWDrOmcTU6gBrR4WvCmajeSrL2qyKsVynfsBYn2fv75PiFVW2SLgEjSNTEeV0ce8KkuCvU5FDikc67Y7vv/ApI+XJJ9kirBHZ51MPWDecyVIVvqVz8TXmbw9SD1gbU6fXopCqpxDM3B/1dPnWHelI1vD4oxDM3bwJ86Hisn33D5BGJGaN28Tip9XWDf9UjiRzRiTmhttCWHwXJ4xozTzaukxmIblK56qZiFfTVkY67TZRhnDMOPBTw7QHe7x6DpxUaIGYSVcAM3BWFNyqsxpmzbdQfksdTDtI93+763lEazoOvyWOuZ4zrCZIVmCthxAAFx0A+QQrE0gD8dUYrA5fPqhvZXPqNYIGYgSdG9SeQSyppq7GhN3sjX7L7Np1HvqVIytIAacsFxE3k8Leq7/BupRYnwFohLZmHw1FjabKtmj7zJJN3HTieqIB7To4nzZ+C4k2rux6qhDGKT7BmOqUwJl48CfzXOVtoCk/O0vgmHg5L8iSXTYeK7WoD+0PNiEY2uBMvM8szPyTUp2GqwU1ZmL9Ig3BEG+qQx6AY572vcQS5pM5jUaddG5YmR0KrbjJ5LrU4Kcbo81XqSozxkdJ21U1cWgJxfUJu0nqrVRM0vLDXaU3a+qDb1ygXu+im1Ff1iDJxg5pu1IKax4keat3qNQPy/YUOK6pHFdUKznmnD+qNYfWegq3EdU+9CF70c0t/1Uayfqn7COdIuQ/tPX4KQxA4EKcCPqX7NkpLKKv7SdGAfUs6o1wIu0fXRSGI/aHoUN3g+vySNbxWbE6GYRbiP2vmk7EDr8kO7RybPikKp4AD5/FTiRkEDivFR7V0+axZzxUCeqMRXJm92Jdz+Sr7V1/JYHPaLz8/kkMS0eHNTiI5s2uxI5n4pu1chKwDEgyq34uOA8ZlNiLsCNWqSNCPT5IeXcDKynFuv3oHgZWd1QmTmPn+SsjAqnI0FxB4ATrqrTXnQEedz80MMW1JHgmNU9B4gn5JsSu7CVR3nPw8bLPUeY1Jv9arNUrnz/ZkX8Vkr1+VupgoSJ5sWVa+tzwXT+z2w3hgrOph+dtmvLIym4MESDxsQgOxcHnl7m1HtabbtrXAu1v3h00XRGtkju4sHT7ekX92ssXl1uMF+52P8b4nKqy/b/Z0lCtXi4aP7Sf8a0Cs/i9v8X/euaobTYLf/wBX8GIPyqFaGbTjjifOniD8yVypRZ3UHTWd/WN9f+9ZK9apeCD4Oj/qLH+lxzr/APBrfyFU1dtDQOrA/wCxqj/pJUmhjNtDAvqNc2rS3jZkBxpuA1ggOeb+JK5bamyatMbxtOplaO9IpwBzAZ8V0WJx+b/5FZp6MqD4Gmse0MZWcBu8ZUY62tJ5B4aBrb+a2UKsqb4MflePCtG0kcpvc1xHwV1Ko4GCTHiFh2yypSqS6oKhf3i4McyTNxldx8OajRxRNxyvqu1GalFNHlK3iyg3EJvxJHGef0U1PFE+7B6aIa4mJk9dSnw9Q8CmuUOgrBKrWePs/ioDFniPmsVQEGZ6zK1U8U6LjMPJFxXSsui2niJ0HxScTpbw4/FVDEAz3PkmdiGHkPEW9Qi4uDv0TqTyI9CotqAa/iotrM0MfH1hOwUvvEeaLjpe0OKx6+qnvgNfiqMrODj+aZzQOJ9CmuSopmg4gfdHxTrLnPC/qkgbWjrBVEwJ/D1UziWgcCfrgsINrmPDVMBJgE+X1+KyHUt+DccXbQD65KpuMPl5pYCmDmORpFMZnZjBIkCG21usuJqAPPu6/ZJI8AVC7sTJWRrOLtpedbm318lWajtSfksNSpBgOtrbTw0Uh4X8/wAU9iiTNbXDjp5/UJnPYQTM/L1WQvIgTJnQH580jRMS7Xr5RHBTYqZe+rHCBw5fBMajjMDTWIhZ6b4j5AcenNSxGL/djqdfRSRZsW94n69FCqSNQPE/IKoYgkTIHVvAeazmsAZ1Ot5J+GgTEOJc6ofDpMCPBNUqxqW+d/Qpi45ZdlAseXhrdZXkOEWt4G55lGSIcJLstfWn7QjkNPUWVNQjUFv14Kp7S0Twj7It52RT2U2UcRiAMuZjHNdUAizZ014xp48lXOoopssp0pTkor5Ou9nsVUpUGMFXDNtmLXjvAu7xzHeC4004LcdqvI/0uEmdYPx/WHkttXYmHB7ramnGpVE+r7KZ2PQy/wCjqT+9U+JzLhzmpSbPW04KEVFA3tNVxkOwZ65J+JerDXxPDsh/3XD8VeNkUBbd1R1zVfnKuOz6MQd95Gr+AVbaLkjAK2JGow3q4Kurja2mXCebz5atsttXAUtAK5H9p+LVkrez9B+oq+YPwBYhNEsy1MZWi9HCmP8AWG3/AC0F2nRrVWFjGUqbpBFSnVIc0gz9lgnwRqr7M4b/AFgHVo8//bVGO9l8KQHB5LjA0HAWPuWV0ZR7KZRb4OQ2n7M4stc9+IFXKC7KXOJMawDaYXLU6kfUWRv2n2E+lWmi2o9jgHSGzDj7zTlEDn5oDWpVGRnY9s/ea5s+E6rr0Jfb2jieTD7uE/3CNFvHvAHqDKvrBnysXW9Dqg9HFFvhy4eiK08zgXMInlHUHSflyTyk0Y3STZYzC8gIH1xhIZjxgjQTw8ikzEO0DrzBET6AXWg1O7eCB0AvNzDtbeCTa12Gi5EMI4ST108FW3U/zD5Fa2sbFuFwZaLeUrK+plALhbiQAZniSNR5KVUuJKhbh8Duw7reFpcPwUDRjjMcLH4kJMrUzrUHQaD48FsFGwIJ14RE8rpttuyNU7mSnSP3pnpB8ArtyevPT5qwU8sSD0mAPIiZ1T1afKI1ifVTuRXKjO5SKfgespK2mwAdwgjx06cElOxCa5IJtw1SJn8VXSqVGGW68HDUeB4KWZzdSXdLfIrbVBgZngCYMNg+QJ85hUufs6KjJdXMdEjjc31BdflOgK1YQ0w8uqMJaQYbmAnkZg2CgaTS0ZHP96LtdBB45zp4LXiaApCarTJY0tI1BsbcDafVK5osUG1yRaaZYRkOcOnOLBreURcnnKx18VoBy5tJ/CPTRE8ZU3wbUrvDZaMoYGkkNJHea1wh37yC4h4nLSLy3u3dIBMX0gxM8EQlcWpTLxVyxMNJ4HXyhZa+ON4EDmQQfwPkFWwAuLeUyQZ04THiqi2DGjZuZFweJFojryVqt8maSsRxGPBEAzcXifnf/wAK9pJHukk6R8dBA1Cx1MO7MIFPKSL2uOvELR39GkFrTJOnKe6BzPLgplJJcBhd8kq78phwMRYtkmeURBWU1hqRcagkx5tEpF7IzPdBJkgg5Y0gSdZ6LOwUSRMARZ0O1nWOA4WhJmWqhxcoqU5cRn5QTMCT1/JaMMzKCA6Z4cI8/DporKuSIBA8IvydA1Krp4d2XvEx1sedp/IqHU47J1N/AshBm+hBj8iOi7n2aw78O2GMyl4DnOJAveBEG4kj1XG4Nwpua9zS9lN4dux3Qct4nQ6cl1mF9uBVcxvZX95wAl4ABJjN1iZ8AsXkznJWj18nQ8ClTg8pd/AeO0nzeqWkaWpm/G5bqqau26kwKzvGKXx7iLUQHNzQ58ie9PAcBAA8hdUU8LJJa3L4hzRfS8LnpnZsjJT2rVdrVH/LH+FaW46poK5/ufg1a2Mc3TJHUz+CT6xbrldewECB6XUNjJIy9rq/1oPp+CrOKqjRzD4tn/EtvbW/db6t/FVuxbPuN9aZUAY34+r+x/AY/wD2sx2liDb9T0G7d/Ot1StSItSbz0p/mhmLY2bUWeRYIVsBJGXF42oTLqdEn914/wASHbcpOxVHdZKbRIcHNY8lpB4HNpEg+K0Y9zGNLnMAABzHKDbiTEyh1LaeCMQaeuuUiQRobDitELrlGaaT4ZxO19mOoOAJzA6OAgdRB0P5qrBYvJPXiCQR5jVbPaeBVIp1HPpu77RLiGzMgB3K8W0KEjl6ldGDyjycirFRm8Q7gGFwNQOcTmmYJLTqTE38OqMUaecAtJAMtcRmtx0tqIM38Fy+z6+V2sDS+nwC6I0RUMNgNayA5uZrqltTldHDU6KmtdPsrhZ9i3dMTmiIGWW5tOE6dJVT8Y6IDRYwQ1x06AjmqsU5tJgLSXOIMAvzTwIdTOnHgFhw1SmQSA/MWwMoIDDECYm08zw9EXPJa2kkjZi8SAO82pM8ibG5HL0VmHZLQ7vkGIBg+UQSfJVNxDw5hbnaQAc0htzpJNs0Tr0U6td+QnJxMTE+MySbg8kZS6Hjg+S6hXplxbJzA6HNERex0Pkr2NacukzxafEmQL6IXhaT3H3WNdEAEkO/hN1qoUC1wcQ6DIInNfQEtFgL8079JlP23u0b30hJzZSfCR5SEkOcK4gBuWOHunnBt1+KSS0vZotQ9HYYD2YrOEVXkCJsRlPMAzBK21qLaYIpbp5+9Je5vExwJ14LjW+1uNqzmhusBoyuGsyQdLwqCavvOrFsXs50z0AIurI06klefH4GdSkuIK/5Owq1WmHmoXxLQXhwDYgkH7QGvAfBYsZiTVdLWlokaZnRoIESQLT+aG4XE5WsENcJnKWl14I7s6TOqO7M2Y51EmMlPNmPfbcxwa496wEnkkklDkFFz4sRdgWPEUmvc/IMxzw2mZAPce0ExxvF+iGY3CuYSHFji05QJsY0uIBJRsUYouLalADvOIcGvdAHda1zZ7xzcCPgVzeIwDzTaW1R3iRPGb8AJA8eaIyfywqwFXrMygvIBF7yBJ4AcVFmHe8cWtIuT7pB6G0/FPhtkFnffNSTAJAAkiTYmc2keKpr4Bw7/ebaWhzgT0JaDby59U2a6TKnSv2i8UaZDW5w0faNiAeFiI+CzVKgi3uAGHCXTfkOOvWVlwrmNJDs9R5vEGCNIyn3tf8AJb8M45YYGiATJmBN4tAHKSeOiiTcRdab4Mtd4MF3GQ1pbLjGsAXHvfFV4ttFuUua+S2xHPoIJ4aLcGvMyycpaHBoECTYGNTpp8lnx1SJDBDhplFj0PGbc+aXPmw+PzYG1sQKZNyXmLQ0E8xIufFZa+0XnX1I8/tIpQokvuJJFgLZbicw1tfiqxSc15EWbqCACCObuvqm2w/VkKM7WXCOi9iPZsYmm6pWe8tBDWBpLYNy+SddWrpqXsbhKbgWb3MJIcHgFpI1FteCJ7A2SxmHpAhzXZQ5wD6nvOuRM3iY8kW7M0Cwcf8AfdP95ywVK8m3Z8HUpePBRV1yAnbEPDF4kf71I/NhKY7HebdrxB8RR4f2aPimwRIfcxq4x6HTqpCkJ0d6u/NUOozSoo587JrDTF1/4aP8iZmza/8A9ur506X8q6GpSb+16u/NUmiPvO9fzSubHUUAnbNr3jFPPjTpEegaPmqOwYkTlxLR/YtHxDguhOGH3n/D8lS7DD77v7v8qFNk4oBDDYyLYil50XfhUWWvhsaSZqUPKi4f9RdP2YfeP938lA4EffKsjUYsoROQq7MxTrO7O6bXY5sg8Jzrlj7DVZtUZx5nymZXqdbZx/rPhP4rM/DOYRNSR+6f5lfCvKPRnn48J9nmp9gcTlzS0t595cwaRaS1wykEgjjI1le9vxD8sWcItMAfErzP292Q5jxiMrQ2oYcBfvge8TwkD1b1Wqh5Dk7SOf5XjRhHKJyRFuQ9UR2XiQ92R0Q6Gm4aD90i0BwPFCXn15f5qsm9xotM1krGGHHJ2dGiwNDRUDnCQCTeQZjjzIEGLq3C4DKcxeS50nugAEkcXN1Ag8ok+K5zYPeLmkB1pGbRpPGZkG2oRHHmoxoaKVQQJLh3hfzMfVlz5qSlin2W2hJcmtri0kVCIm3dzCTI70ATIFrDiqnbNJEi7s2jYEGwsHHnbW6lQxdSo2marYcIGYABzgNQQBY8pPNFm4iK0PIYwtgNF3QNSWgTN9bpHUlF/kps7/gFV8HU7tTcx9ky/wAbZXZokcT1Ep6GEpvAy7wC3ea6MpFjIBLYuD0RDGYp7CKjgXMd7kEt0IsXDXS5vPkmqVyRmeHDhBs6/Ex0tP5XlVZWVwvfoqoCtByU3P7zhJYS4xET3mxY9UyIYbaDg2DTIIJvvMoIJkQAI4nTmkkdaV+ECUfkbAezDw4sFRzHROZzA3u+Bdmyz08VhxOzxScQ5zKpLRcOdYagsiAfJdBtjEuNTLTpFgi+Rtz+8RrHVA676pa5oFQMLQO6HB5ymePvWtfyW2lOrLmTOpUhSirRXQVwJpUC3vtaxzRFRrQahJhxgOBIuYk8AV0GG2fDnValMNpvaGMbG9fbizeTEj7cWnRedYfBYl7gS15AgDMC23JeouoVnUiQ4N/ViAzNUe7LEnNYtaMswSlrrHp8salJTXVkDq2xmOIfSbkAb9hr6j3OJJJcYF5tyQHG4EgOzZqdUjMO6GgQbX+1InQC67bHMq1G020pIqBrnF7iXtDATDogQZ0Kv2s+kC+aBqFrGicpdMC5ac8wATfos8JSvyPKnF9HmGKobhrapqGo4tMyR3ZNgRzsPCyFt2q532gL665fxJ+SM1BTc2pvKNcuMhnvQzkSMpL/AF5IY32UruJhpDRxykyI1OnFa04pXmZpXXEOhUy5pbVcREwDd7pIGknSBN1vpMbq7MTaBM5f2jGkkWHyVeNw+6aGUqdQkRme4XkCC1ha33SPW10GxbKhZ3aNQdGMe0EzZznBov4Aql3qdF0Ixp8y5fo07Vx4Mhj5bmywXe6dbCe+ZzLRSFJlHKHiST7rTMxpUfqdXRYCLIFT3rTPZqgkZTDKkkE63E8PBFsHhnua54ouDoiBTc2m0QS3ugCROWR0N1FWLjG3wVXjJ3RDEVonLETmgHLcwILuPDlCKezmzA6vTFcl5OZxY1pcQGme85szw0iM3FNhtluLYfRqO7oDSBka1/vWLhaSNBrxRX2S2VjHGpUouFGO4A9hOcloLjEaaeY4rO5XVkWU1eSude/aFQOsx0RoQ6froqG18SXXIAk2gDlEEqBwe1ALVMM7xpv+JBWZ9HardG4V3k8fkqsf0Ojkg2atUxciJ0DenMQnp46qCcwtNrcPJCcLiNofbwbTpJa9rD8SUVoOLhL6FRh5EZr+LJStNDKUWWvxL+Sz9qeTPC4ggDTxE8FaA3g1w65Xj/CmMQRczNgHH8OSQfgXaHx/kqzin/Q/zSyhvMC5vIv1SDgdDPgZRyTwROPI1AVNXaNrtI63T1ac/eHwUatJ5H2iI5HgpRDsU1drhurRFuJB+SorbXadGHxkfkrq+DJae5e/D0WNmCEXDgbcLekK2NitosxW2KQFy6RYgRw46hANsbWoVqdWi4VPdsYbY+81w7x4wi36Na4jNMcy0+ui4v272E+mab6Qc8XYcrHHjLbAciVfRtdIzeRxFu1ziy/ok3qfJX9gq8aNXp3H2+CX6Mrf1dWf9m/8l0bnHxFRLQRnBjUgWkeK7+gTSYwU2mrmbnBv07oIMS0EcZ5hcGzA1v6mr/w3fOEU2RTxQIYxtUQcwzCo0A8ctokhZPLp5xJpqz6OjfXL3w2m6JJeDGVwB1DTIdpOvDwWw1m0wTBdAkRcZibAgCRGkch0QXHDFBjalJrphzXsDHtc11znbzEAQR+KwOxeKZlDaVYGxd3KgcSAJBOSD7tjrrzWD6eU7NfyaEodM62njmhjX13Nc1wyZcpa9ljcEHmbGBpxWXBYJlR5fUqPcDOrjlABtYDNpFxxEIZszGYio/K+jUa1xsXMMTliMzhY2HCPVX08LXc4syvmDAOaDB92TaDwCqlGcW10/wCi2Hjwte49Ok4uc2nimUw22VxPWCM5BAhJZsO2oCXNwz+8BIfSfqJ0I1148kldlJf8RX9NFn08kkkuiKJJJJACSSSQAkkkkAMnSSQAkMx21cjywNl36uJMZs1RjDHhn4omo5BMwJ5xdAAjFbeDWOIZ3gH90kC7KdR5vy/VESpU9td5rCzvOe9vdIIAbUDMxNvvAxy8pKmm3kPQfXFNuW/dHoOGiABFbb0Uw/dkZqJqtBIgwxzw2RMGG/8Am6sO3GzGW8wO82JDww5j9kSbE6jRE923kNI0GnLwS3Tb90X1sLxogDBhdrNcagIg0y6esZoyjV1mm4tMjgYh+mmy2W6hrrOabPLg2I9490zGiJ5ByCYUm/dFp4DjqgDBgdq7x+QsLTfUtNw2m+Lfs1G/FaKGLz7wBr2lji2XtLWuOUHM0/aZfUcitIaOQ+v/AAkQgAJS224ikYb3mUnOAklxqOLSKYBvliTrY8FQ32hecv6sCajmkEOBDQ+k0WdBzRVvE3EReR0DaTREACNLC06wnLByGs6ceaAAWN229jHEBji2pUaY0ysbn4u14cTxDToram1KgFb3A+mZa2GwWZnhve3gEkMm+Ui9ii25b90azoNefinNFv3RcybC55+KAAx2w+XghrAKZqzBcGtbk1GYZi4OMCxGXii+Fc4saXgB5aC4DQOi4HSVPIL2F9ba+KkgBJJJIASSSSAEkkkgBJJJIASSSSAEkkkgD//Z" >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>My Caption Title (1st Image)</h5>
                        <p>The whole caption will only show up if the screen is at least medium size.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
    
    <div class="text-dark border-top shadow">
        &copy;2020. Designed & Developed by Punit.
    </div>
    <script>
    function reg(){
        location.replace("register.php");
    }    
    </script>

</body>
</html>


<?php

require("connect.php");
if(isset($_POST['submit']))
{
    $e= $_POST['email'];
    $p= $_POST['password'];
    //header("location: register.php");

    $q= mysqli_query($connect,"SELECT * from users where email='$e' and password='$p';") or die("ërror"); 
    $chk= mysqli_num_rows($q);
    if($chk!=1)
    {
        //echo $chk;
        echo "<script>document.getElementById('warn').innerHTML='<i>Invalid credintials...Try again. </i>';</script>";
    }
    else
    {
    $users= mysqli_fetch_assoc($q);
    $user= $users['username'];
    $email= $users['email'];
    echo "<script>localStorage.setItem('user','$user');localStorage.setItem('email','$email')</script>";
    //stores data in browser..
    
    //echo $user;
    //Successful login
    echo "<script>window.location.replace('dashboard.html');</script>";
    }
}
?>


