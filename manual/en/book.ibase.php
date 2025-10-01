<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Firebird/InterBase - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.ibase.php">
 <link rel="shorturl" href="https://www.php.net/ibase">
 <link rel="alternate" href="https://www.php.net/ibase" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.database.vendors.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.dbase-replace-record.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.ibase.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.ibase.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.ibase.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.ibase.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.ibase.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.ibase.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.ibase.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.ibase.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.ibase.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.ibase.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.ibase.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.ibase.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Firebird/InterBase" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Firebird/InterBase - Manual" />
<meta name="twitter:description" content="Firebird/InterBase" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Firebird/InterBase - Manual" />
<meta itemprop="description" content="Firebird/InterBase" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Firebird/InterBase" />

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
        <a href="intro.ibase.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.dbase-replace-record.php">
          &laquo; dbase_replace_record        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.database.php'>Database Extensions</a></li>      <li><a href='refs.database.vendors.php'>Vendor Specific Database Extensions</a></li>      </ul>
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
            <option value='en/book.ibase.php' selected="selected">English</option>
            <option value='de/book.ibase.php'>German</option>
            <option value='es/book.ibase.php'>Spanish</option>
            <option value='fr/book.ibase.php'>French</option>
            <option value='it/book.ibase.php'>Italian</option>
            <option value='ja/book.ibase.php'>Japanese</option>
            <option value='pt_BR/book.ibase.php'>Brazilian Portuguese</option>
            <option value='ru/book.ibase.php'>Russian</option>
            <option value='tr/book.ibase.php'>Turkish</option>
            <option value='uk/book.ibase.php'>Ukrainian</option>
            <option value='zh/book.ibase.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.ibase" class="book">
 
 <h1 class="title">Firebird/InterBase</h1>
 
 
 
 
 
 







 





 



 




