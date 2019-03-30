
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here

	'Class:DBCluster' => 'DB Cluster',
	'Class:DBCluster+' => '',
	'Class:DBCluster/Attribute:dbnode_list' => 'DB Nodes',
	'Class:DBCluster/Attribute:dbnode_list+' => '',
	'Class:DBCluster/Attribute:dbschema_list' => 'Database Schemas',
	'Class:DBCluster/Attribute:dbschema_list+' => '',
	'Class:DBCluster/Attribute:volume_list' => 'Logical Volumes',	
	'Class:DBCluster/Attribute:volume_list+' => '',	
	'Class:DBCluster/Attribute:cluster_type' => 'Cluster Type',	
	'Class:DBCluster/Attribute:cluster_type+' => '',	

	'Class:DBServer/Attribute:dbcluster_list' => 'DB Clusters',
	'Class:DBServer/Attribute:dbcluster_list+' => '',
	'Class:DBServer/Attribute:dbcluster_id' => 'DB Cluster',
	'Class:DBServer/Attribute:dbcluster_id+' => '',

	'Class:DatabaseSchema/Attribute:dbcluster_id' => 'Database Cluster',
	'Class:DatabaseSchema/Attribute:dbcluster_id+' => '',
	'Class:DatabaseSchema/Attribute:webapplications_list' => 'Web Applications',
	'Class:DatabaseSchema/Attribute:webapplications_list+' => '',
    'Class:DatabaseSchema/Attribute:softwareinstance_id' => 'Database Server',
    'Class:DatabaseSchema/Attribute:softwareinstance_id+' => '',
    'Class:DatabaseSchema' => 'Database Schema',
    'Class:DatabaseSchema+' => '',

	'Class:WebServer/Attribute:webcluster_list' => 'Web Clusters',
	'Class:WebServer/Attribute:webcluster_list+' => '',
	'Class:WebServer/Attribute:webcluster_id' => 'Web Cluster',
	'Class:WebServer/Attribute:webcluster_id+' => '',

	'Class:WebCluster' => 'Web Cluster',
	'Class:WebCluster+' => '',
	'Class:WebCluster/Attribute:webnode_list' => 'Web Nodes',
	'Class:WebCluster/Attribute:webnode_list+' => '',
	'Class:WebCluster/Attribute:webapp_list' => 'Web Applications',
	'Class:WebCluster/Attribute:webapp_list+' => '',

	'Class:WebApplication/Attribute:dbschema_list' => 'Database Schemas',
	'Class:WebApplication/Attribute:dbschema_list+' => '',
    'Class:WebApplication/Attribute:softwareinstance_id' => 'Web Server',
    'Class:WebApplication/Attribute:softwareinstance_id+' => '',

	'Class:LoadBalancer' => 'Load Balancer',
	'Class:LoadBalancer+' => '',
	'Class:LoadBalancer/Attribute:lbnodes_list' => 'LB Nodes',
	'Class:LoadBalancer/Attribute:lbnodes_list+' => '',

	'Class:lnkDBServerToDBCluster' => 'Link DB Server / DB Cluster',
	'Class:lnkDBServerToDBCluster+' => '',

	'Class:lnkWebServerToWebCluster' => 'Link Web Server / Web Cluster',
	'Class:lnkWebServerToWebCluster+' => '',

	'Class:lnkLoadBalancertToFunctionalCI' => 'Link Load Balancer / Functional CI',
	'Class:lnkLoadBalancertToFunctionalCI+' => '',

	'Class:lnkDBClusterToSoftwareInstance/Attribute:dbcluster_id' => 'DB cluster',
    'Class:lnkDBClusterToSoftwareInstance/Attribute:dbcluster_id+' => '',
	'Class:lnkDBClusterToSoftwareInstance/Attribute:softwareinstance_id' => 'DB server',
    'Class:lnkDBClusterToSoftwareInstance/Attribute:softwareinstance_id+' => '',

	'Class:lnkWebClusterToSoftwareInstance/Attribute:webcluster_id' => 'Web cluster',
    'Class:lnkWebClusterToSoftwareInstance/Attribute:webcluster_id+' => '',
	'Class:lnkWebClusterToSoftwareInstance/Attribute:softwareinstance_id' => 'Web server',
    'Class:lnkWebClusterToSoftwareInstance/Attribute:softwareinstance_id+' => '',

    'Class:Software/Attribute:type/Value:DBCluster' => 'DB Cluster',
    'Class:Software/Attribute:type/Value:DBCluster+' => 'DB Cluster',
    'Class:Software/Attribute:type/Value:WebCluster' => 'Web Cluster',
    'Class:Software/Attribute:type/Value:WebCluster+' => 'Web Cluster',
    'Class:Software/Attribute:type/Value:LoadBalancer' => 'Load Balancer',
    'Class:Software/Attribute:type/Value:LoadBalancer+' => 'Load Balancer',
));
?>
