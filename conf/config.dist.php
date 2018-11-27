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
  'factor'  => array(
    'name'                       => "Factor",
    'url'                        => "https://factor.cc/pad",
    'default_text'               => "Welcome to factor.cc Pad!",
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
// CUSTOM_PROVIDER$providers += array(
// CUSTOM_PROVIDER  '__PROVIDER__'  => array(
// CUSTOM_PROVIDER    'name'                       => "__PROVIDER__",
// CUSTOM_PROVIDER    'url'                        => "__INSTANCE__",
// CUSTOM_PROVIDER    'default_text'               => "Get involved with Etherpad at http://etherpad.org",
// CUSTOM_PROVIDER    'markdown'                   => true,
// CUSTOM_PROVIDER    'html'                       => true,
// CUSTOM_PROVIDER  ),
// CUSTOM_PROVIDER);

$options = array(
  'name'                            => "Libreto",
  'default_provider'                => "__PROVIDER__",
  'providers'                       => $providers,
);
