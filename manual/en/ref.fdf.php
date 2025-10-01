<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: FDF Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.fdf.php">
 <link rel="shorturl" href="https://www.php.net/fdf">
 <link rel="alternate" href="https://www.php.net/fdf" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.fdf.php">
 <link rel="prev" href="https://www.php.net/manual/en/fdf.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/function.fdf-add-doc-javascript.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.fdf.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.fdf.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.fdf.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.fdf.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.fdf.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.fdf.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.fdf.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.fdf.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.fdf.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.fdf.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.fdf.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="FDF Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: FDF Functions - Manual" />
<meta name="twitter:description" content="FDF Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: FDF Functions - Manual" />
<meta itemprop="description" content="FDF Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="FDF Functions" />

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
        <a href="function.fdf-add-doc-javascript.php">
          fdf_add_doc_javascript &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="fdf.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.utilspec.nontext.php'>Non-Text MIME Output</a></li>      <li><a href='book.fdf.php'>FDF</a></li>      </ul>
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
            <option value='en/ref.fdf.php' selected="selected">English</option>
            <option value='de/ref.fdf.php'>German</option>
            <option value='es/ref.fdf.php'>Spanish</option>
            <option value='fr/ref.fdf.php'>French</option>
            <option value='it/ref.fdf.php'>Italian</option>
            <option value='ja/ref.fdf.php'>Japanese</option>
            <option value='pt_BR/ref.fdf.php'>Brazilian Portuguese</option>
            <option value='ru/ref.fdf.php'>Russian</option>
            <option value='tr/ref.fdf.php'>Turkish</option>
            <option value='uk/ref.fdf.php'>Ukrainian</option>
            <option value='zh/ref.fdf.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.fdf" class="reference">
 <h1 class="title">FDF Functions</h1>

 


















































































































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.fdf-add-doc-javascript.php">fdf_add_doc_javascript</a> — Adds javascript code to the FDF document</li><li><a href="function.fdf-add-template.php">fdf_add_template</a> — Adds a template into the FDF document</li><li><a href="function.fdf-close.php">fdf_close</a> — Close an FDF document</li><li><a href="function.fdf-create.php">fdf_create</a> — Create a new FDF document</li><li><a href="function.fdf-enum-values.php">fdf_enum_values</a> — Call a user defined function for each document value</li><li><a href="function.fdf-errno.php">fdf_errno</a> — Return error code for last fdf operation</li><li><a href="function.fdf-error.php">fdf_error</a> — Return error description for FDF error code</li><li><a href="function.fdf-get-ap.php">fdf_get_ap</a> — Get the appearance of a field</li><li><a href="function.fdf-get-attachment.php">fdf_get_attachment</a> — Extracts uploaded file embedded in the FDF</li><li><a href="function.fdf-get-encoding.php">fdf_get_encoding</a> — Get the value of the /Encoding key</li><li><a href="function.fdf-get-file.php">fdf_get_file</a> — Get the value of the /F key</li><li><a href="function.fdf-get-flags.php">fdf_get_flags</a> — Gets the flags of a field</li><li><a href="function.fdf-get-opt.php">fdf_get_opt</a> — Gets a value from the opt array of a field</li><li><a href="function.fdf-get-status.php">fdf_get_status</a> — Get the value of the /STATUS key</li><li><a href="function.fdf-get-value.php">fdf_get_value</a> — Get the value of a field</li><li><a href="function.fdf-get-version.php">fdf_get_version</a> — Gets version number for FDF API or file</li><li><a href="function.fdf-header.php">fdf_header</a> — Sets FDF-specific output headers</li><li><a href="function.fdf-next-field-name.php">fdf_next_field_name</a> — Get the next field name</li><li><a href="function.fdf-open.php">fdf_open</a> — Open a FDF document</li><li><a href="function.fdf-open-string.php">fdf_open_string</a> — Read a FDF document from a string</li><li><a href="function.fdf-remove-item.php">fdf_remove_item</a> — Sets target frame for form</li><li><a href="function.fdf-save.php">fdf_save</a> — Save a FDF document</li><li><a href="function.fdf-save-string.php">fdf_save_string</a> — Returns the FDF document as a string</li><li><a href="function.fdf-set-ap.php">fdf_set_ap</a> — Set the appearance of a field</li><li><a href="function.fdf-set-encoding.php">fdf_set_encoding</a> — Sets FDF character encoding</li><li><a href="function.fdf-set-file.php">fdf_set_file</a> — Set PDF document to display FDF data in</li><li><a href="function.fdf-set-flags.php">fdf_set_flags</a> — Sets a flag of a field</li><li><a href="function.fdf-set-javascript-action.php">fdf_set_javascript_action</a> — Sets an javascript action of a field</li><li><a href="function.fdf-set-on-import-javascript.php">fdf_set_on_import_javascript</a> — Adds javascript code to be executed when Acrobat opens the FDF</li><li><a href="function.fdf-set-opt.php">fdf_set_opt</a> — Sets an option of a field</li><li><a href="function.fdf-set-status.php">fdf_set_status</a> — Set the value of the /STATUS key</li><li><a href="function.fdf-set-submit-form-action.php">fdf_set_submit_form_action</a> — Sets a submit form action of a field</li><li><a href="function.fdf-set-target-frame.php">fdf_set_target_frame</a> — Set target frame for form display</li><li><a href="function.fdf-set-value.php">fdf_set_value</a> — Set the value of a field</li><li><a href="function.fdf-set-version.php">fdf_set_version</a> — Sets version number for a FDF file</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/fdf/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.fdf%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.fdf&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.fdf.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">20 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="26183">  <div class="votes">
    <div id="Vu26183">
    <a href="/manual/vote-note.php?id=26183&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26183">
    <a href="/manual/vote-note.php?id=26183&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26183" title="100% like this...">
    4
    </div>
  </div>
  <a href="#26183" class="name">
  <strong class="user"><em>mitka at actdev.com</em></strong></a><a class="genanchor" href="#26183"> &para;</a><div class="date" title="2002-10-21 04:24"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26183">
