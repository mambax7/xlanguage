# Changelog


## 3.1.4 RC-1 [2026-05-11]

- replaced .gif with .png icons (mamba)
- fixed source-selection (URL → cookie → detectLang → default) in api.php (mamba)

## 3.1.4 Beta 1 [2026-04-25]

- Added two-part result guarding to language lookup/list fetches.
- Updated install SQL to InnoDB and utf8mb4 defaults.
- Replaced live `queryF()` usage with `exec()` or `query()` depending on statement type.
- Replaced `quoteString()` with `quote()`.
- Added two-part result guarding in the shared clone helper.
- Fixed sample-data replacement logic to use the provided module id instead of an undefined variable.
- Replaced raw request extraction in the admin language controller with source-pinned `Xmf\Request` reads.
- Added CSRF validation for language save/delete/config-create mutations.
- Validated requested language tags before setting the language cookie.


## 3.1.4-dev [2026-04-25]

- Replaced raw request extraction in the admin language controller with source-pinned Xmf\Request reads.
- Added CSRF validation for language save/delete/config-create mutations.
- Validated requested language tags before setting the language cookie.

## 3.1.4 Beta 1        [2022-02-20]  

- index.html in /preloads (mamba)

## 3.1.3 FINAL        [2021-08-20]  



## 3.1.3 RC-1        [2021-08-18]  


- fix site stays on English instead of going to local default language (liomj/mamba)

## 3.1.2 Final        [2021-08-13]  

- set 'hasMain'  in xoops_version.php to 0 (alain01/geekwright)

## 3.1.1 Final        [2021-08-13]  

- added missing index.html in root issues #19 (alain01/mamba)


## 3.1 Final        [2021-08-10]  

- added test data (mamba)

## 3.1 RC 2        [2020-09-09]  

- fixed warning about XoopsObject compatibility (issue #10) (goffy)
- PHP 8 adjustments (mamba)
- various fixes, updates, cosmetics (mamba)

## 3.1 RC 1        [2019-12-22]  

- __NAMESPACE__ in Helper.php (mamba)
- renamed 'PHP_SELF' to 'SCRIPT_NAME' (mamba)
- cosmetics, PSR12 (mamba)
- decreased index key length (mamba) (MySQL error #1071)
- added few \Xmf\Request checks (mamba)
- Scrutinizer suggestions (mamba)


## 3.1 Beta 1        [NOT RELEASED]

- cosmetics (mamba)
- renamed XLANG to XLANGUAGE (mamba)
- namespaces (mamba)
- autoloading (mamba)
- moved config/config.php to /config/config.ph (mamba)


## 3.05 RC 1        [2017-09-02]

- code cosmetics (mamba)
- removed @version (mamba)
- addNavigation(basename(__FILE__))  (mamba)
- dirname(__FILE__) to __DIR__ (mamba)
- XOOPS 2.5.8, PHP 7 (mamba)
- replaced < b /> with < b > (mamba)
- Unnecessary double quotes (mamba)
- reference mismatch (mamba)
- Hardening to type safe (mamba)
- update Help (mamba)
- php-cs-fixer updates (mamba)
- started conversion to XMF (mamba)
    &nbsp;&nbsp;- updated addInfoBoxLine entries (mamba)
    &nbsp;&nbsp;- displayNavigation(basename(__FILE__))  (mamba)
    &nbsp;&nbsp;- changed to ->displayButton('left') (mamba)


## 3.05 Beta 1       [NOT RELEASED

- moved all images, CSS, and JS files to /assets (mamba)
- renamed .html Smarty templates to .tpl (mamba)
- fixed language auto-detection (Rewarder/Mamba)


## 3.04

- updated POSIX Regex to PCRE (Mamba)
- minor fixes (Mamba)
- fixing generation of configuration file for extended languages


## 3.03

1 updated to XOOPS 2.5.x GUI using ModuleAdmin class (Mamba)


## 3.02

1 adjusted for Xoops 2.4.0 using Preloads, no hacks of Core files required anymore in 2.4.0 and above (trabis)


## 3.0:

1 compatable for all Xoops active versions
2 added smarty template for block
3 added inline scripts for displaying language switch manner anywhere prefered


## 2.04

capable for different language cache, reported by suico @ xoops.org


## 2.03

"input" parse improvement, reported by irmtfan @ xoops.org


## 2.02

bugfix for XSS vulnerability
Thanks domifara @ dev.xoops.org


## 2.01

bugfix for nonexisting language
