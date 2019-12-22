#
# Table structure for table 'tx_laundrywebapp_domain_model_login'
#
CREATE TABLE tx_laundrywebapp_domain_model_login (

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_deliveryperson'
#
CREATE TABLE tx_laundrywebapp_domain_model_deliveryperson (

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_customer'
#
CREATE TABLE tx_laundrywebapp_domain_model_customer (

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_order'
#
CREATE TABLE tx_laundrywebapp_domain_model_order (

	orderid int(11) DEFAULT '0' NOT NULL,
	customerid int(11) DEFAULT '0' NOT NULL,
	totalprice double(11,2) DEFAULT '0.00' NOT NULL,
	datecreated int(11) DEFAULT '0' NOT NULL,
	delivery_pid int(11) DEFAULT '0' NOT NULL,
	statusid int(11) DEFAULT '0' NOT NULL,
	ordetitems text NOT NULL,
	customer int(11) unsigned DEFAULT '0',
	status int(11) unsigned DEFAULT '0',
	delivery_person int(11) unsigned DEFAULT '0'

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_orderitem'
#
CREATE TABLE tx_laundrywebapp_domain_model_orderitem (

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_address'
#
CREATE TABLE tx_laundrywebapp_domain_model_address (

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_status'
#
CREATE TABLE tx_laundrywebapp_domain_model_status (

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_product'
#
CREATE TABLE tx_laundrywebapp_domain_model_product (

);
