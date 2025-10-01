<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_mod_replace - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-mod-replace.php">
 <link rel="shorturl" href="https://www.php.net/ldap-mod-replace">
 <link rel="alternate" href="https://www.php.net/ldap-mod-replace" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-mod_del-ext.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-mod_replace-ext.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-mod-replace.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-mod-replace.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-mod-replace.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-mod-replace.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-mod-replace.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-mod-replace.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-mod-replace.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-mod-replace.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-mod-replace.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-mod-replace.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-mod-replace.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Replace attribute values with new ones" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_mod_replace - Manual" />
<meta name="twitter:description" content="Replace attribute values with new ones" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_mod_replace - Manual" />
<meta itemprop="description" content="Replace attribute values with new ones" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Replace attribute values with new ones" />

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
        <a href="function.ldap-mod_replace-ext.php">
          ldap_mod_replace_ext &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-mod_del-ext.php">
          &laquo; ldap_mod_del_ext        </a>
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
            <option value='en/function.ldap-mod-replace.php' selected="selected">English</option>
            <option value='de/function.ldap-mod-replace.php'>German</option>
            <option value='es/function.ldap-mod-replace.php'>Spanish</option>
            <option value='fr/function.ldap-mod-replace.php'>French</option>
            <option value='it/function.ldap-mod-replace.php'>Italian</option>
            <option value='ja/function.ldap-mod-replace.php'>Japanese</option>
            <option value='pt_BR/function.ldap-mod-replace.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-mod-replace.php'>Russian</option>
            <option value='tr/function.ldap-mod-replace.php'>Turkish</option>
            <option value='uk/function.ldap-mod-replace.php'>Ukrainian</option>
            <option value='zh/function.ldap-mod-replace.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-mod-replace" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_mod_replace</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ldap_mod_replace</span> &mdash; <span class="dc-title">Replace attribute values with new ones</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ldap-mod-replace-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_mod_replace</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.ldap-connection.php" class="type LDAP\Connection">LDAP\Connection</a></span> <code class="parameter">$ldap</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$dn</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$entry</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.array.php" class="type array">array</a></span></span> <code class="parameter">$controls</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span><br>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Replaces one or more attributes from the specified <code class="parameter">dn</code>.
   It may also add or remove attributes.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ldap-mod-replace-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ldap</code></dt>
     <dd>
      <p class="para">
       An <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span> instance, returned by <span class="function"><a href="function.ldap-connect.php" class="function">ldap_connect()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">dn</code></dt>
     <dd>
      <p class="para">
       The distinguished name of an LDAP entity.
      </p>
     </dd>
    
    
     <dt><code class="parameter">entry</code></dt>
     <dd>
      <p class="para">
       An associative array listing the attributes to replace. Sending an empty array as value will remove the attribute, while sending an attribute not existing yet on this entry will add it.
      </p>
     </dd>
    
    
     <dt><code class="parameter">controls</code></dt>
     <dd>
      <p class="para">
       Array of <a href="ldap.controls.php" class="link">LDAP Controls</a> to send with the request.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ldap-mod-replace-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ldap-mod-replace-changelog">
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
 <td>8.1.0</td>
 <td>
  The <code class="parameter">ldap</code> parameter expects an <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span>
  instance now; previously, a valid <code class="literal">ldap link</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

      <tr>
 <td>8.0.0</td>
 <td>
  <code class="parameter">controls</code> is nullable now; previously, it defaulted to <code class="literal">[]</code>.
 </td>
