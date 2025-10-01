<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: LDAP Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="shorturl" href="https://www.php.net/ldap">
 <link rel="alternate" href="https://www.php.net/ldap" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/ldap.examples-controls.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-8859-to-t61.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.ldap.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.ldap.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.ldap.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.ldap.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.ldap.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.ldap.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.ldap.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.ldap.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.ldap.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.ldap.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.ldap.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="LDAP Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: LDAP Functions - Manual" />
<meta name="twitter:description" content="LDAP Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: LDAP Functions - Manual" />
<meta itemprop="description" content="LDAP Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="LDAP Functions" />

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
        <a href="function.ldap-8859-to-t61.php">
          ldap_8859_to_t61 &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ldap.examples-controls.php">
          &laquo; LDAP Controls        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ldap.php'>LDAP</a></li>      </ul>
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
            <option value='en/ref.ldap.php' selected="selected">English</option>
            <option value='de/ref.ldap.php'>German</option>
            <option value='es/ref.ldap.php'>Spanish</option>
            <option value='fr/ref.ldap.php'>French</option>
            <option value='it/ref.ldap.php'>Italian</option>
            <option value='ja/ref.ldap.php'>Japanese</option>
            <option value='pt_BR/ref.ldap.php'>Brazilian Portuguese</option>
            <option value='ru/ref.ldap.php'>Russian</option>
            <option value='tr/ref.ldap.php'>Turkish</option>
            <option value='uk/ref.ldap.php'>Ukrainian</option>
            <option value='zh/ref.ldap.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.ldap" class="reference">
 <h1 class="title">LDAP Functions</h1>
 













































 





 









































































































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.ldap-8859-to-t61.php">ldap_8859_to_t61</a> — Translate 8859 characters to t61 characters</li><li><a href="function.ldap-add.php">ldap_add</a> — Add entries to LDAP directory</li><li><a href="function.ldap-add-ext.php">ldap_add_ext</a> — Add entries to LDAP directory</li><li><a href="function.ldap-bind.php">ldap_bind</a> — Bind to LDAP directory</li><li><a href="function.ldap-bind-ext.php">ldap_bind_ext</a> — Bind to LDAP directory</li><li><a href="function.ldap-close.php">ldap_close</a> — Alias of ldap_unbind</li><li><a href="function.ldap-compare.php">ldap_compare</a> — Compare value of attribute found in entry specified with DN</li><li><a href="function.ldap-connect.php">ldap_connect</a> — Connect to an LDAP server</li><li><a href="function.ldap-connect-wallet.php">ldap_connect_wallet</a> — Connect to an LDAP server</li><li><a href="function.ldap-control-paged-result.php">ldap_control_paged_result</a> — Send LDAP pagination control</li><li><a href="function.ldap-control-paged-result-response.php">ldap_control_paged_result_response</a> — Retrieve the LDAP pagination cookie</li><li><a href="function.ldap-count-entries.php">ldap_count_entries</a> — Count the number of entries in a search</li><li><a href="function.ldap-count-references.php">ldap_count_references</a> — Counts the number of references in a search result</li><li><a href="function.ldap-delete.php">ldap_delete</a> — Delete an entry from a directory</li><li><a href="function.ldap-delete-ext.php">ldap_delete_ext</a> — Delete an entry from a directory</li><li><a href="function.ldap-dn2ufn.php">ldap_dn2ufn</a> — Convert DN to User Friendly Naming format</li><li><a href="function.ldap-err2str.php">ldap_err2str</a> — Convert LDAP error number into string error message</li><li><a href="function.ldap-errno.php">ldap_errno</a> — Return the LDAP error number of the last LDAP command</li><li><a href="function.ldap-error.php">ldap_error</a> — Return the LDAP error message of the last LDAP command</li><li><a href="function.ldap-escape.php">ldap_escape</a> — Escape a string for use in an LDAP filter or DN</li><li><a href="function.ldap-exop.php">ldap_exop</a> — Performs an extended operation</li><li><a href="function.ldap-exop-passwd.php">ldap_exop_passwd</a> — PASSWD extended operation helper</li><li><a href="function.ldap-exop-refresh.php">ldap_exop_refresh</a> — Refresh extended operation helper</li><li><a href="function.ldap-exop-sync.php">ldap_exop_sync</a> — Performs an extended operation</li><li><a href="function.ldap-exop-whoami.php">ldap_exop_whoami</a> — WHOAMI extended operation helper</li><li><a href="function.ldap-explode-dn.php">ldap_explode_dn</a> — Splits DN into its component parts</li><li><a href="function.ldap-first-attribute.php">ldap_first_attribute</a> — Return first attribute</li><li><a href="function.ldap-first-entry.php">ldap_first_entry</a> — Return first result id</li><li><a href="function.ldap-first-reference.php">ldap_first_reference</a> — Return first reference</li><li><a href="function.ldap-free-result.php">ldap_free_result</a> — Free result memory</li><li><a href="function.ldap-get-attributes.php">ldap_get_attributes</a> — Get attributes from a search result entry</li><li><a href="function.ldap-get-dn.php">ldap_get_dn</a> — Get the DN of a result entry</li><li><a href="function.ldap-get-entries.php">ldap_get_entries</a> — Get all result entries</li><li><a href="function.ldap-get-option.php">ldap_get_option</a> — Get the current value for given option</li><li><a href="function.ldap-get-values.php">ldap_get_values</a> — Get all values from a result entry</li><li><a href="function.ldap-get-values-len.php">ldap_get_values_len</a> — Get all binary values from a result entry</li><li><a href="function.ldap-list.php">ldap_list</a> — Single-level search</li><li><a href="function.ldap-mod-add.php">ldap_mod_add</a> — Add attribute values to current attributes</li><li><a href="function.ldap-mod_add-ext.php">ldap_mod_add_ext</a> — Add attribute values to current attributes</li><li><a href="function.ldap-mod-del.php">ldap_mod_del</a> — Delete attribute values from current attributes</li><li><a href="function.ldap-mod_del-ext.php">ldap_mod_del_ext</a> — Delete attribute values from current attributes</li><li><a href="function.ldap-mod-replace.php">ldap_mod_replace</a> — Replace attribute values with new ones</li><li><a href="function.ldap-mod_replace-ext.php">ldap_mod_replace_ext</a> — Replace attribute values with new ones</li><li><a href="function.ldap-modify.php">ldap_modify</a> — Alias of ldap_mod_replace</li><li><a href="function.ldap-modify-batch.php">ldap_modify_batch</a> — Batch and execute modifications on an LDAP entry</li><li><a href="function.ldap-next-attribute.php">ldap_next_attribute</a> — Get the next attribute in result</li><li><a href="function.ldap-next-entry.php">ldap_next_entry</a> — Get next result entry</li><li><a href="function.ldap-next-reference.php">ldap_next_reference</a> — Get next reference</li><li><a href="function.ldap-parse-exop.php">ldap_parse_exop</a> — Parse result object from an LDAP extended operation</li><li><a href="function.ldap-parse-reference.php">ldap_parse_reference</a> — Extract information from reference entry</li><li><a href="function.ldap-parse-result.php">ldap_parse_result</a> — Extract information from result</li><li><a href="function.ldap-read.php">ldap_read</a> — Read an entry</li><li><a href="function.ldap-rename.php">ldap_rename</a> — Modify the name of an entry</li><li><a href="function.ldap-rename-ext.php">ldap_rename_ext</a> — Modify the name of an entry</li><li><a href="function.ldap-sasl-bind.php">ldap_sasl_bind</a> — Bind to LDAP directory using SASL</li><li><a href="function.ldap-search.php">ldap_search</a> — Search LDAP tree</li><li><a href="function.ldap-set-option.php">ldap_set_option</a> — Set the value of the given option</li><li><a href="function.ldap-set-rebind-proc.php">ldap_set_rebind_proc</a> — Set a callback function to do re-binds on referral chasing</li><li><a href="function.ldap-sort.php">ldap_sort</a> — Sort LDAP result entries on the client side</li><li><a href="function.ldap-start-tls.php">ldap_start_tls</a> — Start TLS</li><li><a href="function.ldap-t61-to-8859.php">ldap_t61_to_8859</a> — Translate t61 characters to 8859 characters</li><li><a href="function.ldap-unbind.php">ldap_unbind</a> — Unbind from LDAP directory</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.ldap%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.ldap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.ldap.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">34 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99347">  <div class="votes">
    <div id="Vu99347">
    <a href="/manual/vote-note.php?id=99347&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99347">
    <a href="/manual/vote-note.php?id=99347&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99347" title="60% like this...">
    24
    </div>
  </div>
  <a href="#99347" class="name">
  <strong class="user"><em>idbobby at rambler dot ru</em></strong></a><a class="genanchor" href="#99347"> &para;</a><div class="date" title="2010-08-12 02:26"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99347">
