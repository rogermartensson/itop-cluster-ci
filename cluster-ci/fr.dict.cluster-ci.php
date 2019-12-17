
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 2020
 * @license     http://opensource.org/licenses/AGPL-3.0
 * @author		Guillaume Lajarige <lajarige.guillaume@free.fr>
 */

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Class:DBCluster' => 'Cluster de BDD',
	'Class:DBCluster+' => '',
	'Class:DBCluster/Attribute:dbnode_list' => 'Noeuds de BDD',
	'Class:DBCluster/Attribute:dbnode_list+' => '',
	'Class:DBCluster/Attribute:dbschema_list' => 'Schémas de base de données',
	'Class:DBCluster/Attribute:dbschema_list+' => '',
	'Class:DBCluster/Attribute:volume_list' => 'Volumes logiques',	
	'Class:DBCluster/Attribute:volume_list+' => '',	
	'Class:DBCluster/Attribute:cluster_type' => 'Type de cluster',	
	'Class:DBCluster/Attribute:cluster_type+' => '',	

	'Class:DBServer/Attribute:dbcluster_list' => 'Clusters de BDD',
	'Class:DBServer/Attribute:dbcluster_list+' => '',
	'Class:DBServer/Attribute:dbcluster_id' => 'Cluster de BDD',
	'Class:DBServer/Attribute:dbcluster_id+' => '',

	'Class:DatabaseSchema/Attribute:dbcluster_id' => 'Cluster de BDD',
	'Class:DatabaseSchema/Attribute:dbcluster_id+' => '',
	'Class:DatabaseSchema/Attribute:webapplications_list' => 'Applications Web',
	'Class:DatabaseSchema/Attribute:webapplications_list+' => '',
    'Class:DatabaseSchema/Attribute:softwareinstance_id' => 'Serveur de base de données',
    'Class:DatabaseSchema/Attribute:softwareinstance_id+' => '',
    'Class:DatabaseSchema' => 'Schéma de base de données',
    'Class:DatabaseSchema+' => '',

	'Class:WebServer/Attribute:webcluster_list' => 'Clusters Web',
	'Class:WebServer/Attribute:webcluster_list+' => '',
	'Class:WebServer/Attribute:webcluster_id' => 'Cluster Web',
	'Class:WebServer/Attribute:webcluster_id+' => '',

	'Class:WebCluster' => 'Cluster Web',
	'Class:WebCluster+' => '',
	'Class:WebCluster/Attribute:webnode_list' => 'Noeuds Web',
	'Class:WebCluster/Attribute:webnode_list+' => '',
	'Class:WebCluster/Attribute:webapp_list' => 'Applications Web',
	'Class:WebCluster/Attribute:webapp_list+' => '',

	'Class:WebApplication/Attribute:dbschema_list' => 'Schémas de bases de données',
	'Class:WebApplication/Attribute:dbschema_list+' => '',
    'Class:WebApplication/Attribute:softwareinstance_id' => 'Serveur Web',
    'Class:WebApplication/Attribute:softwareinstance_id+' => '',
    'Class:WebApplication/Attribute:lbaddress_id' => 'Adresse du LB',
    'Class:WebApplication/Attribute:lbaddress_id+' => '',

	'Class:LoadBalancer' => 'Load Balancer',
	'Class:LoadBalancer+' => '',
	'Class:LoadBalancer/Attribute:lbnodes_list' => 'Noeuds LB',
	'Class:LoadBalancer/Attribute:lbnodes_list+' => '',
	'Class:LoadBalancer/Attribute:lbaddresses_list' => 'Adresses de LB',
	'Class:LoadBalancer/Attribute:lbaddresses_list+' => '',

	'Class:LBAddress' => 'Adresse de LB',
	'Class:LBAddress+' => '',
	'Class:LBAddress/Attribute:loadbalancer_id' => 'Load Balancer',
	'Class:LBAddress/Attribute:loadbalancer_id+' => '',
	'Class:LBAddress/Attribute:webapp_list' => 'Applications Web',
	'Class:LBAddress/Attribute:webapp_list+' => '',

	'Class:lnkDBServerToDBCluster' => 'Lien serveur BDD / cluster BDD',
	'Class:lnkDBServerToDBCluster+' => '',

	'Class:lnkWebServerToWebCluster' => 'Lien serveur Web / cluster Web',
	'Class:lnkWebServerToWebCluster+' => '',

	'Class:lnkLoadBalancertToFunctionalCI' => 'Lien Load Balancer / CI fonctionnel',
	'Class:lnkLoadBalancertToFunctionalCI+' => '',

	'Class:lnkDBClusterToSoftwareInstance/Attribute:dbcluster_id' => 'Cluster de BDD',
    'Class:lnkDBClusterToSoftwareInstance/Attribute:dbcluster_id+' => '',
	'Class:lnkDBClusterToSoftwareInstance/Attribute:softwareinstance_id' => 'Serveur de BDD',
    'Class:lnkDBClusterToSoftwareInstance/Attribute:softwareinstance_id+' => '',

	'Class:lnkWebClusterToSoftwareInstance/Attribute:webcluster_id' => 'Cluster Web',
    'Class:lnkWebClusterToSoftwareInstance/Attribute:webcluster_id+' => '',
	'Class:lnkWebClusterToSoftwareInstance/Attribute:softwareinstance_id' => 'Serveur Web',
    'Class:lnkWebClusterToSoftwareInstance/Attribute:softwareinstance_id+' => '',

    'Class:Software/Attribute:type/Value:DBCluster' => 'Cluster BDD',
    'Class:Software/Attribute:type/Value:DBCluster+' => 'Cluster BDD',
    'Class:Software/Attribute:type/Value:WebCluster' => 'Cluster Web',
    'Class:Software/Attribute:type/Value:WebCluster+' => 'Cluster Web',
    'Class:Software/Attribute:type/Value:LoadBalancer' => 'Load Balancer',
    'Class:Software/Attribute:type/Value:LoadBalancer+' => 'Load Balancer',
));
