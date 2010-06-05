<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Dmitri Pisarev <dimaip@gmail.com>
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
 * This class is used to build toolbar of categories.
 *
 * @package TYPO3
 * @subpackage Fluid
 * @version
 */
class Tx_Library_ViewHelpers_ToolbarViewHelper extends Tx_MvcExtjs_ViewHelpers_JsCode_AbstractJavaScriptCodeViewHelper {

    /**
     * @var Tx_MvcExtjs_CodeGeneration_JavaScript_ExtJS_ExtendClass
     */
    protected $toolbar;

    /**
     * @var Tx_MvcExtjs_CodeGeneration_JavaScript_ExtJS_Config
     */
    protected $config;

    /**
     * Initializes the ViewHelper
     *
     * @see Classes/ViewHelpers/Be/Tx_MvcExtjs_ViewHelpers_Be_AbstractJavaScriptCodeViewHelper#initialize()
     */
    public function initialize() {
        parent::initialize();
        $this->config = new Tx_MvcExtjs_CodeGeneration_JavaScript_ExtJS_Config();
        $this->toolbar = new Tx_MvcExtjs_CodeGeneration_JavaScript_ExtJS_ExtendClass(
                'toolbar',
                'Ext.Toolbar',
                array(),
                $this->config,
                new Tx_MvcExtjs_CodeGeneration_JavaScript_Object(),
                $this->extJsNamespace
        );
    }
//TODO: commit
    /**
     * Renders the js code for a toolbar of categories supplied
     *
     * @param array() $categories
     * @param int $limit
     * @return void
     */
    public function render($categories,  $limit) {
        $buttons = '[';
        foreach ($categories as $category) {
            $buttons .= "{
                icon: '../typo3/sysext/t3skin/icons/gfx/refresh_n.gif',
                cls: 'x-btn-text-icon',
                text: '".$category->getTitle()."',
                handler: function() {
                    astore.load({params:{
                        'tx_library_pi1[category]':".$category->getUid().",
                        'tx_library_pi1[start]':0,
                        'tx_library_pi1[limit]':pageSize
                    }});
                }
           },";
        }
        $buttons .= ']';
        $this->config->setRaw('items', $buttons);
        // Apply the configuration again
        $this->injectJsCode();
    }

    /**
     * @see Classes/ViewHelpers/JsCode/Tx_MvcExtjs_ViewHelpers_JsCode_AbstractJavaScriptCodeViewHelper#injectJsCode()
     */
    protected function injectJsCode() {
        $this->toolbar->setConfig($this->config);
        // Allow objects to be declared inside this viewhelper; they are rendered above
        $this->renderChildren();
        // Add the code and write it into the inline section in your HTML head
        $this->jsCode->addSnippet($this->toolbar);
        parent::injectJsCode();
    }

}
?>