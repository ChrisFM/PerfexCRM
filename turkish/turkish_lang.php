<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Adı';
$lang['options']              = 'Seçenekler';
$lang['submit']               = 'Kaydet';
$lang['added_successfuly']    = '%s başarıyla eklendi.';
$lang['updated_successfuly']  = '%s başarıyla güncellendi';
$lang['edit']                 = 'Düzenle %s';
$lang['add_new']              = 'Yeni ekle %s';
$lang['deleted']              = '%s silindi';
$lang['problem_deleting']     = 'Problem siliniyor %s';
$lang['is_referenced']        = '%s ID si kullanılıyor.';
$lang['close']                = 'Kapat';
$lang['send']                 = 'Gönder';
$lang['cancel']               = 'İptal';
$lang['go_back']              = 'Geri Dön';
$lang['error_uploading_file'] = 'Dosya yüklenirken hata oluştu.';
$lang['load_more']            = 'Daha Fazla';
$lang['cant_delete_default']  = 'Varsayılan silinemiyor %s';

# Invoice General
$lang['invoice_status_paid']                = 'Ödendi';
$lang['invoice_status_unpaid']              = 'Ödenmedi';
$lang['invoice_status_overdue']             = 'Zamanı Geçti';
$lang['invoice_status_not_paid_completely'] = 'Kısmen Ödendi';

$lang['invoice_pdf_heading'] = 'FATURA';

$lang['invoice_table_item_heading']            = 'Ürün';
$lang['invoice_table_quantity_heading']        = 'Adet';
$lang['invoice_table_rate_heading']            = 'Fiyat';
$lang['invoice_table_tax_heading']             = 'Vergi';
$lang['invoice_table_amount_heading']          = 'Miktar';
$lang['invoice_subtotal']                      = 'Alt Toplam';
$lang['invoice_adjustment']                    = 'Fiyat Ayarlama (+-)';
$lang['invoice_total']                         = 'Toplam';


$lang['invoice_vat']                           = 'Vergi Numarası';
$lang['invoice_bill_to']                       = 'SAYIN:';
$lang['invoice_data_date']                     = 'Fatura Tarihi:';
$lang['invoice_data_duedate']                  = 'Bitiş Tarihi:';
$lang['invoice_received_payments']             = 'İşlemler';
$lang['invoice_no_payments_found']             = 'Bu fatura için ödeme bulunamadı';
$lang['invoice_note']                          = 'Not:';
$lang['invoice_payments_table_number_heading'] = 'Ödeme #';
$lang['invoice_payments_table_mode_heading']   = 'Ödeme Türü';
$lang['invoice_payments_table_date_heading']   = 'Tarih';
$lang['invoice_payments_table_amount_heading'] = 'Miktar';


# Announcements
$lang['announcement']                 = 'Duyuru';
$lang['announcement_lowercase']       = 'duyuru';
$lang['announcements']                = 'Duyurular';
$lang['announcements_lowercase']      = 'duyurular';
$lang['new_announcement']             = 'Yeni Duyuru';
$lang['announcement_name']            = 'Konu';
$lang['announcement_message']         = 'Mesaj';
$lang['announcement_show_to_staff']   = 'Personele Göster';
$lang['announcement_show_to_clients'] = 'Müşteriye Göster';
$lang['announcement_show_my_name']    = 'İsmimi Göster';

# Clients




$lang['clients']                               = 'Müşteriler';
$lang['client']                                = 'Müşteri';
$lang['new_client']                            = 'Yeni Müşteri';
$lang['client_lowercase']                      = 'müşteri';




$lang['client_delete_tooltip']                 = 'Tüm müşteri verileri silinecek! Sözleşmeler, talepler ve notlar. NOT: Eğer müşteriyle ilişkili fatura varsa silinemez. Faturayı başka bir müşteriyle ilişkilendirip, Fatura Numarasının korunmasını sağlayın.';
$lang['customer_delete_invoices_warning']      = 'Bu müşteri ile ilişkili fatura var! Bu müşteriyi silemezsiniz! Tüm faturaları başka bir müşteriyle ilişkilendirin ve tekrar silmeyi deneyin.';
$lang['client_firstname']                      = 'Adı';
$lang['client_lastname']                       = 'Soyadı';
$lang['client_email']                          = 'Email';
$lang['client_company']                        = 'Firma';
$lang['client_vat_number']                     = 'Vergi Numarası';
$lang['client_address']                        = 'Adres';
$lang['client_city']                           = 'Şehir';
$lang['client_postal_code']                    = 'Posta Kodu';
$lang['client_state']                          = 'İlçe';
$lang['client_password']                       = 'Parola';
$lang['client_password_change_populate_note']  = 'Not: Eğer bu alana bir parola girerseniz kullanıcının parolası değişecektir!';
$lang['client_password_last_changed']          = 'En Son Parola Değişimi:';
$lang['login_as_client']                       = 'Müşteri olarak Giriş';
$lang['client_invoices_tab']                   = 'Faturalar';
$lang['contracts_invoices_tab']                = 'Sözleşmeler';
$lang['contracts_tickets_tab']                 = 'Talepler';
$lang['contracts_notes_tab']                   = 'Notlar';
$lang['client_invoice_number_table_heading']   = 'Fatura No';
$lang['client_invoice_date_table_heading']     = 'Tarih';
$lang['client_invoice_due_date_table_heading'] = 'Son Ödeme Tarihi';
$lang['client_string_table_heading']           = 'Müşteri';
$lang['client_amount_table_heading']           = 'Miktar';
$lang['client_status_table_heading']           = 'Durum';
$lang['note_description']                      = 'Not Açıklaması';

$lang['client_string_contracts_table_heading']      = 'Müşteri';
$lang['client_start_date_contracts_table_heading']  = 'Başlangıç Tarihi';
$lang['client_end_date_contracts_table_heading']    = 'Bitiş Tarihi';
$lang['client_description_contracts_table_heading'] = 'Açıklama';
$lang['client_do_not_send_welcome_email']           = 'Hoşgeldiniz emaili gönderme';

$lang['clients_notes_table_description_heading'] = 'Açıklama';
$lang['clients_notes_table_addedfrom_heading']   = 'Ekleyen';
$lang['clients_notes_table_dateadded_heading']   = 'Eklenme Tarihi';

$lang['clients_list_full_name']   = 'Adı Soyadı';

$lang['clients_list_last_login']  = 'Son Girişi';


# Contracts
$lang['contracts']                = 'Sözleşmeler';
$lang['contract']                 = 'Sözleşme';
$lang['new_contract']             = 'Yeni Sözleşme';
$lang['contract_lowercase']       = 'sözleşme';
$lang['contract_start_date']      = 'Başlangıç Tarihi';
$lang['contract_end_date']        = 'Bitiş Tarihi';
$lang['contract_subject']         = 'Konu';
$lang['contract_description']     = 'Açıklama';
$lang['contract_subject_tooltip'] = 'Konu Müşteri tarafından görüntülenebilir';
$lang['contract_client_string']   = 'Müşteri';
$lang['contract_attach']          = 'Belge Ekle';

$lang['contract_list_client']     = 'Müşteri';
$lang['contract_list_subject']    = 'Konu';
$lang['contract_list_start_date'] = 'Başlangıç Tarihi';
$lang['contract_list_end_date']   = 'Bitiş Tarihi';

# Currencies
$lang['currencies']           = 'Para Birimleri';
$lang['currency']             = 'Para Birimi';
$lang['new_currency']         = 'Yeni Para Birimi';
$lang['currency_lowercase']   = 'para birimi';
$lang['base_currency_set']    = 'Varsayılan Para Biriminiz.';
$lang['make_base_currency']   = 'Varsayılan Para Birimi Yap';
$lang['base_currency_string'] = 'Varsayılan Para Birimi';

$lang['currency_list_name']   = 'Adı';
$lang['currency_list_symbol'] = 'Sembolü';


$lang['currency_add_edit_description'] = 'Para Birimi Adı';
$lang['currency_add_edit_rate']        = 'Sembolü';

$lang['currency_edit_heading'] = 'Para Birimini Düzenle';
$lang['currency_add_heading']  = 'Yeni Para Birimi Ekle';


# Department
$lang['departments']          = 'Departmanlar';
$lang['department']           = 'Departman';
$lang['new_department']       = 'Yeni Departman';
$lang['department_lowercase'] = 'departman';

$lang['department_name']             = 'Departman Adı';
$lang['department_email']            = 'Departman Email Adresi';
$lang['department_hide_from_client'] = 'Müşteriden Gizlensin mi?';
$lang['department_list_name']        = 'Adı';

# Email Templates
$lang['email_templates']                        = 'Email Şablonları';
$lang['email_template']                         = 'Email Şablonu';
$lang['email_template_lowercase']               = 'email şablonu';
$lang['email_templates_lowercase']              = 'email şablonları';
$lang['email_template_ticket_fields_heading']   = 'Talepler';
$lang['email_template_invoices_fields_heading'] = 'Faturalar';
$lang['email_template_clients_fields_heading']  = 'Müşteriler';



$lang['template_name']                                      = 'Şablon Adı';
$lang['template_subject']                                   = 'Konu';
$lang['template_fromname']                                  = 'Kimden / Adı';
$lang['template_fromemail']                                 = 'Kimden / Email';
$lang['send_as_plain_text']                                 = 'Düzyazı olarak gönder';
$lang['email_template_disabed']                             = 'Pasif';
$lang['email_template_email_message']                       = 'Email mesajı';
$lang['available_merge_fields']                             = 'Kullanılabilen Özel Alanlar';
# Home
$lang['dashboard_string']                                   = 'Kontrol Paneli';
$lang['home_latest_todos']                                  = 'Yapılacaklar Listesi';


$lang['home_no_latest_todos']                               = 'Yapılacaklar Listesi Boş. Çalışmıyorsun galiba =)';
$lang['home_latest_finished_todos']                         = 'Bitmiş İşler Listesi';
$lang['home_no_finished_todos_found']                       = 'Bitmiş İşler Listesi Boş. Aferin ;)';
$lang['home_todo_heading']                                  = 'Yapılacak İşler';
$lang['home_tickets_awaiting_reply_by_department']          = 'Departman Bazında Yanıt Bekleyen Talepler';
$lang['home_tickets_awaiting_reply_by_status']              = 'Talep Durumlarına Göre Dağılım';
$lang['home_this_week_events']                              = 'Bu haftanın etkinlikleri';
$lang['home_upcoming_events_next_week']                     = 'Yaklaşan Etkinlikler - Gelecek Hafta';
$lang['home_event_added_by']                                = 'Etkinlik eklendi';
$lang['home_public_event']                                  = 'Halka Açık Etkinlik';
$lang['home_weekly_payment_records']                        = 'Haftalık Ödeme Kayıtları';
$lang['home_weekend_ticket_opening_statistics']             = 'Haftalık Talep Açılma İstatistikleri';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Belge ya da fikir paylaşın..';




$lang['new_post']                                           = 'Yayınla';
$lang['newsfeed_upload_tooltip']                            = 'İpucu:Dosyaları yüklemek için Sürükle ve Bırak';
$lang['newsfeed_all_departments']                           = 'Tüm Bölümlere';
$lang['newsfeed_pin_post']                                  = 'Yazıyı Sabitle';
$lang['newsfeed_unpin_post']                                = 'Yazıyı Sabitleme';
$lang['newsfeed_delete_post']                               = 'Sil';
$lang['newsfeed_published_post']                            = 'Yayınlandı';
$lang['newsfeed_you_like_this']                             = 'Beğendiniz';
$lang['newsfeed_like_this']                                 = 'Beğen';
$lang['newsfeed_one_other']                                 = 'Diğer';
$lang['newsfeed_you']                                       = 'Sen';
$lang['newsfeed_and']                                       = 've';
$lang['newsfeed_you_and']                                   = 'Sen ve';
$lang['newsfeed_like_this_saying']                          = 'Beğendiniz';
$lang['newsfeed_unlike_this_saying']                        = 'Beğenme';
$lang['newsfeed_show_more_comments']                        = 'Daha fazla yorum görüntüleme';
$lang['comment_this_post_placeholder']                      = 'Bu mesajı yorumla..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Bu mesajı beğenenler';
$lang['newsfeed_comment_likes_modal_heading']               = 'Bu yorumu beğenenler';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Bu mesajı sadece takip edenler görebilir: %s';
# Invoice Items
$lang['invoice_items']                                      = 'Ürünler / Hizmetler';
$lang['invoice_item']                                       = 'Ürün / Hizmet';
$lang['new_invoice_item']                                   = 'Yeni Ürün / Hizmet';
$lang['invoice_item_lowercase']                             = 'ürün / hizmet';

$lang['invoice_items_list_description'] = 'Açıklama';
$lang['invoice_items_list_rate']        = 'Birim Fiyatı';
$lang['invoice_items_list_tax']         = 'Vergi';

$lang['invoice_item_add_edit_description'] = 'Açıklama';
$lang['invoice_item_add_edit_rate']        = 'Birim Fiyatı';
$lang['invoice_item_add_edit_tax']         = 'Vergi';
$lang['invoice_item_add_edit_tax_select']  = 'Vergi Seçin';

$lang['invoice_item_edit_heading'] = 'Ürün / Hizmet Düzenle';
$lang['invoice_item_add_heading']  = 'Yeni Ürün / Hizmet Ekle';

# Invoices


$lang['invoices']                       = 'Faturalar';
$lang['invoice']                        = 'Fatura';
$lang['invoice_lowercase']              = 'fatura';
$lang['create_new_invoice']             = 'Yeni Fatura Oluştur';
$lang['view_invoice']                   = 'Fatura Görüntüle';

$lang['invoice_payment_recorded']       = 'Fatura Ödemesi Kaydedildi';
$lang['invoice_payment_record_failed']  = 'Fatura Ödemesi Kaydedilemedi. Hata Oluştu';
$lang['invoice_sent_to_client_success'] = 'Fatura başarılı bir şekilde Müşteriye gönderildi';
$lang['invoice_sent_to_client_fail']    = 'Fatura gönderilirken hata oluştu.';
$lang['invoice_reminder_send_problem']  = 'fatura zaman aşımı hatırlatıcı gönderilirken hata oluştu';
$lang['invoice_overdue_reminder_sent']  = 'Invoice Overdue Hatırlatıcı Successfully Sent';

$lang['invoice_details']              = 'Fatura Detayları';
$lang['invoice_view']                 = 'Fatura Görüntüle';
$lang['invoice_select_customer']      = 'Müşteri';
$lang['invoice_add_edit_number']      = 'Fatura Numarası';
$lang['invoice_add_edit_date']        = 'Fatura Tarihi';
$lang['invoice_add_edit_duedate']     = 'Son Ödeme Tarihi';
$lang['invoice_add_edit_currency']    = 'Para Birimi';
$lang['invoice_add_edit_client_note'] = 'Müşteri notu';
$lang['invoice_add_edit_admin_note']  = 'Yönetici Notu';

$lang['invoice_add_edit_search_item']  = 'Ürün / Hizmet Ara';
$lang['invoices_toggle_table_tooltip'] = 'Tabloyu Genişlet';





$lang['edit_invoice_tooltip']                   = 'Faturayı Düzenle';
$lang['delete_invoice_tooltip']                 = 'Faturayı Sil. Not: Bu fatura ile ilişkili tüm ödemeler silinecek.';
$lang['invoice_sent_to_email_tooltip']          = 'Email Gönder';
$lang['invoice_already_send_to_client_tooltip'] = 'Bu fatura gönderildi. %s';
$lang['send_overdue_notice_tooltip']            = 'Gecikmiş Ödeme Bildirimi Gönder';
$lang['invoice_view_activity_tooltip']          = 'Aktivite Logları';
$lang['invoice_record_payment']                 = 'Ödeme Ekle';

$lang['invoice_send_to_client_modal_heading']    = 'Müşteriye Fatura Gönder';
$lang['invoice_send_to_client_attach_pdf']       = 'Faturayı PDF olarak ekle';
$lang['invoice_send_to_client_preview_template'] = 'Email Şablonunu Önizle';

$lang['invoice_dt_table_heading_number']  = 'Fatura No';
$lang['invoice_dt_table_heading_date']    = 'Tarih';
$lang['invoice_dt_table_heading_client']  = 'Müşteri';
$lang['invoice_dt_table_heading_duedate'] = 'Son Ödeme Tarihi';
$lang['invoice_dt_table_heading_amount']  = 'Miktar';
$lang['invoice_dt_table_heading_status']  = 'Durum';

$lang['record_payment_for_invoice']              = 'Ödeme kaydı';
$lang['record_payment_amount_received']          = 'Ödeme Miktarı Alındı';
$lang['record_payment_date']                     = 'Ödeme Tarihi';
$lang['record_payment_leave_note']               = 'Not Bırak';
$lang['invoice_payments_received']               = 'Ödeme alındı';
$lang['invoice_record_payment_note_placeholder'] = 'Yönetici Notu';


$lang['no_payments_found']                       = 'Bu Fatura için Ödeme Bulunamadı';
$lang['invoice_email_link_text']                 = 'Faturayı Görüntüle';

# Payments




$lang['payments']                             = 'Ödemeler';
$lang['payment']                              = 'Ödeme';
$lang['payment_lowercase']                    = 'ödeme';
$lang['payments_table_number_heading']        = 'Ödeme #';
$lang['payments_table_invoicenumber_heading'] = 'Fatura #';
$lang['payments_table_mode_heading']          = 'Ödeme Türü';
$lang['payments_table_date_heading']          = 'Tarih';
$lang['payments_table_amount_heading']        = 'Miktar';
$lang['payments_table_client_heading']        = 'Müşteri';
$lang['payment_not_exists']                   = 'Ödeme oluşturulamadı';

$lang['payment_edit_for_invoice']     = 'Fatura için Ödeme';
$lang['payment_edit_amount_received'] = 'Miktar Alındı';
$lang['payment_edit_date']            = 'Ödeme Tarihi';
$lang['payment_edit_lave_note']       = 'Not Bırak';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Konu';
$lang['kb_article_add_edit_group']   = 'Grup';
$lang['kb_string']                   = 'Bilgi Merkezi';
$lang['kb_article']                  = 'Makale';
$lang['kb_article_lowercase']        = 'makale';
$lang['kb_article_new_article']      = 'Yeni Makale';
$lang['kb_article_disabled']         = 'Devre Dışı';
$lang['kb_article_description']      = 'Makale Açıklaması';

$lang['kb_table']                      = 'Liste';
$lang['kb_no_articles_found']          = 'Bilgi Merkezinde Makale Bulunamadı';
$lang['kb_dt_article_name']            = 'Makale Adı';
$lang['kb_dt_group_name']              = 'Grup';
$lang['new_group']                     = 'Yeni Grup';
$lang['kb_group_add_edit_name']        = 'Grup Adı';
$lang['kb_group_add_edit_description'] = 'Kısa Açıklama';
$lang['kb_group_add_edit_disabled']    = 'Devre Dışı';
$lang['kb_group_add_edit_note']        = 'Not: All articles in this group will be hidden if disabled is checked';
$lang['group_table_name_heading']      = 'Adı';
$lang['group_table_isactive_heading']  = 'Aktif';
$lang['kb_no_groups_found']            = 'Bilgi Merkezi Grubu Bulunamadı';

# Mail Lists
$lang['mail_lists']                           = 'Mail Listeleri';
$lang['mail_list']                            = 'Mail Listesi';
$lang['new_mail_list']                        = 'Yeni Mail Listesi';
$lang['mail_list_lowercase']                  = 'mail listesi';
$lang['custom_field_deleted_success']         = 'Özel alan silindi';
$lang['custom_field_deleted_fail']            = 'Özel Alan silinirken hata.';
$lang['email_removed_from_list']              = 'Email Listeden silindi';
$lang['email_remove_fail']                    = 'Email Listeden silindi';
$lang['staff_mail_lists']                     = 'Personel Mail Listesi';
$lang['clients_mail_lists']                   = 'Müşteri Mail Listesi';
$lang['mail_list_total_imported']             = 'İçeri Aktarılan Email: %s';
$lang['mail_list_total_duplicate']            = 'Yinelenen Email Sayısı: %s';
$lang['mail_list_total_failed_to_insert']     = 'Eklenmeyen Emailler : %s';
$lang['mail_list_total_invalid']              = 'Hatalı Email Adresi: %s';
$lang['cant_edit_mail_list']                  = 'Bu listeyi düzenleyemezsiniz! Bu liste otomatik olarak oluşturuluyor.';
$lang['mail_list_add_edit_name']              = 'Mail Listesi Adı';
$lang['mail_list_add_edit_customfield']       = 'Özel Alan Ekle';
$lang['mail_lists_viewing_emails']            = 'Listedeki Email Adresleri Görüntüleniyor';
$lang['mail_lists_view_email_email_heading']  = 'Email';
$lang['mail_lists_view_email_date_heading']   = 'Tarih Eklendi';
$lang['add_new_email_to']                     = '%s Listesine Yeni Email Ekle';
$lang['import_emails_to']                     = '%s Listesine Email Aktar';
$lang['mail_list_new_email_edit_add_label']   = 'Email';
$lang['mail_list_import_file']                = 'Dosya İçe Aktar';
$lang['mail_list_available_custom_fields']    = 'Kullanılabilir Özel Alanlar';
$lang['submit_import_emails']                 = 'Emailleri İçe Aktar';
$lang['btn_import_emails']                    = 'Emailleri İçe Aktar (Excel)';
$lang['btn_add_email_to_list']                = 'Bu Adrese Email Ekle';
$lang['mail_lists_dt_list_name']              = 'Liste Adı';
$lang['mail_lists_dt_datecreated']            = 'Oluşturma Tarihi';
$lang['mail_lists_dt_creator']                = 'Oluşturan';
$lang['email_added_to_mail_list_successfuly'] = 'Email listeye eklendi';
$lang['email_is_duplicate_mail_list']         = 'Email bu listede var.';

# Media
$lang['media_files']            = 'Dosyalar';

# Payment modes
$lang['new_payment_mode']       = 'Yeni Ödeme Türü';
$lang['payment_modes']          = 'Ödeme Türleri';
$lang['payment_mode']           = 'Ödeme Türü';
$lang['payment_mode_lowercase'] = 'ödeme türü';
$lang['payment_modes_dt_name']  = 'Ödeme Türü Adı';

$lang['payment_mode_add_edit_name'] = 'Ödeme Türü Adı';
$lang['payment_mode_edit_heading']  = 'Ödeme Türünü düzenle';
$lang['payment_mode_add_heading']   = 'Yeni Ödeme Türü Ekle';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Yeni Öntanımlı Yanıt';
$lang['predefined_replies']                = 'Öntanımlı Yanıt';
$lang['predefined_reply']                  = 'Öntanımlı Yanıt';
$lang['predefined_reply_lowercase']        = 'öntanımlı yanıt';
$lang['predifined_replies_dt_name']        = 'Öntanımlı Yanıt Adı';
$lang['predifined_reply_add_edit_name']    = 'Öntanımlı Yanıt';
$lang['predifined_reply_add_edit_content'] = 'İçeriği Yanıtla';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Yeni Öncelik';
$lang['ticket_priorities']             = 'Talep Öncelikleri';
$lang['ticket_priority']               = 'Talep Önceliği';
$lang['ticket_priority_lowercase']     = 'talep önceliği';
$lang['no_ticket_priorities_found']    = 'Talep Önceliği Bulunamadı';
$lang['ticket_priority_dt_name']       = 'Talep Önceliği Adı';
$lang['ticket_priority_add_edit_name'] = 'Öncelik Adı';

# Reports


$lang['kb_reports']                         = 'Bilgi Merkezi Makale Raporları';
$lang['sales_reports']                      = 'Satış Raporları';
$lang['reports_choose_kb_group']            = 'Grup Seçin';
$lang['reports_sales_select_report_type']   = 'Rapor Türünü Seçin';
$lang['report_kb_yes']                      = 'Evet';
$lang['report_kb_no']                       = 'Hayır';
$lang['report_kb_no_votes']                 = 'Henüz oylama yok';
$lang['report_this_week_leads_conversions'] = 'Bu Haftanın Fırsat Dönüşümleri';
$lang['report_leads_sources_conversions']   = 'Kaynak Dönüşümleri';
$lang['report_leads_monthly_conversions']   = 'Aylık';
$lang['sales_report_heading']               = 'Satış Raporu';
$lang['report_sales_type_income']           = 'Toplam Gelir';

$lang['report_sales_type_customer']                    = 'Müşteri Raporu';
$lang['report_sales_base_currency_select_explanation'] = 'Para Birimi Seçmelisiniz! Yabancı Para Birimli Faturalarınız var!';
$lang['report_sales_from_date']                        = 'Bu Tarihten';
$lang['report_sales_to_date']                          = 'Bu Tarihe';


$lang['report_sales_months_all_time']      = 'Tüm Zamanlar';
$lang['report_sales_months_six_months']    = 'Son 6 ay';
$lang['report_sales_months_twelve_months'] = 'Son 12 ay';
$lang['report_sales_months_custom']        = 'Özel';
$lang['reports_sales_generated_report']    = 'Oluşturulan Rapor';



$lang['reports_sales_dt_customers_client']                = 'Müşteri';
$lang['reports_sales_dt_customers_total_invoices']        = 'Tüm Faturalar';
$lang['reports_sales_dt_items_customers_amount']          = 'Miktar';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Vergi Eklenmiş Miktar';

# Roles
$lang['new_role']           = 'Yeni Rol';
$lang['all_roles']          = 'Rol Ekle';
$lang['roles']              = 'Personel Rolleri';
$lang['role']               = 'Rol';
$lang['role_lowercase']     = 'rol';
$lang['roles_total_users']  = 'Toplam Kullanıcı: ';
$lang['roles_dt_name']      = 'Rol Adı';
$lang['role_add_edit_name'] = 'Rol Adı';

# Service
$lang['new_service']           = 'Yeni Hizmet';
$lang['services']              = 'Hizmetler';
$lang['service']               = 'Hizmet';
$lang['service_lowercase']     = 'hizmet';
$lang['services_dt_name']      = 'Hizmet Adı';
$lang['service_add_edit_name'] = 'Hizmet Adı';

# Settings
$lang['settings']                     = 'Ayarlar';
$lang['settings_updated']             = 'Ayarlar Güncellendi';
$lang['settings_save']                = 'Ayarları Kaydet';
$lang['settings_group_general']       = 'Genel';
$lang['settings_group_localization']  = 'Yerelleştirme';
$lang['settings_group_tickets']       = 'Talepler';
$lang['settings_group_sales']         = 'Finans';
$lang['settings_group_email']         = 'Email';
$lang['settings_group_clients']       = 'Müşteriler';
$lang['settings_group_newsfeed']      = 'Haber Gönderimleri';
$lang['settings_group_cronjob']       = 'Cron Job';




