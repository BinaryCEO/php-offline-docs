<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SSL context options - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/context.ssl.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/context.ssl.php">
 <link rel="alternate" href="https://www.php.net/manual/en/context.ssl.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/context.php">
 <link rel="prev" href="https://www.php.net/manual/en/context.ftp.php">
 <link rel="next" href="https://www.php.net/manual/en/context.phar.php">

 <link rel="alternate" href="https://www.php.net/manual/en/context.ssl.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/context.ssl.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/context.ssl.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/context.ssl.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/context.ssl.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/context.ssl.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/context.ssl.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/context.ssl.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/context.ssl.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/context.ssl.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/context.ssl.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="SSL context option listing" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SSL context options - Manual" />
<meta name="twitter:description" content="SSL context option listing" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SSL context options - Manual" />
<meta itemprop="description" content="SSL context option listing" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="SSL context option listing" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="context.phar.php">
          Phar context options &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="context.ftp.php">
          &laquo; FTP context options        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='context.php'>Context options and parameters</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/context.ssl.php' selected="selected">English</option>
            <option value='de/context.ssl.php'>German</option>
            <option value='es/context.ssl.php'>Spanish</option>
            <option value='fr/context.ssl.php'>French</option>
            <option value='it/context.ssl.php'>Italian</option>
            <option value='ja/context.ssl.php'>Japanese</option>
            <option value='pt_BR/context.ssl.php'>Brazilian Portuguese</option>
            <option value='ru/context.ssl.php'>Russian</option>
            <option value='tr/context.ssl.php'>Turkish</option>
            <option value='uk/context.ssl.php'>Ukrainian</option>
            <option value='zh/context.ssl.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="context.ssl" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SSL context options</h1>
  <p class="refpurpose"><span class="refname">SSL context options</span> &mdash; <span class="dc-title">SSL context option listing</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-context.ssl-description">
  <h3 class="title">Description</h3>
  <p class="para">
   Context options for <code class="literal">ssl://</code> and <code class="literal">tls://</code>
   transports.
  </p>
 </div>


 <div class="refsect1 options" id="refsect1-context.ssl-options">
  <h3 class="title">Options</h3>
  <p class="para">
   <dl>
    
     <dt id="context.ssl.peer-name">
      <code class="parameter">peer_name</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Peer name to be used. If this value is not set, then the name is guessed
       based on the hostname used when opening the stream.
      </p>
     </dd>
    
    
     <dt id="context.ssl.verify-peer">
      <code class="parameter">verify_peer</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Require verification of SSL certificate used.
      </p>
      <p class="para">
       Defaults to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
      </p>
     </dd>
    
    
     <dt id="context.ssl.verify-peer-name">
      <code class="parameter">verify_peer_name</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Require verification of peer name.
      </p>
      <p class="para">
       Defaults to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
      </p>
     </dd>
    
    
     <dt id="context.ssl.allow-self-signed">
      <code class="parameter">allow_self_signed</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       Allow self-signed certificates. Requires
       <a href="context.ssl.php#context.ssl.verify-peer" class="link"><code class="parameter">verify_peer</code></a>.
      </p>
      <p class="para">
       Defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
      </p>
     </dd>
    
    
     <dt id="context.ssl.cafile">
      <code class="parameter">cafile</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Location of Certificate Authority file on local filesystem
       which should be used with the <code class="literal">verify_peer</code>
       context option to authenticate the identity of the remote peer.
      </p>
     </dd>
    
    
     <dt id="context.ssl.capath">
      <code class="parameter">capath</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       If <code class="literal">cafile</code> is not specified or if the certificate
       is not found there, the directory pointed to by <code class="literal">capath</code>
       is searched for a suitable certificate.  <code class="literal">capath</code>
       must be a correctly hashed certificate directory.
      </p>
     </dd>
    
    
     <dt id="context.ssl.local-cert">
      <code class="parameter">local_cert</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Path to local certificate file on filesystem.  It must be a
       <abbr title="Privacy-Enhanced Mail">PEM</abbr> encoded file which contains your certificate and
       private key. It can optionally contain the certificate chain of issuers.
       The private key also may be contained in a separate file specified
       by <code class="literal">local_pk</code>.
      </p>
     </dd>
    
    
     <dt id="context.ssl.local-pk">
      <code class="parameter">local_pk</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Path to local private key file on filesystem in case of separate
       files for certificate (<code class="literal">local_cert</code>) and private key.
      </p>
     </dd>
    
    
     <dt id="context.ssl.passphrase">
      <code class="parameter">passphrase</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Passphrase with which your <code class="literal">local_cert</code> file
       was encoded.
      </p>
     </dd>
    
    
     <dt id="context.ssl.verify-depth">
      <code class="parameter">verify_depth</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Abort if the certificate chain is too deep.
      </p>
      <p class="para">
       Defaults to no verification.
      </p>
     </dd>
    
    
     <dt id="context.ssl.ciphers">
      <code class="parameter">ciphers</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
     </dt>
     <dd>
      <p class="para">
       Sets the list of available ciphers. The format of the string is described
       in <a href="https://www.openssl.org/docs/manmaster/man1/ciphers.html#CIPHER-LIST-FORMAT" class="link external">&raquo;&nbsp;ciphers(1)</a>.
      </p>
      <p class="para">
       Defaults to <code class="literal">DEFAULT</code>.
      </p>
     </dd>
    
    
     <dt id="context.ssl.capture-peer-cert">
      <code class="parameter">capture_peer_cert</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       If set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> a <code class="literal">peer_certificate</code> context option
       will be created containing the peer certificate.
      </p>
     </dd>
    
    
     <dt id="context.ssl.capture-peer-cert-chain">
      <code class="parameter">capture_peer_cert_chain</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       If set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> a <code class="literal">peer_certificate_chain</code> context
       option will be created containing the certificate chain.
      </p>
     </dd>
    
    
     <dt id="context.ssl.sni-enabled">
      <code class="parameter">SNI_enabled</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       If set to <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> server name indication will be enabled. Enabling SNI
       allows multiple certificates on the same IP address.
      </p>
     </dd>
    
    
     <dt id="context.ssl.disable-compression">
      <code class="parameter">disable_compression</code>
      <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
     </dt>
     <dd>
      <p class="para">
       If set, disable TLS compression. This can help mitigate the CRIME attack
       vector.
      </p>
     </dd>
    
    
     <dt id="context.ssl.peer-fingerprint">
      <code class="parameter">peer_fingerprint</code>
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span> | <span class="type"><a href="language.types.array.php" class="type array">array</a></span>
     </dt>
     <dd>
      <p class="para">
       Aborts when the remote certificate digest doesn&#039;t match the specified
       hash.
      </p>
      <p class="para">
       When a <span class="type"><a href="language.types.string.php" class="type string">string</a></span> is used, the length will determine which hashing algorithm
       is applied, either &quot;md5&quot; (32) or &quot;sha1&quot; (40).
      </p>
      <p class="para">
       When an <span class="type"><a href="language.types.array.php" class="type array">array</a></span> is used, the keys indicate the hashing algorithm name
       and each corresponding value is the expected digest.
      </p>
     </dd>
    
    
     <dt id="context.ssl.security-level">
      <code class="parameter">security_level</code>
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
     </dt>
     <dd>
      <p class="para">
       Sets the security level. If not specified the library default security level is used.
       The security levels are described in
       <a href="https://www.openssl.org/docs/man1.1.1/man3/SSL_CTX_get_security_level.html" class="link external">&raquo;&nbsp;SSL_CTX_get_security_level(3)</a>.
      </p>
      <p class="para">
       Available as of PHP 7.2.0 and OpenSSL 1.1.0.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-context.ssl-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>7.2.0</td>
       <td>
        Added <code class="parameter">security_level</code>. Requires OpenSSL &gt;= 1.1.0.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-context.ssl-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    Because <code class="literal">ssl://</code> is the underlying transport for the
    <a href="wrappers.http.php" class="link"><code class="literal">https://</code></a> and
    <a href="wrappers.ftp.php" class="link"><code class="literal">ftps://</code></a> wrappers,
    any context options which apply to <code class="literal">ssl://</code> also apply to
    <code class="literal">https://</code> and <code class="literal">ftps://</code>.
   </span>
  </p></blockquote>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    For SNI (Server Name Indication) to be available, then PHP must be compiled
    with OpenSSL 0.9.8j or greater. Use the
    <strong><code><a href="openssl.constsni.php#constant.openssl-tlsext-server-name">OPENSSL_TLSEXT_SERVER_NAME</a></code></strong> to determine whether SNI is
    supported.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-context.ssl-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="context.socket.php" class="xref">Socket context options</a></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/context/ssl.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fcontext.ssl%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=context.ssl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/context.ssl.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119844">  <div class="votes">
    <div id="Vu119844">
    <a href="/manual/vote-note.php?id=119844&amp;page=context.ssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119844">
    <a href="/manual/vote-note.php?id=119844&amp;page=context.ssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119844" title="65% like this...">
    9
    </div>
  </div>
  <a href="#119844" class="name">
  <strong class="user"><em>website at meezaan dot net</em></strong></a><a class="genanchor" href="#119844"> &para;</a><div class="date" title="2016-09-05 01:48"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119844">
