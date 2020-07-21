<?php

namespace MarshallOliver\LaravelCenterEdgeAPI;

use MarshallOliver\LaravelCenterEdgeAPI\ApiModel;

class Item extends ApiModel
{
    protected $table = 'InvMaster';
	protected $primaryKey = 'MasterInvID';
    public $incrementing = false;
	protected $keyType = 'string';
    public $timestamps = false;

    const fieldMap = [
        'table' => 'InvMaster',
        'fields' => [
            'master_inventory_number' => 'MasterInvNo',
            'description' => 'Description',
            'category_number' => 'CatNo',
            'subcategory_number' => 'SubCatNo',
            'filter_number' => 'InvFilterNo',
            'status' => 'ItemStatus',
            'type' => 'ItemType',
            'base_unit' => 'BaseUnit',
            'ticket_id' => 'TickID',
            'pass_type_id' => 'PassTypeID',
            'reward_program_id' => 'RewardProgramID',
            'is_open_price' => 'OpenPrice',
            'is_redemption' => 'Redemption',
            'unit_type' => 'UnitType',
            'receiving_unit' => 'ReceiveUnit',
            'audit_unit' => 'AuditUnit',
            'is_tracked' => 'Tracked',
            'ticket_print_number' => 'TicketPrintNo',
            'tickets_to_print' => 'TicketsToPrint',
            'style_number' => 'InvStyleNo',
            'color_number' => 'InvColorNo',
            'size_number' => 'InvSizeNo',
            'allocation' => 'Allocation',
            'notes' => 'Notes',
            'time_created' => 'TimeCreated',
            'created_by' => 'CreatedBy_EmpNo',
            'web_group_id' => 'WebGroupID',
            'web_path' => 'WebPath',
            'web_description' => 'WebDescription',
            'web_details' => 'WebDetails',
            'web_cart_details' => 'WebCartDetails',
            'web_price' => 'WebPrice',
            'web_fee' => 'WebFee',
            'web_stock_room' => 'WebStockRoom',
            'web_will_call' => 'WebWillCall',
            'ask_for_customer' => 'AskForCustomer',
            'master_inventory_id' => 'MasterInvID',
            'till_code' => 'TillCode',
            'web_order' => 'WebOrder',
            'ask_for_notes' => 'AskForNotes',
            'apply_bonus_points' => 'ApplyBonusPoints',
            'include_in_ticket_count' => 'IncludeInTicketCount',
            'ticket_valid_from' => 'TicketValidFrom',
            'ticket_valid_to' => 'TicketValidTo',
            'ticket_max_users' => 'TicketMaxUses',
            'ticket_requires_checkout' => 'TicketRequireCheckout',
            'require_id' => 'RequireID',
            'ask_for_barcode' => 'AskForBarcode',
            'scale_base_value' => 'ScaleBaseValue',
            'web_will_call_ticket_id' => 'WebWillCallTickID',
            'auto_check_in' => 'AutoCheckIn',
            'remove_from_head_count' => 'RemoveFromHeadCount',
            'local_will_call_ticket_id' => 'LocalWillCallTicketID',
            'web_agreement' => 'WebAgreement',
            'web_allow_pass' => 'WebAllowPass',
            'number_of_minutes' => 'NumMinutes',
            'rain_check_eligible' => 'RainCheckEligible',
            'valid_day_count' => 'ValidDayCount',
            'receipt_text' => 'ReceiptText',
            'donation_type_id' => 'DonationTypeID',
            'require_waiver' => 'RequireWaiver',
            'receive_by_weight' => 'ReceiveByWeight',
            'supports_tokenized_card' => 'SupportsTokenizedCard',
            'supports_credit_card_tokenization_type' => 'SupportsCreditCardTokenizationType',
            'will_call_at_pos' => 'WillCallAtPOS',
            'allow_request_to_ship' => 'AllowRequestToShip',
            'require_membership' => 'RequireMembership',
            'defer_revenue' => 'DeferRevenue',
            'post_head_count_on_use' => 'PostHeadCountOnUse',
            'sku' => 'SKU'
        ],
    
	];
	
}