<?php
//============================================================+
// File name   : tce_pdf.php
// Begin       : 2004-06-11
// Last Update : 2009-08-30
// 
// Description : Configuration file for pdf documents.
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com S.r.l.
//               Via della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//
// License: 
//    Copyright (C) 2004-2009  Nicola Asuni - Tecnick.com S.r.l.
//    
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//    
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//    
//    You should have received a copy of the GNU General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
//     
//    Additionally, you can't remove the original TCExam logo, copyrights statements
//    and links to Tecnick.com and TCExam websites.
//    
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * Configuration file for TCPDF.
 * @author Nicola Asuni
 * @copyright Copyright &copy; 2004-2009, Nicola Asuni - Tecnick.com S.r.l. - ITALY - www.tecnick.com - info@tecnick.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @package com.tecnick.tcpdf
 * @link http://tcpdf.sourceforge.net
 * @license http://www.gnu.org/copyleft/lesser.html LGPL
 * @since 2004-06-11
 */

// PLEASE SET THE FOLLOWING CONSTANTS:

/**
 * header title
 */
define ('PDF_HEADER_TITLE', "School name");

/**
 * header description string
 */
define ('PDF_HEADER_STRING', "first row\nsecond row\nthird row");

/**
 * image logo
 */
define ('PDF_HEADER_LOGO', 'logo_example.png');

/**
 * header logo image width [mm]
 */
define ('PDF_HEADER_LOGO_WIDTH', 20);

/**
 * height of area for offline user answer
 */
define ('PDF_TEXTANSWER_HEIGHT', 40);

/**
 * page format
 */
define ('PDF_PAGE_FORMAT', "A4");

/**
 * page orientation (P=portrait, L=landscape)
 */
define ('PDF_PAGE_ORIENTATION', 'P');

/**
 * document creator
 */
define ('PDF_CREATOR', 'TCExam 7');

/**
 * document author
 */
define ('PDF_AUTHOR', 'TCExam 7');

/**
 *  document unit of measure [pt=point, mm=millimeter, cm=centimeter, in=inch]
 */
define ('PDF_UNIT', 'mm');

/**
 * header margin
 */
define ('PDF_MARGIN_HEADER', 5);

/**
 * footer margin
 */
define ('PDF_MARGIN_FOOTER', 10);

/**
 * top margin
 */
define ('PDF_MARGIN_TOP', 27);

/**
 * bottom margin
 */
define ('PDF_MARGIN_BOTTOM', 30);

/**
 * left margin
 */
define ('PDF_MARGIN_LEFT', 15);

/**
 * right margin
 */
define ('PDF_MARGIN_RIGHT', 15);

/**
 * main font name
 */
define ('PDF_FONT_NAME_MAIN', 'helvetica');

/**
 * main font size
 */
define ('PDF_FONT_SIZE_MAIN', 9);

/**
 * data font name
 */
define ('PDF_FONT_NAME_DATA', 'helvetica');

/**
 * data font size
 */
define ('PDF_FONT_SIZE_DATA', 7);

/**
 * ratio used to adjust the conversion of pixels to user units
 */
define ('PDF_IMAGE_SCALE_RATIO', 2);

/**
 * magnification factor for titles
 */
define('HEAD_MAGNIFICATION', 1.1);

/**
 * height of cell repect font height
 */
define('K_CELL_HEIGHT_RATIO', 1.25);

/**
 * title magnification respect main font size
 */
define('K_TITLE_MAGNIFICATION', 1.3);

/**
 * reduction factor for small font
 */
define('K_SMALL_RATIO', 2/3);


// --- DATA FOR DIGITAL SIGNATURE ---


/**
 * If true digitally sign PDF documents.
 */
define('K_DIGSIG_ENABLE', false);

/**
 * Signing certificate (string or filename prefixed with 'file://').
 */
define('K_DIGSIG_CERTIFICATE', 'file://../../shared/config/tcpdf.crt');

/**
 * Private key (string or filename prefixed with 'file://').
 */
define('K_DIGSIG_PRIVATE_KEY', 'file://../../shared/config/tcpdf.crt');

/**
 * Password for private key.
 */
define('K_DIGSIG_PASSWORD', 'tcpdfdemo');

/**
 * Name of a file containing a bunch of extra certificates to include in the signature which can for example be used to help the recipient to verify the certificate that you used.
 */
define('K_DIGSIG_EXTRA_CERTS', '');

/**
 * The access permissions granted for this document.
 * Valid values shall be:
 * 1 = No changes to the document shall be permitted; any change to the document shall invalidate the signature;
 * 2 = Permitted changes shall be filling in forms, instantiating page templates, and signing; other changes shall invalidate the signature;
 * 3 = Permitted changes shall be the same as for 2, as well as annotation creation, deletion, and modification; other changes shall invalidate the signature.
 */
define('K_DIGSIG_CERT_TYPE', '1');

/**
 * The name of the person or authority signing the document.
 */
define('K_DIGSIG_NAME', 'TCEXAM');

/**
 * The CPU host name or physical location of the signing.
 */
define('K_DIGSIG_LOCATION', 'Office');

/**
 * The reason for the signing, such as ( I agree ...).
 */
define('K_DIGSIG_REASON', 'Certification');

/**
 * Information provided by the signer to enable a recipient to contact the signer to verify the signature; for example, a phone number or email address.
 */
define('K_DIGSIG_CONTACT', 'you@example.com');

//============================================================+
// END OF FILE                                                 
//============================================================+
?>