<div class="phpcode"><code><span class="html">There is also a crypto_type context. In older versions this was crypto_method. This is referenced on <a href="http://php.net/manual/en/function.stream-socket-enable-crypto.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.stream-socket-enable-crypto.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="128002">  <div class="votes">
    <div id="Vu128002">
    <a href="/manual/vote-note.php?id=128002&amp;page=context.ssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128002">
    <a href="/manual/vote-note.php?id=128002&amp;page=context.ssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128002" title="68% like this...">
    6
    </div>
  </div>
  <a href="#128002" class="name">
  <strong class="user"><em>tianyiw at vip dot qq dot com</em></strong></a><a class="genanchor" href="#128002"> &para;</a><div class="date" title="2022-12-09 04:52"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128002">
<div class="phpcode"><code><span class="html">Enable SNI (Server Name Indication):<br />PEM must be contains certificate and private key.<br /><span class="default">&lt;?php<br />$context </span><span class="keyword">= </span><span class="default">stream_context_create</span><span class="keyword">([<br />    </span><span class="string">'ssl' </span><span class="keyword">=&gt; [<br />        </span><span class="string">'SNI_enabled' </span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="string">'SNI_server_certs' </span><span class="keyword">=&gt; [<br />            </span><span class="string">'host1.com' </span><span class="keyword">=&gt; </span><span class="string">'/path/host1.com.pem'</span><span class="keyword">,<br />            </span><span class="string">'host2.com' </span><span class="keyword">=&gt; </span><span class="string">'/path/host2.com.pem'</span><span class="keyword">,<br />        ],<br />    ]<br />]);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124605">  <div class="votes">
    <div id="Vu124605">
    <a href="/manual/vote-note.php?id=124605&amp;page=context.ssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124605">
    <a href="/manual/vote-note.php?id=124605&amp;page=context.ssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124605" title="70% like this...">
    4
    </div>
  </div>
  <a href="#124605" class="name">
  <strong class="user"><em>gabri dot ns at gmail dot com</em></strong></a><a class="genanchor" href="#124605"> &para;</a><div class="date" title="2020-01-13 09:21"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124605">
