# laravel-centeredge-api

## Install

composer require marshalloliver/laravel-centeredge-api

## Usage

### Introduction

#### Catalogs

All calls to the api should begin:

/api/catalog/{catalogName} 

The catalogName references a Laravel database connection.  For instance, if your Laravel application is dedicated to serving the CenterEdge API from a specific CenterEdge database with default database connection named CenterEdge, all api calls should be prepended with /api/catalog/CenterEdge.

If your Laravel application connects to multiple CenterEdge databases, these can either be configured individually in the application's database config file or by using a multiple database connection package such as the (currently unreleased) marshalloliver/laravel-dynamic-connections package.

### Resources

#### Application

/application

**Returns:** The ApplicationInfo table.

#### MessageLog

/messagelog

**Returns:** The message log paginated by 50 entries per page.

#### Areas

##### Fields

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

##### Routes

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

#### Arrivals

##### Fields

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

##### Routes

/arrivals  
**Returns:** The first 100 arrivals ordered by time_created in descending order.

/arrivals/areas  
**Returns:** The first 100 arrivals ordered by time_created in descending order with the areas belonging to each arrival ordered by description.

/arrivals/{ref_id}  
**Returns:** The specified arrival.

/arrivals/{ref_id}/areas  
**Returns:** The specified arrival with the areas belonging to the specified arrival ordered by description.

/arrivals/{ref_id}/areas/{area_guid}  
**Returns:** The specified arrival with the specified area.