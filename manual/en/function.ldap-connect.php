<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_connect - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-connect.php">
 <link rel="shorturl" href="https://www.php.net/ldap-connect">
 <link rel="alternate" href="https://www.php.net/ldap-connect" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-compare.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-connect-wallet.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-connect.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-connect.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-connect.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-connect.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-connect.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-connect.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-connect.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-connect.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-connect.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-connect.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-connect.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Connect to an LDAP server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_connect - Manual" />
<meta name="twitter:description" content="Connect to an LDAP server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_connect - Manual" />
<meta itemprop="description" content="Connect to an LDAP server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Connect to an LDAP server" />

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
        <a href="function.ldap-connect-wallet.php">
          ldap_connect_wallet &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-compare.php">
          &laquo; ldap_compare        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ldap.php'>LDAP</a></li>      <li><a href='ref.ldap.php'>LDAP Functions</a></li>      </ul>
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
            <option value='en/function.ldap-connect.php' selected="selected">English</option>
            <option value='de/function.ldap-connect.php'>German</option>
            <option value='es/function.ldap-connect.php'>Spanish</option>
            <option value='fr/function.ldap-connect.php'>French</option>
            <option value='it/function.ldap-connect.php'>Italian</option>
            <option value='ja/function.ldap-connect.php'>Japanese</option>
            <option value='pt_BR/function.ldap-connect.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-connect.php'>Russian</option>
            <option value='tr/function.ldap-connect.php'>Turkish</option>
            <option value='uk/function.ldap-connect.php'>Ukrainian</option>
            <option value='zh/function.ldap-connect.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-connect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_connect</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ldap_connect</span> &mdash; <span class="dc-title">Connect to an LDAP server</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ldap-connect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_connect</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$uri</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="class.ldap-connection.php" class="type LDAP\Connection">LDAP\Connection</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <div class="warning"><strong class="warning">Warning</strong>
   <p class="simpara">
    As of PHP 8.3.0, the <em>following</em> signature is deprecated.
   </p>
  </div>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_connect</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$host</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$port</code><span class="initializer"> = 389</span></span>): <span class="type"><span class="type"><a href="class.ldap-connection.php" class="type LDAP\Connection">LDAP\Connection</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Creates an <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span> connection and checks whether the given
   <code class="parameter">uri</code> is plausible.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    This function does <em>not</em> open a connection.
    It checks whether the given parameters are plausible and can be used
    to open a connection as soon as one is needed.
   </span>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ldap-connect-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">uri</code></dt>
     <dd>
      <p class="para">
       A full LDAP URI of the form <code class="literal">ldap://hostname:port</code>
       or <code class="literal">ldaps://hostname:port</code> for SSL encryption.
      </p>
      <p class="para">
       You can also provide multiple LDAP-URIs separated by a space as one string
      </p>
      <p class="para">
       Note that <code class="literal">hostname:port</code> is not a supported LDAP URI as the schema is missing.
      </p>
     </dd>
    
    
     <dt><code class="parameter">host</code></dt>
     <dd>
      <p class="para">
       The hostname to connect to.
      </p>
     </dd>
    
    
     <dt><code class="parameter">port</code></dt>
     <dd>
      <p class="para">
       The port to connect to.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ldap-connect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span> instance when the provided LDAP URI
   seems plausible. It&#039;s a syntactic check of the provided parameter but the server(s) will not
   be contacted! If the syntactic check fails it returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
   <span class="function"><strong>ldap_connect()</strong></span> will otherwise
   return a <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span> instance as it does not actually connect but just
   initializes the connecting parameters.  The actual connect happens with
   the next calls to ldap_* functions, usually with
   <span class="function"><a href="function.ldap-bind.php" class="function">ldap_bind()</a></span>.
  </p>
  <p class="para">
   If no argument is specified then the <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span> instance of the already
   opened connection will be returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ldap-connect-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>8.3.0</td>
      <td>
       Calling <span class="function"><strong>ldap_connect()</strong></span> with separate
       <code class="parameter">hostname</code> and <code class="parameter">port</code>
       is now deprecated.
      </td>
     </tr>

     <tr>
      <td>8.1.0</td>
      <td>
       Returns an <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span> instance now;
       previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.ldap-connect-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4625">
    <p><strong>Example #1 Example of connecting to LDAP server.</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// LDAP variables<br /></span><span style="color: #0000BB">$ldapuri </span><span style="color: #007700">= </span><span style="color: #DD0000">"ldap://ldap.example.com:389"</span><span style="color: #007700">;  </span><span style="color: #FF8000">// your ldap-uri<br /><br />// Connecting to LDAP<br /></span><span style="color: #0000BB">$ldapconn </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$ldapuri</span><span style="color: #007700">)<br />          or die(</span><span style="color: #DD0000">"That LDAP-URI was not parseable"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-4626">
    <p><strong>Example #2 Example of connecting securely to LDAP server.</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">// make sure your host is the correct one<br />// that you issued your secure certificate to<br /></span><span style="color: #0000BB">$ldaphost </span><span style="color: #007700">= </span><span style="color: #DD0000">"ldaps://ldap.example.com/"</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Connecting to LDAP<br /></span><span style="color: #0000BB">$ldapconn </span><span style="color: #007700">= </span><span style="color: #0000BB">ldap_connect</span><span style="color: #007700">(</span><span style="color: #0000BB">$ldaphost</span><span style="color: #007700">)<br />          or die(</span><span style="color: #DD0000">"That LDAP-URI was not parseable"</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ldap-connect-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ldap-bind.php" class="function" rel="rdfs-seeAlso">ldap_bind()</a> - Bind to LDAP directory</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-connect.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-connect%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-connect.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">27 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="115662">  <div class="votes">
    <div id="Vu115662">
    <a href="/manual/vote-note.php?id=115662&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115662">
    <a href="/manual/vote-note.php?id=115662&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115662" title="70% like this...">
    51
    </div>
  </div>
  <a href="#115662" class="name">
  <strong class="user"><em>nemanja at prolux-universal dot com</em></strong></a><a class="genanchor" href="#115662"> &para;</a><div class="date" title="2014-09-04 11:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115662">
