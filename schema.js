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
		region: String,
		zone: String,
		address: String,
		fullname: String,
		mobile: String,
		email: String,
	},
	delivery_info: {
		region: String,
		zone: String,
		address: String,
		fullname: String,
		mobile: String,
		email: String,
	},
	package_info: String,
	timeline: {
		created: Date;
		status: String;
	},
	pricing: {
		price: String,
		promo_code: String,
		promo_amount: String,
	},
	rider_info: {
		name: String,
		mobile: String,
	},
	payment_info:{
		method: Enum ['cash','transfer','atm', 'wallet'],
		confirmed: true|false,
		date_paid,
		date_confirmed
	},
	schedule:{
		type: String ['now', 'later'],
		time: String,
	}
	status: ['awaiting payment','payment confirmed', 'awaiting rider' 'in-transit', 'picked', 'dispatched', 'completed', 'terminated']
	updated_at,
	created_at,
}


var riders = {
	name : String,
	active: String,
	rating: String,
	avatar: String,
	updated_at,
	created_at,
};

var riders_movement = {
	rider_id: String,
	location: String,
	zone: String,
	region: String,
	updated_at,
	created_at,
}
