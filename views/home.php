<?php include 'head.part.php'; ?>

 

<!-- // $foo= new Bidule();
// if($foo->getTruc()){
// 	echo 'le truc est vrai';
// } else {
// 	echo "le truc est faux";
// }  -->


	
<ul>
<?php
$counters = new Counter();
foreach($counters->all() as $c) : ?>
	<li><a href="?id=<?php echo $c->id ?>&p=show"><?php echo $c->name ?></a></li>

<?php endforeach ?>
</ul>
<?php include 'foot.part.php'; ?>