<div class="phpcode"><code><span class="html">If you don't want your PHP program to wait XXX seconds before giving up in a case when one of your corporate DC have failed, and since ldap_connect() does not have a mechanism to timeout on a user specified time, this is my workaround which shows excellent practical results.<br /><br />===========================================================<br />function serviceping($host, $port=389, $timeout=1)<br />{<br />        $op = fsockopen($host, $port, $errno, $errstr, $timeout);<br />        if (!$op) return 0; //DC is N/A<br />    else {<br />    fclose($opanak); //explicitly close open socket connection<br />    return 1; //DC is up &amp; running, we can safely connect with ldap_connect<br />    }<br />}<br /><br />// ##### STATIC DC LIST, if your DNS round robin is not setup<br />//$dclist = array('10.111.222.111', '10.111.222.100', '10.111.222.200');<br /><br />// ##### DYNAMIC DC LIST, reverse DNS lookup sorted by round-robin result<br />$dclist = gethostbynamel('domain.name');<br /><br />foreach ($dclist as $k =&gt; $dc) if (serviceping($dc) == true) break; else $dc = 0;<br />//after this loop, either there will be at least one DC which is available at present, or $dc would return bool false while the next line stops program from further execution<br /><br />if (!$dc) exit("NO DOMAIN CONTROLLERS AVAILABLE AT PRESENT, PLEASE TRY AGAIN LATER!"); //user being notified<br /><br />//now, ldap_connect would certainly connect succesfully to DC tested previously and no timeout will occur<br />$ldapconn = ldap_connect($dc) or die("DC N/A, PLEASE TRY AGAIN LATER.");<br />===========================================================<br /><br />Also with this approach, you get a real nice failover functionality, take for an example a company with a dozen of DC-a distributed along distant places, this way your PHP program will always have high availability if at least one DC is active at present.</span></code></div>
  </div>
 </div>
  <div class="note" id="36156">  <div class="votes">
    <div id="Vu36156">
    <a href="/manual/vote-note.php?id=36156&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36156">
    <a href="/manual/vote-note.php?id=36156&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36156" title="64% like this...">
    26
    </div>
  </div>
  <a href="#36156" class="name">
  <strong class="user"><em>Andrew (a.whyte at cqu.edu.au)</em></strong></a><a class="genanchor" href="#36156"> &para;</a><div class="date" title="2003-09-29 12:15"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom36156">
<div class="phpcode"><code><span class="html">To be able to make modifications to Active Directory via the LDAP connector you must bind to the LDAP service over SSL. Otherwise Active Directory provides a mostly readonly connection. You cannot add objects or modify certain properties without LDAPS, e.g. passwords can only be changed using LDAPS connections to Active Directory.
<br />
<br />Therefore, for those wishing to securely connect to Active Directory, from a Unix host using PHP+OpenLDAP+OpenSSL I spent some time getting this going myself, and came across a few gotcha's. Hope this proves fruitfull for others like me when you couldn't find answers out there.
<br />
<br />Make sure you compile OpenLDAP with OpenSSL support, and that you compile PHP with OpenLDAP and OpenSSL.
<br />
<br />This provides PHP with what it needs to make use of ldaps:// connections.
<br />
<br />Configure OpenSSL:
<br />
<br />Extract your Root CA certificate from Active Directory, this is achived through the use of Certificate Services, a startard component of Windows 2000 Server, but may not be installed by default, (The usual Add/Remove Software method will work here). I extracted this in Base64 not DER format.
<br />
<br />Place the extracted CAcert into the certs folder for openssl. (e.g. /usr/local/ssl/certs) and setup the hashed symlinks. This is easily done by simply running:
<br />
<br />  /usr/local/ssl/bin/c_rehash
<br />
<br />Once this is done you can test it is worked by running:
<br />
<br />  /usr/local/ssl/bin/openssl verify -verbose -CApath /usr/local/ssl/certs /tmp/exported_cacert.pem
<br />
<br />(Should return: OK).
<br />
<br />Configure OpenLDAP:
<br />
<br />Add the following to your ldap.conf file.
<br />(found as /usr/local/openldap/etc/openldap/ldap.conf)
<br />
<br />  #--begin--
<br />
<br />  # Instruct client to NOT request a server's cert. 
<br />  #
<br />  # WARNING: This will open up the server vor Man-in-the-middle 
<br />  # attacs and should *not* be used on production systems or outside
<br />  # of test-scenarios!
<br />  #
<br />  # If you use this setting you will not need any other settings as
<br />  # no certificate is requested and therefore will not be validated
<br />  #
<br />  # For a proper solution check out <a href="https://andreas.heigl.org/2020/01/31/handle-self-signed-certificates-with-phps-ldap-extension/" rel="nofollow" target="_blank">https://andreas.heigl.org/2020/01/31/handle-self-signed-certificates-with-phps-ldap-extension/</a>
<br />  TLS_REQCERT never
<br />
<br />  # Define location of CA Cert
<br />  TLS_CACERT /usr/local/ssl/certs/AD_CA_CERT.pem
<br />  TLS_CACERTDIR /usr/local/ssl/certs
<br />
<br />  #--end--
<br />
<br />You also need to place those same settings in a file within the Apache Web user homedir called .ldaprc
<br />
<br />  e.g.:
<br />  
<br />  cp /usr/local/openldap/etc/openldap/ldap.conf ~www/.ldaprc )
<br />
<br />You can then test that you're able to establish a LDAPS connection to Active Directory from the OpenLDAP command tools:
<br />
<br />  /usr/local/openldap/bin/ldapsearch -H "ldaps://adserver.ad.com"
<br />
<br />This should return some output in extended LDIF format and will indicate no matching objects, but it proves the connection works.
<br />
<br />The name of the server you're connecting to is important. If they server name you specify in the "ldaps://" URI does not match the name of the server in it's certificate, it will complain like so:
<br />
<br />  ldap_bind: Can't contact LDAP server (81)
<br />        additional info: TLS: hostname does not match CN in peer certificate
<br />
<br />Once you've gotten the ldapsearch tool working correctly PHP should work also.
<br />
<br />One important gotcha however is that the Web user must be able to locate it's HOME folder. You must check that Apache is providing a HOME variable set to the Web users home directory, so that php can locate the .ldaprc file and the settings contained within. This may well be different between Unix variants but it is such a simple and stupid thing if you miss it and it causes you grief. Simply use a SetEnv directive in Apache's httpd.conf:
<br />
<br />  SetEnv HOME /usr/local/www
<br />
<br />With all that done, you can now code up a simple connect function:
<br />
<br />  function connect_AD()
<br />  {
<br />    $ldap_server = "ldaps://adserver.ad.com" ;
<br />    $ldap_user   = "CN=web service account,OU=Service Accounts,DC=ad,DC=com" ;
<br />    $ldap_pass   = "password" ;
<br />
<br />    $ad = ldap_connect($ldap_server) ;
<br />    ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3) ;
<br />    $bound = ldap_bind($ad, $ldap_user, $ldap_pass);
<br />
<br />    return $ad ;
<br />  }
<br />
<br />Optionally you can avoid the URI style server string and use something like ldap_connect("adserver.ad.com", 636) ;  But work fine with Active Directory servers.
<br />
<br />Hope this proves usefull.</span></code></div>
  </div>
 </div>
  <div class="note" id="117611">  <div class="votes">
    <div id="Vu117611">
    <a href="/manual/vote-note.php?id=117611&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117611">
    <a href="/manual/vote-note.php?id=117611&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117611" title="75% like this...">
    4
    </div>
  </div>
  <a href="#117611" class="name">
  <strong class="user"><em>lee at lareck70 dot net</em></strong></a><a class="genanchor" href="#117611"> &para;</a><div class="date" title="2015-07-08 06:20"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117611">
