<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_set_option - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-set-option.php">
 <link rel="shorturl" href="https://www.php.net/ldap-set-option">
 <link rel="alternate" href="https://www.php.net/ldap-set-option" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-search.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-set-rebind-proc.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-set-option.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-set-option.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-set-option.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-set-option.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-set-option.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-set-option.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-set-option.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-set-option.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-set-option.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-set-option.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-set-option.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Set the value of the given option" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_set_option - Manual" />
<meta name="twitter:description" content="Set the value of the given option" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_set_option - Manual" />
<meta itemprop="description" content="Set the value of the given option" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Set the value of the given option" />

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
        <a href="function.ldap-set-rebind-proc.php">
          ldap_set_rebind_proc &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-search.php">
          &laquo; ldap_search        </a>
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
            <option value='en/function.ldap-set-option.php' selected="selected">English</option>
            <option value='de/function.ldap-set-option.php'>German</option>
            <option value='es/function.ldap-set-option.php'>Spanish</option>
            <option value='fr/function.ldap-set-option.php'>French</option>
            <option value='it/function.ldap-set-option.php'>Italian</option>
            <option value='ja/function.ldap-set-option.php'>Japanese</option>
            <option value='pt_BR/function.ldap-set-option.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-set-option.php'>Russian</option>
            <option value='tr/function.ldap-set-option.php'>Turkish</option>
            <option value='uk/function.ldap-set-option.php'>Ukrainian</option>
            <option value='zh/function.ldap-set-option.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-set-option" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_set_option</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ldap_set_option</span> &mdash; <span class="dc-title">Set the value of the given option</span></p>

 </div>

  <div class="refsect1 description" id="refsect1-function.ldap-set-option-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_set_option</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.ldap-connection.php" class="type LDAP\Connection">LDAP\Connection</a></span></span> <code class="parameter">$ldap</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$option</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>|<span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Sets the value of the specified option to be <code class="parameter">value</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ldap-set-option-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">ldap</code></dt>
     <dd>
      <p class="para">
       Either an <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span> instance, returned by
       <span class="function"><a href="function.ldap-connect.php" class="function">ldap_connect()</a></span>, to set the option for that connection,
       or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> to set the option globally.
      </p>
     </dd>
    
    
     <dt><code class="parameter">option</code></dt>
     <dd>
      <p class="para">
       The parameter <code class="parameter">option</code> can be one of:
       <table class="doctable informaltable">
        
         <thead>
          <tr>
           <th>Option</th>
           <th>Type</th>
           <th>Available since</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-deref">LDAP_OPT_DEREF</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-sizelimit">LDAP_OPT_SIZELIMIT</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-timelimit">LDAP_OPT_TIMELIMIT</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-network-timeout">LDAP_OPT_NETWORK_TIMEOUT</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-protocol-version">LDAP_OPT_PROTOCOL_VERSION</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-error-number">LDAP_OPT_ERROR_NUMBER</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-referrals">LDAP_OPT_REFERRALS</a></code></strong></td>
           <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-restart">LDAP_OPT_RESTART</a></code></strong></td>
           <td><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-host-name">LDAP_OPT_HOST_NAME</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-error-string">LDAP_OPT_ERROR_STRING</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-diagnostic-message">LDAP_OPT_DIAGNOSTIC_MESSAGE</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-matched-dn">LDAP_OPT_MATCHED_DN</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-server-controls">LDAP_OPT_SERVER_CONTROLS</a></code></strong></td>
           <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-client-controls">LDAP_OPT_CLIENT_CONTROLS</a></code></strong></td>
           <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-keepalive-idle">LDAP_OPT_X_KEEPALIVE_IDLE</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-keepalive-probes">LDAP_OPT_X_KEEPALIVE_PROBES</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-keepalive-interval">LDAP_OPT_X_KEEPALIVE_INTERVAL</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-cacertdir">LDAP_OPT_X_TLS_CACERTDIR</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-cacertfile">LDAP_OPT_X_TLS_CACERTFILE</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-certfile">LDAP_OPT_X_TLS_CERTFILE</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-cipher-suite">LDAP_OPT_X_TLS_CIPHER_SUITE</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-crlcheck">LDAP_OPT_X_TLS_CRLCHECK</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-crlfile">LDAP_OPT_X_TLS_CRLFILE</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-dhfile">LDAP_OPT_X_TLS_DHFILE</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-keyfile">LDAP_OPT_X_TLS_KEYFILE</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-protocol-min">LDAP_OPT_X_TLS_PROTOCOL_MIN</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-random-file">LDAP_OPT_X_TLS_RANDOM_FILE</a></code></strong></td>
           <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
           <td>PHP 7.1.0</td>
          </tr>

          <tr>
           <td><strong><code><a href="ldap.constants.php#constant.ldap-opt-x-tls-require-cert">LDAP_OPT_X_TLS_REQUIRE_CERT</a></code></strong></td>
           <td><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></td>
           <td>PHP 7.0.5</td>
          </tr>

         </tbody>
        
       </table>

      </p>
      <p class="para">
       <strong><code><a href="ldap.constants.php#constant.ldap-opt-server-controls">LDAP_OPT_SERVER_CONTROLS</a></code></strong> and 
       <strong><code><a href="ldap.constants.php#constant.ldap-opt-client-controls">LDAP_OPT_CLIENT_CONTROLS</a></code></strong> require a list of
       controls, this means that the value must be an array of controls. A
       control consists of an <em>oid</em> identifying the control,
       an optional <em>value</em>, and an optional flag for
       <em>criticality</em>. In PHP a control is given by an
       array containing an element with the key <em>oid</em>
       and string value, and two optional elements. The optional
       elements are key <em>value</em> with string value
       and key <em>iscritical</em> with boolean value.
       <em>iscritical</em> defaults to <em><strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></em>
       if not supplied. See <a href="http://www.openldap.org/devel/cvsweb.cgi/~checkout~/doc/drafts/draft-ietf-ldapext-ldap-c-api-xx.txt" class="link external">&raquo;&nbsp;draft-ietf-ldapext-ldap-c-api-xx.txt</a>
       for details. See also the second example below.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
       All TLS options must be set globally before
       <span class="function"><a href="function.ldap-connect.php" class="function">ldap_connect()</a></span> for ldaps connection or
       for the connection before <span class="function"><a href="function.ldap-start-tls.php" class="function">ldap_start_tls()</a></span>.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The new value for the specified <code class="parameter">option</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ldap-set-option-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.ldap-set-option-changelog">
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
 <td>8.1.0</td>
 <td>
  The <code class="parameter">ldap</code> parameter expects an <span class="classname"><a href="class.ldap-connection.php" class="classname">LDAP\Connection</a></span>
  instance now; previously, a valid <code class="literal">ldap link</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.ldap-set-option-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4646">
    <p><strong>Example #1 Set protocol version</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// $ds is a valid LDAP\Connection instance for a directory server<br /></span><span style="color: #007700">if (</span><span style="color: #0000BB">ldap_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">LDAP_OPT_PROTOCOL_VERSION</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">)) {<br />    echo </span><span style="color: #DD0000">"Using LDAPv3"</span><span style="color: #007700">;<br />} else {<br />    echo </span><span style="color: #DD0000">"Failed to set protocol version to 3"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
   <div class="example" id="example-4647">
    <p><strong>Example #2 Set server controls</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// $ds is a valid LDAP\Connection instance for a directory server<br />// control with no value<br /></span><span style="color: #0000BB">$ctrl1 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"oid" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"1.2.752.58.10.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"iscritical" </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// iscritical defaults to FALSE<br /></span><span style="color: #0000BB">$ctrl2 </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"oid" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"1.2.752.58.1.10"</span><span style="color: #007700">, </span><span style="color: #DD0000">"value" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"magic"</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// try to set both controls<br /></span><span style="color: #007700">if (!</span><span style="color: #0000BB">ldap_set_option</span><span style="color: #007700">(</span><span style="color: #0000BB">$ds</span><span style="color: #007700">, </span><span style="color: #0000BB">LDAP_OPT_SERVER_CONTROLS</span><span style="color: #007700">, array(</span><span style="color: #0000BB">$ctrl1</span><span style="color: #007700">, </span><span style="color: #0000BB">$ctrl2</span><span style="color: #007700">))) {<br />    echo </span><span style="color: #DD0000">"Failed to set server controls"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 notes" id="refsect1-function.ldap-set-option-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    This function is only available when using OpenLDAP 2.x.x OR Netscape
    Directory SDK x.x.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ldap-set-option-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ldap-get-option.php" class="function" rel="rdfs-seeAlso">ldap_get_option()</a> - Get the current value for given option</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-set-option.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-set-option%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-set-option&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-set-option.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="19412">  <div class="votes">
    <div id="Vu19412">
    <a href="/manual/vote-note.php?id=19412&amp;page=function.ldap-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19412">
    <a href="/manual/vote-note.php?id=19412&amp;page=function.ldap-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19412" title="90% like this...">
    8
    </div>
  </div>
  <a href="#19412" class="name">
  <strong class="user"><em>soulbros at yahoo dot com</em></strong></a><a class="genanchor" href="#19412"> &para;</a><div class="date" title="2002-02-26 03:56"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19412">
