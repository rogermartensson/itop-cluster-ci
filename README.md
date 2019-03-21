# itop-cluster-ci

Extensions for Combodo's ITIL Solution:   iTop (http://www.combodo.com/itop)

This extension began it's life when lndevnull created it and then I have extended and changed portions. Very good work indeed lndevnull.
See the excellent original work at https://github.com/lndevnull/itop-extensions.

This extension implements some new cluster related classes and extends some of the installed classes.

## New and Extended classes
These new Classes are visible and useable from the iTop web interface.

* DBCluster (new)
* WebCluster (new)
* DBServer (extended)
* WebServer (extended)
* Database Schema (extended)
* Web Application

### DBServer / DBCluster / Database Schema
DBServer and DBCluster comes from the original work.

The DBCluster also has a new Software definition for use in the Software catalogue.

The original extension renamed Database Schema to DB Instance but I have reverted this and kept the original definition from iTop.

#### DBServer
DBServer is the extened with a new Tab called DB Clusters where clusters the DBServer is part of is listed.

#### DBCluster
DBCluster is a new class that is supposed to define an installed cluster. In iTop this object is defined to connect 1 or more DBServers as part of a cluster.

The DBCluster is based on the SoftwareInstance interface like the DBServer. Although with some extensions.

The is a Tab where DBServers are listed as being part of the DBCluster object.
The Software entry can be used to describe what Cluster software is used but if needed.

Cluster Type is used to define what type of cluster it is. It is a radio button choice.

From the original work of lndevnull there is a tab to describe Logical Volumes this cluster object is using.

#### Database Schema
Database Schema is extened with support for choosing a DBCluster or a DBServer.

### WebServer / WebCluster / Web Application
The WebCluster also has a new Software definition for use in the Software catalogue.

#### WebServer
WebServer is the extened with a new Tab called Web Clusters where clusters the WebServer is part of is listed.

#### WebCluster
WebCluster is a new class that is supposed to define an installed cluster. In iTop this object is defined to connect 1 or more WebServers as part of a cluster.

The DBCluster is based on the SoftwareInstance interface like the WebServer. Although with some extensions.

The is a Tab where WebServers are listed as being part of the WebCluster object.
The Software entry can be used to describe what Cluster software is used but if needed.

Cluster Type is used to define what type of cluster it is. It is a radio button choice.

#### Web Application
Web Applicaton is extened with support for choosing a WebCluster or a DBServer.

Also from the original work from lndevnull, there is a tab for adding Database Schemas.