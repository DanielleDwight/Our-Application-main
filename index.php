<?php include realpath(__DIR__ . '/app/layout/header.php') ?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Kavoon&display=swap');
		button{
			background-color: lightblue;
			border: 0;
			font-size: 20px;
			 font-family: "Kavoon", serif;
			 transform: translate(150px,80px);
			 border-radius: 50px;
			 
			 
			 z-index: 1000;
		}
		h3{
			text-align: center;
		}
		body{


			background-color: grey;
			overflow: hidden;
					}
		.frontpage{
			width: 101vw;
			margin-right: -10px;
			margin-left: 0px;
			margin-bottom: -20px;
			position: absolute;
			bottom: 0;
		}
		.frontpage img{
			width: 100%;
		}

		.but{
			position: absolute;
			transform: translate(170px,160px);

		}

		.pos{
			transform: translate(0px,140px);
			font-size: 40px;
            }
</style>

<form action="loginpage.php" method="POST">
	<h3 class="pos"> Make a friend that always be by your side </h3>
	<button class = "but">Lets go</button>
	<div class="frontpage">
		
		
		<img src="./public/img/bg.png">

	</div>
	</form>

<?php include realpath(__DIR__ . '/app/layout/footer.php') ?>