<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SendEmail_model extends CI_Model
{
    public function ValidasiSKPDiterima()
    {
        $config = [
            'protocol'  => 'ssmtp',
            'smtp_host' => 'ssl://mail.bemfkuwks.com',
            'smtp_user' => 'skpku@bemfkuwks.com',
            'smtp_pass' => 'Bemhiuwksmaju!',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];
        $message = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" style="line-height: inherit;">
        <head style="line-height: inherit;">
        <!--[if gte mso 9]>
        <xml>
          <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" style="line-height: inherit;">
          <meta name="viewport" content="width=device-width, initial-scale=1.0" style="line-height: inherit;">
          <meta name="x-apple-disable-message-reformatting" style="line-height: inherit;">
          <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge" style="line-height: inherit;"><!--<![endif]-->
          <title style="line-height: inherit;"></title>
          
            
          
          
        
        <!--[if !mso]><!--><!--<![endif]-->
        
        </head>
        
        <body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ffffff;color: #000000;line-height: inherit;">
          <!--[if IE]><div class="ie-container"><![endif]-->
          <!--[if mso]><div class="mso-container"><![endif]-->
          <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;margin: 0 auto;background-color: #ffffff;width: 100%;line-height: inherit;color: #000000;" cellpadding="0" cellspacing="0">
          <tbody style="line-height: inherit;">
          <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
            <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #ffffff;"><![endif]-->
            
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;line-height: inherit;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: transparent;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;line-height: inherit;">
          <div style="width: 100% !important;line-height: inherit;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;">
          <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
            <td style="padding-right: 0px;padding-left: 0px;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="center">
              
              <img align="center" border="0" src="https://skpku.bemfkuwks.com/assets/img/email/SKPKU.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 530px;line-height: inherit;" width="530">
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id="u_content_heading_11" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 210%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 23px;">
            <strong style="line-height: inherit;">Informasi Pengajuan SKP B</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id="u_content_heading_13" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 10px;">
            *Berikut merupakan email otomatis, mohon jangan dibalas*
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 17px;">
            <strong style="line-height: inherit;">Keterangan</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
            <em style="line-height: inherit;">' . $this->input->post('event') . '</em>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 17px;">
            <strong style="line-height: inherit;">Posisi</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
            <em style="line-height: inherit;">' . $this->input->post('posisi') . '</em>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 17px;">
            <strong style="line-height: inherit;">Tahun</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
            <em style="line-height: inherit;">' . $this->input->post('tahun') . '</em>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 17px;">
            <strong style="line-height: inherit;">Bobot</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
            <em style="line-height: inherit;">' . $this->input->post('bobot') . '</em>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; color: #06794f; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 23px;">
            <strong style="line-height: inherit;">Validasi SKP B Diterima!</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
            Silahkan buka laman SKP Database untuk melihat data SKP B yang sudah tervalidasi.
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <div align="center" style="line-height: inherit;">
          <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:' . 'Montserrat' . ',sans-serif;"><tr><td style="font-family:' . 'Montserrat' . ',sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:36px; v-text-anchor:middle; width:142px;" arcsize="11%" stroke="f" fillcolor="#06794f"><w:anchorlock/><center style="color:#FFFFFF;font-family:' . 'Montserrat' . ',sans-serif;"><![endif]-->
            <a href="https://skpku.bemfkuwks.com/auth" target="_blank" style="box-sizing: border-box;display: inline-block;font-family: ' . 'Montserrat' . ',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF;background-color: #06794f;border-radius: 4px;-webkit-border-radius: 4px;-moz-border-radius: 4px;width: auto;max-width: 100%;overflow-wrap: break-word;word-break: break-word;word-wrap: break-word;mso-border-alt: none;line-height: inherit;">
              <span style="display:block;padding:10px 20px;line-height:120%;"><span style="font-size: 14px; line-height: 16.8px;">Login SKP-KU!</span></span>
            </a>
          <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 20px 10px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 12px;">
            Copyright &copy; SKP-KU BEM FK UWKS 2021
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <div align="center" style="line-height: inherit;">
          <div style="display: table;max-width: 85px;line-height: inherit;">
          <!--[if (mso)|(IE)]><table width="85" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:85px;"><tr><![endif]-->
          
            
            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 11px;" valign="top"><![endif]-->
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 11px;line-height: inherit;color: #000000;">
              <tbody style="line-height: inherit;"><tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <a href="https://instagram.com/bemfkuwks" title="Instagram" target="_blank" style="line-height: inherit;color: #06794f;text-decoration: underline;">
                  <img src="https://skpku.bemfkuwks.com/assets/img/email/instagram.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px;line-height: inherit;color: #000000;">
              <tbody style="line-height: inherit;"><tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <a href="mailto:" title="Email" target="_blank" style="line-height: inherit;color: #06794f;text-decoration: underline;">
                  <img src="https://skpku.bemfkuwks.com/assets/img/email/email.png" alt="Email" title="Email" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            
            <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
          </div>
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
            </td>
          </tr>
          </tbody>
          </table>
          <!--[if mso]></div><![endif]-->
          <!--[if IE]></div><![endif]-->
        </body>
        
        </html>';
        $datauser = $this->db->get_where('user', ['npm' => $this->input->post('npm')])->row_array();
        $email = $datauser['email'];
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('skpku@bemfkuwks.com', 'SKP-KU BEM FK UWKS');
        $this->email->to($email);
        $this->email->subject('Pengajuan Validasi SKP : ' . $this->input->post('event') . ' Diterima!');
        $this->email->message($message);
        if ($this->email->send()) {
            return true;
            echo "Berhasil";
        } else {
            echo $this->email->print_debugger();
        }
    }
    public function ValidasiSKPDitolak()
    {
        $skpdetail = $this->skp->GetSpecificUserSKPValidationData();
        foreach ($skpdetail as $sd) :
        endforeach;
        $this->session->set_userdata('event_penolakan', $sd['event']);
        $this->session->set_userdata('npm_penolakan', $sd['npm']);

        $config = [
            'protocol'  => 'ssmtp',
            'smtp_host' => 'ssl://mail.bemfkuwks.com',
            'smtp_user' => 'skpku@bemfkuwks.com',
            'smtp_pass' => 'Bemhiuwksmaju!',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];
        $message = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" style="line-height: inherit;">
        <head style="line-height: inherit;">
        <!--[if gte mso 9]>
        <xml>
          <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" style="line-height: inherit;">
          <meta name="viewport" content="width=device-width, initial-scale=1.0" style="line-height: inherit;">
          <meta name="x-apple-disable-message-reformatting" style="line-height: inherit;">
          <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge" style="line-height: inherit;"><!--<![endif]-->
          <title style="line-height: inherit;"></title>
          
            
          
          
        
        <!--[if !mso]><!--><!--<![endif]-->
        
        </head>
        
        <body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ffffff;color: #000000;line-height: inherit;">
          <!--[if IE]><div class="ie-container"><![endif]-->
          <!--[if mso]><div class="mso-container"><![endif]-->
          <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;margin: 0 auto;background-color: #ffffff;width: 100%;line-height: inherit;color: #000000;" cellpadding="0" cellspacing="0">
          <tbody style="line-height: inherit;">
          <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
            <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #ffffff;"><![endif]-->
            
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;line-height: inherit;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: transparent;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;line-height: inherit;">
          <div style="width: 100% !important;line-height: inherit;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;">
          <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
            <td style="padding-right: 0px;padding-left: 0px;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="center">
              
              <img align="center" border="0" src="https://skpku.bemfkuwks.com/assets/img/email/SKPKU.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 530px;line-height: inherit;" width="530">
              
            </td>
          </tr>
        </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id="u_content_heading_11" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 210%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 23px;">
            <strong style="line-height: inherit;">Informasi Pengajuan SKP B</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id="u_content_heading_13" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 10px;">
            *Berikut merupakan email otomatis, mohon jangan dibalas*
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 17px;">
            <strong style="line-height: inherit;">Keterangan</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
            <em style="line-height: inherit;">' . $sd['event'] . '</em>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 17px;">
            <strong style="line-height: inherit;">Posisi</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
            <em style="line-height: inherit;">' . $sd['posisi'] . '</em>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 17px;">
            <strong style="line-height: inherit;">Tahun</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
            <em style="line-height: inherit;">' . $sd['tahun'] . '</em>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 17px;">
            <strong style="line-height: inherit;">Bobot</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
            <em style="line-height: inherit;">' . $sd['bobot'] . '</em>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>

        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 17px;">
            <strong style="line-height: inherit;">Alasan Penolakan</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
            <em style="line-height: inherit;">' . urldecode($sd['rejection_reason']) . '</em>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
            <tbody style="line-height: inherit;">
              <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                  <span style="line-height: inherit;">&#160;</span>
                </td>
              </tr>
            </tbody>
          </table>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; color: #FF0000; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 23px;">
            <strong style="line-height: inherit;">Validasi SKP B Ditolak!</strong>
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 15px;">
                Silahkan buka laman daftar validasi untuk mengubah data SKP B kemudian validasi ulang.
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <div align="center" style="line-height: inherit;">
          <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:' . 'Montserrat' . ',sans-serif;"><tr><td style="font-family:' . 'Montserrat' . ',sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:36px; v-text-anchor:middle; width:142px;" arcsize="11%" stroke="f" fillcolor="#06794f"><w:anchorlock/><center style="color:#FFFFFF;font-family:' . 'Montserrat' . ',sans-serif;"><![endif]-->
            <a href="https://skpku.bemfkuwks.com/auth" target="_blank" style="box-sizing: border-box;display: inline-block;font-family: ' . 'Montserrat' . ',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF;background-color: #06794f;border-radius: 4px;-webkit-border-radius: 4px;-moz-border-radius: 4px;width: auto;max-width: 100%;overflow-wrap: break-word;word-break: break-word;word-wrap: break-word;mso-border-alt: none;line-height: inherit;">
              <span style="display:block;padding:10px 20px;line-height:120%;"><span style="font-size: 14px; line-height: 16.8px;">Login SKP-KU!</span></span>
            </a>
          <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 20px 10px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <h1 class="v-font-size" style="margin: 0px; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: ' . 'Montserrat' . ',sans-serif; font-size: 12px;">
            Copyright &copy; SKP-KU BEM FK UWKS 2021
          </h1>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <div align="center" style="line-height: inherit;">
          <div style="display: table;max-width: 85px;line-height: inherit;">
          <!--[if (mso)|(IE)]><table width="85" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:85px;"><tr><![endif]-->
          
            
            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 11px;" valign="top"><![endif]-->
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 11px;line-height: inherit;color: #000000;">
              <tbody style="line-height: inherit;"><tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <a href="https://instagram.com/bemfkuwks" title="Instagram" target="_blank" style="line-height: inherit;color: #06794f;text-decoration: underline;">
                  <img src="https://skpku.bemfkuwks.com/assets/img/email/instagram.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px;line-height: inherit;color: #000000;">
              <tbody style="line-height: inherit;"><tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <a href="mailto:" title="Email" target="_blank" style="line-height: inherit;color: #06794f;text-decoration: underline;">
                  <img src="https://skpku.bemfkuwks.com/assets/img/email/email.png" alt="Email" title="Email" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            
            <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
          </div>
        </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
            </td>
          </tr>
          </tbody>
          </table>
          <!--[if mso]></div><![endif]-->
          <!--[if IE]></div><![endif]-->
        </body>
        
        </html>';
        $datauser = $this->db->get_where('user', ['npm' => $this->session->userdata('npm_penolakan')])->row_array();
        $email = $datauser['email'];
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('skpku@bemfkuwks.com', 'SKP-KU BEM FK UWKS');
        $this->email->to($email);
        $this->email->subject('Pengajuan Validasi SKP : ' . $this->session->userdata('event_penolakan') . ' Ditolak!');
        $this->email->message($message);
        if ($this->email->send()) {
            return true;
            echo "Berhasil";
        } else {
            echo $this->email->print_debugger();
        }
    }
}