<div class="phpcode"><code><span class="html">i usually download root CA certificate from <a href="https://curl.haxx.se/docs/caextract.html" rel="nofollow" target="_blank">https://curl.haxx.se/docs/caextract.html</a> then put it as 'cafile' and it work almost all of the time.<br /><br />the only problem i'v ever found is when the server does not properly sending intermediete CA certificate, then, you must add it manually to the file.</span></code></div>
  </div>
 </div>
  <div class="note" id="120278">  <div class="votes">
    <div id="Vu120278">
    <a href="/manual/vote-note.php?id=120278&amp;page=context.ssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120278">
    <a href="/manual/vote-note.php?id=120278&amp;page=context.ssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120278" title="56% like this...">
    4
    </div>
  </div>
  <a href="#120278" class="name">
  <strong class="user"><em>Charlie</em></strong></a><a class="genanchor" href="#120278"> &para;</a><div class="date" title="2016-12-05 07:53"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120278">
<div class="phpcode"><code><span class="html">I am unable to load a PEM that was generated with the stunnel tools. However, I am able to use PHP calls to generate a working PEM that is recognized both by stunnel and php, as outlined here:<br /><br /><a href="http://www.devdungeon.com/content/how-use-ssl-sockets-php" rel="nofollow" target="_blank">http://www.devdungeon.com/content/how-use-ssl-sockets-php</a><br /><br />This code fragment is now working for me, and with stunnel verify=4, both sides confirm the fingerprint. Oddly, if "tls://" is set below, then TLSv1 is forced, but using "ssl://" allows TLSv1.2:<br /><br />$stream_context = stream_context_create([ 'ssl' =&gt; [<br />'local_cert'        =&gt; '/path/to/key.pem',<br />'peer_fingerprint'  =&gt; openssl_x509_fingerprint(file_get_contents('/path/to/key.crt')),<br />'verify_peer'       =&gt; false,<br />'verify_peer_name'  =&gt; false,<br />'allow_self_signed' =&gt; true,<br />'verify_depth'      =&gt; 0 ]]);<br /><br />$fp = stream_socket_client('ssl://ssl.server.com:12345',<br />   $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $stream_context);<br />fwrite($fp, "foo bar\n");<br />while($line = fgets($fp, 8192)) echo $line;</span></code></div>
  </div>
 </div>
  <div class="note" id="96328">  <div class="votes">
    <div id="Vu96328">
    <a href="/manual/vote-note.php?id=96328&amp;page=context.ssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96328">
    <a href="/manual/vote-note.php?id=96328&amp;page=context.ssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96328" title="54% like this...">
    3
    </div>
  </div>
  <a href="#96328" class="name">
  <strong class="user"><em>Botjan kufca</em></strong></a><a class="genanchor" href="#96328"> &para;</a><div class="date" title="2010-02-20 11:11"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96328">
