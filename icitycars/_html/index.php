<!DOCTYPE html>
<html lang="ru">
<?php include 'base/head.php';?>
<body>


    <div class="page">
        <?php include 'base/header.php';?>

        <main class="page__body">
            <section class="sec sec--overlay face face--anim">
            	<div class="sec__wrap wrap">        		
	                <div class="face__txt">
	                    <h1>Поездки на автомобилях<br>кофе и простые беседы</h1>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates enim fugiat soluta laboriosam laborum dolor dolore quae, ratione aspernatur, atque quo eum, ipsam. Temporibus similique debitis odio eveniet doloribus facere?</p>
		                <a href="#" class="face__btn btn">Принять участие</a>
	                </div>             		
	<!--                 <div class="face__name">
	                    <h1>Новый 911 GT2 RS</h1>
	                    <p>Неуступчивый.</p>
	                </div> -->
            	</div>          		
            </section>
            <section class="sec sec--pad">
            	<div class="wrap">
	        		<h2 class="sec__tit"><span>Предстояшие события</span></h2>
            		<div class="flex">
						<?php for ($i=1; $i < 7; $i++):?>
						<article class="itemEvent">
							<a href="#" class="magiclink"></a>
							<div class="itemEvent__img">
								<img src="../images/userfiles/car_1-<?php echo $i;?>.jpg" alt="#">
								<div class="itemEvent__date">
									<b>22</b>
									<p>март</p>
									<p>2017</p>
								</div>
							</div>
							<div class="itemEvent__txt">
								<h2>Чемпионат по дрифту</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt atque, labore culpa odit consequatur et, placeat nemo commodi rem tenetur dolorum alias. Autem, dolore atque, nobis voluptatibus corporis accusantium recusandae.</p>
							</div>
							<div class="itemEvent__btn">
								<div class="itemEvent__time">
									<i class="iconic iconic--clock"></i>
									<span>10:20</span>
								</div>
								<div class="itemEvent__place">
									<i class="iconic iconic--geo"></i>
									<span>МТЦ "Новый"</span>
								</div>
							</div>
						</article>
						<?php endfor; ?>
	            	</div>
            	</div>
            </section>
         </main>

    	<?php include 'base/footer.php';?>
     </div>

    <?php include 'base/scripts.php'; ?>
</body>
</html>