$lang['settings_yes']                                        = 'Evet';
$lang['settings_no']                                         = 'Hayır';
$lang['settings_clients_default_theme']                      = 'Varsayılan Müşteri Şablonu';
$lang['settings_clients_allow_registration']                 = 'Müşterilerin Kayıt Olmasına İzin Ver';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Kayıt olmadan Bilgi Merkezinin görüntülenmesine izin ver';

$lang['settings_cron_send_overdue_reminder']                 = 'Zamanı Geçen Faturalar için hatırlatma gönder';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Cron Job ile Fatura durumu gecikmiş olanları müşteriye email gönder';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Otomatik Hatırlatıcı Gönder (Gün)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Otomatik Tekrar Hatırlatıcı Gönder (Gün)';

$lang['settings_email_host']      = 'SMTP Sunucu';
$lang['settings_email_port']      = 'SMTP Portu';
$lang['settings_email']           = 'SMTP Email';
$lang['settings_email_password']  = 'SMTP Parolası';
$lang['settings_email_charset']   = 'Email Karakter Seti';
$lang['settings_email_signature'] = 'Email İmzası';

$lang['settings_general_company_logo']                = 'Firma Logosu';
$lang['settings_general_company_logo_tooltip']        = 'Önerilen Ölçüler: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Firma Logosunu Kaldır';
$lang['settings_general_company_name']                = 'Firma Adı';
$lang['settings_general_company_main_domain']         = 'Firma Alanadı';
$lang['settings_general_use_knowledgebase']           = 'Bilgi Merkezini Aktif Et';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Eğer bu seçeneği seçerseniz Bilgi Merkezi Müşteri Panelinde görünür olur';
$lang['settings_general_tables_limit']                = 'Tablo Sayfalama Limiti';
$lang['settings_general_default_staff_role']          = 'Varsayılan Personel Rolü';
$lang['settings_general_default_staff_role_tooltip']  = 'Yeni Personel eklediğinizde bu rol varsayılan olarak seçilecektir.';

$lang['settings_localization_date_format']      = 'Tarih Formatı';
$lang['settings_localization_default_timezone'] = 'Varsayılan Zaman Bölgesi';
$lang['settings_localization_default_language'] = 'Varsayılan Dil';


$lang['settings_newsfeed_max_file_upload_post']    = 'Bu yazıya Eklenecek Maksimum Dosya';
$lang['settings_newsfeed_max_file_size']           = 'Maksimum Dosya Boyutu (MB)';

$lang['settings_reminders_contracts']         = 'Sözleşme Bitimi Hatırlatıcısı';
$lang['settings_reminders_contracts_tooltip'] = 'Expiration reminder notification in days';

$lang['settings_tickets_use_services']             = 'Hizmetleri Kullan';
$lang['settings_tickets_max_attachments']          = 'En Fazla Talep Eki';
$lang['settings_tickets_allow_departments_access'] = 'Personelin Departmanına Atılan Taleplere Erişmesine İzin Ver ';
$lang['settings_tickets_allowed_file_extensions']  = 'İzin Verilen Dosya Ek Uzantıları';

$lang['settings_sales_general']                                    = 'Genel';
$lang['settings_sales_general_note']                               = 'Genel Ayarlar';
$lang['settings_sales_invoice_prefix']                             = 'Fatura Numarası Öneki';
$lang['settings_sales_decimal_separator']                          = 'Ondalık Ayracı';
$lang['settings_sales_thousand_separator']                         = 'Binlik Ayracı';
$lang['settings_sales_currency_placement']                         = 'Para Birimi Yerleşimi';
$lang['settings_sales_currency_placement_before']                  = 'Miktardan Önce';
$lang['settings_sales_currency_placement_after']                   = 'Miktardan Sonra';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Faturayı Görüntülemek için Giriş Yapma Zorunluluğu';
$lang['settings_sales_next_invoice_number']                        = 'Sonraki Fatura Numarası';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Eğer baştan başlamasını istiyorsanız bu alanı 1 olarak ayarlayın';
$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Decrement invoice number on delete';
$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Do you want to decrement the invoice number when the last invoice is deleted? Ex. If is set this option to YES and before invoice delete the next invoice number is 15 the next invoice number will decrement to 14. If is set to NO the number will remain to 15.  If you have setup delete only on last invoice to NO you should set this option to NO too to keep the next invoice number not decremented.';
$lang['settings_sales_invoice_number_format']                      = 'Fatura Numarası Formatı';
$lang['settings_sales_invoice_number_format_year_based']           = 'Yıl Tabanlı';
$lang['settings_sales_invoice_number_format_number_based']         = 'Numara Tabanlı (000001)';

$lang['settings_sales_company_info_note']    = 'Bu bilgi Fatura ya da Proforma Ödemelerinde görüntülenecektir. Firma Bilgileri olması gereklidir.';
$lang['settings_sales_company_name']         = 'Firma Adı';
$lang['settings_sales_address']              = 'Adres';
$lang['settings_sales_city']                 = 'Şehir';
$lang['settings_sales_country_code']         = 'Ülke Code';
$lang['settings_sales_postal_code']          = 'Posta Kodu';
$lang['settings_sales_phonenumber']          = 'Telefon';

# Leads
$lang['new_lead']       = 'Yeni Fırsat';
$lang['leads']          = 'Fırsatlar';
$lang['lead']           = 'Fırsat';
$lang['lead_lowercase'] = 'fırsat';
$lang['leads_all']      = 'All';

$lang['leads_canban_notes']  = 'Notlar: %s';
$lang['leads_canban_source'] = 'Kaynak: %s';

$lang['lead_new_source']            = 'Yeni Kaynak';
$lang['lead_sources']               = 'Fırsatın Kaynağı';
$lang['lead_source']                = 'Fırsatın Kaynağı';
$lang['lead_source_lowercase']      = 'fırsatın kaynağı';
$lang['leads_sources_not_found']    = 'Fırsatın Kaynağı bulunamadı';
$lang['leads_sources_table_name']   = 'Kaynak Adı';
$lang['leads_source_add_edit_name'] = 'Kaynak Adı';

$lang['lead_new_status']         = 'Yeni Fırsat Durumu';
$lang['lead_statuss']            = 'Fırsat Durumu';
$lang['lead_status']             = 'Fırsat Durumu';
$lang['lead_status_lowercase']   = 'fırsat durumu';
$lang['leads_status_table_name'] = 'Durum Adı';

$lang['leads_status_add_edit_name']  = 'Durum Adı';
$lang['leads_status_add_edit_order'] = 'Sıra';

$lang['lead_statuses_not_found']      = 'Fırsatın durumu bulunamadı';
$lang['leads_search']                 = 'Fırsatları Ara';

$lang['leads_table_total'] = 'Tüm Fırsatlar: %s';

$lang['leads_dt_name']         = 'Adı';
$lang['leads_dt_email']        = 'Email Adresi';
$lang['leads_dt_phonenumber']  = 'Telefonu';
$lang['leads_dt_assigned']     = 'Atanan';
$lang['leads_dt_status']       = 'Durum';
$lang['leads_dt_last_contact'] = 'Son İletişim';

$lang['lead_add_edit_name']                 = 'Adı';
$lang['lead_add_edit_email']                = 'Email Adresi';
$lang['lead_add_edit_phonenumber']          = 'Telefonu';
$lang['lead_add_edit_source']               = 'Kaynağı';
$lang['lead_add_edit_status']               = 'Fırsatın Durumu';
$lang['lead_add_edit_assigned']             = 'Atanan Kişi';
$lang['lead_add_edit_datecontacted']        = 'İletişim Tarihi';
$lang['lead_add_edit_contected_today']      = 'Bugün İletişim  Kuruldu';
$lang['lead_add_edit_activity']             = 'Aktivite Kayıtları';
$lang['lead_add_edit_notes']                = 'Notlar';
$lang['lead_add_edit_add_note']             = 'Not Ekle';
$lang['lead_not_contacted']                 = 'Bu fırsatla iletişim kurmadım.';
$lang['lead_add_edit_contected_this_lead']  = 'Bu Fırsat ile İletişim halindeyim';
$lang['lead_confirmation_canban_contacted'] = 'Bu Fırsat ile İletişim Halinde misin?';

# Misc
$lang['access_denied']              = 'Erişim Engellendi';


$lang['prev']                       = 'Önceki';
$lang['next']                       = 'Sonraki';

# Datatables
$lang['dt_paginate_first']          = 'Birinci';
$lang['dt_paginate_last']           = 'Son';
$lang['dt_paginate_next']           = 'Sonraki';
$lang['dt_paginate_previous']       = 'Önceki';
$lang['dt_empty_table']             = 'Kayıt bulunamadı';
$lang['dt_search']                  = 'Ara:';
$lang['dt_zero_records']            = 'Kayıt bulunamadı';
$lang['dt_loading_records']         = 'Yükleniyor...';
$lang['dt_length_menu']             = '_MENU_ Kayıtlarını Göster';
$lang['dt_info_filtered']           = '(filtered from _MAX_ total {0})';
$lang['dt_info_empty']              = 'Gösteriliyor 0 - 0 - 0 {0}';
$lang['dt_info']                    = 'Gösteriliyor _START_ to _END_ of _TOTAL_ {0}';
$lang['dt_empty_table']             = 'Kayıt bulunamadı';
$lang['dt_sort_ascending']          = 'artan sıralamayı etkinleştir';
$lang['dt_sort_descending']         = 'azalan sıralamayı etkinleştir';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s gecikmiş fatura hatırlatıcı gönder';

# Weekdays
$lang['wd_monday']    = 'Pazartesi';
$lang['wd_tuesday']   = 'Salı';
$lang['wd_thursday']  = 'Perşembe';
$lang['wd_wednesday'] = 'Çarşamba';
$lang['wd_friday']    = 'Cuma';
$lang['wd_saturday']  = 'Cumartesi';
$lang['wd_sunday']    = 'Pazar';

# Admin Left Sidebar
$lang['als_dashboard'] = 'Kontrol Paneli';
$lang['als_clients']   = 'Müşteriler';
$lang['als_leads']     = 'Fırsatlar';

$lang['als_contracts'] = 'Sözleşmeler';

$lang['als_all_tickets'] = 'Tüm Talepler';
$lang['als_sales']       = 'Satışlar';

$lang['als_staff'] = 'Personel';
$lang['als_tasks'] = 'Görevler';
$lang['als_kb']    = 'Bilgi Merkezi';

$lang['als_surveys']               = 'Anketler';
$lang['als_media']                 = 'Medya';
$lang['als_reports']               = 'Raporlar';
$lang['als_reports_sales_submenu'] = 'Satışlar';
$lang['als_reports_leads_submenu'] = 'Fırsatlar';
$lang['als_kb_articles_submenu']   = 'Bilgi Merkezi';
$lang['als_utilities']             = 'Uygulamalar';
$lang['als_announcements_submenu'] = 'Duyurular';
$lang['als_mail_lists_submenu']    = 'Mail Listeleri';
$lang['als_calendar_submenu']      = 'Takvim';
$lang['als_activity_log_submenu']  = 'Aktivite Logları';

# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Talepler';
$lang['acs_ticket_priority_submenu']           = 'Talep Önceliği';
$lang['acs_ticket_statuses_submenu']           = 'Talep Durumları';
$lang['acs_ticket_predefined_replies_submenu'] = 'Öntanımlı Yanıtlar';
$lang['acs_ticket_services_submenu']           = 'Hizmetler';
$lang['acs_departments']                       = 'Departmanlar';
$lang['acs_leads']                             = 'Fırsatlar';
$lang['acs_leads_sources_submenu']             = 'Kaynaklar';
$lang['acs_leads_statuses_submenu']            = 'Durumlar';
$lang['acs_sales_taxes_submenu']               = 'Vergi Oranları';
$lang['acs_sales_currencies_submenu']          = 'Para Birimleri';
$lang['acs_sales_payment_modes_submenu']       = 'Ödeme Türleri';
$lang['acs_email_templates']                   = 'Email Şablonları';
$lang['acs_roles']                             = 'Roller';
$lang['acs_settings']                          = 'Ayarlar';

# Tickets






$lang['new_ticket']                                         = 'Yeni Talep Oluştur';
$lang['tickets']                                            = 'Talepler';
$lang['ticket']                                             = 'Talep';
$lang['ticket_lowercase']                                   = 'talep';
$lang['support_tickets']                                    = 'Talepler';
$lang['support_ticket']                                     = 'Talep';
$lang['ticket_settings_to']                                 = 'Kime';
$lang['ticket_settings_email']                              = 'Email adresi';
$lang['ticket_settings_departments']                        = 'Bölüm';
$lang['ticket_settings_service']                            = 'Hizmet';
$lang['ticket_settings_priority']                           = 'Öncelik';
$lang['ticket_settings_subject']                            = 'Konu';
$lang['ticket_settings_assign_to']                          = 'Talebi Ata (Varsayılan mevcut kullanıcıya)';
$lang['ticket_settings_assign_to_you']                      = 'Siz';
$lang['ticket_settings_select_client']                      = 'Müşteri Seç';


$lang['ticket_add_body']                                    = 'Talebin Açıklaması';
$lang['ticket_add_attachments']                             = 'Dosyalar';
$lang['ticket_no_reply_yet']                                = 'Henüz Yanıtlanmadı';
$lang['new_ticket_added_succesfuly']                        = 'Talep #%s başarıyla oluşturuldu';
$lang['replied_to_ticket_succesfuly']                       = 'Talep #% cevaplandı';
$lang['ticket_settings_updated_successfuly']                = 'Talep ayarları başarıyla güncellendi';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = 'Talep ayarları güncellendi - %s Departmanına atandı';
$lang['ticket_dt_subject']                                  = 'Konu';
$lang['ticket_dt_department']                               = 'Bölüm';
$lang['ticket_dt_service']                                  = 'Hizmet';
$lang['ticket_dt_submitter']                                = 'Müşteri';
$lang['ticket_dt_status']                                   = 'Durum';
$lang['ticket_dt_priority']                                 = 'Öncelik';
$lang['ticket_dt_last_reply']                               = 'Son Yanıtlama';

$lang['ticket_single_add_reply']                  = 'Yanıt Ekle';
$lang['ticket_single_add_note']                   = 'Not Ekle';
$lang['ticket_single_other_user_tickets']         = 'Diğer Talepler';
$lang['ticket_single_settings']                   = 'Ayarlar';
$lang['ticket_single_priority']                   = 'Öncelik: %s';
$lang['ticket_single_last_reply']                 = 'Son Yanıtlama: %s';
$lang['ticket_single_change_status_top']          = 'Durum Değiştir';
$lang['ticket_single_ticket_note_by']             = 'Not Ekleyen: %s';
$lang['ticket_single_note_added']                 = 'Not Eklendi: %s';
$lang['ticket_single_change_status']              = 'Durum Değiştir';
$lang['ticket_single_assign_to_me_on_update']     = 'Bu talebi otomatik olarak bana ata';
$lang['ticket_single_insert_predefined_reply']    = 'Ön Tanımlı Yanıt Ekle';
$lang['ticket_single_insert_knowledge_base_link'] = 'Bilgi Merkezi Makale Linki Ekle';
$lang['ticket_single_attachments']                = 'Ekler';
$lang['ticket_single_add_response']               = 'Cevap Ekle';
$lang['ticket_single_note_heading']               = 'Not';
$lang['ticket_single_add_note']                   = 'Not Ekle';
$lang['ticket_settings_none_assigned']            = 'Hiçbiri';
$lang['ticket_status_changed_successfuly']        = 'Talep Durumu Değişti';
$lang['ticket_status_changed_fail']               = 'Talep Durumu Değiştirilirken Hata Oluştu';

$lang['ticket_staff_string']                    = 'Ekip Üyesi';
$lang['ticket_client_string']                   = 'Müşteri';
$lang['ticket_posted']                          = 'Yanıtlandı: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Ön Tanımlı Yanıt Ekle';
$lang['ticket_kb_link_heading']                 = 'Bilgi Merkezi Makale Linki Ekle';
$lang['ticket_access_by_department_denied']     = 'Bu talebe erişme yetkiniz yok. Bu talep atanmadığınız bir departmana ait.';

# Staff
$lang['new_staff']                       = 'Yeni Personel';
$lang['staff_members']                   = 'Personel';
$lang['staff_member']                    = 'Personel';
$lang['staff_member_lowercase']          = 'personel';
$lang['staff_profile_updated']           = 'Profiliniz Güncellendi';
$lang['staff_old_password_incorect']     = 'Eski Parolanız Hatalı';
$lang['staff_password_changed']          = 'Parolanız değişti';
$lang['staff_problem_changing_password'] = 'Parolanız değiştirilirken hata oluştu';
$lang['staff_profile_string']            = 'Profil';

$lang['staff_cant_remove_main_admin']          = 'Yöneticiyi kaldıramazsın.';
$lang['staff_cant_remove_yourself_from_admin'] = 'Kendinden Yönetici rolünü kaldıramazsın';

$lang['staff_dt_name']       = 'Adı Soyadı';
$lang['staff_dt_email']      = 'Email Adresi';
$lang['staff_dt_last_Login'] = 'Son Giriş';
$lang['staff_dt_active']     = 'Aktif';

$lang['staff_add_edit_firstname']             = 'Adı';
$lang['staff_add_edit_lastname']              = 'Soyadı';
$lang['staff_add_edit_email']                 = 'Email Adresi';
$lang['staff_add_edit_phonenumber']           = 'Telefon';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Departmanı';
$lang['staff_add_edit_role']                  = 'Rolü';
$lang['staff_add_edit_permissions']           = 'İzinler';
$lang['staff_add_edit_administrator']         = 'Yönetici';
$lang['staff_add_edit_password']              = 'Parola';
$lang['staff_add_edit_password_note']         = 'Not: Bu alanı doldurursanız, bu üyenin şifresi değiştirilecektir.';
$lang['staff_add_edit_password_last_changed'] = 'Parola değiştirildi';
$lang['staff_add_edit_notes']                 = 'Notlar';
$lang['staff_add_edit_note_description']      = 'Not Açıklaması';

$lang['staff_notes_table_description_heading'] = 'Not';
$lang['staff_notes_table_addedfrom_heading']   = 'Ekleyen';
$lang['staff_notes_table_dateadded_heading']   = 'Eklenme';

$lang['staff_admin_profile']         = 'Yönetici Profili';
$lang['staff_profile_notifications'] = 'Bildirimler';
$lang['staff_profile_departments']   = 'Departmanlar';

$lang['staff_edit_profile_image']                     = 'Profil Fotoğrafı';
$lang['staff_edit_profile_your_departments']          = 'Bağlı Olduğu Departmanlar';
$lang['staff_edit_profile_change_your_password']      = 'Parolanı Değiştir';
$lang['staff_edit_profile_change_old_password']       = 'Eski Parola';
$lang['staff_edit_profile_change_new_password']       = 'Yeni Parola';
$lang['staff_edit_profile_change_repet_new_password'] = 'Yeni Parolayı Tekrar Girin';

# Surveys
$lang['new_survey']                    = 'Yeni Anket';
$lang['surveys']                       = 'Anketler';
$lang['survey']                        = 'Anket';
$lang['survey_lowercase']              = 'anket';
$lang['survey_no_mail_lists_selected'] = 'Mail Listesi Seçilmedi';
$lang['survey_send_success_note']      = 'Tüm Anket Emailleri (%s) CRON ile gönderildi.';
$lang['survey_result']                 = 'Anket Sonuçları: %s';
$lang['question_string']               = 'Soru';
$lang['question_field_string']         = 'Alan';

$lang['survey_list_view_tooltip']         = 'Anket Görüntüle';
$lang['survey_list_view_results_tooltip'] = 'Sonuç Görüntüle';

$lang['survey_add_edit_subject']                   = 'Anket konusu';
$lang['survey_add_edit_email_description']         = 'Anket açıklaması (Email Açıklama)';
$lang['survey_include_survey_link']                = 'Açıklamada anket linki yeralsın.';
$lang['survey_available_mail_lists_custom_fields'] = 'Email Listelerinde özel alanlar kullanılabilir';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Özel alanlar email editörde kullanılabilir.';
$lang['survey_add_edit_short_description_view']    = 'Anket kısa açıklaması (Açıklamayı Göster)';
$lang['survey_add_edit_from']                      = 'Kimden (Maillerde gösterilen)';
$lang['survey_add_edit_redirect_url']              = 'Anket Yönlendirme Linki';
$lang['survey_add_edit_red_url_note']              = 'Kullanıcı anketi tamamladığında hangi adrese yönlendirilecek? (Bu site için boş bırakın.)';
$lang['survey_add_edit_disabled']                  = 'Devre Dışı';
$lang['survey_add_edit_only_for_logged_in']        = 'Sadece giriş yapmış katılımcılar için (personel,müşteriler)';
$lang['send_survey_string']                        = 'Anket Gönder';
$lang['survey_send_mail_list_clients']             = 'Müşteriler';
$lang['survey_send_mail_list_staff']               = 'Personel';
$lang['survey_send_mail_lists_string']             = 'Mail Listeleri';
$lang['survey_send_mail_lists_note_logged_in']     = 'Not: Sadece giriş yapmış katılımcılara anket göndermek isterseniz bu seçeneği işaretlemeyin.';
$lang['survey_send_string']                        = 'Gönder';

$lang['survey_send_to_total']  = 'Toplam %s e-mail gönderilecek';
$lang['survey_send_till_now']  = 'Şimdiye kadar';
$lang['survey_send_finished']  = 'Anket gönderimi tamamlandı: %s';
$lang['survey_added_to_queue'] = 'Bu Anket Kuyruğa eklendi %s';

$lang['survey_questions_string']          = 'Sorular';
$lang['survey_insert_field']              = 'Alan Ekle';
$lang['survey_field_checkbox']            = 'Onay Kutusu';
$lang['survey_field_radio']               = 'Radyo Buton';
$lang['survey_field_input']               = 'Giriş Alanı';
$lang['survey_field_textarea']            = 'Yazı Alanı';
$lang['survey_question_required']         = 'Gerekli';
$lang['survey_question_only_for_preview'] = 'Sadece görünüm için';
$lang['survey_create_first']              = 'Soru ekleyebilmek için önce Anket oluşturmalısınız.';


$lang['survey_dt_name']               = 'Adı';
$lang['survey_dt_total_questions']    = 'Tüm Sorular';
$lang['survey_dt_total_participants'] = 'Tüm Katılımcılar';
$lang['survey_dt_date_created']       = 'Oluşturma Tarihi';
$lang['survey_dt_active']             = 'Aktif';

$lang['survey_text_questions_results'] = 'Soru Sonuçları';
$lang['survey_view_all_answers']       = 'Tüm cevapları görüntüle';

# Staff Tasks
$lang['new_task']       = 'Yeni Görev';
$lang['tasks']          = 'Görevler';
$lang['task']           = 'Görev';
$lang['task_lowercase'] = 'görev';
$lang['comment_string'] = 'Yorum';

$lang['task_marked_as_complete'] = 'Görev tamamlandı olarak işaretlendi';
$lang['task_follower_removed']   = 'Görev takipçisi silindi';
$lang['task_assignee_removed']   = 'Görev ataması silindi';

$lang['task_no_assignees'] = 'Bu görev için atama yapılmadı';
$lang['task_no_followers'] = 'Bu görevi takip eden kimse yok';

$lang['task_list_all']            = 'Tümü';
$lang['task_list_not_assigned']   = 'Atanmamış';
$lang['task_list_duedate_passed'] = 'Bitiş Tarihi Geçmiş';
$lang['tasks_dt_name']            = 'Adı';

$lang['task_single_priority']               = 'Öncelik';
$lang['task_single_start_date']             = 'Başlangıç Tarihi';
$lang['task_single_due_date']               = 'Bitiş Tarihi';
$lang['task_single_finished']               = 'Tamamlandı';
$lang['task_single_mark_as_complete']       = 'Tamamlandı olarak işaretle';
$lang['task_single_edit']                   = 'Düzenle';
$lang['task_single_delete']                 = 'Sil';
$lang['task_single_assignees']              = 'Atanan Üyeler';
$lang['task_single_assignees_select_title'] = 'İşi Ata';
$lang['task_single_followers']              = 'Takip Edenler';
$lang['task_single_followers_select_title'] = 'Takipçi Ekle';
$lang['task_single_insert_media_link']      = 'Medya Linki Ekle';
$lang['task_single_add_new_comment']        = 'Yorum Ekle';

$lang['task_add_edit_subject']     = 'Konu';
$lang['task_add_edit_priority']    = 'Öncelik';
$lang['task_priority_low']         = 'Düşük';
$lang['task_priority_medium']      = 'Orta';
$lang['task_priority_high']        = 'Yüksek';
$lang['task_priority_urgent']      = 'Acil';
$lang['task_add_edit_start_date']  = 'Başlangıç Tarihi';
$lang['task_add_edit_due_date']    = 'Bitiş Tarihi';
$lang['task_add_edit_description'] = 'Görev Açıklaması';

# Taxes
$lang['new_tax']       = 'Yeni Vergi';
$lang['taxes']         = 'Vergiler';
$lang['tax']           = 'Vergi';
$lang['tax_lowercase'] = 'vergi';
$lang['tax_dt_name']   = 'Vergi Adı';
$lang['tax_dt_rate']   = 'Oran (Yüzde)';

$lang['tax_add_edit_name'] = 'Vergi Adı';
$lang['tax_add_edit_rate'] = 'Vergi Oranı (Yüzde)';
$lang['tax_edit_title']    = 'Vergi Düzenle';
$lang['tax_add_title']     = 'Yeni Vergi Ekle';

# Ticket Statutes
$lang['new_ticket_status']       = 'Yeni Talep Durumu';
$lang['ticket_statuses']         = 'Talep Durumları';
$lang['ticket_status']           = 'Talep Durumu';
$lang['ticket_status_lowercase'] = 'talep durumu';

$lang['ticket_statuses_dt_name']      = 'Talep Durum Adı';
$lang['no_ticket_statuses_found']     = 'Talep durumu bulunamadı';
$lang['ticket_statuses_table_total']  = 'Toplam %s';
$lang['ticket_status_add_edit_name']  = 'Talep Durum Adı';
$lang['ticket_status_add_edit_color'] = 'Renk Seç';
$lang['ticket_status_add_edit_order'] = 'Durum Sırası';

# Todos
$lang['new_todo']                  = 'Yeni İş';
$lang['my_todos']                  = 'Yapılacak İşlerim';


$lang['todo']                      = 'Yapılacak İş';
$lang['todo_lowercase']            = 'yapılacak iş';
$lang['todo_status_changed']       = 'Yapılacak iş durumu değişti';
$lang['todo_add_title']            = 'Yeni Yapılacak İş';
$lang['add_new_todo_description']  = 'Açıklama';
$lang['no_finished_todos_found']   = 'Hiç Tamamlanan İş Bulunamadı';
$lang['no_unfinished_todos_found'] = 'Yapılacak İş Bulunamadı';
$lang['unfinished_todos_title']    = 'Tamamlanmayan İşler';
$lang['finished_todos_title']      = 'Tamamlanan İşler';

