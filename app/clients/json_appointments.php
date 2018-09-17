<?php
	$events = [
		[
			"id"=>999,
			"recurring"=>true,
			"repeating"=>false,
			"title"=>"Mickey Mouse",
			"address"=>"795 Folsom Ave, Suite 600",
			"region"=>"San Francisco",
			"state"=>"CA",
			"zipcode"=>94107,
			"mobile"=>"604-555-1234",
			"email"=>"mickey@mouse.com",
			"practitioner_id"=>21709,
			"cost"=>45.99,
			"tax"=>0.00,
			"start"=>date('Y/m/d 08:15'),
			"end"=>date('Y/m/d 08:40'),
			"allDay"=>false,
			"details"=>"stuff about this appointment",
			"className"=>"adjustment",
			"type"=>"square adjustment",
			"doctor"=>"square blue-up",
			"status"=>"square silver-down",
			"practitioner"=>"Dr. Michael Bologna",
			"appointment"=>"Adjustment",
			"statusName"=>"Late",
			"clinic"=>[
				[
					"name"=>"Eternal Health Centres",
					"address"=>"Suite 101 - 1080 Marine Dr",
					"region"=>"North Vancouver",
					"state"=>"BC",
					"zipcode"=>"V7P 1S5",
					"email"=>"info@eternalhealthcentres.com",
					"phone"=>"604-971-5446",
					"logo"=>"app/clients/ehc/img/ehc-invoice.png"
				]
			]
		],
		[
			"id"=>999,
			"recurring"=>true,
			"repeating"=>false,
			"title"=>"Mickey Mouse",
			"address"=>"795 Folsom Ave, Suite 600",
			"region"=>"San Francisco",
			"state"=>"CA",
			"zipcode"=>94107,
			"mobile"=>"604-555-1234",
			"email"=>"mickey@mouse.com",
			"practitioner_id"=>21709,
			"cost"=>45.99,
			"tax"=>0.00,
			"start"=>date('Y/m/'.(date('d')+2).' 08:15'),
			"end"=>date('Y/m/'.(date('d')+2).' 08:40'),
			"allDay"=>false,
			"details"=>"stuff about this appointment",
			"className"=>"consultation",
			"type"=>"square consultation",
			"doctor"=>"square pink-up",
			"status"=>"square red-down",
			"practitioner"=>"Dr. Andrea Bologna",
			"appointment"=>"Consultation",
			"statusName"=>"No Show",
			"clinic"=>[
				[
					"name"=>"Village Centre Chiropractic & Massage",
					"address"=>"Suite 202 - 4309 Skiers Approach",
					"region"=>"Whistler",
					"state"=>"BC",
					"zipcode"=>"V0N 1B4",
					"email"=>"info@vccm.ca",
					"phone"=>"604-932-2111",
					"logo"=>"app/clients/vccm/img/vccm-invoice.png"
				]
			]
		],
		[
			"id"=> 001,
			"recurring"=> false,
			"repeating"=> false,
			"title"=> "Bugs Bunny",
			"address"=> "795 Folsom Ave, Suite 600",
			"region"=> "San Francisco",
			"state"=> "CA",
			"zipcode"=> 94107,
			"mobile"=> "604-555-1234",
			"email"=> "mickey@mouse.com",
			"practitioner_id"=> 21709,
			"cost"=> 45.99,
			"tax"=> 0.00,
			"start"=>date('Y/m/d 10:30'),
			"end"=>date('Y/m/d 10:50'),
			"allDay"=> false,
			"details"=> "stuff about this appointment",
			"className"=> "exam",
			"type"=> "square exam",
			"doctor"=> "square blue-up",
			"status"=> "square orange-down",
			"practitioner"=> "Dr. Michael Bologna",
			"appointment"=> "Exam",
			"statusName"=> "Booked",
			"clinic"=> [
				[
					"name"=> "Eternal Health Centres",
					"address"=> "Suite 101 - 1080 Marine Dr",
					"region"=> "North Vancouver",
					"state"=> "BC",
					"zipcode"=> "V7P 1S5",
					"email"=> "info@eternalhealthcentres.com",
					"phone"=> "604-971-5446",
					"logo"=> "app/clients/ehc/img/ehc-invoice.png"
				]
			]
		],
		[
			"id"=>002,
			"recurring"=>false,
			"repeating"=>false,
			"title"=>"Donald Duck",
			"address"=>"795 Folsom Ave, Suite 600",
			"region"=>"San Francisco",
			"state"=>"CA",
			"zipcode"=>94107,
			"mobile"=>"604-555-1234",
			"email"=>"mickey@mouse.com",
			"practitioner_id"=>21709,
			"cost"=>45.99,
			"tax"=>0.08,
			"start"=>date('Y/m/d 10:45'),
			"end"=>date('Y/m/d 11:15'),
			"allDay"=>false,
			"details"=>"stuff about this appointment",
			"className"=>"xray",
			"type"=>"square xray",
			"doctor"=>"square pink-up",
			"status"=>"square green-down",
			"practitioner"=>"Dr. Andrea Bologna",
			"appointment"=>"X-Ray",
			"statusName"=>"Arrived",
			"clinic"=>[
				[
					"name"=>"Village Centre Chiropractic & Massage",
					"address"=>"Suite 202 - 4309 Skiers Approach",
					"region"=>"Whistler",
					"state"=>"BC",
					"zipcode"=>"V0N 1B4",
					"email"=>"info@vccm.ca",
					"phone"=>"604-932-2111",
					"logo"=>"app/clients/vccm/img/vccm-invoice.png"
				]
			]
		],
		[
			"id"=>003,
			"recurring"=>false,
			"repeating"=>false,
			"title"=>"Foghorn Leghorn",
			"address"=>"795 Folsom Ave, Suite 600",
			"region"=>"San Francisco",
			"state"=>"CA",
			"zipcode"=>94107,
			"mobile"=>"604-555-1234",
			"email"=>"mickey@mouse.com",
			"practitioner_id"=>21709,
			"cost"=>45.99,
			"tax"=>0.00,
			"start"=>date('Y/m/d 12:00'),
			"end"=>date('Y/m/d 12:30'),
			"allDay"=>false,
			"details"=>"stuff about this appointment",
			"className"=>"report",
			"type"=>"square report",
			"doctor"=>"square blue-up",
			"status"=>"square silver-down",
			"practitioner"=>"Dr. Michael Bologna",
			"appointment"=>"Report of finding",
			"statusName"=>"Late",
			"clinic"=>[
				[
					"name"=>"Eternal Health Centres",
					"address"=>"Suite 101 - 1080 Marine Dr",
					"region"=>"North Vancouver",
					"state"=>"BC",
					"zipcode"=>"V7P 1S5",
					"email"=>"info@eternalhealthcentres.com",
					"phone"=>"604-971-5446",
					"logo"=>"app/clients/ehc/img/ehc-invoice.png"
				]
			]
		],
		[
			"id"=>004,
			"recurring"=>false,
			"repeating"=>false,
			"title"=>"Elmer Fudd",
			"address"=>"795 Folsom Ave, Suite 600",
			"region"=>"San Francisco",
			"state"=>"CA",
			"zipcode"=>94107,
			"mobile"=>"604-555-1234",
			"email"=>"mickey@mouse.com",
			"practitioner_id"=>21709,
			"cost"=>45.99,
			"tax"=>0.00,
			"start"=>date('Y/m/d 13:00'),
			"end"=>date('Y/m/d 13:30'),
			"allDay"=>false,
			"details"=>"stuff about this appointment",
			"className"=>"exam",
			"type"=>"square exam",
			"doctor"=>"square pink-up",
			"status"=>"square red-down",
			"practitioner"=>"Dr. Andrea Bologna",
			"appointment"=>"Exam",
			"statusName"=>"No Show",
			"clinic"=>[
				[
					"name"=>"Village Centre Chiropractic & Massage",
					"address"=>"Suite 202 - 4309 Skiers Approach",
					"region"=>"Whistler",
					"state"=>"BC",
					"zipcode"=>"V0N 1B4",
					"email"=>"info@vccm.ca",
					"phone"=>"604-932-2111",
					"logo"=>"app/clients/vccm/img/vccm-invoice.png"
				]
			]
		]
	];

	header("Content-Type: application/json");
	echo json_encode($events);
//print_r( $events );