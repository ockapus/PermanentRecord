<?php

if (!defined('MUXREGISTER_VERSION')) {
    die( "Extension <a href=\"http://aliencity.org/wiki/Extension:MuxRegister\">MuxRegister</a> must be installed for Permanent Record to run." );
} elseif ( function_exists( 'wfLoadExtension' ) ) {       
    wfLoadExtension( 'PermanentRecord' );
    // Keep i18n globals so mergeMessageFileList.php doesn't break
    $wgMessagesDirs['PermanentRecord'] = __DIR__ . '/i18n';
    $wgExtensionMessagesFiles['PermanentRecordAlias'] = __DIR__ . '/PermanentRecord.i18n.alias.php';

    wfWarn(
        'Deprecated PHP entry point used for PermanentRecord extension. Please use wfLoadExtension ' .
        'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
    );
    return true;
} else {
    die( 'This version of the FateCharGen extension requires MediaWiki 1.25+' );
}