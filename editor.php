<?php require_once 'includes/header.php'; 
	
	if (!isset($_GET['entry_id'])) {
		header('location:index.php');
	}
    
    require_once 'classes/entry.php';
    
    $entry = new Entry();
	$entry->SqlSelectEntryById($_GET['entry_id']);
	//print_r($_GET);
	//print_r($entry);
	
	?>

				<!-- Main -->
					<div id="main">
<?php if ($entry->getId() != -1) { ?>

<!-- Post -->
    <article class="post">
        <header>
            <div class="title">
            <h2><a href="#"><?php echo $entry->getTitle(); ?></a></h2>
                
            </div>
            <div class="meta">
            <time class="published"><?php echo $entry->getDate(); ?></time>
				<a href="#" class="author"><span class="name"><?php echo $entry->getAuthor(); ?></span><img src="images/avatar.jpg" alt="" /></a>
            </div>
        </header>

        <div class="content">
			<?php echo $entry->getContent(); ?>
        </div>
        
        <!-- <footer>
            <ul class="stats">
                <li><a href="#">General</a></li>
                <li><a href="#" class="icon fa-heart">28</a></li>
                <li><a href="#" class="icon fa-comment">128</a></li>
            </ul>
        </footer> -->
    </article>

    <?php } ?>


</div>

<?php require_once 'includes/footer.php'; ?>