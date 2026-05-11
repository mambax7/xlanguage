<?php declare(strict_types=1);
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright       2000-2026 XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author          Xoops Development Team
 */
$moduleDirName      = \basename(\dirname(__DIR__, 2));
$moduleDirNameUpper = \mb_strtoupper($moduleDirName);

\define('_CO_XLANGUAGE_GDLIBSTATUS', 'GD library support: ');
\define('_CO_XLANGUAGE_GDLIBVERSION', 'GD Library version: ');
\define('_CO_XLANGUAGE_GDOFF', "<span style='font-weight: bold;'>Disabled</span> (No thumbnails available)");
\define('_CO_XLANGUAGE_GDON', "<span style='font-weight: bold;'>Enabled</span> (Thumbsnails available)");
\define('_CO_XLANGUAGE_IMAGEINFO', 'Server status');
\define('_CO_XLANGUAGE_MAXPOSTSIZE', 'Max post size permitted (post_max_size directive in php.ini): ');
\define('_CO_XLANGUAGE_MAXUPLOADSIZE', 'Max upload size permitted (upload_max_filesize directive in php.ini): ');
\define('_CO_XLANGUAGE_MEMORYLIMIT', 'Memory limit (memory_limit directive in php.ini): ');
\define('_CO_XLANGUAGE_METAVERSION', "<span style='font-weight: bold;'>Downloads meta version:</span> ");
\define('_CO_XLANGUAGE_OFF', "<span style='font-weight: bold;'>OFF</span>");
\define('_CO_XLANGUAGE_ON', "<span style='font-weight: bold;'>ON</span>");
\define('_CO_XLANGUAGE_SERVERPATH', 'Server path to XOOPS root: ');
\define('_CO_XLANGUAGE_SERVERUPLOADSTATUS', 'Server uploads status: ');
\define('_CO_XLANGUAGE_SPHPINI', "<span style='font-weight: bold;'>Information taken from PHP ini file:</span>");
\define('_CO_XLANGUAGE_UPLOADPATHDSC', 'Note. Upload path *MUST* contain the full server path of your upload folder.');

\define('_CO_XLANGUAGE_PRINT', "<span style='font-weight: bold;'>Print</span>");
\define('_CO_XLANGUAGE_PDF', "<span style='font-weight: bold;'>Create PDF</span>");

\define('_CO_XLANGUAGE_UPGRADEFAILED0', "Update failed - couldn't rename field '%s'");
\define('_CO_XLANGUAGE_UPGRADEFAILED1', "Update failed - couldn't add new fields");
\define('_CO_XLANGUAGE_UPGRADEFAILED2', "Update failed - couldn't rename table '%s'");
\define('_CO_XLANGUAGE_ERROR_COLUMN', 'Could not create column in database : %s');
\define('_CO_XLANGUAGE_ERROR_BAD_XOOPS', 'This module requires XOOPS %s+ (%s installed)');
\define('_CO_XLANGUAGE_ERROR_BAD_PHP', 'This module requires PHP version %s+ (%s installed)');
\define('_CO_XLANGUAGE_ERROR_TAG_REMOVAL', 'Could not remove tags from Tag Module');

\define('_CO_XLANGUAGE_FOLDERS_DELETED_OK', 'Upload Folders have been deleted');

// Error Msgs
\define('_CO_XLANGUAGE_ERROR_BAD_DEL_PATH', 'Could not delete %s directory');
\define('_CO_XLANGUAGE_ERROR_BAD_REMOVE', 'Could not delete %s');
\define('_CO_XLANGUAGE_ERROR_NO_PLUGIN', 'Could not load plugin');

//Help
\define('_CO_XLANGUAGE_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_CO_XLANGUAGE_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_CO_XLANGUAGE_BACK_2_ADMIN', 'Back to Administration of ');
\define('_CO_XLANGUAGE_OVERVIEW', 'Overview');

//\define('_CO_XLANGUAGE_HELP_DIR', __DIR__);

//help multipage
\define('_CO_XLANGUAGE_DISCLAIMER', 'Disclaimer');
\define('_CO_XLANGUAGE_LICENSE', 'License');
\define('_CO_XLANGUAGE_SUPPORT', 'Support');

