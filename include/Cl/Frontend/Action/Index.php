<?php
/**
 * svnchangelog
 *
 * @package net.xpender.svnchangelog
 * @author Marko Kercmar <m.kercmar@bigpoint.net>
 */
class Cl_Frontend_Action_Index extends Cl_Frontend_ActionAbstract
{
    public function getName()
    {
        return 'index';
    }

    protected function _execute()
    {
        // show template
        $this->_oTemplate->display(
            'index'
            );
    }
}
