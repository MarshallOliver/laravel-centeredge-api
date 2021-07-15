# laravel-centeredge-api

## Install

composer require aikg/laravel-centeredge-api

## Usage

### Catalog

All calls to the api should begin:

/api/catalog/{catalog} 

The catalog references a Laravel database connection.  For instance, if your Laravel application is dedicated to serving the CenterEdge API from a specific CenterEdge database with default database connection named CenterEdge, all api calls should be prepended with /api/catalog/CenterEdge.

If your Laravel application connects to multiple CenterEdge databases, these can either be configured individually in the application's database config file or by using a multiple database connection package such as the (currently unreleased) marshalloliver/laravel-dynamic-catalogs package.

### Filters

The filter parameter may be included in the query string in the following format:

`?filter[resource][field][operator]=value`

**Example:**  
`?filter[arrivals][start_date_time][gte]=2020-07-02 00:00:00`

#### Operators

The following operators are available for use with filters:

`[e]: Equivalent to field = value`  
`[ne]: Equivalent to field <> value`  
`[gt]: Equivalent to field > value`  
`[lt]: Equivalent to field < value`  
`[gte]: Equivalent to field >= value`  
`[lte]: Equivalent to field <= value`  
`[like]: Equivalent to field LIKE '%value%'`  

### Resources

<details><summary>Application</summary>

#### Fields

app_id  
location_id  
name  
address1  
address2  
city  
state  
zip_code  
phone_number  
fax_number  
enable_time_clock  
time_clock_server  
time_clock_manager  
enable_credit_cards  
credit_processor  
credit_merchant  
credit_data_path  
credit_wait_seconds  
credit_tid  
credit_method  
credit_server_name  
credit_player_cards  
emp_pin_required  
shift_date  
require_decimal_point    
allow_drawer_override  
show_computed  
license_server  
num_dec_places  
private_debit  
credit_off_line  
refund_player_inv_no  
defer_value_player_cards  
ask_new_player_card  
next_auto_barcode  
print_cash_out_receipt  
allow_check_over_payment  
idle_pin_pad_message  
cash_back_amount  
require_check_number  
print_clock_in_receipt  
print_clock_out_receipt  
credit_modem_port  
credit_modem_init_string  
enable_employee_scheduling  
reprint_receipt_num  
enable_debit  
next_auto_card_number  
get_emp_no_for_discount  
credit_force_cvv2  
credit_force_postal  
manual_dial  
print_credit_first  
ask_credit_last_four_digits  
idle_pole_msg_1  
idle_pole_msg_2  
shift_date_change_time  
ticket_group_num  
ticket_delay_m_secs  
manual_card_default_inv_no  
print_remove_till_receipt  
warn_offline  
enable_asset_management  
enable_web  
enable_notifications  
enable_inventory  
enable_consignment  
enable_daycard  
enable_customers  
force_manual_cvv2  
card_number_offset  
card_number_length  
enable_web_movies  
enable_web_area_tickets  
enable_corp_module  
reports_version  
logo  
small_logo  
receipt_logo  
country  

#### Routes

/application

**Returns:** The ApplicationInfo table.
</details>

<details><summary>Areas</summary>

#### Fields

area_guid  
description  
show_area  
area_type  
capacity  
min_capacity  
pre_arrival_minutes  
post_departure_minutes  
area_shown_at  
min_deposit_amount  
open_area_desc  
web_enabled  
inv_id  
web_capacity  
short_details  
long_details  
thumbnail  
picture  
show_capcity  
laser_tag_area  
go_kart_area  

#### Conditional Fields

The following fields are available when accessing areas from within arrivals:

booking_ref_id  
booking_start_date_time  
booking_end_date_time  

#### Routes

/areas  
**Returns:** The first 100 areas ordered by description in ascending order.

/areas/arrivals  
**Returns:** The first 100 areas ordered by description with the arrivals belonging to each area ordered by time_created in descending order.

/areas/{area_guid}  
**Returns:** The specified area.

/areas/{area_guid}/arrivals  
**Returns:** The specified area with the arrivals belonging to the specified area ordered by time_created in descending order.

/areas/{area_guid}/arrivals/{ref_id}  
**Returns:** The specified area with the specified arrival.
</details>

<details><summary>Arrivals</summary>

#### Fields

ref_id  
ref_no  
description  
grp_status_no  
all_day_event  
start_date_time  
end_date_time  
group_size  
num_adults  
num_children  
total_sale_amount  
toal_refund_amount  
total_discount_amount  
total_tax_amount  
total_gratuity_amount  
booking_date  
booking_emp_no  
birthday_event  
contact_first_name  
contact_last_name  
contact_phone_number  
contact_secondary_phone_number  
confirmed_date_time  
confirmed_emp_no  
notes  
host_emp_no  
greeter_emp_no  
sales_person_emp_no  
food_time_for_event  
food_prep_time  
kitchen_note  
private_notes  
manual_gratuity_amount  
flat_discount_amount  
host_language  
event_type_id  
booked_from_web  
web_review_date  
web_review_emp_no  
total_coupon_discount_amount  
security_code  
reschedule_ref_id  
cancel_date  
opened_by_station_no  
opened_by_emp_no  
customer_id  
contact_customer_id  
group_id  
web_store_version  

#### Conditional Fields

The following fields are available when accessing arrivals from within areas:

booking_area_guid  
booking_start_date_time  
booking_end_date_time  

#### Routes

/arrivals  
**Returns:** Arrivals ordered by time_created in descending order.

/arrivals/areas  
**Returns:** Arrivals ordered by time_created in descending order with the areas belonging to each arrival ordered by description.

/arrivals/{ref_id}  
**Returns:** A specified arrival.

/arrivals/{ref_id}/areas  
**Returns:** A specified arrival with the areas belonging to the specified arrival ordered by description.

/arrivals/{ref_id}/areas/{area_guid}  
**Returns:** A specified arrival with a specified area.
</details>

<details><summary>MessageLog</summary>

#### Fields

message_id  
message_date_time  
station_no  
program_name  
emp_no  
message_text  
stack_trace  
error  

#### Routes

/messagelog  
**Returns:** The message log paginated by 50 entries per page.
</details>