<div class="phpcode"><code><span class="html">IMPORTANT:<br /><br />If you handled the FDF POSTs via $HTTP_RAW_POST_DATA as in user contributed scripts above, it's good to know that once you decide to rebuild PHP with FDFToolkit support, $HTTP_RAW_POST_DATA will be undefined.<br /><br />Good news - $HTTP_FDF_DATA _will_ be defined instead. (Look at the example above).To get the user contributed scripts working in both plain PHP and PHP+FDFToolkit use <br /><br /> $HTTP_RAW_POST_DATA . $HTTP_FDF_DATA <br /><br />where $HTTP_RAW_POST_DATA mentioned.<br /><br />Dimitri Tarassenko</span></code></div>
  </div>
 </div>
  <div class="note" id="38370">  <div class="votes">
    <div id="Vu38370">
    <a href="/manual/vote-note.php?id=38370&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd38370">
    <a href="/manual/vote-note.php?id=38370&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V38370" title="75% like this...">
    4
    </div>
  </div>
  <a href="#38370" class="name">
  <strong class="user"><em>fleischer at mail dot com</em></strong></a><a class="genanchor" href="#38370"> &para;</a><div class="date" title="2003-12-18 07:40"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom38370">
<div class="phpcode"><code><span class="html">The code suggested by greg@... and adam@... is extremely helpful, but I've found out (the hard way) that unclosed parentheses within strings contained in the input array ($values in greg's code or $pdf_data in adam's) will cause Acrobat to issue an error to the effect that the file is corrupted. In other words, if there are strings such as "a) my first point; b) my second point" in the input array, the resulting PDF/FDF file will be considered corrupted by Acrobat. This apparently happens because all the field names in the structure of an FDF file are enclosed in parentheses.<br /><br />The solution I've devised is to escape all opening and closing parentheses with a backslash, which in turn means you need to escape all backslashes. The code below does all that.<br /><br />Erik<br /><br />---------------<br /><br />function output_fdf ($pdf_file, $pdf_data)<br />{<br />    $fdf = "%FDF-1.2\n%????\n";<br />    $fdf .= "1 0 obj \n&lt;&lt; /FDF ";<br />    $fdf .= "&lt;&lt; /Fields [\n"; <br /><br />    $search = array('\\', '(', ')');<br />    $replace = array('\\\\', '\(', '\)');<br />    foreach ($pdf_data as $key =&gt; $val)<br />    {<br />        $clean_key = str_replace($search, $replace, $key);<br />        $clean_val = str_replace($search, $replace, $val);<br />        $fdf .= "&lt;&lt; /V ($clean_val)/T ($clean_key) &gt;&gt; \n";<br />    }<br /><br />    $fdf .= "]\n/F ($pdf_file) &gt;&gt;";<br />    $fdf .= "&gt;&gt;\nendobj\ntrailer\n&lt;&lt;\n";<br />    $fdf .= "/Root 1 0 R \n\n&gt;&gt;\n";<br />    $fdf .= "%%EOF";<br /><br />    return $fdf;<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="31900">  <div class="votes">
    <div id="Vu31900">
    <a href="/manual/vote-note.php?id=31900&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd31900">
    <a href="/manual/vote-note.php?id=31900&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V31900" title="75% like this...">
    2
    </div>
  </div>
  <a href="#31900" class="name">
  <strong class="user"><em>mirage at rateaprof dot com</em></strong></a><a class="genanchor" href="#31900"> &para;</a><div class="date" title="2003-05-08 05:33"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom31900">
<div class="phpcode"><code><span class="html">If you get the new  fdftkv5.tar.gz  from adobe's site (per the link above), you'll get some totally new spacing and capitalization of files.  To make the current 4.3.1 configure, you need to do a few things.<br /><br />untar fdftkv5.tar.gz into /usr/local<br />cd /usr/local<br />#for ease of use<br />ln -s FDFToolkit\ for\ UNIX fdf<br /><br />cd fdf<br />ln -s Headers\ And\ Libraries HeadersAndLibraries<br /><br />#may need to modify the following for your OS<br />ln -s LINUX linux<br />cd linux/C<br />ln -s LIBFDFTK.SO libfdftk.so<br /><br />cd ..<br />cd ..<br />ln -s Headers headers<br />cd headers<br />ln -s FDFTK.H fdftk.h<br /><br />And that should get you going... and to whoever is maintaining the configure script, please be aware there are changes in the FDF Toolkit.</span></code></div>
  </div>
 </div>
  <div class="note" id="28657">  <div class="votes">
    <div id="Vu28657">
    <a href="/manual/vote-note.php?id=28657&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd28657">
    <a href="/manual/vote-note.php?id=28657&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V28657" title="75% like this...">
    2
    </div>
  </div>
  <a href="#28657" class="name">
  <strong class="user"><em>jeff at cowart dot net</em></strong></a><a class="genanchor" href="#28657"> &para;</a><div class="date" title="2003-01-19 08:06"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom28657">
<div class="phpcode"><code><span class="html">I have tried to use the scripts above by adam and Toppi and I have been unable to get them to work unless I save the generated fdf file and then open it manually in acrobat.</span></code></div>
  </div>
 </div>
  <div class="note" id="52502">  <div class="votes">
    <div id="Vu52502">
    <a href="/manual/vote-note.php?id=52502&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52502">
    <a href="/manual/vote-note.php?id=52502&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52502" title="66% like this...">
    2
    </div>
  </div>
  <a href="#52502" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#52502"> &para;</a><div class="date" title="2005-05-03 01:08"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52502">
<div class="phpcode"><code><span class="html">Use "Yes" instead of "On" to populate checkboxes.</span></code></div>
  </div>
 </div>
  <div class="note" id="46624">  <div class="votes">
    <div id="Vu46624">
    <a href="/manual/vote-note.php?id=46624&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46624">
    <a href="/manual/vote-note.php?id=46624&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46624" title="66% like this...">
    2
    </div>
  </div>
  <a href="#46624" class="name">
  <strong class="user"><em>g8z at yahoo dot com</em></strong></a><a class="genanchor" href="#46624"> &para;</a><div class="date" title="2004-10-17 11:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46624">
<div class="phpcode"><code><span class="html">This is for users who are looking for a way to merge HTML form data with a PDF Form, then output the PDF Form with data populated in it, to a web browser.<br /><br />This is a pure PHP solution which does NOT require the FDF toolkit. Contributed by www.TUFaT.com<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// the full http path to the PDF form<br /></span><span class="default">$form </span><span class="keyword">= </span><span class="string">'<a href="http://my_domain.com/my_pdf_form.pdf" rel="nofollow" target="_blank">http://my_domain.com/my_pdf_form.pdf</a>'</span><span class="keyword">;<br /><br />function </span><span class="default">create_fdf </span><span class="keyword">(</span><span class="default">$pdffile</span><span class="keyword">, </span><span class="default">$strings</span><span class="keyword">, </span><span class="default">$keys</span><span class="keyword">)<br />{<br />    </span><span class="default">$fdf </span><span class="keyword">= </span><span class="string">"%FDF-1.2\n%????\n"</span><span class="keyword">;<br />    </span><span class="default">$fdf </span><span class="keyword">.= </span><span class="string">"1 0 obj \n&lt;&lt; /FDF &lt;&lt; /Fields [\n"</span><span class="keyword">;<br /><br />    foreach (</span><span class="default">$strings </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        </span><span class="default">$key </span><span class="keyword">= </span><span class="default">addcslashes</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="string">"\n\r\t\\()"</span><span class="keyword">);<br />        </span><span class="default">$value </span><span class="keyword">= </span><span class="default">addcslashes</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, </span><span class="string">"\n\r\t\\()"</span><span class="keyword">);<br />        </span><span class="default">$fdf </span><span class="keyword">.= </span><span class="string">"&lt;&lt; /T (</span><span class="default">$key</span><span class="string">) /V (</span><span class="default">$value</span><span class="string">) &gt;&gt; \n"</span><span class="keyword">;<br />    }<br />    foreach (</span><span class="default">$keys </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        </span><span class="default">$key </span><span class="keyword">= </span><span class="default">addcslashes</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">, </span><span class="string">"\n\r\t\\()"</span><span class="keyword">);<br />        </span><span class="default">$fdf </span><span class="keyword">.= </span><span class="string">"&lt;&lt; /T (</span><span class="default">$key</span><span class="string">) /V /</span><span class="default">$value</span><span class="string"> &gt;&gt; \n"</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$fdf </span><span class="keyword">.= </span><span class="string">"]\n/F (</span><span class="default">$pdffile</span><span class="string">) &gt;&gt;"</span><span class="keyword">;<br />    </span><span class="default">$fdf </span><span class="keyword">.= </span><span class="string">"&gt;&gt;\nendobj\ntrailer\n&lt;&lt;\n"</span><span class="keyword">;<br />    </span><span class="default">$fdf </span><span class="keyword">.= </span><span class="string">"/Root 1 0 R \n\n&gt;&gt;\n"</span><span class="keyword">;<br />    </span><span class="default">$fdf </span><span class="keyword">.= </span><span class="string">"%%EOF"</span><span class="keyword">;<br /><br />    return </span><span class="default">$fdf</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">// Fill in text fields<br /></span><span class="default">$strings </span><span class="keyword">= array(<br />    </span><span class="string">'date' </span><span class="keyword">=&gt; </span><span class="string">'10/17/2004'</span><span class="keyword">,<br />    </span><span class="string">'full_name' </span><span class="keyword">=&gt; </span><span class="string">'Joe Doe'</span><span class="keyword">,<br />    </span><span class="string">'phone_num' </span><span class="keyword">=&gt; </span><span class="string">'123-4567'</span><span class="keyword">,<br />    </span><span class="string">'company' </span><span class="keyword">=&gt; </span><span class="string">'ACME Widgets'</span><span class="keyword">,<br />    </span><span class="string">'amount' </span><span class="keyword">=&gt; </span><span class="string">'USD 100.00'<br />    </span><span class="keyword">);<br /><br /></span><span class="comment">// Fill in check boxes/radio buttons<br /></span><span class="default">$keys </span><span class="keyword">= array(</span><span class="string">'<br />    gender' </span><span class="keyword">=&gt; </span><span class="string">'male'</span><span class="keyword">,</span><span class="comment">//radio button<br />    </span><span class="string">'is_adult' </span><span class="keyword">=&gt; </span><span class="string">'Off'</span><span class="keyword">,</span><span class="comment">//checkbox<br />    </span><span class="string">'urgent' </span><span class="keyword">=&gt; </span><span class="string">'On'</span><span class="comment">//checkbox<br />    </span><span class="keyword">);<br /><br /></span><span class="comment">// Output the PDF form, with form data filled-in<br /></span><span class="default">header</span><span class="keyword">(</span><span class="string">'Content-type: application/vnd.fdf'</span><span class="keyword">);<br />echo </span><span class="default">create_fdf</span><span class="keyword">(</span><span class="default">$form</span><span class="keyword">, </span><span class="default">$strings</span><span class="keyword">, </span><span class="default">$keys</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="105432">  <div class="votes">
    <div id="Vu105432">
    <a href="/manual/vote-note.php?id=105432&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105432">
    <a href="/manual/vote-note.php?id=105432&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105432" title="60% like this...">
    2
    </div>
  </div>
  <a href="#105432" class="name">
  <strong class="user"><em>bea dot el dot tea at gmail dot com</em></strong></a><a class="genanchor" href="#105432"> &para;</a><div class="date" title="2011-08-17 09:01"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105432">
<div class="phpcode"><code><span class="html">If you can't get the php_fdf.dll working in PHP 5.3 on Windows, one possible work around is to use the activeX version from the "FDF Toolkit for Windows" from the Adobe website.  Here is part of a class I built for one of my projects.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">FDF</span><span class="keyword">{<br />    public </span><span class="default">$NormalAP </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    public </span><span class="default">$RolloverAP </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;<br />    public </span><span class="default">$DownAP </span><span class="keyword">= </span><span class="default">2</span><span class="keyword">;<br />    <br />    protected </span><span class="default">$fdf</span><span class="keyword">;<br />    <br />    public function </span><span class="default">__construct</span><span class="keyword">(){<br />        </span><span class="default">$com </span><span class="keyword">= new </span><span class="default">COM</span><span class="keyword">(</span><span class="string">'FdfApp.FdfApp'</span><span class="keyword">);<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fdf </span><span class="keyword">= </span><span class="default">$com</span><span class="keyword">-&gt;</span><span class="default">FDFCreate</span><span class="keyword">();<br />    }<br />    public function </span><span class="default">setFile</span><span class="keyword">(</span><span class="default">$fileName</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fdf</span><span class="keyword">-&gt;</span><span class="default">FDFSetFile</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">' '</span><span class="keyword">, </span><span class="string">'%20'</span><span class="keyword">, </span><span class="default">$fileName</span><span class="keyword">));<br />    }<br />    public function </span><span class="default">setValue</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fdf</span><span class="keyword">-&gt;</span><span class="default">FDFSetValue</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />    }<br />    public function </span><span class="default">setAP</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">, </span><span class="default">$whichFace</span><span class="keyword">, </span><span class="default">$fileName</span><span class="keyword">, </span><span class="default">$pageNumber</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fdf</span><span class="keyword">-&gt;</span><span class="default">FDFSetAP</span><span class="keyword">(</span><span class="default">$field</span><span class="keyword">, </span><span class="default">$whichFace</span><span class="keyword">, </span><span class="default">$fileName</span><span class="keyword">, </span><span class="default">$pageNumber</span><span class="keyword">);<br />    }<br />    public function </span><span class="default">savetoFile</span><span class="keyword">(</span><span class="default">$saveFileName</span><span class="keyword">){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fdf</span><span class="keyword">-&gt;</span><span class="default">FDFSavetoFile</span><span class="keyword">(</span><span class="default">$saveFileName</span><span class="keyword">);<br />    }<br />    public function </span><span class="default">close</span><span class="keyword">(){<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">fdf</span><span class="keyword">-&gt;</span><span class="default">FDFclose</span><span class="keyword">();<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="40991">  <div class="votes">
    <div id="Vu40991">
    <a href="/manual/vote-note.php?id=40991&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd40991">
    <a href="/manual/vote-note.php?id=40991&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V40991" title="66% like this...">
    1
    </div>
  </div>
  <a href="#40991" class="name">
  <strong class="user"><em>software at yvanrodrigues dot com</em></strong></a><a class="genanchor" href="#40991"> &para;</a><div class="date" title="2004-03-25 02:16"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom40991">
<div class="phpcode"><code><span class="html">Do not use version 6 of the fdftk.dll (windows) with PHP4.3.4, use the one that comes with PHP.<br /><br />If you use the newer DLL fdf_create will not return a valid handle.</span></code></div>
  </div>
 </div>
  <div class="note" id="27192">  <div class="votes">
    <div id="Vu27192">
    <a href="/manual/vote-note.php?id=27192&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd27192">
    <a href="/manual/vote-note.php?id=27192&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V27192" title="66% like this...">
    1
    </div>
  </div>
  <a href="#27192" class="name">
  <strong class="user"><em>Toppi at i-Mehl dot De</em></strong></a><a class="genanchor" href="#27192"> &para;</a><div class="date" title="2002-11-26 12:18"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom27192">
<div class="phpcode"><code><span class="html">I tried a lot with FDF -&gt; PDF and merging these documents...<br />in my opinon xfdf is more handy than fdf... for those who'd like to try: feel free to use this little function to generate an xfdf document from an array.<br /><br />ToPPi<br /><br />function array2xfdf($xfdf_data, $pdf_file) { <br />// Creates an XFDF File from a 2 dimensional <br />// Array Format: "array ("key1" =&gt; "content1", "key2" =&gt; "content2"); <br />$xfdf = "&lt;?xml version='1.0' encoding='UTF-8'?&gt;\n"; <br />$xfdf .= "&lt;xfdf xmlns='<a href="http://ns.adobe.com/xfdf/" rel="nofollow" target="_blank">http://ns.adobe.com/xfdf/</a>' xml:space='preserve'&gt;\n"; <br />$xfdf .= "&lt;fields&gt;\n"; <br />// Loop -&gt; Array to XFDF Data <br />foreach ($xfdf_data as $key =&gt; $val) { <br />$xfdf .= "&lt;field name='".$key."'&gt;\n"; <br />$xfdf .= "&lt;value&gt;".$val."&lt;/value&gt;\n"; <br />$xfdf .= "&lt;/field&gt;\n"; <br />}; <br />// XFDF "Footer" <br />$xfdf .= "&lt;/fields&gt;"; <br />$xfdf .= "&lt;f href='".$pdf_file."'/&gt;"; <br />$xfdf .= "&lt;/xfdf&gt;"; <br />return $xfdf; <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="23978">  <div class="votes">
    <div id="Vu23978">
    <a href="/manual/vote-note.php?id=23978&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23978">
    <a href="/manual/vote-note.php?id=23978&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23978" title="66% like this...">
    1
    </div>
  </div>
  <a href="#23978" class="name">
  <strong class="user"><em>adam at andemyte dot com</em></strong></a><a class="genanchor" href="#23978"> &para;</a><div class="date" title="2002-08-02 11:30"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23978">
<div class="phpcode"><code><span class="html">Here is yet another example of generating pre-filled PDFs without using the FDF functions. This function takes two args: a URL to the PDF (like "<a href="http://domain.com/path/to/form.pdf" rel="nofollow" target="_blank">http://domain.com/path/to/form.pdf</a>" and an array with all the field's values. <br /><br />/* <br />    WARNING!! THIS FUNCTION SENDS HTTP HEADERS! It MUST be called before  <br />    any content is spooled to the browser, or the function will fail! <br />    <br />    void output_fdf (string $pdf_file, array $pdf_data)<br /><br />        $pdf_file:  a string containing a URL path to a PDF file on the <br />                    server. This PDF MUST exist and contain fields with<br />                    the names referenced by $pdf_data for this function<br />                    to work.<br />        $pdf_data:  an array of any fields in $pdf_file that you want to<br />                    populate, of the form key=&gt;val; where the field <br />                    name is the key, and the field's value is in val.<br />    <br />*/    <br /><br />function output_fdf ($pdf_file, $pdf_data) {<br />    <br />    $fdf = "%FDF-1.2\n%????\n";<br />    $fdf .= "1 0 obj \n&lt;&lt; /FDF ";<br />    $fdf .= "&lt;&lt; /Fields [\n"; <br />    <br />    foreach ($pdf_data as $key =&gt; $val)<br />        $fdf .= "&lt;&lt; /V ($val)/T ($key) &gt;&gt; \n";<br />        <br />    $fdf .= "]\n/F ($pdf_file) &gt;&gt;";<br />    $fdf .= "&gt;&gt;\nendobj\ntrailer\n&lt;&lt;\n";<br />    $fdf .= "/Root 1 0 R \n\n&gt;&gt;\n";<br />    $fdf .= "%%EOF";<br />    <br />    /* Now we display the FDF data which causes Acrobat to start  */<br />    <br />    header ("Content-Type: application/vnd.fdf");<br />    print $fdf;<br />    <br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="60593">  <div class="votes">
    <div id="Vu60593">
    <a href="/manual/vote-note.php?id=60593&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60593">
    <a href="/manual/vote-note.php?id=60593&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60593" title="60% like this...">
    1
    </div>
  </div>
  <a href="#60593" class="name">
  <strong class="user"><em>wesley_grant at yahoo dot com</em></strong></a><a class="genanchor" href="#60593"> &para;</a><div class="date" title="2006-01-11 03:37"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60593">
<div class="phpcode"><code><span class="html">Changing the <br /><br />session.cache_limiter<br /><br />directive in the php.ini file to 'private'<br /><br />seems to resolve the issue with sending fdf data and session headers at the same time to Internet Explorer.</span></code></div>
  </div>
 </div>
  <div class="note" id="126490">  <div class="votes">
    <div id="Vu126490">
    <a href="/manual/vote-note.php?id=126490&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126490">
    <a href="/manual/vote-note.php?id=126490&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126490" title="100% like this...">
    1
    </div>
  </div>
  <a href="#126490" class="name">
  <strong class="user"><em>JFS at TRASH-MAIL dot COM</em></strong></a><a class="genanchor" href="#126490"> &para;</a><div class="date" title="2021-10-09 02:20"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126490">
<div class="phpcode"><code><span class="html">function parseFDF($file) {<br />    $pattern = "/\/T\s\(([^)]*)\)[\n]\/V\s\(([^)]*)\)/ism";<br /><br />    if (preg_match_all($pattern, $file, $out, PREG_SET_ORDER, 0)) {<br />        for ($i=0; $i&lt;count($out); $i++) {<br />            if (preg_match($pattern, $out[$i][0], $regs)) {<br />                $key = $regs[1];<br />                $val = $regs[2];<br />                $key = preg_replace("/^\s*\(/","",$key);<br />                $key = preg_replace("/\)$/","",$key);<br />                $key = preg_replace("/\\\/","",$key);<br />                $val = preg_replace("/^\s*\(/","",$val);<br />                $val = preg_replace("/\)$/","",$val);<br />                $matches[$key] = $val;<br />            }<br />        }<br />        return $matches;<br />    }<br />}<br /><br />$fdfFile = file_get_contents('testfdf.fdf');<br />var_dump(parseFDF($fdfFile));</span></code></div>
  </div>
 </div>
  <div class="note" id="57935">  <div class="votes">
    <div id="Vu57935">
    <a href="/manual/vote-note.php?id=57935&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57935">
    <a href="/manual/vote-note.php?id=57935&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57935" title="100% like this...">
    1
    </div>
  </div>
  <a href="#57935" class="name">
  <strong class="user"><em>bmount at livid dot us</em></strong></a><a class="genanchor" href="#57935"> &para;</a><div class="date" title="2005-10-19 08:05"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57935">
<div class="phpcode"><code><span class="html">For those of you struggling with FDF in Internet Explorer, here is your solution:<br /><br />DO NOT INITIALIZE A SESSION ON THE PAGE THAT GENERATES AND OUTPUTS FDF DATA. <br /><br />This will fix the page not found error.</span></code></div>
  </div>
 </div>
  <div class="note" id="43713">  <div class="votes">
    <div id="Vu43713">
    <a href="/manual/vote-note.php?id=43713&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43713">
    <a href="/manual/vote-note.php?id=43713&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43713" title="100% like this...">
    1
    </div>
  </div>
  <a href="#43713" class="name">
  <strong class="user"><em>m1tk4 at hotmail dot com</em></strong></a><a class="genanchor" href="#43713"> &para;</a><div class="date" title="2004-06-30 10:34"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43713">
<div class="phpcode"><code><span class="html">If you want to add FDF support without rebuilding your RedHat EL3 / Fedora PHP RPMs, see instructions at <a href="http://phprpms.sourceforge.net/fdf" rel="nofollow" target="_blank">http://phprpms.sourceforge.net/fdf</a></span></code></div>
  </div>
 </div>
  <div class="note" id="5420">  <div class="votes">
    <div id="Vu5420">
    <a href="/manual/vote-note.php?id=5420&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd5420">
    <a href="/manual/vote-note.php?id=5420&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V5420" title="100% like this...">
    1
    </div>
  </div>
  <a href="#5420" class="name">
  <strong class="user"><em>joe at koontz dot net</em></strong></a><a class="genanchor" href="#5420"> &para;</a><div class="date" title="2000-04-28 04:42"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom5420">
<div class="phpcode"><code><span class="html">The simplest thing to do is get the FDF data from $HTTP_RAW_POST_DATA.  (unless you have the server library installed none of the fdf data gets parsed!) This is typical of  what you get:
<br />%FDF-1.2
<br />1 0 obj
<br />&lt;&lt; 
<br />/FDF &lt;&lt; /Fields [ &lt;&lt; /V (0)/T (amount0)&gt;&gt; &lt;&lt; /V (0)/T (amount1)&gt;&gt; &lt;&lt; /V (0)/T (amount2)&gt;&gt; 
<br />&lt;&lt; /V (0)/T (amount3)&gt;&gt; &lt;&lt; /V (0)/T (amount4)&gt;&gt; &lt;&lt; /V (0)/T (amount5)&gt;&gt; 
<br />&lt;&lt; /V (0)/T (amount6)&gt;&gt; &lt;&lt; /V (0)/T (amount7)&gt;&gt; &lt;&lt; /V (0)/T (amount8)&gt;&gt; 
<br />&lt;&lt; /V (0)/T (amount9)&gt;&gt; &lt;&lt; /V /0102 /T (chase_bk)&gt;&gt; &lt;&lt; /V (0)/T (count)&gt;&gt; 
<br />&lt;&lt; /V (0)/T (invtotal)&gt;&gt; &lt;&lt; /V (12/21/2000)/T (sent_ap)&gt;&gt; &lt;&lt; /V /Off /T (spec_hand)&gt;&gt; 
<br />&lt;&lt; /V (041232)/T (transit_no)&gt;&gt; &lt;&lt; /V (THIS FORM IS NOT COMPLETE!!!)/T (X)&gt;&gt; 
<br />] 
<br />/F (<a href="http://x.com/forms/AA00390q.pdf" rel="nofollow" target="_blank">http://x.com/forms/AA00390q.pdf</a>)&gt;&gt; 
<br />&gt;&gt; 
<br />endobj
<br />trailer
<br />&lt;&lt;
<br />/Root 1 0 R 
<br />
<br />&gt;&gt;
<br />%%EOF
<br />kill everything before the [ and then parse it down into key value pairs.  
<br />I wrote this to create an FDF, make sure you do a 
<br />header("Content-type: application/vnd.fdf");
<br />before you echo the returned value to the user.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">FDFput</span><span class="keyword">(</span><span class="default">$FDFpage</span><span class="keyword">){
<br /> </span><span class="default">$A </span><span class="keyword">= </span><span class="string">"%FDF-1.2\n1 0 obj\n&lt;&lt; \n/FDF &lt;&lt; /Fields [ \n"</span><span class="keyword">;
<br /> </span><span class="default">$C </span><span class="keyword">= </span><span class="string">" ] \n"    </span><span class="keyword">;
<br />     if (</span><span class="default">$FDFpage</span><span class="keyword">&gt;</span><span class="string">"" </span><span class="keyword">) {</span><span class="default">$C </span><span class="keyword">.=</span><span class="string">" /F (</span><span class="default">$FDFpage</span><span class="string">)&gt;&gt;\n"</span><span class="keyword">;}
<br />    </span><span class="default">$C </span><span class="keyword">.= </span><span class="string">"&gt;&gt;\n&gt;&gt; \nendobj\ntrailer\n\n&lt;&lt;/Root 1 0 R&gt;&gt;\n%%EOF\n"</span><span class="keyword">;
<br />    </span><span class="default">$B </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br /> </span><span class="default">reset</span><span class="keyword">(</span><span class="default">$FDFData</span><span class="keyword">);
<br /> while (list(</span><span class="default">$key</span><span class="keyword">, </span><span class="default">$val</span><span class="keyword">) = </span><span class="default">each</span><span class="keyword">(</span><span class="default">$FDFData</span><span class="keyword">))
<br />  {
<br />  if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">)) &gt; </span><span class="default">0 </span><span class="keyword">&amp;&amp; </span><span class="default">is_string</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">))
<br />   {
<br />    </span><span class="default">$B </span><span class="keyword">.= </span><span class="string">"&lt;&lt;/T (</span><span class="default">$key</span><span class="string">) /V ("</span><span class="keyword">. </span><span class="default">$val </span><span class="keyword">. </span><span class="string">")&gt;&gt;\n"</span><span class="keyword">;
<br /></span><span class="comment">//echo     "&lt;&lt;/T ($key) /V (". $val . ")&gt;&gt;\n";
<br />                </span><span class="keyword">}
<br />  }
<br />    return </span><span class="default">$A</span><span class="keyword">.</span><span class="default">$B</span><span class="keyword">.</span><span class="default">$C</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;
<br /></span> 
<br />It ain't perfect - but it works. (I use HTML for posting to the server, FDF to the browser)
<br />joe</span></code></div>
  </div>
 </div>
  <div class="note" id="30054">  <div class="votes">
    <div id="Vu30054">
    <a href="/manual/vote-note.php?id=30054&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd30054">
    <a href="/manual/vote-note.php?id=30054&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V30054" title="50% like this...">
    0
    </div>
  </div>
  <a href="#30054" class="name">
  <strong class="user"><em>Teemu</em></strong></a><a class="genanchor" href="#30054"> &para;</a><div class="date" title="2003-03-05 06:17"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom30054">
<div class="phpcode"><code><span class="html">Maybe you have to use Header-function that your browser will regonize xfdf-file. Like this:<br /><br />Header( "Content-type: application/vnd.adobe.xfdf");</span></code></div>
  </div>
 </div>
  <div class="note" id="19735">  <div class="votes">
    <div id="Vu19735">
    <a href="/manual/vote-note.php?id=19735&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19735">
    <a href="/manual/vote-note.php?id=19735&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19735" title="50% like this...">
    0
    </div>
  </div>
  <a href="#19735" class="name">
  <strong class="user"><em>noah at NOSPAMbrandfidelity dot com</em></strong></a><a class="genanchor" href="#19735"> &para;</a><div class="date" title="2002-03-08 08:26"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19735">
<div class="phpcode"><code><span class="html">function parse($file) {<br />                if (!preg_match_all("/&lt;&lt;\s*\/V([^&gt;]*)&gt;&gt;/x",<br />$file,$out,PREG_SET_ORDER))<br />                        return;<br />                for ($i=0;$i&lt;count($out);$i++) {<br />                        $pattern = "&lt;&lt;.*/V\s*(.*)\s*/T\s*(.*)\s*&gt;&gt;";<br />                        $thing = $out[$i][1];<br />                        if (eregi($pattern,$out[$i][0],$regs)) {<br />                                $key = $regs[2];<br />                                $val = $regs[1];<br />                                $key = preg_replace("/^\s*\(/","",$key);<br />                                $key = preg_replace("/\)$/","",$key);<br />                                $key = preg_replace("/\\\/","",$key);<br />                                $val = preg_replace("/^\s*\(/","",$val);<br />                                $val = preg_replace("/\)$/","",$val);<br />                                $matches[$key] = $val;<br />                        }<br />                }<br />                return $matches;<br />        }</span></code></div>
  </div>
 </div>
  <div class="note" id="17752">  <div class="votes">
    <div id="Vu17752">
    <a href="/manual/vote-note.php?id=17752&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd17752">
    <a href="/manual/vote-note.php?id=17752&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V17752" title="50% like this...">
    0
    </div>
  </div>
  <a href="#17752" class="name">
  <strong class="user"><em>gregDELETETHIS at laundrymat dot tv</em></strong></a><a class="genanchor" href="#17752"> &para;</a><div class="date" title="2001-12-21 03:06"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom17752">
<div class="phpcode"><code><span class="html">Here is an easy script to output fdf data to the browser without using the fdf toolkit or creating an actual fdf file on the server.
<br />By the way acrobat is very picky about line breaks so you must leave the "\n" in the script. The script reads the variables posted to it from a form use POST and creates a fdf file from them. The field names posted to this script must match the field names in the pdf. Acrobat will ignore any that don't match.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment">//path to pdf file
<br /></span><span class="default">$url</span><span class="keyword">=</span><span class="string">"<a href="http://www.some_url.com/form.pdf" rel="nofollow" target="_blank">http://www.some_url.com/form.pdf</a>"</span><span class="keyword">;
<br />
<br /></span><span class="default">$values</span><span class="keyword">=</span><span class="default">$HTTP_POST_VARS</span><span class="keyword">;
<br />
<br /></span><span class="default">$fdfdata </span><span class="keyword">= </span><span class="string">"%FDF-1.2\n%????\n"</span><span class="keyword">;
<br /></span><span class="default">$fdfdata </span><span class="keyword">.= </span><span class="string">"1 0 obj \n&lt;&lt; /FDF "</span><span class="keyword">;
<br /></span><span class="default">$fdfdata </span><span class="keyword">.= </span><span class="string">"&lt;&lt; /Fields [\n"</span><span class="keyword">; 
<br />
<br /></span><span class="comment">//loop that adds the field names and values
<br /></span><span class="keyword">foreach(</span><span class="default">$values </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$val</span><span class="keyword">)
<br />    {
<br />    </span><span class="default">$fdfdata</span><span class="keyword">.=</span><span class="string">"&lt;&lt; /V (</span><span class="default">$val</span><span class="string">)/T (</span><span class="default">$key</span><span class="string">) &gt;&gt; "</span><span class="keyword">;
<br />    }
<br />
<br />    
<br /></span><span class="default">$fdfdata </span><span class="keyword">.= </span><span class="string">"]\n"</span><span class="keyword">;
<br /></span><span class="default">$fdfdata </span><span class="keyword">.= </span><span class="string">"/F (</span><span class="default">$url</span><span class="string">) &gt;&gt;"</span><span class="keyword">;
<br /></span><span class="default">$fdfdata </span><span class="keyword">.= </span><span class="string">"&gt;&gt;\nendobj\ntrailer\n&lt;&lt;\n/Root 1 0 R\n&gt;&gt;\n"</span><span class="keyword">;
<br /></span><span class="default">$fdfdata </span><span class="keyword">.= </span><span class="string">"%%EOF"</span><span class="keyword">;
<br />
<br /></span><span class="comment">/*** Now we display the FDF data which causes Acrobat to start  ***/
<br />
<br /></span><span class="default">header </span><span class="keyword">(</span><span class="string">"Content-Type: application/vnd.fdf"</span><span class="keyword">);
<br />print </span><span class="default">$fdfdata</span><span class="keyword">;
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />You can use javascript in the pdf to read the values from a GET method posted directly to the pdf. you can see both methods here: <a href="http://laundrymat.tv/pdf/" rel="nofollow" target="_blank">http://laundrymat.tv/pdf/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="76381">  <div class="votes">
    <div id="Vu76381">
    <a href="/manual/vote-note.php?id=76381&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76381">
    <a href="/manual/vote-note.php?id=76381&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76381" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#76381" class="name">
  <strong class="user"><em>info at theindigoworks dot com</em></strong></a><a class="genanchor" href="#76381"> &para;</a><div class="date" title="2007-07-12 08:49"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76381">
<div class="phpcode"><code><span class="html">re. g8z at yahoo dot com 18-Oct-2004 06:46<br /><br />I think there is a line missing in <br /><br />foreach ($keys as $key =&gt; $value)<br />    {<br />        $key = addcslashes($key, "\n\r\t\\()");<br />        $fdf .= "&lt;&lt; /T ($key) /V /$value &gt;&gt; \n";<br />    }<br /><br />I have changed it to read<br /><br /> $key = addcslashes($key, "\n\r\t\\()");<br />$value = addcslashes($value, "\n\r\t\\()");<br />   $fdf .= "&lt;&lt; /T ($key) /V /$value &gt;&gt; \n";<br /><br />Now all the check boxes and radio buttons are populated, not just the last one in the form as was happening before.</span></code></div>
  </div>
 </div>
  <div class="note" id="46345">  <div class="votes">
    <div id="Vu46345">
    <a href="/manual/vote-note.php?id=46345&amp;page=ref.fdf&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46345">
    <a href="/manual/vote-note.php?id=46345&amp;page=ref.fdf&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46345" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#46345" class="name">
  <strong class="user"><em>sid at accesspdf dot com</em></strong></a><a class="genanchor" href="#46345"> &para;</a><div class="date" title="2004-10-07 11:09"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46345">
<div class="phpcode"><code><span class="html">Basic FDF data is easy to create using native PHP; you don't need Adobe's FDF Toolkit. I wrote a function for this purpose called forge_fdf(). You can download it from:<br /><br /><a href="http://www.pdfhacks.com/forge_fdf/" rel="nofollow" target="_blank">http://www.pdfhacks.com/forge_fdf/</a><br /><br />I created it for my book, PDF Hacks. An example of forge_fdf() in action can be viewed online:<br /><br /><a href="http://pdfhacks.com/form_session/form_session-1.1/" rel="nofollow" target="_blank">http://pdfhacks.com/form_session/form_session-1.1/</a><br /><br />Download the full code for this online example from:<br /><br /><a href="http://pdfhacks.com/form_session/" rel="nofollow" target="_blank">http://pdfhacks.com/form_session/</a><br /><br />Note how the PDF form data is submitted back to the server via POST rather than FDF. No need to parse FDF.<br /><br />Cheers-<br /><br />Sid Steward</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.fdf&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.fdf.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.fdf.php">FDF</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.fdf.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="fdf.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="fdf.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="fdf.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.fdf.php" title="FDF Functions">FDF Functions</a>
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
