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
		//Weapons Image Path
		'image_path' => 'http://battlefieldbadass.com/media/files/gameinfo/',
		
		//Assault
		'AEK971' => array('AEK-971 Vintovka', 'description', '__weap_assault_aek971_png_270x270_q85.png'),
		'XM8' => array('XM8 Prototype', 'description', '__weap_assault_xm8_png_270x270_q85.png'),
		'F2000' => array('F2000 Assault', 'description', '__weap_assault_f2000_png_270x270_q85.png'),
		'AUG' => array('Stg.77 AUG', 'description', '__weap_assault_aug_png_270x270_q85.png'),
		'AN94' => array('AN-94 Abakan', 'description', '__weap_assault_an94_png_270x270_q85.png'),
		'M416' => array('M416', 'description', '__weap_assault_m416_png_270x270_q85.png'),
		'M16' => array('M16A2', 'description', '__weap_assault_m16_png_270x270_q85.png'),
		'M16K' => array('M162A - SPECTACT', 'description', '__weap_assault_m16_png_270x270_q85.png'),

		//Engineer
		'9A91' => array('9A-91 Avtomat', 'description', '__weap_engineer_9a91_png_270x270_q85.png'),
		'SCAR' => array('SCAR-L Carbine', 'description', '__weap_engineer_scar_png_270x270_q85.png'),
		'XM8C' => array('XM8 Compact', 'description', '__weap_engineer_xm8c_png_270x270_q85.png'),
		'AKS74u' => array('AKS-74U Krinkov', 'description', '__weap_engineer_aks74u_png_270x270_q85.png'),
		'UZI' => array('UZI', 'description', '__weap_engineer_uzi_png_270x270_q85.png'),
		'PP2000' => array('PP-2000 Avtomat', 'description', '__weap_engineer_pp2000_png_270x270_q85.png'),
		'UMP' => array('UMP-45', 'description', '__weap_engineer_ump45_png_270x270_q85.png'),
		'UMPK' => array('UMP - SPECTACT', 'description', '__weap_engineer_ump45_png_270x270_q85.png'),

		//Medic
		'PKM' => array('PKM LMG', 'description', '__weap_medic_pkm_png_270x270_q85.png'),
		'M249' => array('M249 Saw', 'description', '__weap_medic_m249_png_270x270_q85.png'),
		'QJU88' => array('Type 88 LMG', 'description', '__weap_medic_gjy88_png_270x270_q85.png'),
		'M60' => array('M60 LMG', 'description', '__weap_medic_m60_png_270x270_q85.png'),
		'XM8 LMG' => array('XM8 LMG', 'description', '__weap_medic_xm8lmg_png_270x270_q85.png'),
		'MG36' => array('MG36', 'description', '__weap_medic_mg36_png_270x270_q85.png'),
		'MG3' => array('MG3', 'description', '__weap_medic_mg3_png_270x270_q85.png'),
		'MG3K' => array('MG3 - SPECTACT', 'description', '__weap_medic_mg3_png_270x270_q85.png'),

		//Recon
		'M24' => array('M24 Sniper', 'description', '__weap_recon_m24_png_270x270_q85.png'),
		'QBU88' => array('Type 88 Sniper', 'description', '__weap_recon_qby88_png_270x270_q85.png'),
		'SV98' => array('SV98 Snaiperskaya', 'description', '__weap_recon_sv98_png_270x270_q85.png'),
		'SVU' => array('SVU Snaiperskaya Short', 'description', '__weap_recon_svu_png_270x270_q85.png'),
		'GOL' => array('GOL Sniper Magnum', 'description', '__weap_recon_gol_png_270x270_q85.png'),
		'VSS' => array('VSS Snaiperskaya Special', 'description', '__weap_recon_vss_png_270x270_q85.png'),
		'M95' => array('M95 Sniper', 'description', '__weap_recon_m95_png_270x270_q85.png'),
		'M95K' => array('M95 - SPECTACT', 'description', '__weap_recon_m95_png_270x270_q85.png'),

		//Other Kits
		'870MCS' => array('870 Combat', 'description', '__weap_all_870mcs_png_270x270_q85.png'),
		'S20K' => array('Saiga 20k Semi', 'description', '__weap_all_s20k_png_270x270_q85.png'),
		'M1A1 Thompson' => array('WWII M1A1 Thompson', 'description', '__weap_all_m1a1_png_270x270_q85.png'),
		'SPAS12' => array('SPAS-12 Combat', 'description', '__weap_all_spas12_png_270x270_q85.png'),
		'Mk14EBR' => array('M14 Mod 0 Enhanced', 'description', '__weap_all_m14_png_270x270_q85.png'),
		'NS2000' => array('NEOSTEAD 2000 Combat', 'description', '__weap_all_ns2000_png_270x270_q85.png'),
		'usas12' => array('USAS-12 Auto', 'description', '__weap_all_usas12_png_270x270_q85.png'),
		'G3' => array('G3', 'description', '__weap_all_g3_png_270x270_q85.png'),
		'Garand' => array('M1 Garand', 'description', '__weap_all_m1_png_270x270_q85.png'),

		//Sidearms
		'M9' => array('M9 Pistol', 'description', '__weap_all_m9_png_270x270_q85.png'),
		'MP443' => array('MP-443 Grach', 'description', '__weap_all_mp443_png_270x270_q85.png'),
		'M1911' => array('WWII M1911 .45', 'description', '__weap_all_m1911_png_270x270_q85.png'),
		'MP412' => array('MP-412 Rex', 'description', '__weap_all_mp412_png_270x270_q85.png'),
		'M9-3' => array('M93R Burst', 'description', '__weap_all_m93r_png_270x270_q85.png'),

		//*********************
		// Vehicle names
		//*********************

		//Light
		'HUMV#Gun' => array('HMMWV 4WD', 'description', '__vehicle_humv_png_270x270_q85.png'),
		'VODN#KORD' => array('VODNIK 4WD', 'description', '__vehicle_vodn_png_270x270_q85.png'),
		'COBR#Kord' => array('COBRA 4WD', 'description', '__vehicle_cobr_png_270x270_q85.png'),

		//Heavy
		'M1A2#Maingun' => array('M1A2 Abrams (Main Gun)', 'description', '__vehicle_m1a2_png_270x270_q85.png'),
		'M1A2#CoaxMG' => array('M1A2 Abrams (Coax MG)', 'description', '__vehicle_m1a2_png_270x270_q85.png'),
		'M1A2#RemoteGun' => array('M1A2 Abrams (Remote Gun)', 'description', '__vehicle_m1a2_png_270x270_q85.png'),

		'T90R#MainGun' => array('T-90 MBT (Main Gun)', 'description', '__vehicle_t90r_png_270x270_q85.png'),
		'T90R#CoaxMG' => array('T-90 MBT (Coax MG)', 'description', '__vehicle_t90r_png_270x270_q85.png'),
		'T90R#RemoteGun' => array('T-90 MBT (Remote Gun)', 'description', '__vehicle_t90r_png_270x270_q85.png'),

		'M3A3#IFVAutoCannon' => array('M3A3 Bradley (Auto Cannon)', 'description', '__vehicle_m3a3_png_270x270_q85.png'),
		'M3A3#TOW' => array('M3A3 Bradley (Tow)', 'description', '__vehicle_m3a3_png_270x270_q85.png'),
		'M3A3#RemoteMG' => array('M3A3 Bradley (Remote MG)', 'description', '__vehicle_m3a3_png_270x270_q85.png'),
		'M3A3#PFW RearLeft' => array('M3A3 Bradley (Rear Left Gun)', 'description', '__vehicle_m3a3_png_270x270_q85.png'),
		'M3A3#PFW RearRight' => array('M3A3 Bradley (Rear Right Gun)', 'description', '__vehicle_m3a3_png_270x270_q85.png'),

		'BMD3#IFVAutoCannon' => array('BMD-3 Bakhcha (Auto Cannon)', 'description', '__vehicle_bmd3_png_270x270_q85.png'),
		'BMD3#TOW' => array('BMD-3 Bakhcha (Tow)', 'description', '__vehicle_bmd3_png_270x270_q85.png'),
		'BMD3#RemoteMG' => array('BMD-3 Bakhcha (Remote MG)', 'description', '__vehicle_bmd3_png_270x270_q85.png'),
		'BMDA#Cannon' => array('BMD-3 Bakhcha (Cannon)', 'description', '__vehicle_bmd3_png_270x270_q85.png'),
		'BMD3#PFW RearRight' => array('BMD-3 Bakhcha (Rear Right Gun)', 'description', '__vehicle_bmd3_png_270x270_q85.png'),
		'BMD3#PFW RearLeft' => array('BMD-3 Bakhcha(Rear Left Gun)', 'description', '__vehicle_bmd3_png_270x270_q85.png'),

		'BMDA#GMG' => array('BMD-3 Bakhcha AA', 'description', '__vehicle_bmd3aa_png_270x270_q85.png'),

		//Water
		'PBLB#GMG' => array('Patrol Boat', 'description', '__vehicle_pblb_png_270x270_q85.png'),

		//Air
		'AH60#Minigun Left' => array('UH-60 Transport (Mini Gun Left)', 'description', '__vehicle_ah60_png_270x270_q85.png'),
		'AH60#Minigun Right' => array('UH-60 Transport (Mini Gun Right)', 'description', '__vehicle_ah60_png_270x270_q85.png'),

		'AH64#Heli AutoCannon' => array('AH-64 Apache (Auto Cannon)', 'description', '__vehicle_ah64_png_270x270_q85.png'),
		'AH64#RocketPod Right' => array('AH-64 Apache (Rocket Pod Right)', 'description', '__vehicle_ah64_png_270x270_q85.png'),
		'AH64#RocketPod Left' => array('AH-64 Apache (Rocket Pod Left)', 'description', '__vehicle_ah64_png_270x270_q85.png'),
		'AH64#TOW' => array('AH-64 Apache (Tow)', 'description', '__vehicle_ah64_png_270x270_q85.png'),

		'MI28#GunnerCannnon' => array('MI-28 Havoc (Gunner Cannon)', 'description', '__vehicle_mi28_png_270x270_q85.png'),
		'MI28#DumbFireRocket Port' => array('MI-28 Havoc (Rocket)', 'description', '__vehicle_mi28_png_270x270_q85.png'),
		'MI28#DumbFireRocket Starboard' => array('MI-28 Havoc (Starboard)', 'description', '__vehicle_mi28_png_270x270_q85.png'),
		'MI28#TOW' => array('MI-28 Havoc (Tow)', 'description', '__vehicle_mi28_png_270x270_q85.png'),

		'MI24#GunnerCannon' => array('MI-24 Hind', 'description', '__vehicle_mi24_png_270x270_q85.png'),

		'UAV1#MG' => array('UAV (MG)', 'description', '__vehicle_uav1_png_270x270_q85.png'),
		'UAV1#Bomb' => array('UAV (Bomb)', 'description', '__vehicle_uav1_png_270x270_q85.png'),

		//Stationary
		'X312#Gun' => array('Heavy MG X312', 'description', '__vehicle_x312_png_270x270_q85.png'),
		'KORD#Gun' => array('Heavy MG KORD', 'description', '__vehicle_kord_png_270x270_q85.png'),
		'KORN#Missile Launcher' => array('Stationary AT KORN', 'description', '__vehicle_korn_png_270x270_q85.png'),
		'TOW2#Launcher' => array('Stationary AT TOW2', 'description', '__vehicle_tow2_png_270x270_q85.png'),
		'ZU23#Cannons' => array('Anti-Air Gun', 'description', 'image.png'),
		'VADS#AutoCannon' => array('VADS Auto Cannon', 'description', 'image.png'),
		'CAVJ#XM-307' => array('XM307 ACSW', 'description', 'image.png'),

		//*********************
		// Other Weapon Names
		//*********************
		'KNV-1' => array('Knife', 'description', '__gadg_all_knife_png_270x270_q85.png'),
		'RoadKill' => array('Road Kill', 'description', '__vehicle_quad_png_270x270_q85.png'),
		'D2.0' => array('Demolition', 'description', 'image.png'),
		'[]' => array('notidentify', 'description', 'image.png'),
		'1' => array('notidentify', 'description', 'image.png'),
		' ' => array('notidentify', 'description', 'image.png'),

		//*********************
		// Perk Names
		//*********************
		'40mmgl' => array('40mm Grenade Launcher', 'description', '__gadg_assault_gl40mm_png_270x270_q85.png'),
		'40mmsg' => array('40mm Shot Gun', 'description', '__gadg_assault_smk40mm_png_270x270_q85.png'),
		'40mmsmk' => array('40mm Smoke Launcher', 'description', '__gadg_assault_sg40mm_png_270x270_q85.png'),
		'RPG7' => array('RPG7', 'description', '__gadg_engineer_rpg7_png_270x270_q85.png'),
		'PWR-700' => array('Repair Tool', 'description', '__gadg_engineer_powertool_png_270x270_q85.png'),
		'ATM-00' => array('Anti-Tank Mine', 'description', '__gadg_engineer_atmine_png_270x270_q85.png'),
		'M2CG' => array('M2 Carl Gustav AT', 'description', '__gadg_engineer_carlgustaf_png_270x270_q85.png'),
		'M136' => array('M136 AT4', 'description', '__gadg_engineer_m136_png_270x270_q85.png'),
		'DEFIB' => array('Automated External Defibrillator', 'description', '__gadg_medic_defib_png_270x270_q85.png'),
		'DTN-4' => array('C4 Explosive', 'description', '__gadg_assault_c4_png_270x270_q85.png'),
		'MRTR-5' => array('Mortar Strike', 'description', '__gadg_recon_mortarstrike_png_270x270_q85.png'),
		'HG-2' => array('Hand Grenade', 'description', '__gadg_all_grenade_png_270x270_q85.png'),
		'TRCR-357' => array('Tracer Dart Gun', 'description', '__weap_all_trcr4_png_270x270_q85.png'),
	),

/**
 * Map: name, description, image
 */
	'maps' => array(
		//Map Image Path
		'image_path' => 'http://image.www.gametracker.com/images/maps/160x120/bc2/',
		
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