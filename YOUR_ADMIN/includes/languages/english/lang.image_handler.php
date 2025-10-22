<?php
/**
 * mod Image Handler, v5.4.0
 * Previously /admin/includes/languages/english/extra_definitions/bmz_image_handler.php
 * english language definitions for image handler
 *
 * @author  Tim Kroeger (original author)
 * @copyright Copyright 2005-2006
 * @license http://www.gnu.org/licenses/gpl.txt GNU General Public License V2.0
 * @version $Id: bmz_image_handler.php,v 2.0 Rev 8 2010-05-31 23:46:5 DerManoMann Exp $
 * Last modified by webchills and cjones 2012-03-10 17:46:50
 * Last modified by lat9 2022-11-16, IH v5.3.1
 */
$define = [
    'IH_VERSION_VERSION' => 'Version',
    'IH_VERSION_NOT_FOUND' => 'No Image Handler information found.',
    'IH_REMOVE' => 'Uninstall Image Handler.  (Please backup your site and database first)',
    'IH_VIEW_CONFIGURATION' => 'View Image Handler Configuration',
    'IH_CLEAR_CACHE' => 'Clear image cache',
    'IH_CACHE_CLEARED' => 'Image cache cleared.',

    'IH_SOURCE_TYPE' => 'Source imagetype',
    'IH_SOURCE_IMAGE' => 'Source image',
    'IH_SMALL_IMAGE' => 'Default image',
    'IH_MEDIUM_IMAGE' => 'Products image',

    'IH_ADD_NEW_IMAGE' => 'Add a new image',
    'IH_NEW_NAME_DISCARD_IMAGES' => 'Use new name, discard additional images',
    'IH_NEW_NAME_COPY_IMAGES' => 'Use new name, copy additional images',
    'IH_KEEP_NAME' => 'Keep old name and additional images',
    'IH_DELETE_FROM_DB_ONLY' => 'Delete image reference from database only',

    'IH_HEADING_TITLE' => 'Image Handler<sup>5</sup>',
    'IH_HEADING_TITLE_PRODUCT_SELECT' => 'Please select a product to manage the images.',

    'TABLE_HEADING_PHOTO_NAME' => 'Image name',
    'TABLE_HEADING_BASE_SIZE' => 'Base image',
    'TABLE_HEADING_SMALL_SIZE' => 'Small image',
    'TABLE_HEADING_MEDIUM_SIZE' => 'Medium image',
    'TABLE_HEADING_LARGE_SIZE' => 'Large image',
    'TABLE_HEADING_ACTION' => 'Action',
    'TABLE_HEADING_FILETYPE' => 'File Type',

    'TEXT_PRODUCT_INFO' => 'Product',
    'TEXT_PRODUCTS_MODEL' => 'Model',
    'TEXT_PRICE' => 'Price',
    'TEXT_IMAGE_BASE_DIR' => 'Image Directory',
    'TEXT_NO_IMAGE_DEFINED' => 'This product\'s image is not currently defined.', //- When the product's configured image is an empty string.
    'TEXT_NO_PRODUCT_IMAGES' => 'No matches were found for this product\'s image (%s).',  //- %s is filled in with the product's non-empty image name.
    'TEXT_PRODUCT_IMAGE_NOT_SUPPORTED' => 'The product\'s image (%s) extension is not supported by Image Handler.',   //- %s is filled in with the product's non-empty image name.
    'TEXT_CLICK_TO_ENLARGE' => 'Click to enlarge',

    'TEXT_INFO_IMAGE_INFO' => 'Image information',
    'TEXT_INFO_NAME' => 'Name',
    'TEXT_INFO_FILE_TYPE' => 'File type',
    'TEXT_INFO_EDIT_PHOTO' => 'Edit <em>main</em> image',
    'TEXT_INFO_EDIT_ADDL_PHOTO' => 'Edit <em>additional</em> image',
    'TEXT_INFO_NEW_PHOTO' => 'New <em>main</em> image',
    'TEXT_INFO_NEW_ADDL_PHOTO' => 'New <em>additional</em> image',
    'TEXT_INFO_IMAGE_BASE_NAME' => 'Image base name (optional)',
    'TEXT_INFO_AUTOMATIC_FROM_DEFAULT' => ' Automatic (from original image name)',
    'TEXT_INFO_MAIN_DIR' => 'Main directory',
    'TEXT_INFO_BASE_DIR' => 'Main image directory',
    'TEXT_INFO_NEW_DIR' => 'Select or define a new directory for the images.',
    'TEXT_INFO_IMAGE_DIR' => 'Image directory',
    'TEXT_INFO_OR' => 'or',
    'TEXT_INFO_AUTOMATIC' => 'Automatic',
    'TEXT_INFO_IMAGE_SUFFIX' => 'Image suffix (optional)',
    'TEXT_INFO_USE_AUTO_SUFFIX' => 'Enter a specific suffix or leave empty for automatic suffix generation.',
    'TEXT_INFO_DEFAULT_IMAGE' => 'Base image file',
    'TEXT_INFO_DEFAULT_IMAGE_HELP' => 'A base image is required. That image is assumed to be the smallest when <em>different</em> medium- or large-images are uploaded.',
    'TEXT_INFO_IMAGE_NOT_SUPPORTED' => 'This product\'s image type is not supported by Image Handler.  No additional actions can be performed.',
    'TEXT_INFO_CLICK_TO_ADD_MAIN' => 'Click the &quot;add image&quot; button to add a new <em>main</em> image for this product',
    'TEXT_INFO_CLICK_TO_ADD_ADDL' => 'Click the &quot;add image&quot; button to add a new <em>additional</em> image for this product',
    'TEXT_INFO_CONFIRM_DELETE' => 'Confirm <em>%s</em> image delete',
        'TEXT_MAIN' => 'main',
        'TEXT_ADDITIONAL' => 'additional',
    'TEXT_INFO_CONFIRM_DELETE_SURE' => 'Are you sure you want to delete all sizes of this image?',
    'TEXT_INFO_SELECT_ACTION' => 'Select action',

    'TEXT_NOT_NEEDED' => 'Not needed',    //-Displayed for the 'Medium'-sized additional images

    'TEXT_MSG_FILE_NOT_FOUND' => 'This file does not exist.',
    'TEXT_MSG_ERROR_RETRIEVING_IMAGESIZE' => 'Could not determine the image size',
    'TEXT_MSG_AUTO_BASE_ERROR' => 'Automatic base select without default file.',
    'TEXT_MSG_INVALID_BASE_ERROR' => 'Invalid image base name, or unable to find the base image.',
    'TEXT_MSG_AUTO_REPLACE' => 'Automatically replacing bad characters in base name, new name: ',
    'TEXT_MSG_INVALID_SUFFIX' => 'Invalid image suffix.',
    'TEXT_MSG_IMAGE_TYPES_NOT_SAME_ERROR' => 'Image types are not the same; image <b>not</b> uploaded.',
    'TEXT_MSG_DEFAULT_REQUIRED_FOR_RESIZE' => 'A default image is required for automatic resizing.',
    'TEXT_MSG_NO_DEFAULT' => 'No <b>base image file</b> was uploaded.  Please try again.',
    'TEXT_MSG_NO_DEFAULT_ON_NAME_CHANGE' => 'You must supply a &quot;base&quot; image when updating the main image and changing its name.',
    'TEXT_MSG_INVALID_EXTENSION' => 'The uploaded &quot;%1$s&quot; image file\'s extension (%2$s) is not supported.  The extension must be one of (%3$s).',
        'TEXT_BASE' => 'base',
        'TEXT_MEDIUM' => 'medium',
        'TEXT_LARGE' => 'large',
    'TEXT_MSG_FILE_EXISTS' => 'File exists (%s)! Please change either the base name or suffix.',
    'TEXT_MSG_INVALID_SQL' => 'Unable to complete SQL query.',
    'TEXT_MSG_NOCREATE_IMAGE_DIR' => 'Unable to create image directory.',
    'TEXT_MSG_NOCREATE_MEDIUM_IMAGE_DIR' => 'Unable to create medium image directory.',
    'TEXT_MSG_NOCREATE_LARGE_IMAGE_DIR' => 'Unable to create large image directory.',
    'TEXT_MSG_NOPERMS_IMAGE_DIR' => 'Unable to set the permissions of the image directory.',
    'TEXT_MSG_NOPERMS_MEDIUM_IMAGE_DIR' => 'Unable to set the permissions of the medium image directory.',
    'TEXT_MSG_NOPERMS_LARGE_IMAGE_DIR' => 'Unable to set the permissions of the large image directory.',
    'TEXT_MSG_NAME_TOO_LONG_ERROR' => 'The image file &quot;%1$s&quot; is too long to be saved in the database.  Choose a name that is %2$u characters or fewer.',
    'TEXT_MSG_NO_SUFFIXES_FOUND' => 'Could not find an unused additional-image suffix in the range _01 to _99.',
    'TEXT_MSG_NO_FILE_UPLOADED' => 'No <b>Base image file</b> was selected; please try again.',

    'TEXT_MSG_NOUPLOAD_DEFAULT' => 'Unable to upload default image file.',
    'TEXT_MSG_NORESIZE' => 'Unable to resize image',
    'TEXT_MSG_NOCOPY_LARGE' => 'Unable to copy large image file.',
    'TEXT_MSG_NOCOPY_MEDIUM' => 'Unable to copy medium image file.',
    'TEXT_MSG_NOCOPY_DEFAULT' => 'Unable to copy default image file.',
    'TEXT_MSG_NOPERMS_LARGE' => 'Unable to set permissions of large image file.',
    'TEXT_MSG_NOPERMS_MEDIUM' => 'Unable to set permissions of medium image file.',
    'TEXT_MSG_NOPERMS_DEFAULT' => 'Unable to set permissions of default image file.',
    'TEXT_MSG_IMAGE_SAVED' => 'Image successfully saved.',
    'TEXT_MSG_LARGE_DELETED' => 'The large image (%s) was successfully deleted.',
    'TEXT_MSG_NO_DELETE_LARGE' => 'Unable to delete the large image (%s), check permissions.',
    'TEXT_MSG_MEDIUM_DELETED' => 'The medium image (%s) was successfully deleted.',
    'TEXT_MSG_NO_DELETE_MEDIUM' => 'Unable to delete the medium image (%s), check permissions.',
    'TEXT_MSG_DEFAULT_DELETED' => 'The base image (%s) was successfully deleted.',
    'TEXT_MSG_NO_DELETE_DEFAULT' => 'Unable to delete the base image (%s), check permissions.',
    'TEXT_MSG_NO_DEFAULT_FILE_FOUND' => 'The base image (%s) was not found for a delete action.',

    'TEXT_MSG_IMAGE_DELETED' => 'The image (%s) was successfully deleted.',
    'TEXT_MSG_IMAGE_NOT_FOUND' => 'The image (%s) was not found.',
    'TEXT_MSG_IMAGE_NOT_DELETED' => 'Unable to delete the image (%s).  Check permissions.',

    'TEXT_MSG_IMPORT_SUCCESS' => 'Import successful: ',
    'TEXT_MSG_IMPORT_FAILURE' => 'Import failure: ',

// image manager
    'IH_IMAGE_NEW_FILE' => 'Click to add a new image to this product',
    'IH_IMAGE_EDIT' => 'Click to edit this image',
    'TEXT_MEDIUM_FILE_IMAGE' => 'Medium image file (optional)',
    'TEXT_LARGE_FILE_IMAGE' => 'Large image file (optional)',

// ih menu
    'IH_MENU_MANAGER' => 'Image Manager',
    'IH_MENU_ADMIN' => 'Admin Tools',
    'IH_MENU_ABOUT' => 'About/Help',
    'IH_MENU_PREVIEW' => 'Preview',

    'IH_RESIZE_INSTRUCTIONS_HEADING' => 'Image Handler<sup>5</sup> is%s currently resizing images.',
        'IH_RESIZE_NOT' => ' not',    //- Replaces %s above if IH Resizing is disabled; empty string, otherwise.
    'IH_RESIZE_INSTRUCTIONS' => 'To %s image-resizing, click the button below.',
        'IH_RESIZE_DISABLE' => 'disable',
        'IH_RESIZE_ENABLE' => 'enable',
    'IH_BUTTON_RESIZE_TOGGLE' => 'Toggle Setting',
];

$define['TEXT_TABLE_CAPTION_INSTRUCTIONS'] = "<b>Note:</b> A product's additional images are <em>automatically</em> created in their 'small' and 'large' sizes <em>only</em> and show '" . $define['TEXT_NOT_NEEDED'] . "' for their <b>Medium image</b>.  If your storefront uses other image-sizes for these (or the product's main) images, those images are created (and cached) 'on-demand'.";
    
return $define;
