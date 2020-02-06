<?php
// Copyright (C) 2010-2018 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'itop-ocsng-virtualization/1.0.0',
	array(
		// Identification
		//
		'label' => 'OCS Inventory Integration for virtual machine',
		'category' => 'inventory',

		// Setup
		//
		'dependencies' => array(
			'itop-virtualization-mgmt/2.0.0',
		),
		'mandatory' => false,
		'visible' => false,
		'auto_select' => 'SetupInfo::ModuleIsSelected("itop-virtualization-mgmt")',
		
		// Components
		//
		'datamodel' => array(

		),
		'webservice' => array(

		),
		'dictionary' => array(
		),
		'data.struct' => array(
			//'data.struct.xml',
		),
		'data.sample' => array(
			//'data.sample.xml',
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
		),
	)
);

