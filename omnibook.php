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
 *
 * @author Savino Jossi
 * @version 0.1
 */

class ContentLoader
{
	private $currentFile = "doc/welcome";
	private $currentDir = "doc";

	private function setCurrentFile(){
		$this->currentFile = $_GET['dir'] . "/" . $_GET['file'] . ".md";
		return 0;
	}

	public function getCurrentFile(){
		$this->setCurrentFile();
		return "$this->currentFile";
	}

	public function getFileList(){
		$this->currentDir = $_GET['dir'];
		$fileList = scandir($this->currentDir);
		return $fileList;
	}

	public function getNavigation(){
		$fileList = $this->getFileList();
		foreach($fileList as $i){
			$file_parts = pathinfo($i);
			//echo $file_parts['filename']. "\n";
			if($file_parts['extension'] == "html"){
				print("<a href=index.php?dir=" . $this->currentDir . "&file=" . $file_parts['filename'] . ">\n");
				print($file_parts['filename']);
				print("</a><br>");
			}
			if($file_parts['extension'] == "html"){
				// folder stuff
			}
		}
		return 0;
	}

}

$content = new ContentLoader();

?>
