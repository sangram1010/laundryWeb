#
# Table structure for table 'tx_laundrywebapp_domain_model_login'
#
CREATE TABLE tx_laundrywebapp_domain_model_login (

	email varchar(255) DEFAULT '' NOT NULL,
	password varchar(255) DEFAULT '' NOT NULL,
	type varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_deliveryperson'
#
CREATE TABLE tx_laundrywebapp_domain_model_deliveryperson (

	name varchar(255) DEFAULT '' NOT NULL,
	delivery_pid int(11) DEFAULT '0' NOT NULL,
	contactno int(11) DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_customer'
#
CREATE TABLE tx_laundrywebapp_domain_model_customer (

	surname varchar(255) DEFAULT '' NOT NULL,
	customerid int(11) DEFAULT '0' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	firstname varchar(255) DEFAULT '' NOT NULL,
	addressid int(11) DEFAULT '0' NOT NULL,
	login int(11) unsigned DEFAULT '0',
	address int(11) unsigned DEFAULT '0',
	user int(11) unsigned DEFAULT '0'

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
	customer int(11) unsigned DEFAULT '0',
	status int(11) unsigned DEFAULT '0',
	delivery_person int(11) unsigned DEFAULT '0',
	products text NOT NULL

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_address'
#
CREATE TABLE tx_laundrywebapp_domain_model_address (

	street varchar(255) DEFAULT '' NOT NULL,
	addressid int(11) DEFAULT '0' NOT NULL,
	houseno varchar(255) DEFAULT '' NOT NULL,
	pincode int(11) DEFAULT '0' NOT NULL,
	state varchar(255) DEFAULT '' NOT NULL,
	country varchar(255) DEFAULT '' NOT NULL,
	contactno int(11) DEFAULT '0' NOT NULL,
	email varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_status'
#
CREATE TABLE tx_laundrywebapp_domain_model_status (

	status varchar(255) DEFAULT '' NOT NULL,
	statusid int(11) DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_laundrywebapp_domain_model_product'
#
CREATE TABLE tx_laundrywebapp_domain_model_product (

	productname varchar(255) DEFAULT '' NOT NULL,
	slug varchar(2048),
	productid int(11) DEFAULT '0' NOT NULL,
	itemid int(11) DEFAULT '0' NOT NULL,
	pricecolor double(11,2) DEFAULT '0.00' NOT NULL,
	pricewhite int(11) DEFAULT '0' NOT NULL,
	image int(11) unsigned NOT NULL default '0'

);