//Sample Data
\define('_CO_XLANGUAGE_LOAD_SAMPLEDATA', 'Import Sample Data (will delete ALL current data)');
\define('_CO_XLANGUAGE_LOAD_SAMPLEDATA_CONFIRM', 'Are you sure to Import Sample Data? (It will delete ALL current data)');
\define('_CO_XLANGUAGE_LOAD_SAMPLEDATA_SUCCESS', 'Sample Date imported  successfully');
\define('_CO_XLANGUAGE_SAVE_SAMPLEDATA', 'Export Tables to YAML');
\define('_CO_XLANGUAGE_SAVE_SAMPLEDATA_SUCCESS', 'Export Tables to YAML successfully');
\define('_CO_XLANGUAGE_CLEAR_SAMPLEDATA', 'Clear Sample Data');
\define('_CO_XLANGUAGE_CLEAR_SAMPLEDATA_OK', 'The Sample Data has been cleared');
\define('_CO_XLANGUAGE_CLEAR_SAMPLEDATA_CONFIRM', 'Are you sure to Clear Sample Data? (It will delete ALL current data)');
\define('_CO_XLANGUAGE_EXPORT_SCHEMA', 'Export DB Schema to YAML');
\define('_CO_XLANGUAGE_EXPORT_SCHEMA_SUCCESS', 'Export DB Schema to YAML was a success');
\define('_CO_XLANGUAGE_EXPORT_SCHEMA_ERROR', 'ERROR: Export of DB Schema to YAML failed');
\define('_CO_XLANGUAGE_SHOW_SAMPLE_BUTTON', 'Show Sample Button?');
\define('_CO_XLANGUAGE_SHOW_SAMPLE_BUTTON_DESC', 'If yes, the "Add Sample Data" button will be visible to the Admin. It is Yes as a default for first installation.');
\define('_CO_XLANGUAGE_HIDE_SAMPLEDATA_BUTTONS', 'Hide the Import buttons)');
\define('_CO_XLANGUAGE_SHOW_SAMPLEDATA_BUTTONS', 'Show the Import buttons)');

\define('_CO_XLANGUAGE_LOAD_SAMPLEDATA_FAILURE', 'Sample Date import failed');

\define('_CO_XLANGUAGE_CONFIRM', 'Confirm');

//letter choice
\define('_CO_XLANGUAGE_BROWSETOTOPIC', "<span style='font-weight: bold;'>Browse items alphabetically</span>");
\define('_CO_XLANGUAGE_OTHER', 'Other');
\define('_CO_XLANGUAGE_ALL', 'All');

// block defines
\define('_CO_XLANGUAGE_ACCESSRIGHTS', 'Access Rights');
\define('_CO_XLANGUAGE_ACTION', 'Action');
\define('_CO_XLANGUAGE_ACTIVERIGHTS', 'Active Rights');
\define('_CO_XLANGUAGE_BADMIN', 'Block Administration');
\define('_CO_XLANGUAGE_BLKDESC', 'Description');
\define('_CO_XLANGUAGE_CBCENTER', 'Center Middle');
\define('_CO_XLANGUAGE_CBLEFT', 'Center Left');
\define('_CO_XLANGUAGE_CBRIGHT', 'Center Right');
\define('_CO_XLANGUAGE_SBLEFT', 'Left');
\define('_CO_XLANGUAGE_SBRIGHT', 'Right');
\define('_CO_XLANGUAGE_SIDE', 'Alignment');
\define('_CO_XLANGUAGE_TITLE', 'Title');
\define('_CO_XLANGUAGE_VISIBLE', 'Visible');
\define('_CO_XLANGUAGE_VISIBLEIN', 'Visible In');
\define('_CO_XLANGUAGE_WEIGHT', 'Weight');

\define('_CO_XLANGUAGE_PERMISSIONS', 'Permissions');
\define('_CO_XLANGUAGE_BLOCKS', 'Blocks Admin');
\define('_CO_XLANGUAGE_BLOCKS_DESC', 'Blocks/Group Admin');

\define('_CO_XLANGUAGE_BLOCKS_MANAGMENT', 'Manage');
\define('_CO_XLANGUAGE_BLOCKS_ADDBLOCK', 'Add a new block');
\define('_CO_XLANGUAGE_BLOCKS_EDITBLOCK', 'Edit a block');
\define('_CO_XLANGUAGE_BLOCKS_CLONEBLOCK', 'Clone a block');

//myblocksadmin
\define('_CO_XLANGUAGE_AGDS', 'Admin Groups');
\define('_CO_XLANGUAGE_BCACHETIME', 'Cache Time');
\define('_CO_XLANGUAGE_BLOCKS_ADMIN', 'Blocks Admin');
\define('_CO_XLANGUAGE_UPDATE_SUCCESS', 'Update successful');

