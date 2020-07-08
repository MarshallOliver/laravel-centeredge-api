<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use MarshallOliver\LaravelCenterEdgeAPI\ApiModel;

class Application extends ApiModel
{
    protected $table = 'ApplicationInfo';
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = false;

    const fieldMap = [
        'table' => 'ApplicationInfo',
        'fields' => [
        	'app_id' => 'AppID',
        	'location_id' => 'LocNo',
        	'name' => 'LocName',
        	'address1' => 'Address1',
        	'address2' => 'Address2',
        	'city' => 'City',
        	'state' => 'State',
        	'zip_code' => 'ZipCode',
        	'phone_number' => 'PhoneNumber',
        	'fax_number' => 'FaxNumber',
        	'enable_time_clock' => 'EnableTimeClock',
        	'time_clock_server' => 'TimeClockServer',
        	'time_clock_manager' => 'TimeClockManager',
        	'enable_credit_cards' => 'EnableCreditCards',
        	'credit_processor' => 'CreditProcessor',
        	'credit_merchant' => 'CreditMerchant',
        	'credit_data_path' => 'CreditDataPath',
        	'credit_wait_seconds' => 'CreditWaitSeconds',
        	'credit_tid' => 'CreditTID',
        	'credit_method' => 'CreditMethod',
        	'credit_server_name' => 'CreditServerName',
        	'credit_server_port' => 'CreditServerPort',
        	'enable_player_cards' => 'EnablePlayerCards',
        	'emp_pin_required' => 'EmpPinRequired',
        	'shift_date' => 'ShiftDate',
        	'require_decimal_point' => 'RequireDecimalPoint',
        	'allow_drawer_override' => 'AllowDrawerOverride',
        	'show_computed' => 'ShowComputed',
        	'license_server' => 'LicenseServer',
        	'num_dec_places' => 'NumDecPlaces',
        	'private_debit' => 'PrivateDebit',
        	'credit_off_line' => 'CreditOffLine',
        	'refund_player_inv_no' => 'RefundPlayerInvNo',
        	'defer_value_player_cards' => 'DeferValuePlayerCards',
        	'ask_new_player_card' => 'AskNewPlayerCard',
        	'next_auto_barcode' => 'NextAutoBarcode',
        	'print_cash_out_receipt' => 'PrintCashOutReceipt',
        	'allow_check_over_payment' => 'AllowCheckOverPayment',
        	'idle_pin_pad_message' => 'IdlePinPadMessage',
        	'cash_back_amount' => 'CashBackAmount',
        	'require_check_number' => 'RequireCheckNumber',
        	'print_clock_in_receipt' => 'PrintClockInReceipt',
        	'print_clock_out_receipt' => 'PrintClockOutReceipt',
        	'credit_modem_port' => 'CreditModemPort',
        	'credit_modem_init_string' => 'CreditModemInitString',
        	'enable_employee_scheduling' => 'EnableEmployeeScheduling',
        	'reprint_receipt_num' => 'RePrintReceiptNum',
        	'enable_debit' => 'EnableDebit',
        	'next_auto_card_number' => 'NextAutoCardNumber',
        	'get_emp_no_for_discount' => 'GetEmpNoForDiscount',
        	'credit_force_cvv2' => 'CreditForceCVV2',
        	'credit_force_postal' => 'CreditForcePostal',
        	'manual_dial' => 'ManualDial',
        	'print_credit_first' => 'PrintCreditFirst',
        	'ask_credit_last_four_digits' => 'AskCreditLastFourDigits',
        	'idle_pole_msg_1' => 'IdlePoleMsg_1',
        	'idle_pole_msg_2' => 'IdlePoleMsg_2',
        	'shift_date_change_time' => 'ShiftDateChangeTime',
        	'ticket_group_num' => 'TicketGroupNum',
        	'ticket_delay_m_secs' => 'TicketDelayMSecs',
        	'manual_card_default_inv_no' => 'ManualCardDefaultInvNo',
        	'print_remove_till_receipt' => 'PrintRemoveTillReceipt',
        	'warn_offline' => 'WarnOffline',
        	'enable_asset_management' => 'EnableAssetManagement',
        	'enable_web' => 'EnableWeb',
        	'enable_notifications' => 'EnableNotifications',
        	'enable_inventory' => 'EnableInventory',
        	'enable_consignment' => 'EnableConsignment',
        	'enable_daycare' => 'EnableDaycare',
        	'enable_customers' => 'EnableCustomers',
        	'force_manual_cvv2' => 'ForceManualCVV2',
        	'card_number_offset' => 'CardNumber_Offset',
        	'card_number_length' => 'CardNumber_Length',
        	'enable_web_movies' => 'EnableWebMovies',
        	'enable_web_area_tickets' => 'EnableWebAreaTickets',
        	'enable_corp_module' => 'EnableCorpModule',
        	'reports_version' => 'ReportsVersion',
        	'logo' => 'Logo',
        	'small_logo' => 'SmallLogo',
        	'receipt_logo' => 'ReceiptLogo',
        	'country' => 'Country',

        ],
    
    ];

    const base64 = [
        'logo',
        'small_logo',
        'receipt_logo',

    ];

}