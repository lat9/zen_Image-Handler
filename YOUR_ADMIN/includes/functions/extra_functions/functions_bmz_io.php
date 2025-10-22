<?php
/**
 * mod Image Handler, v5.4.0
 * functions_bmz_io.php
 * admin filesystem functions for image handler
 *
 * @author  Tim Kroeger (original author)
 * @copyright Copyright 2005-2006
 * @license http://www.gnu.org/licenses/gpl.txt GNU General Public License V2.0
 * @version $Id: functions_bmz_io.php,v 2.0 Rev 8 2010-05-31 23:46:5 DerManoMann Exp $
 * Modified by DerManoMann 2010-05-31 23:46:50 
 * Last Modified by lat9: 2017-07-17, applying PSR-2 formatting.
 */
if (!defined('IS_ADMIN_FLAG') || IS_ADMIN_FLAG !== true) {
    exit('Invalid access');
}

require DIR_FS_CATALOG . DIR_WS_FUNCTIONS . 'extra_functions/functions_bmz_io.php';

function bmz_clear_cache(): bool
{
    global $bmzConf;
    return remove_dir($bmzConf['cachedir']);
}

function remove_dir(string $dirname): bool
{
    global $messageStack;
    $error = false;
    if ($dir = @dir($dirname)) {
        $dir->rewind();
        while (false !== ($file = $dir->read())) {
            if (!in_array($file, ['.', '..', '.htaccess', '.keep'], true)) {
                if (is_dir($dirname . '/' . $file)) {
                    // another directory, recurse
                    $error = remove_dir($dirname . '/' . $file);
                    // if it was a directory, it should be empty now
                    if (!@rmdir($dirname . '/' . $file)) {
                        $error = true;
                        $messageStack->add('Couldn\'t delete ' . $dirname . '/' . $file . '.', 'error');
                    }
                } else {
                    if (!@unlink($dirname . '/' . $file)) {
                        $error = true;
                        $messageStack->add('Couldn\'t delete ' . $dirname . '/' . $file . '.', 'error');
                    }
                }
            }
        }
        $dir->close();
    }
    return $error;
}