<div class="phpcode"><code><span class="html">As john.hallam@compaq.com above mentioned ,one  has to set option LDAP_OPT_PROTOCOL_VERSION=3<br />ldap_set_option($ds,LDAP_OPT_PROTOCOL_VERSION,3);<br />to use the ldap_rename function.<br /><br />However, the ldap_set_option() line has to be written immediately after ldap_connect() and before ldap_bind() statements.<br /><br />Christos Soulios</span></code></div>
  </div>
 </div>
  <div class="note" id="127352">  <div class="votes">
    <div id="Vu127352">
    <a href="/manual/vote-note.php?id=127352&amp;page=function.ldap-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127352">
    <a href="/manual/vote-note.php?id=127352&amp;page=function.ldap-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127352" title="100% like this...">
    3
    </div>
  </div>
  <a href="#127352" class="name">
  <strong class="user"><em>php at richardneill dot org</em></strong></a><a class="genanchor" href="#127352"> &para;</a><div class="date" title="2022-07-27 05:41"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127352">
<div class="phpcode"><code><span class="html">If you want to disable the TLS cert check (e.g. because you are doing an SSH port-forward, and ldaps is pointing to localhost), then you must invoke:<br /><br />ldap_set_option(NULL, LDAP_OPT_X_TLS_REQUIRE_CERT,0)<br />*before* calling ldap_connect()<br /><br />If you try: <br /><br />$ds = ldap_connect(...)<br />ldap_set_option($ds, LDAP_OPT_X_TLS_REQUIRE_CERT,0)<br /><br />then the option won't actually take effect, and the certificate will be checked anyway, and a TLS failure will happen..</span></code></div>
  </div>
 </div>
  <div class="note" id="66457">  <div class="votes">
    <div id="Vu66457">
    <a href="/manual/vote-note.php?id=66457&amp;page=function.ldap-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd66457">
    <a href="/manual/vote-note.php?id=66457&amp;page=function.ldap-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V66457" title="70% like this...">
    7
    </div>
  </div>
  <a href="#66457" class="name">
  <strong class="user"><em>hansfn at gmail dot com</em></strong></a><a class="genanchor" href="#66457"> &para;</a><div class="date" title="2006-05-23 04:23"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom66457">