<div class="phpcode"><code><span class="html">First of all, sorry for my English.<br />Here are two functions to check group membership and some others which can be useful for work with LDAP (Active Directory in this example).<br /><br />index.php<br />---------<br /><br /><span class="default">&lt;?php<br /><br />$user </span><span class="keyword">= </span><span class="string">'bob'</span><span class="keyword">;<br /></span><span class="default">$password </span><span class="keyword">= </span><span class="string">'zhlob'</span><span class="keyword">;<br /></span><span class="default">$host </span><span class="keyword">= </span><span class="string">'myldap'</span><span class="keyword">;<br /></span><span class="default">$domain </span><span class="keyword">= </span><span class="string">'mydomain.ex'</span><span class="keyword">;<br /></span><span class="default">$basedn </span><span class="keyword">= </span><span class="string">'dc=mydomain,dc=ex'</span><span class="keyword">;<br /></span><span class="default">$group </span><span class="keyword">= </span><span class="string">'SomeGroup'</span><span class="keyword">;<br /><br /></span><span class="default">$ad </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="string">"ldap://</span><span class="keyword">{</span><span class="default">$host</span><span class="keyword">}</span><span class="string">.</span><span class="keyword">{</span><span class="default">$domain</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">) or die(</span><span class="string">'Could not connect to LDAP server.'</span><span class="keyword">);<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />@</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="string">"</span><span class="keyword">{</span><span class="default">$user</span><span class="keyword">}</span><span class="string">@</span><span class="keyword">{</span><span class="default">$domain</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">) or die(</span><span class="string">'Could not bind to AD.'</span><span class="keyword">);<br /></span><span class="default">$userdn </span><span class="keyword">= </span><span class="default">getDN</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$basedn</span><span class="keyword">);<br />if (</span><span class="default">checkGroupEx</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$userdn</span><span class="keyword">, </span><span class="default">getDN</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$group</span><span class="keyword">, </span><span class="default">$basedn</span><span class="keyword">))) {<br /></span><span class="comment">//if (checkGroup($ad, $userdn, getDN($ad, $group, $basedn))) {<br />    </span><span class="keyword">echo </span><span class="string">"You're authorized as "</span><span class="keyword">.</span><span class="default">getCN</span><span class="keyword">(</span><span class="default">$userdn</span><span class="keyword">);<br />} else {<br />    echo </span><span class="string">'Authorization failed'</span><span class="keyword">;<br />}<br /></span><span class="default">ldap_unbind</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br />* This function searchs in LDAP tree ($ad -LDAP link identifier)<br />* entry specified by samaccountname and returns its DN or epmty<br />* string on failure.<br />*/<br /></span><span class="keyword">function </span><span class="default">getDN</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$samaccountname</span><span class="keyword">, </span><span class="default">$basedn</span><span class="keyword">) {<br />    </span><span class="default">$attributes </span><span class="keyword">= array(</span><span class="string">'dn'</span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$basedn</span><span class="keyword">,<br />        </span><span class="string">"(samaccountname=</span><span class="keyword">{</span><span class="default">$samaccountname</span><span class="keyword">}</span><span class="string">)"</span><span class="keyword">, </span><span class="default">$attributes</span><span class="keyword">);<br />    if (</span><span class="default">$result </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">) { return </span><span class="string">''</span><span class="keyword">; }<br />    </span><span class="default">$entries </span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br />    if (</span><span class="default">$entries</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">]&gt;</span><span class="default">0</span><span class="keyword">) { return </span><span class="default">$entries</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'dn'</span><span class="keyword">]; }<br />    else { return </span><span class="string">''</span><span class="keyword">; };<br />}<br /><br /></span><span class="comment">/*<br />* This function retrieves and returns CN from given DN<br />*/<br /></span><span class="keyword">function </span><span class="default">getCN</span><span class="keyword">(</span><span class="default">$dn</span><span class="keyword">) {<br />    </span><span class="default">preg_match</span><span class="keyword">(</span><span class="string">'/[^,]*/'</span><span class="keyword">, </span><span class="default">$dn</span><span class="keyword">, </span><span class="default">$matchs</span><span class="keyword">, </span><span class="default">PREG_OFFSET_CAPTURE</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br />    return </span><span class="default">$matchs</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br />}<br /><br /></span><span class="comment">/*<br />* This function checks group membership of the user, searching only<br />* in specified group (not recursively).<br />*/<br /></span><span class="keyword">function </span><span class="default">checkGroup</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$userdn</span><span class="keyword">, </span><span class="default">$groupdn</span><span class="keyword">) {<br />    </span><span class="default">$attributes </span><span class="keyword">= array(</span><span class="string">'members'</span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">ldap_read</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$userdn</span><span class="keyword">, </span><span class="string">"(memberof=</span><span class="keyword">{</span><span class="default">$groupdn</span><span class="keyword">}</span><span class="string">)"</span><span class="keyword">, </span><span class="default">$attributes</span><span class="keyword">);<br />    if (</span><span class="default">$result </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">) { return </span><span class="default">FALSE</span><span class="keyword">; };<br />    </span><span class="default">$entries </span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br />    return (</span><span class="default">$entries</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">] &gt; </span><span class="default">0</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/*<br />* This function checks group membership of the user, searching<br />* in specified group and groups which is its members (recursively).<br />*/<br /></span><span class="keyword">function </span><span class="default">checkGroupEx</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$userdn</span><span class="keyword">, </span><span class="default">$groupdn</span><span class="keyword">) {<br />    </span><span class="default">$attributes </span><span class="keyword">= array(</span><span class="string">'memberof'</span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="default">ldap_read</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$userdn</span><span class="keyword">, </span><span class="string">'(objectclass=*)'</span><span class="keyword">, </span><span class="default">$attributes</span><span class="keyword">);<br />    if (</span><span class="default">$result </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">) { return </span><span class="default">FALSE</span><span class="keyword">; };<br />    </span><span class="default">$entries </span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$result</span><span class="keyword">);<br />    if (</span><span class="default">$entries</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">] &lt;= </span><span class="default">0</span><span class="keyword">) { return </span><span class="default">FALSE</span><span class="keyword">; };<br />    if (empty(</span><span class="default">$entries</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'memberof'</span><span class="keyword">])) { return </span><span class="default">FALSE</span><span class="keyword">; } else {<br />        for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$entries</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'memberof'</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++) {<br />            if (</span><span class="default">$entries</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'memberof'</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">] == </span><span class="default">$groupdn</span><span class="keyword">) { return </span><span class="default">TRUE</span><span class="keyword">; }<br />            elseif (</span><span class="default">checkGroupEx</span><span class="keyword">(</span><span class="default">$ad</span><span class="keyword">, </span><span class="default">$entries</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'memberof'</span><span class="keyword">][</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$groupdn</span><span class="keyword">)) { return </span><span class="default">TRUE</span><span class="keyword">; };<br />        };<br />    };<br />    return </span><span class="default">FALSE</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116606">  <div class="votes">
    <div id="Vu116606">
    <a href="/manual/vote-note.php?id=116606&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116606">
    <a href="/manual/vote-note.php?id=116606&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116606" title="64% like this...">
    9
    </div>
  </div>
  <a href="#116606" class="name">
  <strong class="user"><em>oscar dot php at linaresdigital dot com</em></strong></a><a class="genanchor" href="#116606"> &para;</a><div class="date" title="2015-01-28 11:47"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116606">
<div class="phpcode"><code><span class="html">There is a lot of confusion about accountExpires, pwdLastSet, lastLogon and badPasswordTime active directory fields.<br /><br />All of them are using "Interval" date/time format with a value that represents the number of 100-nanosecond intervals since January 1, 1601 (UTC, and a value of 0 or 0x7FFFFFFFFFFFFFFF, 9223372036854775807, indicates that the account never expires): <a href="https://msdn.microsoft.com/en-us/library/ms675098(v=vs.85" rel="nofollow" target="_blank">https://msdn.microsoft.com/en-us/library/ms675098(v=vs.85</a>).aspx<br /><br />So if you need to translate it from/to UNIX timestamp you can easily calculate the difference with:<br /><br /><span class="default">&lt;?php<br />$datetime1 </span><span class="keyword">= new </span><span class="default">DateTime</span><span class="keyword">(</span><span class="string">'1601-01-01'</span><span class="keyword">);<br /></span><span class="default">$datetime2 </span><span class="keyword">= new </span><span class="default">DateTime</span><span class="keyword">(</span><span class="string">'1970-01-01'</span><span class="keyword">);<br /></span><span class="default">$interval </span><span class="keyword">= </span><span class="default">$datetime1</span><span class="keyword">-&gt;</span><span class="default">diff</span><span class="keyword">(</span><span class="default">$datetime2</span><span class="keyword">);<br />echo (</span><span class="default">$interval</span><span class="keyword">-&gt;</span><span class="default">days </span><span class="keyword">* </span><span class="default">24 </span><span class="keyword">* </span><span class="default">60 </span><span class="keyword">* </span><span class="default">60</span><span class="keyword">) . </span><span class="string">" seconds\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />The difference between both dates is 11644473600 seconds. Don't rely on floating point calculations nor other numbers that probably were calculated badly (including time zone or something similar).<br /><br />Now you can convert from LDAP field:<br /><br /><span class="default">&lt;?php<br />$lastlogon </span><span class="keyword">= </span><span class="default">$info</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">'lastlogon'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">];<br /></span><span class="comment">// divide by 10.000.000 to get seconds from 100-nanosecond intervals<br /></span><span class="default">$winInterval </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">$lastlogon </span><span class="keyword">/ </span><span class="default">10000000</span><span class="keyword">);<br /></span><span class="comment">// substract seconds from 1601-01-01 -&gt; 1970-01-01<br /></span><span class="default">$unixTimestamp </span><span class="keyword">= (</span><span class="default">$winInterval </span><span class="keyword">- </span><span class="default">11644473600</span><span class="keyword">);<br /></span><span class="comment">// show date/time in local time zone<br /></span><span class="keyword">echo </span><span class="default">date</span><span class="keyword">(</span><span class="string">"Y-m-d H:i:s"</span><span class="keyword">, </span><span class="default">$unixTimestamp</span><span class="keyword">) .</span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Hope it helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="73191">  <div class="votes">
    <div id="Vu73191">
    <a href="/manual/vote-note.php?id=73191&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73191">
    <a href="/manual/vote-note.php?id=73191&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73191" title="71% like this...">
    3
    </div>
  </div>
  <a href="#73191" class="name">
  <strong class="user"><em>maykelsb at yahoo dot com dot br</em></strong></a><a class="genanchor" href="#73191"> &para;</a><div class="date" title="2007-02-12 11:27"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73191">
<div class="phpcode"><code><span class="html">Problems with ldap_search in W2k3, can be solved adding <br /><br />// -- $conn is a valid ldap connection.<br /><br />ldap_set_option($conn, LDAP_OPT_PROTOCOL_VERSION,3);<br />ldap_set_option($conn, LDAP_OPT_REFERRALS,0);<br /><br />before ldap_bind, as sad in <a href="http://bugs.php.net/bug.php?id=30670." rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=30670.</a></span></code></div>
  </div>
 </div>
  <div class="note" id="67955">  <div class="votes">
    <div id="Vu67955">
    <a href="/manual/vote-note.php?id=67955&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67955">
    <a href="/manual/vote-note.php?id=67955&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67955" title="71% like this...">
    3
    </div>
  </div>
  <a href="#67955" class="name">
  <strong class="user"><em>gcathell at thetdgroup dot com</em></strong></a><a class="genanchor" href="#67955"> &para;</a><div class="date" title="2006-07-07 09:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67955">
<div class="phpcode"><code><span class="html">I recently had to access a Microsoft Active Directory server as an LDAP service over SSL using PHP.  It took me a long time to get all the information I needed to get it to work.<br /><br />I attempted to post a note here with the details but it ended it being too long.  I've placed the details at the following URL in hopes that someone else will benefit and will be able to solve the problem much more quickly than I did.<br /><br /><a href="http://greg.cathell.net/php_ldap_ssl.html" rel="nofollow" target="_blank">http://greg.cathell.net/php_ldap_ssl.html</a><br /><br />Good luck!</span></code></div>
  </div>
 </div>
  <div class="note" id="46984">  <div class="votes">
    <div id="Vu46984">
    <a href="/manual/vote-note.php?id=46984&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46984">
    <a href="/manual/vote-note.php?id=46984&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46984" title="66% like this...">
    4
    </div>
  </div>
  <a href="#46984" class="name">
  <strong class="user"><em>spam2004 at turniton dot dk</em></strong></a><a class="genanchor" href="#46984"> &para;</a><div class="date" title="2004-10-29 05:36"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46984">
<div class="phpcode"><code><span class="html">Here are two small functions that enables you to convert a binary objectSID from Microsoft AD into a more usefull text version (formatted (S-1-5.....)).<br /><br />// Converts a little-endian hex-number to one, that 'hexdec' can convert<br />function littleEndian($hex) {<br />    for ($x=strlen($hex)-2; $x &gt;= 0; $x=$x-2) {<br />        $result .= substr($hex,$x,2);<br />    }<br />    return $result;<br />}<br /><br />// Returns the textual SID<br />function binSIDtoText($binsid) {<br />    $hex_sid=bin2hex($binsid);<br />    $rev = hexdec(substr($hex_sid,0,2));          // Get revision-part of SID<br />    $subcount = hexdec(substr($hex_sid,2,2));    // Get count of sub-auth entries<br />    $auth = hexdec(substr($hex_sid,4,12));      // SECURITY_NT_AUTHORITY<br />    $result = "$rev-$auth";<br />    for ($x=0;$x &lt; $subcount; $x++) {<br />        $subauth[$x] = hexdec(littleEndian(substr($hex_sid,16+($x*8),8)));  // get all SECURITY_NT_AUTHORITY<br />        $result .= "-".$subauth[$x];<br />    }<br />    return $result;<br />}<br /><br />echo binSIDtoText($bin_sid);</span></code></div>
  </div>
 </div>
  <div class="note" id="120020">  <div class="votes">
    <div id="Vu120020">
    <a href="/manual/vote-note.php?id=120020&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120020">
    <a href="/manual/vote-note.php?id=120020&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120020" title="61% like this...">
    3
    </div>
  </div>
  <a href="#120020" class="name">
  <strong class="user"><em>llurovi at gmail dot com</em></strong></a><a class="genanchor" href="#120020"> &para;</a><div class="date" title="2016-10-11 10:12"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120020">
<div class="phpcode"><code><span class="html">For those of you that are having trouble when user's password has special characters, make sure you decode the string to an appropiate codification. For instance, I had an issue where some users could not logging properly into our web app.<br /><br />Example of a simple connection:<br /><br /><span class="default">&lt;?php<br /><br />$ldap_ip </span><span class="keyword">= </span><span class="string">'LDAP-SERVER-IP'</span><span class="keyword">;<br /></span><span class="default">$ldap </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldap_ip</span><span class="keyword">);<br /><br /></span><span class="default">$user </span><span class="keyword">= </span><span class="string">'Test'</span><span class="keyword">;<br /></span><span class="default">$password </span><span class="keyword">= </span><span class="string">'otoño'</span><span class="keyword">; </span><span class="comment">//This password is correct but binding it with this format will give us an error<br /><br /></span><span class="default">$password </span><span class="keyword">= </span><span class="default">utf8_decode</span><span class="keyword">(</span><span class="default">$password</span><span class="keyword">); </span><span class="comment">//$password = otoxF1o<br /><br /></span><span class="default">$ldap_bind </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">); </span><span class="comment">//Now the binding is successfull and $ldap_bind = true<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="55262">  <div class="votes">
    <div id="Vu55262">
    <a href="/manual/vote-note.php?id=55262&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd55262">
    <a href="/manual/vote-note.php?id=55262&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V55262" title="66% like this...">
    1
    </div>
  </div>
  <a href="#55262" class="name">
  <strong class="user"><em>hijinio at comcast dot net</em></strong></a><a class="genanchor" href="#55262"> &para;</a><div class="date" title="2005-07-28 11:28"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom55262">
<div class="phpcode"><code><span class="html">In case anybody has trouble configuring PHP with LDAP support on a Solaris 10 box, here is the configure line I used:<br /><br />./configure --with-nsapi=/opt/SUNWwbsvr --enable-libgcc --disable-libxml --with-ldap=/usr/local --prefix=/opt/php/php-5.0.4<br /><br />The important part to note is the location used for --with-ldap= ; which for most S10 people, will be "--with-ldap=/usr/local".</span></code></div>
  </div>
 </div>
  <div class="note" id="48343">  <div class="votes">
    <div id="Vu48343">
    <a href="/manual/vote-note.php?id=48343&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48343">
    <a href="/manual/vote-note.php?id=48343&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48343" title="66% like this...">
    1
    </div>
  </div>
  <a href="#48343" class="name">
  <strong class="user"><em>Richie Bartlett(at)ITsystems-Online com</em></strong></a><a class="genanchor" href="#48343"> &para;</a><div class="date" title="2004-12-20 12:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48343">
<div class="phpcode"><code><span class="html">This is an update to &lt;i&gt;wtfo at technocraft dot com&lt;/i&gt; (23-May-2002 03:40)... This function allows additional (optional) parameters. The prev function listed, failed to close the ldap connection after successful authenication.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">checkNTuser</span><span class="keyword">(</span><span class="default">$username</span><span class="keyword">,</span><span class="default">$password</span><span class="keyword">,</span><span class="default">$DomainName</span><span class="keyword">=</span><span class="string">"myDomain"</span><span class="keyword">,<br />                      </span><span class="default">$ldap_server</span><span class="keyword">=</span><span class="string">"ldap://PDC.example.net"</span><span class="keyword">){</span><span class="comment">//v0.9<br />// returns true when user/pass enable bind to LDAP (Windows 2k).<br />    </span><span class="default">$auth_user</span><span class="keyword">=</span><span class="default">$username</span><span class="keyword">.</span><span class="string">"@"</span><span class="keyword">.</span><span class="default">$DomainName</span><span class="keyword">;<br />    </span><span class="comment">#echo $auth_user."-&gt;";<br />    </span><span class="keyword">if(</span><span class="default">$connect</span><span class="keyword">=@</span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldap_server</span><span class="keyword">)){<br />        </span><span class="comment">#echo "connection ($ldap_server): ";<br />        </span><span class="keyword">if(</span><span class="default">$bind</span><span class="keyword">=@</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$connect</span><span class="keyword">, </span><span class="default">$auth_user</span><span class="keyword">, </span><span class="default">$password</span><span class="keyword">)){<br />            </span><span class="comment">#echo "true &lt;BR&gt;";<br />            </span><span class="keyword">@</span><span class="default">ldap_close</span><span class="keyword">(</span><span class="default">$connect</span><span class="keyword">);<br />            return(</span><span class="default">true</span><span class="keyword">);<br />        }</span><span class="comment">//if bound to ldap<br />    </span><span class="keyword">}</span><span class="comment">//if connected to ldap<br />    #echo "failed &lt;BR&gt;";<br />    </span><span class="keyword">@</span><span class="default">ldap_close</span><span class="keyword">(</span><span class="default">$connect</span><span class="keyword">);<br />    return(</span><span class="default">false</span><span class="keyword">);<br />}</span><span class="comment">//end function checkNTuser<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40245">  <div class="votes">
    <div id="Vu40245">
    <a href="/manual/vote-note.php?id=40245&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40245">
    <a href="/manual/vote-note.php?id=40245&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40245" title="66% like this...">
    1
    </div>
  </div>
  <a href="#40245" class="name">
  <strong class="user"><em>ant at solace dot mh dot se</em></strong></a><a class="genanchor" href="#40245"> &para;</a><div class="date" title="2004-02-26 08:23"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40245">
<div class="phpcode"><code><span class="html">When working with LDAP, its worth remembering that the majority<br />of LDAP servers encode their strings as UTF-8. What this means<br />for non ascii strings is that you will need to use the utf8_encode and<br />utf8_decode functions when creating filters for the LDAP server.<br /><br />Of course, if you can its simpler to just avoid using non-ascii characters<br />but for most sites the users like to see their strange native character<br />sets including umlauts etc..<br /><br />If you just get ? characters where you are expecting non-ascii, then<br />you might just need to upgrade your PHP version.</span></code></div>
  </div>
 </div>
  <div class="note" id="57855">  <div class="votes">
    <div id="Vu57855">
    <a href="/manual/vote-note.php?id=57855&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57855">
    <a href="/manual/vote-note.php?id=57855&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57855" title="62% like this...">
    2
    </div>
  </div>
  <a href="#57855" class="name">
  <strong class="user"><em>christopherbyrne at hotmail dot com</em></strong></a><a class="genanchor" href="#57855"> &para;</a><div class="date" title="2005-10-16 04:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57855">
<div class="phpcode"><code><span class="html">For anyone who's been having trouble working with the "accountexpires" attribute in Active Directory after having read the following article <br /><br />www.microsoft.com/technet/scriptcenter/<br />resources/qanda/sept05/hey0902.mspx <br /><br />or something similar, this may save you some frustration. In the article is is mentioned that this attribute is an integer representing the number of nanoseconds since 01-Jan-1601 00:00:00.<br /><br />However the "accountexpires" attribute actually seems to be the number of 100 nanosecond increments since 31-Dec-1600 14:00:00. As a result if you divide the integer by 10,000,000 and subtract 11644560000 you will get a Unix timestamp that will match the dates in AD. <br /><br />To set the "accountexpires" date just reverse the procedure, that is, get the timestamp for the new date you want, add 11644560000 and multiply by 10,000,000. You will also need to format the resultant number to make sure it is not outputted in scientific notation for AD to be happy with it. <br /><br />Hope this helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="71687">  <div class="votes">
    <div id="Vu71687">
    <a href="/manual/vote-note.php?id=71687&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71687">
    <a href="/manual/vote-note.php?id=71687&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71687" title="60% like this...">
    2
    </div>
  </div>
  <a href="#71687" class="name">
  <strong class="user"><em>unroar at gmail dot com</em></strong></a><a class="genanchor" href="#71687"> &para;</a><div class="date" title="2006-12-11 05:33"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71687">
<div class="phpcode"><code><span class="html">In Solaris 9 the libnet library is a prerequisite for building  PHP with LDAP, SASL and SSL (libnet is available on Sunfreeware).  <br /><br />I didn't see this mentioned anywhere and I'm not sure if it is required by ldap or sasl or ssl.  I just spent an hour on Google with no luck before I figured it out, maybe this comment will help the next googler.<br /><br />The error is,<br />ld: fatal: library -lnet: not found<br />ld: fatal: File processing errors. No output written to sapi/cli/php<br />collect2: ld returned 1 exit status<br />make: *** [sapi/cli/php] Error 1</span></code></div>
  </div>
 </div>
  <div class="note" id="77553">  <div class="votes">
    <div id="Vu77553">
    <a href="/manual/vote-note.php?id=77553&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77553">
    <a href="/manual/vote-note.php?id=77553&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77553" title="60% like this...">
    1
    </div>
  </div>
  <a href="#77553" class="name">
  <strong class="user"><em>alex at netflex dot nl</em></strong></a><a class="genanchor" href="#77553"> &para;</a><div class="date" title="2007-09-03 06:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77553">
<div class="phpcode"><code><span class="html">If you want to use ldaps on windows but you don't want to validate the tls certificate try the following line before the ldap_connect call:<br /><br />putenv('LDAPTLS_REQCERT=never') or die('Failed to setup the env');</span></code></div>
  </div>
 </div>
  <div class="note" id="47427">  <div class="votes">
    <div id="Vu47427">
    <a href="/manual/vote-note.php?id=47427&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd47427">
    <a href="/manual/vote-note.php?id=47427&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V47427" title="58% like this...">
    2
    </div>
  </div>
  <a href="#47427" class="name">
  <strong class="user"><em>jabba at zeelandnet dot nl</em></strong></a><a class="genanchor" href="#47427"> &para;</a><div class="date" title="2004-11-15 11:51"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom47427">
<div class="phpcode"><code><span class="html">When using PHP on windows, and you are trying to connect (bind) to a Netware (6) LDAP server that requires secure connections (LDAPS), PHP will return a message stating that the server cannot be found.<br /> <br />A network traffic capture of the traffic taking place on connection attempt reveals that the server supplies a certificate for use in the SSL connection, but this is rejected (***bad certificate SSLv3 packet) by the client.<br /><br />The reason for this is probably that the PHP LDAP implementation tries to verify the received certificate with the CA that issued the certificate. There may be a way to make it possible that this verification succeeds, but it is also possible to disable this verification by the client (which is, in this case, PHP) by creating an openldap (surprise!!) configuration file. <br /><br />The location of this configuration file seems to be hardcoded in the LDAP support module for windows, and you may need to manually create the following directory structure:<br /><br />C:\openldap\sysconf\<br /><br />In the sysconf folder, create a text file named 'ldap.conf' (you can use notepad for this) and, to disable certificate verification, place the following line in the ldap.conf file:<br /><br />TLS_REQCERT never<br /><br />After this, all the normal ldap_bind calls will work, provided your supplied user id and password are correct.</span></code></div>
  </div>
 </div>
  <div class="note" id="42435">  <div class="votes">
    <div id="Vu42435">
    <a href="/manual/vote-note.php?id=42435&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42435">
    <a href="/manual/vote-note.php?id=42435&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42435" title="53% like this...">
    1
    </div>
  </div>
  <a href="#42435" class="name">
  <strong class="user"><em>Sami Oksanen</em></strong></a><a class="genanchor" href="#42435"> &para;</a><div class="date" title="2004-05-16 06:27"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42435">
<div class="phpcode"><code><span class="html">I edited Jon Caplinger's code which is located below (date: 09-Nov-2002 05:44).<br /><br /> - I corrected line<br />   "if (!($connect=@ldap_connect($ldap))) {" with<br />   "if (!($connect=@ldap_connect($ldap_server))) {"<br /><br /> - Removed $name-attribute<br /><br /> - "Name is:"-field was always an Array, so I changed printing line to:<br />   " echo "Name is: ". $info[$i]["name"][0]."&lt;br&gt;";"<br /><br />I also added some alternative search filters to try out.<br /><br />Here is the code:<br /><br /><span class="default">&lt;?php<br /><br />$ldap_server </span><span class="keyword">= </span><span class="string">"ldap://foo.bar.net"</span><span class="keyword">;<br /></span><span class="default">$auth_user </span><span class="keyword">= </span><span class="string">"user@bar.net"</span><span class="keyword">;<br /></span><span class="default">$auth_pass </span><span class="keyword">= </span><span class="string">"mypassword"</span><span class="keyword">;<br /><br /></span><span class="comment">// Set the base dn to search the entire directory.<br /><br /></span><span class="default">$base_dn </span><span class="keyword">= </span><span class="string">"DC=bar, DC=net"</span><span class="keyword">;<br /><br /></span><span class="comment">// Show only user persons<br /></span><span class="default">$filter </span><span class="keyword">= </span><span class="string">"(&amp;(objectClass=user)(objectCategory=person)(cn=*))"</span><span class="keyword">;<br /><br /></span><span class="comment">// Enable to show only users<br />// $filter = "(&amp;(objectClass=user)(cn=$*))";<br /><br />// Enable to show everything<br />// $filter = "(cn=*)";<br /><br />// connect to server<br /><br /></span><span class="keyword">if (!(</span><span class="default">$connect</span><span class="keyword">=@</span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldap_server</span><span class="keyword">))) {<br />     die(</span><span class="string">"Could not connect to ldap server"</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// bind to server<br /><br /></span><span class="keyword">if (!(</span><span class="default">$bind</span><span class="keyword">=@</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$connect</span><span class="keyword">, </span><span class="default">$auth_user</span><span class="keyword">, </span><span class="default">$auth_pass</span><span class="keyword">))) {<br />     die(</span><span class="string">"Unable to bind to server"</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">//if (!($bind=@ldap_bind($connect))) {<br />//     die("Unable to bind to server");<br />//}<br /><br />// search active directory<br /><br /></span><span class="keyword">if (!(</span><span class="default">$search</span><span class="keyword">=@</span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$connect</span><span class="keyword">, </span><span class="default">$base_dn</span><span class="keyword">, </span><span class="default">$filter</span><span class="keyword">))) {<br />     die(</span><span class="string">"Unable to search ldap server"</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$number_returned </span><span class="keyword">= </span><span class="default">ldap_count_entries</span><span class="keyword">(</span><span class="default">$connect</span><span class="keyword">,</span><span class="default">$search</span><span class="keyword">);<br /></span><span class="default">$info </span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$connect</span><span class="keyword">, </span><span class="default">$search</span><span class="keyword">);<br /><br />echo </span><span class="string">"The number of entries returned is "</span><span class="keyword">. </span><span class="default">$number_returned</span><span class="keyword">.</span><span class="string">"&lt;p&gt;"</span><span class="keyword">;<br /><br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$info</span><span class="keyword">[</span><span class="string">"count"</span><span class="keyword">]; </span><span class="default">$i</span><span class="keyword">++) {<br />   echo </span><span class="string">"Name is: "</span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">"name"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">].</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />   echo </span><span class="string">"Display name is: "</span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">"displayname"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">].</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />   echo </span><span class="string">"Email is: "</span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">"mail"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">].</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />   echo </span><span class="string">"Telephone number is: "</span><span class="keyword">. </span><span class="default">$info</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">][</span><span class="string">"telephonenumber"</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">].</span><span class="string">"&lt;p&gt;"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="82216">  <div class="votes">
    <div id="Vu82216">
    <a href="/manual/vote-note.php?id=82216&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82216">
    <a href="/manual/vote-note.php?id=82216&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82216" title="100% like this...">
    2
    </div>
  </div>
  <a href="#82216" class="name">
  <strong class="user"><em>ben_demott at hotmail dot com</em></strong></a><a class="genanchor" href="#82216"> &para;</a><div class="date" title="2008-04-01 06:54"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82216">
<div class="phpcode"><code><span class="html">For anyone that is a programmer and not extremely familiar with naming conventions in Microsoft Active Directory or how to find objects within the directory, or more importantly how to reference the objects.<br />Running "adsiedit.msc" from the command line will display all of your objects in the directory in an easy to read and copyable naming format.<br />Hope this is helpful!<br /><br />Note:<br />You must Run this command from an AD Domain Controller<br />You Must have the Windows Resource Kit Tools installed<br />(wouldn't let me make a link that long so I had to make a link break - Sorry!)<br />a <a href="http://www.microsoft.com/downloads/details.aspx" rel="nofollow" target="_blank">http://www.microsoft.com/downloads/details.aspx</a><br />?FamilyID=9d467a69-57ff-4ae7-96ee-b18c4790cffd&amp;displaylang=en<br /><br />Installing this tool should modify your system path so you can just type the command from the run dialogue, otherwise the absolute path is:<br />C:\Program Files\Windows Resource Kits\Tools\adsiedit.msc</span></code></div>
  </div>
 </div>
  <div class="note" id="59902">  <div class="votes">
    <div id="Vu59902">
    <a href="/manual/vote-note.php?id=59902&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59902">
    <a href="/manual/vote-note.php?id=59902&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59902" title="100% like this...">
    2
    </div>
  </div>
  <a href="#59902" class="name">
  <strong class="user"><em>nacenroe at remove dot this dot nystec dot com</em></strong></a><a class="genanchor" href="#59902"> &para;</a><div class="date" title="2005-12-19 12:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59902">
<div class="phpcode"><code><span class="html">If you're looking to use PHP to integrate LDAP with AD (I'm working with Win2K3), you may want to tinker with the LDP.exe tool included (no resource kit needed!!) with Win2k and Win2K3.  You can run this app right from the command line.<br /><br />The Win2K3 Help function was a good start point, and then pointed me to an article in the M$ KB: <a href="http://support.microsoft.com/default.aspx?scid=kb;en-us;255602" rel="nofollow" target="_blank">http://support.microsoft.com/default.aspx?scid=kb;en-us;255602</a> (XADM: Browsing and Querying Using the LDP Utility).<br /><br />So ... if your connect/bindings are working but your queries are not, you may want to start here.  I'm finding it very useful when I run it on the local AD to see the attributes, etc.</span></code></div>
  </div>
 </div>
  <div class="note" id="57860">  <div class="votes">
    <div id="Vu57860">
    <a href="/manual/vote-note.php?id=57860&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57860">
    <a href="/manual/vote-note.php?id=57860&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57860" title="100% like this...">
    2
    </div>
  </div>
  <a href="#57860" class="name">
  <strong class="user"><em>christopherbyrne at hotmail dot com</em></strong></a><a class="genanchor" href="#57860"> &para;</a><div class="date" title="2005-10-16 08:53"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57860">
<div class="phpcode"><code><span class="html">Just an ammendment to my previous post: my calculations were using east coast Australian time (GMT+10) whereas the Unix timestamp is in GMT. Therefore Active Directoy's "accountexpires" integer value does start from 1-Jan-1601 00:00:00 GMT and the number of seconds between this date and 1-Jan-1970 00:00:00 GMT is 11644524000. <br /><br />The increments are still definately in 100 nanoseconds though!</span></code></div>
  </div>
 </div>
  <div class="note" id="50840">  <div class="votes">
    <div id="Vu50840">
    <a href="/manual/vote-note.php?id=50840&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50840">
    <a href="/manual/vote-note.php?id=50840&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50840" title="100% like this...">
    2
    </div>
  </div>
  <a href="#50840" class="name">
  <strong class="user"><em>jpmens at gmail dot com</em></strong></a><a class="genanchor" href="#50840"> &para;</a><div class="date" title="2005-03-11 02:04"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50840">
<div class="phpcode"><code><span class="html">Further to jabba at zeelandnet dot nl's note. If you are trying to connect to an LDAPS URI with OpenLDAP, you can either create the configuration file as described by jabba, or alternatively, use the environment settings to set LDAPTLS_REQCERT=never as described in ldap.conf(5).</span></code></div>
  </div>
 </div>
  <div class="note" id="22486">  <div class="votes">
    <div id="Vu22486">
    <a href="/manual/vote-note.php?id=22486&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22486">
    <a href="/manual/vote-note.php?id=22486&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22486" title="100% like this...">
    2
    </div>
  </div>
  <a href="#22486" class="name">
  <strong class="user"><em>knitterb at blandsite dot org</em></strong></a><a class="genanchor" href="#22486"> &para;</a><div class="date" title="2002-06-19 08:48"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22486">
<div class="phpcode"><code><span class="html">When using PHP 4.2.1 with OpenLDAP 2.1.2 I was having problems with binding to the ldap server.  I found that php was using an older protocol and added the following to the slapd.conf:<br /><br />allow bind_v2<br /><br />See ``man slapd.conf'' for more info about the allow item in the slapd.conf file, this is all I know! :)</span></code></div>
  </div>
 </div>
  <div class="note" id="45929">  <div class="votes">
    <div id="Vu45929">
    <a href="/manual/vote-note.php?id=45929&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45929">
    <a href="/manual/vote-note.php?id=45929&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45929" title="100% like this...">
    1
    </div>
  </div>
  <a href="#45929" class="name">
  <strong class="user"><em>Jimmy Wimenta Oei</em></strong></a><a class="genanchor" href="#45929"> &para;</a><div class="date" title="2004-09-23 12:32"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45929">