</tr>

      <tr>
       <td>7.3.0</td>
       <td>
        Support for <code class="parameter">controls</code> added
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.ldap-mod-replace-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">This function is
binary-safe.</span></p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ldap-mod-replace-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ldap-mod_replace-ext.php" class="function" rel="rdfs-seeAlso">ldap_mod_replace_ext()</a> - Replace attribute values with new ones</span></li>
    <li><span class="function"><a href="function.ldap-mod-del.php" class="function" rel="rdfs-seeAlso">ldap_mod_del()</a> - Delete attribute values from current attributes</span></li>
    <li><span class="function"><a href="function.ldap-mod-add.php" class="function" rel="rdfs-seeAlso">ldap_mod_add()</a> - Add attribute values to current attributes</span></li>
    <li><span class="function"><a href="function.ldap-modify-batch.php" class="function" rel="rdfs-seeAlso">ldap_modify_batch()</a> - Batch and execute modifications on an LDAP entry</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-mod-replace.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-mod-replace%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-mod-replace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-mod-replace.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">14 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="77885">  <div class="votes">
    <div id="Vu77885">
    <a href="/manual/vote-note.php?id=77885&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77885">
    <a href="/manual/vote-note.php?id=77885&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77885" title="77% like this...">
    10
    </div>
  </div>
  <a href="#77885" class="name">
  <strong class="user"><em>chris at mr2madness dot com</em></strong></a><a class="genanchor" href="#77885"> &para;</a><div class="date" title="2007-09-18 07:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77885">
<div class="phpcode"><code><span class="html">You can use arrays for multiple attributes example:
<br />
<br /><span class="default">&lt;?php
<br />$entry</span><span class="keyword">[</span><span class="default">mail</span><span class="keyword">] = array(</span><span class="string">"example@example.com"</span><span class="keyword">,</span><span class="string">"example2@example.com"</span><span class="keyword">);
<br /></span><span class="default">$results </span><span class="keyword">= </span><span class="default">ldap_mod_add</span><span class="keyword">(</span><span class="default">$ldapConnID</span><span class="keyword">,</span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$entry</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>or as i did for creating anew user:
<br /><span class="default">&lt;?php
<br />$adduserAD</span><span class="keyword">[</span><span class="string">"objectClass"</span><span class="keyword">] = array(</span><span class="string">"top"</span><span class="keyword">,</span><span class="string">"person"</span><span class="keyword">,</span><span class="string">"organizationalPerson"</span><span class="keyword">,</span><span class="string">"user"</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="15191">  <div class="votes">
    <div id="Vu15191">
    <a href="/manual/vote-note.php?id=15191&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd15191">
    <a href="/manual/vote-note.php?id=15191&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V15191" title="75% like this...">
    4
    </div>
  </div>
  <a href="#15191" class="name">
  <strong class="user"><em>JoshuaStarr at aelana dot com</em></strong></a><a class="genanchor" href="#15191"> &para;</a><div class="date" title="2001-08-30 11:28"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom15191">
<div class="phpcode"><code><span class="html">To modify an attribute with a single value: 
<br />  $entry[mail] = "newmail@aelana.com"; 
<br />  $results = ldap_mod_add($ldapConnID,$dn, $entry); 
<br />
<br />To modify an attribute with multiple values: 
<br />  $entry[mail][] = "newmail@aelana.com"; 
<br />  $entry[mail][] = "altnewmail@aelana.com"; 
<br />  $results = ldap_mod_add($ldapConnID,$dn, $entry);
<br />
<br />To modify multiple attributes
<br />  $entry[mail][] = "newmail@aelana.com"; 
<br />  $entry[mail][] = "altnewmail@aelana.com"; 
<br />  $entry[c]      = "US";
<br />  $results = ldap_mod_add($ldapConnID,$dn, $entry);</span></code></div>
  </div>
 </div>
  <div class="note" id="108887">  <div class="votes">
    <div id="Vu108887">
    <a href="/manual/vote-note.php?id=108887&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108887">
    <a href="/manual/vote-note.php?id=108887&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108887" title="60% like this...">
    1
    </div>
  </div>
  <a href="#108887" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#108887"> &para;</a><div class="date" title="2012-06-01 08:32"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108887">
<div class="phpcode"><code><span class="html">this can not be used to change a password on an AD server that requires you to send the old and new password.<br /><br />in order to do this use on shuts an sever make an admin-account that allows to change other ppl pw without suppling the old password first.</span></code></div>
  </div>
 </div>
  <div class="note" id="111392">  <div class="votes">
    <div id="Vu111392">
    <a href="/manual/vote-note.php?id=111392&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd111392">
    <a href="/manual/vote-note.php?id=111392&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V111392" title="52% like this...">
    1
    </div>
  </div>
  <a href="#111392" class="name">
  <strong class="user"><em>dynamik</em></strong></a><a class="genanchor" href="#111392"> &para;</a><div class="date" title="2013-02-15 06:11"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom111392">
<div class="phpcode"><code><span class="html">Using this function to 'replace' an Active Directory password requires the "Reset Password" security permission as opposed to the "Change Password" permission (which is assigned by default to SELF)</span></code></div>
  </div>
 </div>
  <div class="note" id="43081">  <div class="votes">
    <div id="Vu43081">
    <a href="/manual/vote-note.php?id=43081&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43081">
    <a href="/manual/vote-note.php?id=43081&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43081" title="52% like this...">
    1
    </div>
  </div>
  <a href="#43081" class="name">
  <strong class="user"><em>frederic dot jacquot at insa-lyon dot fr</em></strong></a><a class="genanchor" href="#43081"> &para;</a><div class="date" title="2004-06-09 04:26"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43081">
<div class="phpcode"><code><span class="html">Changing a user password in Active Directory.<br />Securely connect (using ldaps) to the Active Directory and bind using an administrator account.<br /><br />In this example, $userDn contains the dn of the user I want to modify, and $ad is the Active Directory ldaps connection)<br /><br />$newPassword = "MyPassword";<br />$newPassword = "\"" . $newPassword . "\"";<br />$len = strlen($newPassword);<br />for ($i = 0; $i &lt; $len; $i++)<br />        $newPassw .= "{$newPassword{$i}}\000";<br />$newPassword = $newPassw;<br />$userdata["unicodepwd"] = $newPassword;<br />$result = ldap_mod_replace($ad, $userDn, $userdata);<br />if ($result) echo "User modified!" ;<br />else echo "There was a problem!";<br /><br />I found it hard to get a proper encoding for the unicodepwd attribute so this piece of code might help you ;-)</span></code></div>
  </div>
 </div>
  <div class="note" id="19384">  <div class="votes">
    <div id="Vu19384">
    <a href="/manual/vote-note.php?id=19384&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19384">
    <a href="/manual/vote-note.php?id=19384&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19384" title="100% like this...">
    1
    </div>
  </div>
  <a href="#19384" class="name">
  <strong class="user"><em>ondrej at sury dot cz</em></strong></a><a class="genanchor" href="#19384"> &para;</a><div class="date" title="2002-02-26 05:31"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19384">
