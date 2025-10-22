<?php
// -----
// Part of the "Image Handler" plugin, v5.4.0 and later, by Cindy Merkin a.k.a. lat9 (cindy@vinosdefrutastropicales.com)
// Copyright (c) 2017-2025 Vinos de Frutas Tropicales
//
// Note: Some of these definitions were present in /admin/includes/languages/english/bmz_image_handler.php for IH versions
//       prior to v5.0.0.
//
// -----
// The title displayed on the admin's "Tools" dropdown menu.
//
return [
    'BOX_TOOLS_IMAGE_HANDLER' => 'Image Handler<sup>5</sup>',
    'BOX_TOOLS_IMAGE_HANDLER_UNINSTALL' => 'Image Handler<sup>5</sup> Uninstall',
    'BOX_TOOLS_IMAGE_HANDLER_VIEW_CONFIG' => 'View Image Handler<sup>5</sup> Configuration',

    // -----
    // Messages issued by /admin/includes/init_includes/init_image_handler.php
    //
    'IH_TEXT_MESSAGE_INSTALLED' => 'Image Handler<sup>5</sup>, v%s was successfully installed.',
    'IH_TEXT_MESSAGE_UPDATED' => 'Image Handler<sup>5</sup> was successfully updated from v%1$s to v%2$s.',

    // -----
    // The image-title text for the button in the Categories->Products listing.  Also used by /admin/image_handler.php
    //
    'ICON_IMAGE_HANDLER' => 'Image Handler ' . (defined('IH_VERSION') ? IH_VERSION : ''),
];
