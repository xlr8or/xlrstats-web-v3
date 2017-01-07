<?php
/**
 * XLRstats : Real Time Player Stats (http://www.xlrstats.com)
 * (CC) BY-NC-SA 2005-2013, Mark Weirath, Özgür Uysal
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          http://www.xlrstats.com
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 * @package       app.Config.games
 * @since         XLRstats v3.0
 * @version       0.1
 */

$config = array(
	'gameName' => 'Call of Duty 4: Modern Warfare',

	/**
	 * Team names
	 */
	'teams' => array(
		'2' => 'OpFor / Spetznaz',	// Red team
		'3' => 'Marines / S.A.S.',	// Blue team
		'-1' => 'Spectators'
	),

	/**
	 * Weapon: name, description, image
	 */
	'weapons' => array(
		//Weapon Image Path
		'image_path' => '',

		'ac130_25mm_mp' => array('AC 130 25mm', 'description', 'image.png'),
		'ac130_40mm_mp' => array('AC 130 40mm', 'description', 'image.png'),
		'ac130_105mm_mp' => array('AC 130 105mm', 'description', 'image.png'),
		'airstrike_mp' => array('Air Strike', 'description', 'image.png'),
		'ak47_acog_mp' => array('AK-47 ACOG', 'description', 'image.png'),
		'ak47_gl_mp' => array('AK-47 Grenade Launcher', 'description', 'image.png'),
		'ak47_mp' => array('AK-47', 'description', 'image.png'),
		'ak47_reflex_mp' => array('AK-47 Reflex', 'description', 'image.png'),
		'ak74u_acog_mp' => array('AK-74u ACOG', 'description', 'image.png'),
		'ak74u_mp' => array('AK-74u', 'description', 'image.png'),
		'ak47_silencer_mp' => array('AK-47 Silencer', 'description', 'image.png'),
		'ak74u_reflex_mp' => array('AK-74u Reflex', 'description', 'image.png'),
		'ak74u_silencer_mp' => array('AK74u Silencer', 'description', 'image.png'),
		'artillery_mp' => array('Artillery', 'description', 'image.png'),
		'at4_mp' => array('AT4', 'description', 'image.png'),
		'aw50_acog_mp' => array('AW-50 ACOG', 'description', 'image.png'),
		'aw50_mp' => array('AW-50', 'description', 'image.png'),
		'barrett_acog_mp' => array('Barrett-50 ACOG', 'description', 'image.png'),
		'barrett_mp' => array('Barrett-50', 'description', 'image.png'),
		'beretta_mp' => array('Beretta', 'description', 'image.png'),
		'beretta_silencer_mp' => array('Beretta Silencer', 'description', 'image.png'),
		'binoculars_mp' => array('Binoculars', 'description', 'image.png'),
		'brick_blaster_mp' => array('Brick Blaster', 'description', 'image.png'),
		'brick_bomb_mp' => array('Brick Bomb', 'description', 'image.png'),
		'briefcase_bomb_defuse_mp' => array('Bomb Defuse', 'description', 'image.png'),
		'briefcase_bomb_mp' => array('Bomb Set', 'description', 'image.png'),
		'c4_mp' => array('C-4', 'description', 'image.png'),
		'claymore_mp' => array('Claymore Mine', 'description', 'image.png'),
		'cobra_20mm_mp' => array('Cobra 20mm', 'description', 'image.png'),
		'cobra_ffar_mp' => array('Cobra Rocket', 'description', 'image.png'),
		'colt45_mp' => array('Colt .45', 'description', 'image.png'),
		'colt45_silencer_mp' => array('Colt .45 Silencer', 'description', 'image.png'),
		'concussion_grenade_mp' => array('Concussion Grenade', 'description', 'image.png'),
		'defaultweapon_mp' => array('Default Weapon', 'description', 'image.png'),
		'deserteagle_mp' => array('Colt Desert Eagle', 'description', 'image.png'),
		'deserteaglegold_mp' => array('Colt Desert Eagle Gold', 'description', 'image.png'),
		'destructible_car' => array('Exploding Vehicle', 'description', 'image.png'),
		'dragunov_acog_mp' => array('Dragunov ACOG', 'description', 'image.png'),
		'dragunov_mp' => array('Dragunov', 'description', 'image.png'),
		'flash_grenade_mp' => array('Flash Grenade', 'description', 'image.png'),
		'frag_grenade_mp' => array('Frag Grenade', 'description', 'image.png'),
		'frag_grenade_short_mp' => array('Short Fuse Frag Grenade', 'description', 'image.png'),
		'g3_acog_mp' => array('G3 ACOG', 'description', 'image.png'),
		'g3_gl_mp' => array('G3 Grenade Launcher', 'description', 'image.png'),
		'g3_mp' => array('G3', 'description', 'image.png'),
		'g3_reflex_mp' => array('G3 Reflex', 'description', 'image.png'),
		'g3_silencer_mp' => array('G3 Silencer', 'description', 'image.png'),
		'g36c_acog_mp' => array('G36c ACOG', 'description', 'image.png'),
		'g36c_gl_mp' => array('G36c Grenade Launcher', 'description', 'image.png'),
		'g36c_mp' => array('G36c', 'description', 'image.png'),
		'g36c_reflex_mp' => array('G36c Reflex', 'description', 'image.png'),
		'g36c_silencer_mp' => array('G36c Silencer', 'description', 'image.png'),
		'gl_ak47_mp' => array('Grenade Launcher AK-47', 'description', 'image.png'),
		'gl_g3_mp' => array('Grenade Launcher G3', 'description', 'image.png'),
		'gl_g36c_mp' => array('Grenade Launcher G36c', 'description', 'image.png'),
		'gl_m4_mp' => array('Grenade Launcher M4', 'description', 'image.png'),
		'gl_m14_mp' => array('Grenade Launcher M14', 'description', 'image.png'),
		'gl_m16_mp' => array('Grenade Launcher M16', 'description', 'image.png'),
		'gl_mp' => array('Grenade Launcher', 'description', 'image.png'),
		'helicopter_mp' => array('Helicopter', 'description', 'image.png'),
		'hind_ffar_mp' => array('HIND Rocket', 'description', 'image.png'),
		'humvee_50cal_mp' => array('Humvee .50 cal.', 'description', 'image.png'),
		'TT30_mp' => array('TT 30', 'description', 'image.png'),
		'location_selector_mp' => array('Location Selector', 'description', 'image.png'),
		'm4_acog_mp' => array('M4 ACOG', 'description', 'image.png'),
		'm4_gl_mp' => array('M4 Grenade Launcher', 'description', 'image.png'),
		'm4_mp' => array('M4', 'description', 'image.png'),
		'm4_reflex_mp' => array('M4 Reflex', 'description', 'image.png'),
		'm4_silencer_mp' => array('M4 Silencer', 'description', 'image.png'),
		'm14_acog_mp' => array('M14 ACOG', 'description', 'image.png'),
		'landmine_mp' => array('Landmine', 'description', 'image.png'),
		'm14_gl_mp' => array('M14 Grenade Launcher', 'description', 'image.png'),
		'm14_mp' => array('M14', 'description', 'image.png'),
		'm14_reflex_mp' => array('M14 Reflex', 'description', 'image.png'),
		'm14_silencer_mp' => array('M14 Silencer', 'description', 'image.png'),
		'm16_acog_mp' => array('M16 ACOG', 'description', 'image.png'),
		'm16_gl_mp' => array('M16 Grenade Launcher', 'description', 'image.png'),
		'm16_mp' => array('M16', 'description', 'image.png'),
		'm16_reflex_mp' => array('M16 Reflex', 'description', 'image.png'),
		'm16_silencer_mp' => array('M16 Silencer', 'description', 'image.png'),
		'm21_acog_mp' => array('M21 ACOG', 'description', 'image.png'),
		'm21_mp' => array('M21', 'description', 'image.png'),
		'm40a3_acog_mp' => array('M40A3 ACOG', 'description', 'image.png'),
		'm40a3_mp' => array('M40A3', 'description', 'image.png'),
		'm60e4_acog_mp' => array('M60E4 ACOG', 'description', 'image.png'),
		'm60e4_grip_mp' => array('M60E4 Grip', 'description', 'image.png'),
		'm60e4_mp' => array('M60E4', 'description', 'image.png'),
		'm60e4_reflex_mp' => array('M60E4 Reflex', 'description', 'image.png'),
		'm1014_grip_mp' => array('M1014 Grip', 'description', 'image.png'),
		'm1014_mp' => array('M1014', 'description', 'image.png'),
		'm1014_reflex_mp' => array('M1014 Reflex', 'description', 'image.png'),
		'mp5_acog_mp' => array('MP5 ACOG', 'description', 'image.png'),
		'mp5_mp' => array('MP5', 'description', 'image.png'),
		'mp5_reflex_mp' => array('MP5 Reflex', 'description', 'image.png'),
		'mp5_silencer_mp' => array('MP5 Silencer', 'description', 'image.png'),
		'mp44_mp' => array('MP44', 'description', 'image.png'),
		'p90_acog_mp' => array('P90 ACOG', 'description', 'image.png'),
		'p90_mp' => array('P90', 'description', 'image.png'),
		'p90_reflex_mp' => array('P90 Reflex', 'description', 'image.png'),
		'p90_silencer_mp' => array('P90 Silencer', 'description', 'image.png'),
		'radar_mp' => array('Radar', 'description', 'image.png'),
		'remington700_acog_mp' => array('Remington 700 ACOG', 'description', 'image.png'),
		'remington700_mp' => array('Remington 700', 'description', 'image.png'),
		'rpd_acog_mp' => array('RPD ACOG', 'description', 'image.png'),
		'rpd_grip_mp' => array('RPD Grip', 'description', 'image.png'),
		'rpd_mp' => array('RPD', 'description', 'image.png'),
		'rpd_reflex_mp' => array('RPD Reflex', 'description', 'image.png'),
		'rpg_mp' => array('RPG', 'description', 'image.png'),
		'saw_acog_mp' => array('SAW ACOG', 'description', 'image.png'),
		'saw_bipod_crouch_mp' => array('SAW Bipod Crouched', 'description', 'image.png'),
		'saw_bipod_prone_mp' => array('SAW Bipod Prone', 'description', 'image.png'),
		'saw_bipod_stand_mp' => array('SAW Bipod Standing', 'description', 'image.png'),
		'saw_grip_mp' => array('SAW Grip', 'description', 'image.png'),
		'saw_mp' => array('SAW', 'description', 'image.png'),
		'saw_reflex_mp' => array('SAW Reflex', 'description', 'image.png'),
		'skorpion_acog_mp' => array('Skorpion ACOG', 'description', 'image.png'),
		'skorpion_mp' => array('Skorpion', 'description', 'image.png'),
		'skorpion_reflex_mp' => array('Skorpion Reflex', 'description', 'image.png'),
		'skorpion_silencer_mp' => array('Skorpion Silencer', 'description', 'image.png'),
		'smoke_grenade_mp' => array('Smoke Grenade', 'description', 'image.png'),
		'usp_mp' => array('USP', 'description', 'image.png'),
		'usp_silencer_mp' => array('USP Silencer', 'description', 'image.png'),
		'uzi_acog_mp' => array('UZI ACOG', 'description', 'image.png'),
		'uzi_mp' => array('UZI', 'description', 'image.png'),
		'uzi_reflex_mp' => array('UZI Reflex', 'description', 'image.png'),
		'uzi_silencer_mp' => array('UZI Silencer', 'description', 'image.png'),
		'winchester1200_grip_mp' => array('Winchester 1200 Grip', 'description', 'image.png'),
		'winchester1200_mp' => array('Winchester 1200', 'description', 'image.png'),
		'winchester1200_reflex_mp' => array('Winchester 1200 Reflex', 'description', 'image.png'),
		'mod_melee' => array('Knife', 'description', 'image.png'),
		'mod_falling' => array('Falling', 'description', 'image.png'),

		//No weapon?
		'none' => array('Bad luck...', 'description', 'image.png'),
	),

	/**
	 * Map: name, description, image
	 */
	'maps' => array(
		//Map Image Path
		'image_path' => 'http://image.www.gametracker.com/images/maps/160x120/cod4/',
		
		// Stock CoD4
		'mp_backlot' => array('Backlot', 'description', 'mp_backlot.jpg'),
		'mp_bloc' => array('Bloc', 'description', 'mp_bloc.jpg'),
		'mp_bog' => array('Bog', 'description', 'mp_bog.jpg'),
		'mp_cargoship' => array('Wet Work', 'description', 'mp_cargoship.jpg'),
		'mp_citystreets' => array('City Streets', 'description', 'mp_citystreets.jpg'),
		'mp_convoy' => array('Convoy', 'description', 'mp_convoy.jpg'),
		'mp_countdown' => array('Countdown', 'description', 'mp_countdown.jpg'),
		'mp_crash' => array('Crash', 'description', 'mp_crash.jpg'),
		'mp_crossfire' => array('Crossfire', 'description', 'mp_crossfire.jpg'),
		'mp_farm' => array('Down Pour', 'description', 'mp_farm.jpg'),
		'mp_overgrown' => array('Overgrown', 'description', 'mp_overgrown.jpg'),
		'mp_pipeline' => array('Pipeline', 'description', 'mp_pipeline.jpg'),
		'mp_shipment' => array('Shipment', 'description', 'mp_shipment.jpg'),
		'mp_showdown' => array('Showdown', 'description', 'mp_showdown.jpg'),
		'mp_strike' => array('Strike', 'description', 'mp_strike.jpg'),
		'mp_vacant' => array('Vacant', 'description', 'mp_vacant.jpg'),
		'mp_crash_snow' => array('Winter Crash', 'description', 'mp_crash_snow.jpg'),
		'mp_carentan' => array('China Town', 'description', 'mp_carentan.jpg'),
		'mp_creek' => array('Creek', 'description', 'mp_creek.jpg'),
		'mp_broadcast' => array('Broadcast', 'description', 'mp_broadcast.jpg'),
		'mp_killhouse' => array('Killhouse', 'description', 'mp_killhouse.jpg'),


		// Custom Maps
		'mp_backlot_night' => array('Backlot (Night)', 'description', 'mp_backlot_night.jpg'),
		'mp_village' => array('Village', 'description', 'mp_village.jpg'),
		'mp_village_night' => array('Village (Night)', 'description', 'mp_village_night.jpg'),
		'mp_qmx_matmata' => array('Matmata', 'description', 'mp_qmx_matmata.jpg'),

	),

	'events' => array(

		//*********************
		// Event names
		//*********************
		'bomb_plant' => array('Bomb Plant', 'description', 'image.png'),
		'bomb_defuse' => array('Bomb Defuse', 'description', 'image.png'),
		're_pickup' => array('Pickup', 'description', 'image.png'),
		're_capture' => array('Capture', 'description', 'image.png'),
		're_drop' => array('Drop', 'description', 'image.png'),
	),


	/**
	 * Bodypart names
	 */

	'body_parts' => array(
		/**
		 * fixed_name => array ('console_name' => 'Easy Name')
		 * DO NOT CHANGE 'fixed_name's
		 */
		'head' => array('head' => 'Head'),
		'neck' => array('neck' => 'Neck'),
		'torso_lower' => array('torso_lower' => 'Abdomen'),
		'torso_upper' => array('torso_upper' => 'Chest'),
		'left_arm_upper' => array('left_arm_upper' => 'Left Arm Upper'),
		'left_arm_lower' => array('left_arm_lower' => 'Left Arm Lower'),
		'left_hand' => array('left_hand' => 'Left Hand'),
		'right_arm_upper' => array('right_arm_upper' => 'Right Arm Upper'),
		'right_arm_lower' => array('right_arm_lower' => 'Right Arm Lower'),
		'right_hand' => array('right_hand' => 'Right Hand'),
		'left_leg_upper' => array('left_leg_upper' => 'Left Leg Upper'),
		'left_leg_lower' => array('left_leg_lower' => 'Left Leg Lower'),
		'left_foot' => array('left_foot' => 'Left Foot'),
		'right_leg_upper' => array('right_leg_upper' => 'Right Leg Upper'),
		'right_leg_lower' => array('right_leg_lower' => 'Right Leg Lower'),
		'right_foot' => array('right_foot' => 'Right Foot'),
		'none' => array('none' => 'Total Disrupt'),
	),

);
