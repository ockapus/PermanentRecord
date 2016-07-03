<?php
/**
 * Hooks for PermanentRecord extension
 *
 * @file
 * @ingroup Extensions
 */

class PermanentRecordHooks {
    public static function onLoadExtensionSchemaUpdates( DatabaseUpdater $updater ) {
        /* Table that defines our record entries */
        $updater->addExtensionTable( 'pemanent_record', __DIR__ . '/sql/PermanentRecord.sql' );

        return true;
    }