<div class="phpcode"><code><span class="html">Luckily you can turn on debugging before you open a connection:<br /><br />  ldap_set_option(NULL, LDAP_OPT_DEBUG_LEVEL, 7);<br /><br />This way you at least can see in the logs if the connection fails...</span></code></div>
  </div>
 </div>
  <div class="note" id="73721">  <div class="votes">
    <div id="Vu73721">
    <a href="/manual/vote-note.php?id=73721&amp;page=function.ldap-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73721">
    <a href="/manual/vote-note.php?id=73721&amp;page=function.ldap-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73721" title="100% like this...">
    2
    </div>
  </div>
  <a href="#73721" class="name">
  <strong class="user"><em>technosophos</em></strong></a><a class="genanchor" href="#73721"> &para;</a><div class="date" title="2007-03-07 02:00"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73721">
<div class="phpcode"><code><span class="html">The following flags are valid integer values for the LDAP_OPT_DEREF (as taken from the documentation for ldap_read()):<br /><br />LDAP_DEREF_NEVER (int 0) - (default) aliases are never dereferenced.<br /><br />LDAP_DEREF_SEARCHING (int 1) - aliases should be dereferenced during the search but not when locating the base object of the search.<br /><br />LDAP_DEREF_FINDING (int 2) - aliases should be dereferenced when locating the base object but not during the search.<br /><br />LDAP_DEREF_ALWAYS (int 3) - aliases should be dereferenced always.<br /><br />Example:<br /><span class="default">&lt;?php<br />ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_DEREF</span><span class="keyword">, </span><span class="default">LDAP_DEREF_ALWAYS</span><span class="keyword">);<br /></span><span class="default">?&gt;</span> <br /><br />These are defined in the draft C API (presumably from the original LDAP API). See draft-ietf-ldapext-ldap-c-api-xx.txt included in the OpenLDAP source code distribution.</span></code></div>
  </div>
 </div>
  <div class="note" id="124602">  <div class="votes">
    <div id="Vu124602">
    <a href="/manual/vote-note.php?id=124602&amp;page=function.ldap-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124602">
    <a href="/manual/vote-note.php?id=124602&amp;page=function.ldap-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124602" title="50% like this...">
    0
    </div>
  </div>
  <a href="#124602" class="name">
  <strong class="user"><em>Maarten at Aerobe</em></strong></a><a class="genanchor" href="#124602"> &para;</a><div class="date" title="2020-01-11 09:31"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124602">