# Authentication
$lang['password_changed_email_subject']             = 'Parolanız Değiştirildi.';
$lang['password_reset_email_subject']               = 'Parolanızı Sıfırlayın %s';
# Utilities
$lang['utility_activity_log']                       = 'Aktivite Logu';
$lang['utility_activity_log_filter_by_date']        = 'Tarihe Göre Filtrele';
$lang['utility_activity_log_dt_description']        = 'Açıklama';
$lang['utility_activity_log_dt_date']               = 'Tarih';
$lang['utility_activity_log_dt_staff']              = 'Personel';
$lang['utility_calendar_new_event_title']           = 'Yeni Etkinlik Ekle';
$lang['utility_calendar_new_event_start_date']      = 'Başlangıç Tarihi';
$lang['utility_calendar_new_event_end_date']        = 'Bitiş Tarihi';
$lang['utility_calendar_new_event_make_public']     = 'Halka Açık Yap';
$lang['utility_calendar_event_added_successfuly']   = 'Yeni Etkinlik Eklendi';
$lang['utility_calendar_event_deleted_successfuly'] = 'Etkinlik Silindi';
$lang['utility_calendar_new_event_placeholder']     = 'Etkinlik Başlığı';


# Navigation
$lang['nav_notifications']          = 'Bildirimler';
$lang['nav_my_profile']             = 'Profilim';
$lang['nav_edit_profile']           = 'Profili Düzenle';
$lang['nav_logout']                 = 'Çıkış';
$lang['nav_no_notifications']       = 'Bildirim Bulunamadı';
$lang['nav_view_all_notifications'] = 'Tüm Bildirimleri Görüntüle';
$lang['nav_customizer_tooltip']     = 'Ayarları Özelleştir';
$lang['nav_notifications_tooltip']  = 'Bildirimleri Görüntüle';

## Clients
$lang['clients_required_field'] = 'Bu alan gerekli';

# Footer
$lang['clients_copyright'] = 'Tüm Hakları Saklıdır. %s';

# Announcements
$lang['clients_announcement_from']  = 'Kimden: ';
$lang['clients_announcement_added'] = 'Eklendi: ';

# Contracts
$lang['clients_contracts']               = 'Sözleşmeler';
$lang['clients_contracts_dt_subject']    = 'Konu';
$lang['clients_contracts_dt_start_date'] = 'Başlangıç Tarihi';
$lang['clients_contracts_dt_end_date']   = 'Bitiş Tarihi';

# Home
$lang['clients_quick_invoice_info']                = 'Faturalara Hızlı Bakış';
$lang['clients_home_currency_select_tooltip']      = 'Para Birimi seçmelisiniz. Çünkü yabancı para birimleri ile oluşturulmuş faturalarınız var';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'İndir';

$lang['clients_my_invoices']        = 'Faturalarım';
$lang['clients_invoice_dt_number']  = 'Fatura No';
$lang['clients_invoice_dt_date']    = 'Tarih';
$lang['clients_invoice_dt_duedate'] = 'Son Ödeme Tarihi';
$lang['clients_invoice_dt_amount']  = 'Miktar';
$lang['clients_invoice_dt_status']  = 'Durum';

# Profile
$lang['clients_profile_heading'] = 'Profil';

# Used for edit profile and register START
$lang['clients_firstname'] = 'Adı';
$lang['clients_lastname']  = 'Soyadı';
$lang['clients_email']     = 'Email Adresi';
$lang['clients_company']   = 'Firma';
$lang['clients_vat']       = 'Vergi Numarası';
$lang['clients_phone']     = 'Telefon';
$lang['clients_country']   = 'Ülke';
$lang['clients_city']      = 'Şehir';
$lang['clients_address']   = 'Adres';
$lang['clients_zip']       = 'Posta Kodu';
$lang['clients_state']     = 'İlçe';
# Used for edit profile and register END

$lang['clients_register_password']        = 'Parola';
$lang['clients_register_password_repeat'] = 'Parolayı Tekrarlayın';
$lang['clients_edit_profile_update_btn']  = 'Güncelle';

$lang['clients_edit_profile_change_password_heading'] = 'Parola Değiştir';
$lang['clients_edit_profile_old_password']            = 'Eski Parola';
$lang['clients_edit_profile_new_password']            = 'Yeni Parola';
$lang['clients_edit_profile_new_password_repeat']     = 'Parolayı Tekrar Girin';
$lang['clients_edit_profile_change_password_btn']     = 'Parolayı Değiştir';
$lang['clients_profile_last_changed_password']        = 'En son parola değiştirme %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Bilgi Merkezi';
$lang['clients_knowledge_base_articles_not_found'] = 'Bilgi Merkezi Makalesi bulunamadı';
$lang['clients_knowledge_base_find_useful']        = 'Bu makaleyi yararlı buldunuz mu?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Evet';
$lang['clients_knowledge_base_find_useful_no']     = 'Hayır';
$lang['clients_article_only_1_vote_today']         = '24 saat içerisinde sadece 1 kere oy kullanabilirsiniz.';
$lang['clients_article_voted_thanks_for_feedback'] = 'Geri Dönüşünüz için teşekkürler';

# Tickets
$lang['clients_ticket_open_subject']                = 'Talep Aç';
$lang['clients_ticket_open_departments']            = 'Bölüm';
$lang['clients_tickets_heading']                    = 'Talepler';
$lang['clients_ticket_open_service']                = 'Hizmet';
$lang['clients_ticket_open_priority']               = 'Öncelik';
$lang['clients_latest_tickets']                     = 'Son Talepler';
$lang['clients_ticket_open_body']                   = 'Talep İçeriği';
$lang['clients_ticket_attachments']                 = 'Dosya Ekleri';
$lang['clients_ticket_posted']                      = 'Yayınlandı: %s';
$lang['clients_single_ticket_string']               = 'Talep';
$lang['clients_single_ticket_replied']              = 'Yanıtlandı: %s';
$lang['clients_single_ticket_informations_heading'] = 'Talep Bilgileri';

$lang['clients_tickets_dt_number']     = 'Talep No';
$lang['clients_tickets_dt_subject']    = 'Konu';
$lang['clients_tickets_dt_department'] = 'Bölüm';
$lang['clients_tickets_dt_service']    = 'Hizmet';
$lang['clients_tickets_dt_status']     = 'Durum';
$lang['clients_tickets_dt_last_reply'] = 'Son Cevaplama';

$lang['clients_ticket_single_department']        = 'Bölüm: %s';
$lang['clients_ticket_single_submited']          = 'Gönderildi: %s';
$lang['clients_ticket_single_status']            = 'Durum:';
$lang['clients_ticket_single_priority']          = 'Öncelik: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Yanıt Ekle';
$lang['clients_ticket_single_add_reply_heading'] = 'Bu talebe yanıt ekle';

# Login
$lang['clients_login_heading_no_register'] = 'Lütfen Giriş Yapın';
$lang['clients_login_heading_register']    = 'Lütfen Giriş Yapın ya da Kayıt Olun';
$lang['clients_login_email']               = 'Email Adresi';
$lang['clients_login_password']            = 'Parola';
$lang['clients_login_remember']            = 'Beni Hatırla';
$lang['clients_login_login_string']        = 'Giriş';

# Register
$lang['clients_register_string']  = 'Kayıt';
$lang['clients_register_heading'] = 'Kayıt';

# Navigation
$lang['clients_nav_login']     = 'Giriş';
$lang['clients_nav_register']  = 'Kayıt';
$lang['clients_nav_invoices']  = 'Faturalar';
$lang['clients_nav_contracts'] = 'Sözleşmeler';
$lang['clients_nav_kb']        = 'Bilgi Merkezi';
$lang['clients_nav_profile']   = 'Profil';
$lang['clients_nav_logout']    = 'Çıkış';

