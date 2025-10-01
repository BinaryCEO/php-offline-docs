<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: LDAP - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.ldap.php">
 <link rel="shorturl" href="https://www.php.net/ldap">
 <link rel="alternate" href="https://www.php.net/ldap" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.remote.other.php">
 <link rel="prev" href="https://www.php.net/manual/en/class.gearmanexception.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.ldap.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.ldap.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.ldap.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.ldap.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.ldap.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.ldap.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.ldap.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.ldap.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.ldap.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.ldap.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.ldap.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.ldap.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Lightweight Directory Access Protocol" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: LDAP - Manual" />
<meta name="twitter:description" content="Lightweight Directory Access Protocol" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: LDAP - Manual" />
<meta itemprop="description" content="Lightweight Directory Access Protocol" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Lightweight Directory Access Protocol" />

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
        <a href="intro.ldap.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="class.gearmanexception.php">
          &laquo; GearmanException        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      </ul>
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
            <option value='en/book.ldap.php' selected="selected">English</option>
            <option value='de/book.ldap.php'>German</option>
            <option value='es/book.ldap.php'>Spanish</option>
            <option value='fr/book.ldap.php'>French</option>
            <option value='it/book.ldap.php'>Italian</option>
            <option value='ja/book.ldap.php'>Japanese</option>
            <option value='pt_BR/book.ldap.php'>Brazilian Portuguese</option>
            <option value='ru/book.ldap.php'>Russian</option>
            <option value='tr/book.ldap.php'>Turkish</option>
            <option value='uk/book.ldap.php'>Ukrainian</option>
            <option value='zh/book.ldap.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.ldap" class="book">
 
 <h1 class="title">Lightweight Directory Access Protocol</h1>
 

 
 
 

 







 




 








 






 







 







 



 



 




