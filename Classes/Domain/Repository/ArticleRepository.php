<?php
/***************************************************************
*  Copyright notice
*
*  (c)  2010 Dmitri Pisarev
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
 * Repository for Tx_Library_Domain_Model_Article
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Library_Domain_Repository_ArticleRepository extends Tx_Extbase_Persistence_Repository {

    /**
     * Finds an object matching the given identifier.
     *
     * @param Tx_Library_Domain_Model_Category $category
     * @param int $start
     * @param int $limit
     * @param string $sort
     * @param string $dir
     * @return object The matching object if found, otherwise NULL
     * @api
     */
    public function findByCategory($category = NULL, $start = NULL, $limit = NULL, $sort = NULL, $dir = NULL) {
        $query = $this->createQuery();

        if($category) {
            $query->matching($query->contains('category',$category));
        }
        if($limit) {
            $query->setLimit((int)$limit);
        }
        if($start) {
            $query->setOffset((int)$start);
        }
        if($sort&&$dir) {
            $query->setOrderings(array($sort => $dir));
        }
        return $query->execute();
    }

    /**
     * Finds an object matching the given identifier.
     *
     * @param Tx_Library_Domain_Model_Category $category
     * @return object The matching object if found, otherwise NULL
     * @api
     */
    public function countByCategory($category,$start,$limit) {
        $query = $this->createQuery();

        if($category) {
            $query->matching($query->contains('category',$category));
        }
        return $query->count();
    }
}
?>