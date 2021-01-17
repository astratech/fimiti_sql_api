# Dispatch Orders

APIs

## All Dispatch Orders List

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/fimiti_sql_api/api/v1/orders/dispatch?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1"
```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/orders/dispatch"
);

let params = {
    "api_token": "{YOUR_AUTH_KEY}",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": true,
    "response": [
        {
            "id": 1,
            "ref": null,
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-01 16:29:13",
                "date_confirmed": "2021-01-01 16:29:13"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-01 16:16:44",
            "updated_at": "2021-01-01 16:29:13"
        },
        {
            "id": 2,
            "ref": "FMT143764",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "ikolaba",
                "zone": "zone 1"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "550"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": "false"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-01 16:34:09",
            "updated_at": "2021-01-01 16:34:09"
        },
        {
            "id": 3,
            "ref": "FMT149163",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "ikolaba",
                "zone": "zone 1"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "550",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-01 20:41:45",
                "date_confirmed": "2021-01-01 20:41:45"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-01 19:45:39",
            "updated_at": "2021-01-01 20:41:45"
        },
        {
            "id": 6,
            "ref": "FMT453553",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "ikolaba",
                "zone": "zone 1"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "550",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": "false"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-01 20:21:51",
            "updated_at": "2021-01-01 20:21:51"
        },
        {
            "id": 7,
            "ref": "FMT689799",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "ikolaba",
                "zone": "zone 1"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "550",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-01 20:42:03",
                "date_confirmed": "2021-01-01 20:42:03"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-01 20:26:32",
            "updated_at": "2021-01-01 20:42:03"
        },
        {
            "id": 8,
            "ref": "FMT317091",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "ikolaba",
                "zone": "zone 1"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "550",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": "false"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-02 01:03:45",
            "updated_at": "2021-01-02 01:03:45"
        },
        {
            "id": 9,
            "ref": "FMT184593",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "samonda",
                "zone": "zone 1"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "550",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-02 01:37:47",
                "date_confirmed": "2021-01-02 01:37:47"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-02 01:37:27",
            "updated_at": "2021-01-02 01:37:47"
        },
        {
            "id": 10,
            "ref": "FMT556010",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "samonda",
                "zone": "zone 1"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "550",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-02 01:54:59",
                "date_confirmed": "2021-01-02 01:54:59"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-02 01:54:58",
            "updated_at": "2021-01-02 01:54:59"
        },
        {
            "id": 11,
            "ref": "FMT813303",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "samonda",
                "zone": "zone 1"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "550",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-02 01:57:02",
                "date_confirmed": "2021-01-02 01:57:02"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-02 01:57:00",
            "updated_at": "2021-01-02 01:57:02"
        },
        {
            "id": 12,
            "ref": "FMT323387",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "samonda",
                "zone": "zone 1"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "550",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-02 01:57:58",
                "date_confirmed": "2021-01-02 01:57:58"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-02 01:57:56",
            "updated_at": "2021-01-02 01:57:58"
        },
        {
            "id": 13,
            "ref": "FMT154713",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-02 01:58:51",
                "date_confirmed": "2021-01-02 01:58:51"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-02 01:58:49",
            "updated_at": "2021-01-02 01:58:51"
        },
        {
            "id": 14,
            "ref": "FMT101954",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-02 01:59:28",
                "date_confirmed": "2021-01-02 01:59:28"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-02 01:59:26",
            "updated_at": "2021-01-02 01:59:28"
        },
        {
            "id": 15,
            "ref": "FMT455142",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-02 02:01:40",
                "date_confirmed": "2021-01-02 02:01:40"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-02 02:01:39",
            "updated_at": "2021-01-02 02:01:40"
        },
        {
            "id": 16,
            "ref": "FMT854301",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 08:06:09",
                "date_confirmed": "2021-01-03 08:06:09"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 08:06:07",
            "updated_at": "2021-01-03 08:06:09"
        },
        {
            "id": 18,
            "ref": "FMT591092",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 08:27:39",
                "date_confirmed": "2021-01-03 08:27:39"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 08:27:35",
            "updated_at": "2021-01-03 08:27:39"
        },
        {
            "id": 19,
            "ref": "FMT746973",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "eleyele",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 08:30:05",
                "date_confirmed": "2021-01-03 08:30:05"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 08:30:00",
            "updated_at": "2021-01-03 08:30:05"
        },
        {
            "id": 20,
            "ref": "FMT686314",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "eleyele",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:01:02",
                "date_confirmed": "2021-01-03 20:01:02"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 08:50:38",
            "updated_at": "2021-01-03 20:01:02"
        },
        {
            "id": 21,
            "ref": "FMT625883",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "eleyele",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:01:20",
                "date_confirmed": "2021-01-03 20:01:20"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:01:17",
            "updated_at": "2021-01-03 20:01:20"
        },
        {
            "id": 22,
            "ref": "FMT359695",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:01:56",
                "date_confirmed": "2021-01-03 20:01:56"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:01:52",
            "updated_at": "2021-01-03 20:01:56"
        },
        {
            "id": 23,
            "ref": "FMT564016",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:18:05",
                "date_confirmed": "2021-01-03 20:18:05"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:18:01",
            "updated_at": "2021-01-03 20:18:05"
        },
        {
            "id": 24,
            "ref": "FMT696713",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:20:33",
                "date_confirmed": "2021-01-03 20:20:33"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:20:30",
            "updated_at": "2021-01-03 20:20:33"
        },
        {
            "id": 25,
            "ref": "FMT146002",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:26:29",
                "date_confirmed": "2021-01-03 20:26:29"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:26:26",
            "updated_at": "2021-01-03 20:26:29"
        },
        {
            "id": 26,
            "ref": "FMT183816",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:37:20",
                "date_confirmed": "2021-01-03 20:37:20"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:37:18",
            "updated_at": "2021-01-03 20:37:20"
        },
        {
            "id": 27,
            "ref": "FMT706740",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:41:16",
                "date_confirmed": "2021-01-03 20:41:16"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:41:12",
            "updated_at": "2021-01-03 20:41:16"
        },
        {
            "id": 28,
            "ref": "FMT486474",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:43:47",
                "date_confirmed": "2021-01-03 20:43:47"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:41:24",
            "updated_at": "2021-01-03 20:43:47"
        },
        {
            "id": 29,
            "ref": "FMT920398",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:48:21",
                "date_confirmed": "2021-01-03 20:48:21"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:47:49",
            "updated_at": "2021-01-03 20:48:21"
        },
        {
            "id": 30,
            "ref": "FMT473552",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:49:27",
                "date_confirmed": "2021-01-03 20:49:27"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:49:25",
            "updated_at": "2021-01-03 20:49:27"
        },
        {
            "id": 31,
            "ref": "FMT909420",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:49:50",
                "date_confirmed": "2021-01-03 20:49:50"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:49:48",
            "updated_at": "2021-01-03 20:49:50"
        },
        {
            "id": 32,
            "ref": "FMT394649",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:50:15",
                "date_confirmed": "2021-01-03 20:50:15"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:50:13",
            "updated_at": "2021-01-03 20:50:15"
        },
        {
            "id": 33,
            "ref": "FMT587137",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:51:01",
                "date_confirmed": "2021-01-03 20:51:01"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:50:59",
            "updated_at": "2021-01-03 20:51:01"
        },
        {
            "id": 34,
            "ref": "FMT407344",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:51:27",
                "date_confirmed": "2021-01-03 20:51:27"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:51:25",
            "updated_at": "2021-01-03 20:51:27"
        },
        {
            "id": 35,
            "ref": "FMT995530",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:54:15",
                "date_confirmed": "2021-01-03 20:54:15"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:54:12",
            "updated_at": "2021-01-03 20:54:15"
        },
        {
            "id": 36,
            "ref": "FMT560334",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:54:51",
                "date_confirmed": "2021-01-03 20:54:51"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:54:49",
            "updated_at": "2021-01-03 20:54:51"
        },
        {
            "id": 37,
            "ref": "FMT491129",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-03 20:55:07",
                "date_confirmed": "2021-01-03 20:55:07"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-03 20:55:05",
            "updated_at": "2021-01-03 20:55:07"
        },
        {
            "id": 38,
            "ref": "FMT834375",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:24:39",
                "date_confirmed": "2021-01-04 08:24:39"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:23:17",
            "updated_at": "2021-01-04 08:24:39"
        },
        {
            "id": 39,
            "ref": "FMT434336",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:25:43",
                "date_confirmed": "2021-01-04 08:25:43"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:25:40",
            "updated_at": "2021-01-04 08:25:43"
        },
        {
            "id": 40,
            "ref": "FMT768236",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:26:05",
                "date_confirmed": "2021-01-04 08:26:05"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:26:03",
            "updated_at": "2021-01-04 08:26:05"
        },
        {
            "id": 41,
            "ref": "FMT794812",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:26:37",
                "date_confirmed": "2021-01-04 08:26:37"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:26:33",
            "updated_at": "2021-01-04 08:26:37"
        },
        {
            "id": 42,
            "ref": "FMT510121",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:27:48",
                "date_confirmed": "2021-01-04 08:27:48"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:27:46",
            "updated_at": "2021-01-04 08:27:48"
        },
        {
            "id": 43,
            "ref": "FMT273891",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:28:15",
                "date_confirmed": "2021-01-04 08:28:15"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:28:12",
            "updated_at": "2021-01-04 08:28:15"
        },
        {
            "id": 44,
            "ref": "FMT520008",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": "false"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:29:19",
            "updated_at": "2021-01-04 08:29:19"
        },
        {
            "id": 45,
            "ref": "FMT459457",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:29:29",
                "date_confirmed": "2021-01-04 08:29:29"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:29:27",
            "updated_at": "2021-01-04 08:29:29"
        },
        {
            "id": 46,
            "ref": "FMT648595",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:30:31",
                "date_confirmed": "2021-01-04 08:30:31"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:30:27",
            "updated_at": "2021-01-04 08:30:31"
        },
        {
            "id": 47,
            "ref": "FMT726268",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:31:48",
                "date_confirmed": "2021-01-04 08:31:48"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:31:45",
            "updated_at": "2021-01-04 08:31:48"
        },
        {
            "id": 48,
            "ref": "FMT455349",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:37:39",
                "date_confirmed": "2021-01-04 08:37:39"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:37:10",
            "updated_at": "2021-01-04 08:37:39"
        },
        {
            "id": 49,
            "ref": "FMT227001",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:45:39",
                "date_confirmed": "2021-01-04 08:45:39"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:45:37",
            "updated_at": "2021-01-04 08:45:39"
        },
        {
            "id": 50,
            "ref": "FMT930624",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:48:03",
                "date_confirmed": "2021-01-04 08:48:03"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:48:01",
            "updated_at": "2021-01-04 08:48:03"
        },
        {
            "id": 51,
            "ref": "FMT578852",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:49:43",
                "date_confirmed": "2021-01-04 08:49:43"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:49:40",
            "updated_at": "2021-01-04 08:49:43"
        },
        {
            "id": 52,
            "ref": "FMT213819",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:50:44",
                "date_confirmed": "2021-01-04 08:50:44"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:50:42",
            "updated_at": "2021-01-04 08:50:44"
        },
        {
            "id": 53,
            "ref": "FMT895683",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:51:30",
                "date_confirmed": "2021-01-04 08:51:30"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:51:26",
            "updated_at": "2021-01-04 08:51:30"
        },
        {
            "id": 54,
            "ref": "FMT966780",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:51:54",
                "date_confirmed": "2021-01-04 08:51:54"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:51:52",
            "updated_at": "2021-01-04 08:51:54"
        },
        {
            "id": 55,
            "ref": "FMT835258",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:52:08",
                "date_confirmed": "2021-01-04 08:52:08"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:52:06",
            "updated_at": "2021-01-04 08:52:08"
        },
        {
            "id": 56,
            "ref": "FMT744850",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:52:22",
                "date_confirmed": "2021-01-04 08:52:22"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:52:17",
            "updated_at": "2021-01-04 08:52:22"
        },
        {
            "id": 57,
            "ref": "FMT141399",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:53:39",
                "date_confirmed": "2021-01-04 08:53:39"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:53:37",
            "updated_at": "2021-01-04 08:53:39"
        },
        {
            "id": 58,
            "ref": "FMT399032",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:54:16",
                "date_confirmed": "2021-01-04 08:54:16"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:54:13",
            "updated_at": "2021-01-04 08:54:16"
        },
        {
            "id": 59,
            "ref": "FMT696401",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 08:54:51",
                "date_confirmed": "2021-01-04 08:54:51"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 08:54:49",
            "updated_at": "2021-01-04 08:54:51"
        },
        {
            "id": 60,
            "ref": "FMT825476",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "moniya",
                "zone": "zone 10"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "600",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 15:19:36",
                "date_confirmed": "2021-01-04 15:19:36"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 15:19:21",
            "updated_at": "2021-01-04 15:19:36"
        },
        {
            "id": 61,
            "ref": "FMT977768",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "secretariat",
                "zone": "zone 1"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "550",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-04 17:33:40",
                "date_confirmed": "2021-01-04 17:33:40"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-04 17:32:43",
            "updated_at": "2021-01-04 17:33:40"
        },
        {
            "id": 62,
            "ref": "FMT480134",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-07 12:20:50",
                "date_confirmed": "2021-01-07 12:20:50"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-07 12:20:47",
            "updated_at": "2021-01-07 12:20:50"
        },
        {
            "id": 63,
            "ref": "FMT230065",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "aleshinloye",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-11 11:26:37",
                "date_confirmed": "2021-01-11 11:26:37"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-11 11:26:32",
            "updated_at": "2021-01-11 11:26:37"
        },
        {
            "id": 64,
            "ref": "FMT465642",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": true,
                "method": "wallet",
                "date_paid": "2021-01-12 19:13:56",
                "date_confirmed": "2021-01-12 19:13:56"
            },
            "status": "awaiting payment",
            "created_at": "2021-01-12 19:13:39",
            "updated_at": "2021-01-12 19:13:56"
        },
        {
            "id": 65,
            "ref": "FMT778590",
            "user_id": 21,
            "courier": "bike",
            "pickup_info": {
                "region": "dugbe",
                "zone": "zone 2"
            },
            "delivery_info": {
                "region": "ogunpa",
                "zone": "zone 2"
            },
            "package_info": null,
            "timeline": null,
            "pricing": {
                "price": "350",
                "promo_code": null,
                "promo_amount": "0"
            },
            "rider_info": null,
            "payment_info": {
                "confirmed": false
            },
            "status": "awaiting payment",
            "created_at": "2021-01-13 03:59:56",
            "updated_at": "2021-01-13 03:59:56"
        }
    ]
}
```
<div id="execution-results-GETapi-v1-orders-dispatch" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-orders-dispatch"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-orders-dispatch"></code></pre>
</div>
<div id="execution-error-GETapi-v1-orders-dispatch" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-orders-dispatch"></code></pre>
</div>
<form id="form-GETapi-v1-orders-dispatch" data-method="GET" data-path="api/v1/orders/dispatch" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-orders-dispatch', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-orders-dispatch" onclick="tryItOut('GETapi-v1-orders-dispatch');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-orders-dispatch" onclick="cancelTryOut('GETapi-v1-orders-dispatch');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-orders-dispatch" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/orders/dispatch</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-orders-dispatch" data-component="query" required  hidden>
<br>
Authentication key.</p>
</form>