<div class="phpcode"><code><span class="html">To use LDAPS on Windows whitout "c:\openldap\sysconf\ldap.conf":<br />Generate a file like ldap.conf, name it "ldaprc".<br />For PHP script running on command line put the file to the script.<br />For PHP script running on webserver put the file in home directory of PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="116853">  <div class="votes">
    <div id="Vu116853">
    <a href="/manual/vote-note.php?id=116853&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116853">
    <a href="/manual/vote-note.php?id=116853&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116853" title="65% like this...">
    7
    </div>
  </div>
  <a href="#116853" class="name">
  <strong class="user"><em>harrison at glsan dot com</em></strong></a><a class="genanchor" href="#116853"> &para;</a><div class="date" title="2015-03-10 06:07"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116853">
<div class="phpcode"><code><span class="html">To override the ssl ca file can be done by setting an environmental variable within php.<br /><br />I found using saving the ca certificate (and intermediate ca's) to a file called ca.pem and then adding <br /><br />putenv('LDAPTLS_CACERT=./ca.pem'); <br /><br />before ldap_connect works for me.   <br />Code example:<br /><span class="default">&lt;?php<br />putenv</span><span class="keyword">(</span><span class="string">'LDAPTLS_CACERT=./ca.pem'</span><span class="keyword">);<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">, </span><span class="default">LDAP_OPT_DEBUG_LEVEL</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">);<br /></span><span class="default">$l </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="string">"ldaps://ldap/"</span><span class="keyword">);<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$l</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$l</span><span class="keyword">, </span><span class="string">"cn=apache,dc=example"</span><span class="keyword">, </span><span class="string">"xxxxxxx"</span><span class="keyword">);<br />echo(</span><span class="default">ldap_error</span><span class="keyword">(</span><span class="default">$l</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">);<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$l</span><span class="keyword">, </span><span class="string">"dc=example"</span><span class="keyword">, </span><span class="string">"uid=test"</span><span class="keyword">);<br />echo(</span><span class="default">ldap_count_entries</span><span class="keyword">(</span><span class="default">$l</span><span class="keyword">, </span><span class="default">$s</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>in the file  ca.pem in the same directory we have our ca's:<br />-----BEGIN CERTIFICATE-----<br />&lt;cert here&gt;<br />-----END CERTIFICATE-----</span></code></div>
  </div>
 </div>
  <div class="note" id="88508">  <div class="votes">
    <div id="Vu88508">
    <a href="/manual/vote-note.php?id=88508&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88508">
    <a href="/manual/vote-note.php?id=88508&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88508" title="66% like this...">
    2
    </div>
  </div>
  <a href="#88508" class="name">
  <strong class="user"><em>peter dot burden at gmail dot com</em></strong></a><a class="genanchor" href="#88508"> &para;</a><div class="date" title="2009-01-27 04:40"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88508">
<div class="phpcode"><code><span class="html">The host name parameter can be a space separated list of host names. This means that the LDAP code will talk to a backup server if the main server is not operational. There will be a delay while the code times out trying to talk to the main server but things will still work. This is particularly useful with a typical Microsoft Active Directory setup of primary and backup domain controllers.<br /><span class="default">&lt;?php<br />$ldaphost </span><span class="keyword">= </span><span class="string">"192.168.0.100 192.168.0.101"</span><span class="keyword">;<br /></span><span class="default">$ldapconn </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldaphost</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117296">  <div class="votes">
    <div id="Vu117296">
    <a href="/manual/vote-note.php?id=117296&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117296">
    <a href="/manual/vote-note.php?id=117296&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117296" title="63% like this...">
    3
    </div>
  </div>
  <a href="#117296" class="name">
  <strong class="user"><em>mwilmes at avc dot edu</em></strong></a><a class="genanchor" href="#117296"> &para;</a><div class="date" title="2015-05-18 05:26"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117296">
<div class="phpcode"><code><span class="html">I support a LAMP stack with PHP-FPM on CentOS 7 that needs to connect to Active Directory over SSL.  We have a root certificate for the domain.  I was able to set this up in five steps.<br /><br />1. Get the domain's root SSL certificate in base64. (Must be an Enterprise Administrator - talk with your admin if you are not one.)<br />Run mmc.exe<br />File -&gt; Add/Remove Snap-in<br />Select Certification Authority, then the server that generates certificates for your domain.<br />Expand the tree until you find the entry for the root certificate, then right click-&gt;Properties.<br />Click the "View Certificate" button, The "Details" tab, then the "Copy to File..." button.<br />Use the wizard to export the root certificate to your computer. Ensure you use the Base-64 format.<br /><br />2. Copy the root cert to the Linux server.  You can open the certificate in notepad and copy and paste the contents.<br /><br />3. Convert the certificate to pem format.  Substitute the names of files as needed.<br />openssl x509 -in &lt;copied certificate file&gt; -out /etc/openldap/certs/&lt;cert&gt;.pem<br /><br />4. Add a line in ldap.conf to use new root cert.<br />vi /etc/openldap/ldap.conf<br />TLS_CACERT      /etc/openldap/certs/&lt;cert&gt;.pem<br /><br />5.Restart the PHP service.<br />systemctl restart php-fpm.service</span></code></div>
  </div>
 </div>
  <div class="note" id="46054">  <div class="votes">
    <div id="Vu46054">
    <a href="/manual/vote-note.php?id=46054&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46054">
    <a href="/manual/vote-note.php?id=46054&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46054" title="66% like this...">
    1
    </div>
  </div>
  <a href="#46054" class="name">
  <strong class="user"><em>blizzards at libero dot it</em></strong></a><a class="genanchor" href="#46054"> &para;</a><div class="date" title="2004-09-28 03:23"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom46054">
<div class="phpcode"><code><span class="html">To complete questions about how to connect to a LDAP ACTIVE DIRECTORY 2000/2003 server with SASL on port 636, you can refer to prevous notes, and the following directives:<br /><br />A)Create CA certificates from AD;<br />B)Export in .pem (DER) format;<br />C)Install OPENSSL,CYRUS SASL,OPENLDAP,KERBEROS 5;<br />D)Copy exported AD ca cert into openssl certs dir on your unix system;<br />E)Reash with c_reash command;<br />F)Get a kerberos ticket form AD for your user;<br />G)Compile PHP with SSL and LDAP support;<br />H)Test with ldapsearch -D &lt;binddn&gt; -W -H ldaps://ad.secure.com:636 -x<br /><br />If all works right, create your php script.<br /><br />Note: For writing parameters to AD you need to renew ticket each 10 hours or less (AD default lifetime ticket), for reading pourpose you can maintain expired ticket.<br />When querying a windows 2000/2003 AD you MUST use only SASL and not TLS (non supported).</span></code></div>
  </div>
 </div>
  <div class="note" id="124788">  <div class="votes">
    <div id="Vu124788">
    <a href="/manual/vote-note.php?id=124788&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124788">
    <a href="/manual/vote-note.php?id=124788&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124788" title="57% like this...">
    1
    </div>
  </div>
  <a href="#124788" class="name">
  <strong class="user"><em>nateshull at gmail dot com</em></strong></a><a class="genanchor" href="#124788"> &para;</a><div class="date" title="2020-03-03 07:26"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124788">