<div class="phpcode"><code><span class="html">If you want to disable/enable chase referral option, you need to first set the protocol version to version 3, otherwise the LDAP_OPT_REFERRALS option will not have any effect. This is especially true for querying MS Active Directory.<br /><br /><span class="default">&lt;?php<br />ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />And as always, these should be called after connect but before binding.</span></code></div>
  </div>
 </div>
  <div class="note" id="108395">  <div class="votes">
    <div id="Vu108395">
    <a href="/manual/vote-note.php?id=108395&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108395">
    <a href="/manual/vote-note.php?id=108395&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108395" title="50% like this...">
    0
    </div>
  </div>
  <a href="#108395" class="name">
  <strong class="user"><em>Andrew Sharpe</em></strong></a><a class="genanchor" href="#108395"> &para;</a><div class="date" title="2012-04-23 06:04"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108395">
<div class="phpcode"><code><span class="html">To compile PHP 5.1.6 on RHEL 6.2 x86_64, add the following to your configure command:<br /><br />--with-libdir=lib64<br />--with-ldap=/usr</span></code></div>
  </div>
 </div>
  <div class="note" id="36367">  <div class="votes">
    <div id="Vu36367">
    <a href="/manual/vote-note.php?id=36367&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd36367">
    <a href="/manual/vote-note.php?id=36367&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V36367" title="100% like this...">
    1
    </div>
  </div>
  <a href="#36367" class="name">
  <strong class="user"><em>pookey at pookey dot co dot uk</em></strong></a><a class="genanchor" href="#36367"> &para;</a><div class="date" title="2003-10-07 01:57"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom36367">
