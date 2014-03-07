<?php

/* Omnibook is a notebook for everything
 * The idea behind it is to use markdown files to easily put together documentation
 * and notes about everything. It's organised in folders and just includes the
 * compiled .md files, so basically it's just a frontend to conveniently view the files
 * and can be used without the omnibook stuff.
 *
 * The logic should go in omnibook.php
 * The interface/design should go in omnibook.html and omnibook.css
 *
 * Apply fancyness with omnibook.js in HTML5/jQuery as needed (mostly dynamic viewing of files)
 * Maybe an in-browser markdown Editor could be used
 * Compile the files from within the browser
 *
 * @author Savino Jossi
 * @version 0.1
 */

class ContentLoader
{
	// get currently selected file

	private $currentFile = "habadahabada";

	public function setCurrentFile(){
		$this->currentFile = $_GET['dir'] . "/" . $_GET['file'] . ".html";
	}

	public function getCurrentFile(){
		$this->getCurrentFile();
		echo $this->currentFile;
		return $currentFile;
	}
}

$content = new ContentLoader();


?>
