<?php
$attr = array(
  xPDOTransport::UNIQUE_KEY => 'category',
  xPDOTransport::PRESERVE_KEYS => false,
  xPDOTransport::UPDATE_OBJECT => true,
  xPDOTransport::RELATED_OBJECTS => true,
  xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
    'Snippets' => array(
        xPDOTransport::PRESERVE_KEYS => false,
        xPDOTransport::UPDATE_OBJECT => true,
        xPDOTransport::UNIQUE_KEY => 'name',
    ),
    'Chunks' => array(
      xPDOTransport::PRESERVE_KEYS => false,
      xPDOTransport::UPDATE_OBJECT => true,
      xPDOTransport::UNIQUE_KEY => 'name',
    ),
    'Plugins' => array(
      xPDOTransport::PRESERVE_KEYS => false,
      xPDOTransport::UPDATE_OBJECT => true,
      xPDOTransport::UNIQUE_KEY => 'name',
      xPDOTransport::RELATED_OBJECTS => true,
      xPDOTransport::RELATED_OBJECT_ATTRIBUTES => array (
        'PluginEvents' => array(
          xPDOTransport::PRESERVE_KEYS => true,
          xPDOTransport::UPDATE_OBJECT => false,
          xPDOTransport::UNIQUE_KEY => array('pluginid','event'),
        ),
      ),
    ),
  )
);