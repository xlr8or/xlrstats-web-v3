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
	'gameName' => 'BattleField Bad Company 2',


//*********************
// These are the standard BFBC2 settings
//*********************

/**
 * Team names
 */
	'teams' => array(
		'1' => 'US Marines',
		'2' => 'RU Army',
		'-1' => 'Spectators'
	),


/**
 * Weapon: name, description, image
 */
 	'weapons' => array(

		//Assault
		'AEK971' => array('AEK-971 Vintovka', 'description', 'image.png'),
		'XM8' => array('XM8 Prototype', 'description', 'image.png'),
		'F2000' => array('F2000 Assault', 'description', 'image.png'),
		'AUG' => array('Stg.77 AUG', 'description', 'image.png'),
		'AN94' => array('AN-94 Abakan', 'description', 'image.png'),
		'M416' => array('M416', 'description', 'image.png'),
		'M16' => array('M16A2', 'description', 'image.png'),
		'M16K' => array('M162A - SPECTACT', 'description', 'image.png'),

		//Engineer
		'9A91' => array('9A-91 Avtomat', 'description', 'image.png'),
		'SCAR' => array('SCAR-L Carbine', 'description', 'image.png'),
		'XM8C' => array('XM8 Compact', 'description', 'image.png'),
		'AKS74u' => array('AKS-74U Krinkov', 'description', 'image.png'),
		'UZI' => array('UZI', 'description', 'image.png'),
		'PP2000' => array('PP-2000 Avtomat', 'description', 'image.png'),
		'UMP' => array('UMP-45', 'description', 'image.png'),
		'UMPK' => array('UMP - SPECTACT', 'description', 'image.png'),

		//Medic
		'PKM' => array('PKM LMG', 'description', 'image.png'),
		'M249' => array('M249 Saw', 'description', 'image.png'),
		'QJU88' => array('Type 88 LMG', 'description', 'image.png'),
		'M60' => array('M60 LMG', 'description', 'image.png'),
		'XM8 LMG' => array('XM8 LMG', 'description', 'image.png'),
		'MG36' => array('MG36', 'description', 'image.png'),
		'MG3' => array('MG3', 'description', 'image.png'),
		'MG3K' => array('MG3 - SPECTACT', 'description', 'image.png'),

		//Recon
		'M24' => array('M24 Sniper', 'description', 'image.png'),
		'QBU88' => array('Type 88 Sniper', 'description', 'image.png'),
		'SV98' => array('SV98 Snaiperskaya', 'description', 'image.png'),
		'SVU' => array('SVU Snaiperskaya Short', 'description', 'image.png'),
		'GOL' => array('GOL Sniper Magnum', 'description', 'image.png'),
		'VSS' => array('VSS Snaiperskaya Special', 'description', 'image.png'),
		'M95' => array('M95 Sniper', 'description', 'image.png'),
		'M95K' => array('M95 - SPECTACT', 'description', 'image.png'),

		//Other Kits
		'870MCS' => array('870 Combat', 'description', 'image.png'),
		'S20K' => array('Saiga 20k Semi', 'description', 'image.png'),
		'M1A1 Thompson' => array('WWII M1A1 Thompson', 'description', 'image.png'),
		'SPAS12' => array('SPAS-12 Combat', 'description', 'image.png'),
		'Mk14EBR' => array('M14 Mod 0 Enhanced', 'description', 'image.png'),
		'NS2000' => array('NEOSTEAD 2000 Combat', 'description', 'image.png'),
		'usas12' => array('USAS-12 Auto', 'description', 'image.png'),
		'G3' => array('G3', 'description', 'image.png'),
		'Garand' => array('M1 Garand', 'description', 'image.png'),

		//Sidearms
		'M9' => array('M9 Pistol', 'description', 'image.png'),
		'MP443' => array('MP-443 Grach', 'description', 'image.png'),
		'M1911' => array('WWII M1911 .45', 'description', 'image.png'),
		'MP412' => array('MP-412 Rex', 'description', 'image.png'),
		'M9-3' => array('M93R Burst', 'description', 'image.png'),

		//*********************
		// Vehicle names
		//*********************

		//Light
		'HUMV#Gun' => array('HMMWV 4WD', 'description', 'image.png'),
		'VODN#KORD' => array('VODNIK 4WD', 'description', 'image.png'),
		'COBR#Kord' => array('COBRA 4WD', 'description', 'image.png'),

		//Heavy
		'M1A2#Maingun' => array('M1A2 Abrams (Main Gun)', 'description', 'image.png'),
		'M1A2#CoaxMG' => array('M1A2 Abrams (Coax MG)', 'description', 'image.png'),
		'M1A2#RemoteGun' => array('M1A2 Abrams (Remote Gun)', 'description', 'image.png'),

		'T90R#MainGun' => array('T-90 MBT (Main Gun)', 'description', 'image.png'),
		'T90R#CoaxMG' => array('T-90 MBT (Coax MG)', 'description', 'image.png'),
		'T90R#RemoteGun' => array('T-90 MBT (Remote Gun)', 'description', 'image.png'),

		'M3A3#IFVAutoCannon' => array('M3A3 Bradley (Auto Cannon)', 'description', 'image.png'),
		'M3A3#TOW' => array('M3A3 Bradley (Tow)', 'description', 'image.png'),
		'M3A3#RemoteMG' => array('M3A3 Bradley (Remote MG)', 'description', 'image.png'),
		'M3A3#PFW RearLeft' => array('M3A3 Bradley (Rear Left Gun)', 'description', 'image.png'),
		'M3A3#PFW RearRight' => array('M3A3 Bradley (Rear Right Gun)', 'description', 'image.png'),

		'BMD3#IFVAutoCannon' => array('BMD-3 Bakhcha (Auto Cannon)', 'description', 'image.png'),
		'BMD3#TOW' => array('BMD-3 Bakhcha (Tow)', 'description', 'image.png'),
		'BMD3#RemoteMG' => array('BMD-3 Bakhcha (Remote MG)', 'description', 'image.png'),
		'BMDA#Cannon' => array('BMD-3 Bakhcha (Cannon)', 'description', 'image.png'),
		'BMD3#PFW RearRight' => array('BMD-3 Bakhcha (Rear Right Gun)', 'description', 'image.png'),
		'BMD3#PFW RearLeft' => array('BMD-3 Bakhcha(Rear Left Gun)', 'description', 'image.png'),

		'BMDA#GMG' => array('BMD-3 Bakhcha AA', 'description', 'image.png'),

		//Water
		'PBLB#GMG' => array('Patrol Boat', 'description', 'image.png'),

		//Air
		'AH60#Minigun Left' => array('UH-60 Transport (Mini Gun Left)', 'description', 'image.png'),
		'AH60#Minigun Right' => array('UH-60 Transport (Mini Gun Right)', 'description', 'image.png'),

		'AH64#Heli AutoCannon' => array('AH-64 Apache (Auto Cannon)', 'description', 'image.png'),
		'AH64#RocketPod Right' => array('AH-64 Apache (Rocket Pod Right)', 'description', 'image.png'),
		'AH64#RocketPod Left' => array('AH-64 Apache (Rocket Pod Left)', 'description', 'image.png'),
		'AH64#TOW' => array('AH-64 Apache (Tow)', 'description', 'image.png'),

		'MI28#GunnerCannnon' => array('MI-28 Havoc (Gunner Cannon)', 'description', 'image.png'),
		'MI28#DumbFireRocket Port' => array('MI-28 Havoc (Rocket)', 'description', 'image.png'),
		'MI28#DumbFireRocket Starboard' => array('MI-28 Havoc (Starboard)', 'description', 'image.png'),
		'MI28#TOW' => array('MI-28 Havoc (Tow)', 'description', 'image.png'),

		'MI24#GunnerCannon' => array('MI-24 Hind', 'description', 'image.png'),

		'UAV1#MG' => array('UAV (MG)', 'description', 'image.png'),
		'UAV1#Bomb' => array('UAV (Bomb)', 'description', 'image.png'),

		//Stationary
		'X312#Gun' => array('Heavy MG X312', 'description', 'image.png'),
		'KORD#Gun' => array('Heavy MG KORD', 'description', 'image.png'),
		'KORN#Missile Launcher' => array('Stationary AT KORN', 'description', 'image.png'),
		'TOW2#Launcher' => array('Stationary AT TOW2', 'description', 'image.png'),
		'ZU23#Cannons' => array('Anti-Air Gun', 'description', 'image.png'),
		'VADS#AutoCannon' => array('VADS Auto Cannon', 'description', 'image.png'),
		'CAVJ#XM-307' => array('XM307 ACSW', 'description', 'image.png'),

		//*********************
		// Other Weapon Names
		//*********************
		'KNV-1' => array('Knife', 'description', 'image.png'),
		'RoadKill' => array('Road Kill', 'description', 'image.png'),
		'D2.0' => array('Demolition', 'description', 'image.png'),
		'[]' => array('notidentify', 'description', 'image.png'),
		'1' => array('notidentify', 'description', 'image.png'),
		' ' => array('notidentify', 'description', 'image.png'),

		//*********************
		// Perk Names
		//*********************
		'40mmgl' => array('40mm Grenade Launcher', 'description', 'image.png'),
		'40mmsg' => array('40mm Shot Gun', 'description', 'image.png'),
		'40mmsmk' => array('40mm Smoke Launcher', 'description', 'image.png'),
		'RPG7' => array('RPG7', 'description', 'image.png'),
		'PWR-700' => array('Repair Tool', 'description', 'image.png'),
		'ATM-00' => array('Anti-Tank Mine', 'description', 'image.png'),
		'M2CG' => array('M2 Carl Gustav AT', 'description', 'image.png'),
		'M136' => array('M136 AT4', 'description', 'image.png'),
		'DEFIB' => array('Automated External Defibrillator', 'description', 'image.png'),
		'DTN-4' => array('C4 Explosive', 'description', 'image.png'),
		'MRTR-5' => array('Mortar Strike', 'description', 'image.png'),
		'HG-2' => array('Hand Grenade', 'description', 'image.png'),
		'TRCR-357' => array('Tracer Dart Gun', 'description', 'image.png'),
	),