# Datatables
$lang['clients_dt_paginate_first']    = 'İlk';
$lang['clients_dt_paginate_last']     = 'Son';
$lang['clients_dt_paginate_next']     = 'Sonraki';
$lang['clients_dt_paginate_previous'] = 'Önceki';
$lang['clients_dt_empty_table']       = 'Kayıt Bulunamadı';
$lang['clients_dt_search']            = 'Ara:';
$lang['clients_dt_zero_records']      = 'Eşleşen sonuç bulunamadı';
$lang['clients_dt_loading_records']   = 'Yükleniyor...';
$lang['clients_dt_length_menu']       = 'Göster _MENU_ ';
$lang['clients_dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['clients_dt_info_empty']        = 'Showing 0 to 0 of 0 {0}';
$lang['clients_dt_info']              = 'Showing _START_ to _END_ of _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'Kayıt Bulunamadı';
$lang['clients_dt_sort_ascending']    = 'artan sıralamayı etkinleştir';
$lang['clients_dt_sort_descending']   = 'azalan sıralamayı etkinleştir';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Ödeme Fişi';
$lang['payment_for_string']                            = 'Ödeme';
$lang['payment_date']                                  = 'Ödeme Tarihi:';
$lang['payment_view_mode']                             = 'Ödeme Türü:';
$lang['payment_total_amount']                          = 'Toplam Miktar';
$lang['payment_table_invoice_number']                  = 'Fatura Numarası';
$lang['payment_table_invoice_date']                    = 'Fatura Tarihi';
$lang['payment_table_invoice_amount_total']            = 'Fatura Miktarı';
$lang['payment_table_payment_amount_total']            = 'Ödeme Miktarı';
$lang['payments_table_transaction_id']                 = 'İşlem Numarası: %s';
$lang['payment_getaway_token_not_found']               = 'Token Bulunamadı';
$lang['online_payment_recorded_success']               = 'Ödeme kaydı eklendi';
$lang['online_payment_recorded_success_fail_database'] = 'Ödeme başarılı fakat ödeme veritabanına kayıt edilemedi, Yönetici ile iletişime geçin.';

# Leads
$lang['lead_convert_to_client']                   = 'Müşteriyi Dönüştür';
$lang['lead_convert_to_email']                    = 'Email';
$lang['lead_convert_to_client_firstname']         = 'Adı';
$lang['lead_convert_to_client_lastname']          = 'Soyadı';
$lang['lead_email_already_exists']                = 'Fırsat email adresi müşteri veritabanında zaten var';
$lang['lead_to_client_base_converted_success']    = 'Fırsat müşteriye dönüştürüldü';
$lang['lead_have_client_profile']                 = 'Bu fırsatın Müşteri Profili var.';
$lang['lead_converted_edit_client_profile']       = 'Profili Düzenle';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'Faturayı Müşteri Olarak Görüntüle';
$lang['invoice_add_edit_recurring']                                           = 'Yinelenen Fatura?';
$lang['invoice_add_edit_recurring_no']                                        = 'Hayır';
$lang['invoice_add_edit_recurring_month']                                     = 'Her %s Ay';
$lang['invoice_add_edit_recurring_months']                                    = 'Her %s Ay';


$lang['invoices_list_all']                                                    = 'Hepsi';
$lang['invoices_list_not_have_payment']                                       = 'Ödeme Kaydı Olmayan Faturalar';
$lang['invoices_list_recuring']                                               = 'Yinelenen Faturalar';
$lang['invoices_list_made_payment_by']                                        = 'Ödeme Yöntemi: %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Create new invoice from main recurring invoice only if is with status Paid';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'Create new invoice from the main recurring invoice only if the main invoice is with status paid? If this field is set to No and the recurring invoice is not with status paid the new invoice wont be created';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Yenilenen faturayı müşteriye otomatik gönder';
$lang['view_invoice_pdf_link_pay']                                            = 'Faturayı Öde';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Banka Hesapları / Açıklama';
$lang['payment_mode_add_edit_description_tooltip'] = 'Bu bölümde Banka Hesap Bilgilerini girebilirsiniz. HTML Faturada görüntülenecektir.';
$lang['payment_modes_dt_description']              = 'Banka Hesapları / Açıklama';
$lang['payment_modes_add_edit_announcement']       = 'Not: Ödeme türleri aşağıda listelenir. Online ödeme yöntemleri Ayarlar -> Ödeme Geçitleri sayfasından yapılabilir.';
$lang['payment_mode_add_edit_active']              = 'Aktif';
$lang['payment_modes_dt_active']                   = 'Aktif';

# Contracts
$lang['contract_not_found'] = 'Sözleşme Bulunamadı. Silinmiş olabilir. Aktivite Kayıtlarını İnceleyin';


# Settings
$lang['setting_bar_heading']                 = 'Kurulum';
$lang['settings_group_online_payment_modes'] = 'Ödeme Geçitleri';
$lang['settings_paymentmethod_mode_label']   = 'Etiket';
$lang['settings_paymentmethod_active']       = 'Aktif';
$lang['settings_paymentmethod_currencies']   = 'Para Birimleri Virgülle Ayrılmış';
$lang['settings_paymentmethod_testing_mode'] = 'Test Modu Aktif';

$lang['settings_paymentmethod_paypal_username']  = 'Paypal API Kullanıcı Adı';
$lang['settings_paymentmethod_paypal_password']  = 'Paypal API Şifresi';
$lang['settings_paymentmethod_paypal_signature'] = 'API İmzası';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Gizli Anahtarı';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Yayın Anahtarı';
$lang['settings_limit_top_search_bar_results']             = 'En Çok Arananlar Bar Sonuçlarını Limitle';

# Quick Actions
$lang['qa_create_invoice']  = 'Fatura Oluştur';
$lang['qa_create_task']     = 'Görev Oluştur';
$lang['qa_create_client']   = 'Müşteri Oluştur';
$lang['qa_create_contract'] = 'Sözleşme Oluştur';
$lang['qa_create_kba']      = 'Bilgi Merkezi Makalesi Oluştur';
$lang['qa_create_survey']   = 'Anket Oluştur';
$lang['qa_create_ticket']   = 'Talep Aç';
$lang['qa_create_staff']    = 'Personel Oluştur';

## Clients
$lang['client_phonenumber'] = 'Telefon';

# Main Clients
$lang['clients_register']                          = 'Kayıt';
$lang['clients_profile_updated']                   = 'Profiliniz güncellendi';
$lang['clients_successfully_registered']           = 'Kayıt olduğunuz için teşekkürler';
$lang['clients_account_created_but_not_logged_in'] = 'Hesabınız oluşturuldu fakat sisteme otomatik giriş yapmadınız. Lütfen tekrar giriş yapın.';
# Tickets
$lang['clients_tickets_heading']                   = 'Talepler';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Fatura için Ödeme';
$lang['payment_total']       = 'Toplam: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Online Ödeme';
$lang['invoice_html_online_payment_button_text'] = 'Şimdi Öde';
$lang['invoice_html_payment_modes_not_selected'] = 'Lütfen Ödeme Türünü Seçin';
$lang['invoice_html_amount_blank']               = 'Toplam Ödeme Boş ya Sıfır Olamaz';
$lang['invoice_html_offline_payment']            = 'Offline Ödeme';
$lang['invoice_html_amount']                     = 'Miktar';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Görünürlük';
$lang['dt_button_reload']             = 'Yeniden Yükle';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Yazdır';
$lang['is_not_active_export']         = 'Hayır';
$lang['is_active_export']             = 'Evet';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Gelişmiş Seçenekler';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Bu Faturada Kullanılabilen Ödeme Yöntemleri';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = 'Recurring invoices from this invoice';
$lang['invoice_add_edit_no_payment_modes_found']         = 'Ödeme türü bulunamadı.';
$lang['invoice_html_total_pay']                          = 'Toplam: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Şablon Adı';
# General
$lang['discount_type']                      = 'İndirim Türü';
$lang['discount_type_after_tax']            = 'Vergi Sonrası';
$lang['discount_type_before_tax']           = 'Vergi Öncesi';
$lang['terms_and_conditions']               = 'Şartlar & Koşullar';
$lang['reference_no']                       = 'Referans #';
$lang['no_discount']                        = 'İndirim Yok';
$lang['view_stats_tooltip']                 = 'Hızlı İstatistikleri Görüntüle';
# Clients
$lang['zip_from_date']                      = 'Bu Tarihten:';
$lang['zip_to_date']                        = 'Bu Tarihe:';
$lang['client_zip_payments']                = 'Ödemeleri Arşivle';
$lang['client_zip_invoices']                = 'Faturaları Arşivle';
$lang['client_zip_estimates']               = 'Proformaları Arşivle';
$lang['client_zip_status']                  = 'Durum';
$lang['client_zip_status_all']              = 'Tümü';
$lang['client_zip_payment_modes']           = 'Ödeme Yöntemi';
$lang['client_zip_no_data_found']           = '%s Bulunamadı';

# Payments
$lang['payment_mode']         = 'Ödeme Türü';
$lang['payment_view_heading'] = 'Ödeme';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Müşterinin ödeme tutarını değiştirmesine izin ver (Online Ödemeler için)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'Bir saatte gönderilecek email sayısı';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'Bu seçenek Anket gönderilirken kullanılır. Anket saatte X adet olarak gönderilecektir. Bazı Hosting firmalarının bir saatte gönderim limitleri olabilir.';
$lang['settings_delete_only_on_last_invoice']                       = 'Sadece son faturadan itibaren silmeyi etkinleştir.';
$lang['settings_sales_estimate_prefix']                             = 'Proforma Sayı Öneki';
$lang['settings_sales_next_estimate_number']                        = 'Sonraki Proforma Sayısı';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Eğer baştan başlamak istiyorsanız bu alanı 1 olarak ayarlayın';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Decrement estimate number on delete';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Do you want to decrement the estimate number when the last estimate is deleted? Ex. If is set this option to YES and before estimate delete the next estimate number is 15 the next estimate number will decrement to 14.If is set to NO the number will remain to 15. If you have setup delete only on last estimate to NO you should set this option to NO too to keep the next estimate number not decremented.';
$lang['settings_sales_estimate_number_format']                      = 'Proforma Numara Formatı';
$lang['settings_sales_estimate_number_format_year_based']           = 'Yıl Tabanlı';
$lang['settings_sales_estimate_number_format_number_based']         = 'Numara Tabanlı (000001)';
$lang['settings_delete_only_on_last_estimate']                      = 'Sadece son faturadan itibaren silmeyi etkinleştir.';
$lang['settings_cron_invoice_heading']                              = 'Fatura';
$lang['settings_send_test_email_heading']                           = 'Test Emaili Gönder';
$lang['settings_send_test_email_subheading']                        = 'SMTP Ayarlarının doğru yapılandırıldığından emin olmak için Test E-maili gönderin.';
$lang['settings_send_test_email_string']                            = 'Email Adresi';
$lang['settings_smtp_settings_heading']                             = 'SMTP Ayarları';
$lang['settings_smtp_settings_subheading']                          = 'Email Ayarla';

$lang['settings_sales_heading_general']                             = 'Genel';
$lang['settings_sales_heading_invoice']                             = 'Fatura';
$lang['settings_sales_heading_estimates']                           = 'Proformalar';
$lang['settings_sales_heading_company']                             = 'Firma';
$lang['settings_sales_cron_invoice_heading']                        = 'Fatura';

# Tasks
$lang['tasks_dt_datestart'] = 'Başlama Tarihi';
$lang['tasks_dt_priority']  = 'Öncelik';

# Invoice General
$lang['invoice_discount'] = 'İndirim';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Yönetici Alanı (Sağdan Sola)';
$lang['settings_rtl_support_client']                                  = 'RTL Müşteri Alanı (Sağdan Sola)';
$lang['acs_language_editor']                                          = 'Dil Editörü';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Müşteri Proformayı onayladıktan sonra otomatik olarak Faturaya çevir.';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Taslak durumdaki Proformaları Müşteri Alanında hariç tut.';

# Months
$lang['January']   = 'Ocak';
$lang['February']  = 'Şubat';
$lang['March']     = 'Mart';
$lang['April']     = 'Nisan';
$lang['May']       = 'Mayıs';
$lang['June']      = 'Haziran';
$lang['July']      = 'Temmuz';
$lang['August']    = 'Ağustos';
$lang['September'] = 'Eylül';
$lang['October']   = 'Ekim';
$lang['November']  = 'Kasım';
$lang['December']  = 'Aralık';

# Time ago function translate
$lang['time_ago_just_now']  = 'Az önce';
$lang['time_ago_minute']    = 'Bir dakika önce';
$lang['time_ago_minutes']   = '%s dakika önce';
$lang['time_ago_hour']      = 'Bir saat önce';
$lang['time_ago_hours']     = '%s saat önce';
$lang['time_ago_yesterday'] = 'dün';
$lang['time_ago_days']      = '%s gün önce';
$lang['time_ago_week']      = 'a hafta önce';
$lang['time_ago_weeks']     = '%s hafta önce';
$lang['time_ago_month']     = 'a ay önce';
$lang['time_ago_months']    = '%s ay önce';
$lang['time_ago_year']      = 'Bir yıl önce';
$lang['time_ago_years']     = '%s yıl önce';


# Estimates
$lang['estimates']                          = 'Proformalar';
$lang['estimate']                           = 'Proforma';
$lang['estimate_lowercase']                 = 'proforma';
$lang['create_new_estimate']                = 'Yeni Proforma Oluştur';
$lang['view_estimate']                      = 'Proforma Görüntüle';
$lang['estimate_sent_to_client_success']    = 'Proforma müşteriye başarıyla gönderildi.';
$lang['estimate_sent_to_client_fail']       = 'Proforma gönderilerken hata oluştu';
$lang['estimate_reminder_send_problem']     = 'Proforma Zaman Aşımı hatırlatma gönderilirken hata oluştu';
$lang['estimate_details']                   = 'Proforma Detayları';
$lang['estimate_view']                      = 'Proforma Görüntüle';
$lang['estimate_select_customer']           = 'Müşteri';
$lang['estimate_add_edit_number']           = 'Proforma Numarası';
$lang['estimate_add_edit_date']             = 'Proforma Tarihi';
$lang['estimate_add_edit_expirydate']       = 'Geçerlilik Tarihi';
$lang['estimate_add_edit_currency']         = 'Para Birimi';
$lang['estimate_add_edit_client_note']      = 'Müşteri Notu';
$lang['estimate_add_edit_admin_note']       = 'Yönetici Notu';
$lang['estimate_add_edit_new_item']         = 'Yeni Ürün';
$lang['estimate_add_edit_search_item']      = 'Ürünleri Ara';
$lang['estimates_toggle_table_tooltip']     = 'Toggle Tablo';
$lang['estimate_add_edit_advanced_options'] = 'Gelişmiş Seçenekler';
$lang['estimate_vat']                       = 'Vergi Numarası';
$lang['estimate_to']                        = 'Kime';
$lang['estimates_list_all']                 = 'Tümü';

$lang['estimate_invoiced_date']                  = 'Proforma %s tarihinde Faturalandı';
$lang['edit_estimate_tooltip']                   = 'Proforma Düzenle';
$lang['delete_estimate_tooltip']                 = 'Proforma Sil';
$lang['estimate_sent_to_email_tooltip']          = 'Email Gönder';
$lang['estimate_already_send_to_client_tooltip'] = 'Proforma %s müşterisine zaten gönderildi.';
$lang['send_overdue_notice_tooltip']             = 'Zaman Aşımı Notu Gönder';
$lang['estimate_view_activity_tooltip']          = 'Aktivite Logları';

$lang['estimate_send_to_client_modal_heading']    = 'Müşteriye Proforma Gönder';
$lang['estimate_send_to_client_attach_pdf']       = 'Proforma PDF dosyasını ekle';
$lang['estimate_send_to_client_preview_template'] = 'E-mail Şablonunu Görüntüle';

$lang['estimate_dt_table_heading_number']     = 'Proforma #';
$lang['estimate_dt_table_heading_date']       = 'Tarih';
$lang['estimate_dt_table_heading_client']     = 'Müşteri';
$lang['estimate_dt_table_heading_expirydate'] = 'Geçerlilik Tarihi';
$lang['estimate_dt_table_heading_amount']     = 'Miktar';
$lang['estimate_dt_table_heading_status']     = 'Durum';

$lang['estimate_email_link_text']    = 'Proforma Görüntüle';
$lang['estimate_convert_to_invoice'] = 'Faturaya Çevir';
# Home
$lang['home_unfinished_tasks']       = 'Tamamlanmayan Görevler';

# Clients
$lang['client_estimates_tab'] = 'Proformalar';
$lang['client_payments_tab']  = 'Ödemeler';


# Estimate General
$lang['estimate_pdf_heading']            = 'PROFORMA';
$lang['estimate_table_item_heading']     = 'Ürün';
$lang['estimate_table_quantity_heading'] = 'Adet';
$lang['estimate_table_rate_heading']     = 'Ücret';
$lang['estimate_table_tax_heading']      = 'Vergi';
$lang['estimate_table_amount_heading']   = 'Miktar';
$lang['estimate_subtotal']               = 'Alt Toplam';
$lang['estimate_adjustment']             = 'Fiyat Ayarlama (+-)';
$lang['estimate_discount']               = 'İndirim';
$lang['estimate_total']                  = 'Toplam';
$lang['estimate_to']                     = 'Kime';
$lang['estimate_data_date']              = 'Proforma Tarihi';
$lang['estimate_data_expiry_date']       = 'Geçerlilik Tarihi';
$lang['estimate_note']                   = 'Not:';
$lang['estimate_status_draft']           = 'Taslak';
$lang['estimate_status_sent']            = 'Gönderildi';
$lang['estimate_status_declined']        = 'Reddedildi';
$lang['estimate_status_accepted']        = 'Kabul Edildi';
$lang['estimate_status_expired']         = 'Süresi Geçti';
$lang['estimate_note']                   = 'Not:';

# Quick create
$lang['qa_create_estimate'] = 'Proforma Oluştur';
$lang['qa_create_lead']     = 'Fırsat Oluştur';


## Clients
$lang['clients_estimate_dt_number']             = 'Proforma #';
$lang['clients_estimate_dt_date']               = 'Tarih';
$lang['clients_estimate_dt_duedate']            = 'Geçerlilik Tarihi';
$lang['clients_estimate_dt_amount']             = 'Miktar';
$lang['clients_estimate_dt_status']             = 'Durum';
$lang['clients_nav_estimates']                  = 'Proformalar';
$lang['clients_decline_estimate']               = 'Reddet';
$lang['clients_accept_estimate']                = 'Kabul Et';
$lang['clients_my_estimates']                   = 'Proformalar';
$lang['clients_estimate_invoiced_successfuly']  = 'Proforma kabul edildi. Bu proforma dan oluşturulan fatura burada.';
$lang['clients_estimate_accepted_not_invoiced'] = 'Proformayı kabul ettiğiniz için teşekkür ederiz.';
$lang['clients_estimate_declined']              = 'Proforma reddedildi. Son tarihe kadar istediğiniz zaman kabul edebilirsiniz.';
$lang['clients_estimate_failed_action']         = 'Bu proforma için aksiyon alınırken hata oluştu';
$lang['client_add_edit_profile']                = 'Profil';











# Custom Fields
$lang['custom_field']                          = 'Özel Alan';
$lang['custom_field_lowercase']                = 'özel alan';
$lang['custom_fields']                         = 'Özel Alanlar';
$lang['custom_fields_lowercase']               = 'özel alanlar';
$lang['new_custom_field']                      = 'Yeni Özel Alan';
$lang['custom_field_name']                     = 'Alan Adı';
$lang['custom_field_add_edit_type']            = 'Tip';
$lang['custom_field_add_edit_belongs_top']     = 'Alan İlişkisi';
$lang['custom_field_add_edit_options']         = 'Seçenekler';
$lang['custom_field_add_edit_options_tooltip'] = 'Yalnızca Seçim Tipleri için kullanın. Virgül kullanarak ayırın. (Örneğin: elma,portakal,muz)';
$lang['custom_field_add_edit_order']           = 'Sıralama';

$lang['custom_field_dt_field_to']       = 'İlişki';
$lang['custom_field_dt_field_name']     = 'Adı';
$lang['custom_field_dt_field_type']     = 'Tip';
$lang['custom_field_add_edit_active']   = 'Aktif';
$lang['custom_field_add_edit_disabled'] = 'Devre Dışı';

# Ticket replies
$lang['ticket_reply']           = 'Talep Yanıtla';
$lang['ticket_reply_lowercase'] = 'talep yanıtla';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Özel Alanlar';

# Contracts
$lang['contract_types']          = 'Sözleşme Türleri';
$lang['contract_type']           = 'Sözleşme Türü';
$lang['new_contract_type']       = 'Yeni Sözleşme Türü';
$lang['contract_type_lowercase'] = 'sözleşme';
$lang['contract_type_name']      = 'Adı';

$lang['contract_types_list_name'] = 'Sözleşme Türü';

# Customizer Menu
$lang['acs_contracts']      = 'Sözleşmeler';
$lang['acs_contract_types'] = 'Sözleşme Türleri';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Uzun Açıklama';
# Customers
$lang['client_delete_invoices_warning']    = 'Bu müşterinin faturaları ve Proformaları var. Bu müşteriyi silemezsiniz. Tüm faturaları başka bir müşteriye ekleyin.';
$lang['clients_list_phone']                = 'Telefon';
$lang['client_expenses_tab']               = 'Harcamalar';
$lang['customers_summary']                 = 'Müşteri Özeti';
$lang['customers_summary_active']          = 'Aktif Kişiler';
$lang['customers_summary_inactive']        = 'Pasif Kişiler';
$lang['customers_summary_logged_in_today'] = 'Bugün Giriş Yapan Kişiler';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'E-mail Adresi';
$lang['admin_auth_forgot_password_heading']           = 'Şifremi Unuttum';
$lang['admin_auth_login_heading']                     = 'Giriş';
$lang['admin_auth_login_email']                       = 'E-mail Adresi';
$lang['admin_auth_login_password']                    = 'Şifre';
$lang['admin_auth_login_remember_me']                 = 'Beni Hatırla';
$lang['admin_auth_login_button']                      = 'Giriş';
$lang['admin_auth_login_fp']                          = 'Şifrenizi mi Unuttunuz?';
$lang['admin_auth_reset_password_heading']            = 'Şifremi Sıfırla';
$lang['admin_auth_reset_password']                    = 'Şifre';
$lang['admin_auth_reset_password_repeat']             = 'Şifreyi Tekrarlayın';
$lang['admin_auth_invalid_email_or_password']         = 'Hatalı e-mail ya da şifre';
$lang['admin_auth_inactive_account']                  = 'Pasif Hesap';
# Calender
$lang['calendar_estimate']                            = 'Proforma';
$lang['calendar_invoice']                             = 'Fatura';
$lang['calendar_contract']                            = 'Sözleşme Türü';
$lang['calendar_customer_reminder']                     = 'Müşteri Hatırlatıcı';
$lang['calendar_event']                               = 'Etkinlik';
$lang['calendar_task']                                = 'Görev';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Fırsatı Sil';
$lang['lead_attachments']                             = 'Ekler';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Finans';
# Settings
$lang['settings_show_sale_agent_on_invoices']         = 'Faturada Satış Uzmanını Göster';
$lang['settings_show_sale_agent_on_estimates']        = 'Proformada Satış Uzmanını Göster';
$lang['settings_predefined_predefined_term']          = 'Öntanımlı Şartlar & Koşullar';
$lang['settings_predefined_clientnote']               = 'Öntanımlı Müşteri Notu';
$lang['settings_custom_pdf_logo_image_url']           = 'PDFte Özel Firma Logo Linki (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Probably you will have problems with PNG images with transparency that are handled in different way depending on the php-imagick or php-gd version used. Try to update php-imagick and disable php-gd
. If you leave this field blank the uploaded logo will be used.';

# General
$lang['sale_agent_string']               = 'Satış Uzmanı';
$lang['amount_display_in_base_currency'] = 'Amount is displayed in your base currency - Only use this report if you are using 1 currency for payments and expenses.';
# Leads
$lang['leads_summary']                                         = 'Fırsatların Özeti';

# Contracts
$lang['contract_value']                 = 'Sözleşme Değeri';
$lang['contract_trash']                 = 'Çöp';
$lang['contracts_view_trash']           = 'Çöpü Görüntüle';
$lang['contracts_view_all']             = 'Tümü';
$lang['contracts_view_exclude_trashed'] = 'Silinen Sözleşmeleri Hariç Tut';
$lang['contract_value_tooltip']         = 'Ana Para Birimi kullanılacak.';
$lang['contract_trash_tooltip']         = 'Eğer Sözleşmeyi çöpe atarsanız, müşteri tarafında görüntülenmez. Grafiklerde ve diğer istatistiklerde yer almaz. Varsayılan olarak sözleşmelerde göremezsiniz.';
$lang['contract_summary_active']              = 'Aktif';
$lang['contract_renew_heading']               = 'Sözleşmeyi Yenile';
$lang['contract_summary_heading']             = 'Sözleşme Özeti';
$lang['contract_summary_expired']             = 'Süresi Dolmuş';
$lang['contract_summary_about_to_expire']     = 'About to Expire';
$lang['contract_summary_recently_added']      = 'Son Zamanlarda Eklendi';
$lang['contract_summary_trash']               = 'Çöp';
$lang['contract_summary_by_type']             = 'Türe Göre Sözleşmeler';
$lang['contract_summary_by_type_value']       = 'Türe Göre Sözleşme Değerleri';
$lang['contract_renewed_successfuly']         = 'Sözleşme başarıyla yenilendi';
$lang['contract_renewed_fail']                = 'Sözleşme yenilenirken problem oluştu. Yönetici ile iletişime geçin.';
$lang['no_contract_renewals_found']           = 'Bu sözleşme için yenileme bulunamadı.';
$lang['no_contract_renewals_history_heading'] = 'Sözleşme Yenileme Geçmişi';
$lang['contract_renewed_by']                  = 'Bu sözleşme %s tarafından yenilendi';
$lang['contract_renewal_deleted']             = 'Yenileme başarıyla silindi';
$lang['contract_renewal_delete_fail']         = 'Sözleşme silinirken problem oluştu. Yönetici ile iletişime geçin.';

$lang['contract_renewal_new_value'] = 'Yeni Sözleşme Değeri: %s';
$lang['contract_renewal_old_value'] = 'Eski Sözleşme Değeri: %s';

$lang['contract_renewal_new_start_date'] = 'Yeni Başlangıç Tarihi: %s';
$lang['contract_renewal_old_start_date'] = 'Eski Sözleşme Başlangıç Tarihi: %s';

$lang['contract_renewal_new_end_date'] = 'Yeni Bitiş Tarihi: %s';
$lang['contract_renewal_old_end_date'] = 'Eski Sözleşme Bitiş Tarihi: %s';
$lang['contract_attachment']           = 'Ek';
$lang['contract_attachment_lowercase'] = 'ek';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Hedef Takip';
$lang['als_expenses']           = 'Harcamalar';
$lang['als_reports_expenses']   = 'Harcamalar';
$lang['als_expenses_vs_income'] = 'Harcamalar vs Gelirler';

# Invoices
$lang['invoice_attach_file']           = 'Dosya Ekle';
$lang['invoice_mark_as_sent']          = 'Gönderildi Olarak İşaretle';
$lang['invoice_marked_as_sent']        = 'Gönderildi Olarak İşaretlendi';
$lang['invoice_marked_as_sent_failed'] = 'HATA: Gönderildi Olarak İşaretle';

# Quick Actions
$lang['qa_new_goal']    = 'Yeni Hedef Ayarla';
$lang['qa_new_expense'] = 'Harcama Gir';

# Goals Tracking




$lang['goals']                                         = 'Hedefler';
$lang['goal']                                          = 'Hedef';
$lang['goals_tracking']                                = 'Hedef İzleme';
$lang['new_goal']                                      = 'Yeni Hedef';
$lang['goal_lowercase']                                = 'hedef';
$lang['goal_start_date']                               = 'Başlangıç Tarihi';
$lang['goal_end_date']                                 = 'Bitiş Tarihi';
$lang['goal_subject']                                  = 'Konu';
$lang['goal_description']                              = 'Açıklama';
$lang['goal_type']                                     = 'Hedef Tipi';
$lang['goal_achievement']                              = 'Başarı';
$lang['goal_contract_type']                            = 'Sözleşme Tipi';
$lang['goal_notify_when_fail']                         = 'Personel hedefe ulaşamazsa uyar';
$lang['goal_notify_when_achieve']                      = 'Personel hedefe ulaşırsa uyar';
$lang['goal_progress']                                 = 'İlerleme';
$lang['goal_total']                                    = 'Toplam: %s';
$lang['goal_result_heading']                           = 'Hedef İlerleme';
$lang['goal_income_shown_in_base_currency']            = 'Toplam Gelir anapara biriminizde görüntülecek.';
$lang['goal_notify_when_end_date_arrives']             = 'Bitiş Tarihi yaklaştığında personeli uyar (CRON Gerekli).';
$lang['goal_staff_members_notified_about_achievement'] = 'Personel hedefe ulaşırsa personeli uyar';
$lang['goal_staff_members_notified_about_failure']     = 'Personel hata ile ilgili olarak uyarıldı';
$lang['goal_notify_staff_manualy']                     = 'Personeli Manuel olarak uyar';
$lang['goal_notify_staff_notified_manualy_success']    = 'Personele hedef sonuçları bildirildi';
$lang['goal_notify_staff_notified_manualy_fail']       = 'Personele Hedef Sonuçları Bildirilemedi.';

$lang['goal_achieved'] = 'Ulaşıldı';
$lang['goal_failed']   = 'Başarısız olundu';
$lang['goal_close']    = 'Çok Yaklaştın';

$lang['goal_type_total_income']                                         = 'Toplam Gelire Ulaşma';
$lang['goal_type_convert_leads']                                        = 'X Fırsat Dönüştür';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Müşteri Sayısını Arttır';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Leads Conversion is Excluded';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Müşteri Sayısını Arttır';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Leads Conversions is Included';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Tipe Göre Sözleşme Yapılması';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Is calculated from the date added to database';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Make Sözleşmeler By Type';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Is calculated from the contract start date';
$lang['goal_type_total_estimates_converted']                         = 'X Estimates Conversion ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Will be taken only estimates that will be converted to invoices';
$lang['goal_type_income_subtext']                                    = 'Income will be calculated in your base currency (not converted)';
# Payments
$lang['payment_transaction_id']                                      = 'Transaction ID';
# Settings Menu


$lang['acs_expenses']                                                = 'Harcamalar';
$lang['acs_expense_categories']                                      = 'Harcama Kategorileri';
# Expeneses


$lang['expense_category']                                            = 'Harcama Kategorisi';
$lang['expense_category_lowercase']                                  = 'harcama kategorisi';


$lang['new_expense']                                                 = 'Harcama Gir';
$lang['expense_add_edit_name']                                       = 'Kategori Adı';
$lang['expense_add_edit_description']                                = 'Kategori Açıklaması';


$lang['expense_categories']                                          = 'Harcama Kategorileri';
$lang['new_expense_category']                                        = 'Yeni Kategori';
$lang['dt_expense_description']                                      = 'Açıklama';




$lang['expense']                                                     = 'Harcama';
$lang['expenses']                                                    = 'Harcamalar';
$lang['expense_lowercase']                                           = 'harcama';
$lang['expense_add_edit_tax']                                        = 'Vergi';
$lang['expense_add_edit_customer']                                   = 'Müşteri';
$lang['expense_add_edit_currency']                                   = 'Para Birimi';
$lang['expense_add_edit_note']                                       = 'Not';
$lang['expense_add_edit_date']                                       = 'Harcama Tarihi';
$lang['expense_add_edit_amount']                                     = 'Miktar';
$lang['expense_add_edit_billable']                                   = 'Faturalanabilir';
$lang['expense_add_edit_attach_receipt']                             = 'Fiş / Fatura Görseli Ekle';
$lang['expense_add_edit_reference_no']                               = 'Referans #';


$lang['expense_receipt']                                             = 'Harcama Fiş / Fatura';
$lang['expense_receipt_lowercase']                                   = 'harcama fiş / fatura';
$lang['expense_dt_table_heading_category']                           = 'Kategori';
$lang['expense_dt_table_heading_amount']                             = 'Miktar';
$lang['expense_dt_table_heading_date']                               = 'Tarih';
$lang['expense_dt_table_heading_reference_no']                       = 'Referans #';
$lang['expense_dt_table_heading_customer']                           = 'Müşteri';
$lang['expense_dt_table_heading_payment_mode']                       = 'Ödeme Türü';








$lang['expense_converted_to_invoice']                                = 'Harcama başarılı bir şekilde faturaya dönüştürüldü';
$lang['expense_converted_to_invoice_fail']                           = 'Harcama faturaya dönüştürülürken hata oluştu. Logları inceleyin ya da tekrar deneyin.';
$lang['expense_copy_success']                                        = 'Harcama kopyalandı';
$lang['expense_copy_fail']                                           = 'Harcama Kopyalama Başarısız. Gerekli Alanları Kontrol edin ve tekrar deneyin.';
$lang['expenses_list_all']                                           = 'Hepsi';
$lang['expenses_list_billable']                                      = 'Faturalanabilir';
$lang['expenses_list_non_billable']                                  = 'Faturalanmaz';
$lang['expenses_list_invoiced']                                      = 'Faturalandı';
$lang['expenses_list_unbilled']                                      = 'Faturalanmadı';
$lang['expenses_list_recurring']                                     = 'Yinelenen';
$lang['expense_invoice_delete_not_allowed']                          = 'Bu harcamayı silemezsiniz! Bu harcama faturalandı.';
$lang['expense_convert_to_invoice']                                  = 'Faturaya Dönüştür';


$lang['expense_edit']                                                = 'Harcamayı Düzenle';
$lang['expense_delete']                                              = 'Sil';


$lang['expense_copy']                                                = 'Kopyala';
$lang['expense_invoice_not_created']                                 = 'Fatura Oluşturulmadı';


$lang['expense_billed']                                              = 'Faturalandı';
$lang['expense_not_billed']                                          = 'Fatura Ödenmedi';
$lang['expense_customer']                                            = 'Müşteri';




$lang['expense_note']                                                = 'Not:';
$lang['expense_date']                                                = 'Tarih:';
$lang['expense_ref_noe']                                             = 'Ref #:';


$lang['expense_tax']                                                 = 'Vergi:';
$lang['expense_amount']                                              = 'Miktar:';
$lang['expense_recurring_indicator']                                 = 'Yinelenen';
$lang['expense_already_invoiced']                                    = 'Bu harcama faturalandı.';
$lang['expense_recurring_auto_create_invoice']                       = 'Otomatik Fatura Oluştur';
$lang['expense_recurring_send_custom_on_renew']                      = 'Send the invoice to customer email when expense repeated';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'If this option is checked the invoice for the customer will be auto created when the expense will be renewed.';
$lang['report_expenses_full']                                        = 'Tam Rapor';
$lang['expenses_yearly_by_categories']                               = 'Kategorilere Göre Yıllık Harcamalar';
$lang['total_expenses_for']                                          = 'Toplam Harcamalar:'; // year
$lang['expenses_report_for']                                         = 'Harcamalar:'; // year
# Custom fields
$lang['custom_field_required']                                       = 'Gerekli';
$lang['custom_field_show_on_pdf']                                    = 'PDF Göster';
$lang['custom_field_leads']                                          = 'Fırsatlar';
$lang['custom_field_customers']                                      = 'Müşteriler';
$lang['custom_field_staff']                                          = 'Personel';
$lang['custom_field_contracts']                                      = 'Sözleşmeler';
$lang['custom_field_tasks']                                          = 'Görevler';
$lang['custom_field_expenses']                                       = 'Harcamalar';
$lang['custom_field_invoice']                                        = 'Fatura';
$lang['custom_field_estimate']                                       = 'Proforma';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Özel Personel Notu';


# Business News
$lang['business_news'] = 'İş Dünyasından Haberler';

# Navigation
$lang['nav_todo_items']               = 'Yapılacak İşler';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Sözleşme Türü';
# Version 1.0.5
# General


$lang['no_tax']                             = 'Vergi Yok';
$lang['numbers_not_formated_while_editing'] = 'The rate in the input field is not formated while edit/add item and should remain not formated dont try to format it manually in here.';
# Contracts
$lang['contracts_view_expired']             = 'Süresi Dolan';
$lang['contracts_view_without_dateend']     = 'Bitiş Tarihi Olmayan Sözleşmeler';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Sözleşmeler';
# Invoices General
$lang['invoice_estimate_general_options']        = 'Genel Seçenekler';
$lang['invoice_table_item_description']          = 'Açıklama';
$lang['invoice_recurring_indicator']             = 'Tekrarlayan';

# Estimates
$lang['estimate_convert_to_invoice_successfuly'] = 'Proforma Başarıyla Faturaya dönüştürüldü';
$lang['estimate_table_item_description']         = 'Açıklama';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Ana Para Birimini silemezsiniz. Yeni bir Ana Para Birimi ekledikten sonra silebilirsiniz.';
$lang['invoice_copy']              = 'Faturayı Kopyala';
$lang['invoice_copy_success']      = 'Fatura Kopyalandı';
$lang['invoice_copy_fail']         = 'Fatura Kopyalamada Hata';
$lang['invoice_due_after_help']    = 'Set zero to avoid calculation';

$lang['show_shipping_on_invoice'] = 'Kargolama detaylarını faturada göster';

# Estimates
$lang['show_shipping_on_estimate']         = 'Kargolama detaylarını Proformada göster';
$lang['is_invoiced_estimate_delete_error'] = 'Bu Proforma Faturalandı. Silemezsiniz';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Alıcı';
$lang['customer_profile_details'] = 'Müşteri Bilgileri';
$lang['billing_shipping']         = 'Faturalama & Kargolama';
$lang['billing_address']          = 'Fatura Adresi';
$lang['shipping_address']         = 'Kargo Adresi';

$lang['billing_street']  = 'Adres';
$lang['billing_city']    = 'Şehir';
$lang['billing_state']   = 'İlçe';
$lang['billing_zip']     = 'Posta Kodu';
$lang['billing_country'] = 'Ülke';

$lang['shipping_street']                    = 'Adres';
$lang['shipping_city']                      = 'Şehir';
$lang['shipping_state']                     = 'İlçe';
$lang['shipping_zip']                       = 'Posta Kodu';
$lang['shipping_country']                   = 'Ülke';
$lang['get_shipping_from_customer_profile'] = 'Kargolama bilgilerini Müşteri Profilinden al';

# Customer
$lang['customer_file_from']                                    = 'Showing from %s';
$lang['customer_default_currency']                             = 'Varsayılan Para Birimi';
$lang['customer_no_attachments_found']                         = 'Ek Bulunamadı';
$lang['customer_update_address_info_on_invoices']              = 'Önceki Proforma ve Faturalardaki Kargo/Fatura Bilgilerini Güncelle';




$lang['customer_update_address_info_on_invoices_help']         = 'Eğer işaretlerseniz Tüm Fatura ve Proformalardaki bilgiler güncellenecektir. Not: Ödenmiş Faturalar etkilenmez.';
$lang['setup_google_api_key_customer_map']                     = 'Müşteri Haritasının Görüntülenebilmesi için Google api key kurulumu zorunludur.';
$lang['customer_attachments_file']                             = 'Dosya';
$lang['client_send_set_password_email']                        = 'Parola Sıfırlama Maili Gönder';
$lang['customer_billing_same_as_profile']                      = 'Müşteri Bilgileri ile Aynı';
$lang['customer_billing_copy']                                 = 'Fatura Adresini Kopyala';
$lang['customer_map']                                          = 'Harita';
$lang['set_password_email_sent_to_client']                     = 'Şifre Sıfırlama Emaili müşteriye başarıyla gönderildi';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profil güncellendi ve Şifre Ayarlama emaili müşteriye başarıyla gönderildi';
$lang['customer_attachments']                                  = 'Dosyalar';
$lang['customer_longitude']                                    = 'Boylam (Google Maps)';
$lang['customer_latitude']                                     = 'Enlem (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Parola';
$lang['admin_auth_set_password_repeat']   = 'Parolayı Tekrarlayın';
$lang['admin_auth_set_password_heading']  = 'Parola Ayarla';
$lang['password_set_email_subject']       = 'Yeni Parolayı ayarlayın %s';
# General
$lang['apply']                            = 'Uygula';
$lang['department_calendar_id']           = 'Google Takvim ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Varsayılan Dil';
$lang['system_default_string']            = 'Sistem Varsayılanı';
$lang['advanced_options']                 = 'Gelişmiş Seçenekler';
# Expenses
$lang['expense_list_invoice']             = 'Faturalandı';
$lang['expense_list_billed']              = 'Faturalandı';
$lang['expense_list_unbilled']            = 'Faturalanmadı';
# Leads
$lang['lead_merge_custom_field']          = 'Merge as custom field';
$lang['lead_merge_custom_field_existing'] = 'Merge with database field';
$lang['lead_dont_merge_custom_field']     = 'Birleştirme';
$lang['no_lead_notes_found']              = 'Fırsat Notu Bulunamadı';
$lang['leads_view_list']                  = 'Liste';
$lang['lost_leads']                       = 'Kayıp Fırsatlar';
$lang['junk_leads']                       = 'Spam Fırsatlar';
$lang['lead_mark_as_lost']                = 'Kayıp olarak işaretle';
$lang['lead_unmark_as_lost']              = 'Fırsatı Kayıp olarak işaretleme';
$lang['lead_marked_as_lost']              = 'Fırsat başarıyla Kayıp olarak işaretlendi';
$lang['lead_unmarked_as_lost']            = 'Fırsat Kayıp olarak işaretlenmedi';
$lang['leads_status_color']               = 'Renk';

$lang['lead_mark_as_junk']     = 'Spam olarak işaretle';
$lang['lead_unmark_as_junk']   = 'Fırsatı Spam olarak İşaretleme';
$lang['lead_marked_as_junk']   = 'Fırsat başarıyla Spam olarak işaretlendi';
$lang['lead_unmarked_as_junk'] = 'Fırsat Spam olarak işaretlenmedi';









$lang['lead_not_found']                                                      = 'Fırsat Bulunamadı';
$lang['lead_lost']                                                           = 'Kayıp';
$lang['lead_junk']                                                           = 'SPAM';
$lang['leads_not_assigned']                                                  = 'Atanmadı';
# Contacts
$lang['contract_not_visible_to_client']                                      = 'Müşteriden Gizle';


$lang['contract_edit_overview']                                              = 'Sözleşme Görünümü';
$lang['contract_attachments']                                                = 'Ekler';
# Tasks
$lang['task_view_make_public']                                               = 'Halka Açık Yap';
$lang['task_is_private']                                                     = 'Özel Görev';
$lang['task_finished']                                                       = 'Tamamlandı';
$lang['task_single_related']                                                 = 'İlişkili';
$lang['task_unmark_as_complete']                                             = 'Tamamlandı olarak işaretleme';
$lang['task_unmarked_as_complete']                                           = 'Görev Tamamlandı olarak işaretlenmedi';
$lang['task_relation']                                                       = 'İlişkili';


$lang['task_public']                                                         = 'Genel';
$lang['task_public_help']                                                    = 'If you set this task to public will be visible for all staff members. Otherwise will be only visible to members who are assignees,followers,creator or administrators';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Output client PDF documents from admin area in client language';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'If this options is set to yes and ex. the system default language is english and client have setup language french the pdf documents will be outputed in the client language';
$lang['settings_cron_surveys']                                               = 'Anketler';


$lang['settings_default_tax']                                                = 'Varsayılan Vergi';
$lang['setup_calendar_by_departments']                                       = 'Departmanlara Özel Takvim Ayarla';
$lang['settings_calendar']                                                   = 'Takvim';
$lang['settings_sales_invoice_due_after']                                    = 'Invoice due after (days)';
$lang['settings_google_api']                                                 = 'Google API Anahtarı';
$lang['settings_gcal_main_calendar_id']                                      = 'Google Takvim IDsi';
$lang['settings_gcal_main_calendar_id_help']                                 = 'This is the main company calendar. All events from this calendar will be shown. If you want to specify a calendar based on departments you can add in the department Google Calendar ID.';

$lang['show_on_calendar']                  = 'Takvimde Göster';
$lang['show_invoices_on_calendar']         = 'Faturalar';
$lang['show_estimates_on_calendar']        = 'Proformalar';
$lang['show_contracts_on_calendar']        = 'Sözleşmeler';
$lang['show_tasks_on_calendar']            = 'Görevler';
$lang['show_customer_reminders_on_calendar'] = 'Müşteri Hatırlatıcı';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Copy custom fields to customer profile';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'If any of the following custom fields do not exists for customer will be auto created with the same name otherwise only the value will be copied from the lead profile.';




$lang['lead_profile']                                                = 'Profil';
$lang['lead_is_client']                                              = 'Müşteri';
$lang['leads_kan_ban_notes_title']                                   = 'Notlar';
$lang['leads_email_integration_folder_no_encryption']                = 'Şifreleme Yok';
$lang['leads_email_integration']                                     = 'Email Entegrasyonu';
$lang['leads_email_active']                                          = 'Aktif';
$lang['leads_email_integration_imap']                                = 'IMAP Sunucu';
$lang['leads_email_integration_email']                               = 'Email Adresi (Giriş)';
$lang['leads_email_integration_password']                            = 'Parola';
$lang['leads_email_integration_default_source']                      = 'Varsayılan Kaynak';
$lang['leads_email_integration_check_every']                         = 'Her Dakika Kontrol Et';
$lang['leads_email_integration_default_assigned']                    = 'Yeni Fırsatın Sorumlusu';
$lang['leads_email_encryption']                                      = 'Şifreleme';
$lang['leads_email_integration_updated']                             = 'Email Entegrasyonu Güncellendi';
$lang['leads_email_integration_default_status']                      = 'Varsayılan Durum';
$lang['leads_email_integration_folder']                              = 'Klasör';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Fırsat İçeri Aktarıldığında Uyar';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Sadece açılmayan emailleri kontrol et';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'The script will auto set the email to opened after check. This is used to prevent checking all the emails again and again. Its not recomended to uncheck this option if you have a lot emails and you have setup a lot forwarding to the email you setup for leads';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notify if lead send email multiple times';
$lang['leads_email_integration_test_connection']                     = 'IMAP Bağlantısını Test Edin';
$lang['lead_email_connection_ok']                                    = 'IMAP Bağlantısı başarılı';
$lang['lead_email_connection_not_ok']                                = 'IMAP Bağlantısı kurulamadı';
$lang['lead_email_activity']                                         = 'Email Aktivitesi';
$lang['leads_email_integration_notify_roles']                        = 'Uyarılacak Roller';
$lang['leads_email_integration_notify_staff']                        = 'Uyarılacak Personel';
$lang['lead_public']                                                 = 'Halka Açık';
# Knowledge Base

$lang['kb_group_color']                = 'Renk';
$lang['kb_group_order']                = 'Sıra';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Toplu PDF Dışarı Aktar';
$lang['bulk_export_pdf_payments']      = 'Ödemeler';
$lang['bulk_export_pdf_estimates']     = 'Proformalar';
$lang['bulk_export_pdf_invoices']      = 'Faturalar';
$lang['bulk_pdf_export_button']        = 'Dışa Aktar';
$lang['bulk_pdf_export_select_type']   = 'Tipi Seç';
$lang['no_data_found_bulk_pdf_export'] = 'Dışarı Aktarılacak Veri bulunamadı';
$lang['bulk_export_status_all']        = 'Tümü';
$lang['bulk_export_status']            = 'Durum';
$lang['bulk_export_zip_payment_modes'] = 'Made payments by';
$lang['bulk_export_include_tag']       = 'Etiketi Dahil Et';
$lang['bulk_export_include_tag_help']  = 'Ex. Original or Copy. The tag will be outputed in the PDF. Recomended to use only 1 tag';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Ön Tanımlı Yanıt bulunamadı';
## Clients area
$lang['clients_contract_attachments']  = 'Ekler';
# Backup
$lang['backup_type_full']              = 'Tam Yedekleme';
$lang['backup_type_db']                = 'Veritabanı Yedekleme';

$lang['auto_backup_options_updated']     = 'Otomatik Yedekleme seçenekleri güncellendi';
$lang['auto_backup_every']               = 'Her X günde yedekleme oluştur';
$lang['auto_backup_enabled']             = 'Aktif (Cron Gerekli)';
$lang['auto_backup']                     = 'Otomatik Yedekleme';
$lang['backup_delete']                   = 'Yedek Silindi';
$lang['create_backup']                   = 'Yedekleme Oluştur';
$lang['backup_success']                  = 'Yedekleme Başarılı';
$lang['utility_backup']                  = 'Veritabanı Yedekleme';
$lang['utility_create_new_backup_db']    = 'Veritabanı Yedekleme Oluştur';
$lang['utility_backup_table_backupname'] = 'Yedekleme';
$lang['utility_backup_table_backupsize'] = 'Yedekleme Boyutu';
$lang['utility_backup_table_backupdate'] = 'Tarih';
$lang['utility_db_backup_note']          = 'Not: Due to the limited execution time and memory available to PHP, backing up very large databases may not be possible. If your database is very large you might need to backup directly from your SQL server via the command line, or have your server admin do it for you if you do not have root privileges.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Teklifler';
$lang['clients_nav_support']   = 'Destek';
# General
$lang['more']                  = 'Daha';
$lang['add_item']              = 'Ürün Ekle';
$lang['goto_admin_area']       = 'Yönetim Paneline Git';
$lang['click_here_to_edit']    = 'Düzenlemek İçin Tıklayın';
$lang['delete']                = 'Sil %s';
$lang['welcome_top']           = 'Hoşgeldiniz %s';

# Customers
$lang['customer_permissions']         = 'İzinler';
$lang['customer_permission_invoice']  = 'Faturalar';
$lang['customer_permission_estimate'] = 'Estimate';
$lang['customer_permission_proposal'] = 'Teklifler';
$lang['customer_permission_contract'] = 'Sözleşmeler';
$lang['customer_permission_support']  = 'Destek';


#Tasks
$lang['task_related_to'] = 'İlişki';

# Send file
$lang['custom_file_fail_send']    = 'Dosya gönderilirken hata oluştu';
$lang['custom_file_success_send'] = 'Dosya %s başarıyla gönderildi';
$lang['send_file_subject']        = 'Email Konusu';
$lang['send_file_email']          = 'Email Adresi';
$lang['send_file_message']        = 'Mesaj';
$lang['send_file']                = 'Dosya Gönder';
$lang['add_checklist_item']       = 'Kontrol Listesi Maddesi';
$lang['task_checklist_items']     = 'Kontrol Listesi Maddeleri';

# Import
$lang['default_pass_clients_import'] = 'Tüm Kişiler İçin Varsayılan Parola';
$lang['simulate_import']             = 'İçeri Aktarmayı Simüle Et';
$lang['import_upload_failed']        = 'Yükleme Hatalı';
$lang['import_total_imported']       = 'Toplam İçeri Aktarılan: %s';
$lang['import_leads']                = 'Fırsatları İçe Aktar';
$lang['import_customers']            = 'Müşterileri İçe Aktar';
$lang['choose_csv_file']             = 'CSV Dosyası Seç';
$lang['import']                      = 'İçe Aktar';
$lang['lead_import_status']          = 'Durum';
$lang['lead_import_source']          = 'Kaynak';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Teklifler';

# Invoices
$lang['delete_invoice'] = 'Sil';

# Calendar
$lang['calendar_lead_reminder'] = 'Fırsat Hatırlatıcı';

$lang['items']      = 'Ürünler';
$lang['support']    = 'Destek';
$lang['new_ticket'] = 'Yeni Talep';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Müşteri Hatırlatıcı Ekle';
$lang['lead_set_reminder_title']        = 'Fırsat Hatırlatıcı Ekle';
$lang['set_reminder_tooltip']           = 'This option allows you to never forget anything about your customers.';
$lang['client_reminders_tab']           = 'Hatırlatıcı';
$lang['leads_reminders_tab']            = 'Hatırlatıcı';

# Tickets
$lang['delete_ticket_reply']  = 'Yanıtı Sil';
$lang['ticket_priority_edit'] = 'Öncelik Düzenle';
$lang['ticket_priority_add']  = 'Öncelik Ekle';
$lang['ticket_status_edit']   = 'Talep Durumunu Düzenle';
$lang['ticket_service_edit']  = 'Talep Hizmetini Düzenle';
$lang['edit_department']      = 'Departmanı Düzenle';

# Expenses
$lang['edit_expense_category']                                    = 'Harcama Kategorisini Düzenle';
# Settings
$lang['customer_default_country']                                 = 'Varsayılan Ülke';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Require client to be logged in to view estimate';


$lang['set_reminder']                                             = 'Hatırlatıcı Kur';
$lang['set_reminder_date']                                        = 'Hatırlatma Tarihi';
$lang['reminder_description']                                     = 'Açıklama belirle';
$lang['reminder_notify_me_by_email']                              = 'Email Gönderimi';
$lang['reminder_added_successfuly']                               = 'Hatırlatıcı başarıyla eklendi. Zamanında bilgilendirileceksiniz.';
$lang['reminder_description']                                     = 'Açıklama';
$lang['reminder_date']                                            = 'Tarih';


$lang['reminder_staff']                                           = 'Hatırlatılacak Kişi';
$lang['reminder_is_notified']                                     = 'Bildirim Gösterildi mi?';
$lang['reminder_is_notified_boolean_no']                          = 'Hayır';
$lang['reminder_is_notified_boolean_yes']                         = 'Evet';




$lang['reminder_set_to']                                          = 'Hatırlatılacak Kişi';
$lang['reminder_deleted']                                         = 'Hatırlatıcı silindi.';
$lang['reminder_failed_to_delete']                                = 'Hatırlatıcı silinirken hata oluştu';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Faturanın / Proformanın durumunu PDF te göster';
$lang['email_piping_default_priority']                            = 'Yakalanan Talebin varsayılan önceliği';
$lang['show_lead_reminders_on_calendar']                          = 'Fırsat Hatırlatıcı';
$lang['tickets_piping']                                           = 'Email Yakalama';
$lang['email_piping_only_replies']                                = 'Only Replies Allowed by Email';
$lang['email_piping_only_registered']                             = 'Pipe Only on Registed Users';
$lang['email_piping_enabled']                                     = 'Aktif';

# Estimates
$lang['view_estimate_as_client']         = 'Proformayı Müşteri olarak görüntüle';
$lang['estimate_mark_as']                = '%s olarak işaretle';
$lang['estimate_status_changed_success'] = 'Proforma durumu değişti';
$lang['estimate_status_changed_fail']    = 'Proforma durumu değiştirilirken hata oluştu';
$lang['estimate_email_link_text']        = 'View Estimate';

# Proposals
$lang['proposal_to']                            = 'Firma / Kişi';
$lang['proposal_date']                          = 'Tarih';
$lang['proposal_address']                       = 'Adres';
$lang['proposal_phone']                         = 'Telefon';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Oluşturma Tarihi';
$lang['proposal_open_till']                     = 'Geçerlilik Tarihi';
$lang['proposal_status_open']                   = 'Açık';
$lang['proposal_status_accepted']               = 'Kabul Edildi';
$lang['proposal_status_declined']               = 'Reddedildi';
$lang['proposal_status_sent']                   = 'Gönderildi';
$lang['proposal_expired']                       = 'Süresi Doldu';
$lang['proposal_subject']                       = 'Konu';
$lang['proposal_total']                         = 'Toplam';
$lang['proposal_status']                        = 'Durum';
$lang['proposals_list_all']                     = 'Tümü';
$lang['proposals_leads_related']                = 'Fırsat İlişkili';
$lang['proposals_customers_related']            = 'Müşteri İlişkili';
$lang['proposal_related']                       = 'İlişki';
$lang['proposal_for_lead']                      = 'Fırsat';
$lang['proposal_for_customer']                  = 'Müşteri';
$lang['proposal']                               = 'Teklif';
$lang['proposal_lowercase']                     = 'teklif';
$lang['proposals']                              = 'Teklifler';
$lang['proposals_lowercase']                    = 'teklifler';
$lang['new_proposal']                           = 'Yeni Teklif';
$lang['proposal_currency']                      = 'Para Birimi';
$lang['proposal_allow_comments']                = 'Yorumlara İzin Ver';
$lang['proposal_allow_comments_help']           = 'If you check this options comments will be allowed when your clients view the proposal.';

$lang['proposal_edit']                          = 'Düzenle';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Email Gönder ';
$lang['proposal_send_to_email_title']           = 'Teklifi Email İle Gönder';
$lang['proposal_attach_pdf']                    = 'PDF Ekle';
$lang['proposal_preview_template']              = 'Şablonu Görüntüle';
$lang['proposal_view']                          = 'Teklifi Görüntüle';
$lang['proposal_copy']                          = 'Kopyala';
$lang['proposal_delete']                        = 'Sil';
$lang['proposal_to']                            = 'Kime';
$lang['proposal_add_comment']                   = 'Yorum Ekle';
$lang['proposal_sent_to_email_success']         = 'Teklif email ile gönderildi.';
$lang['proposal_sent_to_email_fail']            = 'Failed to sent proposal to email';
$lang['proposal_copy_fail']                     = 'Failed to copy proposal';
$lang['proposal_copy_success']                  = 'Proposal copied successfully';
$lang['proposal_status_changed_success']        = 'Proposal status changed successfully';
$lang['proposal_status_changed_fail']           = 'Failed to change proposal status';
$lang['proposal_assigned']                      = 'Atanan';
$lang['proposal_comments']                      = 'Yorumlar';
$lang['proposal_convert']                       = 'Dönüştür';
$lang['proposal_convert_estimate']              = 'Proforma';
$lang['proposal_convert_invoice']               = 'Fatura';
$lang['proposal_convert_to_estimate']           = 'Proformaya Çevir';
$lang['proposal_convert_to_invoice']            = 'Faturaya Çevir';
$lang['proposal_convert_to_lead_disabled_help'] = 'You need to convert the lead to customer in order to create %s';
$lang['proposal_convert_not_related_help']      = 'The proposal needs to be related to customer in order to convert to %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposal converted to estimate successfully';
$lang['proposal_converted_to_invoice_success']  = 'Proposal converted to invoice successfully';
$lang['proposal_converted_to_estimate_fail']    = 'Failed to convert proposal to estimate';
$lang['proposal_converted_to_invoice_fail']     = 'Failed to convert proposal to invoice';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Toplam %s';
$lang['proposal_accept_info']  = 'Kabul Et';
$lang['proposal_decline_info'] = 'Reddet';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Sıfırla';
$lang['customer_reset_password_heading']  = 'Parola Sıfırlama';
$lang['customer_forgot_password_heading'] = 'Unutulan Parola Hatırlatma';
$lang['customer_forgot_password']         = 'Parolanızı mı Unuttunuz?';
$lang['customer_reset_password']          = 'Parola';
$lang['customer_reset_password_repeat']   = 'Parolayı Tekrarla';
$lang['customer_forgot_password_email']   = 'Email Adresi';
$lang['customer_forgot_password_submit']  = 'Gönder';
$lang['customer_ticket_subject']          = 'Konu';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Teklifler';

# Tasks
$lang['add_task_attachments']                 = 'Ek';
$lang['task_view_attachments']                = 'Ekler';
$lang['task_view_description']                = 'Açıklama';

# Customer Groups
$lang['customer_group_add_heading']  = 'Yeni Müşteri Grubu Ekle';
$lang['customer_group_edit_heading'] = 'Müşteri Grubunu Düzenle';
$lang['new_customer_group']          = 'Yeni Müşteri Grubu';
$lang['customer_group_name']         = 'Adı';
$lang['customer_groups']             = 'Gruplar';
$lang['customer_group']              = 'Müşteri Grubu';
$lang['customer_group_lowercase']    = 'müşteri grubu';

$lang['customer_have_invoices_by']       = 'Contains invoices by status %s';
$lang['customer_have_estimates_by']      = 'Contains estimates by status %s';
$lang['customer_have_contracts_by_type'] = 'Having contracts by type %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Tabloda Göster';
$lang['custom_field_show_on_client_portal']      = 'Müşteri Portalında Göster';
$lang['custom_field_show_on_client_portal_help'] = 'If this field is checked also will be shown in tables';
$lang['custom_field_visibility']                 = 'Görünürlük';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'You can add here also translate strings. So if staff/system have language other then the default the menu item names will be outputed in the staff language. Otherwise if the string dont exists in the translate file will be taken the string you enter here.';
$lang['utilities_menu_icon']                = 'Icon';
$lang['active_menu_items']                  = 'Aktif Menu Nesneleri';
$lang['inactive_menu_items']                = 'Pasif Menu Nesneleri';
$lang['utilities_menu_permission']          = 'İzin';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Adı';
$lang['utilities_menu_save']                = 'Menüyü Kaydet';

# Knowledge Base
$lang['view_articles_list']     = 'Makaleleri Görüntüle';
$lang['view_articles_list_all'] = 'Tüm Makaleler';
$lang['als_add_article']        = 'Tüm Makaleler';
$lang['als_all_articles']       = 'Tüm Makaleler';
$lang['als_kb_groups']          = 'Gruplar';

# Customizer Menu
$lang['menu_builder']            = 'Menu Kurulumu';
$lang['main_menu']               = 'Ana Menu';
$lang['setup_menu']              = 'Menu Kurulumu';
$lang['utilities_menu_url_help'] = '%s is auto appended to the url';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Spam Filtreleri';
$lang['spam_filter']                  = 'Spam Filtresi';
$lang['new_spam_filter']              = 'Yeni Spam Filtresi';
$lang['spam_filter_blocked_senders']  = 'Engellenen Göndericiler';
$lang['spam_filter_blocked_subjects'] = 'Engellenen Konular';
$lang['spam_filter_blocked_phrases']  = 'Engellenen Cümleler';
$lang['spam_filter_content']          = 'İçerik';
$lang['spamfilter_edit_heading']      = 'Spam Filtresi Düzenle';
$lang['spamfilter_add_heading']       = 'Spam Filtresi Ekle';
$lang['spamfilter_type']              = 'Tip';
$lang['spamfilter_type_subject']      = 'Konu';
$lang['spamfilter_type_sender']       = 'Gönderici';
$lang['spamfilter_type_phrase']       = 'Cümle';

# Tickets
$lang['block_sender']               = 'Göndericiyi Engelle';
$lang['sender_blocked']             = 'Engellenen Gönderici';
$lang['sender_blocked_successfuly'] = 'Gönderici Engelleme Başarılı';
$lang['ticket_date_created']        = 'Oluşturma Tarihi';

#KB
$lang['edit_kb_group']             = 'Grup Düzenle';
# Leads
$lang['edit_source']               = 'Kaynak Düzenle';
$lang['edit_status']               = 'Durum Düzenle';
# Contacts
$lang['contract_type_edit']        = 'Sözleşme Tipi Düzenle';
# Reports
$lang['report_by_customer_groups'] = 'Müşteri Gruplarına Göre Toplam Değer';
#Utilities
$lang['ticket_pipe_log']           = 'Talep Yakalama Logları';
$lang['ticket_pipe_name']          = 'Kimden İsim';
$lang['ticket_pipe_email_to']      = 'Kime';
$lang['ticket_pipe_email']         = 'Kimden Email';
$lang['ticket_pipe_subject']       = 'Konu';
$lang['ticket_pipe_message']       = 'Mesaj';
$lang['ticket_pipe_date']          = 'Tarih';
$lang['ticket_pipe_status']        = 'Durum';

# Home





$lang['home_latest_activity']       = 'Son Aktivite';
$lang['home_my_tasks']              = 'Görevlerim';
$lang['home_latest_activity']       = 'Son Aktiviteler';
$lang['home_my_todo_items']         = 'Yapılacak İşlerim';
$lang['home_widget_view_all']       = 'Hepsini Görüntüle';
$lang['home_stats_full_report']     = 'Tam Rapor';

# Validation - Customer Portal

$lang['form_validation_required']    = '{field} alanı gerekli.';
$lang['form_validation_valid_email'] = '{field} geçerli mail adresi olmalı.';
$lang['form_validation_matches']     = '{field} field does not match the {param} field.';
$lang['form_validation_is_unique']   = 'The {field} field must contain a unique value.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Calendar event today - %s ...';
$lang['not_event_public'] = 'Public event start today - %s ...';
$lang['not_contract_expiry_reminder'] = 'Contract expiry reminder - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Recurring Expenses Cron Job Activity';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Recurring Invoices Cron Job Activity';
$lang['not_recurring_total_renewed'] = 'Toplam Yenilenen: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Action taken from recurring expense';
$lang['not_invoice_created'] = 'Fatura Oluşturuldu:';
$lang['not_invoice_renewed'] = 'Fatura Yenilendi:';
$lang['not_expense_renewed'] = 'Yenilenen Harcama:';
$lang['not_invoice_sent_to_customer'] = 'fatura Müşteriye Gönderildi: %s';
$lang['not_invoice_sent_yes'] = 'Evet';
$lang['not_invoice_sent_not'] = 'Hayır';
$lang['not_action_taken_from_recurring_invoice'] = 'Action taken from recurring invoice:';
$lang['not_new_reminder_for'] = '%s İçin Yeni Hatırlatıcı ';
$lang['not_received_one_or_more_messages_lead'] = 'Fırsattan bir email daha alındı';
$lang['not_received_lead_imported_email_integration'] = 'Email Entegrasyonundan Fırsat İçeri Aktarıldı';
$lang['not_lead_imported_attachment'] = 'Email den Dosya Eki içeri aktarıldı.';
$lang['not_estimate_status_change'] = 'Email den Dosya Eki içeri aktarıldı.';
$lang['not_estimate_status_updated'] = 'Proforma Durumu Güncellendi: %s buradan %s buraya';
$lang['not_goal_message_success'] = 'Tebrikler! Yedi Hedefe ulaştık.<br /> Hedef Tipi: %s
<br />Hedef Başarısı: %s
<br />Tüm Başarılar: %s
<br />Başlangıç Tarihi: %s
<br />Bitiş Tarihi: %s';
$lang['not_assigned_lead_to_you'] = 'ana %s fırsatını atadı';
$lang['not_lead_activity_assigned_to'] = '%s, %s personeline atandı';
$lang['not_lead_activity_attachment_deleted'] = 'Dosya Eki Silindi';
$lang['not_lead_activity_status_updated'] = '%s Fırsatın durumu %s iken %s olarak güncelledi. ';
$lang['not_lead_activity_contacted'] = '%s contacted this lead on %s';
$lang['not_lead_activity_created'] = '%s fırsat oluşturdu';
$lang['not_lead_activity_marked_lost'] = 'Kayıp olarak işaretlendi';
$lang['not_lead_activity_unmarked_lost'] = 'Kayıp işareti kaldırıldı.';
$lang['not_lead_activity_marked_junk'] = 'SPAM olarak işaretlendi.';
$lang['not_lead_activity_unmarked_junk'] = 'SPAM işareti kaldırıldı.';
$lang['not_lead_activity_added_attachment'] = 'Dosya Eki eklendi';
$lang['not_lead_activity_converted_email'] = 'Fırsatın email adresi değişti. İlk email adresi: %s idi. %s email adresi ile müşteri olarak eklendi';
$lang['not_lead_activity_converted'] = '%s Fırsattan Müşteriye dönüştürüldü.';
$lang['not_liked_your_post'] = '%s kişisi senin %s mesajını beğendi...';
$lang['not_commented_your_post'] = '%s kişisi senin %s mesajına yorum yaptı...';
$lang['not_liked_your_comment'] = '%s kişisi senin %s yorumunu beğendi...';
$lang['not_proposal_assigned_to_you'] = 'Teklif sana atandı - %s ...';
$lang['not_proposal_comment_from_client'] = 'Müşteri %s teklifine yeni yorum yaptı...';
$lang['not_proposal_proposal_accepted'] = 'Teklif Kabul Edildi';
$lang['not_proposal_proposal_declined'] = 'Teklif Reddedildi';
$lang['not_task_added_you_as_follower'] = '%s görevine takipçi olarak ekledi ...';
$lang['not_task_added_someone_as_follower'] = '%s kişisi %s görevine takipçi olarak eklendi...';
$lang['not_task_added_himself_as_follower'] = '%s görevine kendisini takipçi olarak ekledi...';
$lang['not_task_assigned_to_you'] = 'sana görev atandı %s ...';
$lang['not_task_assigned_someone'] = '%s kişisi %s görevine atandı...';
$lang['not_task_will_do_user'] = 'will do task %s ...';
$lang['not_task_new_attachment'] = 'Yeni Dosya Eki Eklendi';
$lang['not_task_marked_as_complete'] = 'marked task as complete %s';
$lang['not_task_unmarked_as_complete'] = 'unmarked task as complete %s';
$lang['not_ticket_assigned_to_you'] = 'Ticket assigned to you - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Ticket reassigned to you - %s ...';
$lang['not_estimate_customer_accepted'] = 'Congratulations! Client accepted estimate with number %s';
$lang['not_estimate_customer_declined'] = 'Client declined estimate with number %s';
$lang['estimate_activity_converted'] = 'converted this estimate to invoice.<br /> %s';
$lang['estimate_activity_created'] = 'Created the estimate';
$lang['invoice_estimate_activity_removed_item'] = 'removed item <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Estimate number changed from %s to %s';
$lang['invoice_activity_number_changed'] = 'Invoice number changed from %s to %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'updated item short description from %s to %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'updated item long description from <b>%s</b> to <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'updated item rate from %s to %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'updated quantity on item <b>%s</b> from %s to %s';
$lang['invoice_estimate_activity_added_item'] = 'added new item <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'sent estimate to client';
$lang['estimate_activity_client_accepted_and_converted'] = 'Customer accepted this estimate. Estimate is converted to invoice with number %s';
$lang['estimate_activity_client_accepted'] = 'Customer accepted this estimate';
$lang['estimate_activity_client_declined'] = 'Client declined this estimate';
$lang['estimate_activity_marked'] = 'marked estimate as %s';
$lang['invoice_activity_status_updated'] = 'Invoice status updated from %s to %s';
$lang['invoice_activity_created'] = 'Fatura Oluşturdu';
$lang['invoice_activity_from_expense'] = 'Harcamayı Faturaya Çevirdi';
$lang['invoice_activity_recuring_created'] = '[Recurring] Invoice created by CRON';
$lang['invoice_activity_recuring_from_expense_created'] = '[Invoice From Expense] Invoice created by CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Invoice sent to customer by CRON';
$lang['invoice_activity_sent_to_client'] = 'sent invoice to customer';
$lang['invoice_activity_marked_as_sent'] = 'marked invoice as sent';
$lang['invoice_activity_payment_deleted'] = 'deleted payment for the invoice. Payment #%s, total amount %s';
$lang['invoice_activity_payment_made_by_client'] = 'Client made payment for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'recorded payment from total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Added attachment';

# Navigation
$lang['top_search_placeholder'] = 'Ara...';

# Staff
$lang['staff_profile_inactive_account'] = 'Bu personel hesabı pasif';

# Estimates
$lang['copy_estimate'] = 'Proformayı Kopyala';
$lang['estimate_copied_successfuly'] = 'Proforma başarılı bir şekilde kopyalandı';
$lang['estimate_copied_fail'] = 'Proforma kopyalanamadı.';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Bana Atanan Görevler';
$lang['tasks_view_follower_by_user'] = 'Takim Ettğim Görevler';
$lang['no_tasks_found'] = 'Görev Bulunamadı';

# Leads
$lang['leads_dt_datecreated'] = 'Oluşturuldu';
$lang['leads_sort_by'] = 'Sırala';
$lang['leads_sort_by_datecreated'] = 'Oluşturma Tarihi';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban Sıralama';

# Proposals
$lang['proposal_items_name'] = 'Ürün';
$lang['proposal_items_description'] = 'Açıklama';
$lang['proposal_items_qty'] = 'Adet';
$lang['proposal_items_rate'] = 'Ücret';
$lang['proposal_items_tax'] = 'Vergi';
$lang['proposal_items_amount'] = 'Miktar';

# Authentication
$lang['check_email_for_reseting_password'] = 'Şifrenizi sıfırlamak için e-postanızı kontrol edin';
$lang['inactive_account'] = 'Pasif Hesap';
$lang['error_setting_new_password_key'] = 'Yeni şifre belirlenirken hata oluştu.';
$lang['password_reset_message'] = 'Şifreniz sıfırlandı. Lütfen giriş yapın!';
$lang['password_reset_message_fail'] = 'Şifrenizi sıfırlarken hata oluştu. Lütfen tekrar deneyin.';
$lang['password_reset_key_expired'] = 'Parola süresi doldu ve ya yanlış kullanıcı';
$lang['admin_auth_reset_pass_repeat'] = 'Parola Tekrar';
$lang['auth_reset_pass_email_not_found'] = 'Email bulunamadı';
$lang['auth_reset_password_submit'] = 'Parolayı Sıfırla';

# Settings
$lang['settings_amount_to_words'] = 'Tutarı Yazıyla Yaz';
$lang['settings_amount_to_words_desc'] = 'Fatura, Proforma ya da Teklifte toplam tutarı yazıyla yaz';
$lang['settings_amount_to_words_enabled'] = 'Aktif';
$lang['settings_total_to_words_lowercase'] = 'Küçük harflerle yaz';
$lang['settings_show_tax_per_item'] = 'Her ürün için Vergiyi Görüntüle (Faturalar/Proformalar)';

# Reports
$lang['report_sales_months_three_months'] = 'Son 3 Ay';
$lang['report_invoice_number'] = 'Fatura #';
$lang['report_invoice_customer'] = 'Müşteri';
$lang['report_invoice_date'] = 'Tarih';
$lang['report_invoice_duedate'] = 'Bitiş Tarihi';
$lang['report_invoice_amount'] = 'Miktar';
$lang['report_invoice_amount_with_tax'] = 'Vergi Ekli Miktar';
$lang['report_invoice_amount_open'] = 'Miktar Açık';
$lang['report_invoice_status'] = 'Durum';
$lang['report_invoice_total_amount_with_tax'] = 'Vergili Toplam Miktar';
$lang['report_invoice_total_amount_without_tax'] = 'Vergisiz Toplam Miktar';
$lang['report_invoice_total_taxes'] = 'Vergiler';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Proje Durumlarına Göre İstatistikler';
$lang['home_invoice_overview'] = 'Faturaların Durumu';
$lang['home_estimate_overview'] = 'Proformaların Durumu';
$lang['home_proposal_overview'] = 'Tekliflerin Durumu';
$lang['home_lead_overview'] = 'Fırsatların Durumu';

$lang['home_my_projects'] = 'Projelerim';
$lang['home_announcements'] = 'Duyurular';

# Settings
$lang['settings_leads_kanban_limit'] = 'Durumlara göre kanban satır limiti';
$lang['settings_group_misc'] = 'Çeşitli';
$lang['show_projects_on_calendar'] = 'Projeler';
$lang['settings_media_max_file_size_upload'] = 'Ortam dosyalarında maks. dosya boyutu (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Müşteri veya Personelin yalnızca ilk saatte Görev Yorumu eklemesine ya da düzenlemesine izin ver. (Yöneticilere uygulanmaz)';

# Email templates
$lang['email_template_only_domain_email'] = 'Only domain email';

# Announcements
$lang['dismiss_announcement'] = 'Duyuruyu Kapat';
$lang['dismiss_announcement'] = 'Duyuruyu Kapat';
$lang['announcement_from'] = 'Kimden:';
$lang['announcement_date'] = 'Gönderim Tarihi: %s';
$lang['announcement_not_found'] = 'Duyuru bulunamadı';
$lang['announcements_recents'] = 'Son Duyurular';

# General
$lang['zip_invoices'] = 'Faturaları Arşivle';
$lang['zip_estimates'] = 'Proformaları Arşivle';
$lang['zip_payments'] = 'Ödemeleri Arşivle';
$lang['setup_help'] = 'Yardım';
$lang['clients_list_company'] = 'Firma';
$lang['dt_button_export'] = 'Dışa Aktar';

$lang['dt_entries'] = 'girdi';
$lang['invoice_total_paid'] = 'Toplam Ödeme';
$lang['invoice_amount_due'] = 'Alacak Miktarı';
$lang['report_invoice_discount'] = 'İndirimler';

# Calendar
$lang['calendar_project'] = 'Proje';

# Leads
$lang['leads_import_assignee'] = 'Atanan';
$lang['customer_from_lead'] = '%s fırsatından Müşteri ';
$lang['lead_kan_ban_attachments'] = 'Dosya Ekleri: %s';
$lang['leads_sort_by_lastcontact'] = 'Son İletişim';

# Tasks
$lang['task_comment_added'] = 'Yorum başarıyla eklendi';
$lang['task_duedate'] = 'Bitiş Tarihi';
$lang['task_view_comments'] = 'Yorumlar';
$lang['task_comment_updated'] = 'Yorum güncellendi';
$lang['task_visible_to_client'] = 'Müşteriye Görünür';
$lang['task_hourly_rate'] = 'Saatlik Ücret';
$lang['hours'] = 'Saat';
$lang['seconds'] = 'Saniye';
$lang['minutes'] = 'Dakika';
$lang['task_start_timer'] = 'Süre Başlat';
$lang['task_stop_timer'] = 'Süre Durdur';
$lang['task_billable_help'] = 'Eğer Faturalanabilir işaretlerseniz, Fatura oluştururken görevi görebilirsiniz.';
$lang['task_billable'] = 'Faturalanabilir';
$lang['task_billable_yes'] = 'Faturalanabilir';
$lang['task_billable_no'] = 'Faturalanmaz';
$lang['task_billed'] = 'Fatura Durumu';
$lang['task_billed_yes'] = 'Faturalandı';
$lang['task_billed_no'] = 'Faturalanmadı';
$lang['task_user_logged_time'] = 'Girilen Süre:';
$lang['task_total_logged_time'] = 'Girilen Toplam Süre:';
$lang['task_is_billed'] = 'Bu görev %s nolu faturada faturalandı. ';
$lang['task_statistics'] = 'İstatistikler';
$lang['task_milestone'] = 'Faz';

# Tickets
$lang['ticket_message_updated_successfuly'] = 'Mesaj Güncellendi';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Proje Görevleri bu listede bulunamaz.';
$lang['show_quantity_as'] = 'Miktarı şu şekilde göster:';
$lang['quantity_as_qty'] = 'Adet';
$lang['quantity_as_hours'] = 'Saatler';
$lang['invoice_table_hours_heading'] = 'Saatler';
$lang['bill_tasks'] = 'Fatura Görevleri';
$lang['invoice_estimate_sent_to_email'] = 'Email Gönder';

# Estimates
$lang['estimate_table_hours_heading'] = 'Saat';

# General
$lang['is_customer_indicator'] = 'Müşteri';
$lang['print']            = 'Yazdır';
$lang['customer_permission_projects']            = 'Projeler';
$lang['no_timers_found']            = 'Başlatılan Zamanlayıcı Yok';
$lang['timers_started_confirm_logout']            = 'Görev zamanlayıcı başladı!<br /><br />Zamanlayıcıları durdurmadan çıkış yapmak istediğinize emin misiniz?';
$lang['confirm_logout']            = 'Çıkış';
$lang['timer_top_started']            = 'Başlangıç: %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'Faturalama Türünü değiştiremezsiniz. Projede faturalandırılmış görevler var.';
$lang['project_customer_permission_warning'] = 'Sistem, birincil irtibat kişisinin projeler için izni olmadığını belirtti. Müşteri projeyi göremeyecek. Müşteri profili sekmesindeki İzinler bölümünde izin vermelisiniz.';
$lang['project_invoice_timesheet_start_time'] = 'Başlangıç Zamanı: %s';
$lang['project_invoice_timesheet_end_time'] = 'Bitiş Zamanı: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Kayıtlı Süre: %s';
$lang['project_view_as_client'] = 'Projeyi Müşteri Olarak Görüntüle';
$lang['project_mark_all_tasks_as_completed'] = 'Tüm görevleri tamamlanmış olarak işaretle ve tüm zamanlayıcıları durdur (Proje üyelerine bildirim gönderilmeyecek)';
$lang['project_not_started_status_tasks_timers_found'] = 'Bu proje için görev zamanlayıcı bulundu. Ama Proje durumu Başlatılmadı olarak işaretlenmiş. Projeyi Devam Ediyor olarak işaretlemelisiniz.';
$lang['project_status'] = 'Durum';
$lang['project_status_1'] = 'Başlamadı';
$lang['project_status_2'] = 'Devam Ediyor';
$lang['project_status_3'] = 'Beklemede';
$lang['project_status_4'] = 'Tamamlandı';

$lang['project_file_uploaded_by_customer'] = 'Müşteri';
$lang['project_file_dateadded'] = 'Yükleme Tarihi';
$lang['project_file_filename'] = 'Dosya Adı';
$lang['project_file__filetype'] = 'Dosya Türü';
$lang['project_file_visible_to_customer'] = 'Müşteri için Görünür';
$lang['project_file_uploaded_by'] = 'Yükleyen';
$lang['edit_project'] = 'Projeyi Düzenle';
$lang['copy_project'] = 'Projeyi Kopyala';
$lang['delete_project'] = 'Projeyi Sil';
$lang['project_task_assigned_to_user'] = 'Görev Size Atandı';
$lang['seconds'] = 'Saniye';
$lang['hours'] = 'Saat';
$lang['minutes'] = 'Dakika';
$lang['project']                 = 'Proje';
$lang['project_lowercase']       = 'proje';
$lang['projects']                = 'Projeler';
$lang['projects_lowercase']      = 'projeler';
$lang['project_settings']      = 'Proje Ayarları';
$lang['project_invoiced_successfuly']             = 'Proje Başarıyla Faturalandı';
$lang['new_project']             = 'Yeni Proje';
$lang['project_files']            = 'Dosyalar';
$lang['project_activity']            = 'Aktivite';
$lang['project_name']            = 'Proje Adı';
$lang['project_description']            = 'Proje Açıklaması';
$lang['project_customer']            = 'Müşteri';
$lang['project_start_date']            = 'Başlangıç Tarihi';
$lang['project_datecreated']            = 'Oluşturma Tarihi';
$lang['project_deadline']            = 'Bitiş Tarihi';
$lang['project_billing_type']            = 'Faturalama Türü';
$lang['project_billing_type_fixed_cost']            = 'Sabit Ücret';
$lang['project_billing_type_project_hours']            = 'Proje Saati';
$lang['project_billing_type_project_task_hours']            = 'Görev Saati';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Görev Saat Ücretine göre';
$lang['project_rate_per_hour']            = 'Saatlik Ücret';
$lang['project_total_cost']            = 'Toplam Ücret';
$lang['project_members']            = 'Proje Üyeleri';
$lang['project_member_removed']     = 'Proje üyesi başarıyla kaldırıldı';
$lang['project_overview']           = 'Proje Özeti';
$lang['project_gant']            = 'Gantt Görünümü';
$lang['project_milestones']            = 'Fazlar';
$lang['project_milestone_order']            = 'Sıra';
$lang['project_milestone_duedate_passed']            = 'Bitiş Tarihi Geçti';
$lang['record_timesheet']            = 'Süre Ekle';
$lang['new_milestone']            = 'Yeni Faz';
$lang['edit_milestone']            = 'Fazı Düzenle';
$lang['milestone_name']            = 'Adı';
$lang['milestone_due_date']            = 'Bitiş Tarihi';
$lang['project_milestone']            = 'Faz';
$lang['project_notes']            = 'Notlar';
$lang['project_timesheets']            = 'Zaman Çizelgeleri';
$lang['project_timesheet']            = 'Zaman Çizelgesi';
$lang['milestone_total_logged_time']            = 'Girilen Süre';
$lang['project_overview_total_logged_hours']            = 'Girilen Süreler Toplamı';
$lang['milestones_uncategorized']            = 'Kategorilenmemiş';
$lang['milestone_no_tasks_found']            = 'Görev Bulunamadı';
$lang['project_copied_successfuly']            = 'Proje Verileri başarıyla kopyalandı';
$lang['failed_to_copy_project']            = 'Proje kopyalanırken hata oluştu';
$lang['copy_project_task_include_check_list_items']            = 'Yapılacak İşler Listesini Kopyala';
$lang['copy_project_task_include_assignees']            = 'Aynı Atananları Kopyala';
$lang['copy_project_task_include_followers']            = 'Aynı Takipçileri Kopyala';

$lang['project_days_left']            = 'Kalan Gün';
$lang['project_open_tasks']            = 'Açık Görevler';
$lang['timesheet_stop_timer']            = 'Süre Durdur';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Zaman eklerken hata oluştu. Bitiş saati, başlangıç saatinden küçük';
$lang['project_timesheet_user']            = 'Üye';
$lang['project_timesheet_start_time']            = 'Başlangıç Zamanı';
$lang['project_timesheet_end_time']            = 'Bitiş Zamanı';
$lang['project_timesheet_time_spend']            = 'Harcanan Süre';
$lang['project_timesheet_task']            = 'Görev';
$lang['project_invoices']                = 'Faturalar';
$lang['total_logged_hours_by_staff']            = 'Girilen Toplam Süre';
$lang['invoice_project']            = 'Projeyi Faturala';
$lang['invoice_project_info']            = 'Proje Faturalama Bilgileri';
$lang['invoice_project_data_single_line']            = 'Tek Satır';
$lang['invoice_project_data_task_per_item']            = 'Her görev başına';
$lang['invoice_project_data_timesheets_individualy']            = 'Tüm Zaman Çizelgeleri';
$lang['invoice_project_item_name_data']            = 'Nesne Adı';
$lang['invoice_project_description_data']            = 'Açıklama';
$lang['invoice_project_projectname_taskname']            = 'Proje Adı + Görev Adı';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Tüm Görevler + Görev başına girilen tüm süreler';
$lang['invoice_project_project_name_data']            = 'Proje Adı';
$lang['invoice_project_timesheet_indivudualy_data']            = 'Zaman Çizelgesi Başlangıç Zamanı + Bitiş Zamanı + Toplam Girilen Süre';
$lang['invoice_project_total_logged_time_data']            = 'Toplam Girilen Süre';

$lang['project_allow_client_to'] = '%s için müşteriye izin ver';
$lang['project_setting_view_task_attachments'] = 'Görev Eklerini görmek';
$lang['project_setting_view_task_checklist_items'] = 'Görev Yapılacak Listesini görmek';
$lang['project_setting_upload_files'] = 'Dosya yükleme';
$lang['project_setting_view_task_comments'] = 'Görev Yorumlarını görmek';
$lang['project_setting_upload_on_tasks'] = 'Göreve dosya göndermek';
$lang['project_setting_view_task_total_logged_time'] = 'Girilen toplam görev süresi';
$lang['project_setting_open_discussions'] = 'Açık Tartışmalar';
$lang['project_setting_comment_on_tasks'] = 'Proje görevlerine yorum yapma';
$lang['project_setting_view_tasks'] = 'Görevleri Görüntüleme';
$lang['project_setting_view_milestones'] = 'Fazları Görüntüleme';
$lang['project_setting_view_gantt'] = 'Gantt Görüntüleme ';
$lang['project_setting_view_timesheets'] = 'Zaman Çizelgelerini Görüntüleme';
$lang['project_setting_view_activity_log'] = 'Aktivite Loglarını Görüntüleme';
$lang['project_setting_view_team_members'] = 'Takım Üyelerini Görüntüleme';

$lang['project_discussion_visible_to_customer_yes']                 = 'Görünür';
$lang['project_discussion_visible_to_customer_no']                 = 'Görünmez';

$lang['project_discussion_posted_on']                 = 'Yayınlanma Tarihi: %s';
$lang['project_discussion_posted_by']                 = 'Yayınlayan: %s';
$lang['project_discussion_failed_to_delete']                 = 'Forum silerken hata oluştu';
$lang['project_discussion_deleted']                 = 'Forum başarıyla silindi';
$lang['project_discussion_no_activity']                 = 'Aktivite Yok';
$lang['project_discussion']                 = 'Forum';
$lang['project_discussions']                 = 'Forum';
$lang['edit_discussion'] = 'Konu Başlat';
$lang['new_project_discussion'] = 'Konu Başlat';
$lang['project_discussion_subject'] = 'Konu';
$lang['project_discussion_description'] = 'Açıklama';
$lang['project_discussion_show_to_customer'] = 'Müşteriye Görünür';
$lang['project_discussion_total_comments'] = 'Yorum Sayısı';
$lang['project_discussion_last_activity'] = 'Son Aktivite';
$lang['discussion_add_comment'] = 'Yorum Ekle';
$lang['discussion_newest'] = 'En Yeni';
$lang['discussion_oldest'] = 'En Eski';
$lang['discussion_attachments'] = 'Ekler';
$lang['discussion_send'] = 'Gönder';
$lang['discussion_reply'] = 'Cevap';
$lang['discussion_edit'] = 'Düzenle';
$lang['discussion_edited'] = 'Değiştirildi';
$lang['discussion_you'] = 'Sen';
$lang['discussion_save'] = 'Kaydet';
$lang['discussion_delete'] = 'Sil';
$lang['discussion_view_all_replies'] = 'Tüm yanıtları göster';
$lang['discussion_hide_replies'] = 'Yaıtları gizle';
$lang['discussion_no_comments'] = 'Yorum Yok';
$lang['discussion_no_attachments'] = 'Dosya Eki yok';
$lang['discussion_attachments_drop'] = 'Dosya Yüklemek için Dosyayı Sürükleyin ve Bırakın';
$lang['project_note'] = 'Not';
$lang['project_note_private'] = 'Özel Notlar';
$lang['project_save_note'] = 'Notu Kaydet';

# Project Activity
$lang['project_activity_created'] = 'Proje oluşturuldu';
$lang['project_activity_updated'] = 'Proje güncellendi';
$lang['project_activity_removed_team_member'] = 'Takım üyesi silindi';
$lang['project_activity_added_team_member'] = 'Yeni takım üyesi eklendi';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Bütün görevler tamamlandı olarak işaretlendi';
$lang['project_activity_recorded_timesheet'] = 'Zaman Çizelgesine süre eklendi';
$lang['project_activity_task_name'] = 'Görev:';
$lang['project_activity_deleted_discussion'] = 'Forum sil';
$lang['project_activity_created_discussion'] = 'Forum oluşturuldu';
$lang['project_activity_updated_discussion'] = 'Forum güncellendi';
$lang['project_activity_commented_on_discussion'] = 'Foruma yorum eklendi';
$lang['project_activity_deleted_discussion_comment'] = 'Foruma gelen yorum silindi.';
$lang['project_activity_deleted_milestone'] = 'Faz silindi';
$lang['project_activity_updated_milestone'] = 'Faz güncellendi';
$lang['project_activity_created_milestone'] = 'Yeni faz oluşturuldu';
$lang['project_activity_invoiced_project'] = 'Proje faturalandı';
$lang['project_activity_task_marked_complete'] = 'Görev tamamlandı olarak işaretlendi';
$lang['project_activity_task_unmarked_complete'] = 'Görev tamamlandı olarak işaretlenmedi';
$lang['project_activity_task_deleted'] = 'Görev silindi';
$lang['project_activity_new_task_comment'] = 'Göreve yorum eklendi';
$lang['project_activity_new_task_attachment'] = 'Göreve ek dosya eklendi';
$lang['project_activity_new_task_assignee'] = 'Yeni görev ataması yapıldı';
$lang['project_activity_task_assignee_removed'] = 'Görev ataması silindi';
$lang['project_activity_task_timesheet_deleted'] = 'Zaman Çizelgesi silindi';
$lang['project_activity_uploaded_file'] = 'Proje dosyası güncellendi';
$lang['project_activity_status_updated'] = 'Proje durumu güncellendi';
$lang['project_activity_visible_to_customer'] = 'Müşteriye görünür';
$lang['project_activity_project_file_removed'] = 'Proje dosyası silindi';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = 'Yeni dosya yüklendi';
$lang['not_customer_created_new_project_discussion'] = 'Yeni proje formu oluşturuldu';
$lang['not_customer_commented_on_project_discussion'] = 'Proje Forumlarında yeni yorum var';

# Customers area
$lang['clients_my_estimates'] = 'Proforma Faturalarım';
$lang['client_no_reply'] = 'Yanıt Yok';
$lang['clients_nav_projects'] = 'Projeler';
$lang['clients_my_projects'] = 'Projelerim';
$lang['client_profile_image'] = 'Profil Resmi';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'İptal edilen faturalar rapordan hariç tutulmuştur.';
$lang['invoices_merge_cancel_merged_invoices'] = 'Birleştirilen faturaları silmek yerine iptal olarak işaretle';
$lang['invoice_marked_as_cancelled_successfuly'] = 'Fatura başarıyla iptal edildi';
$lang['invoice_unmarked_as_cancelled'] = 'Fatura İptal Edildi olarak işaretlenmedi';

$lang['tasks_reminder_notification_before'] = 'Görev Son Tarih Hatırlatıcı ( X Gün Önce)';
$lang['not_task_deadline_reminder'] = 'Görev Son Tarih Hatırlatıcı';
$lang['dt_length_menu_all'] = 'Tümü';
$lang['task_not_finished'] = 'Tamamlanmayanlar';
$lang['task_billed_cant_start_timer'] = 'Görev faturalandı. Zamanlayıcı başlatılamaz';
$lang['invoice_task_billable_timers_found'] = 'Başlatılan zamanlayıcılar bulundu';
$lang['project_timesheet_not_updated'] = 'Zaman Çizelgesi etkilenmiyor';
$lang['project_invoice_task_no_timers_found'] = 'No timers found for this task';
$lang['invoice_project_tasks_not_started'] = 'Henüz başlamadı | Başlangıç Tarihi: %s';
$lang['invoice_project_see_billed_tasks'] = 'Bu faturada faturalandırılacak görevleri görün';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'Faturalanan tüm görevler tamamlandı olarak işaretlenecek';
$lang['invoice_project_nothing_to_bill'] = 'Faturalanacak görev yok. Fatura kalemlerine istediğiniz her şeyi eklemekten çekinmeyin.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Başlangıç Tarihi gelecek olan görevler faturalandırılamaz';
$lang['invoice_project_stop_all_timers'] = 'Tüm Zamanlayıcıları Durdur';
$lang['invoice_project_stop_billabe_timers_only'] = 'Faturalanabilir zamanlayıcıları durdur';
$lang['project_tasks_total_timers_stopped'] = 'Toplam %s zamanlayıcı durdu';
$lang['project_invoice_timers_started'] = 'Faturalanabilir görevler üzerinde çalışan görev sayaçları bulundu, fatura oluşturulamıyor. Fatura oluşturmak için lütfen görev zamanlayıcılarını durdurun.';
$lang['task_start_timer_only_assignee'] = 'Zamanlayıcıyı başlatabilmek için bu göreve atanmalısınız!';
$lang['task_comments'] = 'Yorumlar';
$lang['invoice_total_tax'] = 'Toplam Vergi';
$lang['estimates_total_tax'] = 'Toplam Vergi';
$lang['report_invoice_total_tax'] = 'Toplam Vergi';
$lang['home_tickets'] = 'Talepler';
$lang['home_project_activity'] = 'En Son Proje Aktiviteleri';
$lang['home_project_activity_not_found'] = 'Proje Aktivitesi bulunamadı';
$lang['view_tracking'] = 'Görüntüleme Durumu';
$lang['view_date'] = 'Tarih';
$lang['view_ip'] = 'IP Adresi';
$lang['article_total_views'] = 'Toplam Görünüm';
$lang['leads_source'] = 'Kaynak';
$lang['invoices_available_for_merging'] = 'Birleştirmeye Uygun Faturalar';
$lang['invoices_merge_discount'] = 'Bu faturaya manuel olarak toplam %s indirim uygulayabilirsiniz.';
$lang['invoice_merge_number_warning'] = 'Faturaların birleştirilmesi fatura numaralarında boşluklar yaratacaktır. Fatura geçmişinizde boşluk olmasını istemiyorsanız lütfen faturaları birleştirmeyin. Oluşan boşlukları doldurmak isterseniz, fatura numaralarını manuel olarak ayarlama seçeneğine sahipsiniz.';
$lang['invoice_mark_as'] = '%s olarak işaretle';
$lang['invoice_unmark_as'] = '%s olarak işaretleme';
$lang['invoice_status_cancelled'] = 'İptal Edildi';
$lang['tasks_reminder_notification_before_help'] = 'Göreve atanan kişileri Son Tarihten X gün öncesinde uyarın. Bildirim emaili yalnızca atanan kişilere gönderilir. Eğer Görev başlangıç tarihi ile verilen tarih arasındaki fark hatırlatma gününden daha küçükse, hiçbir bildirim gönderilmeyecektir.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Tüm görevleri seç';
$lang['lead_company'] = 'Firma';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Onayla';
$lang['task_assigned'] = 'Atanan';
$lang['switch_to_pipeline'] = 'Pipeline Görünümü';
$lang['switch_to_list_view'] = 'Liste Görünümü';
$lang['estimates_pipeline'] = 'Proforma Pipeline';
$lang['estimates_pipeline_sort'] = 'Sırala:';
$lang['estimates_sort_expiry_date'] = 'Son Tarih';
$lang['estimates_sort_pipeline'] = 'Pipeline Sırası';
$lang['estimates_sort_datecreated'] = 'Oluşturma Tarihi';
$lang['estimates_sort_estimate_date'] = 'Proforma Tarihi';
$lang['estimate_set_reminder_title'] = 'Proforma Hatırlatıcı Ayarla';
$lang['invoice_set_reminder_title'] = 'Fatura Hatırlatıcı Ayarla';
$lang['estimate_reminders'] = 'Hatırlatıcı';
$lang['invoice_reminders'] = 'Hatırlatıcı';
$lang['estimate_notes'] = 'Notlar';
$lang['estimate_add_note'] = 'Not Ekle';
$lang['dropdown_non_selected_tex'] = 'Seçim yapılmadı';
$lang['auto_close_ticket_after'] = 'Talebin Otomatik Kapanması (Saat)';
$lang['event_description'] = 'Açıklama';
$lang['delete_event'] = 'Sil';
$lang['not_new_ticket_created'] = 'Departmanınıza yeni talep açıldı - %s';
$lang['receive_notification_on_new_ticket'] = 'Açılan yeni talep hakkında bildirim al';
$lang['receive_notification_on_new_ticket_help'] = 'Talebin açıldığı departmana ait tüm personel, yeni talep hakkında bildirilecek.';
$lang['event_updated'] = 'Etkinlik başarıyla güncellendi';
$lang['customer_contacts'] = 'Kişiler';
$lang['new_contact'] = 'Yeni Kişi';
$lang['contact'] = 'Kişi';
$lang['contact_lowercase'] = 'kişi';
$lang['contact_primary'] = 'Birincil Kişi';
$lang['contact_position'] = 'Görevi';
$lang['contact_active'] = 'Aktif';
$lang['client_company_info'] = 'Firma Bilgileri';
$lang['proposal_save'] = 'Teklifi Kaydet';
$lang['calendar'] = 'Takvim';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF Fontu';
$lang['settings_pdf_table_heading_color'] = 'Öğelerin Tablo Başlığı Rengi';
$lang['settings_pdf_table_heading_text_color'] = 'Öğelerin Tablo Başlığı Yazı Rengi';
$lang['settings_pdf_font_size'] = 'Varsayılan font boyutu';
$lang['proposal_status_draft'] = 'Taslak';
$lang['custom_field_contacts'] = 'Kişiler';
$lang['company_primary_email'] = 'Birincil Email Adresi';
$lang['client_register_contact_info'] = 'Birincil İletişim Bilgileri';
$lang['client_register_company_info'] = 'Firma Bilgileri';
$lang['contact_permissions_info'] = 'Bu kişi için doğru izinleri verdiğinizden emin olun';
$lang['defaut_leads_kanban_sort'] = 'Varsayılan Fırsat Kan Ban sıralaması';
$lang['defaut_leads_kanban_sort_type'] = 'Sırala';
$lang['order_ascending'] = 'Artan';
$lang['order_descending'] = 'Azalan';
$lang['calendar_expand'] = 'Genişlet';
$lang['proposal_reminders'] = 'Hatırlatıcı';
$lang['proposal_set_reminder_title'] = 'Teklif Hatırlatıcı Ayarla';
$lang['settings_allowed_upload_file_types'] = 'İzin Verilen Dosya Türleri';
$lang['no_primary_contact'] = 'Bu müşterinin birincil kişisi yoktur. Müşteri olarak giriş yapılabilmesi için birincil kişi oluşturmanız gerekir. Her müşterinin birincil irtibat kişisi olması önerilir.ları olması her müşteriye önerilir.';
$lang['leads_merge_customer'] = 'Müşteri alanları birleştiriliyor';
$lang['leads_merge_contact'] = 'Contact fields merging';
$lang['leads_merge_as_contact_field'] = 'Contact alanıyla birleştir';
$lang['lead_convert_to_client_phone'] = 'Telefon';
$lang['invoice_status_report_all'] = 'Tümü';
$lang['import_contact_field'] = 'Contact Alanı';


$lang['file_uploaded_success'] = 'Dosya başarılı bir şekilde yüklendi.';
$lang['file_exceds_max_filesize'] = 'Yüklenen dosya, PHP.ini dosyasındaki UPLOAD_MAX_FILESIZE yönergesini aşıyor.';
$lang['file_exceds_maxfile_size_in_form'] = 'Yüklenen dosya, HTML formunda belirtilen MAX_FILE_SIZE yönergesini aşıyor.';
$lang['file_uploaded_partially'] = 'Yüklenen dosya kısmen yüklenebildi.';
$lang['file_not_uploaded'] = 'Hiçbir dosya yüklenmedi';
$lang['file_missing_temporary_folder'] = 'Geçici klasör kayıp';
$lang['file_failed_to_write_to_disk'] = 'Diske dosya yazımı başarısız.';
$lang['file_php_extension_blocked'] = 'PHP uzantısı dosya yüklemeyi durdurdu.';
$lang['calendar_expand'] = 'Genişlet';
$lang['view_pdf'] = 'PDF olarak Görüntüle';
$lang['expense_repeat_every'] = 'Tekrarla';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'KanBan Görünüme Geç';
$lang['survey_no_questions'] = 'Bu ankete henüz soru eklenmedi.';
$lang['survey_submit'] = 'Gönder';
$lang['contract_content'] = 'Sözleşme';
$lang['contract_save'] = 'Sözleşmeyi Kaydet';
$lang['contract_send_to_email'] = 'E-mail Gönder';
$lang['contract_send_to_client_modal_heading'] = 'Sözleşmeyi Email ile gönder';
$lang['contract_send_to'] = 'Gönder';
$lang['contract_send_to_client_attach_pdf'] = 'PDF Ekle';
$lang['contract_send_to_client_preview_template'] = 'Email Şablonunu Önizle';
$lang['include_attachments_to_email'] = 'Dosyaları E-maile ekle';
$lang['contract_sent_to_client_success'] = 'Sözleşme başarıyla müşteriye gönderildi';
$lang['contract_sent_to_client_fail'] = 'Sözleşme gönderimi başarısız oldu.';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Hatalı kullanıcı adı veya şifre';
$lang['client_old_password_incorect']     = 'Eski şifreniz yanlış';
$lang['client_password_changed']          = 'Şifreniz değiştirildi';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Silinen Fırsatlar: %s';
$lang['total_clients_deleted'] = 'Silinen Müşteriler: %s';
$lang['confirm_action_prompt'] = 'Bu işlemi gerçekleştirmek istediğinizden emin misiniz?';
$lang['mass_delete'] = 'Toplu Silme';
$lang['email_protocol'] = 'Email Protokolü';
$lang['add_edit_members'] = 'Üyeleri Ekle / Düzenle';
$lang['project_overview_logged_hours'] = 'Girilen Süreler:';
$lang['project_overview_billable_hours'] = 'Faturalanabilir Süreler:';
$lang['project_overview_billed_hours'] = 'Faturalanan Süreler:';
$lang['project_overview_unbilled_hours'] = 'Faturalanmayan Süreler:';
$lang['calendar_first_day'] = 'İlk Gün';
$lang['permission_view'] = 'Görüntüle';
$lang['permission_edit'] = 'Düzenle';
$lang['permission_create'] = 'Oluştur';
$lang['permission_delete'] = 'Sil';
$lang['permission'] = 'İzin';
$lang['permissions'] = 'İzinler';
$lang['proposals_pipeline'] = 'Teklif Pipeline';
$lang['proposals_pipeline_sort'] = 'Sırala';
$lang['proposals_sort_open_till'] = 'Hala Açık Olanlar';
$lang['proposals_sort_pipeline'] = 'Pipeline Sıralama';
$lang['proposals_sort_datecreated'] = 'Oluşturma Tarihi';
$lang['proposals_sort_proposal_date'] = 'Teklif Tarihi';
$lang['is_not_staff_member'] = 'Personel Harici';
$lang['lead_created'] = 'Oluşturuldu';
$lang['access_tickets_to_none_staff_members'] = 'Personel Harici Üyelerin Taleplere Erişimine İzin Ver';
$lang['project_expenses'] = 'Harcamalar';
$lang['expense_currency'] = 'Para Birimi';
$lang['currency_valid_code_help'] = 'Doğru Para Birimi Eklediğinizden Emin Olun.';
$lang['week'] = 'Hafta';
$lang['weeks'] = 'Hafta';
$lang['month'] = 'Ay';
$lang['months'] = 'Ay';
$lang['year'] = 'Yıl';
$lang['years'] = 'Yıl';
$lang['expense_report_category'] = 'Kategori';
$lang['expense_paid_via'] = '%s ile Ödendi';
$lang['item_as_expense'] = '[Harcama]';
$lang['show_help_on_setup_menu'] = 'Kurulum menüsünde Yardım menüsünü göster';
$lang['customers_summary_total'] = 'Toplam Müşteri';
$lang['filter_by'] = 'Filtrele';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Site Anahtarı';
$lang['recaptcha_secret_key'] = 'Gizli Anahtar';
$lang['recaptcha_error'] = 'ReCAPTCHA alanı, bir robot olduğunuzu söylüyor.';
$lang['smtp_username'] = 'SMTP Kullanıcı Adı';
$lang['smtp_username_help'] = 'E-mail istemciniz SMTP girişi için kullanıcı adını kullanıyorsa doldurun.';
$lang['pinned_project']= 'Sabit Proje';
$lang['pin_project']= 'Proje Sabitle';
$lang['unpin_project']= 'Proje Sabitliğini Kaldır';
$lang['smtp_encryption']= 'Email Şifreleme';
$lang['smtp_encryption_none']= 'Hiçbiri';
$lang['show_proposals_on_calendar']= 'Teklifler';
$lang['invoice_project_see_billed_expenses']= 'Bu faturada faturalanacak Harcamaları görün';
$lang['project_overview_expenses'] = 'Toplam Harcama';
$lang['project_overview_expenses_billable'] = 'Faturalanabilir Harcamalar';
$lang['project_overview_expenses_billed'] = 'Faturalanan Harcamalar';
$lang['project_overview_expenses_unbilled'] = 'Faturalanmayan Harcamalar';
$lang['announcement_date_list'] = 'Tarih';
$lang['project_setting_view_finance_overview'] = 'Finansal Görünüme Bakın';
$lang['show_all_tasks_for_project_member'] = 'Tüm personele projeyle ilgili tüm görevleri görmelerine izin ver (Personel Olmayanlar dahil)';
$lang['not_staff_added_as_project_member'] = 'Proje Üyesi Olarak Eklendiniz';
$lang['report_expenses_base_currency_select_explanation'] = 'Giderler için kullanılan farklı para birimleri bulunduğu için para birimini seçmeniz gerekir.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Harcama Eklendi';
$lang['save_customer_and_add_contact'] = 'Kaydet ve Kişi Oluştur';
$lang['tickets_chart_weekly_opening_stats'] = 'Haftalık İstatistikler';
$lang['related_knowledgebase_articles'] = 'İlişkili Makaleler';
$lang['detailed_overview'] = 'Görev Görünümü';
$lang['tasks_total_checklists_finished'] = 'Tüm Yapılacak İş Listeleri Tamamlandı olarak işaretlendi';
$lang['tasks_total_added_attachments'] = 'Tüm Dosya Ekleri eklendi';
$lang['tasks_total_comments'] = 'Toplam yorumlar';
$lang['task_finished_on_time'] = 'Zamanında tamamlandı?';
$lang['task_finished_on_time_indicator'] = 'Evet';
$lang['task_not_finished_on_time_indicator'] = 'Hayır';
$lang['task_filter_fetch_month_by'] = 'Ayı Getir';
$lang['filter'] = 'Filtrele';
$lang['task_filter_detailed_all_months'] = 'Tüm Aylar';
$lang['kb_article_slug'] = 'Etiket';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'Talepler E-mail ile alınıyorsa ve CRMde ilgili kişi yoksa alanlar değiştirilmeyecektir.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Yeni zamanlayıcı başlatılırken diğer tüm zamanlayıcıları durdurun.';
$lang['notification_when_customer_pay_invoice'] = 'Müşteri faturayı ödediğinde bildirim al (Dahili)';
$lang['not_invoice_payment_recored'] = 'Yeni fatura ödemesi - %s';
$lang['email_template_contact_warning'] = 'İşlem yaparken iletişim kurulmazsa, kişi birleştirme alanları değiştirilmeyecektir.';
$lang['theme_style'] = 'Tema Stili';
$lang['change_role_permission_warning'] = 'Rol izinlerini değiştirme, bu rolü kullanan geçerli personel üyelerinin izinlerini etkilemeyecektir.';
$lang['task_copied_successfuly'] = 'Görev başarıyla kopyalandı';
$lang['failed_to_copy_task'] = 'Görev kopyalama işlemi başarısız oldu';
$lang['not_project_file_uploaded'] = 'Yeni proje dosyası eklendi';
$lang['settings_calendar_color'] = '%s Renk';
$lang['settings_calendar_colors_heading'] = 'Stillendirme';
$lang['reminder'] = 'Hatırlatıcı';
$lang['back_to_tasks_list'] = 'Görev listesine geri dön';
$lang['copy_task_confirm'] = 'Onayla';
$lang['changing_items_affect_warning'] = 'Öğe bilgilerini değiştirdiğinizde oluşturulan faturaları / Proformaları etkilemez.';
$lang['tax_is_used_in_expenses_warning'] = 'Bu vergiyi güncelleyemezsiniz, bu vergiyi kullanan gider işlemleri bulundu.';
$lang['note'] = 'Not';
$lang['leads_staff_report_converted'] = 'Dönüştürülen Toplam Fırsat';
$lang['leads_staff_report_created'] = 'Oluşturulan Toplam Fırsat';
$lang['leads_staff_report_lost'] = 'Kaybedilen Toplam Fırsat';
$lang['client_go_to_dashboard'] = 'Portala Geri Dön';
$lang['show_estimate_reminders_on_calendar'] = 'Proforma Hatırlatıcı';
$lang['show_invoice_reminders_on_calendar'] = 'Fatura Hatırlatıcı';
$lang['calendar_estimate_reminder'] = 'Proforma Hatırlatıcı';
$lang['calendar_invoice_reminder'] = 'Fatura Hatırlatıcı';
$lang['show_proposal_reminders_on_calendar'] = 'Teklif Hatırlatıcı';
$lang['calendar_proposal_reminder'] = 'Teklif Hatırlatıcı';
$lang['proposal_due_after']= 'Teklif Süresi (Gün)';
$lang['project_progress']= 'İlerleme';
$lang['calculate_progress_through_tasks']= 'İlerleme durumunu görevlere göre hesapla';
$lang['allow_customer_to_change_ticket_status']= 'Müşterinin, Müşteri Destek Alanında Talep durumunu değiştirmesine izin ver';
$lang['switch_to_general_report']= 'Personel Raporuna Geç';
$lang['switch_to_staff_report']= 'Genel Rapora Geç';
$lang['generate']= 'Üret';
$lang['from_date']= 'Tarihinden';
$lang['to_date']= 'Tarihine';
$lang['not_results_found']= 'Sonuç bulunamadı';
$lang['lead_lock_after_convert_to_customer']= 'Müşteriye dönüştürdükten sonra müşteri adayının düzenlenmesine izin vermeyin (yöneticilere uygulanmaz)';
$lang['default_pipeline_sort'] = 'Varsayılan Pipeline sıralaması';
$lang['not_goal_message_failed'] = 'Hedefi Başaramadık!<br /> Hedep Tipi: %s
<br />Hedef Başarı: %s
<br />Toplam Başarı: %s

<br />Başlangıç Tarihi: %s
<br />Bitiş Tarihi: %s';

$lang['toggle_full_view'] = 'Tam Ekrana Geçiş';
$lang['not_estimate_invoice_deleted'] = 'Oluşturulan fatura silindi';
$lang['not_task_new_comment'] = '%s görevine yorum yapıldı';

# Version 1.1.8
$lang['invoice_number_exists'] = 'Bu fatura numarası, devam eden yıl için mevcut.';
$lang['estimate_number_exists'] = 'Bu Proforma numarası, devam eden yıl için mevcut.';
$lang['email_exists'] = 'Bu E-mail zaten var';


$lang['not_uploaded_project_file'] = 'Yeni dosya yüklendi';
$lang['not_created_new_project_discussion'] = 'Projede yeni forum konusu oluşturuldu';
$lang['not_commented_on_project_discussion'] = 'Proje Forumunda yeni yorum yapıldı';
$lang['all_staff_members'] = 'Tüm Personel';
$lang['help_project_permissions'] = 'Görüntüle İzni: Personelin TÜM projeleri görmesine izin verir. Yalnızca kendisine atanmış projeleri (üye olarak eklenmiş) görmesini isterseniz, GÖRÜNTÜLE izni vermeyin.';
$lang['help_tasks_permissions'] = 'Görüntüle İzni: Personelin TÜM görevleri görmesine izin verir. Yalnızca kendisine atanmış yada takipçi olarak eklenmiş görevleri görmesini isterseniz, GÖRÜNTÜLE izni vermeyin.';
$lang['expense_recuring_days'] = 'Gün';
$lang['expense_recuring_weeks'] = 'Hafta';
$lang['expense_recuring_months'] = 'Ay';
$lang['expense_recuring_years'] = 'Yıl';
$lang['reset_to_default_color'] = 'Varsayılan renge sıfırla';
$lang['pdf_logo_width'] = 'Logo Genişliği (PX)';
$lang['drop_files_here_to_upload'] = 'Yüklemek için dosyaları bu alana sürükleyin';
$lang['browser_not_support_drag_and_drop'] = 'İnternet Tarayıcınız sürükle bırak desteklemiyor.';
$lang['remove_file'] = 'Dosyayı sil';
$lang['you_can_not_upload_any_more_files'] = 'Daha fazla dosya yükleyemezsiniz';
$lang['custom_field_only_admin'] = 'Yalnızca yöneticiler görebilir';
$lang['leads_default_source'] = 'Varsayılan kaynak';
$lang['clear_activity_log'] = 'Kayıtları Temizle';
$lang['default_contact_permissions'] = 'Varsayılan kişi izinleri';
$lang['invoice_activity_marked_as_cancelled'] = 'Fatura iptal edilmiş olarak işaretledi';
$lang['invoice_activity_unmarked_as_cancelled'] = 'Fatura iptal edilmiş olarak işaretlenmedi';
$lang['wait_text'] = 'Lütfen bekleyin...';
$lang['projects_summary'] = 'Proje Özeti';
$lang['dept_imap_host'] = 'IMAP Hostu';
$lang['dept_encryption'] = 'Şifreleme';
$lang['dept_email_password'] = 'Şifre';
$lang['dept_email_no_encryption'] = 'Şifreleme Yok';
$lang['failed_to_decrypt_password'] = 'Şifre çözme başarısız oldu';
$lang['delete_mail_after_import'] = 'Postalar içe aktarıldıktan sonra silinsin mi?';
$lang['expiry_reminder_enabled'] = 'Son Tarih hatırlatıcısı gönder';
$lang['send_expiry_reminder_before'] = 'Son Tarih hatırlatıcısı gönder (GÜN önce)';
$lang['not_expiry_reminder_sent'] = 'Son Tarih hatırlatıcısı gönderildi';
$lang['send_expiry_reminder'] = 'Son Tarih hatırlatıcısı gönderildi';
$lang['sent_expiry_reminder_success'] = 'Son Tarih hatırlatıcısı başarıyla gönderildi';
$lang['sent_expiry_reminder_fail'] = 'Son Tarih hatırlatıcısı gönderiminde hata oluştu';
$lang['leads_default_status'] = 'Varsayılan durum';
$lang['item_description_placeholder'] = 'Açıklama';
$lang['item_long_description_placeholder'] = 'Uzun Açıklama';
$lang['item_quantity_placeholder'] = 'Adet';
$lang['item_rate_placeholder'] = 'Ücret';
$lang['tickets_summary'] = 'Destek Talepleri Özet Tablosu';
$lang['tasks_list_priority'] = 'Öncelik';
$lang['ticket_status_db_2'] = 'Devam Ediyor';
$lang['ticket_status_db_1'] = 'Açık';
$lang['ticket_status_db_3'] = 'Cevaplandı';
$lang['ticket_status_db_4'] = 'Beklemede';
$lang['ticket_status_db_5'] = 'Kapalı';
$lang['ticket_priority_db_1'] = 'Düşük';
$lang['ticket_priority_db_2'] = 'Orta';
$lang['ticket_priority_db_3'] = 'Yüksek';
$lang['customer_have_projects_by'] = '%s durumuna göre projeler';
$lang['customer_have_proposals_by'] = '%s durumuna göre teklifler';
$lang['do_not_redirect_payment'] = 'Beni ödeme işlemcisine yönlendirmeyin';

$lang['project_tickets'] = 'Talepler';
$lang['invoice_report'] = 'Fatura Raporu';
$lang['payment_modes_report'] = 'Ödeme Türleri (İşlemler)';
$lang['customer_admins'] = 'Müşteri Yöneticileri';
$lang['assign_admin'] = 'Yönetici Ata';
$lang['customer_admin_date_assigned'] = 'Atanma Tarihi';
$lang['customer_admin_login_as_client_message'] = 'Merhaba %s. Bu müşteriye yönetici olarak eklendiniz. Tüm müşteri verilerini görebilir ve Portala Müşteri olarak girebilirsiniz.';
$lang['ticket_form_validation_file_size'] = 'Dosya boyutu %s boyutundan daha az olmalı ';
$lang['has_transactions_currency_base_change'] = 'Temel para biriminin değiştirilmesi, yalnızca o para biriminde işlem kaydedilmemesi durumunda mümkündür. Temel para birimini değiştirmek için işlemleri silin.';
$lang['customers_sort_all'] = 'Tümü';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Müşteri Panelinde Recaptcha kullanımı (Giriş/Kayıt)';
$lang['project_marked_as_finished'] = 'Proje tamamlandı';
$lang['project_status_updated'] = 'Proje durumu güncellendi';

$lang['remove_decimals_on_zero'] = 'Sayılardan ve ya Para Birimlerinin Ondalık kısımlarındaki sıfırları kaldır. (2.00 - 2 olur, 2.25 - 2.25 olarak kalır)';
$lang['remove_tax_name_from_item_table'] = 'Vergi adını tablodan kaldır (Faturalar/Proformalar)';

# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'Kategorilerine Göre Faturalanamayan Harcamalar';
$lang['billable_expenses_by_categories'] = 'Kategorilerine Göre Faturalanabilir Harcamalar';
$lang['format_letter_size'] = 'Mektup';
$lang['pdf_formats'] = 'Belge formatları';

$lang['swap_pdf_info'] = 'Firma/Müşteri Bilgilerini Yer Değiştir (Firma bilgileri sağ tarafta, Müşteri bilgileri sol tarafta)';
$lang['invoice_estimate_pdf_text_color'] = 'Fatura/Proforma Yazı Rengi';
$lang['expenses_filter_by_categories'] = 'Kategorilere Göre';
$lang['task_copy'] = 'Kopyala';

$lang['estimate_status'] = 'Durum';
$lang['expenses_report_exclude_billable'] = 'Faturalanabilir Harcamaları Hariç Tut';
$lang['expenses_total'] = 'Toplam';
$lang['estimate_activity_added_attachment'] = 'Dosya eklendi';
$lang['show_to_customer'] = 'Müşteriye Göster';
$lang['hide_from_customer'] = 'Müşteriden Gizle';
$lang['expenses_report_total'] = 'Toplam';
$lang['expenses_report'] = 'Harcama Raporu';
$lang['expenses_report_tax'] = 'Vergi';
$lang['expenses_report_total_tax'] = 'Toplam Vergi';
$lang['expenses_detailed_report'] = 'Detaylı Rapor';
$lang['expense_not_billable'] = 'Faturalanamaz';
$lang['notification_settings'] = 'Bildirim Ayarları';
$lang['staff_with_roles'] = 'Personel Rolleri';
$lang['specific_staff_members'] = 'Belirli Üyeler';
$lang['proposal_mark_as'] = '%s olarak İşaretle';
$lang['kb_report_total_answers'] = 'Toplam';
$lang['ticket_message_edit'] = 'Düzenle';
$lang['invoice_files'] = 'Fatura Dosyaları';
$lang['estimate_files'] = 'Proforma Dosyaları';
$lang['proposal_files'] = 'Teklif Dosyaları';
$lang['invoices_awaiting_payment'] = 'Ödeme Bekleyen Faturalar';
$lang['tasks_not_finished'] = 'Tamamlanmayan İşler';
$lang['outstanding_invoices'] = 'Ödenmemiş Faturalar';
$lang['past_due_invoices'] = 'Süresi Geçmiş Faturalar';
$lang['paid_invoices'] = 'Ödenmiş Faturalar';
$lang['invoice_estimate_year'] = 'Yıl';
$lang['no_results_text_search_dropdown'] = 'Sonuç bulunamadı';
$lang['task_stats_logged_hours'] = 'Girilen Süreler';
$lang['leads_converted_to_client'] = 'Çevrilen Fırsatlar';
$lang['task_assigned_from'] = 'Bu görev size %s tarafından atandı';
$lang['auto_check_for_new_notifications'] = 'Bildirimleri Otomatik kontrol et (Saniye - Pasif hale getirmek için 0 girin)';
$lang['recurring_ends_on'] = 'Bitiş (Sürekli olacaksa boş bırakın)';
$lang['new_note'] = 'Yeni Not';
$lang['my_tickets_assigned'] = 'Bana Atanan Talepler';
$lang['filter_by_assigned'] = 'Atanan Üye';
$lang['staff_stats_total_logged_time'] = 'Girilen Toplam Süre';
$lang['staff_stats_last_month_total_logged_time'] = 'Geçen Ay Girilen Süre';
$lang['staff_stats_this_month_total_logged_time'] = 'Bu Ay Girilen Süre';
$lang['staff_stats_last_week_total_logged_time'] = 'Geçen Hafta Girilen Süre';
$lang['staff_stats_this_week_total_logged_time'] = 'Bu Hafta Girilen Süre';
// Dont change this becuse are translated before for the projects timesheets and now are only used for readibility.
$lang['timesheet_user'] = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time'] = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets'] = $lang['project_timesheets'];
$lang['task_log_time_start'] = $lang['project_timesheet_start_time'];
$lang['task_log_time_end'] = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description'] = 'Açıklama';
$lang['description_visible_to_customer'] = 'Açıklamayı müşteriye göster';
$lang['upcoming_tasks'] = 'Yaklaşan Görevler';
$lang['paymentmethod_two_checkout_account_number'] = 'Hesap Numarası (Satıcı Kimliği)';
$lang['paymentmethod_two_checkout_private_key'] = 'Özet Anahtar';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Paylaşılabilir Anahtar';
$lang['payment_credit_card_number'] = 'Kard Numarası';
$lang['payment_credit_card_expiration_date'] = 'Son Kullanma Tarihi';
$lang['payment_billing_email'] = 'Email';
$lang['payment_billing_name'] = 'Fatura Adı';
$lang['submit_payment'] = 'Ödeme Gönder';


