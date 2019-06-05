<?php require_once 'includes/header.php'; 
	require_once 'classes/entry.php';
	if (isset($_POST['publishing'])) {
		$entry = new Entry();
		$entry->createNewFromPOST($_POST);
		$entry->SqlInsertEntry();
?>
	<a href="editor.php?entry_id=<?php echo $entry->getId(); ?>">View Entry</a>
<?php
}
	?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2>What's on your mind...</h2>
										<p>Whether you have experiences you want to talk about, something you need to get 
                                            off your chest, advice you are seeking, or just a thought you want to share,
                                            send in a post! You can choose to be anonymous or 
                                            enter your name for others to see. 
                                        </p>
									</div>
								</header>
								<div id="create_form">
									<form action="create.php" method="POST">

									<label for="">Title</label>
									<input type="text" name="entry_title" id="title" />
                                    <p></p>

									<label for="">Author (if you don't want to share your name, enter 'Anonymous')</label>
                                    <input type="text" name="entry_author" id="author" />
                                    <p></p>

									<label for="">Theme/Description</label>
                                    <textarea name="entry_excerpt" id="title" cols="30" rows="3"></textarea>
                                    <p></p>

									<label for="">Content</label>
                                    <textarea name="entry_content" id="title" cols="30" rows="10"></textarea>
                                    <p></p>
                                    
                                   
                                   <!-- <label for= "">Select image to upload:</label>
                                    <form method="POST" action="entry.php" enctype="multipart/form-data">
                                        <input type="file" name="entry_img">
                                        <input type="submit" name="submit_image" value="Upload">
                                    </form>  -->

									<input type="hidden" name="publishing" />

									<input type="submit" name="submit" id="submit" value="Publish" />
									</form>
								</div>

							</article>

					</div>
					
	<?php require_once 'includes/footer.php'; ?>