<div class="phpcode"><code><span class="html">CN_match works contrary to intuitive thinking. I came across this when I was developing SSL server implemented in PHP. I stated (in code): <br /><br />- do not allow self signed certs (works)<br />- verify peer certs against CA cert (works)<br />- verify the client's CN against CN_match (does not work), like this:<br /><br />stream_context_set_option($context, 'ssl', 'CN_match', '*.example.org');<br /><br />I presumed this would match any client with CN below .example.org domain.<br />Unfortunately this is NOT the case. The option above does not do that.<br /><br />What it really does is this:<br />- it takes client's CN and compares it to CN_match<br />- IF CLIENT's CN CONTAINS AN ASTERISK like *.example.org, then it is matched against CN_match in wildcard matching fashion<br /><br />Examples to illustrate behaviour:<br />(CNM = server's CN_match)<br />(CCN = client's CN)<br /><br />- CNM=host.example.org, CCN=host.example.org ---&gt; OK<br />- CNM=host.example.org, CCN=*.example.org ---&gt; OK<br />- CNM=.example.org, CCN=*.example.org ---&gt; OK<br />- CNM=example.org, CCN=*.example.org ---&gt; ERROR<br /><br />- CNM=*.example.org, CCN=host.example.org ---&gt; ERROR<br />- CNM=*.example.org, CCN=*.example.org ---&gt; OK<br /><br />According to PHP sources I believe that the same applies if you are trying to act as Client and the server contains a wildcard certificate. If you set CN_match to myserver.example.org and server presents itself with *.example.org, the connection is allowed.<br /><br />Everything above applies to PHP version 5.2.12.<br />I will supply a patch to support CN_match starting with asterisk.</span></code></div>
  </div>
 </div>
  <div class="note" id="114269">  <div class="votes">
    <div id="Vu114269">
    <a href="/manual/vote-note.php?id=114269&amp;page=context.ssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114269">
    <a href="/manual/vote-note.php?id=114269&amp;page=context.ssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114269" title="52% like this...">
    1
    </div>
  </div>
  <a href="#114269" class="name">
  <strong class="user"><em>borbas dot geri at gmail dot com</em></strong></a><a class="genanchor" href="#114269"> &para;</a><div class="date" title="2014-01-31 12:06"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114269">
<div class="phpcode"><code><span class="html">I used this for Apple Push Notification Service.<br />Passed in a local certificate filename `cert.pem` trough local_cert option. <br />Worked fine, when invoked the script directly.<br /><br />But when I included/required the script from a different location, it stopped working, without any explicit error message.<br /><br />Resolved by passed in the full path for the file `&lt;FullPathTo&gt;cert.pem`.</span></code></div>
  </div>
 </div>
  <div class="note" id="126992">  <div class="votes">
    <div id="Vu126992">
    <a href="/manual/vote-note.php?id=126992&amp;page=context.ssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126992">
    <a href="/manual/vote-note.php?id=126992&amp;page=context.ssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126992" title="50% like this...">
    0
    </div>
  </div>
  <a href="#126992" class="name">
  <strong class="user"><em>consatangmail dot com</em></strong></a><a class="genanchor" href="#126992"> &para;</a><div class="date" title="2022-04-19 03:41"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126992">
<div class="phpcode"><code><span class="html">recommended use "ssl://" transport.<br /><br />in php 5.5 ~ 7.1<br />ssl:// transport = ssl_v2|ssl_v3|tls_v1.0|tls_v1.1|tls_v1.2<br />tls:// transport = tls_v1.0<br /><br />after 7.2 ssl:// and tls:// transports is same<br />php 7.2 ~ 7.3 = tls_v1.0|tls_v1.1|tls_v1.2<br />php 7.4 ~ 8.1 = tls_v1.0|tls_v1.1|tls_v1.2|tls_v1.3</span></code></div>
  </div>
 </div>
  <div class="note" id="120265">  <div class="votes">
    <div id="Vu120265">
    <a href="/manual/vote-note.php?id=120265&amp;page=context.ssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120265">
    <a href="/manual/vote-note.php?id=120265&amp;page=context.ssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120265" title="46% like this...">
    -1
    </div>
  </div>
  <a href="#120265" class="name">
  <strong class="user"><em>Charlie</em></strong></a><a class="genanchor" href="#120265"> &para;</a><div class="date" title="2016-12-02 07:28"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120265">
<div class="phpcode"><code><span class="html">It appears that "allow_self_signed" does not and cannot apply to the local_cert option.<br /><br />The stunnel verify=4 option, which verifies but ignores a CA, has no analog in these settings, which is unfortunate.<br /><br />Even more perplexingly, while the "openssl verify -CAfile" is successful, PHP appears unable to use the new ca/crt pair in any configuration.<br /><br />I did actually link my PHP against a copy of LibreSSL 2.3.8, but PHP oddly is unable to use TLS1.1 or 1.2. It does, however, enable EC secp521r1 (of which my native OpenSSL 0.9.8e is incapable).</span></code></div>
  </div>
 </div>
  <div class="note" id="123325">  <div class="votes">
    <div id="Vu123325">
    <a href="/manual/vote-note.php?id=123325&amp;page=context.ssl&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123325">
    <a href="/manual/vote-note.php?id=123325&amp;page=context.ssl&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123325" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#123325" class="name">
  <strong class="user"><em>mechtecs at gmail dot com</em></strong></a><a class="genanchor" href="#123325"> &para;</a><div class="date" title="2018-11-09 01:09"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123325">
<div class="phpcode"><code><span class="html">If you want to validate the server against a local certificate, which you already saved, to further validate the target server, you have to use a fullchain.pem. Then the verify_peer option will work. So just get the server certificate, and search the root CA's pem's and copy everything into a single file. For example:<br /><br />My certificate has the "GeoTrust TLS RSA CA G1" certificate in the chain, so you google that string. Go to the official digicert Geotrust page and download the "GeoTrustTLSRSACAG1.crt" certificate. Then you can use the following command to convert it into the pem format:<br />openssl x509 -inform DER -in GeoTrustTLSRSACAG1.crt -out GeoTrustTLSRSACAG1.crt.pem -outform PEM</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=context.ssl&amp;repo=en&amp;redirect=https://www.php.net/manual/en/context.ssl.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="context.php">Context options and parameters</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="context.socket.php" title="Socket context options">Socket context options</a>
                        </li>
                                                <li class="">
                            <a href="context.http.php" title="HTTP context options">HTTP context options</a>
                        </li>
                                                <li class="">
                            <a href="context.ftp.php" title="FTP context options">FTP context options</a>
                        </li>
                                                <li class="current">
                            <a href="context.ssl.php" title="SSL context options">SSL context options</a>
                        </li>
                                                <li class="">
                            <a href="context.phar.php" title="Phar context options">Phar context options</a>
                        </li>
                                                <li class="">
                            <a href="context.params.php" title="Context parameters">Context parameters</a>
                        </li>
                                                <li class="">
                            <a href="context.zip.php" title="Zip context options">Zip context options</a>
                        </li>
                                                <li class="">
                            <a href="context.zlib.php" title="Zlib context options">Zlib context options</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