//Template Admin
\define('_CO_XLANGUAGE_TPLSETS', 'Template Management');
\define('_CO_XLANGUAGE_GENERATE', 'Generate');
\define('_CO_XLANGUAGE_FILENAME', 'File Name');

//Menu
\define('_CO_XLANGUAGE_ADMENU_MIGRATE', 'Migrate');
\define('_CO_XLANGUAGE_FOLDER_YES', 'Folder "%s" exist');
\define('_CO_XLANGUAGE_FOLDER_NO', 'Folder "%s" does not exist. Create the specified folder with CHMOD 777.');
\define('_CO_XLANGUAGE_SHOW_DEV_TOOLS', 'Show Development Tools Button?');
\define('_CO_XLANGUAGE_SHOW_DEV_TOOLS_DESC', 'If yes, the "Migrate" Tab and other Development tools will be visible to the Admin.');
\define('_CO_XLANGUAGE_ADMENU_FEEDBACK', 'Feedback');
\define('_CO_XLANGUAGE_MIGRATE_OK', 'Database migrated to current schema.');
\define('_CO_XLANGUAGE_MIGRATE_WARNING', 'Warning! This is intended for developers only. Confirm write schema file from current database.');
\define('_CO_XLANGUAGE_MIGRATE_SCHEMA_OK', 'Current schema file written');

//Latest Version Check
\define('_CO_XLANGUAGE_NEW_VERSION', 'New Version: ');

//DirectoryChecker
\define('_CO_XLANGUAGE_AVAILABLE', "<span style='color: green;'>Available</span>");
\define('_CO_XLANGUAGE_NOTAVAILABLE', "<span style='color: red;'>Not available</span>");
\define('_CO_XLANGUAGE_NOTWRITABLE', "<span style='color: red;'>Should have permission ( %d ), but it has ( %d )</span>");
\define('_CO_XLANGUAGE_CREATETHEDIR', 'Create it');
\define('_CO_XLANGUAGE_SETMPERM', 'Set the permission');
\define('_CO_XLANGUAGE_DIRCREATED', 'The directory has been created');
\define('_CO_XLANGUAGE_DIRNOTCREATED', 'The directory cannot be created');
\define('_CO_XLANGUAGE_PERMSET', 'The permission has been set');
\define('_CO_XLANGUAGE_PERMNOTSET', 'The permission cannot be set');

//FileChecker
//\define('_CO_XLANGUAGE_AVAILABLE', "<span style='color: green;'>Available</span>");
//\define('_CO_XLANGUAGE_NOTAVAILABLE', "<span style='color: red;'>Not available</span>");
//\define('_CO_XLANGUAGE_NOTWRITABLE', "<span style='color: red;'>Should have permission ( %d ), but it has ( %d )</span>");
//\define('_CO_XLANGUAGE_COPYTHEFILE', 'Copy it');
//\define('_CO_XLANGUAGE_CREATETHEFILE', 'Create it');
//\define('_CO_XLANGUAGE_SETMPERM', 'Set the permission');

\define('_CO_XLANGUAGE_FILECOPIED', 'The file has been copied');
\define('_CO_XLANGUAGE_FILENOTCOPIED', 'The file cannot be copied');

//\define('_CO_XLANGUAGE_PERMSET', 'The permission has been set');
//\define('_CO_XLANGUAGE_PERMNOTSET', 'The permission cannot be set');

//image config
\define('_CO_XLANGUAGE_CONFIG_EXT_IMAGE', 'EXTERNAL Image configuration');

