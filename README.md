osCommerce Market (Website)
===========================

This repository contains the development of the new osCommerce Market website
powered by the osCommerce Online Merchant v3.0 framework.

Our website is not a general purpose solution for users to use as their
website - it is custom and tailored to run the main osCommerce website. The
frontend design is licensed and some graphics will not be available on Github.
No installation routine is present however setup instructions are available for
those interested in helping out.

The initial code is to propose a mock design for the new Market (Add-Ons) site.

Installation
------------

Follow the instructions at and install haraldpdl/oscommerce_website first.

    https://github.com/haraldpdl/oscommerce_website

Copy this repository:

    git clone https://github.com/haraldpdl/website_market.git

The following directory structure is now in place:

* oscommerce - osCommerce Online Merchant v3.0
* oscommerce_website - osCommerce Website
* website_market - osCommerce Market Website

Symlink the following directories from "website_market" to "oscommerce":

    cd oscommerce/osCommerce/OM/Custom/Site
    ln -s ../../../../../website_market/osCommerce/OM/Custom/Site/Market Market
    cd ../../../../public/sites
    ln -s ../../../website_market/public/sites/Market Market

A configuration block is also required in osCommerce/OM/Config/settings.ini,
which can be copied from an existing block:

    [Market]
    enable_ssl = "false"
    http_server = "http://your-server"
    https_server = "http://your-server"
    http_cookie_domain = ""
    https_cookie_domain = ""
    http_cookie_path = "/oscommerce/"
    https_cookie_path = "/oscommerce/"
    dir_ws_http_server = "/oscommerce/"
    dir_ws_https_server = "/oscommerce/"
    db_server = "localhost"
    db_server_username = "nobody"
    db_server_password = ""
    db_server_port = ""
    db_database = "oscommerce"
    db_driver = "MySQL\V5"
    db_table_prefix = "osc_"
    db_server_persistent_connections = "false"
    store_sessions = "Database"
    community_api_key = ""
    community_api_module = ""
    community_api_address = ""
    cron_key = ""

The website can then be accessed with the following URL:

    http://your-server/oscommerce/index.php?Market

Feedback
---------

Please review the following forum topic for discussions on the template engine
functionality.

http://forums.oscommerce.com/topic/383392-template-engine-functionality-proposal/

Discussions for our new website platform are held in:

http://forums.oscommerce.com/forum/89-website-platform/

Note
----

Although the source code to new osCommerce website is available, it will
obviously not be packaged together with osCommerce Online Merchant v3.0.

Making the source code available serves to showcase the capabilities of the
framework, to migrate the Add-Ons and Live Shops sites to the new platform,
to create new Documentation and Translations Sites, and to kickstart the
initiative of a general purpose CMS Site that can be packaged with
osCommerce Online Merchant v3.0.