<div class="phpcode"><code><span class="html">in openldap 2.0.x you can use method with mod_del/mod_add only if the attribute have defined EQUALITY rule.</span></code></div>
  </div>
 </div>
  <div class="note" id="86046">  <div class="votes">
    <div id="Vu86046">
    <a href="/manual/vote-note.php?id=86046&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd86046">
    <a href="/manual/vote-note.php?id=86046&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V86046" title="50% like this...">
    0
    </div>
  </div>
  <a href="#86046" class="name">
  <strong class="user"><em>plex909</em></strong></a><a class="genanchor" href="#86046"> &para;</a><div class="date" title="2008-09-30 03:23"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom86046">
<div class="phpcode"><code><span class="html">Here's an easy way to encode AD "unicodepwd" values from linux... 
<br />
<br />Download and install recode... 
<br /><a href="http://www.gnu.org/software/recode/recode.html" rel="nofollow" target="_blank">http://www.gnu.org/software/recode/recode.html</a>
<br />
<br />Then write something like this...
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">ADUnicodePwdValue</span><span class="keyword">(</span><span class="default">$plain_txt_value</span><span class="keyword">)
<br />{
<br />    return </span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">""</span><span class="keyword">, </span><span class="default">shell_exec</span><span class="keyword">(</span><span class="string">"echo -n '\"" </span><span class="keyword">. </span><span class="default">$plain_txt_value </span><span class="keyword">. </span><span class="string">"\"' | recode latin1..utf-16le/base64"</span><span class="keyword">));
<br />}
<br />
<br /></span><span class="default">$user</span><span class="keyword">[</span><span class="string">"unicodepwd"</span><span class="keyword">] = </span><span class="default">ADUnicodePwdValue</span><span class="keyword">(</span><span class="string">"my_password"</span><span class="keyword">);
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />[EDITOR thiago NOTE: The following text was sent by boyvanderlaak at gmail dot com as an important complement]
<br />
<br />if you do not have access to your linux box but have Multibyte String enabled you could try the following for AD 2008:
<br />
<br /><span class="default">&lt;?php
<br />$info</span><span class="keyword">[</span><span class="string">"unicodePwd"</span><span class="keyword">] = </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="string">'"' </span><span class="keyword">. </span><span class="default">$newPassword </span><span class="keyword">. </span><span class="string">'"'</span><span class="keyword">, </span><span class="string">'utf-16le'</span><span class="keyword">);
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76566">  <div class="votes">
    <div id="Vu76566">
    <a href="/manual/vote-note.php?id=76566&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76566">
    <a href="/manual/vote-note.php?id=76566&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76566" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76566" class="name">
  <strong class="user"><em>mike dot rosile at interzonegames dot com</em></strong></a><a class="genanchor" href="#76566"> &para;</a><div class="date" title="2007-07-20 09:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76566">
