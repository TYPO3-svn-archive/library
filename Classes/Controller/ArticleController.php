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
 * Controller for the Article object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

// TODO: As your extension matures, you should use Tx_Extbase_MVC_Controller_ActionController as base class, instead of the ScaffoldingController used below.
class Tx_Library_Controller_ArticleController extends Tx_Extbase_MVC_Controller_ActionController {

    /**
     * @var Tx_Library_Domain_Repository_ArticleRepository
     */
    protected $articleRepository;

    /**
     * Initializes the current action
     *
     * @return void
     */
    protected function initializeAction() {
        $this->articleRepository = t3lib_div::makeInstance('Tx_Library_Domain_Repository_ArticleRepository');
    }

    /**
     * index action
     *
     * @param array $categories
     * @param int $start
     * @param int $limit
     * @param string $sort
     * @param string $dir
     * @return string The rendered list action
     */
    public function indexAction($category = NULL, $start = NULL, $limit = NULL, $sort = NULL, $dir = NULL) {
        $articles = $this->articleRepository->findByCategory($category,$start,$limit,$sort,$dir);
        $articles_total = $this->articleRepository->countByCategory($category);
        //var_dump($articles);
        $this->view->assign('articles', $articles);
        $this->view->assign('total', $articles_total);
    }
}
?>