<ul class="chunklist chunklist_book"><li><a href="intro.ldap.php">Introduction</a></li><li><a href="ldap.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ldap.requirements.php">Requirements</a></li><li><a href="ldap.installation.php">Installation</a></li><li><a href="ldap.configuration.php">Runtime Configuration</a></li><li><a href="ldap.resources.php">Resource Types</a></li></ul></li><li><a href="ldap.constants.php">Predefined Constants</a></li><li><a href="ldap.using.php">Using the PHP LDAP calls</a></li><li><a href="ldap.controls.php">LDAP controls</a></li><li><a href="ldap.examples.php">Examples</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ldap.examples-basic.php">Basic usage</a></li><li><a href="ldap.examples-controls.php">LDAP Controls</a></li></ul></li><li><a href="ref.ldap.php">LDAP Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.ldap-8859-to-t61.php">ldap_8859_to_t61</a> — Translate 8859 characters to t61 characters</li><li><a href="function.ldap-add.php">ldap_add</a> — Add entries to LDAP directory</li><li><a href="function.ldap-add-ext.php">ldap_add_ext</a> — Add entries to LDAP directory</li><li><a href="function.ldap-bind.php">ldap_bind</a> — Bind to LDAP directory</li><li><a href="function.ldap-bind-ext.php">ldap_bind_ext</a> — Bind to LDAP directory</li><li><a href="function.ldap-close.php">ldap_close</a> — Alias of ldap_unbind</li><li><a href="function.ldap-compare.php">ldap_compare</a> — Compare value of attribute found in entry specified with DN</li><li><a href="function.ldap-connect.php">ldap_connect</a> — Connect to an LDAP server</li><li><a href="function.ldap-connect-wallet.php">ldap_connect_wallet</a> — Connect to an LDAP server</li><li><a href="function.ldap-control-paged-result.php">ldap_control_paged_result</a> — Send LDAP pagination control</li><li><a href="function.ldap-control-paged-result-response.php">ldap_control_paged_result_response</a> — Retrieve the LDAP pagination cookie</li><li><a href="function.ldap-count-entries.php">ldap_count_entries</a> — Count the number of entries in a search</li><li><a href="function.ldap-count-references.php">ldap_count_references</a> — Counts the number of references in a search result</li><li><a href="function.ldap-delete.php">ldap_delete</a> — Delete an entry from a directory</li><li><a href="function.ldap-delete-ext.php">ldap_delete_ext</a> — Delete an entry from a directory</li><li><a href="function.ldap-dn2ufn.php">ldap_dn2ufn</a> — Convert DN to User Friendly Naming format</li><li><a href="function.ldap-err2str.php">ldap_err2str</a> — Convert LDAP error number into string error message</li><li><a href="function.ldap-errno.php">ldap_errno</a> — Return the LDAP error number of the last LDAP command</li><li><a href="function.ldap-error.php">ldap_error</a> — Return the LDAP error message of the last LDAP command</li><li><a href="function.ldap-escape.php">ldap_escape</a> — Escape a string for use in an LDAP filter or DN</li><li><a href="function.ldap-exop.php">ldap_exop</a> — Performs an extended operation</li><li><a href="function.ldap-exop-passwd.php">ldap_exop_passwd</a> — PASSWD extended operation helper</li><li><a href="function.ldap-exop-refresh.php">ldap_exop_refresh</a> — Refresh extended operation helper</li><li><a href="function.ldap-exop-sync.php">ldap_exop_sync</a> — Performs an extended operation</li><li><a href="function.ldap-exop-whoami.php">ldap_exop_whoami</a> — WHOAMI extended operation helper</li><li><a href="function.ldap-explode-dn.php">ldap_explode_dn</a> — Splits DN into its component parts</li><li><a href="function.ldap-first-attribute.php">ldap_first_attribute</a> — Return first attribute</li><li><a href="function.ldap-first-entry.php">ldap_first_entry</a> — Return first result id</li><li><a href="function.ldap-first-reference.php">ldap_first_reference</a> — Return first reference</li><li><a href="function.ldap-free-result.php">ldap_free_result</a> — Free result memory</li><li><a href="function.ldap-get-attributes.php">ldap_get_attributes</a> — Get attributes from a search result entry</li><li><a href="function.ldap-get-dn.php">ldap_get_dn</a> — Get the DN of a result entry</li><li><a href="function.ldap-get-entries.php">ldap_get_entries</a> — Get all result entries</li><li><a href="function.ldap-get-option.php">ldap_get_option</a> — Get the current value for given option</li><li><a href="function.ldap-get-values.php">ldap_get_values</a> — Get all values from a result entry</li><li><a href="function.ldap-get-values-len.php">ldap_get_values_len</a> — Get all binary values from a result entry</li><li><a href="function.ldap-list.php">ldap_list</a> — Single-level search</li><li><a href="function.ldap-mod-add.php">ldap_mod_add</a> — Add attribute values to current attributes</li><li><a href="function.ldap-mod_add-ext.php">ldap_mod_add_ext</a> — Add attribute values to current attributes</li><li><a href="function.ldap-mod-del.php">ldap_mod_del</a> — Delete attribute values from current attributes</li><li><a href="function.ldap-mod_del-ext.php">ldap_mod_del_ext</a> — Delete attribute values from current attributes</li><li><a href="function.ldap-mod-replace.php">ldap_mod_replace</a> — Replace attribute values with new ones</li><li><a href="function.ldap-mod_replace-ext.php">ldap_mod_replace_ext</a> — Replace attribute values with new ones</li><li><a href="function.ldap-modify.php">ldap_modify</a> — Alias of ldap_mod_replace</li><li><a href="function.ldap-modify-batch.php">ldap_modify_batch</a> — Batch and execute modifications on an LDAP entry</li><li><a href="function.ldap-next-attribute.php">ldap_next_attribute</a> — Get the next attribute in result</li><li><a href="function.ldap-next-entry.php">ldap_next_entry</a> — Get next result entry</li><li><a href="function.ldap-next-reference.php">ldap_next_reference</a> — Get next reference</li><li><a href="function.ldap-parse-exop.php">ldap_parse_exop</a> — Parse result object from an LDAP extended operation</li><li><a href="function.ldap-parse-reference.php">ldap_parse_reference</a> — Extract information from reference entry</li><li><a href="function.ldap-parse-result.php">ldap_parse_result</a> — Extract information from result</li><li><a href="function.ldap-read.php">ldap_read</a> — Read an entry</li><li><a href="function.ldap-rename.php">ldap_rename</a> — Modify the name of an entry</li><li><a href="function.ldap-rename-ext.php">ldap_rename_ext</a> — Modify the name of an entry</li><li><a href="function.ldap-sasl-bind.php">ldap_sasl_bind</a> — Bind to LDAP directory using SASL</li><li><a href="function.ldap-search.php">ldap_search</a> — Search LDAP tree</li><li><a href="function.ldap-set-option.php">ldap_set_option</a> — Set the value of the given option</li><li><a href="function.ldap-set-rebind-proc.php">ldap_set_rebind_proc</a> — Set a callback function to do re-binds on referral chasing</li><li><a href="function.ldap-sort.php">ldap_sort</a> — Sort LDAP result entries on the client side</li><li><a href="function.ldap-start-tls.php">ldap_start_tls</a> — Start TLS</li><li><a href="function.ldap-t61-to-8859.php">ldap_t61_to_8859</a> — Translate t61 characters to 8859 characters</li><li><a href="function.ldap-unbind.php">ldap_unbind</a> — Unbind from LDAP directory</li></ul></li><li><a href="class.ldap-connection.php">LDAP\Connection</a> — The LDAP\Connection class</li><li><a href="class.ldap-result.php">LDAP\Result</a> — The LDAP\Result class</li><li><a href="class.ldap-result-entry.php">LDAP\ResultEntry</a> — The LDAP\ResultEntry class</li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.ldap%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.ldap&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.ldap.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.remote.other.php">Other Services</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.curl.php" title="cURL">cURL</a>
                        </li>
                                                <li class="">
                            <a href="book.event.php" title="Event">Event</a>
                        </li>
                                                <li class="">
                            <a href="book.ftp.php" title="FTP">FTP</a>
                        </li>
                                                <li class="">
                            <a href="book.gearman.php" title="Gearman">Gearman</a>
                        </li>
                                                <li class="current">
                            <a href="book.ldap.php" title="LDAP">LDAP</a>
                        </li>
                                                <li class="">
                            <a href="book.memcache.php" title="Memcache">Memcache</a>
                        </li>
                                                <li class="">
                            <a href="book.memcached.php" title="Memcached">Memcached</a>
                        </li>
                                                <li class="">
                            <a href="book.mqseries.php" title="mqseries">mqseries</a>
                        </li>
                                                <li class="">
                            <a href="book.network.php" title="Network">Network</a>
                        </li>
                                                <li class="">
                            <a href="book.rrd.php" title="RRD">RRD</a>
                        </li>
                                                <li class="">
                            <a href="book.scoutapm.php" title="ScoutAPM">ScoutAPM</a>
                        </li>
                                                <li class="">
                            <a href="book.snmp.php" title="SNMP">SNMP</a>
                        </li>
                                                <li class="">
                            <a href="book.sockets.php" title="Sockets">Sockets</a>
                        </li>
                                                <li class="">
                            <a href="book.ssh2.php" title="SSH2">SSH2</a>
                        </li>
                                                <li class="">
                            <a href="book.stomp.php" title="Stomp">Stomp</a>
                        </li>
                                                <li class="">
                            <a href="book.svm.php" title="SVM">SVM</a>
                        </li>
                                                <li class="">
                            <a href="book.svn.php" title="SVN">SVN</a>
                        </li>
                                                <li class="">
                            <a href="book.tcpwrap.php" title="TCP">TCP</a>
                        </li>
                                                <li class="">
                            <a href="book.varnish.php" title="Varnish">Varnish</a>
                        </li>
                                                <li class="">
                            <a href="book.yaz.php" title="YAZ">YAZ</a>
                        </li>
                                                <li class="">
                            <a href="book.zmq.php" title="0MQ messaging">0MQ messaging</a>
                        </li>
                                                <li class="">
                            <a href="book.zookeeper.php" title="ZooKeeper">ZooKeeper</a>
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
