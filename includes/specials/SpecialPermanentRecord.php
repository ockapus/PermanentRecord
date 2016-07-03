<?php
/**
 * SpecialPage for PermanentRecord extension
 *
 * @file
 * @ingroup Extensions
 */

class SpecialPermanentRecord extends SpecialPage {
    public function __construct() {
        parent::__construct( 'PermanentRecord' );
    }
    
    public function execute( $sub ) {
        $out = $this->getOutput();
        $user = $this->getUser();
        $request = $this->getRequest();
        
        $this->setHeaders();
        $out->setPageTitle( $this->msg( 'permanentrecord' ) );
        
        $out->addWikiText("Permanent Record page; coming soon!");
    }
}