<div class="phpcode"><code><span class="html">Implementing LDAPS on a WISP stack - Win, IIS, SQL, PHP<br />PHP 7.0.19:<br /><br />Had some issues with some of the instructions and I needed LDAPS for an upcoming Active Directory update that removes insecure LDAP connections. <br /><br />Enable modules for ldap and openssl in php.ini<br /><br />Also ensure the extensions are in the ext folder<br /><br />Verify the modules are loaded: phpinfo()<br /><br />Notes:<br />The ldap or openssl config file is not needed if the environment variables are set in the code. Also the ca path does not like double quotations around the path. <br /><br />*** code sample:<br /><br /> <span class="default">&lt;?php<br />$ldapuser </span><span class="keyword">= </span><span class="string">"domain\\user"</span><span class="keyword">;<br /></span><span class="default">$ldappass </span><span class="keyword">= </span><span class="string">"Passsword"</span><span class="keyword">;<br /></span><span class="default">$ldapserver </span><span class="keyword">= </span><span class="string">"ldaps://server.domain.com"</span><span class="keyword">;<br /><br /></span><span class="comment">//options are require, never, allow<br />//require is most secure, the others could allow for man in the middle attacks<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'LDAPTLS_REQCERT=require'</span><span class="keyword">);<br /><br /></span><span class="comment">//tell ldap where the root ca certificate is<br />//note that the space is allowed in the path without escape or quotes<br />//I have not tested the permissions, but I would assume the service should have read. <br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">'LDAPTLS_CACERT=C:\\Program Files\\php\\certs\\rootca.pem'</span><span class="keyword">);<br /><br /></span><span class="comment">//test to ensure the certificate is able to be read and path is right.<br /></span><span class="keyword">echo </span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">"LDAPTLS_CACERT=C:\\Program Files\\php\\certs\\rootca.pem"</span><span class="keyword">);<br /><br /></span><span class="comment">// Set debugging<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">, </span><span class="default">LDAP_OPT_DEBUG_LEVEL</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">);<br /><br /></span><span class="comment">// connect to ldap server<br /></span><span class="default">$ldapconn </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldapserver</span><span class="keyword">) or die (</span><span class="string">"Couldn't connect"</span><span class="keyword">); <br /><br /></span><span class="comment">// binding to ldap server<br /></span><span class="default">$ldapbind </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br /></span><span class="default">$ldapbind </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldapconn</span><span class="keyword">, </span><span class="default">$ldapuser</span><span class="keyword">, </span><span class="default">$ldappass</span><span class="keyword">);<br /><br /></span><span class="comment">//easy view of success or failure<br /></span><span class="keyword">if (</span><span class="default">$ldapbind</span><span class="keyword">) {<br />    print(</span><span class="string">"\n logged in! \n\n"</span><span class="keyword">);<br />} else {<br />    print(</span><span class="string">"\n log on failure \n\n"</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117685">  <div class="votes">
    <div id="Vu117685">
    <a href="/manual/vote-note.php?id=117685&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117685">
    <a href="/manual/vote-note.php?id=117685&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117685" title="55% like this...">
    2
    </div>
  </div>
  <a href="#117685" class="name">
  <strong class="user"><em>Nixahnung</em></strong></a><a class="genanchor" href="#117685"> &para;</a><div class="date" title="2015-07-22 03:13"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117685">
<div class="phpcode"><code><span class="html">I have spent a lot of time to make an LDAPS connection to a MS AD Global Catalog port 3269<br /><br />My five Cents:<br /><br />ldap_connect("ldaps://example.com", 3269)<br />=&gt; Connection to 636.... :(, DC only<br /><br />ldap_connect("ldaps://example.com:3269")<br />=&gt; Connection to 3269.... :), GC as expected<br /><br />May it helps...</span></code></div>
  </div>
 </div>
  <div class="note" id="23654">  <div class="votes">
    <div id="Vu23654">
    <a href="/manual/vote-note.php?id=23654&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23654">
    <a href="/manual/vote-note.php?id=23654&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23654" title="54% like this...">
    2
    </div>
  </div>
  <a href="#23654" class="name">
  <strong class="user"><em>avel at noc uoa gr</em></strong></a><a class="genanchor" href="#23654"> &para;</a><div class="date" title="2002-07-24 07:05"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23654">
<div class="phpcode"><code><span class="html">Note that hostname can be a space-separated list of LDAP host names. This is very useful for failover; if the first ldap host is down, ldap_connect will ask the second LDAP host. Of course, you _must_ have LDAP replicates before doing this. :) Read the LDAP API documentation for more information.
<br />
<br />This can also be useful, apart from failover, for LDAP load balancing. Just use a random generator function that will return a different space-separated list every time. This is because the first host in the list is always tried first.
<br />
<br />Be careful when doing LDAP writes; be sure to always connect to your master host when you are about to modify the database, so that the replicates will get the changes as expected.
<br />
<br />Alexandros Vellis</span></code></div>
  </div>
 </div>
  <div class="note" id="129276">  <div class="votes">
    <div id="Vu129276">
    <a href="/manual/vote-note.php?id=129276&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129276">
    <a href="/manual/vote-note.php?id=129276&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129276" title="no votes...">
    0
    </div>
  </div>
  <a href="#129276" class="name">
  <strong class="user"><em>heiglandreas at php dot net</em></strong></a><a class="genanchor" href="#129276"> &para;</a><div class="date" title="2024-02-25 02:32"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129276">
<div class="phpcode"><code><span class="html">If you have trouble using TLS on ldap-conjnect: Despite what a lot of people are saying: TLS_REQCERT=never is NEVER the correct answer.<br /><br />Check out <a href="https://andreas.heigl.org/2020/01/31/handle-self-signed-certificates-with-phps-ldap-extension/" rel="nofollow" target="_blank">https://andreas.heigl.org/2020/01/31/handle-self-signed-certificates-with-phps-ldap-extension/</a> for the solution to do it with propper certificate checking!</span></code></div>
  </div>
 </div>
  <div class="note" id="120383">  <div class="votes">
    <div id="Vu120383">
    <a href="/manual/vote-note.php?id=120383&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120383">
    <a href="/manual/vote-note.php?id=120383&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120383" title="50% like this...">
    0
    </div>
  </div>
  <a href="#120383" class="name">
  <strong class="user"><em>titanrat at bk dot ru</em></strong></a><a class="genanchor" href="#120383"> &para;</a><div class="date" title="2016-12-28 12:02"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120383">
<div class="phpcode"><code><span class="html">I found some difference between php7.0 and php5.5 on this function<br /><br />Php5 ldap_connect ('host', 0) try to connect default port - host:389<br />Php7 ldap_connect ('host', 0) try to connect host:0 and crashes.</span></code></div>
  </div>
 </div>
  <div class="note" id="118363">  <div class="votes">
    <div id="Vu118363">
    <a href="/manual/vote-note.php?id=118363&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118363">
    <a href="/manual/vote-note.php?id=118363&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118363" title="50% like this...">
    0
    </div>
  </div>
  <a href="#118363" class="name">
  <strong class="user"><em>antoine dot php dot net at bonnefoy dot eu</em></strong></a><a class="genanchor" href="#118363"> &para;</a><div class="date" title="2015-11-23 10:30"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118363">