<div class="phpcode"><code><span class="html">Here is some great information from the OpenLDAP FAQs regarding changing a userPassword attribute with PHP:<br /><br /><a href="http://www.openldap.org/faq/data/cache/347.html" rel="nofollow" target="_blank">http://www.openldap.org/faq/data/cache/347.html</a><br /><br />$userpassword = "{SHA}" . base64_encode( pack( "H*", sha1( $pass ) ) );</span></code></div>
  </div>
 </div>
  <div class="note" id="9902">  <div class="votes">
    <div id="Vu9902">
    <a href="/manual/vote-note.php?id=9902&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9902">
    <a href="/manual/vote-note.php?id=9902&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9902" title="50% like this...">
    0
    </div>
  </div>
  <a href="#9902" class="name">
  <strong class="user"><em>oyvindmo at initio dot no</em></strong></a><a class="genanchor" href="#9902"> &para;</a><div class="date" title="2000-11-30 04:57"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9902">
<div class="phpcode"><code><span class="html">ldap_mod_replace() and ldap_modify() are _exactly_ the same.  So, the comment that ldap_mod_replace() "performs the modification at the attribute level as opposed to the object level", has no root in reality.</span></code></div>
  </div>
 </div>
  <div class="note" id="71517">  <div class="votes">
    <div id="Vu71517">
    <a href="/manual/vote-note.php?id=71517&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71517">
    <a href="/manual/vote-note.php?id=71517&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71517" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#71517" class="name">
  <strong class="user"><em>aaronfulton at softhome dot net</em></strong></a><a class="genanchor" href="#71517"> &para;</a><div class="date" title="2006-12-03 08:24"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71517">
<div class="phpcode"><code><span class="html">Before you modify values in your ldap directory, first make sure that you have permission to do so.  In openldap adding the following acl in slap.conf will allow the user to modify their own userpassword.<br /><br />access to attr=userPassword<br />        by self write<br />        by anonymous auth<br />        by * none</span></code></div>
  </div>
 </div>
  <div class="note" id="9636">  <div class="votes">
    <div id="Vu9636">
    <a href="/manual/vote-note.php?id=9636&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9636">
    <a href="/manual/vote-note.php?id=9636&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9636" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#9636" class="name">
  <strong class="user"><em>yife at myrice-ltd dot com</em></strong></a><a class="genanchor" href="#9636"> &para;</a><div class="date" title="2000-11-16 01:57"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9636">
