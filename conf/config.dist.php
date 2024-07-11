<?php
$providers = array(
  'framapad'  => array(
    'name'                       => "Framapad",
    'url'                        => "https://annuel2.framapad.org",
    'default_text'               => "–––––",
    'markdown'                   => true,
    'html'                       => true,
  ),
  'board'  => array(
    'name'                       => "Board",
    'url'                        => "https://board.net",
    'default_text'               => "--",
    'markdown'                   => true,
    'html'                       => true,
  ),
  'wikimedia'  => array(
    'name'                       => "Wikimedia",
    'url'                        => "https://etherpad.wikimedia.org",
    'default_text'               => "Welcome to WMF etherpad installation.",
    'markdown'                   => false,
    'html'                       => true,
  ),
  'allmende'  => array(
    'name'                       => "Allmende",
    'url'                        => "https://text.allmende.io",
    'default_text'               => "",
    'markdown'                   => false,
    'html'                       => true,
  ),
  'etherpad'  => array(
    'name'                       => "Etherpad.net",
    'url'                        => "https://etherpad.net",
    'default_text'               => "Welcome to etherpad.net Pad!",
    'markdown'                   => false,
    'html'                       => true,
  ),
  'lqdn'  => array(
    'name'                       => "La Quadrature du Net",
    'url'                        => "https://pad.lqdn.fr",
    'default_text'               => "Welcome to Etherpad!",
    'markdown'                   => false,
    'html'                       => true,
  ),
);
__COMMENTED_PROVIDER__$providers += array(
__COMMENTED_PROVIDER__  '__PROVIDER__'  => array(
__COMMENTED_PROVIDER__    'name'                       => "__PROVIDER__",
__COMMENTED_PROVIDER__    'url'                        => "__ETHERPAD_INSTANCE__",
__COMMENTED_PROVIDER__    'default_text'               => "Get involved with Etherpad at http://etherpad.org",
__COMMENTED_PROVIDER__    'markdown'                   => true,
__COMMENTED_PROVIDER__    'html'                       => true,
__COMMENTED_PROVIDER__  ),
__COMMENTED_PROVIDER__);

$options = array(
  'name'                            => "Libreto",
  'root'                            => '__PATH__',
  'use_subdomain'                   => false,
  'default_provider'                => "__DEFAULT_PROVIDER__",
  'providers'                       => $providers,
);
