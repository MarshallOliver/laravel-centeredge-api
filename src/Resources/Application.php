<?php

namespace AIKG\LaravelCenterEdgeAPI\Resources;

use AIKG\LaravelCenterEdgeAPI\Application as Model;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class Application extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [

            'app_id' => $this->AppID,
        	'location_id' => $this->LocNo,
        	'name' => $this->LocName,
        	'address1' => $this->Address1,
        	'address2' => $this->Address2,
        	'city' => $this->City,
        	'state' => $this->State,
        	'zip_code' => $this->ZipCode,
        	'phone_number' => $this->PhoneNumber,
        	'fax_number' => $this->FaxNumber,
        	'enable_time_clock' => $this->EnableTimeClock,
        	'time_clock_server' => $this->TimeClockServer,
        	'time_clock_manager' => $this->TimeClockManager,
        	'enable_credit_cards' => $this->EnableCreditCards,
        	'credit_processor' => $this->CreditProcessor,
        	'credit_merchant' => $this->CreditMerchant,
        	'credit_data_path' => $this->CreditDataPath,
        	'credit_wait_seconds' => $this->CreditWaitSeconds,
        	'credit_tid' => $this->CreditTID,
        	'credit_method' => $this->CreditMethod,
        	'credit_server_name' => $this->CreditServerName,
        	'credit_server_port' => $this->CreditServerPort,
        	'enable_player_cards' => $this->EnablePlayerCards,
        	'emp_pin_required' => $this->EmpPinRequired,
        	'shift_date' => $this->ShiftDate,
        	'require_decimal_point' => $this->RequireDecimalPoint,
        	'allow_drawer_override' => $this->AllowDrawerOverride,
        	'show_computed' => $this->ShowComputed,
        	'license_server' => $this->LicenseServer,
        	'num_dec_places' => $this->NumDecPlaces,
        	'private_debit' => $this->PrivateDebit,
        	'credit_off_line' => $this->CreditOffLine,
        	'refund_player_inv_no' => $this->RefundPlayerInvNo,
        	'defer_value_player_cards' =>$this->DeferValuePlayerCards,
        	'ask_new_player_card' => $this->AskNewPlayerCard,
        	'next_auto_barcode' => $this->NextAutoBarcode,
        	'print_cash_out_receipt' => $this->PrintCashOutReceipt,
        	'allow_check_over_payment' => $this->AllowCheckOverPayment,
        	'idle_pin_pad_message' => $this->IdlePinPadMessage,
        	'cash_back_amount' => $this->CashBackAmount,
        	'require_check_number' => $this->RequireCheckNumber,
        	'print_clock_in_receipt' => $this->PrintClockInReceipt,
        	'print_clock_out_receipt' => $this->PrintClockOutReceipt,
        	'credit_modem_port' => $this->CreditModemPort,
        	'credit_modem_init_string' => $this->CreditModemInitString,
        	'enable_employee_scheduling' => $this->EnableEmployeeScheduling,
        	'reprint_receipt_num' => $this->RePrintReceiptNum,
        	'enable_debit' => $this->EnableDebit,
        	'next_auto_card_number' => $this->NextAutoCardNumber,
        	'get_emp_no_for_discount' => $this->GetEmpNoForDiscount,
        	'credit_force_cvv2' => $this->CreditForceCVV2,
        	'credit_force_postal' => $this->CreditForcePostal,
        	'manual_dial' => $this->ManualDial,
        	'print_credit_first' => $this->PrintCreditFirst,
        	'ask_credit_last_four_digits' => $this->AskCreditLastFourDigits,
        	'idle_pole_msg_1' => $this->IdlePoleMsg_1,
        	'idle_pole_msg_2' => $this->IdlePoleMsg_2,
        	'shift_date_change_time' => $this->ShiftDateChangeTime,
        	'ticket_group_num' => $this->TicketGroupNum,
        	'ticket_delay_m_secs' => $this->TicketDelayMSecs,
        	'manual_card_default_inv_no' => $this->ManualCardDefaultInvNo,
        	'print_remove_till_receipt' => $this->PrintRemoveTillReceipt,
        	'warn_offline' => $this->WarnOffline,
        	'enable_asset_management' => $this->EnableAssetManagement,
        	'enable_web' => $this->EnableWeb,
        	'enable_notifications' => $this->EnableNotifications,
        	'enable_inventory' => $this->EnableInventory,
        	'enable_consignment' => $this->EnableConsignment,
        	'enable_daycare' => $this->EnableDaycare,
        	'enable_customers' => $this->EnableCustomers,
        	'force_manual_cvv2' => $this->ForceManualCVV2,
        	'card_number_offset' => $this->CardNumber_Offset,
        	'card_number_length' => $this->CardNumber_Length,
        	'enable_web_movies' => $this->EnableWebMovies,
        	'enable_web_area_tickets' => $this->EnableWebAreaTickets,
        	'enable_corp_module' => $this->EnableCorpModule,
        	'reports_version' => $this->ReportsVersion,
        	'logo' => base64_encode($this->Logo),
        	'small_logo' => base64_encode($this->SmallLogo),
        	'receipt_logo' => base64_encode($this->ReceiptLogo),
        	'country' => $this->Country,
        
		];

    }
	
}