<div class="phpcode"><code><span class="html">This is an example of how to query an LDAP server, and print all entries out.<br /><br /><span class="default">&lt;?php<br /><br />$ldapServer </span><span class="keyword">= </span><span class="string">'127.0.0.1'</span><span class="keyword">;<br /></span><span class="default">$ldapBase </span><span class="keyword">= </span><span class="string">'DC=anlx,DC=net'</span><span class="keyword">;<br /><br /></span><span class="comment">/*<br /> * try to connect to the server<br /> */<br /></span><span class="default">$ldapConn </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldapServer</span><span class="keyword">);<br />if (!</span><span class="default">$ldapConn</span><span class="keyword">)<br />{<br />  die(</span><span class="string">'Cannot Connect to LDAP server'</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/*<br /> * bind anonymously<br /> */<br /></span><span class="default">$ldapBind </span><span class="keyword">= </span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ldapConn</span><span class="keyword">);<br />if (!</span><span class="default">$ldapBind</span><span class="keyword">)<br />{<br />  die(</span><span class="string">'Cannot Bind to LDAP server'</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/*<br /> * set the ldap options<br /> */<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ldapConn</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br /> * search the LDAP server<br /> */<br /></span><span class="default">$ldapSearch </span><span class="keyword">= </span><span class="default">ldap_search</span><span class="keyword">(</span><span class="default">$ldapConn</span><span class="keyword">, </span><span class="default">$ldapBase</span><span class="keyword">, </span><span class="string">"(cn=*)"</span><span class="keyword">);<br /></span><span class="default">$ldapResults </span><span class="keyword">= </span><span class="default">ldap_get_entries</span><span class="keyword">(</span><span class="default">$ldapConn</span><span class="keyword">, </span><span class="default">$ldapSearch</span><span class="keyword">);<br /><br />for (</span><span class="default">$item </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$item </span><span class="keyword">&lt; </span><span class="default">$ldapResults</span><span class="keyword">[</span><span class="string">'count'</span><span class="keyword">]; </span><span class="default">$item</span><span class="keyword">++)<br />{<br />  for (</span><span class="default">$attribute </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$attribute </span><span class="keyword">&lt; </span><span class="default">$ldapResults</span><span class="keyword">[</span><span class="default">$item</span><span class="keyword">][</span><span class="string">'count'</span><span class="keyword">]; </span><span class="default">$attribute</span><span class="keyword">++)<br />  {<br />    </span><span class="default">$data </span><span class="keyword">= </span><span class="default">$ldapResults</span><span class="keyword">[</span><span class="default">$item</span><span class="keyword">][</span><span class="default">$attribute</span><span class="keyword">];<br />    echo </span><span class="default">$data</span><span class="keyword">.</span><span class="string">":&amp;nbsp;&amp;nbsp;"</span><span class="keyword">.</span><span class="default">$ldapResults</span><span class="keyword">[</span><span class="default">$item</span><span class="keyword">][</span><span class="default">$data</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">].</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br />  }<br />  echo </span><span class="string">'&lt;hr /&gt;'</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="32405">  <div class="votes">
    <div id="Vu32405">
    <a href="/manual/vote-note.php?id=32405&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32405">
    <a href="/manual/vote-note.php?id=32405&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32405" title="100% like this...">
    1
    </div>
  </div>
  <a href="#32405" class="name">
  <strong class="user"><em>greatsafari at hotmail dot com</em></strong></a><a class="genanchor" href="#32405"> &para;</a><div class="date" title="2003-05-26 11:01"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32405">
<div class="phpcode"><code><span class="html">Having seen so many variations of methods for connecting and query the Active Directory server, it really makes me suspect that the whole thing is dependent of the Active Directory configurations. Looking at this post at:<br /><br /><a href="http://www.phpbuilder.com/mail/php-general/2003022/1459.php" rel="nofollow" target="_blank">http://www.phpbuilder.com/mail/php-general/2003022/1459.php</a><br /><br />Some methods proven to be working in one instance failed at another instance.</span></code></div>
  </div>
 </div>
  <div class="note" id="31664">  <div class="votes">
    <div id="Vu31664">
    <a href="/manual/vote-note.php?id=31664&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31664">
    <a href="/manual/vote-note.php?id=31664&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31664" title="100% like this...">
    1
    </div>
  </div>
  <a href="#31664" class="name">
  <strong class="user"><em>nliu99 at nospam dot yahoo dot com</em></strong></a><a class="genanchor" href="#31664"> &para;</a><div class="date" title="2003-04-29 03:09"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31664">
<div class="phpcode"><code><span class="html">libsasl.dll is NOT required for ldap functionalities. Go check out the posting at: <a href="http://bugs.php.net/bug.php?id=9485" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=9485</a> <br /><br />On win2k I followed these easy steps and got ldap to work:<br />1. copy php_ldap.dll from the extension folder to winnt/system32<br />2. edit winnt/php.ini so that ldap is enabled (uncomment the line). <br />3. restart IIS. <br />That's it and have fun with ldap. <br /><br />A note for Microsoft Active Directory<br />1. You can login with the user email, i.e. user@company.com<br />2. It's easiest to search for user info with ldap_search by filtering: (userprincipalname=[user])</span></code></div>
  </div>
 </div>
  <div class="note" id="30863">  <div class="votes">
    <div id="Vu30863">
    <a href="/manual/vote-note.php?id=30863&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30863">
    <a href="/manual/vote-note.php?id=30863&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30863" title="100% like this...">
    1
    </div>
  </div>
  <a href="#30863" class="name">
  <strong class="user"><em>egeczi at nospamplease dot dist113 dot org</em></strong></a><a class="genanchor" href="#30863"> &para;</a><div class="date" title="2003-04-01 09:05"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30863">
<div class="phpcode"><code><span class="html">On Win2k Server running IIS, it is not enough to just restart IIS after enabling the php_ldap extension. You have to restart the server itself.</span></code></div>
  </div>
 </div>
  <div class="note" id="29994">  <div class="votes">
    <div id="Vu29994">
    <a href="/manual/vote-note.php?id=29994&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29994">
    <a href="/manual/vote-note.php?id=29994&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29994" title="100% like this...">
    1
    </div>
  </div>
  <a href="#29994" class="name">
  <strong class="user"><em>yorch at correo dot ath dot cx</em></strong></a><a class="genanchor" href="#29994"> &para;</a><div class="date" title="2003-03-03 09:12"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29994">
<div class="phpcode"><code><span class="html">Some notes about running LDAP extension on a Win2k box:<br /><br />After copying php_ldap.php and libsasl.dll in every single directory possible (c:\WinNT\System32, c:\php ...) I decided to read the installation.txt file.<br />The instructions to install php extensions say: "Some extra DLLs are required for some PHP extensions. Please copy the bundled dlls from the 'dlls/' directory in distribution package to your windows/system (Win9.x) or winnt/system32 (WinNT, Win2000, XP) directory. If you already have these DLLs installed on your system, overwrite them only if something is not working correctly."<br /><br />So I did exactly that: copy ALL the dll files from "c:\php\dlls" to "c:\WinNT\System32".<br />Now they load beautifully ;-)<br /><br />I hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="76155">  <div class="votes">
    <div id="Vu76155">
    <a href="/manual/vote-note.php?id=76155&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76155">
    <a href="/manual/vote-note.php?id=76155&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76155" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76155" class="name">
  <strong class="user"><em>Tod</em></strong></a><a class="genanchor" href="#76155"> &para;</a><div class="date" title="2007-07-03 05:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76155">
<div class="phpcode"><code><span class="html">Notes for people running PHP 4 with Apache 2.2 on Win2k3.<br />The Apache Service needs to be running under the local administrators account in order for the ldap_connect to return a result. As apposed to the Domain Administrators account as may happen on servers in an Active Directory Domain.<br /><br />It will 'appear' to work ok but will return no results otherwise.<br /><br />so use (server name)\administrator for the username in the service logon properties.<br /><br />Tod</span></code></div>
  </div>
 </div>
  <div class="note" id="73971">  <div class="votes">
    <div id="Vu73971">
    <a href="/manual/vote-note.php?id=73971&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73971">
    <a href="/manual/vote-note.php?id=73971&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73971" title="50% like this...">
    0
    </div>
  </div>
  <a href="#73971" class="name">
  <strong class="user"><em>jector at inbox dot ru</em></strong></a><a class="genanchor" href="#73971"> &para;</a><div class="date" title="2007-03-18 09:01"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73971">
<div class="phpcode"><code><span class="html">Spent some time on fixing "Unable to load dynamic library 'php_ldap.dll'. Copied libeay32.dll and ssleay32.dll  everywhere, but error still stands.<br /><br />After digging all this dlls I found, that both libeay32.dll and ssleay32.dll need msvcr70.dll (or msvcr71.dll, it depends on the compiler version). Then just copy that dll to system32\ dir and it works perfectly.</span></code></div>
  </div>
 </div>
  <div class="note" id="71206">  <div class="votes">
    <div id="Vu71206">
    <a href="/manual/vote-note.php?id=71206&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71206">
    <a href="/manual/vote-note.php?id=71206&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71206" title="50% like this...">
    0
    </div>
  </div>
  <a href="#71206" class="name">
  <strong class="user"><em>nigelf at esp dot co dot uk</em></strong></a><a class="genanchor" href="#71206"> &para;</a><div class="date" title="2006-11-16 06:34"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71206">
<div class="phpcode"><code><span class="html">Chasing referrals in Active Directory (ie: searching across domains), can be slow.  You can look up the object instead in the GC (Global Catalog) as follows:<br /><br />Remove any reference to ldap:// when you use ldap_connect, ie: use "serv1.mydom.com" NOT "ldap://serv1.mydom.com"<br /><br />Connect to port 3268 (not 389, the default)<br /><br />Set the Base DN for the search to null ie: "" (empty quotes).  <br /><br />AD will then run the search against the GC which holds a copy of all objects in the Forest.  You can also retrieve a subset of attributes (including group membership, except local groups).<br /><br />You will still need to follow referals for a full set of attributes.</span></code></div>
  </div>
 </div>
  <div class="note" id="34145">  <div class="votes">
    <div id="Vu34145">
    <a href="/manual/vote-note.php?id=34145&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34145">
    <a href="/manual/vote-note.php?id=34145&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34145" title="50% like this...">
    0
    </div>
  </div>
  <a href="#34145" class="name">
  <strong class="user"><em>hkemale at hkem dot com</em></strong></a><a class="genanchor" href="#34145"> &para;</a><div class="date" title="2003-07-16 10:49"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34145">
<div class="phpcode"><code><span class="html">For IIS+PHP+NTFS file system user<br />After copied &lt;php_dir&gt;/dlls/*.dll to &lt;windows&gt;/systems32/ remember to add read and exexcute premission to "everyone" and the extensions *.dll. this can prevent warning of Access is denied of php_ldap.dll</span></code></div>
  </div>
 </div>
  <div class="note" id="25894">  <div class="votes">
    <div id="Vu25894">
    <a href="/manual/vote-note.php?id=25894&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25894">
    <a href="/manual/vote-note.php?id=25894&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25894" title="50% like this...">
    0
    </div>
  </div>
  <a href="#25894" class="name">
  <strong class="user"><em>gerbille at free dot fr</em></strong></a><a class="genanchor" href="#25894"> &para;</a><div class="date" title="2002-10-10 06:26"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom25894">
<div class="phpcode"><code><span class="html">The MD5 of PHP returns a result encoded in base16. But the LDAP MD5 returns a string encoded in base64. <br />$pwd="toto";<br />$pwd_md5=base64_encode(mhash(MHASH_MD5,$pwd));<br />Just add "{MD5}" front $pwd_md5 to obtain the same format as LDAP directory.<br /><br />Bye<br />Aur?lia</span></code></div>
  </div>
 </div>
  <div class="note" id="25055">  <div class="votes">
    <div id="Vu25055">
    <a href="/manual/vote-note.php?id=25055&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd25055">
    <a href="/manual/vote-note.php?id=25055&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V25055" title="50% like this...">
    0
    </div>
  </div>
  <a href="#25055" class="name">
  <strong class="user"><em>mike at whisperedlies dot org</em></strong></a><a class="genanchor" href="#25055"> &para;</a><div class="date" title="2002-09-09 09:41"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom25055">
<div class="phpcode"><code><span class="html">In addition to the netBIOS suggestion above, when binding to a Windows2k AD server, you can use the UPN of the intended user. For instance, if your SAM account name is firstname.lastname and your domain is domainname.com, your UPN might be firstname.lastname@domainname.com<br /><br />This can be used to bind to AD. I've not seen any difference in any of the methods.</span></code></div>
  </div>
 </div>
  <div class="note" id="23159">  <div class="votes">
    <div id="Vu23159">
    <a href="/manual/vote-note.php?id=23159&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23159">
    <a href="/manual/vote-note.php?id=23159&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23159" title="50% like this...">
    0
    </div>
  </div>
  <a href="#23159" class="name">
  <strong class="user"><em>rusko dot marton at gibzone dot hu</em></strong></a><a class="genanchor" href="#23159"> &para;</a><div class="date" title="2002-07-10 05:06"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23159">
<div class="phpcode"><code><span class="html">You can authenticate to a Windows 2000 domain's ldap server easily by using the simplified netbios form of the username.<br /><br />Somebody written:<br />When authenticating to a Win2k LDAP server, the name of the person must be<br />the FULL NAME in the dn <br /><br />NO. You can use this form:<br /><br />$user = "DOMAINNAME\\username"<br />$password = "Password_of_user"; <br /><br />if (!$connect = ldap_connect("&lt;server&gt;", &lt;port&gt;)) { <br />  //error<br />  exit;<br />} <br />if (!$res = @ldap_bind($ldap, $user, $password)) { <br />  //error<br />  exit;<br />} <br /><br />It works fine with Active Directory, we use it.</span></code></div>
  </div>
 </div>
  <div class="note" id="17882">  <div class="votes">
    <div id="Vu17882">
    <a href="/manual/vote-note.php?id=17882&amp;page=ref.ldap&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17882">
    <a href="/manual/vote-note.php?id=17882&amp;page=ref.ldap&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17882" title="50% like this...">
    0
    </div>
  </div>
  <a href="#17882" class="name">
  <strong class="user"><em>webmaster at autourdupc dot com</em></strong></a><a class="genanchor" href="#17882"> &para;</a><div class="date" title="2001-12-31 04:36"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17882">
<div class="phpcode"><code><span class="html">When authenticating to a Win2k LDAP server, the name of the person must be the FULL NAME in the dn 
<br />
<br />NB : nothing is case sensitive !
<br />
<br />$dn="cn=DUPOND John, cn=Users, dc=autourdupc, dc=com"
<br />$password = "Password_of_DUPOND"; 
<br />
<br />Then when you bind to the LDAP database you use: 
<br />
<br />if (!($ldap = ldap_connect("&lt;server&gt;", &lt;port&gt;))) { 
<br />die ("Could not connect to LDAP server"); 
<br />} 
<br />if (!($res = @ldap_bind($ldap, $dn, $password))) { 
<br />die ("Could not bind to $dn"); 
<br />} 
<br />
<br />Hope this will usefull for everyone !</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.ldap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.ldap.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.ldap.php">LDAP</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.ldap.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="ldap.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="ldap.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ldap.using.php" title="Using the PHP LDAP calls">Using the PHP LDAP calls</a>
                        </li>
                                                <li class="">
                            <a href="ldap.controls.php" title="LDAP controls">LDAP controls</a>
                        </li>
                                                <li class="">
                            <a href="ldap.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.ldap.php" title="LDAP Functions">LDAP Functions</a>
                        </li>
                                                <li class="">
                            <a href="class.ldap-connection.php" title="LDAP\Connection">LDAP\Connection</a>
                        </li>
                                                <li class="">
                            <a href="class.ldap-result.php" title="LDAP\Result">LDAP\Result</a>
                        </li>
                                                <li class="">
                            <a href="class.ldap-result-entry.php" title="LDAP\ResultEntry">LDAP\ResultEntry</a>
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
