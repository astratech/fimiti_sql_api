var zones = {
	name : String,
	regions : Array [],
	updated_at,
	created_at,
};

var services = {
	name : String,
	updated_at,
	created_at,
};

var courier = {
	name : String,
	updated_at,
	created_at,
};

var food_vendors = {
	name: String,
	address: String,
	zone: String,
	mobile: String,
	menu : [name, price, image_url],
	updated_at,
	created_at,
}

var users = {
	username : String,
	fullname : String,
	mobile : String,
	email : String,
	password : String,
	avatar : String,
	account_type : Enum ['personal','business'],
	updated_at,
	created_at,
};

var dispatch_orders = {
	user_id,
	courier: String,
	pickup_info: {
		location: String,
		zone: String,
		address: String,
		fullname: String,
		mobile: String,
		email: String,
	},
	delivery_info: {
		location: String,
		zone: String,
		address: String,
		fullname: String,
		mobile: String,
		email: String,
	},
	package_info: {
		type: String,
		dimension: String,
		quantity: String,
	},
	timeline: {
		created: Date;
		moved: Date;
		delivered: Date;
	},
	pricing: {
		route_price: String;
		courier_price: String;
		dimension_price: String;
		vat_price: String;
		other_price: String;
	},
	rider_info: {
		name: String,
		mobile: String,
	},
	payment_info:{
		method: Enum ['cash','transfer','atm'],
		confirmed: true|false,
		date_paid,
		date_confirmed
	}
	updated_at,
	created_at,
}

var orders = {
	username: String,
	service: String,
	courier: String,
	vendor_id: _Id,
	pickup_info: {
		location: String,
		zone: String,
		address: String,
		fullname: String,
		mobile: String,
		email: String,
	},
	delivery_info: {
		location: String,
		zone: String,
		address: String,
		fullname: String,
		mobile: String,
		email: String,
	},
	package_info: {
		type: String,
		dimension: String,
		quantity: String,
	},
	timeline: {
		created: Date;
		moved: Date;
		delivered: Date;
	},
	pricing: {
		route_price: String;
		courier_price: String;
		dimension_price: String;
		vat_price: String;
		other_price: String;
	},
	rider: {
		name: String,
		mobile: String,
	},
	updated_at,
	created_at,
};
