<?php return array (
  'af6e4738b5631673f9ab7fb37ab6e91c' => 
  array (
    'criteria' => 
    array (
      'name' => 'filedownloadr',
    ),
    'object' => 
    array (
      'name' => 'filedownloadr',
      'path' => '{core_path}components/filedownloadr/',
      'assets_path' => '{assets_path}components/filedownloadr/',
    ),
  ),
  'd014f1f7f1482814fd958b5af4055784' => 
  array (
    'criteria' => 
    array (
      'category' => 'FileDownloadR',
    ),
    'object' => 
    array (
      'id' => 4,
      'parent' => 0,
      'category' => 'FileDownloadR',
    ),
    'files' => 
    array (
      0 => '/var/www/vhosts/anpasa.com/httpdocs/core/components',
    ),
  ),
  '6a19e843b481e6dffd5664eb54a88a8f' => 
  array (
    'criteria' => 
    array (
      'name' => 'fdImages',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'fdImages',
      'description' => 'Image types of the files for FileDownload',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => 'jpg     = image.png,
jpeg    = image.png,
bmp     = image.png,
png     = image.png,
gif     = image.png,
php     = document-php.png,
js      = document-code.png,
pdf     = document-pdf.png,
txt     = document-text.png,
zip     = folder-zipper.png,
html    = globe.png,
xls     = document-excel.png,
xlsx    = document-excel.png,
doc     = document-word.png,
docx    = document-word.png,
mdb     = document-access.png,
ppt     = document-powerpoint.png,
pptx    = document-powerpoint.png,
pps     = slide-powerpoint.png,
ppsx    = slide-powerpoint.png,
mov     = film.png,
avi     = film.png,
mp3     = music.png,
wav     = music.png,
flv     = document-flash-movie.png,
dir     = folder-horizontal.png,
default = document.png',
      'locked' => 0,
      'properties' => '',
      'static' => 0,
      'static_file' => '',
      'content' => 'jpg     = image.png,
jpeg    = image.png,
bmp     = image.png,
png     = image.png,
gif     = image.png,
php     = document-php.png,
js      = document-code.png,
pdf     = document-pdf.png,
txt     = document-text.png,
zip     = folder-zipper.png,
html    = globe.png,
xls     = document-excel.png,
xlsx    = document-excel.png,
doc     = document-word.png,
docx    = document-word.png,
mdb     = document-access.png,
ppt     = document-powerpoint.png,
pptx    = document-powerpoint.png,
pps     = slide-powerpoint.png,
ppsx    = slide-powerpoint.png,
mov     = film.png,
avi     = film.png,
mp3     = music.png,
wav     = music.png,
flv     = document-flash-movie.png,
dir     = folder-horizontal.png,
default = document.png',
    ),
  ),
  '2e742c1aa4d5e28f0b846ed35c87201d' => 
  array (
    'criteria' => 
    array (
      'name' => 'fileDescription',
    ),
    'object' => 
    array (
      'id' => 8,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'fileDescription',
      'description' => 'File descriptions for FileDownload snippet',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => 'assets/downloads/Presentation1.pptx  | This is a presentation stuff.||
[[++base_path]]assets/downloads/Book1.xlsx | A spreadsheet to handle. ||
[[++core_path]]downloads/texts.txt |        Debug text snippets ||
[[++core_path]]downloads/nonexistentfile.txt | Let\'s see if this comes up, and give a headache ||',
      'locked' => 0,
      'properties' => '',
      'static' => 0,
      'static_file' => '',
      'content' => 'assets/downloads/Presentation1.pptx  | This is a presentation stuff.||
[[++base_path]]assets/downloads/Book1.xlsx | A spreadsheet to handle. ||
[[++core_path]]downloads/texts.txt |        Debug text snippets ||
[[++core_path]]downloads/nonexistentfile.txt | Let\'s see if this comes up, and give a headache ||',
    ),
  ),
  '490ba22c40eda0d00e8c0b18097a3bde' => 
  array (
    'criteria' => 
    array (
      'name' => 'FileDownloadEmailChunk',
    ),
    'object' => 
    array (
      'id' => 9,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FileDownloadEmailChunk',
      'description' => 'Email chunk for FileDownload\'s plugin',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '<p>Hello,</p>
<p>Someone has downloaded [[+filePath]] of the [[+ctx]] context from your website.</p>
<p></p>
<p>Sincerely yours,</p>
<p></p>
<p>Your FileDownload R\'s bot</p>',
      'locked' => 0,
      'properties' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '<p>Hello,</p>
<p>Someone has downloaded [[+filePath]] of the [[+ctx]] context from your website.</p>
<p></p>
<p>Sincerely yours,</p>
<p></p>
<p>Your FileDownload R\'s bot</p>',
    ),
  ),
  'a5003682ef8cf3de82437d0af2987058' => 
  array (
    'criteria' => 
    array (
      'name' => 'FileDownload',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FileDownload',
      'description' => 'Snippet to list downloadable files.',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/**
 * The snippet for the FileDownload package for MODX Revolution
 * This is the conversion of the original FileDownload snippet for MODX
 * Evolution, which was originally created by Kyle Jaebker, and converted by
 * goldsky.
 * The main parameters are taken from that version so any conversion can be done
 * smoothly.
 *
 * FileDownload is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * FileDownload is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FileDownload; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @author      Kyle Jaebker <http://muddydogpaws.com>
 * @author      goldsky <goldsky@fastmail.fm> <http://virtudraft.com>
 * @package     filedownload
 * @subpackage  filedownload snippet
 */

$scriptProperties[\'encoding\'] = $modx->getOption(\'encoding\', $scriptProperties, \'UTF-8\');
header(\'Content-Type: text/html; charset=\' . $scriptProperties[\'encoding\']);
mb_internal_encoding($scriptProperties[\'encoding\']);

/////////////////////////////////////////////////////////////////////////////////
//                               Main Parameters                               //
/////////////////////////////////////////////////////////////////////////////////
/**
 * This is used to specify which directories to display with the snippet.
 * Multiple directories can be specified by seperating them with a comma.
 * When specifying multiple directories the directory browsing functionality is
 * no longer available.
 * @options: comma delimited list of directories
 * @default: null
 * @example: assets/snippets/filedownload
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'getDir\'] = $modx->getOption(\'getDir\', $scriptProperties);
/**
 * The getFile parameter will make the snippet output only the file specified.
 * The getDir parameter is still required and getFile should be a file inside
 * of the directory.
 * This allows for use of the download script and download counting with a
 * single file.
 * @options: string
 * @default: null
 * @example: filedownload.php
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'getFile\'] = $modx->getOption(\'getFile\', $scriptProperties);

if (empty($scriptProperties[\'getDir\']) && empty($scriptProperties[\'getFile\'])) {
    return \'<!-- FileDownload parameters are empty -->\';
}

/**
 * This allows users to view subdirectories of the directory specified with the
 * getDir parameter. When using this feature the following templates get used:
 * path & directory.
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 1.2.0
 */
$scriptProperties[\'browseDirectories\'] = $modx->getOption(\'browseDirectories\', $scriptProperties, 0);
// typo fall back
$scriptProperties[\'browseDirectory\'] = !empty($scriptProperties[\'browseDirectory\']) ?
        $scriptProperties[\'browseDirectory\'] :
        $scriptProperties[\'browseDirectories\'];
/**
 * If multiple directories are specified in the getDir parameter, this property
 * will group the files by each directory.
 * When grouped by directory, the directory template is used to output the path
 * above each group.
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 1.2.0
 */
$scriptProperties[\'groupByDirectory\'] = $modx->getOption(\'groupByDirectory\', $scriptProperties, 0);
// typo fall back
$scriptProperties[\'groupByDirectories\'] = !empty($scriptProperties[\'groupByDirectories\']) ?
        $scriptProperties[\'groupByDirectories\'] :
        $scriptProperties[\'groupByDirectory\'];
/**
 * This allows descriptions to be added to the file listing included in a chunk.
 * All of the files and descriptions should be listed in the chunk using the
 * following format: path to file/filename|description||
 * @options: the name of a chunk
 * @default: null
 * @example:
 *     chunk\'s name: fileDescription
 *     chunk content:
 *         assets/files/test.pdf|This is a test pdf. It shows report stuff.||
 *         assets/images/options.gif|These are the options available to you.||
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'chkDesc\'] = $modx->getOption(\'chkDesc\', $scriptProperties);
/**
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since version 2.0.0, use sortBy instead
 */
// $scriptProperties[\'userSort\'] = $modx->getOption(\'userSort\', $scriptProperties);
/**
 * Sort ordering.
 * This allows the files to be sorted by all of the fields listed below.
 * To sort by multiple fields use a comma delimited list.
 * When using the directory browsing feature the files will be sorted by type
 * first, this will put the directories first in the list. When multiple folders
 * are specified and the group by directory feature is used; the files are
 * sorted by path first to keep the files in order by directory.
 * @options: filename | extension | path | size | sizetext | type | date | description | count
 * @default:
 *     filename;
 *     if &browseDirectories=`1`, sort by: type,filename;
 *     if &groupByDirectory=`1`, sort by: path,filename;
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'sortBy\'] = $modx->getOption(\'sortBy\', $scriptProperties, \'filename\');
/**
 * Case sensitive option for sorting
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 2.0.0
 */
$scriptProperties[\'sortByCaseSensitive\'] = $modx->getOption(\'sortByCaseSensitive\', $scriptProperties, 0);
/**
 * Sort files in ascending or descending order.
 * @options: asc | desc
 * @default: asc
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'sortOrder\'] = $modx->getOption(\'sortOrder\', $scriptProperties, \'asc\');
/**
 * Sort order option by a natural order
 * @options: 1 | 0
 * @default: 1
 * @var bool
 * @since ver 2.0.0
 */
$scriptProperties[\'sortOrderNatural\'] = $modx->getOption(\'sortOrderNatural\', $scriptProperties, 1);
/**
 * This will limit the inclusion files displayed to files with a valid extension
 * from the list.
 * @options: comma delimited list of file extensions
 * @default: null
 * @example: zip,php,txt
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'extShown\' instead.
 */
$scriptProperties[\'showExt\'] = $modx->getOption(\'showExt\', $scriptProperties);
if (!empty($scriptProperties[\'showExt\']) && empty($scriptProperties[\'extShown\'])) {
    $scriptProperties[\'extShown\'] = $scriptProperties[\'showExt\'];
} else {
    $scriptProperties[\'extShown\'] = $modx->getOption(\'extShown\', $scriptProperties);
}
unset($scriptProperties[\'showExt\']);
/**
 * This will exclude the files displayed to files with a valid extension from
 * the list.
 * @options: comma delimited list of file extensions
 * @default: null
 * @example: zip,php,txt
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'extHidden\' instead.
 */
$scriptProperties[\'hideExt\'] = $modx->getOption(\'hideExt\', $scriptProperties);
if (!empty($scriptProperties[\'hideExt\']) && empty($scriptProperties[\'extHidden\'])) {
    $scriptProperties[\'extHidden\'] = $scriptProperties[\'hideExt\'];
} else {
    $scriptProperties[\'extHidden\'] = $modx->getOption(\'extHidden\', $scriptProperties);
}
unset($scriptProperties[\'hideExt\']);
/**
 * The dateFormat parameter will change the format of the date displayed for
 * each file in the output.
 * @options: PHP\'s date formatting
 * @default: Y-m-d
 * @example: m/d/Y
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'dateFormat\'] = $modx->getOption(\'dateFormat\', $scriptProperties, \'Y-m-d\');

/////////////////////////////////////////////////////////////////////////////////
//                                 Permissions                                 //
/////////////////////////////////////////////////////////////////////////////////

/**
 * This will make the download link active for users that belong to the specified
 * groups. Multiple groups can be specified by using a comma delimited list.
 * @options: comma delimited list of User groups
 * @default: null
 * @example: Administrator, Registered Member
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'userGroups\' instead.
 */
$scriptProperties[\'downloadGroups\'] = $modx->getOption(\'downloadGroups\', $scriptProperties);
if (!empty($scriptProperties[\'downloadGroups\']) && empty($scriptProperties[\'userGroups\'])) {
    $scriptProperties[\'userGroups\'] = $scriptProperties[\'downloadGroups\'];
} else {
    $scriptProperties[\'userGroups\'] = $modx->getOption(\'userGroups\', $scriptProperties);
}
unset($scriptProperties[\'downloadGroups\']);
/////////////////////////////////////////////////////////////////////////////////
//                              Download Counting                              //
/////////////////////////////////////////////////////////////////////////////////
/**
 * With the countDownloads parameter set to 1, everytime a user downloads a file
 * it will be tracked in a database table.
 * @options: 1 | 0
 * @default: 1
 * @var bool
 * @since ver 1.2.0
 */
$scriptProperties[\'countDownloads\'] = $modx->getOption(\'countDownloads\', $scriptProperties, 1);
/////////////////////////////////////////////////////////////////////////////////
//                                   Images                                    //
/////////////////////////////////////////////////////////////////////////////////
/**
 * Path to the images to associate with each file extension.
 * The images will be outputted with [+fd.image+] placeholder.
 * @options: path to images
 * @default: assets/components/filedownloadr/img/filetype
 * @example: assets/images/icons
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'imgLocat\'] = $modx->getOption(\'imgLocat\', $scriptProperties, \'assets/components/filedownloadr/img/filetype\');
/**
 * This allows for associations between file extensions and an image.
 * The information on these associations should be put into a chunk similar to
 * the example below. Associations should be in a comma delimited list with an
 * equal sign between the extension and the image name.
 * The directory extension is used for getting the image to associate with a
 * directory.
 * The default extension is applied to all files with extensions not specified
 * in the chunk.
 * @options: name of a chunk
 * @default: null
 * @example:
 *     chunk\'s name: fdImages
 *     chunk content:
 *          jpg     = image.png,
 *          png     = image.png,
 *          gif     = image.png,
 *          php     = document-php.png,
 *          js      = document-code.png,
 *          pdf     = document-pdf.png,
 *          txt     = document-text.png,
 *          zip     = folder-zipper.png,
 *          html    = globe.png,
 *          xls     = document-excel.png,
 *          xlsx    = document-excel.png,
 *          doc     = document-word.png,
 *          docx    = document-word.png,
 *          mdb     = document-access.png,
 *          ppt     = document-powerpoint.png,
 *          pptx    = document-powerpoint.png,
 *          pps     = slide-powerpoint.png,
 *          ppsx    = slide-powerpoint.png,
 *          mov     = film.png,
 *          avi     = film.png,
 *          mp3     = music.png,
 *          wav     = music.png,
 *          flv     = document-flash-movie.png,
 *          dir     = folder.png,
 *          default = document.png
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'imgTypes\'] = $modx->getOption(\'imgTypes\', $scriptProperties);

/////////////////////////////////////////////////////////////////////////////////
//                            Templates & Styles                               //
/////////////////////////////////////////////////////////////////////////////////
/**
 * This is the directory row template (chunk/file) if it is accessible
 * @options: chunk\'s name
 * @default: tpl-dir
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplDir\'] = $modx->getOption(\'tplDir\', $scriptProperties, \'tpl-row-dir\');
/**
 * This is the file row template (chunk/file)
 * @options: chunk\'s name
 * @default: tpl-file
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplFile\'] = $modx->getOption(\'tplFile\', $scriptProperties, \'tpl-row-file\');
/**
 * This is the file row template (chunk/file)
 * @options: chunk\'s name
 * @default: tpl-file
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplGroupDir\'] = $modx->getOption(\'tplGroupDir\', $scriptProperties, \'tpl-group-dir\');
/**
 * This is the container template (chunk/file) of all of the snippet\'s results
 * @options: chunk\'s name
 * @default: tpl-wrapper
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplWrapper\'] = $modx->getOption(\'tplWrapper\', $scriptProperties, \'tpl-wrapper\');
/**
 * This is the container template for folders
 * @options: chunk\'s name, or empty to disable
 * @default: tpl-wrapper-dir
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplWrapperDir\'] = $modx->getOption(\'tplWrapperDir\', $scriptProperties);
/**
 * This is the container template for files
 * @options: chunk\'s name, or empty to disable
 * @default: tpl-wrapper-dir
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplWrapperFile\'] = $modx->getOption(\'tplWrapperFile\', $scriptProperties);
/**
 * index.html file/chunk to hide the download folders
 * @options: chunk\'s name
 * @default: tpl-index
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplIndex\'] = $modx->getOption(\'tplIndex\', $scriptProperties, \'tpl-index\');

/**
 * Template for forbidden access
 * @options: @BINDINGs
 * @default: @FILE: [[++core_path]]components/filedownloadr/elements/chunks/tpl-notallowed.chunk.tpl
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplNotAllowed\'] = $modx->getOption(\'tplNotAllowed\', $scriptProperties, \'@FILE: [[++core_path]]components/filedownloadr/elements/chunks/tpl-notallowed.chunk.tpl\');

/**
 * This specifies the class that will be applied to every other file/directory so
 * a ledger look can be styled.
 * @options: css class name
 * @default: fd-alt
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssAltRow\' instead.
 */
$scriptProperties[\'altCss\'] = $modx->getOption(\'altCss\', $scriptProperties);
if (!empty($scriptProperties[\'altCss\']) && empty($scriptProperties[\'cssAltRow\'])) {
    $scriptProperties[\'cssAltRow\'] = $scriptProperties[\'altCss\'];
} else {
    $scriptProperties[\'cssAltRow\'] = $modx->getOption(\'cssAltRow\', $scriptProperties);
}
unset($scriptProperties[\'altCss\']);

/**
 * This specifies the class that will be applied to the first directory.
 * @options: css class name
 * @default: fd-firstDir
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssFirstDir\' instead.
 */
$scriptProperties[\'firstFolderCss\'] = $modx->getOption(\'firstFolderCss\', $scriptProperties);
if (!empty($scriptProperties[\'firstFolderCss\']) && empty($scriptProperties[\'cssFirstDir\'])) {
    $scriptProperties[\'cssFirstDir\'] = $scriptProperties[\'firstFolderCss\'];
} else {
    $scriptProperties[\'cssFirstDir\'] = $modx->getOption(\'cssFirstDir\', $scriptProperties);
}
unset($scriptProperties[\'firstFolderCss\']);
/**
 * This specified the class that will be applied to the last directory.
 * @options: css class name
 * @default: fd-lastDir
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssLastDir\' instead.
 */
$scriptProperties[\'lastFolderCss\'] = $modx->getOption(\'lastFolderCss\', $scriptProperties);
if (!empty($scriptProperties[\'lastFolderCss\']) && empty($scriptProperties[\'cssLastDir\'])) {
    $scriptProperties[\'cssLastDir\'] = $scriptProperties[\'lastFolderCss\'];
} else {
    $scriptProperties[\'cssLastDir\'] = $modx->getOption(\'cssLastDir\', $scriptProperties);
}
unset($scriptProperties[\'lastFolderCss\']);
/**
 * This specified the class that will be applied to the first file.
 * @options: css class name
 * @default: fd-firstFile
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssFirstFile\' instead.
 */
$scriptProperties[\'firstFileCss\'] = $modx->getOption(\'firstFileCss\', $scriptProperties);
if (!empty($scriptProperties[\'firstFileCss\']) && empty($scriptProperties[\'cssFirstFile\'])) {
    $scriptProperties[\'cssFirstFile\'] = $scriptProperties[\'firstFileCss\'];
} else {
    $scriptProperties[\'cssFirstFile\'] = $modx->getOption(\'cssFirstFile\', $scriptProperties);
}
unset($scriptProperties[\'firstFileCss\']);
/**
 * This specifies the class that will be applied to the last file.
 * @options: css class name
 * @default: fd-lastFile
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssLastFile\' instead.
 */
$scriptProperties[\'lastFileCss\'] = $modx->getOption(\'lastFileCss\', $scriptProperties);
if (!empty($scriptProperties[\'lastFileCss\']) && empty($scriptProperties[\'cssLastFile\'])) {
    $scriptProperties[\'cssLastFile\'] = $scriptProperties[\'lastFileCss\'];
} else {
    $scriptProperties[\'cssLastFile\'] = $modx->getOption(\'cssLastFile\', $scriptProperties);
}
unset($scriptProperties[\'lastFileCss\']);
/**
 * This specifies the class that will be applied to all folders.
 * @options: css class name
 * @default: fd-dir
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssDir\' instead.
 */
$scriptProperties[\'folderCss\'] = $modx->getOption(\'folderCss\', $scriptProperties);
if (!empty($scriptProperties[\'folderCss\']) && empty($scriptProperties[\'cssDir\'])) {
    $scriptProperties[\'cssDir\'] = $scriptProperties[\'folderCss\'];
} else {
    $scriptProperties[\'cssDir\'] = $modx->getOption(\'cssDir\', $scriptProperties);
}
unset($scriptProperties[\'folderCss\']);
/**
 * Class name for all files
 * @options: css class name
 * @default: fd-file
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssFile\' instead.
 */
$scriptProperties[\'cssFile\'] = $modx->getOption(\'cssFile\', $scriptProperties);
/**
 * This specifies the class that will be applied to the directory for multi-
 * directory grouping.
 * @options: css class name
 * @default: fd-group-dir
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssGroupDir\' instead.
 */
$scriptProperties[\'directoryCss\'] = $modx->getOption(\'directoryCss\', $scriptProperties);
if (!empty($scriptProperties[\'directoryCss\']) && empty($scriptProperties[\'cssGroupDir\'])) {
    $scriptProperties[\'cssGroupDir\'] = $scriptProperties[\'directoryCss\'];
} else {
    $scriptProperties[\'cssGroupDir\'] = $modx->getOption(\'cssGroupDir\', $scriptProperties);
}
unset($scriptProperties[\'directoryCss\']);
/**
 * This specifies the class that will be applied to the path when using
 * directory browsing.
 * @options: css class name
 * @default: fd-path
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssPath\' instead.
 */
$scriptProperties[\'pathCss\'] = $modx->getOption(\'pathCss\', $scriptProperties);
if (!empty($scriptProperties[\'pathCss\']) && empty($scriptProperties[\'cssPath\'])) {
    $scriptProperties[\'cssPath\'] = $scriptProperties[\'pathCss\'];
} else {
    $scriptProperties[\'cssPath\'] = $modx->getOption(\'cssPath\', $scriptProperties);
}
unset($scriptProperties[\'pathCss\']);
/**
 * With this parameter set to 1, a class will be added to each file according
 * to the file\'s extension.
 * @options: 1 | 0
 * @default: 0
 * @example: a pdf would get the class: fd-pdf.
 * @var bool
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssExtension\' instead.
 */
$scriptProperties[\'extCss\'] = $modx->getOption(\'extCss\', $scriptProperties);
if (!empty($scriptProperties[\'extCss\']) && empty($scriptProperties[\'cssExtension\'])) {
    $scriptProperties[\'cssExtension\'] = $scriptProperties[\'extCss\'];
} else {
    $scriptProperties[\'cssExtension\'] = $modx->getOption(\'cssExtension\', $scriptProperties);
}
unset($scriptProperties[\'extCss\']);
/**
 * Prefix to the above cssExtension class name
 * @default: fd-
 * @example: a pdf would get the class: fd-pdf.
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'cssExtensionPrefix\'] = $modx->getOption(\'cssExtensionPrefix\', $scriptProperties, \'fd-\');
/**
 * Suffix to the above cssExtension class name
 * @default: null
 * @example: a pdf would get the class: pdfsuffix.
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'cssExtensionSuffix\'] = $modx->getOption(\'cssExtensionSuffix\', $scriptProperties);
/**
 * This property will make the list only displays files without their download links.
 * @default: null
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'noDownload\'] = $modx->getOption(\'noDownload\', $scriptProperties);
/**
 * Pass the downloading job to the plugin. This provides flexibility to do
 * conditional statements inside the plugins, or initiate the downloading using
 * AJAX
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 2.0.0
 */
$scriptProperties[\'downloadByOther\'] = $modx->getOption(\'downloadByOther\', $scriptProperties);
/**
 * Turn on the ajax mode for the script.
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 2.0.0
 */
$scriptProperties[\'ajaxMode\'] = $modx->getOption(\'ajaxMode\', $scriptProperties);
/**
 * The MODX\'s resource page id as the Ajax processor file
 * @var int
 * @since ver 2.0.0
 * @subpackage FileDownloadController
 */
$scriptProperties[\'ajaxControllerPage\'] = $modx->getOption(\'ajaxControllerPage\', $scriptProperties);
/**
 * The Ajax\'s element container id
 * @default: file-download
 * @example <div id="file-download"></div>
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'ajaxContainerId\'] = $modx->getOption(\'ajaxContainerId\', $scriptProperties, \'file-download\');
/**
 * FileDownload\'s Javascript file for the page header
 * @default: assets/components/filedownloadr/js/fd.js
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'fileJs\'] = $modx->getOption(\'fileJs\', $scriptProperties
        , $modx->getOption(\'assets_url\') . \'components/filedownloadr/js/fd.js\');
/**
 * FileDownload\'s Cascading Style Sheet file for the page header
 * @default: assets/components/filedownloadr/css/fd.css
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'fileCss\'] = $modx->getOption(\'fileCss\', $scriptProperties
        , $modx->getOption(\'assets_url\') . \'components/filedownloadr/css/fd.css\');

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
////                                                                         ////
////                   Here goes the MODX Revolution\'s part                  ////
////                                                                         ////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

/**
 * This text will be added to the file\'s hashed link to disguise the direct path
 * @default: FileDownload
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'saltText\'] = $modx->getOption(\'saltText\', $scriptProperties);
/**
 * This parameter provides the direct link
 * @default: 0
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'directLink\'] = $modx->getOption(\'directLink\', $scriptProperties, 0);
/**
 * This is a given ID to the snippet to deal with multiple snippet calls and
 * &browseDirectories altogether
 * @default: null
 * @var string
 */
$scriptProperties[\'fdlid\'] = $modx->getOption(\'fdlid\', $scriptProperties);
/**
 * Attach plugin to the output
 * @default: null
 * @var string
 */
$scriptProperties[\'plugins\'] = $modx->getOption(\'plugins\', $scriptProperties);
/**
 * This is the breadcrumb\'s link template (chunk/file)
 * @options: chunk\'s name
 * @default: tpl-breadcrumb
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplBreadcrumb\'] = $modx->getOption(\'tplBreadcrumb\', $scriptProperties, \'tpl-breadcrumb\');
/**
 * This is the separator character for the breadcrumb
 * @default: /
 * @var string
 */
$scriptProperties[\'breadcrumbSeparator\'] = $modx->getOption(\'breadcrumbSeparator\', $scriptProperties, \' / \');

/**
 * prefix for the placeholders
 * @default: fd.
 * @var string
 */
$scriptProperties[\'prefix\'] = $modx->getOption(\'prefix\', $scriptProperties, \'fd.\');

array_walk($scriptProperties, create_function(\'&$val\', \'if (!is_array($val)) $val = trim($val);\'));

$fdl = $modx->getService(\'fdl\'
        , \'FileDownload\'
        , $modx->getOption(\'core_path\') . \'components/filedownloadr/models/filedownload/\'
);

if (!($fdl instanceof FileDownload))
    return \'instanceof error.\';

$fdl->setConfigs($scriptProperties);

if (!$fdl->isAllowed()) {
    return $fdl->parseTpl($scriptProperties[\'tplNotAllowed\'], array());
}

if ($scriptProperties[\'fileCss\'] !== \'disabled\') {
    $modx->regClientCSS($fdl->replacePropPhs($scriptProperties[\'fileCss\']));
}

if ($scriptProperties[\'ajaxMode\'] && !empty($scriptProperties[\'ajaxControllerPage\'])) {
    // require dojo
    if (!file_exists(realpath(MODX_BASE_PATH . \'assets/components/filedownloadr/js/dojo/dojo.js\'))) {
        return \'dojo.js is required.\';
    }
    $modx->regClientStartupScript($fdl->configs[\'jsUrl\'] . \'dojo/dojo.js\');
    if ($scriptProperties[\'fileJs\'] !== \'disabled\') {
        $modx->regClientStartupScript($fdl->replacePropPhs($scriptProperties[\'fileJs\']));
    }
}

/**
 * do sanitizing first
 */
if (!empty($_GET[\'fdldir\']) || !empty($_GET[\'fdlfile\'])) {
    $ref = $_SERVER[\'HTTP_REFERER\'];
    // deal with multiple snippets which have &browseDirectories
    $xRef = @explode(\'?\', $ref);
    $queries = array();
    parse_str($xRef[1], $queries);
    if (!empty($queries[\'id\'])) {
        // non FURL
        $baseRef = $xRef[0] . \'?id=\' . $queries[\'id\'];
    } else {
        $baseRef = $xRef[0];
    }
    $page = $modx->makeUrl($modx->resource->get(\'id\'), \'\', \'\', \'full\');
    /**
     * check referrer and the page
     */
    if ($baseRef !== $page) {
        return $modx->sendUnauthorizedPage();
    }
    $sanitizedGets = $modx->sanitize($_GET);
}

if (empty($scriptProperties[\'downloadByOther\'])) {
    if (!empty($sanitizedGets[\'fdldir\'])) {
        $checkHash = $fdl->checkHash($modx->context->key, $sanitizedGets[\'fdldir\']);
        if (!$checkHash) {
            return;
        }
        if ((!empty($sanitizedGets[\'fdlid\']) && !empty($scriptProperties[\'fdlid\'])) &&
                ($sanitizedGets[\'fdlid\'] != $scriptProperties[\'fdlid\'])) {
            $selected = FALSE;
        } else {
            $selected = TRUE;
        }
        if ($selected) {
            $setDir = $fdl->setDirProp($sanitizedGets[\'fdldir\'], $selected);
            if (!$setDir) {
                return;
            }
        }
    } elseif (!empty($sanitizedGets[\'fdlfile\'])) {
        $checkHash = $fdl->checkHash($modx->context->key, $sanitizedGets[\'fdlfile\']);
        if (!$checkHash) {
            return;
        }
        $downloadFile = $fdl->downloadFile($sanitizedGets[\'fdlfile\']);
        if (!$downloadFile) {
            return;
        }
        // simply terminate, because this is a downloading state
        die();
    }
}

$contents = $fdl->getContents();
if (empty($contents)) {
    return;
}

if (!empty($toArray)) {
    $output = \'<pre>\' . print_r($contents, true) . \'</pre>\';
} else {
    $output = $fdl->parseTemplate();
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return \'\';
}
return $output;',
      'locked' => 0,
      'properties' => 'a:38:{s:15:"ajaxContainerId";a:7:{s:4:"name";s:15:"ajaxContainerId";s:4:"desc";s:28:"prop_fd.ajaxContainerId_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"file-download";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:17:"browseDirectories";a:7:{s:4:"name";s:17:"browseDirectories";s:4:"desc";s:30:"prop_fd.browseDirectories_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:7:"chkDesc";a:7:{s:4:"name";s:7:"chkDesc";s:4:"desc";s:20:"prop_fd.chkDesc_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:14:"countDownloads";a:7:{s:4:"name";s:14:"countDownloads";s:4:"desc";s:27:"prop_fd.countDownloads_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:9:"cssAltRow";a:7:{s:4:"name";s:9:"cssAltRow";s:4:"desc";s:22:"prop_fd.cssAltRow_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"fd-altRow";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:6:"cssDir";a:7:{s:4:"name";s:6:"cssDir";s:4:"desc";s:19:"prop_fd.cssDir_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:6:"fd-dir";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:12:"cssExtension";a:7:{s:4:"name";s:12:"cssExtension";s:4:"desc";s:25:"prop_fd.cssExtension_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:18:"cssExtensionPrefix";a:7:{s:4:"name";s:18:"cssExtensionPrefix";s:4:"desc";s:31:"prop_fd.cssExtensionPrefix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:3:"fd-";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:18:"cssExtensionSuffix";a:7:{s:4:"name";s:18:"cssExtensionSuffix";s:4:"desc";s:31:"prop_fd.cssExtensionSuffix_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:7:"cssFile";a:7:{s:4:"name";s:7:"cssFile";s:4:"desc";s:20:"prop_fd.cssFile_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:7:"fd-file";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:11:"cssFirstDir";a:7:{s:4:"name";s:11:"cssFirstDir";s:4:"desc";s:24:"prop_fd.cssFirstDir_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"fd-firstDir";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:12:"cssFirstFile";a:7:{s:4:"name";s:12:"cssFirstFile";s:4:"desc";s:25:"prop_fd.cssFirstFile_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"fd-firstFile";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:11:"cssGroupDir";a:7:{s:4:"name";s:11:"cssGroupDir";s:4:"desc";s:24:"prop_fd.cssGroupDir_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"fd-group-dir";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:10:"cssLastDir";a:7:{s:4:"name";s:10:"cssLastDir";s:4:"desc";s:23:"prop_fd.cssLastDir_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:10:"fd-lastDir";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:11:"cssLastFile";a:7:{s:4:"name";s:11:"cssLastFile";s:4:"desc";s:24:"prop_fd.cssLastFile_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"fd-lastFile";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:7:"cssPath";a:7:{s:4:"name";s:7:"cssPath";s:4:"desc";s:20:"prop_fd.cssPath_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:7:"fd-path";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:10:"dateFormat";a:7:{s:4:"name";s:10:"dateFormat";s:4:"desc";s:23:"prop_fd.dateFormat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"Y-m-d";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:9:"extHidden";a:7:{s:4:"name";s:9:"extHidden";s:4:"desc";s:22:"prop_fd.extHidden_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:8:"extShown";a:7:{s:4:"name";s:8:"extShown";s:4:"desc";s:21:"prop_fd.extShown_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:7:"fileCss";a:7:{s:4:"name";s:7:"fileCss";s:4:"desc";s:20:"prop_fd.fileCss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:47:"{assets_url}components/filedownloadr/css/fd.css";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:6:"fileJs";a:7:{s:4:"name";s:6:"fileJs";s:4:"desc";s:19:"prop_fd.fileJs_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:45:"{assets_url}components/filedownloadr/js/fd.js";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:6:"getDir";a:7:{s:4:"name";s:6:"getDir";s:4:"desc";s:19:"prop_fd.getDir_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:7:"getFile";a:7:{s:4:"name";s:7:"getFile";s:4:"desc";s:20:"prop_fd.getFile_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:16:"groupByDirectory";a:7:{s:4:"name";s:16:"groupByDirectory";s:4:"desc";s:29:"prop_fd.groupByDirectory_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:8:"imgLocat";a:7:{s:4:"name";s:8:"imgLocat";s:4:"desc";s:21:"prop_fd.imgLocat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:50:"{assets_url}components/filedownloadr/img/filetype/";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:8:"imgTypes";a:7:{s:4:"name";s:8:"imgTypes";s:4:"desc";s:21:"prop_fd.imgTypes_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"fdImages";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:10:"noDownload";a:7:{s:4:"name";s:10:"noDownload";s:4:"desc";s:23:"prop_fd.noDownload_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:0;s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:8:"saltText";a:7:{s:4:"name";s:8:"saltText";s:4:"desc";s:21:"prop_fd.saltText_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"FileDownload";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:6:"sortBy";a:7:{s:4:"name";s:6:"sortBy";s:4:"desc";s:19:"prop_fd.sortBy_desc";s:4:"type";s:4:"list";s:7:"options";a:10:{i:0;a:2:{s:4:"text";s:8:"filename";s:5:"value";s:8:"filename";}i:1;a:2:{s:4:"text";s:9:"extension";s:5:"value";s:9:"extension";}i:2;a:2:{s:4:"text";s:4:"path";s:5:"value";s:4:"path";}i:3;a:2:{s:4:"text";s:4:"size";s:5:"value";s:4:"size";}i:4;a:2:{s:4:"text";s:8:"sizeText";s:5:"value";s:8:"sizeText";}i:5;a:2:{s:4:"text";s:4:"type";s:5:"value";s:4:"type";}i:6;a:2:{s:4:"text";s:4:"date";s:5:"value";s:4:"date";}i:7;a:2:{s:4:"text";s:11:"description";s:5:"value";s:11:"description";}i:8;a:2:{s:4:"text";s:5:"count";s:5:"value";s:5:"count";}i:9;a:2:{s:4:"text";s:8:"fullPath";s:5:"value";s:8:"fullPath";}}s:5:"value";s:8:"filename";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:19:"sortByCaseSensitive";a:7:{s:4:"name";s:19:"sortByCaseSensitive";s:4:"desc";s:32:"prop_fd.sortByCaseSensitive_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:9:"sortOrder";a:7:{s:4:"name";s:9:"sortOrder";s:4:"desc";s:22:"prop_fd.sortOrder_desc";s:4:"type";s:4:"list";s:7:"options";a:2:{i:0;a:2:{s:4:"text";s:9:"Ascending";s:5:"value";s:3:"asc";}i:1;a:2:{s:4:"text";s:10:"Descending";s:5:"value";s:4:"desc";}}s:5:"value";s:3:"asc";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:16:"sortOrderNatural";a:7:{s:4:"name";s:16:"sortOrderNatural";s:4:"desc";s:29:"prop_fd.sortOrderNatural_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:6:"tplDir";a:7:{s:4:"name";s:6:"tplDir";s:4:"desc";s:19:"prop_fd.tplDir_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"tpl-row-dir";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:7:"tplFile";a:7:{s:4:"name";s:7:"tplFile";s:4:"desc";s:20:"prop_fd.getFile_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"tpl-row-file";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:11:"tplGroupDir";a:7:{s:4:"name";s:11:"tplGroupDir";s:4:"desc";s:30:"prop_fd.tplGroupDirectory_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:13:"tpl-group-dir";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:8:"tplIndex";a:7:{s:4:"name";s:8:"tplIndex";s:4:"desc";s:21:"prop_fd.tplIndex_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:9:"tpl-index";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:10:"tplWrapper";a:7:{s:4:"name";s:10:"tplWrapper";s:4:"desc";s:23:"prop_fd.tplWrapper_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:11:"tpl-wrapper";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:10:"userGroups";a:7:{s:4:"name";s:10:"userGroups";s:4:"desc";s:23:"prop_fd.userGroups_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * The snippet for the FileDownload package for MODX Revolution
 * This is the conversion of the original FileDownload snippet for MODX
 * Evolution, which was originally created by Kyle Jaebker, and converted by
 * goldsky.
 * The main parameters are taken from that version so any conversion can be done
 * smoothly.
 *
 * FileDownload is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * FileDownload is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FileDownload; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @author      Kyle Jaebker <http://muddydogpaws.com>
 * @author      goldsky <goldsky@fastmail.fm> <http://virtudraft.com>
 * @package     filedownload
 * @subpackage  filedownload snippet
 */

$scriptProperties[\'encoding\'] = $modx->getOption(\'encoding\', $scriptProperties, \'UTF-8\');
header(\'Content-Type: text/html; charset=\' . $scriptProperties[\'encoding\']);
mb_internal_encoding($scriptProperties[\'encoding\']);

/////////////////////////////////////////////////////////////////////////////////
//                               Main Parameters                               //
/////////////////////////////////////////////////////////////////////////////////
/**
 * This is used to specify which directories to display with the snippet.
 * Multiple directories can be specified by seperating them with a comma.
 * When specifying multiple directories the directory browsing functionality is
 * no longer available.
 * @options: comma delimited list of directories
 * @default: null
 * @example: assets/snippets/filedownload
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'getDir\'] = $modx->getOption(\'getDir\', $scriptProperties);
/**
 * The getFile parameter will make the snippet output only the file specified.
 * The getDir parameter is still required and getFile should be a file inside
 * of the directory.
 * This allows for use of the download script and download counting with a
 * single file.
 * @options: string
 * @default: null
 * @example: filedownload.php
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'getFile\'] = $modx->getOption(\'getFile\', $scriptProperties);

if (empty($scriptProperties[\'getDir\']) && empty($scriptProperties[\'getFile\'])) {
    return \'<!-- FileDownload parameters are empty -->\';
}

/**
 * This allows users to view subdirectories of the directory specified with the
 * getDir parameter. When using this feature the following templates get used:
 * path & directory.
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 1.2.0
 */
$scriptProperties[\'browseDirectories\'] = $modx->getOption(\'browseDirectories\', $scriptProperties, 0);
// typo fall back
$scriptProperties[\'browseDirectory\'] = !empty($scriptProperties[\'browseDirectory\']) ?
        $scriptProperties[\'browseDirectory\'] :
        $scriptProperties[\'browseDirectories\'];
/**
 * If multiple directories are specified in the getDir parameter, this property
 * will group the files by each directory.
 * When grouped by directory, the directory template is used to output the path
 * above each group.
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 1.2.0
 */
$scriptProperties[\'groupByDirectory\'] = $modx->getOption(\'groupByDirectory\', $scriptProperties, 0);
// typo fall back
$scriptProperties[\'groupByDirectories\'] = !empty($scriptProperties[\'groupByDirectories\']) ?
        $scriptProperties[\'groupByDirectories\'] :
        $scriptProperties[\'groupByDirectory\'];
/**
 * This allows descriptions to be added to the file listing included in a chunk.
 * All of the files and descriptions should be listed in the chunk using the
 * following format: path to file/filename|description||
 * @options: the name of a chunk
 * @default: null
 * @example:
 *     chunk\'s name: fileDescription
 *     chunk content:
 *         assets/files/test.pdf|This is a test pdf. It shows report stuff.||
 *         assets/images/options.gif|These are the options available to you.||
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'chkDesc\'] = $modx->getOption(\'chkDesc\', $scriptProperties);
/**
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since version 2.0.0, use sortBy instead
 */
// $scriptProperties[\'userSort\'] = $modx->getOption(\'userSort\', $scriptProperties);
/**
 * Sort ordering.
 * This allows the files to be sorted by all of the fields listed below.
 * To sort by multiple fields use a comma delimited list.
 * When using the directory browsing feature the files will be sorted by type
 * first, this will put the directories first in the list. When multiple folders
 * are specified and the group by directory feature is used; the files are
 * sorted by path first to keep the files in order by directory.
 * @options: filename | extension | path | size | sizetext | type | date | description | count
 * @default:
 *     filename;
 *     if &browseDirectories=`1`, sort by: type,filename;
 *     if &groupByDirectory=`1`, sort by: path,filename;
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'sortBy\'] = $modx->getOption(\'sortBy\', $scriptProperties, \'filename\');
/**
 * Case sensitive option for sorting
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 2.0.0
 */
$scriptProperties[\'sortByCaseSensitive\'] = $modx->getOption(\'sortByCaseSensitive\', $scriptProperties, 0);
/**
 * Sort files in ascending or descending order.
 * @options: asc | desc
 * @default: asc
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'sortOrder\'] = $modx->getOption(\'sortOrder\', $scriptProperties, \'asc\');
/**
 * Sort order option by a natural order
 * @options: 1 | 0
 * @default: 1
 * @var bool
 * @since ver 2.0.0
 */
$scriptProperties[\'sortOrderNatural\'] = $modx->getOption(\'sortOrderNatural\', $scriptProperties, 1);
/**
 * This will limit the inclusion files displayed to files with a valid extension
 * from the list.
 * @options: comma delimited list of file extensions
 * @default: null
 * @example: zip,php,txt
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'extShown\' instead.
 */
$scriptProperties[\'showExt\'] = $modx->getOption(\'showExt\', $scriptProperties);
if (!empty($scriptProperties[\'showExt\']) && empty($scriptProperties[\'extShown\'])) {
    $scriptProperties[\'extShown\'] = $scriptProperties[\'showExt\'];
} else {
    $scriptProperties[\'extShown\'] = $modx->getOption(\'extShown\', $scriptProperties);
}
unset($scriptProperties[\'showExt\']);
/**
 * This will exclude the files displayed to files with a valid extension from
 * the list.
 * @options: comma delimited list of file extensions
 * @default: null
 * @example: zip,php,txt
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'extHidden\' instead.
 */
$scriptProperties[\'hideExt\'] = $modx->getOption(\'hideExt\', $scriptProperties);
if (!empty($scriptProperties[\'hideExt\']) && empty($scriptProperties[\'extHidden\'])) {
    $scriptProperties[\'extHidden\'] = $scriptProperties[\'hideExt\'];
} else {
    $scriptProperties[\'extHidden\'] = $modx->getOption(\'extHidden\', $scriptProperties);
}
unset($scriptProperties[\'hideExt\']);
/**
 * The dateFormat parameter will change the format of the date displayed for
 * each file in the output.
 * @options: PHP\'s date formatting
 * @default: Y-m-d
 * @example: m/d/Y
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'dateFormat\'] = $modx->getOption(\'dateFormat\', $scriptProperties, \'Y-m-d\');

/////////////////////////////////////////////////////////////////////////////////
//                                 Permissions                                 //
/////////////////////////////////////////////////////////////////////////////////

/**
 * This will make the download link active for users that belong to the specified
 * groups. Multiple groups can be specified by using a comma delimited list.
 * @options: comma delimited list of User groups
 * @default: null
 * @example: Administrator, Registered Member
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'userGroups\' instead.
 */
$scriptProperties[\'downloadGroups\'] = $modx->getOption(\'downloadGroups\', $scriptProperties);
if (!empty($scriptProperties[\'downloadGroups\']) && empty($scriptProperties[\'userGroups\'])) {
    $scriptProperties[\'userGroups\'] = $scriptProperties[\'downloadGroups\'];
} else {
    $scriptProperties[\'userGroups\'] = $modx->getOption(\'userGroups\', $scriptProperties);
}
unset($scriptProperties[\'downloadGroups\']);
/////////////////////////////////////////////////////////////////////////////////
//                              Download Counting                              //
/////////////////////////////////////////////////////////////////////////////////
/**
 * With the countDownloads parameter set to 1, everytime a user downloads a file
 * it will be tracked in a database table.
 * @options: 1 | 0
 * @default: 1
 * @var bool
 * @since ver 1.2.0
 */
$scriptProperties[\'countDownloads\'] = $modx->getOption(\'countDownloads\', $scriptProperties, 1);
/////////////////////////////////////////////////////////////////////////////////
//                                   Images                                    //
/////////////////////////////////////////////////////////////////////////////////
/**
 * Path to the images to associate with each file extension.
 * The images will be outputted with [+fd.image+] placeholder.
 * @options: path to images
 * @default: assets/components/filedownloadr/img/filetype
 * @example: assets/images/icons
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'imgLocat\'] = $modx->getOption(\'imgLocat\', $scriptProperties, \'assets/components/filedownloadr/img/filetype\');
/**
 * This allows for associations between file extensions and an image.
 * The information on these associations should be put into a chunk similar to
 * the example below. Associations should be in a comma delimited list with an
 * equal sign between the extension and the image name.
 * The directory extension is used for getting the image to associate with a
 * directory.
 * The default extension is applied to all files with extensions not specified
 * in the chunk.
 * @options: name of a chunk
 * @default: null
 * @example:
 *     chunk\'s name: fdImages
 *     chunk content:
 *          jpg     = image.png,
 *          png     = image.png,
 *          gif     = image.png,
 *          php     = document-php.png,
 *          js      = document-code.png,
 *          pdf     = document-pdf.png,
 *          txt     = document-text.png,
 *          zip     = folder-zipper.png,
 *          html    = globe.png,
 *          xls     = document-excel.png,
 *          xlsx    = document-excel.png,
 *          doc     = document-word.png,
 *          docx    = document-word.png,
 *          mdb     = document-access.png,
 *          ppt     = document-powerpoint.png,
 *          pptx    = document-powerpoint.png,
 *          pps     = slide-powerpoint.png,
 *          ppsx    = slide-powerpoint.png,
 *          mov     = film.png,
 *          avi     = film.png,
 *          mp3     = music.png,
 *          wav     = music.png,
 *          flv     = document-flash-movie.png,
 *          dir     = folder.png,
 *          default = document.png
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'imgTypes\'] = $modx->getOption(\'imgTypes\', $scriptProperties);

/////////////////////////////////////////////////////////////////////////////////
//                            Templates & Styles                               //
/////////////////////////////////////////////////////////////////////////////////
/**
 * This is the directory row template (chunk/file) if it is accessible
 * @options: chunk\'s name
 * @default: tpl-dir
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplDir\'] = $modx->getOption(\'tplDir\', $scriptProperties, \'tpl-row-dir\');
/**
 * This is the file row template (chunk/file)
 * @options: chunk\'s name
 * @default: tpl-file
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplFile\'] = $modx->getOption(\'tplFile\', $scriptProperties, \'tpl-row-file\');
/**
 * This is the file row template (chunk/file)
 * @options: chunk\'s name
 * @default: tpl-file
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplGroupDir\'] = $modx->getOption(\'tplGroupDir\', $scriptProperties, \'tpl-group-dir\');
/**
 * This is the container template (chunk/file) of all of the snippet\'s results
 * @options: chunk\'s name
 * @default: tpl-wrapper
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplWrapper\'] = $modx->getOption(\'tplWrapper\', $scriptProperties, \'tpl-wrapper\');
/**
 * This is the container template for folders
 * @options: chunk\'s name, or empty to disable
 * @default: tpl-wrapper-dir
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplWrapperDir\'] = $modx->getOption(\'tplWrapperDir\', $scriptProperties);
/**
 * This is the container template for files
 * @options: chunk\'s name, or empty to disable
 * @default: tpl-wrapper-dir
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplWrapperFile\'] = $modx->getOption(\'tplWrapperFile\', $scriptProperties);
/**
 * index.html file/chunk to hide the download folders
 * @options: chunk\'s name
 * @default: tpl-index
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplIndex\'] = $modx->getOption(\'tplIndex\', $scriptProperties, \'tpl-index\');

/**
 * Template for forbidden access
 * @options: @BINDINGs
 * @default: @FILE: [[++core_path]]components/filedownloadr/elements/chunks/tpl-notallowed.chunk.tpl
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplNotAllowed\'] = $modx->getOption(\'tplNotAllowed\', $scriptProperties, \'@FILE: [[++core_path]]components/filedownloadr/elements/chunks/tpl-notallowed.chunk.tpl\');

/**
 * This specifies the class that will be applied to every other file/directory so
 * a ledger look can be styled.
 * @options: css class name
 * @default: fd-alt
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssAltRow\' instead.
 */
$scriptProperties[\'altCss\'] = $modx->getOption(\'altCss\', $scriptProperties);
if (!empty($scriptProperties[\'altCss\']) && empty($scriptProperties[\'cssAltRow\'])) {
    $scriptProperties[\'cssAltRow\'] = $scriptProperties[\'altCss\'];
} else {
    $scriptProperties[\'cssAltRow\'] = $modx->getOption(\'cssAltRow\', $scriptProperties);
}
unset($scriptProperties[\'altCss\']);

/**
 * This specifies the class that will be applied to the first directory.
 * @options: css class name
 * @default: fd-firstDir
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssFirstDir\' instead.
 */
$scriptProperties[\'firstFolderCss\'] = $modx->getOption(\'firstFolderCss\', $scriptProperties);
if (!empty($scriptProperties[\'firstFolderCss\']) && empty($scriptProperties[\'cssFirstDir\'])) {
    $scriptProperties[\'cssFirstDir\'] = $scriptProperties[\'firstFolderCss\'];
} else {
    $scriptProperties[\'cssFirstDir\'] = $modx->getOption(\'cssFirstDir\', $scriptProperties);
}
unset($scriptProperties[\'firstFolderCss\']);
/**
 * This specified the class that will be applied to the last directory.
 * @options: css class name
 * @default: fd-lastDir
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssLastDir\' instead.
 */
$scriptProperties[\'lastFolderCss\'] = $modx->getOption(\'lastFolderCss\', $scriptProperties);
if (!empty($scriptProperties[\'lastFolderCss\']) && empty($scriptProperties[\'cssLastDir\'])) {
    $scriptProperties[\'cssLastDir\'] = $scriptProperties[\'lastFolderCss\'];
} else {
    $scriptProperties[\'cssLastDir\'] = $modx->getOption(\'cssLastDir\', $scriptProperties);
}
unset($scriptProperties[\'lastFolderCss\']);
/**
 * This specified the class that will be applied to the first file.
 * @options: css class name
 * @default: fd-firstFile
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssFirstFile\' instead.
 */
$scriptProperties[\'firstFileCss\'] = $modx->getOption(\'firstFileCss\', $scriptProperties);
if (!empty($scriptProperties[\'firstFileCss\']) && empty($scriptProperties[\'cssFirstFile\'])) {
    $scriptProperties[\'cssFirstFile\'] = $scriptProperties[\'firstFileCss\'];
} else {
    $scriptProperties[\'cssFirstFile\'] = $modx->getOption(\'cssFirstFile\', $scriptProperties);
}
unset($scriptProperties[\'firstFileCss\']);
/**
 * This specifies the class that will be applied to the last file.
 * @options: css class name
 * @default: fd-lastFile
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssLastFile\' instead.
 */
$scriptProperties[\'lastFileCss\'] = $modx->getOption(\'lastFileCss\', $scriptProperties);
if (!empty($scriptProperties[\'lastFileCss\']) && empty($scriptProperties[\'cssLastFile\'])) {
    $scriptProperties[\'cssLastFile\'] = $scriptProperties[\'lastFileCss\'];
} else {
    $scriptProperties[\'cssLastFile\'] = $modx->getOption(\'cssLastFile\', $scriptProperties);
}
unset($scriptProperties[\'lastFileCss\']);
/**
 * This specifies the class that will be applied to all folders.
 * @options: css class name
 * @default: fd-dir
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssDir\' instead.
 */
$scriptProperties[\'folderCss\'] = $modx->getOption(\'folderCss\', $scriptProperties);
if (!empty($scriptProperties[\'folderCss\']) && empty($scriptProperties[\'cssDir\'])) {
    $scriptProperties[\'cssDir\'] = $scriptProperties[\'folderCss\'];
} else {
    $scriptProperties[\'cssDir\'] = $modx->getOption(\'cssDir\', $scriptProperties);
}
unset($scriptProperties[\'folderCss\']);
/**
 * Class name for all files
 * @options: css class name
 * @default: fd-file
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssFile\' instead.
 */
$scriptProperties[\'cssFile\'] = $modx->getOption(\'cssFile\', $scriptProperties);
/**
 * This specifies the class that will be applied to the directory for multi-
 * directory grouping.
 * @options: css class name
 * @default: fd-group-dir
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssGroupDir\' instead.
 */
$scriptProperties[\'directoryCss\'] = $modx->getOption(\'directoryCss\', $scriptProperties);
if (!empty($scriptProperties[\'directoryCss\']) && empty($scriptProperties[\'cssGroupDir\'])) {
    $scriptProperties[\'cssGroupDir\'] = $scriptProperties[\'directoryCss\'];
} else {
    $scriptProperties[\'cssGroupDir\'] = $modx->getOption(\'cssGroupDir\', $scriptProperties);
}
unset($scriptProperties[\'directoryCss\']);
/**
 * This specifies the class that will be applied to the path when using
 * directory browsing.
 * @options: css class name
 * @default: fd-path
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssPath\' instead.
 */
$scriptProperties[\'pathCss\'] = $modx->getOption(\'pathCss\', $scriptProperties);
if (!empty($scriptProperties[\'pathCss\']) && empty($scriptProperties[\'cssPath\'])) {
    $scriptProperties[\'cssPath\'] = $scriptProperties[\'pathCss\'];
} else {
    $scriptProperties[\'cssPath\'] = $modx->getOption(\'cssPath\', $scriptProperties);
}
unset($scriptProperties[\'pathCss\']);
/**
 * With this parameter set to 1, a class will be added to each file according
 * to the file\'s extension.
 * @options: 1 | 0
 * @default: 0
 * @example: a pdf would get the class: fd-pdf.
 * @var bool
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'cssExtension\' instead.
 */
$scriptProperties[\'extCss\'] = $modx->getOption(\'extCss\', $scriptProperties);
if (!empty($scriptProperties[\'extCss\']) && empty($scriptProperties[\'cssExtension\'])) {
    $scriptProperties[\'cssExtension\'] = $scriptProperties[\'extCss\'];
} else {
    $scriptProperties[\'cssExtension\'] = $modx->getOption(\'cssExtension\', $scriptProperties);
}
unset($scriptProperties[\'extCss\']);
/**
 * Prefix to the above cssExtension class name
 * @default: fd-
 * @example: a pdf would get the class: fd-pdf.
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'cssExtensionPrefix\'] = $modx->getOption(\'cssExtensionPrefix\', $scriptProperties, \'fd-\');
/**
 * Suffix to the above cssExtension class name
 * @default: null
 * @example: a pdf would get the class: pdfsuffix.
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'cssExtensionSuffix\'] = $modx->getOption(\'cssExtensionSuffix\', $scriptProperties);
/**
 * This property will make the list only displays files without their download links.
 * @default: null
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'noDownload\'] = $modx->getOption(\'noDownload\', $scriptProperties);
/**
 * Pass the downloading job to the plugin. This provides flexibility to do
 * conditional statements inside the plugins, or initiate the downloading using
 * AJAX
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 2.0.0
 */
$scriptProperties[\'downloadByOther\'] = $modx->getOption(\'downloadByOther\', $scriptProperties);
/**
 * Turn on the ajax mode for the script.
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 2.0.0
 */
$scriptProperties[\'ajaxMode\'] = $modx->getOption(\'ajaxMode\', $scriptProperties);
/**
 * The MODX\'s resource page id as the Ajax processor file
 * @var int
 * @since ver 2.0.0
 * @subpackage FileDownloadController
 */
$scriptProperties[\'ajaxControllerPage\'] = $modx->getOption(\'ajaxControllerPage\', $scriptProperties);
/**
 * The Ajax\'s element container id
 * @default: file-download
 * @example <div id="file-download"></div>
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'ajaxContainerId\'] = $modx->getOption(\'ajaxContainerId\', $scriptProperties, \'file-download\');
/**
 * FileDownload\'s Javascript file for the page header
 * @default: assets/components/filedownloadr/js/fd.js
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'fileJs\'] = $modx->getOption(\'fileJs\', $scriptProperties
        , $modx->getOption(\'assets_url\') . \'components/filedownloadr/js/fd.js\');
/**
 * FileDownload\'s Cascading Style Sheet file for the page header
 * @default: assets/components/filedownloadr/css/fd.css
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'fileCss\'] = $modx->getOption(\'fileCss\', $scriptProperties
        , $modx->getOption(\'assets_url\') . \'components/filedownloadr/css/fd.css\');

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
////                                                                         ////
////                   Here goes the MODX Revolution\'s part                  ////
////                                                                         ////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

/**
 * This text will be added to the file\'s hashed link to disguise the direct path
 * @default: FileDownload
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'saltText\'] = $modx->getOption(\'saltText\', $scriptProperties);
/**
 * This parameter provides the direct link
 * @default: 0
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'directLink\'] = $modx->getOption(\'directLink\', $scriptProperties, 0);
/**
 * This is a given ID to the snippet to deal with multiple snippet calls and
 * &browseDirectories altogether
 * @default: null
 * @var string
 */
$scriptProperties[\'fdlid\'] = $modx->getOption(\'fdlid\', $scriptProperties);
/**
 * Attach plugin to the output
 * @default: null
 * @var string
 */
$scriptProperties[\'plugins\'] = $modx->getOption(\'plugins\', $scriptProperties);
/**
 * This is the breadcrumb\'s link template (chunk/file)
 * @options: chunk\'s name
 * @default: tpl-breadcrumb
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplBreadcrumb\'] = $modx->getOption(\'tplBreadcrumb\', $scriptProperties, \'tpl-breadcrumb\');
/**
 * This is the separator character for the breadcrumb
 * @default: /
 * @var string
 */
$scriptProperties[\'breadcrumbSeparator\'] = $modx->getOption(\'breadcrumbSeparator\', $scriptProperties, \' / \');

/**
 * prefix for the placeholders
 * @default: fd.
 * @var string
 */
$scriptProperties[\'prefix\'] = $modx->getOption(\'prefix\', $scriptProperties, \'fd.\');

array_walk($scriptProperties, create_function(\'&$val\', \'if (!is_array($val)) $val = trim($val);\'));

$fdl = $modx->getService(\'fdl\'
        , \'FileDownload\'
        , $modx->getOption(\'core_path\') . \'components/filedownloadr/models/filedownload/\'
);

if (!($fdl instanceof FileDownload))
    return \'instanceof error.\';

$fdl->setConfigs($scriptProperties);

if (!$fdl->isAllowed()) {
    return $fdl->parseTpl($scriptProperties[\'tplNotAllowed\'], array());
}

if ($scriptProperties[\'fileCss\'] !== \'disabled\') {
    $modx->regClientCSS($fdl->replacePropPhs($scriptProperties[\'fileCss\']));
}

if ($scriptProperties[\'ajaxMode\'] && !empty($scriptProperties[\'ajaxControllerPage\'])) {
    // require dojo
    if (!file_exists(realpath(MODX_BASE_PATH . \'assets/components/filedownloadr/js/dojo/dojo.js\'))) {
        return \'dojo.js is required.\';
    }
    $modx->regClientStartupScript($fdl->configs[\'jsUrl\'] . \'dojo/dojo.js\');
    if ($scriptProperties[\'fileJs\'] !== \'disabled\') {
        $modx->regClientStartupScript($fdl->replacePropPhs($scriptProperties[\'fileJs\']));
    }
}

/**
 * do sanitizing first
 */
if (!empty($_GET[\'fdldir\']) || !empty($_GET[\'fdlfile\'])) {
    $ref = $_SERVER[\'HTTP_REFERER\'];
    // deal with multiple snippets which have &browseDirectories
    $xRef = @explode(\'?\', $ref);
    $queries = array();
    parse_str($xRef[1], $queries);
    if (!empty($queries[\'id\'])) {
        // non FURL
        $baseRef = $xRef[0] . \'?id=\' . $queries[\'id\'];
    } else {
        $baseRef = $xRef[0];
    }
    $page = $modx->makeUrl($modx->resource->get(\'id\'), \'\', \'\', \'full\');
    /**
     * check referrer and the page
     */
    if ($baseRef !== $page) {
        return $modx->sendUnauthorizedPage();
    }
    $sanitizedGets = $modx->sanitize($_GET);
}

if (empty($scriptProperties[\'downloadByOther\'])) {
    if (!empty($sanitizedGets[\'fdldir\'])) {
        $checkHash = $fdl->checkHash($modx->context->key, $sanitizedGets[\'fdldir\']);
        if (!$checkHash) {
            return;
        }
        if ((!empty($sanitizedGets[\'fdlid\']) && !empty($scriptProperties[\'fdlid\'])) &&
                ($sanitizedGets[\'fdlid\'] != $scriptProperties[\'fdlid\'])) {
            $selected = FALSE;
        } else {
            $selected = TRUE;
        }
        if ($selected) {
            $setDir = $fdl->setDirProp($sanitizedGets[\'fdldir\'], $selected);
            if (!$setDir) {
                return;
            }
        }
    } elseif (!empty($sanitizedGets[\'fdlfile\'])) {
        $checkHash = $fdl->checkHash($modx->context->key, $sanitizedGets[\'fdlfile\']);
        if (!$checkHash) {
            return;
        }
        $downloadFile = $fdl->downloadFile($sanitizedGets[\'fdlfile\']);
        if (!$downloadFile) {
            return;
        }
        // simply terminate, because this is a downloading state
        die();
    }
}

$contents = $fdl->getContents();
if (empty($contents)) {
    return;
}

if (!empty($toArray)) {
    $output = \'<pre>\' . print_r($contents, true) . \'</pre>\';
} else {
    $output = $fdl->parseTemplate();
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return \'\';
}
return $output;',
    ),
  ),
  '02f7efeb668013836722f2bc764e34e4' => 
  array (
    'criteria' => 
    array (
      'name' => 'FileDownloadLink',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FileDownloadLink',
      'description' => 'Snippet to provide a download link for a file.',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/**
 * The snippet for the FileDownload package for MODX Revolution
 * This is the conversion of the original FileDownload snippet for MODX
 * Evolution, which was originally created by Kyle Jaebker, and converted by
 * goldsky.
 * The main parameters are taken from that version so any conversion can be done
 * smoothly.
 *
 * FileDownload is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * FileDownload is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FileDownload; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @author      goldsky <goldsky@fastmail.fm> <http://virtudraft.com>
 * @package     filedownload
 * @subpackage  filedownloadlink snippet
 */
$scriptProperties[\'encoding\'] = $modx->getOption(\'encoding\', $scriptProperties, \'UTF-8\');
header(\'Content-Type: text/html; charset=\' . $scriptProperties[\'encoding\']);
mb_internal_encoding($scriptProperties[\'encoding\']);

/////////////////////////////////////////////////////////////////////////////////
//                               Main Parameters                               //
/////////////////////////////////////////////////////////////////////////////////
/**
 * The getFile parameter will make the snippet output only the file specified.
 * The getDir parameter is still required and getFile should be a file inside
 * of the directory.
 * This allows for use of the download script and download counting with a
 * single file.
 * @options: string
 * @default: null
 * @var string
 */
$scriptProperties[\'getFile\'] = $modx->getOption(\'getFile\', $scriptProperties);
/**
 * for Output Filter Modifier
 * @link http://rtfm.modx.com/display/revolution20/Custom+Output+Filter+Examples#CustomOutputFilterExamples-CreatingaCustomOutputModifier
 */
if (empty($scriptProperties[\'getFile\']) && !empty($scriptProperties[\'input\'])) {
    $scriptProperties[\'getFile\'] = $scriptProperties[\'input\'];
} elseif (empty($scriptProperties[\'getFile\']) && empty($scriptProperties[\'input\'])) {
    return \'<!-- getFile parameter is empty -->\';
}
$comma = stristr($scriptProperties[\'getFile\'], \',\');
if ($comma) {
    return \'<!-- getFile parameter should be only one file -->\';
}

/**
 * This allows descriptions to be added to the file listing included in a chunk.
 * All of the files and descriptions should be listed in the chunk using the
 * following format: path to file/filename|description||
 * @options: the name of a chunk
 * @default: null
 * @example:
 *     chunk\'s name: fileDescription
 *     chunk content:
 *         assets/files/test.pdf|This is a test pdf. It shows report stuff.||
 *         assets/images/options.gif|These are the options available to you.||
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'chkDesc\'] = $modx->getOption(\'chkDesc\', $scriptProperties);
/**
 * The dateFormat parameter will change the format of the date displayed for
 * each file in the output.
 * @options: PHP\'s date formatting
 * @default: Y-m-d
 * @example: m/d/Y
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'dateFormat\'] = $modx->getOption(\'dateFormat\', $scriptProperties, \'Y-m-d\');

/////////////////////////////////////////////////////////////////////////////////
//                                 Permissions                                 //
/////////////////////////////////////////////////////////////////////////////////

/**
 * This will make the download link active for users that belong to the specified
 * groups. Multiple groups can be specified by using a comma delimited list.
 * @options: comma delimited list of User groups
 * @default: null
 * @example: Administrator, Registered Member
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'userGroups\' instead.
 */
$scriptProperties[\'downloadGroups\'] = $modx->getOption(\'downloadGroups\', $scriptProperties);
if (!empty($scriptProperties[\'downloadGroups\']) && empty($scriptProperties[\'userGroups\'])) {
    $scriptProperties[\'userGroups\'] = $scriptProperties[\'downloadGroups\'];
} else {
    $scriptProperties[\'userGroups\'] = $modx->getOption(\'userGroups\', $scriptProperties);
}
unset($scriptProperties[\'downloadGroups\']);
/////////////////////////////////////////////////////////////////////////////////
//                              Download Counting                              //
/////////////////////////////////////////////////////////////////////////////////
/**
 * With the countDownloads parameter set to 1, everytime a user downloads a file
 * it will be tracked in a database table.
 * @options: 1 | 0
 * @default: 1
 * @var bool
 * @since ver 1.2.0
 */
$scriptProperties[\'countDownloads\'] = $modx->getOption(\'countDownloads\', $scriptProperties, 1);
/////////////////////////////////////////////////////////////////////////////////
//                                   Images                                    //
/////////////////////////////////////////////////////////////////////////////////
/**
 * Path to the images to associate with each file extension.
 * The images will be outputted with [+fd.image+] placeholder.
 * @options: path to images
 * @default: assets/components/filedownloadr/img/filetype
 * @example: assets/images/icons
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'imgLocat\'] = $modx->getOption(\'imgLocat\', $scriptProperties, \'assets/components/filedownloadr/img/filetype\');
/**
 * This allows for associations between file extensions and an image.
 * The information on these associations should be put into a chunk similar to
 * the example below. Associations should be in a comma delimited list with an
 * equal sign between the extension and the image name.
 * The directory extension is used for getting the image to associate with a
 * directory.
 * The default extension is applied to all files with extensions not specified
 * in the chunk.
 * @options: name of a chunk
 * @default: null
 * @example:
 *     chunk\'s name: fdImages
 *     chunk content:jpg     = image.png,
 *     png     = image.png,
 *     gif     = image.png,
 *     php     = document-php.png,
 *     js      = document-code.png,
 *     pdf     = document-pdf.png,
 *     txt     = document-text.png,
 *     zip     = folder-zipper.png,
 *     html    = globe.png,
 *     xls     = document-excel.png,
 *     xlsx    = document-excel.png,
 *     doc     = document-word.png,
 *     docx    = document-word.png,
 *     mdb     = document-access.png,
 *     ppt     = document-powerpoint.png,
 *     pptx    = document-powerpoint.png,
 *     pps     = slide-powerpoint.png,
 *     ppsx    = slide-powerpoint.png,
 *     mov     = film.png,
 *     avi     = film.png,
 *     mp3     = music.png,
 *     wav     = music.png,
 *     flv     = document-flash-movie.png,
 *     dir     = folder.png,
 *     default = document.png
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'imgTypes\'] = $modx->getOption(\'imgTypes\', $scriptProperties);

/////////////////////////////////////////////////////////////////////////////////
//                            Templates & Styles                               //
/////////////////////////////////////////////////////////////////////////////////
/**
 * Template code to be returned
 * @options: code
 * @default: <a href="[[+link]]">[[+filename]]</a>
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tpl\'] = $modx->getOption(\'tpl\', $scriptProperties, \'@CODE: <a href="[[+link]]">[[+filename]]</a> ([[+count]] downloads)\');
if (!empty($scriptProperties[\'tplCode\'])) {
    $scriptProperties[\'tpl\'] = \'@CODE: \' . $scriptProperties[\'tplCode\'];
}

/**
 * Template for forbidden access
 * @options: @BINDINGs
 * @default: @FILE: [[++core_path]]components/filedownloadr/elements/chunks/tpl-notallowed.chunk.tpl
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplNotAllowed\'] = $modx->getOption(\'tplNotAllowed\', $scriptProperties, \'@FILE: [[++core_path]]components/filedownloadr/elements/chunks/tpl-notallowed.chunk.tpl\');

/**
 * This property will make the list only displays files without their download links.
 * @default: null
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'noDownload\'] = $modx->getOption(\'noDownload\', $scriptProperties);
/**
 * Turn on the ajax mode for the script.
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 2.0.0
 */
$scriptProperties[\'ajaxMode\'] = $modx->getOption(\'ajaxMode\', $scriptProperties);
/**
 * The MODX\'s resource page id as the Ajax processor file
 * @var int
 * @since ver 2.0.0
 * @subpackage FileDownloadController
 */
$scriptProperties[\'ajaxControllerPage\'] = $modx->getOption(\'ajaxControllerPage\', $scriptProperties);
/**
 * The Ajax\'s element container id
 * @default: file-download
 * @example <div id="file-download"></div>
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'ajaxContainerId\'] = $modx->getOption(\'ajaxContainerId\', $scriptProperties, \'file-download\');
/**
 * FileDownload\'s Javascript file for the page header
 * @default: assets/components/filedownloadr/js/fd.js
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'fileJs\'] = $modx->getOption(\'fileJs\', $scriptProperties
        , $modx->getOption(\'assets_url\') . \'components/filedownloadr/js/fd.js\');
/**
 * FileDownload\'s Cascading Style Sheet file for the page header
 * @default: assets/components/filedownloadr/css/fd.css
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'fileCss\'] = $modx->getOption(\'fileCss\', $scriptProperties
        , $modx->getOption(\'assets_url\') . \'components/filedownloadr/css/fd.css\');

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
////                                                                         ////
////                   Here goes the MODX Revolution\'s part                  ////
////                                                                         ////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

/**
 * This text will be added to the file\'s hashed link to disguise the direct path
 * @default: FileDownload
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'saltText\'] = $modx->getOption(\'saltText\', $scriptProperties);
/**
 * This parameter provides the direct link
 * @default: 0
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'directLink\'] = $modx->getOption(\'directLink\', $scriptProperties, 0);
/**
 * This is a given ID to the snippet to deal with multiple snippet calls and
 * &browseDirectories altogether
 * @default: null
 * @var string
 */
$scriptProperties[\'plugins\'] = $modx->getOption(\'plugins\', $scriptProperties);

/**
 * This is a given ID to the snippet to deal with multiple snippet calls and
 * &browseDirectories altogether
 * @default: null
 * @var string
 */
$scriptProperties[\'prefix\'] = $modx->getOption(\'prefix\', $scriptProperties, \'fd.\');

array_walk($scriptProperties, create_function(\'&$val\', \'if (!is_array($val)) $val = trim($val);\'));

$fdl = $modx->getService(\'fdl\'
        , \'FileDownload\'
        , $modx->getOption(\'core_path\') . \'components/filedownloadr/models/filedownload/\'
);

if (!($fdl instanceof FileDownload))
    return \'instanceof error.\';

$fdl->setConfigs($scriptProperties);

if (!$fdl->isAllowed()) {
    return $fdl->parseTpl($scriptProperties[\'tplNotAllowed\'], array());
}

if ($scriptProperties[\'fileCss\'] !== \'disabled\') {
    $modx->regClientCSS($fdl->replacePropPhs($scriptProperties[\'fileCss\']));
}

if ($scriptProperties[\'ajaxMode\'] && !empty($scriptProperties[\'ajaxControllerPage\'])) {
    // require dojo
    if (!file_exists(realpath(MODX_BASE_PATH . \'assets/components/filedownloadr/js/dojo/dojo.js\'))) {
        return \'dojo.js is required.\';
    }
    $modx->regClientStartupScript($fdl->configs[\'jsUrl\'] . \'dojo/dojo.js\');
    if ($scriptProperties[\'fileJs\'] !== \'disabled\') {
        $modx->regClientStartupScript($fdl->replacePropPhs($scriptProperties[\'fileJs\']));
    }
}

if (!empty($_GET[\'fdlfile\'])) {
    $ref = $_SERVER[\'HTTP_REFERER\'];
    // deal with multiple snippets which have &browseDirectories
    $xRef = @explode(\'?\', $ref);
    $queries = array();
    parse_str($xRef[1], $queries);
    if (!empty($queries[\'id\'])) {
        // non FURL
        $baseRef = $xRef[0] . \'?id=\' . $queries[\'id\'];
    } else {
        $baseRef = $xRef[0];
    }
    $page = $modx->makeUrl($modx->resource->get(\'id\'), \'\', \'\', \'full\');
    if ($baseRef !== $page) {
        return $modx->sendUnauthorizedPage();
    }
    $sanitizedGets = $modx->sanitize($_GET);
}

if (empty($scriptProperties[\'downloadByOther\'])) {
    if (!empty($_GET[\'fdlfile\'])) {
        if (!$fdl->checkHash($modx->context->key, $sanitizedGets[\'fdlfile\']))
            return;
        $downloadFile = $fdl->downloadFile($sanitizedGets[\'fdlfile\']);
        if (!$downloadFile) {
            return;
        }
        return;
    }
}

$contents = $fdl->getContents();

if (!$contents) {
    return;
}

$output = \'\';

$fileInfos = $contents[\'file\'][0];
$filePhs = array();
foreach ($fileInfos as $k => $v) {
    $filePhs[$scriptProperties[\'prefix\'] . $k] = $v;
}
// fallback without prefix
$fileInfos = array_merge($fileInfos, $filePhs);

/**
 * for Output Filter Modifier
 * @link http://rtfm.modx.com/display/revolution20/Custom+Output+Filter+Examples#CustomOutputFilterExamples-CreatingaCustomOutputModifier
 */
if (!empty($scriptProperties[\'input\'])) {
    $output = $fileInfos[$scriptProperties[\'options\']];
    if (empty($output)
            && !is_numeric($output) // avoid 0 (zero) of the download counting.
    ) {
        $output = $fdl->parseTpl($scriptProperties[\'tpl\'], $fileInfos);
    }
} elseif (!empty($toArray)) {
    $output = \'<pre>\';
    $output .= print_r($fileInfos, true);
    $output .= \'</pre>\';
} else {
    $output = $fdl->parseTpl($scriptProperties[\'tpl\'], $fileInfos);
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return;
}

return $output;',
      'locked' => 0,
      'properties' => 'a:11:{s:7:"chkDesc";a:7:{s:4:"name";s:7:"chkDesc";s:4:"desc";s:20:"prop_fd.chkDesc_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:14:"countDownloads";a:7:{s:4:"name";s:14:"countDownloads";s:4:"desc";s:27:"prop_fd.countDownloads_desc";s:4:"type";s:13:"combo-boolean";s:7:"options";s:0:"";s:5:"value";b:1;s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:10:"dateFormat";a:7:{s:4:"name";s:10:"dateFormat";s:4:"desc";s:23:"prop_fd.dateFormat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:5:"Y-m-d";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:7:"fileCss";a:7:{s:4:"name";s:7:"fileCss";s:4:"desc";s:20:"prop_fd.fileCss_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:47:"{assets_url}components/filedownloadr/css/fd.css";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:6:"fileJs";a:7:{s:4:"name";s:6:"fileJs";s:4:"desc";s:19:"prop_fd.fileJs_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:45:"{assets_url}components/filedownloadr/js/fd.js";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:7:"getFile";a:7:{s:4:"name";s:7:"getFile";s:4:"desc";s:20:"prop_fd.getFile_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:8:"imgLocat";a:7:{s:4:"name";s:8:"imgLocat";s:4:"desc";s:21:"prop_fd.imgLocat_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:50:"{assets_url}components/filedownloadr/img/filetype/";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:8:"imgTypes";a:7:{s:4:"name";s:8:"imgTypes";s:4:"desc";s:21:"prop_fd.imgTypes_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:8:"fdImages";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:8:"saltText";a:7:{s:4:"name";s:8:"saltText";s:4:"desc";s:21:"prop_fd.saltText_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:12:"FileDownload";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:16:"prop_fd.tpl_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:44:"@CODE: <a href="[[+link]]">[[+filename]]</a>";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}s:10:"userGroups";a:7:{s:4:"name";s:10:"userGroups";s:4:"desc";s:23:"prop_fd.userGroups_desc";s:4:"type";s:9:"textfield";s:7:"options";s:0:"";s:5:"value";s:0:"";s:7:"lexicon";s:23:"filedownload:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * The snippet for the FileDownload package for MODX Revolution
 * This is the conversion of the original FileDownload snippet for MODX
 * Evolution, which was originally created by Kyle Jaebker, and converted by
 * goldsky.
 * The main parameters are taken from that version so any conversion can be done
 * smoothly.
 *
 * FileDownload is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * FileDownload is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FileDownload; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @author      goldsky <goldsky@fastmail.fm> <http://virtudraft.com>
 * @package     filedownload
 * @subpackage  filedownloadlink snippet
 */
$scriptProperties[\'encoding\'] = $modx->getOption(\'encoding\', $scriptProperties, \'UTF-8\');
header(\'Content-Type: text/html; charset=\' . $scriptProperties[\'encoding\']);
mb_internal_encoding($scriptProperties[\'encoding\']);

/////////////////////////////////////////////////////////////////////////////////
//                               Main Parameters                               //
/////////////////////////////////////////////////////////////////////////////////
/**
 * The getFile parameter will make the snippet output only the file specified.
 * The getDir parameter is still required and getFile should be a file inside
 * of the directory.
 * This allows for use of the download script and download counting with a
 * single file.
 * @options: string
 * @default: null
 * @var string
 */
$scriptProperties[\'getFile\'] = $modx->getOption(\'getFile\', $scriptProperties);
/**
 * for Output Filter Modifier
 * @link http://rtfm.modx.com/display/revolution20/Custom+Output+Filter+Examples#CustomOutputFilterExamples-CreatingaCustomOutputModifier
 */
if (empty($scriptProperties[\'getFile\']) && !empty($scriptProperties[\'input\'])) {
    $scriptProperties[\'getFile\'] = $scriptProperties[\'input\'];
} elseif (empty($scriptProperties[\'getFile\']) && empty($scriptProperties[\'input\'])) {
    return \'<!-- getFile parameter is empty -->\';
}
$comma = stristr($scriptProperties[\'getFile\'], \',\');
if ($comma) {
    return \'<!-- getFile parameter should be only one file -->\';
}

/**
 * This allows descriptions to be added to the file listing included in a chunk.
 * All of the files and descriptions should be listed in the chunk using the
 * following format: path to file/filename|description||
 * @options: the name of a chunk
 * @default: null
 * @example:
 *     chunk\'s name: fileDescription
 *     chunk content:
 *         assets/files/test.pdf|This is a test pdf. It shows report stuff.||
 *         assets/images/options.gif|These are the options available to you.||
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'chkDesc\'] = $modx->getOption(\'chkDesc\', $scriptProperties);
/**
 * The dateFormat parameter will change the format of the date displayed for
 * each file in the output.
 * @options: PHP\'s date formatting
 * @default: Y-m-d
 * @example: m/d/Y
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'dateFormat\'] = $modx->getOption(\'dateFormat\', $scriptProperties, \'Y-m-d\');

/////////////////////////////////////////////////////////////////////////////////
//                                 Permissions                                 //
/////////////////////////////////////////////////////////////////////////////////

/**
 * This will make the download link active for users that belong to the specified
 * groups. Multiple groups can be specified by using a comma delimited list.
 * @options: comma delimited list of User groups
 * @default: null
 * @example: Administrator, Registered Member
 * @var string
 * @since ver 1.2.0
 * @deprecated deprecated since 2.0.0. Use \'userGroups\' instead.
 */
$scriptProperties[\'downloadGroups\'] = $modx->getOption(\'downloadGroups\', $scriptProperties);
if (!empty($scriptProperties[\'downloadGroups\']) && empty($scriptProperties[\'userGroups\'])) {
    $scriptProperties[\'userGroups\'] = $scriptProperties[\'downloadGroups\'];
} else {
    $scriptProperties[\'userGroups\'] = $modx->getOption(\'userGroups\', $scriptProperties);
}
unset($scriptProperties[\'downloadGroups\']);
/////////////////////////////////////////////////////////////////////////////////
//                              Download Counting                              //
/////////////////////////////////////////////////////////////////////////////////
/**
 * With the countDownloads parameter set to 1, everytime a user downloads a file
 * it will be tracked in a database table.
 * @options: 1 | 0
 * @default: 1
 * @var bool
 * @since ver 1.2.0
 */
$scriptProperties[\'countDownloads\'] = $modx->getOption(\'countDownloads\', $scriptProperties, 1);
/////////////////////////////////////////////////////////////////////////////////
//                                   Images                                    //
/////////////////////////////////////////////////////////////////////////////////
/**
 * Path to the images to associate with each file extension.
 * The images will be outputted with [+fd.image+] placeholder.
 * @options: path to images
 * @default: assets/components/filedownloadr/img/filetype
 * @example: assets/images/icons
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'imgLocat\'] = $modx->getOption(\'imgLocat\', $scriptProperties, \'assets/components/filedownloadr/img/filetype\');
/**
 * This allows for associations between file extensions and an image.
 * The information on these associations should be put into a chunk similar to
 * the example below. Associations should be in a comma delimited list with an
 * equal sign between the extension and the image name.
 * The directory extension is used for getting the image to associate with a
 * directory.
 * The default extension is applied to all files with extensions not specified
 * in the chunk.
 * @options: name of a chunk
 * @default: null
 * @example:
 *     chunk\'s name: fdImages
 *     chunk content:jpg     = image.png,
 *     png     = image.png,
 *     gif     = image.png,
 *     php     = document-php.png,
 *     js      = document-code.png,
 *     pdf     = document-pdf.png,
 *     txt     = document-text.png,
 *     zip     = folder-zipper.png,
 *     html    = globe.png,
 *     xls     = document-excel.png,
 *     xlsx    = document-excel.png,
 *     doc     = document-word.png,
 *     docx    = document-word.png,
 *     mdb     = document-access.png,
 *     ppt     = document-powerpoint.png,
 *     pptx    = document-powerpoint.png,
 *     pps     = slide-powerpoint.png,
 *     ppsx    = slide-powerpoint.png,
 *     mov     = film.png,
 *     avi     = film.png,
 *     mp3     = music.png,
 *     wav     = music.png,
 *     flv     = document-flash-movie.png,
 *     dir     = folder.png,
 *     default = document.png
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'imgTypes\'] = $modx->getOption(\'imgTypes\', $scriptProperties);

/////////////////////////////////////////////////////////////////////////////////
//                            Templates & Styles                               //
/////////////////////////////////////////////////////////////////////////////////
/**
 * Template code to be returned
 * @options: code
 * @default: <a href="[[+link]]">[[+filename]]</a>
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tpl\'] = $modx->getOption(\'tpl\', $scriptProperties, \'@CODE: <a href="[[+link]]">[[+filename]]</a> ([[+count]] downloads)\');
if (!empty($scriptProperties[\'tplCode\'])) {
    $scriptProperties[\'tpl\'] = \'@CODE: \' . $scriptProperties[\'tplCode\'];
}

/**
 * Template for forbidden access
 * @options: @BINDINGs
 * @default: @FILE: [[++core_path]]components/filedownloadr/elements/chunks/tpl-notallowed.chunk.tpl
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'tplNotAllowed\'] = $modx->getOption(\'tplNotAllowed\', $scriptProperties, \'@FILE: [[++core_path]]components/filedownloadr/elements/chunks/tpl-notallowed.chunk.tpl\');

/**
 * This property will make the list only displays files without their download links.
 * @default: null
 * @var string
 * @since ver 1.2.0
 */
$scriptProperties[\'noDownload\'] = $modx->getOption(\'noDownload\', $scriptProperties);
/**
 * Turn on the ajax mode for the script.
 * @options: 1 | 0
 * @default: 0
 * @var bool
 * @since ver 2.0.0
 */
$scriptProperties[\'ajaxMode\'] = $modx->getOption(\'ajaxMode\', $scriptProperties);
/**
 * The MODX\'s resource page id as the Ajax processor file
 * @var int
 * @since ver 2.0.0
 * @subpackage FileDownloadController
 */
$scriptProperties[\'ajaxControllerPage\'] = $modx->getOption(\'ajaxControllerPage\', $scriptProperties);
/**
 * The Ajax\'s element container id
 * @default: file-download
 * @example <div id="file-download"></div>
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'ajaxContainerId\'] = $modx->getOption(\'ajaxContainerId\', $scriptProperties, \'file-download\');
/**
 * FileDownload\'s Javascript file for the page header
 * @default: assets/components/filedownloadr/js/fd.js
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'fileJs\'] = $modx->getOption(\'fileJs\', $scriptProperties
        , $modx->getOption(\'assets_url\') . \'components/filedownloadr/js/fd.js\');
/**
 * FileDownload\'s Cascading Style Sheet file for the page header
 * @default: assets/components/filedownloadr/css/fd.css
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'fileCss\'] = $modx->getOption(\'fileCss\', $scriptProperties
        , $modx->getOption(\'assets_url\') . \'components/filedownloadr/css/fd.css\');

/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
////                                                                         ////
////                   Here goes the MODX Revolution\'s part                  ////
////                                                                         ////
/////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

/**
 * This text will be added to the file\'s hashed link to disguise the direct path
 * @default: FileDownload
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'saltText\'] = $modx->getOption(\'saltText\', $scriptProperties);
/**
 * This parameter provides the direct link
 * @default: 0
 * @var string
 * @since ver 2.0.0
 */
$scriptProperties[\'directLink\'] = $modx->getOption(\'directLink\', $scriptProperties, 0);
/**
 * This is a given ID to the snippet to deal with multiple snippet calls and
 * &browseDirectories altogether
 * @default: null
 * @var string
 */
$scriptProperties[\'plugins\'] = $modx->getOption(\'plugins\', $scriptProperties);

/**
 * This is a given ID to the snippet to deal with multiple snippet calls and
 * &browseDirectories altogether
 * @default: null
 * @var string
 */
$scriptProperties[\'prefix\'] = $modx->getOption(\'prefix\', $scriptProperties, \'fd.\');

array_walk($scriptProperties, create_function(\'&$val\', \'if (!is_array($val)) $val = trim($val);\'));

$fdl = $modx->getService(\'fdl\'
        , \'FileDownload\'
        , $modx->getOption(\'core_path\') . \'components/filedownloadr/models/filedownload/\'
);

if (!($fdl instanceof FileDownload))
    return \'instanceof error.\';

$fdl->setConfigs($scriptProperties);

if (!$fdl->isAllowed()) {
    return $fdl->parseTpl($scriptProperties[\'tplNotAllowed\'], array());
}

if ($scriptProperties[\'fileCss\'] !== \'disabled\') {
    $modx->regClientCSS($fdl->replacePropPhs($scriptProperties[\'fileCss\']));
}

if ($scriptProperties[\'ajaxMode\'] && !empty($scriptProperties[\'ajaxControllerPage\'])) {
    // require dojo
    if (!file_exists(realpath(MODX_BASE_PATH . \'assets/components/filedownloadr/js/dojo/dojo.js\'))) {
        return \'dojo.js is required.\';
    }
    $modx->regClientStartupScript($fdl->configs[\'jsUrl\'] . \'dojo/dojo.js\');
    if ($scriptProperties[\'fileJs\'] !== \'disabled\') {
        $modx->regClientStartupScript($fdl->replacePropPhs($scriptProperties[\'fileJs\']));
    }
}

if (!empty($_GET[\'fdlfile\'])) {
    $ref = $_SERVER[\'HTTP_REFERER\'];
    // deal with multiple snippets which have &browseDirectories
    $xRef = @explode(\'?\', $ref);
    $queries = array();
    parse_str($xRef[1], $queries);
    if (!empty($queries[\'id\'])) {
        // non FURL
        $baseRef = $xRef[0] . \'?id=\' . $queries[\'id\'];
    } else {
        $baseRef = $xRef[0];
    }
    $page = $modx->makeUrl($modx->resource->get(\'id\'), \'\', \'\', \'full\');
    if ($baseRef !== $page) {
        return $modx->sendUnauthorizedPage();
    }
    $sanitizedGets = $modx->sanitize($_GET);
}

if (empty($scriptProperties[\'downloadByOther\'])) {
    if (!empty($_GET[\'fdlfile\'])) {
        if (!$fdl->checkHash($modx->context->key, $sanitizedGets[\'fdlfile\']))
            return;
        $downloadFile = $fdl->downloadFile($sanitizedGets[\'fdlfile\']);
        if (!$downloadFile) {
            return;
        }
        return;
    }
}

$contents = $fdl->getContents();

if (!$contents) {
    return;
}

$output = \'\';

$fileInfos = $contents[\'file\'][0];
$filePhs = array();
foreach ($fileInfos as $k => $v) {
    $filePhs[$scriptProperties[\'prefix\'] . $k] = $v;
}
// fallback without prefix
$fileInfos = array_merge($fileInfos, $filePhs);

/**
 * for Output Filter Modifier
 * @link http://rtfm.modx.com/display/revolution20/Custom+Output+Filter+Examples#CustomOutputFilterExamples-CreatingaCustomOutputModifier
 */
if (!empty($scriptProperties[\'input\'])) {
    $output = $fileInfos[$scriptProperties[\'options\']];
    if (empty($output)
            && !is_numeric($output) // avoid 0 (zero) of the download counting.
    ) {
        $output = $fdl->parseTpl($scriptProperties[\'tpl\'], $fileInfos);
    }
} elseif (!empty($toArray)) {
    $output = \'<pre>\';
    $output .= print_r($fileInfos, true);
    $output .= \'</pre>\';
} else {
    $output = $fdl->parseTpl($scriptProperties[\'tpl\'], $fileInfos);
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
    return;
}

return $output;',
    ),
  ),
  '4eeed5701adfdb9ce3cdda6f50226049' => 
  array (
    'criteria' => 
    array (
      'name' => 'FileDownloadEmailPlugin',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'FileDownloadEmailPlugin',
      'description' => 'Snippet as a plugin for FileDownload R\'s.',
      'editor_type' => 0,
      'category' => 4,
      'cache_type' => 0,
      'snippet' => '/**
 * avoid FATAL ERROR
 */
if (!($modx instanceof modX) ||
        !($fileDownload instanceof FileDownload) ||
        !($plugin instanceof FileDownloadPlugin)
) {
    return FALSE;
}

//$props = $plugin->getProperties();
//$allEvents = $plugin->getAllEvents();
//$appliedEvents = $plugin->getAppliedEvents();

$e = $plugin->getEvent();
switch ($e) {
    case \'AfterFileDownload\':
        // don\'t bother about the IP Address. FormSave provides it.
        $props = $plugin->getProperties();
        $_POST = array(
            \'ctx\' => $props[\'ctx\'],
            \'filePath\' => $props[\'filePath\'],
        );
        $_REQUEST = $_POST;
        $emailProps = $fileDownload->getConfig(\'emailProps\');
        $emailProps = json_decode($emailProps, 1);
        $formitProps = array_merge(array(\'hooks\' => \'email\'), $emailProps);
        $runFormit = $modx->runSnippet(\'FormIt\', $formitProps);
        if ($runFormit === FALSE) {
            $errMsg = \'[FileDownloadPlugin Email] unabled to send email.\';
            $modx->setPlaceholder($fileDownload->getConfig(\'prefix\') . \'error_message\', $errMsg);
            $modx->log(modX::LOG_LEVEL_ERROR, __LINE__ . \': \' . $errMsg);
            return FALSE;
        }
        break;
    default:
        break;
}

return TRUE;',
      'locked' => 0,
      'properties' => NULL,
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * avoid FATAL ERROR
 */
if (!($modx instanceof modX) ||
        !($fileDownload instanceof FileDownload) ||
        !($plugin instanceof FileDownloadPlugin)
) {
    return FALSE;
}

//$props = $plugin->getProperties();
//$allEvents = $plugin->getAllEvents();
//$appliedEvents = $plugin->getAppliedEvents();

$e = $plugin->getEvent();
switch ($e) {
    case \'AfterFileDownload\':
        // don\'t bother about the IP Address. FormSave provides it.
        $props = $plugin->getProperties();
        $_POST = array(
            \'ctx\' => $props[\'ctx\'],
            \'filePath\' => $props[\'filePath\'],
        );
        $_REQUEST = $_POST;
        $emailProps = $fileDownload->getConfig(\'emailProps\');
        $emailProps = json_decode($emailProps, 1);
        $formitProps = array_merge(array(\'hooks\' => \'email\'), $emailProps);
        $runFormit = $modx->runSnippet(\'FormIt\', $formitProps);
        if ($runFormit === FALSE) {
            $errMsg = \'[FileDownloadPlugin Email] unabled to send email.\';
            $modx->setPlaceholder($fileDownload->getConfig(\'prefix\') . \'error_message\', $errMsg);
            $modx->log(modX::LOG_LEVEL_ERROR, __LINE__ . \': \' . $errMsg);
            return FALSE;
        }
        break;
    default:
        break;
}

return TRUE;',
    ),
  ),
);