## Single Dispatch Record

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X GET \
    -G "http://localhost/fimiti_sql_api/api/v1/orders/dispatch/maxime?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"id":24081.921043}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/orders/dispatch/maxime"
);

let params = {
    "api_token": "{YOUR_AUTH_KEY}",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};

let body = {
    "id": 24081.921043
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "success": false,
    "response": "record not found"
}
```
<div id="execution-results-GETapi-v1-orders-dispatch--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-v1-orders-dispatch--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-orders-dispatch--id-"></code></pre>
</div>
<div id="execution-error-GETapi-v1-orders-dispatch--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-orders-dispatch--id-"></code></pre>
</div>
<form id="form-GETapi-v1-orders-dispatch--id-" data-method="GET" data-path="api/v1/orders/dispatch/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-orders-dispatch--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-v1-orders-dispatch--id-" onclick="tryItOut('GETapi-v1-orders-dispatch--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-v1-orders-dispatch--id-" onclick="cancelTryOut('GETapi-v1-orders-dispatch--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-v1-orders-dispatch--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/v1/orders/dispatch/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETapi-v1-orders-dispatch--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="GETapi-v1-orders-dispatch--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-v1-orders-dispatch--id-" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete Dispatch Record

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/fimiti_sql_api/api/v1/orders/dispatch/delete/sed?api_token=%7BYOUR_AUTH_KEY%7D" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Api-Version: v1" \
    -d '{"id":482428}'

```