$lang['2checkout_notice_payment'] = 'Kredi Kartı bilgileri 2CheckoutCredit ile güvenli bağlantı kullanılarak işlenecektir ';
$lang['2checkout_usage_notice'] = 'Eğer 2Checkout Ödeme API si kullanacaksanız SSL gerekli. It is required to safely call the tokenization and authorizations. The system will function without SSL, however, this will place you out of compliance, which risks deactivation of your API permissions.';
$lang['custom_field_disallow_customer_to_edit'] = 'Bu alanın müşteri tarafından düzenlenmesine izin verme';
$lang['project_due_notice'] = 'Bu proje %s gün gecikti';
$lang['not_lead_added_attachment'] = '%s fırsatına yeni dosya eklendi';
$lang['lead_note_date_added'] = 'Not Eklendi: %s';
$lang['recurring_custom'] = 'Özel';
// Dont translate these, only added for better readibility already translated for the expenses custom recurring feature.
$lang['invoice_recuring_months'] = $lang['expense_recuring_months'];
$lang['invoice_recuring_years'] = $lang['expense_recuring_years'];
$lang['invoice_recuring_days'] = $lang['expense_recuring_days'];
$lang['invoice_recuring_weeks'] = $lang['expense_recuring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'Direction';
$lang['notify_project_members_status_change'] = 'Proje üyelerine proje durumunun değiştirildiğini bildirin.';
$lang['not_project_status_updated'] = 'Proje %s durumundan %s durumuna güncellendi.';
$lang['ticket_not_found'] = 'Talep bulunamadı';
$lang['project_not_found'] = 'Proje bulunamadı';
$lang['export_project_data'] = 'Proje Verilerini Dışa Aktar';
$lang['total_project_members'] = 'Proje Üyeleri';
$lang['total_project_files'] = 'Eklenen Dosyalar';
$lang['total_project_discussions_created'] = 'Oluşturulan Forum Konuları';
$lang['project_member'] = 'Üye';
$lang['total_project_discussions_comments'] = 'Tüm Forum Yorumları';
$lang['staff_total_task_assigned'] = 'Atanan Tüm Görevler';
$lang['staff_total_comments_on_tasks'] = 'Görevlerdeki Yorum Sayısı';
$lang['project_members_overview'] = 'Proje Üyelerine Genel Bakış';
$lang['project_milestones_overview'] = 'Fazlara Genel Bakış';
$lang['total_tasks_in_milestones'] = 'Atanan Tüm Görevler';
$lang['total_task_members_assigned'] = 'Atanan Üye Sayısı';
$lang['total_task_members_followers'] = 'Tüm Takipçiler';
$lang['total_milestones'] = 'Fazlar';
$lang['total_project_worked_days'] = 'Çalışılan Günler';
$lang['finance_overview'] = 'Finanal Görünüm';
$lang['project_custom_fields'] = 'Özel Alanlar';
$lang['total_tickets_related_to_project'] = 'Projeye İlişkin Talepler';
$lang['projects_total_invoices_created'] = 'Oluşturulan Faturalar';
$lang['total_invoiced_amount'] = 'Oluşturulan Faturalar';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Fatura Ödeme Kaydını müşteri kontağına e-mail ile gönderme!';
$lang['no_preview_available_for_file'] = 'Bu dosya için önizleme yok.';
$lang['project_activity_deleted_file_discussion_comment'] = 'Dosya Forum yorumu silindi';
$lang['file_not_found'] = 'Dosya bulunamadı';
$lang['email_template_discussion_info'] = 'Bu şablon, her iki proje forumu e-maili için de kullanılır. (Dosya Forumları ve Genel Forumlar)';
$lang['format_a4_portrait_size'] = 'Dikey';
$lang['only_show_contact_tickets'] = 'Müşteri profilinde yalnızca giriş yapan kontağa ait olan talepleri göster. (Birincil kişiye uygulanmaz)';
$lang['cancel_overdue_reminders_invoice'] = 'Bu faturaya ilişkin geciken hatırlatıcıları göndermeyi engelleyin.';
$lang['customer_shipping_address_notice'] = 'Müşteri faturalarında teslimat adresini kullanmayacaksanız, teslimat adres bilgilerini doldurmayın.';
$lang['timesheets_overview'] = 'Zaman Çizelgesine Genel Bakış';
$lang['invoice_status_draft'] = 'Taslak';
$lang['save_as_draft'] = 'Taslak olarak Kaydet';
$lang['convert_and_save_as_draft'] = 'Dönüştür ve Taslak olarak Kaydet';
$lang['convert'] = 'Dönüştür';
$lang['exclude_invoices_draft_from_client_area'] = 'Müşteri alanında Taslak statüsünde olan faturaları hariç tutun.';
$lang['invoice_draft_status_info'] = 'Bu fatura taslak durumunda, fatura müşteriye gönderildiğinde yada gönderildi olarak işaretlendiğinde durumu otomatik olarak değişecek.';
$lang['task_info'] = 'Görev Bilgisi';
$lang['recurring_tasks'] = 'Tekrar Eden';
// Dont translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recuring_months'] = $lang['expense_recuring_months'];
$lang['task_recuring_years'] = $lang['expense_recuring_years'];
$lang['task_recuring_days'] = $lang['expense_recuring_days'];
$lang['task_recuring_weeks'] = $lang['expense_recuring_weeks'];
$lang['todays_tasks'] = 'Bugün\'ün Görevleri';
$lang['payment_mode_invoices_only'] = 'Sadece Faturalar';
$lang['payment_mode_expenses_only'] = 'Sadece Harcamalar';
$lang['task_no_checklist_items_found'] = 'Bu görev için Yapılacaklar Listesi bulunamadı';
$lang['task_no_description'] = 'Bu görev için açıklama yok';
$lang['expenses_reminders'] = 'Hatırlatıcılar';
$lang['expense_set_reminder_title'] = 'Harcama Hatırlatıcı Ayarla';
$lang['calendar_expense_reminder'] = 'Harcama Hatırlatıcı';
$lang['recurring_task'] = 'Tekrarlayan Görev';
$lang['disable_email_from_being_sent'] = 'Bu e-mailin gönderilmesini devre dışı bırak.';
$lang['not_sent_indicator'] =  'Gönderilmedi';
$lang['proposal_status_revised'] =  'Revize';
$lang['customer_currency_change_notice'] =  'Müşteri başka bir para birimini kullanıyorsa, anapara birimini bu müşteri için uygun para birimi türünü seçtiğinizden emin olun. İşlemler kaydedildikten sonra para biriminin değiştirilmesi mümkün değildir.';
$lang['click_to_add_content'] =  'Içerik eklemek için tıklayın.';
$lang['related_to_project'] =  'This %s is related to %s: %s';
$lang['back_to_lead'] =  'Fırsata Geri Dön';
$lang['add_task_timer_started_warning'] =  'Manuel Zamanlayıcı ekleyebilmek için bu görev için başlatılan zamanlayıcıyı durdurun.';
$lang['sending_email_contact_permissions_warning'] =  'Müşteri Kişileri otomatik olarak seçilemedi. Lütfen müşterinin %s izinli kişileri bulunduğundan emin olun. ';
# Version 1.2.6
$lang['currently_supported_currencies'] = 'Desteklenen Para Birimleri.';
$lang['authorize_notice'] = 'Authorize.Net AIM ödeme API sini kullanıyorsanız, SSL gereklidir. Authorize.net hesap başına yalnızca 1 para birimi desteklemektedir. Para birimleri alanına, Authorize.net hesabınızla ilişkili yalnızca 1 para birimini eklediğinizden emin olun.';
$lang['settings_paymentmethod_developer_mode'] = 'Geliştirici modu';
$lang['payment_cardholder_name'] = 'Kart Sahibinin Adı';
$lang['settings_paymentmethod_authorize_api_login_id'] =  'API Login ID';
$lang['settings_paymentmethod_mollie_api_key'] =  'API Anahtarı';
$lang['settings_paymentmethod_authorize_api_transaction_key'] =  'API Transaction ID';
$lang['settings_paymentmethod_authorize_secret_key'] =  'Secret Key';
$lang['leads_report_converted_notice'] =  'Only leads thats belongs in the default status Client will be taken as converted leads, if the leads belongs to the default status client and its not converted to customer will be still counted as converted lead';
$lang['payment_method'] = 'Ödeme Yöntemi';
$lang['payment_method_info'] = 'Bazı ödeme ağ geçitleri, Kredi Kartı, Paypal ve Banka gibi farklı / çoklu ödeme yöntemlerini desteklemektedir.';

# Version 1.2.7
$lang['dropbox_app_key'] = 'Dropbox APP Anahtarı';
$lang['project_invoice_select_all_expenses'] = 'Tüm Harcamaları Seç';
$lang['role_update_staff_permissions'] = 'Bu rolü kullanan tüm personel üyelerinin izinlerini güncelleyin.';
$lang['customer_active'] = 'Aktif';
$lang['note_updated_successfuly'] = 'Not başarıyla güncellendi';
$lang['update_note'] = 'Notu güncelle';
$lang['update_comment'] = 'Yorumu güncelle';
$lang['comment_updated_successfuly'] = 'Yorum güncellendi.';
$lang['staff_send_welcome_email'] = 'Hoşgeldiniz e-maili gönder';
$lang['proposal_warning_email_change'] = '%s için e-mail değişti. Bu %s teklifin bağlantısı. %s ile bağlantılı tüm teklif e-mail lerini güncellemek istiyor musunuz?';
$lang['update_proposal_email_yes'] = 'Evet, bağlı tüm e-mailleri güncelleştir.';
$lang['update_proposal_email_no'] = 'Hayır, manuel olarak güncelleyeceğim.';
$lang['proposals_emails_updated'] = '%s ile bağlantılı tüm teklif e-mailleri %s ile güncellendi';
$lang['custom_field_company'] = 'Şirket';
$lang['actions'] = 'Aksiyonlar';
$lang['project_mark_as'] = '%s olarak işaretle';
$lang['todo_edit_title'] = 'Yapılacak İşi Düzenle';
$lang['additional_action_required'] = 'Ekstra aksiyon gerekiyor!';
$lang['project_mark_tasks_finished_confirm'] = 'Onayla';
$lang['project_marked_as_success'] = 'Proje %s olarak işaretlendi';
$lang['project_marked_as_failed'] = 'Proje %s olarak işaretlenemedi';
$lang['auto_assign_customer_admin_after_lead_convert'] = 'Dönüştürdükten sonra müşteriye otomatik olarak yönetici atama';
$lang['auto_assign_customer_admin_after_lead_convert_help'] = 'Bu seçenek EVET olarak ayarlanırsa, müşteri adayını müşteriye dönüştüren personel otomatik olarak Müşteri Yöneticisi olarak atanır. NOT: Bu seçenek yalnızca müşterileri GÖRÜNTÜLE yetkisi olmayan Personel için geçerlidir.';
$lang['auto_close_tickets_disable'] = 'Devre dışı bırakmak için 0 yazın.';
$lang['task_checklist_item_completed_by'] = 'Tamamlayan: %s';
$lang['staff_email_signature_help'] = 'If empty default email signature from settings will be used';
$lang['customer_sales'] = 'Satış';
$lang['default_task_priority'] = 'Varsayılan Öncelik';
$lang['project_send_created_email'] = 'Proje oluşturuldu e-maili gönder';
$lang['survey_send_to_lists'] = 'Anket Gönderim listeleri';
$lang['survey_send_notice'] = 'E-mail ler her saat başı CRON JOB üzerinden gönderilecektir.';
$lang['view_permission_auto_checked'] = 'VIEW permission auto checked. You need to select VIEW permission if you want to use the EDIT, CREATE and DELETE properly. EDIT, CREATE, DELETE cant be used without VIEW because VIEW is global permission and the user wont be able to open the data and perform the actions.';
$lang['custom_field_company_info'] = 'Firma için özel alanları düzenleyin. Kurulum->Ayarlar->Firma menüsü';

# Version 1.2.8
$lang['show_transactions_on_invoice_pdf'] = 'PDFde fatura ödemelerini (işlemleri) göster';
$lang['bulk_actions'] = 'Toplu İşlemler';
$lang['additional_filters'] = 'Ek Filtreler';
$lang['expenses_available_to_bill'] = 'Faturalanabilir Harcamalar';
$lang['bulk_action_customers_groups_warning'] = 'Herhangi bir grubu seçmezseniz, seçilen müşterilere atanan tüm gruplar kaldırılacaktır.';
$lang['customer_attachments_show_in_customers_area'] = 'Müşteri Alanında Göster';
$lang['customer_attachments_show_notice'] = 'Yalnızca müşteri profilinden yüklenen dosyaların müşterilere gösterilme / gizlenme özelliği var.';
$lang['customer_profile_files'] = 'Dosyalar';
$lang['no_files_found'] = 'Dosya Bulunamadı';
$lang['survey_customers_all'] = 'Tüm Müşteriler';
$lang['custom_field_column'] = 'Grid (Bootstrap Sütun Örnek: 12) - Maksimum 12';
$lang['task_status'] = 'Durum';
$lang['task_status_1'] = 'Başlamadı';
$lang['task_status_2'] = 'Geribildirim Bekliyor';
$lang['task_status_3'] = 'Testte';
$lang['task_status_4'] = 'Devam Ediyor';
$lang['task_status_5'] = 'Tamamlandı';
$lang['task_mark_as'] = '%s olarak işaretle';
$lang['task_marked_as_success'] = 'Görev %s olarak işaretlendi';
$lang['task_drag_drop_notice'] = 'Drag & Drop is used only to easily change %s. The order wont be applied for this area.';
$lang['search_tasks'] = 'Görevleri Ara';
$lang['tasks_kanban_limit'] = 'Görev Durumlarına göre kanban satır limiti';
$lang['show_on_invoice_on_pdf'] = 'Fatura PDFinde %s göster';
$lang['show_pay_link_to_invoice_pdf'] = 'PDF te Fatura Ödeme Linki Göster (Fatura İptal Edildiyse Uygulanmaz)';
$lang['no_leads_found'] = 'Fırsat Bulunamadı';
$lang['created_today'] = 'Bugün Oluşturulan';
$lang['total_tasks_deleted'] = 'Silinen Toplam Görev: %s';
$lang['total_tickets_delete'] = 'Silinen Toplam Talep: %s';
$lang['total_tickets_delete'] = 'Silinen Toplam Talep: %s';
$lang['format_letter_portrait'] = 'Letter Dikey';
$lang['format_letter_landscape'] = 'Letter Yatay';
$lang['period_datepicker'] = 'Dönem';
$lang['total_by_hourly_rate'] = 'Toplam Saatlik Ücret';
$lang['staff_hourly_rate'] = $lang['task_hourly_rate'];
// &#37; is for % so the system can confuse for the original fields like %s
$lang['remove_tax_name_from_item_table_help'] = 'eq. Item TAX 15&#37; will be shown as 15&#37; without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)';
$lang['back_to_project'] = 'Projeye Geri Dön';
$lang['view_kanban'] = 'Kan Ban Görünümü';
$lang['invoice_is_overdue'] = 'Bu fatura %s gün gecikti.';

# Version 1.2.9
$lang['time_decimal'] = 'Süre (Ondalık)';
$lang['time_h'] = 'Süre (S)';
$lang['proposal_number_prefix'] = 'Teklif Numarası Öneki';
$lang['settings_number_padding_prefix'] = 'Number padding zero\'s for prefix formats <br /> <small>eq. If this value is 3 the number will be formated: 005 or 025</small>';
$lang['this_week_payments'] = 'Bu Haftanın Ödemeleri';
$lang['last_week_payments'] = 'Geçen Haftanın Ödemeleri';
$lang['not_published_new_post'] = 'Yeni mesaj yayınladı';
$lang['expense_name'] = 'Adı';
$lang['expense_name_help'] = 'Kişisel kullanım için';
$lang['adjustments'] = 'Fiyat Ayarlama (+-)';
$lang['tax_breakdown'] = 'Tax Breakdown';
$lang['payments_received'] = 'Ödemeler alındı';
$lang['not_lead_activity_created_proposal'] = 'Yeni Teklif oluşturuldu - %s';
$lang['lead_title'] = 'Pozisyon';
$lang['lead_address'] = 'Adres';
$lang['lead_city'] = 'Şehir';
$lang['lead_state'] = 'İlçe';
$lang['lead_country'] = 'Ülke';
$lang['lead_zip'] = 'Posta Kodu';
$lang['lead_is_public_yes'] = 'Evet';
$lang['lead_is_public_no'] = 'Hayır';
$lang['lead_info'] = 'Fırsat Bilgileri';
$lang['lead_general_info'] = 'Genel Bilgiler';
$lang['lead_latest_activity'] = 'Son Aktivite';
$lang['item_description_new_lines_notice'] = 'Ürün açıklaması için yeni satırlar desteklenmiyor. Bunun yerine ürünün uzun açıklamasını kullanın.';
$lang['estimates_report'] = 'Teklif Raporları';
$lang['confirm'] = 'Onayla';
$lang['delete_staff'] = 'Personeli Sil';
$lang['delete_staff_info'] = 'Bu personelin bazı verileri başka bir kullanıcıya aktarılacaktır. Lütfen, verileri aktarmak istediğiniz kullanıcıyı seçin.';
$lang['estimate_items'] = 'Teklif Ürünleri';
$lang['no_proposals_found'] = 'Hiç Teklif bulunamadı.';
$lang['no_estimates_found'] = 'Hiç Proforma bulunamadı.';
$lang['pipeline_limit_status'] = 'Duruma göre Pipeline limiti';
$lang['settings_update'] = 'Sistem Güncelleme';
$lang['purchase_key'] = 'SatınAlma Anahtarı';
$lang['update_now'] = 'Şimdi Güncelle';
$lang['update_available'] = 'Güncelleme mevcut.';
$lang['latest_version'] = 'Son Versiyon';
$lang['your_version'] = 'Sizin Versiyonunuz';
$lang['using_latest_version'] = 'En son sürümü kullanıyorsunuz';
$lang['mark_as_active'] = 'Aktif olarak işaretle';
$lang['customer_inactive_message'] = 'Etkin olmayan müşteri profili. Bazı özellikler devre dışı olabilir.';
$lang['active_customers'] = 'Aktif Müşteriler';
$lang['inactive_active_customers'] = 'Pasif Müşteriler';
$lang['include_proposal_items_merge_field_help'] = 'Birleştirme alanına sahip teklif öğelerini öneri içeriğinin herhangi bir yerindeki %s dahilinde ekleyin.';
$lang['all_data_synced_successfuly'] = 'Tüm veriler başarıyla senkronize edildi';
$lang['sync_now'] = 'Şimdi Senkronize Et';
$lang['sync_data'] = 'Veriyi Senkronize Et';
$lang['sync_proposals_up_to_date'] = 'Tüm teklifler güncel, senkronize edilecek bir şey yok.';
$lang['proposal_sync_1_info'] = 'Tüm teklif verileri oluşturulduktan sonra her teklif için ayrı ayrı saklanır. %s bilgisini güncellemek %s için daha önce yaratılan teklifleri etkilemeyecektir.';
$lang['proposal_sync_2_info'] = 'Son zamanlarda %s bilgilerini güncellediyseniz, tüm yeni verileri ilişkili tekliflerle senkronize edebilirsiniz. İşte senkronize edebileceğiniz alanların listesi.';

# Version 1.3.0
$lang['expense_include_additional_data_on_convert'] = 'Masrafdan alınan uzun açıklama kalemine ek ayrıntılar ekleyin.';

# Version 1.4.0
$lang['calendar_events_limit'] = 'Takvim Etkinlikleri Limiti (Ay ve Hafta Görünümü)';
$lang['show_page_number_on_pdf'] = 'PDF de sayfa numarasını göster';
$lang['customer_active_inactive_help'] = 'Yeni kayıtlar oluştururken açılır listelerde gösterilmeyecektir.';
$lang['item_groups'] = 'Gruplar';
$lang['item_group'] = 'Ürün Grubu';
$lang['item_group_name'] = 'Grup Adı';
$lang['new_item_group'] = 'Yeni Grup';
$lang['show_setup_menu_item_only_on_hover'] = 'Kurulum menü öğesini yalnızca ana kenar çubuğunda fareyle gezdirildiğinde göster.';
$lang['internal_article'] = 'Dahili Makale';
$lang['expenses_created_from_this_recurring_expense'] = 'Tekrarlayan harcamalardan bu Harcama oluşturuldu.';
$lang['convert_to_task'] = 'Göreve Dönüştür';
$lang['next_invoice_date'] = 'Sonraki Fatura Tarihi: %s';
$lang['next_expense_date'] = 'Sonraki Harcama Tarihi: %s';
$lang['invoice_recurring_from'] = 'Bu fatura, tekrarlanan faturadan numara ile oluşturulmuştur: %s';
$lang['expense_recurring_from'] = 'Bu harcama aşağıdaki tekrarlanan harcamalardan oluşur: %s';
$lang['child_invoices'] = 'Alt Faturalar';
$lang['child_expenses'] = 'Alt Harcamalar';
$lang['no_announcements'] = 'Duyuru Yok';
$lang['unit'] = 'Ünite';
$lang['permission_view_own'] = 'Görüntüle (Kendi)';
$lang['permission_global'] = 'Global';
$lang['permission_customers_based_on_admins'] = 'Müşteri Yöneticilerine dayanarak';
$lang['permission_payments_based_on_invoices'] = 'Faturalara dayanarak GÖRÜNTÜLE (Kendi) izni';
$lang['permission_projects_based_on_assignee'] = 'Personelin GÖRÜNTÜLE (Global) izni yoksa yalnızca üyelerin proje üyesi olarak eklendiği projelerde gösterilir.';
$lang['permission_tasks_based_on_assignee'] = 'If staff member do not have permission VIEW (Global) will be shown only tasks where staff member is follower,assigned, task is public or in Setup->Settings->Tasks-> Allow all staff to see all tasks related to projects is set to YES when task is linked to project.';
$lang['settings_paymentmethod_default_selected_on_invoice'] = 'Faturalarda varsayılan olarak seçilmiştir';
$lang['paymentmethod_braintree_merchant_id'] = 'Merchant ID';
$lang['paymentmethod_braintree_private_key'] = 'Private Key';
$lang['paymentmethod_braintree_public_key'] = 'Public Key';
$lang['company_requires_vat_number_field'] = 'Firma Vergi Numarası alanının kullanılması gereklidir.';
$lang['no_company_view_profile'] = 'Kişisel - Profili Görüntüle';
$lang['company_is_required'] = 'Firma alanı zorunlu mu?';
$lang['estimate_invoiced'] = 'Faturalandı';
$lang['file_date_uploaded'] = 'Yüklenen Tarih';
$lang['allow_contact_to_delete_files'] = 'Kişilerin, müşteriler alanından yüklenen kendi dosyalarını silmelerine izin ver.';
$lang['file'] = 'Dosya';
$lang['customer_contact_person_only_one_allowed'] = 'Firma alanı doldurulmadığında sadece 1 kişiye izin verilir. Sistem, bu müşteriyi kişi olarak atar.';
$lang['web_to_lead'] = 'Web Fırsatı';
$lang['web_to_lead_form'] = 'Web Fırsat Formu';
$lang['new_form'] = 'Yeni Form';
$lang['form_name'] = 'Form Adı';
$lang['cf_option_in_use'] = 'Kaldırmaya çalıştığınız seçenek kullanımdadır ve kaldırılamaz. Seçenek mevcut seçeneklere otomatik eklenir.';
$lang['form_builder'] = 'Form Oluşturucu';
$lang['form_informations'] = 'Form Bilgileri & Kurulum';
$lang['form_builder_create_form_first'] = 'Form oluşturucuyu kullanabilmek için önce form oluşturun.';
$lang['notify_assigned_user'] = 'İlgili Personel';
$lang['form_recaptcha'] = 'Google Recaptcha Kullan';
$lang['form_lang_validation'] = 'Dil';
$lang['form_lang_validation_help'] = 'Doğrulama Mesajları İçin';
$lang['form_btn_submit_text'] = 'Gönder Butonu Yazısı';
$lang['form_success_submit_msg'] = 'Form başarıyla gönderildikten sonra gösterilecek mesaj';
$lang['total_submissions'] = 'Toplam Gönderi';
$lang['form_integration_code'] = 'Entegrasyon Kodu';
$lang['not_lead_imported_from_form'] = 'Web Fırsat Formundan Aktarılan Fırsat - %s';
$lang['not_lead_activity_log_attachment'] = 'Dosya Eki içeri aktarıldı - %s';
$lang['form_integration_code_help'] = 'Formu göstermek için sitenizin herhangi bir yerinde kodu kopyalayıp yapıştırın, ayrıca web sitenize uyacak şekilde genişlik ve yükseklik pikselini ayarlayabilirsiniz.';
$lang['invoice_not_found'] = 'Fatura bulunamadı';
$lang['estimate_not_found'] = 'Proforma bulunamadı';
$lang['expense_not_found'] = 'Harcama bulunamadı';
$lang['proposal_not_found'] = 'Teklif bulunamadı';
$lang['new_task_assigned_non_user'] = 'Yeni görev size atandı - %s';
$lang['no_child_found'] = '%s bulunamadı';
$lang['company_vat_number'] = 'Vergi Numarası';
$lang['not_lead_assigned_from_form'] = 'Sana Yeni Fırsat atandı.';
$lang['not_lead_activity_assigned_from_form'] = 'Fırsat %s kişisine atandı.';
$lang['form_allow_duplicate'] = 'Veritabanına yinelenen %s eklenmesine izin verilsin mi?';
$lang['track_duplicate_by_field'] = 'Alanda tekrarı önle.';
$lang['and_track_duplicate_by_field'] = '+ Alan (Kopyaları yalnızca 1 alanla izlemek için boş bırakın)';
$lang['create_the_duplicate_form_data_as_task'] = '%s veri yinelenenini görev olarak oluşturun ve sorumlu personele atayın';
$lang['create_the_duplicate_form_data_as_task_help'] = 'Başvuruyla ilgili daha ayrıntılı inceleme yapmak için gerekli işlemleri yapmak için kullanılır.';
$lang['currently_selected'] = 'Şu Anda Seçilmiş';
$lang['search_ajax_empty'] = 'Seçin ve yazmaya başlayın';
$lang['search_ajax_placeholder'] = 'Aramak için yazın...';
$lang['search_ajax_searching'] = 'Aranıyor...';
$lang['search_ajax_initialized'] = 'Aramak için yazmaya başlayın';
$lang['lead_description'] = 'Açıklama';
$lang['lead_website'] = 'Website';
$lang['invoice_activity_auto_converted_from_estimate'] = '%s numaralı Proformadan otomatik oluşturulmuş fatura';
$lang['hour_of_day_perform_auto_operations'] = 'Otomatik işlemlerin gerçekleştirileceği saat';
$lang['hour_of_day_perform_auto_operations_format'] = '24 saat formatı. Örnek: 9 için 9am veya 15 için 3pm.';
$lang['inv_hour_of_day_perform_auto_operations_help'] = 'Tekrarlayan faturalar, gecikmiş uyarılar vb. için kullanılır..';
$lang['use_minified_files'] = 'CSS ve JS için küçültülmüş dosya sürümünü kullanın. (Yalnızca sistem dosyaları)';

# Version 1.5.0
$lang['logo_favicon_changed_notice'] = 'Logo or Favicon change detected. If you still see the original CRM logo try to clear your browser cache';
$lang['kb_search_articles'] = 'Search Knowledge Base Articles';
$lang['kb_search'] = 'Search';
$lang['have_a_question'] = 'Have a question?';
$lang['card_expiration_year'] = 'Expiration Year';
$lang['card_expiration_month'] = 'Expiration Month';
$lang['client_website'] = 'Website';
$lang['search_project_members'] = 'Search Project Members...';
$lang['cf_translate_input_link_title'] = 'Title';
$lang['cf_translate_input_link_url'] = 'URL';
$lang['cf_translate_input_link_tip'] = 'Click here to add link';
$lang['task_edit_delte_timesheet_notice'] = 'Timesheet task is %s, you cant %s the timesheet.';
$lang['department_username'] = 'IMAP Username';
$lang['department_username_help'] = 'Only fill this field if your IMAP server use username to login instead email address. Note that you will still need to add email address.';
$lang['total_tickets_deleted'] = 'Total tickets deleted: %s';