<div class="phpcode"><code><span class="html">Hello,<br /><br />Little corrections to nemanja  post. <br />- There was a warning if connection is denied by firewall (adding @ before fsockopen)<br />- fclose parameter was incorrect. <br /><br />With this approach, you get a real nice failover functionality, take for an example a company with a dozen of DC-a distributed along distant places, this way your PHP program will always have high availability if at least one DC is active at present.<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">serviceping</span><span class="keyword">(</span><span class="default">$_host</span><span class="keyword">, </span><span class="default">$_port </span><span class="keyword">= </span><span class="default">389</span><span class="keyword">, </span><span class="default">$_timeout </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">) {<br />    </span><span class="default">$op </span><span class="keyword">= @</span><span class="default">fsockopen</span><span class="keyword">(</span><span class="default">$_host</span><span class="keyword">, </span><span class="default">$_port</span><span class="keyword">, </span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$_timeout</span><span class="keyword">);<br />    if (!</span><span class="default">$op</span><span class="keyword">) {<br />        echo </span><span class="string">"KO!"</span><span class="keyword">;<br />        return </span><span class="default">0</span><span class="keyword">;<br />        <br />    } </span><span class="comment">//DC is N/A<br />    </span><span class="keyword">else {<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$op</span><span class="keyword">); </span><span class="comment">//explicitly close open socket connection<br />        </span><span class="keyword">return </span><span class="default">1</span><span class="keyword">; </span><span class="comment">//DC is up &amp; running, we can safely connect with ldap_connect<br />    </span><span class="keyword">}<br />}<br /><br />function </span><span class="default">ldap_connect_failover</span><span class="keyword">(</span><span class="default">$_domain</span><span class="keyword">) {<br /></span><span class="comment">// ##### STATIC DC LIST, if your DNS round robin is not setup<br />//$dclist = array('10.111.222.111', '10.111.222.100', '10.111.222.200');<br />// ##### DYNAMIC DC LIST, reverse DNS lookup sorted by round-robin result<br />    </span><span class="default">$dclist </span><span class="keyword">= </span><span class="default">gethostbynamel</span><span class="keyword">(</span><span class="default">$_domain</span><span class="keyword">);<br /><br />    foreach (</span><span class="default">$dclist </span><span class="keyword">as </span><span class="default">$dc</span><span class="keyword">) {<br />        if (</span><span class="default">serviceping</span><span class="keyword">(</span><span class="default">$dc</span><span class="keyword">) == </span><span class="default">true</span><span class="keyword">) {<br />            break;<br />        } else {<br />            </span><span class="default">$dc </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />        }<br />    }<br /></span><span class="comment">//after this loop, either there will be at least one DC which is available at present, or $dc would return bool false while the next line stops program from further execution<br /><br />    </span><span class="keyword">if (!</span><span class="default">$dc</span><span class="keyword">) {<br />        return </span><span class="default">false</span><span class="keyword">;<br />    } </span><span class="comment">//user being notified<br /><br />    </span><span class="keyword">return </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$dc</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116524">  <div class="votes">
    <div id="Vu116524">
    <a href="/manual/vote-note.php?id=116524&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116524">
    <a href="/manual/vote-note.php?id=116524&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116524" title="50% like this...">
    0
    </div>
  </div>
  <a href="#116524" class="name">
  <strong class="user"><em>TheThinkingMan</em></strong></a><a class="genanchor" href="#116524"> &para;</a><div class="date" title="2015-01-18 10:52"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116524">
<div class="phpcode"><code><span class="html">I have spent hours and hours trying to get an LDAPS connection happening with my local AD LDS instance (running on Windows 8.1 64bit).<br /><br />I tried certificate after certificate. OpenSSL, Thawte and Self-signed - all with no success.<br /><br />I ended up deleting all of my certificates and created a Self-signed certificate using IIS 7 (running on Windows 8.1).<br /><br />I then downloaded the Softerra LDAP browser and it was able to connect to my AD LDS instance via SSL with no problems.<br /><br />Sure if it could PHP could.<br /><br />I used the following code to connect: <br /><span class="default">&lt;?php<br />$ldap_server </span><span class="keyword">= </span><span class="string">"ldaps://delllappy:636"</span><span class="keyword">;<br /></span><span class="default">$ldap_conn </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldap_server</span><span class="keyword">)  or die(</span><span class="string">"Failed to connect to LDAP server."</span><span class="keyword">); <br /></span><span class="default">?&gt;<br /></span>I added the following above the ldap_connect:<br /><span class="default">&lt;?php<br />putenv</span><span class="keyword">(</span><span class="string">'LDAPTLS_REQCERT=allow'</span><span class="keyword">);<br /></span><span class="default">putenv</span><span class="keyword">(</span><span class="string">"LDAPCONF=C:\OpenLDAP\sysconf\ldap.conf"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />That did nothing.<br /><br />The ldap_bind command I used was:<br /><span class="default">&lt;?php<br /></span><span class="keyword">if (!</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldap_conn</span><span class="keyword">, </span><span class="default">$ldap_user</span><span class="keyword">, </span><span class="default">$ldap_pass</span><span class="keyword">)) {<br />    echo </span><span class="string">"error"</span><span class="keyword">;<br />}else{<br />    echo </span><span class="string">"success"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span>BTW: I added a heap of debug in the code too - which is referenced elsewhere - so I didn't add it in here.<br /><br />The error that I kept on getting was:<br />Error Binding to LDAP: error:14090086:SSL routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed<br /><br />I then ran ProcMon (Process Monitor from Microsoft).<br /><br />I monitored when I restarted my web server (Z-WAMP). At that point there was no attempt to read ldap.conf.<br /><br />I then loaded up my web page with my test.php file. <br /><br />At that point I noticed that it was ldap.conf that was being read but openldap.conf.<br /><br />Of course as my file was called ldap.conf, openldap.conf failed. I renamed my ldap.conf to openldap.conf and everything worked.<br /><br />On Z-WAMP running OpenLDAP don't used ldap.conf, use openldap.conf.<br /><br />The openldap.conf file was placed in C:\openldap\sysconf\.<br /><br />As the PUTENV values did not do anything, I removed them.</span></code></div>
  </div>
 </div>
  <div class="note" id="109829">  <div class="votes">
    <div id="Vu109829">
    <a href="/manual/vote-note.php?id=109829&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109829">
    <a href="/manual/vote-note.php?id=109829&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109829" title="50% like this...">
    0
    </div>
  </div>
  <a href="#109829" class="name">
  <strong class="user"><em>ac dot russell at live dot com</em></strong></a><a class="genanchor" href="#109829"> &para;</a><div class="date" title="2012-08-24 06:47"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109829">
<div class="phpcode"><code><span class="html">In order to connect to an ldap server via ssl I needed to use a certificate. For this to work the ldap admin sent me a .der file which I put into /etc/openldap/cacerts. 
<br />    cp ldap-server.der /etc/openldap/cacerts
<br />That directory must be chmod 755. Then the following entries had to be in /etc/openldap/ldap.conf 
<br />
<br />    # Make the connection vulnerable to MITM-Attacks 
<br />    # by not checking any certificates
<br />    # For a better solution see <a href="https://andreas.heigl.org/2020/01/31/handle-self-signed-certificates-with-phps-ldap-extension/" rel="nofollow" target="_blank">https://andreas.heigl.org/2020/01/31/handle-self-signed-certificates-with-phps-ldap-extension/</a>
<br />    TLS_REQCERT   never  
<br />    TLS_CACERTDIR /etc/openldap/cacerts
<br />"TLS_REQCERT never" should only be required if there is a self-signed certificate in the certificate chain.</span></code></div>
  </div>
 </div>
  <div class="note" id="90303">  <div class="votes">
    <div id="Vu90303">
    <a href="/manual/vote-note.php?id=90303&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90303">
    <a href="/manual/vote-note.php?id=90303&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90303" title="50% like this...">
    0
    </div>
  </div>
  <a href="#90303" class="name">
  <strong class="user"><em>csnyder at fcny dot org</em></strong></a><a class="genanchor" href="#90303"> &para;</a><div class="date" title="2009-04-15 09:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90303">
<div class="phpcode"><code><span class="html">It bears repeating (and the examples should probably be updated) that ldap_connect() doesn't actually test the connection to the specified ldap server. This is important if you're trying to build failover into your ldap-based authentication routine.
<br />
<br />The only way to test the connection is to actually call ldap_bind( $ds, $username, $password ). But if that fails, is it because you have the wrong username/password or is it because the connection is down? As far as I can see there isn't any way to tell.
<br />
<br />It seems that if ldap_bind() fails against your primary server, you have no choice but to try ldap_bind() with the same credentials against the backup. And yet, if your organization limits failed login attempts, a single bad password counts as two failed login attempts. Not good.
<br />
<br />One possible workaround is to try an anonymous bind first:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">// connect to primary
<br /></span><span class="default">$ds </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">( </span><span class="string">'ldap://10.0.0.7/' </span><span class="keyword">);
<br /></span><span class="comment">// note: $ds is always a resource even if primary is down
<br />
<br />// try anonymous login to test connection
<br /></span><span class="default">$anon </span><span class="keyword">= @</span><span class="default">ldap_bind</span><span class="keyword">( </span><span class="default">$ds </span><span class="keyword">);
<br />if ( !</span><span class="default">$anon </span><span class="keyword">) {
<br />    </span><span class="comment">// test failed, connect to failover host
<br />    </span><span class="default">$ds </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">( </span><span class="string">'ldap://10.0.0.8/' </span><span class="keyword">);
<br />}
<br />else {
<br />    </span><span class="comment">// test passed, unbind anonymous and reconnect to primary
<br />    </span><span class="default">ldap_unbind</span><span class="keyword">( </span><span class="default">$ds </span><span class="keyword">);
<br />    </span><span class="default">$ds </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">( </span><span class="string">'ldap://10.0.0.7/' </span><span class="keyword">);
<br />}
<br />
<br /></span><span class="comment">// now try a real login
<br /></span><span class="default">$login </span><span class="keyword">= @</span><span class="default">ldap_bind</span><span class="keyword">( </span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$username</span><span class="keyword">, </span><span class="default">$password </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note that this workaround relies on anonymous login being enabled, which may not always be the case. It's a little sad that there is no other way to test the connection. Hopefully this can be remedied in some future implementation of ldap_connect().</span></code></div>
  </div>
 </div>
  <div class="note" id="82918">  <div class="votes">
    <div id="Vu82918">
    <a href="/manual/vote-note.php?id=82918&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82918">
    <a href="/manual/vote-note.php?id=82918&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82918" title="no votes...">
    0
    </div>
  </div>
  <a href="#82918" class="name">
  <strong class="user"><em>geigers at binghamton dot edu</em></strong></a><a class="genanchor" href="#82918"> &para;</a><div class="date" title="2008-05-01 01:04"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82918">
<div class="phpcode"><code><span class="html">If you have oci8 and are trying to use openldap for ldap you *may* run into a problem.  I have an Oracle database that I connect to from apache.  Oracle also has ldap libs which were taking precedence over the openldap libs.  This would cause a seg fault when calling ldap_connect with a uri style connect string; e.g. ldap_connect("ldaps://myldapserver.host");<br /><br />After using gdb to debug a core dump and a lot of googling I found that the solution was to add an env-var to apachectl startup.<br /><br />I am using Apache 2.2.8 with PHP 5.2.5 on RHEL.  I added:<br /><br />LD_PRELOAD=/path/to/libldap.so<br />export LD_PRELOAD<br /><br />in /usr/sbin/envvars which is read when apachectl starts.  You can read more on this here: <a href="http://www.mail-archive.com/php-bugs@lists.php.net/msg02201.html" rel="nofollow" target="_blank">http://www.mail-archive.com/php-bugs@lists.php.net/msg02201.html</a><br /><br />Scott Geiger</span></code></div>
  </div>
 </div>
  <div class="note" id="81427">  <div class="votes">
    <div id="Vu81427">
    <a href="/manual/vote-note.php?id=81427&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81427">
    <a href="/manual/vote-note.php?id=81427&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81427" title="50% like this...">
    0
    </div>
  </div>
  <a href="#81427" class="name">
  <strong class="user"><em>bleathem at gmail dot com</em></strong></a><a class="genanchor" href="#81427"> &para;</a><div class="date" title="2008-02-27 02:30"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81427">
<div class="phpcode"><code><span class="html">Everyone is posting about getting ldaps:// working in a WAMP/AD stack, I had a tough time finding how to get it going in RHEL 5.1 (w/ all stock rpms).  Good old strace did the trick and helped me find the problem...<br /><br />Turns out php was looking for the CA file in /etc/pki/CA, and I didn't have the correct permissions on the folder.  chmod'ing it to 755 solved my "Can't contact LDAP server" message.</span></code></div>
  </div>
 </div>
  <div class="note" id="75571">  <div class="votes">
    <div id="Vu75571">
    <a href="/manual/vote-note.php?id=75571&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75571">
    <a href="/manual/vote-note.php?id=75571&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75571" title="50% like this...">
    0
    </div>
  </div>
  <a href="#75571" class="name">
  <strong class="user"><em>andreas dot a dot sandberg at gmail dot com</em></strong></a><a class="genanchor" href="#75571"> &para;</a><div class="date" title="2007-06-05 05:28"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75571">
<div class="phpcode"><code><span class="html">Be careful when using ldap_connect with the sun client libraries that come bundled with solaris.   When specifyng the host with the ldap protocol, my connection failed and it took me a good day to trouble shoot.  ie. ldap_connect("ldap://somwhere.com");  Just remove the 'ldap://' and specify the host.   This was on Solaris 10 sparc.</span></code></div>
  </div>
 </div>
  <div class="note" id="73691">  <div class="votes">
    <div id="Vu73691">
    <a href="/manual/vote-note.php?id=73691&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73691">
    <a href="/manual/vote-note.php?id=73691&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73691" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73691" class="name">
  <strong class="user"><em>allie  at  lsu  dot  edu</em></strong></a><a class="genanchor" href="#73691"> &para;</a><div class="date" title="2007-03-06 02:23"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73691">
<div class="phpcode"><code><span class="html">I sure do wish there was some way I could get this information out to all programmers in the world about binding and searching MS AD.  This is the second time I was bit by the "I need to search the entire tree" problem.<br /><br />For php (and apache auth_ldap ) you need to specify port 3268 when you want to search the entire tree.  Otherwise it will spit out the partial results error.<br /><br />ldap_connect($server,3268);<br /><br />I'm just fortunate enough to have won this same battle with apache searching the whole directory.  When I noticed our php application failing auth's for users, I was immediately able to fix the problem by adding this port specification (and the ldap_set_option($ldapserver, LDAP_OPT_REFERRALS, 0)  option).<br /><br />I really hope this helps someone else before they pull all their hair out.  I know I miss mine.</span></code></div>
  </div>
 </div>
  <div class="note" id="69807">  <div class="votes">
    <div id="Vu69807">
    <a href="/manual/vote-note.php?id=69807&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69807">
    <a href="/manual/vote-note.php?id=69807&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69807" title="50% like this...">
    0
    </div>
  </div>
  <a href="#69807" class="name">
  <strong class="user"><em>elsint at yahoo dot com</em></strong></a><a class="genanchor" href="#69807"> &para;</a><div class="date" title="2006-09-21 01:48"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69807">
<div class="phpcode"><code><span class="html">Be careful about the certificate's permission if you are using Windows.<br /><br />Set certificates' permissions for everyone to Read and Read&amp;Execute or you may get binding errors because of this.</span></code></div>
  </div>
 </div>
  <div class="note" id="54082">  <div class="votes">
    <div id="Vu54082">
    <a href="/manual/vote-note.php?id=54082&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd54082">
    <a href="/manual/vote-note.php?id=54082&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V54082" title="50% like this...">
    0
    </div>
  </div>
  <a href="#54082" class="name">
  <strong class="user"><em>Srivathsa M</em></strong></a><a class="genanchor" href="#54082"> &para;</a><div class="date" title="2005-06-23 03:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom54082">
<div class="phpcode"><code><span class="html">Using LDAP over SSL on NetWare:<br /><br />1. Copy the server certificates to sys:/php5/cert directory. This location is configurable in php.ini file.<br /><br />2. Use "ldaps://" prefix for host name argument or a value of 636 for port number argument in ldap_connect call.<br /><br />For more details, visit, NetWare specific PHP documentation at <a href="http://developer.novell.com/ndk/doc/php/index.html" rel="nofollow" target="_blank">http://developer.novell.com/ndk/doc/php/index.html</a></span></code></div>
  </div>
 </div>
  <div class="note" id="52253">  <div class="votes">
    <div id="Vu52253">
    <a href="/manual/vote-note.php?id=52253&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52253">
    <a href="/manual/vote-note.php?id=52253&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52253" title="no votes...">
    0
    </div>
  </div>
  <a href="#52253" class="name">
  <strong class="user"><em>nigelf at esp dot co dot uk</em></strong></a><a class="genanchor" href="#52253"> &para;</a><div class="date" title="2005-04-26 03:58"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52253">
<div class="phpcode"><code><span class="html">As mentioned above, openLDAP will always return a resource, even if the server name isn't valid.  <br /><br />If you then bind with errors suppressed (@ldap_bind) and it fails, it's not obvious what caused the failure (ie: connection or credentials).  As the bind doesn't return a resource you can't get the last error from ldap_error etc. either.<br /><br />If you display just a message about login failure to the user they may get frustrated re-typing a valid username/password when it's the connection that's at fault.</span></code></div>
  </div>
 </div>
  <div class="note" id="74941">  <div class="votes">
    <div id="Vu74941">
    <a href="/manual/vote-note.php?id=74941&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74941">
    <a href="/manual/vote-note.php?id=74941&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74941" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#74941" class="name">
  <strong class="user"><em>vandervoord at planet dot nl</em></strong></a><a class="genanchor" href="#74941"> &para;</a><div class="date" title="2007-05-05 06:22"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74941">
<div class="phpcode"><code><span class="html">The previous note concerning searching the whole AD tree works fully. Though you must be sure that the server you're authenticating/searching is a Global Catalog server. If not, connecting and binding will fail. Usually there is at least one Global Catalog server in your domain, so if the connect fails try another server it will work. The reason it works is that the Global Catalog server searches the whole domain as where the domain catalog only searches a given OU, offcourse this opposes a security threat as well :)...</span></code></div>
  </div>
 </div>
  <div class="note" id="20984">  <div class="votes">
    <div id="Vu20984">
    <a href="/manual/vote-note.php?id=20984&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20984">
    <a href="/manual/vote-note.php?id=20984&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20984" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#20984" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#20984"> &para;</a><div class="date" title="2002-04-24 09:28"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20984">
<div class="phpcode"><code><span class="html">A resource ID is always returned when using URLs for the host parameter<br />even if the host does not exist.<br /><br />"When using an URI to describe the connection, the (open)ldap library<br />only parses the url and checks if it's valid, _no connection_ is<br />established in that case."<br />-mfischer@php.net<br /><a href="http://bugs.php.net/bug.php?id=15637" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=15637</a></span></code></div>
  </div>
 </div>
  <div class="note" id="93317">  <div class="votes">
    <div id="Vu93317">
    <a href="/manual/vote-note.php?id=93317&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93317">
    <a href="/manual/vote-note.php?id=93317&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93317" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#93317" class="name">
  <strong class="user"><em>mharting at micahtek dot com</em></strong></a><a class="genanchor" href="#93317"> &para;</a><div class="date" title="2009-09-02 01:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93317">
<div class="phpcode"><code><span class="html">An addition to trying to setup failover. After doing the ldap_connect, do the ldap_bind.  If ldap_bind fails, use the command ldap_errno to get the error number.  If the error number is 81, that represents the server is down.  That is the only time we do a failover to our backup ldap server.<br /><br />Another thing to consider is the error could be 49, then do<br />ldap_get_option($this-&gt;ds,LDAP_OPT_ERROR_NUMBER,$optErrorNumber);. This will return extended data and if the data code in that is 532 or 773, the bind failure will be caused by the password being expired and requiring a password update before the bind will succeed.</span></code></div>
  </div>
 </div>
  <div class="note" id="103372">  <div class="votes">
    <div id="Vu103372">
    <a href="/manual/vote-note.php?id=103372&amp;page=function.ldap-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103372">
    <a href="/manual/vote-note.php?id=103372&amp;page=function.ldap-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103372" title="25% like this...">
    -4
    </div>
  </div>
  <a href="#103372" class="name">
  <strong class="user"><em>verikono</em></strong></a><a class="genanchor" href="#103372"> &para;</a><div class="date" title="2011-04-11 01:33"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103372">
<div class="phpcode"><code><span class="html">PHP:LDAP does not support persistent connections.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-connect.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ldap.php">LDAP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ldap-8859-to-t61.php" title="ldap_&#8203;8859_&#8203;to_&#8203;t61">ldap_&#8203;8859_&#8203;to_&#8203;t61</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-add.php" title="ldap_&#8203;add">ldap_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-add-ext.php" title="ldap_&#8203;add_&#8203;ext">ldap_&#8203;add_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-bind.php" title="ldap_&#8203;bind">ldap_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-bind-ext.php" title="ldap_&#8203;bind_&#8203;ext">ldap_&#8203;bind_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-close.php" title="ldap_&#8203;close">ldap_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-compare.php" title="ldap_&#8203;compare">ldap_&#8203;compare</a>
                        </li>
                                                <li class="current">
                            <a href="function.ldap-connect.php" title="ldap_&#8203;connect">ldap_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-connect-wallet.php" title="ldap_&#8203;connect_&#8203;wallet">ldap_&#8203;connect_&#8203;wallet</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-count-entries.php" title="ldap_&#8203;count_&#8203;entries">ldap_&#8203;count_&#8203;entries</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-count-references.php" title="ldap_&#8203;count_&#8203;references">ldap_&#8203;count_&#8203;references</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-delete.php" title="ldap_&#8203;delete">ldap_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-delete-ext.php" title="ldap_&#8203;delete_&#8203;ext">ldap_&#8203;delete_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-dn2ufn.php" title="ldap_&#8203;dn2ufn">ldap_&#8203;dn2ufn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-err2str.php" title="ldap_&#8203;err2str">ldap_&#8203;err2str</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-errno.php" title="ldap_&#8203;errno">ldap_&#8203;errno</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-error.php" title="ldap_&#8203;error">ldap_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-escape.php" title="ldap_&#8203;escape">ldap_&#8203;escape</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop.php" title="ldap_&#8203;exop">ldap_&#8203;exop</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-passwd.php" title="ldap_&#8203;exop_&#8203;passwd">ldap_&#8203;exop_&#8203;passwd</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-refresh.php" title="ldap_&#8203;exop_&#8203;refresh">ldap_&#8203;exop_&#8203;refresh</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-sync.php" title="ldap_&#8203;exop_&#8203;sync">ldap_&#8203;exop_&#8203;sync</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-exop-whoami.php" title="ldap_&#8203;exop_&#8203;whoami">ldap_&#8203;exop_&#8203;whoami</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-explode-dn.php" title="ldap_&#8203;explode_&#8203;dn">ldap_&#8203;explode_&#8203;dn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-attribute.php" title="ldap_&#8203;first_&#8203;attribute">ldap_&#8203;first_&#8203;attribute</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-entry.php" title="ldap_&#8203;first_&#8203;entry">ldap_&#8203;first_&#8203;entry</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-first-reference.php" title="ldap_&#8203;first_&#8203;reference">ldap_&#8203;first_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-free-result.php" title="ldap_&#8203;free_&#8203;result">ldap_&#8203;free_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-attributes.php" title="ldap_&#8203;get_&#8203;attributes">ldap_&#8203;get_&#8203;attributes</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-dn.php" title="ldap_&#8203;get_&#8203;dn">ldap_&#8203;get_&#8203;dn</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-entries.php" title="ldap_&#8203;get_&#8203;entries">ldap_&#8203;get_&#8203;entries</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-option.php" title="ldap_&#8203;get_&#8203;option">ldap_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-values.php" title="ldap_&#8203;get_&#8203;values">ldap_&#8203;get_&#8203;values</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-get-values-len.php" title="ldap_&#8203;get_&#8203;values_&#8203;len">ldap_&#8203;get_&#8203;values_&#8203;len</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-list.php" title="ldap_&#8203;list">ldap_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-add.php" title="ldap_&#8203;mod_&#8203;add">ldap_&#8203;mod_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_add-ext.php" title="ldap_&#8203;mod_&#8203;add_&#8203;ext">ldap_&#8203;mod_&#8203;add_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-del.php" title="ldap_&#8203;mod_&#8203;del">ldap_&#8203;mod_&#8203;del</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_del-ext.php" title="ldap_&#8203;mod_&#8203;del_&#8203;ext">ldap_&#8203;mod_&#8203;del_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod-replace.php" title="ldap_&#8203;mod_&#8203;replace">ldap_&#8203;mod_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-mod_replace-ext.php" title="ldap_&#8203;mod_&#8203;replace_&#8203;ext">ldap_&#8203;mod_&#8203;replace_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-modify.php" title="ldap_&#8203;modify">ldap_&#8203;modify</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-modify-batch.php" title="ldap_&#8203;modify_&#8203;batch">ldap_&#8203;modify_&#8203;batch</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-attribute.php" title="ldap_&#8203;next_&#8203;attribute">ldap_&#8203;next_&#8203;attribute</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-entry.php" title="ldap_&#8203;next_&#8203;entry">ldap_&#8203;next_&#8203;entry</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-next-reference.php" title="ldap_&#8203;next_&#8203;reference">ldap_&#8203;next_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-exop.php" title="ldap_&#8203;parse_&#8203;exop">ldap_&#8203;parse_&#8203;exop</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-reference.php" title="ldap_&#8203;parse_&#8203;reference">ldap_&#8203;parse_&#8203;reference</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-parse-result.php" title="ldap_&#8203;parse_&#8203;result">ldap_&#8203;parse_&#8203;result</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-read.php" title="ldap_&#8203;read">ldap_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-rename.php" title="ldap_&#8203;rename">ldap_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-rename-ext.php" title="ldap_&#8203;rename_&#8203;ext">ldap_&#8203;rename_&#8203;ext</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sasl-bind.php" title="ldap_&#8203;sasl_&#8203;bind">ldap_&#8203;sasl_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-search.php" title="ldap_&#8203;search">ldap_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-option.php" title="ldap_&#8203;set_&#8203;option">ldap_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-rebind-proc.php" title="ldap_&#8203;set_&#8203;rebind_&#8203;proc">ldap_&#8203;set_&#8203;rebind_&#8203;proc</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sort.php" title="ldap_&#8203;sort">ldap_&#8203;sort</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-start-tls.php" title="ldap_&#8203;start_&#8203;tls">ldap_&#8203;start_&#8203;tls</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-t61-to-8859.php" title="ldap_&#8203;t61_&#8203;to_&#8203;8859">ldap_&#8203;t61_&#8203;to_&#8203;8859</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-unbind.php" title="ldap_&#8203;unbind">ldap_&#8203;unbind</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.ldap-control-paged-result.php" title="ldap_&#8203;control_&#8203;paged_&#8203;result">ldap_&#8203;control_&#8203;paged_&#8203;result</a>
                    </li>
                                    <li class="">
                        <a href="function.ldap-control-paged-result-response.php" title="ldap_&#8203;control_&#8203;paged_&#8203;result_&#8203;response">ldap_&#8203;control_&#8203;paged_&#8203;result_&#8203;response</a>
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