<div class="phpcode"><code><span class="html">if i want to replace the special attribute but i don't replace other attribute ,i just use "ldap_mod_del" and "ldap_mod_add" ,the function seems to that</span></code></div>
  </div>
 </div>
  <div class="note" id="70136">  <div class="votes">
    <div id="Vu70136">
    <a href="/manual/vote-note.php?id=70136&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd70136">
    <a href="/manual/vote-note.php?id=70136&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V70136" title="45% like this...">
    -2
    </div>
  </div>
  <a href="#70136" class="name">
  <strong class="user"><em>erwann at zeflip dot com</em></strong></a><a class="genanchor" href="#70136"> &para;</a><div class="date" title="2006-10-04 10:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom70136">
<div class="phpcode"><code><span class="html">If you do not wish to set up SSL on your active directory, and you are running on Windows, you can use COM and ADSI to set the new password for a user, or to active a user:<br /><br /><span class="default">&lt;?PHP<br /></span><span class="comment">// to set a user password<br />  // server is the ldap server<br />  // newuser_dn is the full dn of the user you want to modify<br />  // newuser_password is the password you wish to set for the user<br /><br />    </span><span class="default">$ADSI </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"LDAP:"</span><span class="keyword">);<br />    </span><span class="default">$user </span><span class="keyword">= </span><span class="default">$ADSI</span><span class="keyword">-&gt;</span><span class="default">OpenDSObject</span><span class="keyword">(</span><span class="string">"LDAP://"</span><span class="keyword">.</span><span class="default">$server</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$newuser_dn</span><span class="keyword">, </span><span class="default">$adminuser</span><span class="keyword">, </span><span class="default">$adminpassword</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">SetPassword</span><span class="keyword">(</span><span class="default">$newuser_password</span><span class="keyword">);<br />    </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">SetInfo</span><span class="keyword">();<br /><br /></span><span class="comment">// to activate a user<br />    </span><span class="default">$ADSI </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">"LDAP:"</span><span class="keyword">);<br />    </span><span class="default">$user </span><span class="keyword">= </span><span class="default">$ADSI</span><span class="keyword">-&gt;</span><span class="default">OpenDSObject</span><span class="keyword">(</span><span class="string">"LDAP://"</span><span class="keyword">.</span><span class="default">$server</span><span class="keyword">.</span><span class="string">"/"</span><span class="keyword">.</span><span class="default">$newuser_dn</span><span class="keyword">, </span><span class="default">$adminuser</span><span class="keyword">, </span><span class="default">$adminpassword</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">AccountDisabled </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$user</span><span class="keyword">-&gt;</span><span class="default">SetInfo</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124772">  <div class="votes">
    <div id="Vu124772">
    <a href="/manual/vote-note.php?id=124772&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124772">
    <a href="/manual/vote-note.php?id=124772&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124772" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#124772" class="name">
  <strong class="user"><em>giodev at panozzo dot it</em></strong></a><a class="genanchor" href="#124772"> &para;</a><div class="date" title="2020-02-27 07:50"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124772">
<div class="phpcode"><code><span class="html">An bettter method to create the unicodePwd Active Directory LDAP field from PHP is:<br /><br />$unicodePwd = iconv("UTF-8", "UTF-16LE", "\"".$password."\"");<br /><br />It works when $password is coming from a UTF-8 page. If your $password is not utf-8, change the 1st parameter of iconv.</span></code></div>
  </div>
 </div>
  <div class="note" id="23470">  <div class="votes">
    <div id="Vu23470">
    <a href="/manual/vote-note.php?id=23470&amp;page=function.ldap-mod-replace&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23470">
    <a href="/manual/vote-note.php?id=23470&amp;page=function.ldap-mod-replace&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23470" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#23470" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#23470"> &para;</a><div class="date" title="2002-07-18 11:32"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23470">
<div class="phpcode"><code><span class="html">Sometime,we cannot replace ldap_mod_replace  function  with ldap_mod_del function and ldap_mod_add fuction .We  don't have permission to delete an attribute but  we can replace it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-mod-replace&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-mod-replace.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