/**
 * Map: name, description, image
 */
	'maps' => array(
		//Map Image Path
		'image_path' => 'http://battlelog-cdn.battlefield.com/cdnprefix/98ed2fe-3/public/base/bf3/map_images/146x79/',
		
		//Stock
		'Levels/MP_009' => array('Laguna Presa', 'description', 'laguna_presa.jpg'),
		'Levels/MP_012' => array('Port Valdez', 'description', 'port_valdez.jpg'),

		//Conquest Levels
		'Levels/MP_001' => array('Panama Canal (Conquest)', 'description', 'panama_canal.jpg'),
		'Levels/MP_003' => array('Laguna Alta (Conquest)', 'description', 'laguna_alta.jpg'),
		'Levels/MP_005' => array('Atacama Desert (Conquest)', 'description', 'atacama_desert.jpg'),
		'Levels/MP_006CQ' => array('Arica Harbor (Conquest)', 'description', 'arica_harbor.jpg'),
		'Levels/MP_007' => array('White Pass (Conquest)', 'description', 'white_pass.jpg'),
		'Levels/MP_008CQ' => array('Nelson Bay (Conquest)', 'description', 'nelson_bay.jpg'),
		'Levels/MP_009CQ' => array('Laguna Preza (Conquest)', 'description', 'laguna_presa.jpg'),
		'Levels/MP_012CQ' => array('Port Valdez (Conquest)', 'description', 'port_valdez.jpg'),
		'Levels/BC1_Oasis_CQ' => array('Oasis (Conquest)', 'description', 'oasis.jpg'),
		'Levels/BC1_Harvest_Day_CQ' => array('Harvest Day (Conquest)', 'description', 'harvest_day.jpg'),
		'Levels/MP_SP_005CQ' => array('Heavy Metal (Conquest)', 'description', 'heavy_metal.jpg'),

		//Rush Levels
		'Levels/MP_002' => array('Valparaiso (Rush)', 'description', 'valpara__so.jpg'),
		'Levels/MP_004' => array('Isla Inocentes (Rush)', 'description', 'isla_inocentes.jpg'),
		'Levels/MP_005GR' => array('Atacama Desert (Rush)', 'description', 'atacama_desert.jpg'),
		'Levels/MP_006' => array('Arica Harbor (Rush)', 'description', 'arica_harbor.jpg'),
		'Levels/MP_007GR' => array('White Pass (Rush)', 'description', 'white_pass.jpg'),
		'Levels/MP_008' => array('Nelson Bay (Rush)', 'description', 'nelson_bay.jpg'),
		'Levels/MP_009GR' => array('Laguna Preza (Rush)', 'description', 'laguna_presa.jpg'),
		'Levels/MP_012GR' => array('Port Valdez (Rush)', 'description', 'port_valdez.jpg'),
		'Levels/BC1_Oasis_GR' => array('Oasis (Rush)', 'description', 'oasis.jpg'),
		'Levels/BC1_Harvest_Day_GR' => array('Harvest Day (Rush)', 'description', 'harvest_day.jpg'),
		'Levels/MP_SP_002GR' => array('Cold War (Rush)', 'description', 'cold_war.jpg'),

		//Squadrush Levels
		'Levels/MP_001SR' => array('Panama Canal (Squadrush)', 'description', 'panama_canal.jpg'),
		'Levels/MP_002SR' => array('Valparaiso (Squadrush)', 'description', 'valpara__so.jpg'),
		'Levels/MP_003SR' => array('Laguna Alta (Squadrush)', 'description', 'laguna_alta.jpg'),
		'Levels/MP_005SR' => array('Atacama Desert (Squadrush)', 'description', 'atacama_desert.jpg'),
		'Levels/MP_009SR' => array('Laguna Presa (Squadrush)', 'description', 'laguna_presa.jpg'),
		'Levels/MP_012SR' => array('Port Valdez (Squadrush)', 'description', 'port_valdez.jpg'),
		'Levels/BC1_Oasis_SR' => array('Oasis (Squadrush)', 'description', 'oasis.jpg'),
		'Levels/BC1_Harvest_Day_SR' => array('Harvest Day (Squadrush)', 'description', 'harvest_day.jpg'),
		'Levels/MP_SP_002SR' => array('Cold War (Squadrush)', 'description', 'cold_war.jpg'),

		//Squad Deathmatch
		'Levels/MP_001SDM' => array('Panama Canal (Squad DM)', 'description', 'panama_canal.jpg'),
		'Levels/MP_004SDM' => array('Isla Inocentes (Squad DM)', 'description', 'isla_inocentes.jpg'),
		'Levels/MP_006SDM' => array('Arica Harbor (Squad DM)', 'description', 'arica_harbor.jpg'),
		'Levels/MP_007SDM' => array('White Pass (Squad DM)', 'description', 'white_pass.jpg'),
		'Levels/MP_008SDM' => array('Nelson Bay (Squad DM)', 'description', 'nelson_bay.jpg'),
		'Levels/MP_009SDM' => array('Laguna Preza (Squad DM)', 'description', 'laguna_presa.jpg'),
		'Levels/BC1_Oasis_SDM' => array('Oasis (Squad DM)', 'description', 'oasis.jpg'),
		'Levels/BC1_Harvest_Day_SDM' => array('Harvest Day (Squad DM)', 'description', 'harvest_day.jpg'),
		'Levels/MP_SP_002SDM' => array('Cold War (Squad DM)', 'description', 'cold_war.jpg'),
		'Levels/MP_SP_005SDM' => array('Heavy Metal (Squad DM)', 'description', 'heavy_metal.jpg'),

    	'None' => array('-Unknown-', 'description', 'image.jpg'),
    ),

//*********************
// Event names
//*********************
//$e['' => array('';


/**
 * Bodypart names
 */
	'body_parts' => array(
		/**
		 * fixed_name => array ('console_name' => 'Easy Name')
		 * DO NOT CHANGE 'fixed_name's
		 */
		'body' => array('torso' => 'Body'),
	),

);