<div class="phpcode"><code><span class="html">PHP 7.1 added support for configuring the LDAP CA/Cert environment directly, rather than relying on the environment variables. I noticed that a lot of people are having trouble getting this to work.<br /><br />The correct way is:<br />$ds=ldap_connect("ldap.google.com");  <br />ldap_set_option(NULL, LDAP_OPT_X_TLS_CERTFILE, "/path/file.crt");<br />ldap_set_option(NULL, LDAP_OPT_X_TLS_KEYFILE, "/path/file.key");<br />ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);<br />ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);<br />ldap_start_tls($ds);<br />...<br />ldap_close($ds);</span></code></div>
  </div>
 </div>
  <div class="note" id="113862">  <div class="votes">
    <div id="Vu113862">
    <a href="/manual/vote-note.php?id=113862&amp;page=function.ldap-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113862">
    <a href="/manual/vote-note.php?id=113862&amp;page=function.ldap-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113862" title="50% like this...">
    0
    </div>
  </div>
  <a href="#113862" class="name">
  <strong class="user"><em>badbo_5834 at hotmail dot com</em></strong></a><a class="genanchor" href="#113862"> &para;</a><div class="date" title="2013-12-10 08:02"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113862">
<div class="phpcode"><code><span class="html">I have the following code, but you do not rename the cn, that may be?<br /><br />    $TheDN = "cn=Nombre,ou=Addressbook,dc=axia-ldap,dc=net";<br />    $newRDN = "cn=bill";<br />    $newParent = "ou=Addressbook,dc=axia-ldap,dc=net";<br />    ldap_set_option($ds,LDAP_OPT_PROTOCOL_VERSION,3);<br />    $result = ldap_rename($ds, $TheDN, $newRDN, $newParent, TRUE);</span></code></div>
  </div>
 </div>
  <div class="note" id="18577">  <div class="votes">
    <div id="Vu18577">
    <a href="/manual/vote-note.php?id=18577&amp;page=function.ldap-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd18577">
    <a href="/manual/vote-note.php?id=18577&amp;page=function.ldap-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V18577" title="50% like this...">
    0
    </div>
  </div>
  <a href="#18577" class="name">
  <strong class="user"><em>john dot hallam at compaq dot com</em></strong></a><a class="genanchor" href="#18577"> &para;</a><div class="date" title="2002-01-28 10:00"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom18577">
<div class="phpcode"><code><span class="html">To get this to work I had to set the LDAP version to 3 using ldap_set_option. Here is an example that might help:<br /><br />$TheDN = "cn=john smith,ou=users,dc=acme,dc=com";<br />$newRDN = "cn=bill brown";<br />$newParent = "ou=users,dc=acme,dc=com";<br />ldap_set_option($ds,LDAP_OPT_PROTOCOL_VERSION,3);<br />@$result = ldap_rename($ds, $TheDN, $newRDN, $newParent, TRUE);</span></code></div>
  </div>
 </div>
  <div class="note" id="58311">  <div class="votes">
    <div id="Vu58311">
    <a href="/manual/vote-note.php?id=58311&amp;page=function.ldap-set-option&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58311">
    <a href="/manual/vote-note.php?id=58311&amp;page=function.ldap-set-option&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58311" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#58311" class="name">
  <strong class="user"><em>minusf at gmail dot com</em></strong></a><a class="genanchor" href="#58311"> &para;</a><div class="date" title="2005-10-31 01:59"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58311">
<div class="phpcode"><code><span class="html">it seems that ldap_set_option returns 1 for bogus ldap_connect -ions also.<br />ldap_connect always returns a resource (documented in the<br />comments of ldap_connect) so it is not possible to check if the<br />ldap server is there or alive or what.  and because ldap_set_option<br />must be between ldap_connect and ldap_bind, there seems to<br />be no sense in checking the return value.<br /><br />it is a bit strange that ldap_bind is the first function which can<br />really check if a ldap resource is usable because it is the third<br />function in line to use when working with openldap.<br /><br /><span class="default">&lt;?php<br />$connect </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="string">"whatever"</span><span class="keyword">);<br /></span><span class="default">$set </span><span class="keyword">= </span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$connect</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">$set</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-set-option&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-set-option.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
