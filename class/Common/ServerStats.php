<?php declare(strict_types=1);

namespace XoopsModules\Xlanguage\Common;

/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright   2000-2026 XOOPS Project (https://xoops.org)
 * @license     GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      mamba <mambax7@gmail.com>
 */
trait ServerStats
{
    /**
     * serverStats()
     *
     * @return string
     */
    public static function getServerStats()
    {
        //mb    $wfdownloads = WfdownloadsWfdownloads::getInstance();
        $moduleDirName      = \basename(\dirname(__DIR__, 2));
        $moduleDirNameUpper = \mb_strtoupper($moduleDirName);
        \xoops_loadLanguage('common', $moduleDirName);
        $html = '';
        //        $sql   = 'SELECT metavalue';
        //        $sql   .= ' FROM ' . $GLOBALS['xoopsDB']->prefix('wfdownloads_meta');
        //        $sql   .= " WHERE metakey='version' LIMIT 1";
        //        $query = $GLOBALS['xoopsDB']->query($sql);
        //        list($meta) = (($GLOBALS['xoopsDB']->isResultSet($query) && ($query instanceof \mysqli_result)) ? $GLOBALS['xoopsDB']->fetchRow($query) : false);
        $html .= "<fieldset><legend style='font-weight: bold; color: #900;'>" . \constant('_CO_XLANGUAGE_IMAGEINFO') . "</legend>\n";
        $html .= "<div style='padding: 8px;'>\n";
        //        $html .= '<div>' . constant('_CO_XLANGUAGE_METAVERSION') . $meta . "</div>\n";
        //        $html .= "<br>\n";
        //        $html .= "<br>\n";
        $html .= '<div>' . \constant('_CO_XLANGUAGE_SPHPINI') . "</div>\n";
        $html .= "<ul>\n";

        if (\function_exists('gd_info')) {
            $html  .= '<li>' . \constant('_CO_XLANGUAGE_GDLIBSTATUS') . '<span style="color: #008000;">' . \constant('_CO_XLANGUAGE_GDON') . '</span>';
            $gdlib = \gd_info();
            if (!empty(($gdlib))) {
                $html .= '<li>' . \constant('_CO_XLANGUAGE_GDLIBVERSION') . '<b>' . $gdlib['GD Version'] . '</b>';
            }
        } else {
            $html .= '<li>' . \constant('_CO_XLANGUAGE_GDLIBSTATUS') . '<span style="color: #ff0000;">' . \constant('_CO_XLANGUAGE_GDOFF') . '</span>';
        }
        //
        //    $safemode = ini_get('safe_mode') ? constant('_CO_XLANGUAGE_ON') . constant('_CO_XLANGUAGE_SAFEMODEPROBLEMS : constant('_CO_XLANGUAGE_OFF');
        //    $html .= '<li>' . constant('_CO_XLANGUAGE_SAFEMODESTATUS . $safemode;
        //
        //    $registerglobals = (!ini_get('register_globals')) ? "<span style=\"color: green;\">" . constant('_CO_XLANGUAGE_OFF') . '</span>' : "<span style=\"color: red;\">" . constant('_CO_XLANGUAGE_ON') . '</span>';
        //    $html .= '<li>' . constant('_CO_XLANGUAGE_REGISTERGLOBALS . $registerglobals;
        //
        $downloads = \ini_get('file_uploads') ? '<span style="color: #008000;">' . \constant('_CO_XLANGUAGE_ON') . '</span>' : '<span style="color: #ff0000;">' . \constant('_CO_XLANGUAGE_OFF') . '</span>';
        $html      .= '<li>' . \constant('_CO_XLANGUAGE_SERVERUPLOADSTATUS') . $downloads;

        $html .= '<li>' . \constant('_CO_XLANGUAGE_MAXUPLOADSIZE') . ' <b><span style="color: #0000ff;">' . \ini_get('upload_max_filesize') . "</span></b>\n";
        $html .= '<li>' . \constant('_CO_XLANGUAGE_MAXPOSTSIZE') . ' <b><span style="color: #0000ff;">' . \ini_get('post_max_size') . "</span></b>\n";
        $html .= '<li>' . \constant('_CO_XLANGUAGE_MEMORYLIMIT') . ' <b><span style="color: #0000ff;">' . \ini_get('memory_limit') . "</span></b>\n";
        $html .= "</ul>\n";
        $html .= "<ul>\n";
        $html .= '<li>' . \constant('_CO_XLANGUAGE_SERVERPATH') . ' <b>' . XOOPS_ROOT_PATH . "</b>\n";
        $html .= "</ul>\n";
        $html .= "<br>\n";
        $html .= \constant('_CO_XLANGUAGE_UPLOADPATHDSC') . "\n";
        $html .= '</div>';
        $html .= '</fieldset><br>';

        return $html;
    }
}
