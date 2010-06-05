<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Dmitri Pisarev <dimaip@gmail.com>, SFI
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Article
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Library_Domain_Model_Article extends Tx_Extbase_DomainObject_AbstractEntity {
	
	/**
	 * title
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;
	
	/**
	 * author
	 * @var string
	 */
	protected $author;
	
	/**
	 * datetime
	 * @var integer
	 */
	protected $datetime;
	
	/**
	 * bodytext
	 * @var string
	 */
	protected $bodytext;
	
	/**
	 * short
	 * @var string
	 */
	protected $short;
	
	/**
	 * category
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Library_Domain_Model_Category>
	 */
	protected $category;
	
	
	
	/**
	 * Setter for title
	 *
	 * @param string $title title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Getter for title
	 *
	 * @return string title
	 */
	public function getTitle() {
		return $this->title;
	}
	
	/**
	 * Setter for author
	 *
	 * @param string $author author
	 * @return void
	 */
	public function setAuthor($author) {
		$this->author = $author;
	}

	/**
	 * Getter for author
	 *
	 * @return string author
	 */
	public function getAuthor() {
		return $this->author;
	}
	
	/**
	 * Setter for datetime
	 *
	 * @param integer $datetime datetime
	 * @return void
	 */
	public function setDatetime($datetime) {
		$this->datetime = $datetime;
	}

	/**
	 * Getter for datetime
	 *
	 * @return integer datetime
	 */
	public function getDatetime() {
		return $this->datetime;
	}
	
	/**
	 * Setter for bodytext
	 *
	 * @param string $bodytext bodytext
	 * @return void
	 */
	public function setBodytext($bodytext) {
		$this->bodytext = $bodytext;
	}

	/**
	 * Getter for bodytext
	 *
	 * @return string bodytext
	 */
	public function getBodytext() {
		return $this->bodytext;
	}
	
	/**
	 * Setter for short
	 *
	 * @param string $short short
	 * @return void
	 */
	public function setShort($short) {
		$this->short = $short;
	}

	/**
	 * Getter for short
	 *
	 * @return string short
	 */
	public function getShort() {
		return $this->short;
	}
	
	/**
	 * Setter for category
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Library_Domain_Model_Category> $category category
	 * @return void
	 */
	public function setCategory(Tx_Extbase_Persistence_ObjectStorage $category) {
		$this->category = $category;
	}

	/**
	 * Getter for category
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Library_Domain_Model_Category> category
	 */
	public function getCategory() {
		return $this->category;
	}
	
	/**
	 * Adds a Category
	 *
	 * @param Tx_Library_Domain_Model_Category The Category to be added
	 * @return void
	 */
	public function addCategory(Tx_Library_Domain_Model_Category $category) {
		$this->category->attach($category);
	}
	
	/**
	 * Removes a Category
	 *
	 * @param Tx_Library_Domain_Model_Category The Category to be removed
	 * @return void
	 */
	public function removeCategory(Tx_Library_Domain_Model_Category $category) {
		$this->category->detach($category);
	}
	
}
?>