<ul class="chunklist chunklist_book"><li><a href="intro.ibase.php">Introduction</a></li><li><a href="ibase.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="ibase.installation.php">Installation</a></li><li><a href="ibase.configuration.php">Runtime Configuration</a></li></ul></li><li><a href="ibase.constants.php">Predefined Constants</a></li><li><a href="ref.ibase.php">Firebird/InterBase Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.fbird-add-user.php">fbird_add_user</a> — Alias of ibase_add_user</li><li><a href="function.fbird-affected-rows.php">fbird_affected_rows</a> — Alias of ibase_affected_rows</li><li><a href="function.fbird-backup.php">fbird_backup</a> — Alias of ibase_backup</li><li><a href="function.fbird-blob-add.php">fbird_blob_add</a> — Alias of ibase_blob_add</li><li><a href="function.fbird-blob-cancel.php">fbird_blob_cancel</a> — Cancel creating blob</li><li><a href="function.fbird-blob-close.php">fbird_blob_close</a> — Alias of ibase_blob_close</li><li><a href="function.fbird-blob-create.php">fbird_blob_create</a> — Alias of ibase_blob_create</li><li><a href="function.fbird-blob-echo.php">fbird_blob_echo</a> — Alias of ibase_blob_echo</li><li><a href="function.fbird-blob-get.php">fbird_blob_get</a> — Alias of ibase_blob_get</li><li><a href="function.fbird-blob-import.php">fbird_blob_import</a> — Alias of ibase_blob_import</li><li><a href="function.fbird-blob-info.php">fbird_blob_info</a> — Alias of ibase_blob_info</li><li><a href="function.fbird-blob-open.php">fbird_blob_open</a> — Alias of ibase_blob_open</li><li><a href="function.fbird-close.php">fbird_close</a> — Alias of ibase_close</li><li><a href="function.fbird-commit.php">fbird_commit</a> — Alias of ibase_commit</li><li><a href="function.fbird-commit-ret.php">fbird_commit_ret</a> — Alias of ibase_commit_ret</li><li><a href="function.fbird-connect.php">fbird_connect</a> — Alias of ibase_connect</li><li><a href="function.fbird-db-info.php">fbird_db_info</a> — Alias of ibase_db_info</li><li><a href="function.fbird-delete-user.php">fbird_delete_user</a> — Alias of ibase_delete_user</li><li><a href="function.fbird-drop-db.php">fbird_drop_db</a> — Alias of ibase_drop_db</li><li><a href="function.fbird-errcode.php">fbird_errcode</a> — Alias of ibase_errcode</li><li><a href="function.fbird-errmsg.php">fbird_errmsg</a> — Alias of ibase_errmsg</li><li><a href="function.fbird-execute.php">fbird_execute</a> — Alias of ibase_execute</li><li><a href="function.fbird-fetch-assoc.php">fbird_fetch_assoc</a> — Alias of ibase_fetch_assoc</li><li><a href="function.fbird-fetch-object.php">fbird_fetch_object</a> — Alias of ibase_fetch_object</li><li><a href="function.fbird-fetch-row.php">fbird_fetch_row</a> — Alias of ibase_fetch_row</li><li><a href="function.fbird-field-info.php">fbird_field_info</a> — Alias of ibase_field_info</li><li><a href="function.fbird-free-event-handler.php">fbird_free_event_handler</a> — Alias of ibase_free_event_handler</li><li><a href="function.fbird-free-query.php">fbird_free_query</a> — Alias of ibase_free_query</li><li><a href="function.fbird-free-result.php">fbird_free_result</a> — Alias of ibase_free_result</li><li><a href="function.fbird-gen-id.php">fbird_gen_id</a> — Alias of ibase_gen_id</li><li><a href="function.fbird-maintain-db.php">fbird_maintain_db</a> — Alias of ibase_maintain_db</li><li><a href="function.fbird-modify-user.php">fbird_modify_user</a> — Alias of ibase_modify_user</li><li><a href="function.fbird-name-result.php">fbird_name_result</a> — Alias of ibase_name_result</li><li><a href="function.fbird-num-fields.php">fbird_num_fields</a> — Alias of ibase_num_fields</li><li><a href="function.fbird-num-params.php">fbird_num_params</a> — Alias of ibase_num_params</li><li><a href="function.fbird-param-info.php">fbird_param_info</a> — Alias of ibase_param_info</li><li><a href="function.fbird-pconnect.php">fbird_pconnect</a> — Alias of ibase_pconnect</li><li><a href="function.fbird-prepare.php">fbird_prepare</a> — Alias of ibase_prepare</li><li><a href="function.fbird-query.php">fbird_query</a> — Alias of ibase_query</li><li><a href="function.fbird-restore.php">fbird_restore</a> — Alias of ibase_restore</li><li><a href="function.fbird-rollback.php">fbird_rollback</a> — Alias of ibase_rollback</li><li><a href="function.fbird-rollback-ret.php">fbird_rollback_ret</a> — Alias of ibase_rollback_ret</li><li><a href="function.fbird-server-info.php">fbird_server_info</a> — Alias of ibase_server_info</li><li><a href="function.fbird-service-attach.php">fbird_service_attach</a> — Alias of ibase_service_attach</li><li><a href="function.fbird-service-detach.php">fbird_service_detach</a> — Alias of ibase_service_detach</li><li><a href="function.fbird-set-event-handler.php">fbird_set_event_handler</a> — Alias of ibase_set_event_handler</li><li><a href="function.fbird-trans.php">fbird_trans</a> — Alias of ibase_trans</li><li><a href="function.fbird-wait-event.php">fbird_wait_event</a> — Alias of ibase_wait_event</li><li><a href="function.ibase-add-user.php">ibase_add_user</a> — Add a user to a security database</li><li><a href="function.ibase-affected-rows.php">ibase_affected_rows</a> — Return the number of rows that were affected by the previous query</li><li><a href="function.ibase-backup.php">ibase_backup</a> — Initiates a backup task in the service manager and returns immediately</li><li><a href="function.ibase-blob-add.php">ibase_blob_add</a> — Add data into a newly created blob</li><li><a href="function.ibase-blob-cancel.php">ibase_blob_cancel</a> — Cancel creating blob</li><li><a href="function.ibase-blob-close.php">ibase_blob_close</a> — Close blob</li><li><a href="function.ibase-blob-create.php">ibase_blob_create</a> — Create a new blob for adding data</li><li><a href="function.ibase-blob-echo.php">ibase_blob_echo</a> — Output blob contents to browser</li><li><a href="function.ibase-blob-get.php">ibase_blob_get</a> — Get len bytes data from open blob</li><li><a href="function.ibase-blob-import.php">ibase_blob_import</a> — Create blob, copy file in it, and close it</li><li><a href="function.ibase-blob-info.php">ibase_blob_info</a> — Return blob length and other useful info</li><li><a href="function.ibase-blob-open.php">ibase_blob_open</a> — Open blob for retrieving data parts</li><li><a href="function.ibase-close.php">ibase_close</a> — Close a connection to an InterBase database</li><li><a href="function.ibase-commit.php">ibase_commit</a> — Commit a transaction</li><li><a href="function.ibase-commit-ret.php">ibase_commit_ret</a> — Commit a transaction without closing it</li><li><a href="function.ibase-connect.php">ibase_connect</a> — Open a connection to a database</li><li><a href="function.ibase-db-info.php">ibase_db_info</a> — Request statistics about a database</li><li><a href="function.ibase-delete-user.php">ibase_delete_user</a> — Delete a user from a security database</li><li><a href="function.ibase-drop-db.php">ibase_drop_db</a> — Drops a database</li><li><a href="function.ibase-errcode.php">ibase_errcode</a> — Return an error code</li><li><a href="function.ibase-errmsg.php">ibase_errmsg</a> — Return error messages</li><li><a href="function.ibase-execute.php">ibase_execute</a> — Execute a previously prepared query</li><li><a href="function.ibase-fetch-assoc.php">ibase_fetch_assoc</a> — Fetch a result row from a query as an associative array</li><li><a href="function.ibase-fetch-object.php">ibase_fetch_object</a> — Get an object from a InterBase database</li><li><a href="function.ibase-fetch-row.php">ibase_fetch_row</a> — Fetch a row from an InterBase database</li><li><a href="function.ibase-field-info.php">ibase_field_info</a> — Get information about a field</li><li><a href="function.ibase-free-event-handler.php">ibase_free_event_handler</a> — Cancels a registered event handler</li><li><a href="function.ibase-free-query.php">ibase_free_query</a> — Free memory allocated by a prepared query</li><li><a href="function.ibase-free-result.php">ibase_free_result</a> — Free a result set</li><li><a href="function.ibase-gen-id.php">ibase_gen_id</a> — Increments the named generator and returns its new value</li><li><a href="function.ibase-maintain-db.php">ibase_maintain_db</a> — Execute a maintenance command on the database server</li><li><a href="function.ibase-modify-user.php">ibase_modify_user</a> — Modify a user to a security database</li><li><a href="function.ibase-name-result.php">ibase_name_result</a> — Assigns a name to a result set</li><li><a href="function.ibase-num-fields.php">ibase_num_fields</a> — Get the number of fields in a result set</li><li><a href="function.ibase-num-params.php">ibase_num_params</a> — Return the number of parameters in a prepared query</li><li><a href="function.ibase-param-info.php">ibase_param_info</a> — Return information about a parameter in a prepared query</li><li><a href="function.ibase-pconnect.php">ibase_pconnect</a> — Open a persistent connection to an InterBase database</li><li><a href="function.ibase-prepare.php">ibase_prepare</a> — Prepare a query for later binding of parameter placeholders and execution</li><li><a href="function.ibase-query.php">ibase_query</a> — Execute a query on an InterBase database</li><li><a href="function.ibase-restore.php">ibase_restore</a> — Initiates a restore task in the service manager and returns immediately</li><li><a href="function.ibase-rollback.php">ibase_rollback</a> — Roll back a transaction</li><li><a href="function.ibase-rollback-ret.php">ibase_rollback_ret</a> — Roll back a transaction without closing it</li><li><a href="function.ibase-server-info.php">ibase_server_info</a> — Request information about a database server</li><li><a href="function.ibase-service-attach.php">ibase_service_attach</a> — Connect to the service manager</li><li><a href="function.ibase-service-detach.php">ibase_service_detach</a> — Disconnect from the service manager</li><li><a href="function.ibase-set-event-handler.php">ibase_set_event_handler</a> — Register a callback function to be called when events are posted</li><li><a href="function.ibase-trans.php">ibase_trans</a> — Begin a transaction</li><li><a href="function.ibase-wait-event.php">ibase_wait_event</a> — Wait for an event to be posted by the database</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ibase/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.ibase%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.ibase&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.ibase.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.database.vendors.php">Vendor Specific Database Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.cubrid.php" title="CUBRID">CUBRID</a>
                        </li>
                                                <li class="">
                            <a href="book.dbase.php" title="dBase">dBase</a>
                        </li>
                                                <li class="current">
                            <a href="book.ibase.php" title="Firebird/InterBase">Firebird/InterBase</a>
                        </li>
                                                <li class="">
                            <a href="book.ibm-db2.php" title="IBM DB2">IBM DB2</a>
                        </li>
                                                <li class="">
                            <a href="book.mongodb.php" title="MongoDB">MongoDB</a>
                        </li>
                                                <li class="">
                            <a href="set.mysqlinfo.php" title="MySQL">MySQL</a>
                        </li>
                                                <li class="">
                            <a href="book.oci8.php" title="OCI8">OCI8</a>
                        </li>
                                                <li class="">
                            <a href="book.pgsql.php" title="PostgreSQL">PostgreSQL</a>
                        </li>
                                                <li class="">
                            <a href="book.sqlite3.php" title="SQLite3">SQLite3</a>
                        </li>
                                                <li class="">
                            <a href="book.sqlsrv.php" title="SQLSRV">SQLSRV</a>
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