\define('_CO_XLANGUAGE_CONFIG_STYLING_START', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">:: ');
\define('_CO_XLANGUAGE_CONFIG_STYLING_END', ' ::</span> ');
\define('_CO_XLANGUAGE_CONFIG_STYLING_DESC_START', '<span style="color: #FF0000; font-size: Small;">');
\define('_CO_XLANGUAGE_CONFIG_STYLING_DESC_END', '</span> ');

\define('_CO_XLANGUAGE_PREFERENCE_BREAK_CONFIG_IMAGE', constant('_CO_XLANGUAGE_CONFIG_STYLING_START') . constant('_CO_XLANGUAGE_CONFIG_EXT_IMAGE') . constant('_CO_XLANGUAGE_CONFIG_STYLING_END'));
\define('_CO_XLANGUAGE_IMAGE_WIDTH', 'Image Display Width');
\define('_CO_XLANGUAGE_IMAGE_WIDTH_DSC', 'Display width for image');
\define('_CO_XLANGUAGE_IMAGE_HEIGHT', 'Image Display Height');
\define('_CO_XLANGUAGE_IMAGE_HEIGHT_DSC', 'Display height for image');
\define('_CO_XLANGUAGE_IMAGE_CONFIG', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- EXTERNAL Image configuration ---</span> ');
\define('_CO_XLANGUAGE_IMAGE_CONFIG_DSC', '');
\define('_CO_XLANGUAGE_IMAGE_UPLOAD_PATH', 'Image Upload path');
\define('_CO_XLANGUAGE_IMAGE_UPLOAD_PATH_DSC', 'Path for uploading images');

\define('_CO_XLANGUAGE_IMAGE_FILE_SIZE', 'Image File Size (in Bytes)');
\define('_CO_XLANGUAGE_IMAGE_FILE_SIZE_DSC','The maximum file size of the image file (in Bytes)');

//Module Stats
\define('_CO_XLANGUAGE_STATS_SUMMARY', 'Module Statistics');
\define('_CO_XLANGUAGE_TOTAL_CATEGORIES', 'Categories:');
\define('_CO_XLANGUAGE_TOTAL_ITEMS', 'Items');
\define('_CO_XLANGUAGE_TOTAL_OFFLINE', 'Offline');
\define('_CO_XLANGUAGE_TOTAL_PUBLISHED', 'Published');
\define('_CO_XLANGUAGE_TOTAL_REJECTED', 'Rejected');
\define('_CO_XLANGUAGE_TOTAL_SUBMITTED', 'Submitted');

\define('_CO_XLANGUAGE_ERROR403', 'You are not allowed to view this page!');

//Preferences
\define('_CO_XLANGUAGE_TRUNCATE_LENGTH', 'Number of Characters to truncate to the long text field');
\define('_CO_XLANGUAGE_TRUNCATE_LENGTH_DESC', 'Set the maximum number of characters to truncate the long text fields');

\define('_CO_XLANGUAGE_DELETE_BLOCK_CONFIRM', 'Are you sure to delete this Block?');

//Cloning
\define('_CO_XLANGUAGE_CLONE', 'Clone');
\define('_CO_XLANGUAGE_CLONE_DSC', 'Cloning a module has never been this easy! Just type in the name you want for it and hit submit button!');
\define('_CO_XLANGUAGE_CLONE_TITLE', 'Clone %s');
\define('_CO_XLANGUAGE_CLONE_NAME', 'Choose a name for the new module');
\define('_CO_XLANGUAGE_CLONE_NAME_DSC', 'Do not use special characters! <br>Do not choose an existing module dirname or database table name!');
\define('_CO_XLANGUAGE_CLONE_INVALIDNAME', 'ERROR: Invalid module name, please try another one!');
\define('_CO_XLANGUAGE_CLONE_EXISTS', 'ERROR: Module name already taken, please try another one!');
\define('_CO_XLANGUAGE_CLONE_CONGRAT', 'Congratulations! %s was sucessfully created!<br>You may want to make changes in language files.');
\define('_CO_XLANGUAGE_CLONE_IMAGEFAIL', 'Attention, we failed creating the new module logo. Please consider modifying assets/images/logoModule.png manually!');
\define('_CO_XLANGUAGE_CLONE_FAIL', "Sorry, we failed in creating the new clone. Maybe you need to temporally set write permissions (CHMOD 777) to 'modules' folder and try again.");

//JSON-LD generation of www.schema.org
\define('_CO_XLANGUAGE_GENERATE_JSONLD', 'Generate Schema Markup through JSON LD');
\define('_CO_XLANGUAGE_GENERATE_JSONLD_DESC', 'Mark up your module with structured data to help search engines better understand the content of your web page');

//Repository not found
\define('_CO_XLANGUAGE_REPO_NOT_FOUND', 'Repository Not Found: ');
//Release not found
\define('_CO_XLANGUAGE_NO_REL_FOUND', 'Released Version Not Found: ');
//rename upload folder on uninstall
\define('_CO_XLANGUAGE_ERROR_FOLDER_RENAME_FAILED', 'Could not rename upload folder, please rename manually');

//TCPDF
\define('_CO_XLANGUAGE_ERROR_NO_PDF', 'TCPDF for XOOPS is not installed in /class/libraries/vendor/tecnickcom/tcpdf/ <br> Please read the /docs/readme.txt or click on the Help tab to learn how to get it!');

