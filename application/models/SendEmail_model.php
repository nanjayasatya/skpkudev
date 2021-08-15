<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SendEmail_model extends CI_Model
{
    public function ValidasiSKPDiterima()
    {
        $config = [
            'protocol' => 'ssmtp',
            'smtp_host' => 'ssl://mail.bemfkuwks.com',
            'smtp_user' => 'skpku@bemfkuwks.com',
            'smtp_pass' => 'Bemhiuwksmaju!',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];
        $message = '<!DOCTYPE HTML
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
        xmlns:o="urn:schemas-microsoft-com:office:office" style="line-height: inherit;">
      
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
        <!--[if !mso]><!-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" style="line-height: inherit;">
        <!--<![endif]-->
        <title style="line-height: inherit;"></title>
      
      
      
      
      
        <!--[if !mso]><!-->
        <!--<![endif]-->
      
      </head>
      
      <body class="clean-body"
        style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #ffffff;color: #000000;line-height: inherit;">
        <!--[if IE]><div class="ie-container"><![endif]-->
        <!--[if mso]><div class="mso-container"><![endif]-->
        <table
          style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;margin: 0 auto;background-color: #ffffff;width: 100%;line-height: inherit;color: #000000;"
          cellpadding="0" cellspacing="0">
          <tbody style="line-height: inherit;">
            <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
              <td
                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #ffffff;"><![endif]-->
      
      
                <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #f9f9f9;"><![endif]-->
      
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                      style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #f9f9f9;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
                                      <tbody style="line-height: inherit;">
                                        <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                          <td
                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                                            <span style="line-height: inherit;">&#160;</span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
      
      
      
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #ffffff;"><![endif]-->
      
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #ffffff;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="background-color: #ffffff;width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
      
                            <table id="u_content_image_1"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 25px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                      style="line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;">
                                      <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                        <td class="v-text-align"
                                          style="padding-right: 0px;padding-left: 0px;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                          align="center">
      
                                          <img align="center" border="0" src="https://skpku.bemfkuwks.com/assets/img/email/logo_header.png" alt="Image" title="Image"
                                            style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 45%;max-width: 351px;line-height: inherit;"
                                            width="351" class="v-src-width v-src-max-width">
      
                                        </td>
                                      </tr>
                                    </table>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
      
      
      
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #161a39;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #161a39;"><![endif]-->
      
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
      
                            <table id="u_content_image_2"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                      style="line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;">
                                      <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                        <td class="v-text-align"
                                          style="padding-right: 0px;padding-left: 0px;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                          align="center">
      
                                          <img align="center" border="0" src="https://skpku.bemfkuwks.com/assets/img/email/validasi.png" alt="Image" title="Image"
                                            style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 6%;max-width: 46.2px;line-height: inherit;"
                                            width="46.2" class="v-src-width v-src-max-width">
      
                                        </td>
                                      </tr>
                                    </table>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 0px 10px 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="color: #ffffff; line-height: 140%; text-align: left; word-wrap: break-word;">
                                      <p style="line-height: 140%;text-align: center;font-size: 14px;margin: 0;"><span
                                          style="color: #ffffff; font-family: Montserrat, sans-serif; font-size: 24px; line-height: 33.6px;"><span
                                            style="line-height: 33.6px; font-size: 24px;">Informasi Pengajuan Validasi SKP
                                            B</span></span></p>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
      
      
      
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #ffffff;"><![endif]-->
      
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #ffffff;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="background-color: #ffffff;width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
      
                            <table id="u_content_text_4"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 40px 40px 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="font-size: 14px; line-height: 19.6px;"><span
                                            style="line-height: 19.6px; color: #666666; font-size: 14px;">Halo, </span><strong
                                            style="line-height: inherit;"><span
                                              style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $this->input->post('name') . '</span></strong></span></p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="color: #666666; font-size: 14px; line-height: 19.6px;">Berikut merupakan
                                          informasi mengenai validasi SKP B yang sudah diajukan.</span></p>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                      style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
                                      <tbody style="line-height: inherit;">
                                        <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                          <td
                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                                            <span style="line-height: inherit;">&#160;</span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table id="u_content_text_15"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="font-size: 16px; line-height: 22.4px;"><strong
                                            style="line-height: inherit;"><span
                                              style="line-height: 22.4px; color: #666666; font-size: 16px;">Keterangan</span></strong></span>
                                      </p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><em
                                          style="line-height: inherit;"><span
                                            style="font-size: 14px; line-height: 19.6px;"><span
                                              style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $this->input->post('event') . '</span></span></em>
                                      </p>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                      style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
                                      <tbody style="line-height: inherit;">
                                        <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                          <td
                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                                            <span style="line-height: inherit;">&#160;</span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table id="u_content_text_16"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="font-size: 16px; line-height: 22.4px;"><strong
                                            style="line-height: inherit;"><span
                                              style="line-height: 22.4px; color: #666666; font-size: 16px;">Posisi</span></strong></span>
                                      </p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><em
                                          style="line-height: inherit;"><span
                                            style="font-size: 14px; line-height: 19.6px;"><span
                                              style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $this->input->post('posisi') . '</span></span></em>
                                      </p>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                      style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
                                      <tbody style="line-height: inherit;">
                                        <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                          <td
                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                                            <span style="line-height: inherit;">&#160;</span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table id="u_content_text_17"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="font-size: 16px; line-height: 22.4px;"><strong
                                            style="line-height: inherit;"><span
                                              style="line-height: 22.4px; color: #666666; font-size: 16px;">Tahun</span></strong></span>
                                      </p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><em
                                          style="line-height: inherit;"><span
                                            style="font-size: 14px; line-height: 19.6px;"><span
                                              style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $this->input->post('tahun') . '</span></span></em>
                                      </p>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                      style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
                                      <tbody style="line-height: inherit;">
                                        <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                          <td
                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                                            <span style="line-height: inherit;">&#160;</span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table id="u_content_text_18"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="font-size: 16px; line-height: 22.4px;"><strong
                                            style="line-height: inherit;"><span
                                              style="line-height: 22.4px; color: #666666; font-size: 16px;">Bobot</span></strong></span>
                                      </p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><em
                                          style="line-height: inherit;"><span
                                            style="font-size: 14px; line-height: 19.6px;"><span
                                              style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $this->input->post('bobot') . '</span></span></em>
                                      </p>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                      style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
                                      <tbody style="line-height: inherit;">
                                        <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                          <td
                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                                            <span style="line-height: inherit;">&#160;</span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table id="u_content_text_14"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 15px 15px 12px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="color: #06794f; line-height: 140%; text-align: center; word-wrap: break-word;">
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="font-size: 20px; line-height: 28px; color: #06794f;"><strong
                                            style="line-height: inherit;"><span
                                              style="line-height: 28px; font-size: 20px;">Validasi SKP B
                                              Diterima!</span></strong></span></p>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table id="u_content_text_19"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 0px 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                      <p style="line-height: 150%;text-align: center;font-size: 14px;margin: 0;"><span
                                          style="color: #888888; font-size: 14px; line-height: 21px;">Silahkan buka laman SKP
                                          Database untuk melihat data SKP B yang sudah tervalidasi.</span></p>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table id="u_content_text_5"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 10px 20px 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                      <p style="line-height: 150%;text-align: center;font-size: 14px;margin: 0;"><span
                                          style="color: #888888; font-size: 14px; line-height: 21px;">Jika terdapat kesalahan
                                          mohon segera menghubungi Departemen INTERNAL BEM FK UWKS.</span></p>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table id="u_content_button_1"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 0px 30px 30px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-text-align" align="center"
                                      style="line-height: inherit;text-align: center !important;">
                                      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:' . 'Montserrat' . ',sans-serif;"><tr><td class="v-text-align" style="font-family:' . 'Montserrat' . ',sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://skpku.bemfkuwks.com/" style="height:49px; v-text-anchor:middle; width:196px;" arcsize="41%" stroke="f" fillcolor="#06794f"><w:anchorlock/><center style="color:#FFFFFF;font-family:' . 'Montserrat' . ',sans-serif;"><![endif]-->
                                      <a href="https://skpku.bemfkuwks.com/" target="_blank"
                                        style="box-sizing: border-box;display: inline-block;font-family: ' . 'Montserrat' . ',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF;background-color: #06794f;border-radius: 20px;-webkit-border-radius: 20px;-moz-border-radius: 20px;width: auto;max-width: 100%;overflow-wrap: break-word;word-break: break-word;word-wrap: break-word;mso-border-alt: none;line-height: inherit;">
                                        <span class="v-line-height v-padding"
                                          style="display:block;padding:15px 40px;line-height:120%;"><span
                                            style="font-size: 16px; line-height: 19.2px;">Login SKP-KU!</span></span>
                                      </a>
                                      <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
      
      
      
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #06794f;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #06794f;"><![endif]-->
      
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 25px 10px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div align="center" style="line-height: inherit;">
                                      <div style="display: table;max-width: 140px;line-height: inherit;">
                                        <!--[if (mso)|(IE)]><table width="140" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:140px;"><tr><![endif]-->
      
      
                                        <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                                        <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                          style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px;line-height: inherit;color: #000000;">
                                          <tbody style="line-height: inherit;">
                                            <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                              <td align="left" valign="middle"
                                                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                                                <a href=" https://instagram.com/bemfkuwks/" title="Instagram" target="_blank"
                                                  style="line-height: inherit;color: #06794f;text-decoration: underline;">
                                                  <img src="https://skpku.bemfkuwks.com/assets/img/email/instagram_favicon.png" alt="Instagram" title="Instagram" width="32"
                                                    style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                                                </a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
      
                                        <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                                        <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                          style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px;line-height: inherit;color: #000000;">
                                          <tbody style="line-height: inherit;">
                                            <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                              <td align="left" valign="middle"
                                                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                                                <a href="mailto:uwksbemfk@gmail.com" title="Email" target="_blank"
                                                  style="line-height: inherit;color: #06794f;text-decoration: underline;">
                                                  <img src="https://skpku.bemfkuwks.com/assets/img/email/email_favicon.png" alt="Email" title="Email" width="32"
                                                    style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                                                </a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
      
                                        <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
                                        <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                          style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px;line-height: inherit;color: #000000;">
                                          <tbody style="line-height: inherit;">
                                            <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                              <td align="left" valign="middle"
                                                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                                                <a href="https://skpku.bemfkuwks.com/" title="Website" target="_blank"
                                                  style="line-height: inherit;color: #06794f;text-decoration: underline;">
                                                  <img src="https://skpku.bemfkuwks.com/assets/img/email/website_favicon.png" alt="Website" title="Website" width="32"
                                                    style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                                                </a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
      
      
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                      </div>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 5px 10px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;">
                                      <p style="line-height: 140%;font-size: 14px;margin: 0;"><span
                                          style="font-size: 12px; line-height: 16.8px;"><span
                                            style="color: #ecf0f1; line-height: 16.8px; font-size: 12px;"><span
                                              style="line-height: 16.8px; font-size: 12px;">Copyright &copy; SKP-KU BEM FK
                                              UWKS 2021</span></span></span></p>
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
      
      
      
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: transparent;"><![endif]-->
      
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                      style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 4px solid #06794f;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
                                      <tbody style="line-height: inherit;">
                                        <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                          <td
                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                                            <span style="line-height: inherit;">&#160;</span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
      
      
      
                <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #1c103b;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #1c103b;"><![endif]-->
      
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
      
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
      
      
      
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #f9f9f9;"><![endif]-->
      
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
      
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td class="v-container-padding-padding"
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 0px 40px 30px 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
      
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%; text-align: left; word-wrap: break-word;">
      
                                    </div>
      
                                  </td>
                                </tr>
                              </tbody>
                            </table>
      
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
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
            'protocol' => 'ssmtp',
            'smtp_host' => 'ssl://mail.bemfkuwks.com',
            'smtp_user' => 'skpku@bemfkuwks.com',
            'smtp_pass' => 'Bemhiuwksmaju!',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
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
            
        
        <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #f9f9f9;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #f9f9f9;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
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
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #ffffff;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #ffffff;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="background-color: #ffffff;width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table id="u_content_image_1" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 25px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;">
          <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
            <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="center">
              
              <img align="center" border="0" src="https://skpku.bemfkuwks.com/assets/img/email/logo_header.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 45%;max-width: 351px;line-height: inherit;" width="351" class="v-src-width v-src-max-width">
              
            </td>
          </tr>
        </table>
        
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
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #161a39;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #161a39;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table id="u_content_image_2" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;">
          <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
            <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="center">
              
              <img align="center" border="0" src="https://skpku.bemfkuwks.com/assets/img/email/validasi.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 6%;max-width: 46.2px;line-height: inherit;" width="46.2" class="v-src-width v-src-max-width">
              
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
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 0px 10px 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="color: #ffffff; line-height: 140%; text-align: left; word-wrap: break-word;">
            <p style="line-height: 140%;text-align: center;font-size: 14px;margin: 0;"><span style="color: #ffffff; font-family: Montserrat, sans-serif; font-size: 24px; line-height: 33.6px;"><span style="line-height: 33.6px; font-size: 24px;">Informasi Pengajuan Validasi SKP B</span></span></p>
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
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #ffffff;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #ffffff;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="background-color: #ffffff;width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table id="u_content_text_4" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 40px 40px 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
            <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="font-size: 14px; line-height: 19.6px;"><span style="line-height: 19.6px; color: #666666; font-size: 14px;">Halo, </span><strong style="line-height: inherit;"><span style="line-height: 19.6px; color: #666666; font-size: 14px;">Nyoman Satiya Nanjaya Sadha</span></strong></span></p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="color: #666666; font-size: 14px; line-height: 19.6px;">Berikut merupakan informasi mengenai validasi SKP B yang sudah diajukan.</span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
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
        
        <table id="u_content_text_15" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
            <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="font-size: 16px; line-height: 22.4px;"><strong style="line-height: inherit;"><span style="line-height: 22.4px; color: #666666; font-size: 16px;">Keterangan</span></strong></span></p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><em style="line-height: inherit;"><span style="font-size: 14px; line-height: 19.6px;"><span style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $sd['event'] . '</span></span></em></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
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
        
        <table id="u_content_text_16" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
            <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="font-size: 16px; line-height: 22.4px;"><strong style="line-height: inherit;"><span style="line-height: 22.4px; color: #666666; font-size: 16px;">Posisi</span></strong></span></p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><em style="line-height: inherit;"><span style="font-size: 14px; line-height: 19.6px;"><span style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $sd['posisi'] . '</span></span></em></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
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
        
        <table id="u_content_text_17" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
            <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="font-size: 16px; line-height: 22.4px;"><strong style="line-height: inherit;"><span style="line-height: 22.4px; color: #666666; font-size: 16px;">Tahun</span></strong></span></p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><em style="line-height: inherit;"><span style="font-size: 14px; line-height: 19.6px;"><span style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $sd['tahun'] . '</span></span></em></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
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
        
        <table id="u_content_text_20" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
            <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="font-size: 16px; line-height: 22.4px;"><strong style="line-height: inherit;"><span style="line-height: 22.4px; color: #666666; font-size: 16px;">Bobot</span></strong></span></p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><em style="line-height: inherit;"><span style="font-size: 14px; line-height: 19.6px;"><span style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $sd['bobot'] . '</span></span></em></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
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
        
        <table id="u_content_text_18" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%;text-align: center;word-wrap: break-word;color: #000000 !important;">
            <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="font-size: 16px; line-height: 22.4px;"><strong style="line-height: inherit;"><span style="line-height: 22.4px; color: #666666; font-size: 16px;">Alasan Penolakan</span></strong></span></p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><em style="line-height: inherit;"><span style="font-size: 14px; line-height: 19.6px;"><span style="line-height: 19.6px; color: #666666; font-size: 14px;">' . urldecode($sd['rejection_reason']) . '</span></span></em></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
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
        
        <table id="u_content_text_14" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 15px 15px 12px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="color: #ff0000; line-height: 140%; text-align: center; word-wrap: break-word;">
            <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="font-size: 20px; line-height: 28px; color: #ff0000;"><strong style="line-height: inherit;"><span style="line-height: 28px; font-size: 20px;">Validasi SKP B Ditolak!</span></strong></span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id="u_content_text_19" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 0px 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
            <p style="line-height: 140%;text-align: center;font-size: 14px;margin: 0;"><span style="color: #888888; font-size: 14px; line-height: 19.6px;">Silahkan buka laman daftar validasi untuk mengubah data SKP B kemudian validasi ulang.</span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id="u_content_text_5" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 10px 20px 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
            <p style="line-height: 150%;text-align: center;font-size: 14px;margin: 0;"><span style="color: #888888; font-size: 14px; line-height: 21px;">Jika terdapat kesalahan mohon segera menghubungi Departemen INTERNAL BEM FK UWKS.</span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id="u_content_button_1" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 0px 30px 30px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <div class="v-text-align" align="center" style="line-height: inherit;text-align: center !important;">
          <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:' . 'Montserrat' . ',sans-serif;"><tr><td class="v-text-align" style="font-family:' . 'Montserrat' . ',sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://skpku.bemfkuwks.com/" style="height:49px; v-text-anchor:middle; width:196px;" arcsize="41%" stroke="f" fillcolor="#06794f"><w:anchorlock/><center style="color:#FFFFFF;font-family:' . 'Montserrat' . ',sans-serif;"><![endif]-->
            <a href="https://skpku.bemfkuwks.com/" target="_blank" style="box-sizing: border-box;display: inline-block;font-family: ' . 'Montserrat' . ',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF;background-color: #06794f;border-radius: 20px;-webkit-border-radius: 20px;-moz-border-radius: 20px;width: auto;max-width: 100%;overflow-wrap: break-word;word-break: break-word;word-wrap: break-word;mso-border-alt: none;line-height: inherit;">
              <span class="v-line-height v-padding" style="display:block;padding:15px 40px;line-height:120%;"><span style="font-size: 16px; line-height: 19.2px;">Login SKP-KU!</span></span>
            </a>
          <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
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
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #06794f;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #06794f;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 25px 10px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <div align="center" style="line-height: inherit;">
          <div style="display: table;max-width: 140px;line-height: inherit;">
          <!--[if (mso)|(IE)]><table width="140" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:140px;"><tr><![endif]-->
          
            
            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px;line-height: inherit;color: #000000;">
              <tbody style="line-height: inherit;"><tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <a href=" https://instagram.com/bemfkuwks/" title="Instagram" target="_blank" style="line-height: inherit;color: #06794f;text-decoration: underline;">
                  <img src="https://skpku.bemfkuwks.com/assets/img/email/instagram_favicon.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px;line-height: inherit;color: #000000;">
              <tbody style="line-height: inherit;"><tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <a href="mailto:uwksbemfk@gmail.com" title="Email" target="_blank" style="line-height: inherit;color: #06794f;text-decoration: underline;">
                  <img src="https://skpku.bemfkuwks.com/assets/img/email/email_favicon.png" alt="Email" title="Email" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px;line-height: inherit;color: #000000;">
              <tbody style="line-height: inherit;"><tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <a href="https://skpku.bemfkuwks.com/" title="Website" target="_blank" style="line-height: inherit;color: #06794f;text-decoration: underline;">
                  <img src="https://skpku.bemfkuwks.com/assets/img/email/website_favicon.png" alt="Website" title="Website" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
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
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 5px 10px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word;">
            <p style="line-height: 140%;font-size: 14px;margin: 0;"><span style="font-size: 12px; line-height: 16.8px;"><span style="color: #ecf0f1; line-height: 16.8px; font-size: 12px;"><span style="line-height: 16.8px; font-size: 12px;">Copyright &copy; SKP-KU BEM FK UWKS 2021</span></span></span></p>
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
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: transparent;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 4px solid #06794f;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
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
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #1c103b;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #1c103b;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #f9f9f9;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td class="v-container-padding-padding" style="overflow-wrap: break-word;word-break: break-word;padding: 0px 40px 30px 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
            
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
    public function ForgotPassword($token, $type)
    {
        $datauser = $this->db->get_where('user', ['email' => $this->input->post('email')])->row_array();
        $message = '<!DOCTYPE HTML
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
        xmlns:o="urn:schemas-microsoft-com:office:office" style="line-height: inherit;">
        
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
        <!--[if !mso]><!-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" style="line-height: inherit;">
        <!--<![endif]-->
        <title style="line-height: inherit;"></title>
        
        
        
        
        
        <!--[if !mso]><!-->
        <!--<![endif]-->
        
        </head>
        
        <body class="clean-body"
        style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f9f9f9;color: #000000;line-height: inherit;">
        <!--[if IE]><div class="ie-container"><![endif]-->
        <!--[if mso]><div class="mso-container"><![endif]-->
        <table
          style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;margin: 0 auto;background-color: #f9f9f9;width: 100%;line-height: inherit;color: #000000;"
          cellpadding="0" cellspacing="0">
          <tbody style="line-height: inherit;">
            <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
              <td
                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f9f9f9;"><![endif]-->
        
        
                <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #f9f9f9;"><![endif]-->
        
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
        
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                      style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #f9f9f9;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
                                      <tbody style="line-height: inherit;">
                                        <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                          <td
                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                                            <span style="line-height: inherit;">&#160;</span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
        
        
        
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #ffffff;"><![endif]-->
        
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #ffffff;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="background-color: #ffffff;width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
        
                            <table id="u_content_image_1"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 25px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                      style="line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;">
                                      <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                        <td class="v-text-align"
                                          style="padding-right: 0px;padding-left: 0px;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                          align="center">
        
                                          <img align="center" border="0" src="https://skpku.bemfkuwks.com/assets/img/email/logo_header.png" alt="Image" title="Image"
                                            style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 45%;max-width: 351px;line-height: inherit;"
                                            width="351" class="v-src-width v-src-max-width">
        
                                        </td>
                                      </tr>
                                    </table>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
        
        
        
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #161a39;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #161a39;"><![endif]-->
        
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
        
                            <table id="u_content_image_2"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                      style="line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;">
                                      <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                        <td class="v-text-align"
                                          style="padding-right: 0px;padding-left: 0px;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                          align="center">
        
                                          <img align="center" border="0" src="https://skpku.bemfkuwks.com/assets/img/email/resetpassword.png" alt="Image" title="Image"
                                            style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 6%;max-width: 46.2px;line-height: inherit;"
                                            width="46.2" class="v-src-width v-src-max-width">
        
                                        </td>
                                      </tr>
                                    </table>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 0px 10px 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                      <p style="line-height: 140%;text-align: center;font-size: 14px;margin: 0;"><span
                                          style="color: #ffffff; font-family: Montserrat, sans-serif; font-size: 24px; line-height: 33.6px;"><span
                                            style="line-height: 33.6px; font-size: 24px;">Reset Password</span></span></p>
                                    </div>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
        
        
        
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #ffffff;"><![endif]-->
        
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #ffffff;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="background-color: #ffffff;width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
        
                            <table id="u_content_text_4"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 40px 40px 30px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%;text-align: left;word-wrap: break-word;color: #000000 !important;">
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="font-size: 14px; line-height: 19.6px;"><span
                                            style="line-height: 19.6px; color: #666666; font-size: 14px;">Halo, </span><strong
                                            style="line-height: inherit;"><span
                                              style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $datauser['name'] . '</span></strong></span></p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="font-size: 14px; line-height: 19.6px; color: #666666;">Kami mengirimkan email
                                          ini sebagai tanggapan atas permintaan reset password yang telah diajukan.</span></p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="font-size: 14px; line-height: 19.6px; color: #666666;">Untuk reset password
                                          silahkan klik link di bawah ini :</span></p>
                                    </div>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <table id="u_content_button_1"
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 0px 40px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <div class="v-text-align" align="center"
                                      style="line-height: inherit;text-align: center !important;">
                                      <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:' . 'Montserrat' . ',sans-serif;"><tr><td class="v-text-align" style="font-family:' . 'Montserrat' . ',sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:49px; v-text-anchor:middle; width:206px;" arcsize="41%" stroke="f" fillcolor="#06794f"><w:anchorlock/><center style="color:#FFFFFF;font-family:' . 'Montserrat' . ',sans-serif;"><![endif]-->
                                      <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '" target="_blank"
                                        style="box-sizing: border-box;display: inline-block;font-family: ' . 'Montserrat' . ',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF;background-color: #06794f;border-radius: 20px;-webkit-border-radius: 20px;-moz-border-radius: 20px;width: auto;max-width: 100%;overflow-wrap: break-word;word-break: break-word;word-wrap: break-word;mso-border-alt: none;line-height: inherit;">
                                        <span class="v-line-height"
                                          style="display:block;padding:15px 40px;line-height:120%;"><span
                                            style="font-size: 16px; line-height: 19.2px;">Reset Password</span></span>
                                      </a>
                                      <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
                                    </div>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 40px 40px 30px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%; text-align: left; word-wrap: break-word;">
                                      <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span
                                          style="color: #888888; font-size: 14px; line-height: 19.6px;"><em
                                            style="line-height: inherit;"><span
                                              style="line-height: 19.6px; font-size: 14px;">Harap abaikan email ini jika tidak
                                              ada meminta reset password.</span></em></span><br
                                          style="line-height: inherit;"><span
                                          style="color: #888888; font-size: 14px; line-height: 19.6px;"><em
                                            style="line-height: inherit;"><span
                                              style="font-size: 16px; line-height: 22.4px;">&nbsp;</span></em></span></p>
                                    </div>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
        
        
        
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #06794f;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #06794f;"><![endif]-->
        
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
        
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 25px 10px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <div align="center" style="line-height: inherit;">
                                      <div style="display: table;max-width: 140px;line-height: inherit;">
                                        <!--[if (mso)|(IE)]><table width="140" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:140px;"><tr><![endif]-->
        
        
                                        <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                                        <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                          style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px;line-height: inherit;color: #000000;">
                                          <tbody style="line-height: inherit;">
                                            <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                              <td align="left" valign="middle"
                                                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                                                <a href=" https://instagram.com/bemfkuwks/" title="Instagram" target="_blank"
                                                  style="line-height: inherit;color: #06794f;text-decoration: underline;">
                                                  <img src="https://skpku.bemfkuwks.com/assets/img/email/instagram_favicon.png" alt="Instagram" title="Instagram" width="32"
                                                    style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                                                </a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                                        <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                          style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px;line-height: inherit;color: #000000;">
                                          <tbody style="line-height: inherit;">
                                            <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                              <td align="left" valign="middle"
                                                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                                                <a href="mailto:uwksbemfk@gmail.com" title="Email" target="_blank"
                                                  style="line-height: inherit;color: #06794f;text-decoration: underline;">
                                                  <img src="https://skpku.bemfkuwks.com/assets/img/email/email_favicon.png" alt="Email" title="Email" width="32"
                                                    style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                                                </a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
                                        <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                          style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px;line-height: inherit;color: #000000;">
                                          <tbody style="line-height: inherit;">
                                            <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                              <td align="left" valign="middle"
                                                style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                                                <a href="https://skpku.bemfkuwks.com/" title="Website" target="_blank"
                                                  style="line-height: inherit;color: #06794f;text-decoration: underline;">
                                                  <img src="https://skpku.bemfkuwks.com/assets/img/email/website_favicon.png" alt="Website" title="Website" width="32"
                                                    style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                                                </a>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
        
        
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                      </div>
                                    </div>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 5px 10px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%; text-align: center; word-wrap: break-word;">
                                      <p style="line-height: 140%;font-size: 14px;margin: 0;"><span
                                          style="font-size: 12px; line-height: 16.8px;"><span
                                            style="color: #ffffff; line-height: 16.8px; font-size: 12px;"><span
                                              style="line-height: 16.8px; font-size: 12px;">Copyright &copy; SKP-KU BEM FK
                                              UWKS 2021</span></span></span></p>
                                    </div>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
        
        
        
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: transparent;"><![endif]-->
        
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
        
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                      style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 4px solid #06794f;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
                                      <tbody style="line-height: inherit;">
                                        <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
                                          <td
                                            style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;color: #000000;">
                                            <span style="line-height: inherit;">&#160;</span>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
        
        
        
                <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #1c103b;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #1c103b;"><![endif]-->
        
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
        
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
                        </div>
                      </div>
                      <!--[if (mso)|(IE)]></td><![endif]-->
                      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                  </div>
                </div>
        
        
        
                <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
                  <div class="u-row"
                    style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;line-height: inherit;width: calc(100% - 40px) !important;">
                    <div
                      style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
                      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #f9f9f9;"><![endif]-->
        
                      <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                      <div class="u-col u-col-100"
                        style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
                        <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
                          <!--[if (!mso)&(!IE)]><!-->
                          <div
                            style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;">
                            <!--<![endif]-->
        
                            <table
                              style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                              role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                              <tbody style="line-height: inherit;">
                                <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
                                  <td
                                    style="overflow-wrap: break-word;word-break: break-word;padding: 0px 40px 30px 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;"
                                    align="left">
        
                                    <div class="v-color v-text-align v-line-height"
                                      style="line-height: 140%; text-align: left; word-wrap: break-word;">
        
                                    </div>
        
                                  </td>
                                </tr>
                              </tbody>
                            </table>
        
                            <!--[if (!mso)&(!IE)]><!-->
                          </div>
                          <!--<![endif]-->
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
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('skpku@bemfkuwks.com', 'SKP-KU BEM FK UWKS');
        $this->email->to($this->input->post('email'));
        $this->email->subject('SKP-KU Reset Password');
        $this->email->message($message);
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function ResetPassword()
    {
        $datauser = $this->db->get_where('user', ['id' => $this->uri->segment(3)])->row_array();
        $email = $datauser['email'];
        $name = $datauser['name'];
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
        
        <body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f9f9f9;color: #000000;line-height: inherit;">
          <!--[if IE]><div class="ie-container"><![endif]-->
          <!--[if mso]><div class="mso-container"><![endif]-->
          <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;margin: 0 auto;background-color: #f9f9f9;width: 100%;line-height: inherit;color: #000000;" cellpadding="0" cellspacing="0">
          <tbody style="line-height: inherit;">
          <tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;">
            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
            <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #f9f9f9;"><![endif]-->
            
        
        <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #f9f9f9;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #f9f9f9;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
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
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #ffffff;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #ffffff;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="background-color: #ffffff;width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table id="u_content_image_1" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 25px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;">
          <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
            <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="center">
              
              <img align="center" border="0" src="https://skpku.bemfkuwks.com/assets/img/email/logo_header.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 45%;max-width: 351px;line-height: inherit;" width="351" class="v-src-width v-src-max-width">
              
            </td>
          </tr>
        </table>
        
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
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #161a39;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #161a39;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table id="u_content_image_2" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <table width="100%" cellpadding="0" cellspacing="0" border="0" style="line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;">
          <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
            <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="center">
              
              <img align="center" border="0" src="https://skpku.bemfkuwks.com/assets/img/email/resetpassword.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 6%;max-width: 46.2px;line-height: inherit;" width="46.2" class="v-src-width v-src-max-width">
              
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
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 0px 10px 15px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
            <p style="line-height: 140%;text-align: center;font-size: 14px;margin: 0;"><span style="color: #ffffff; font-family: Montserrat, sans-serif; font-size: 24px; line-height: 33.6px;"><span style="line-height: 33.6px; font-size: 24px;">Reset Password</span></span></p>
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
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #ffffff;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #ffffff;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="background-color: #ffffff;width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table id="u_content_text_4" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 40px 40px 30px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%;text-align: left;word-wrap: break-word;color: #000000 !important;">
            <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="font-size: 14px; line-height: 19.6px;"><span style="line-height: 19.6px; color: #666666; font-size: 14px;">Halo, </span><strong style="line-height: inherit;"><span style="line-height: 19.6px; color: #666666; font-size: 14px;">' . $name . '</span></strong></span></p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="font-size: 14px; line-height: 19.6px; color: #666666;">Kami mengirimkan email ini sebagai tanggapan atas permintaan reset password yang telah diajukan.</span></p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="font-size: 14px; line-height: 19.6px; color: #666666;">Password baru : <strong style="line-height: inherit;">' . $this->input->post('new_password1') . '</strong></span></p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;">&nbsp;</p>
        <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="color: #666666; font-size: 14px; line-height: 19.6px;">Silahkan login menggunakan password baru.</span></p>
          </div>
        
              </td>
            </tr>
          </tbody>
        </table>
        
        <table id="u_content_button_1" style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 0px 40px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <div class="v-text-align" align="center" style="line-height: inherit;text-align: center !important;">
          <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:' . 'Montserrat' . ',sans-serif;"><tr><td class="v-text-align" style="font-family:' . 'Montserrat' . ',sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:49px; v-text-anchor:middle; width:168px;" arcsize="41%" stroke="f" fillcolor="#06794f"><w:anchorlock/><center style="color:#FFFFFF;font-family:' . 'Montserrat' . ',sans-serif;"><![endif]-->
            <a href="#" target="_blank" style="box-sizing: border-box;display: inline-block;font-family: ' . 'Montserrat' . ',sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF;background-color: #06794f;border-radius: 20px;-webkit-border-radius: 20px;-moz-border-radius: 20px;width: auto;max-width: 100%;overflow-wrap: break-word;word-break: break-word;word-wrap: break-word;mso-border-alt: none;line-height: inherit;">
              <span class="v-line-height" style="display:block;padding:15px 40px;line-height:120%;"><span style="font-size: 16px; line-height: 19.2px;">Login SKP-KU!</span></span>
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
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 40px 40px 30px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
            <p style="font-size: 14px;line-height: 140%;text-align: center;margin: 0;"><span style="color: #888888; font-size: 14px; line-height: 19.6px;"><em style="line-height: inherit;"><span style="line-height: 19.6px; font-size: 14px;">Harap untuk tidak memberikan password baru ini kepada siapapun!</span></em></span><br style="line-height: inherit;"><span style="color: #888888; font-size: 14px; line-height: 19.6px;"><em style="line-height: inherit;"><span style="font-size: 16px; line-height: 22.4px;">&nbsp;</span></em></span></p>
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
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #06794f;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #06794f;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 25px 10px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
        <div align="center" style="line-height: inherit;">
          <div style="display: table;max-width: 140px;line-height: inherit;">
          <!--[if (mso)|(IE)]><table width="140" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:140px;"><tr><![endif]-->
          
            
            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px;line-height: inherit;color: #000000;">
              <tbody style="line-height: inherit;"><tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <a href=" https://instagram.com/bemfkuwks/" title="Instagram" target="_blank" style="line-height: inherit;color: #06794f;text-decoration: underline;">
                  <img src="https://skpku.bemfkuwks.com/assets/img/email/instagram_favicon.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px;line-height: inherit;color: #000000;">
              <tbody style="line-height: inherit;"><tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <a href="mailto:uwksbemfk@gmail.com" title="Email" target="_blank" style="line-height: inherit;color: #06794f;text-decoration: underline;">
                  <img src="https://skpku.bemfkuwks.com/assets/img/email/email_favicon.png" alt="Email" title="Email" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
                </a>
              </td></tr>
            </tbody></table>
            <!--[if (mso)|(IE)]></td><![endif]-->
            
            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px;line-height: inherit;color: #000000;">
              <tbody style="line-height: inherit;"><tr style="vertical-align: top;line-height: inherit;border-collapse: collapse;"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;line-height: inherit;color: #000000;">
                <a href="https://skpku.bemfkuwks.com/" title="Website" target="_blank" style="line-height: inherit;color: #06794f;text-decoration: underline;">
                  <img src="https://skpku.bemfkuwks.com/assets/img/email/website_favicon.png" alt="Website" title="Website" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;line-height: inherit;">
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
        
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 5px 10px 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%; text-align: center; word-wrap: break-word;">
            <p style="line-height: 140%;font-size: 14px;margin: 0;"><span style="font-size: 12px; line-height: 16.8px;"><span style="color: #ecf0f1; line-height: 16.8px; font-size: 12px;"><span style="line-height: 16.8px; font-size: 12px;">Copyright &copy; SKP-KU BEM FK UWKS 2021</span></span></span></p>
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
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: transparent;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="background-color: #06794f;width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="background-color: #06794f;width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 10px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 4px solid #06794f;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;line-height: inherit;color: #000000;">
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
        
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #1c103b;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #1c103b;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
          </div>
        </div>
        <!--[if (mso)|(IE)]></td><![endif]-->
              <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
            </div>
          </div>
        </div>
        
        
        
        <div class="u-row-container" style="padding: 0px;background-color: transparent;line-height: inherit;">
          <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 800px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;line-height: inherit;width: calc(100% - 40px) !important;">
            <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;line-height: inherit;">
              <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:800px;"><tr style="background-color: #f9f9f9;"><![endif]-->
              
        <!--[if (mso)|(IE)]><td align="center" width="800" style="width: 800px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
        <div class="u-col u-col-100" style="max-width: 320px;min-width: 800px;display: table-cell;vertical-align: top;line-height: inherit;width: 800px !important;">
          <div style="width: 100% !important;line-height: inherit;margin: 0 auto;">
          <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;line-height: inherit;"><!--<![endif]-->
          
        <table style="font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
          <tbody style="line-height: inherit;">
            <tr style="line-height: inherit;vertical-align: top;border-collapse: collapse;">
              <td style="overflow-wrap: break-word;word-break: break-word;padding: 0px 40px 30px 20px;font-family: ' . 'Montserrat' . ',sans-serif;line-height: inherit;color: #000000;vertical-align: top;border-collapse: collapse;" align="left">
                
          <div class="v-color v-text-align v-line-height" style="line-height: 140%; text-align: left; word-wrap: break-word;">
            
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
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('skpku@bemfkuwks.com', 'SKP-KU BEM FK UWKS');
        $this->email->to($email);
        $this->email->subject('SKP-KU Reset Password');
        $this->email->message($message);
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
