# Apache Solr OneSearch

This module provides OU Libraries OneSearch customizations and config for Drupal [Apache Solr Search](https://www.drupal.org/project/apachesolr). 

It includes:
* the OneSearch discover block 
* Customizations to Solr indexing

and should be installed on Drupal sites that need to use the block or feed content into the OneSearch Solr index. 

## For Fresh Installs and Dev

### Enable the module 
Enable the module with `drush en -y apachesolr_onesearch`. Dependencies should be auto-enabled (and they're already in your make file, right?)

### Configure the Discover block
Configure the One Search Discover block at `admin/config/search/onesearch_search`. Right now, this just needs to point to the URL of a copy of the OneSearch site


### Configure Drupal to feed content to Solr 

Configure a Solr server at at `/admin/config/search/apachesolr/settings`

*  Configure Solr server url. Include credentials in solr server uri, use `https`, don't specify an alternate port.  
*  Check box for "multisite capable"

Configure what content types to index at `/admin/config/search/apachesolr`. Make sure to select "user" as a thing to index.


### (Re)Build a Solr index

The easiest way to get a site's work of content into Solr is with Drush. 

```
drush solr-mark-all
drush solr-index
```

To create index site content