```javascript
const url = new URL(
    "http://localhost/fimiti_sql_api/api/v1/orders/dispatch/delete/sed"
);

let params = {
    "api_token": "{YOUR_AUTH_KEY}",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Api-Version": "v1",
};

let body = {
    "id": 482428
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-v1-orders-dispatch-delete--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-v1-orders-dispatch-delete--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-orders-dispatch-delete--id-"></code></pre>
</div>
<div id="execution-error-POSTapi-v1-orders-dispatch-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-orders-dispatch-delete--id-"></code></pre>
</div>
<form id="form-POSTapi-v1-orders-dispatch-delete--id-" data-method="POST" data-path="api/v1/orders/dispatch/delete/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json","Api-Version":"v1"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-orders-dispatch-delete--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-v1-orders-dispatch-delete--id-" onclick="tryItOut('POSTapi-v1-orders-dispatch-delete--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-v1-orders-dispatch-delete--id-" onclick="cancelTryOut('POSTapi-v1-orders-dispatch-delete--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-v1-orders-dispatch-delete--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/v1/orders/dispatch/delete/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTapi-v1-orders-dispatch-delete--id-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="api_token" data-endpoint="POSTapi-v1-orders-dispatch-delete--id-" data-component="query" required  hidden>
<br>
Authentication key.</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTapi-v1-orders-dispatch-delete--id-" data-component="body" required  hidden>
<br>
</p>

</form>



