<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Radius Functions - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/ref.radius.php">
 <link rel="shorturl" href="https://www.php.net/radius">
 <link rel="alternate" href="https://www.php.net/radius" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.radius.php">
 <link rel="prev" href="https://www.php.net/manual/en/radius.examples.php">
 <link rel="next" href="https://www.php.net/manual/en/function.radius-acct-open.php">

 <link rel="alternate" href="https://www.php.net/manual/en/ref.radius.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/ref.radius.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/ref.radius.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/ref.radius.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/ref.radius.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/ref.radius.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/ref.radius.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/ref.radius.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/ref.radius.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/ref.radius.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/ref.radius.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Radius Functions" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Radius Functions - Manual" />
<meta name="twitter:description" content="Radius Functions" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Radius Functions - Manual" />
<meta itemprop="description" content="Radius Functions" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Radius Functions" />

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
        <a href="function.radius-acct-open.php">
          radius_acct_open &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="radius.examples.php">
          &laquo; Examples        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.auth.php'>Authentication Services</a></li>      <li><a href='book.radius.php'>Radius</a></li>      </ul>
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
            <option value='en/ref.radius.php' selected="selected">English</option>
            <option value='de/ref.radius.php'>German</option>
            <option value='es/ref.radius.php'>Spanish</option>
            <option value='fr/ref.radius.php'>French</option>
            <option value='it/ref.radius.php'>Italian</option>
            <option value='ja/ref.radius.php'>Japanese</option>
            <option value='pt_BR/ref.radius.php'>Brazilian Portuguese</option>
            <option value='ru/ref.radius.php'>Russian</option>
            <option value='tr/ref.radius.php'>Turkish</option>
            <option value='uk/ref.radius.php'>Ukrainian</option>
            <option value='zh/ref.radius.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="ref.radius" class="reference">
 <h1 class="title">Radius Functions</h1>

 



























   















  





















































































































  















  











































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="function.radius-acct-open.php">radius_acct_open</a> — Creates a Radius handle for accounting</li><li><a href="function.radius-add-server.php">radius_add_server</a> — Adds a server</li><li><a href="function.radius-auth-open.php">radius_auth_open</a> — Creates a Radius handle for authentication</li><li><a href="function.radius-close.php">radius_close</a> — Frees all ressources</li><li><a href="function.radius-config.php">radius_config</a> — Causes the library to read the given configuration file</li><li><a href="function.radius-create-request.php">radius_create_request</a> — Create accounting or authentication request</li><li><a href="function.radius-cvt-addr.php">radius_cvt_addr</a> — Converts raw data to IP-Address</li><li><a href="function.radius-cvt-int.php">radius_cvt_int</a> — Converts raw data to integer</li><li><a href="function.radius-cvt-string.php">radius_cvt_string</a> — Converts raw data to string</li><li><a href="function.radius-demangle.php">radius_demangle</a> — Demangles data</li><li><a href="function.radius-demangle-mppe-key.php">radius_demangle_mppe_key</a> — Derives mppe-keys from mangled data</li><li><a href="function.radius-get-attr.php">radius_get_attr</a> — Extracts an attribute</li><li><a href="function.radius-get-tagged-attr-data.php">radius_get_tagged_attr_data</a> — Extracts the data from a tagged attribute</li><li><a href="function.radius-get-tagged-attr-tag.php">radius_get_tagged_attr_tag</a> — Extracts the tag from a tagged attribute</li><li><a href="function.radius-get-vendor-attr.php">radius_get_vendor_attr</a> — Extracts a vendor specific attribute</li><li><a href="function.radius-put-addr.php">radius_put_addr</a> — Attaches an IP address attribute</li><li><a href="function.radius-put-attr.php">radius_put_attr</a> — Attaches a binary attribute</li><li><a href="function.radius-put-int.php">radius_put_int</a> — Attaches an integer attribute</li><li><a href="function.radius-put-string.php">radius_put_string</a> — Attaches a string attribute</li><li><a href="function.radius-put-vendor-addr.php">radius_put_vendor_addr</a> — Attaches a vendor specific IP address attribute</li><li><a href="function.radius-put-vendor-attr.php">radius_put_vendor_attr</a> — Attaches a vendor specific binary attribute</li><li><a href="function.radius-put-vendor-int.php">radius_put_vendor_int</a> — Attaches a vendor specific integer attribute</li><li><a href="function.radius-put-vendor-string.php">radius_put_vendor_string</a> — Attaches a vendor specific string attribute</li><li><a href="function.radius-request-authenticator.php">radius_request_authenticator</a> — Returns the request authenticator</li><li><a href="function.radius-salt-encrypt-attr.php">radius_salt_encrypt_attr</a> — Salt-encrypts a value</li><li><a href="function.radius-send-request.php">radius_send_request</a> — Sends the request and waits for a reply</li><li><a href="function.radius-server-secret.php">radius_server_secret</a> — Returns the shared secret</li><li><a href="function.radius-strerror.php">radius_strerror</a> — Returns an error message</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/radius/reference.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fref.radius%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=ref.radius&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.radius.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="67954">  <div class="votes">
    <div id="Vu67954">
    <a href="/manual/vote-note.php?id=67954&amp;page=ref.radius&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67954">
    <a href="/manual/vote-note.php?id=67954&amp;page=ref.radius&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67954" title="60% like this...">
    2
    </div>
  </div>
  <a href="#67954" class="name">
  <strong class="user"><em>andac dot aydin at code64 dot de</em></strong></a><a class="genanchor" href="#67954"> &para;</a><div class="date" title="2006-07-07 08:32"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67954">
<div class="phpcode"><code><span class="html">If you are constantly getting the errormessage: <br /><br />Fatal error: Unknown function: radius_auth_open() in...<br /><br />And your Server is a Windows-System (for example standard-xampp installation), you propably did not remove the comment symbol ";" in front of "extension=php_radius.dll" in php.ini.<br /><br />If you did that, but get the error anyway:<br /><br />Additionally be sure you edited the right php.ini, since xampp installs several php.exe's but only "xampp/apache/bin/php.ini"  is the correct one!<br /><br />It did cost me 2 days to find that out!</span></code></div>
  </div>
 </div>
  <div class="note" id="80259">  <div class="votes">
    <div id="Vu80259">
    <a href="/manual/vote-note.php?id=80259&amp;page=ref.radius&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80259">
    <a href="/manual/vote-note.php?id=80259&amp;page=ref.radius&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80259" title="54% like this...">
    2
    </div>
  </div>
  <a href="#80259" class="name">
  <strong class="user"><em>SysCo/al - developer [at] sysco[dot] ch</em></strong></a><a class="genanchor" href="#80259"> &para;</a><div class="date" title="2008-01-06 05:39"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80259">
<div class="phpcode"><code><span class="html">Pure PHP radius class (do not need the radius package !)<br /><br />We have implemented a pure PHP radius class following the RFC 2865 rules. Using this class, it is also possible to do WWW realm authentication.<br /><br />Class abstract, full class implementation (LGPL) with helper files and examples can be found at <a href="http://developer.sysco.ch/php/" rel="nofollow" target="_blank">http://developer.sysco.ch/php/</a><br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// (...)<br /><br /></span><span class="keyword">class </span><span class="default">Radius<br /></span><span class="keyword">{<br />    </span><span class="comment">// (...)<br /><br />    </span><span class="keyword">public function </span><span class="default">Radius</span><span class="keyword">(</span><span class="default">$ip_radius_server </span><span class="keyword">= </span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="default">$shared_secret </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$radius_suffix </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$udp_timeout </span><span class="keyword">= </span><span class="default">5</span><span class="keyword">, </span><span class="default">$authentication_port </span><span class="keyword">= </span><span class="default">1812</span><span class="keyword">, </span><span class="default">$accounting_port </span><span class="keyword">= </span><span class="default">1813</span><span class="keyword">)<br />    {<br />        </span><span class="comment">// (...)<br />    </span><span class="keyword">}<br /><br />    </span><span class="comment">// (...)<br /><br />    </span><span class="keyword">function </span><span class="default">AccessRequest</span><span class="keyword">(</span><span class="default">$username </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$password </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$udp_timeout </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">)<br />    {<br /><br />        </span><span class="comment">// (...)<br /><br />        </span><span class="default">$_socket_to_server </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_DGRAM</span><span class="keyword">, </span><span class="default">17</span><span class="keyword">); </span><span class="comment">// UDP packet = 17<br />        <br />        </span><span class="keyword">if (</span><span class="default">$_socket_to_server </span><span class="keyword">=== </span><span class="default">FALSE</span><span class="keyword">)<br />        {<br />            </span><span class="comment">// (...)<br />        </span><span class="keyword">}<br />        elseif (</span><span class="default">FALSE </span><span class="keyword">=== </span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$_socket_to_server</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_ip_radius_server</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_authentication_port</span><span class="keyword">))<br />        {<br />            </span><span class="comment">// (...)<br />        </span><span class="keyword">}<br />        elseif (</span><span class="default">FALSE </span><span class="keyword">=== </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$_socket_to_server</span><span class="keyword">, </span><span class="default">$packet_data</span><span class="keyword">, </span><span class="default">$packet_length</span><span class="keyword">))<br />        {<br />            </span><span class="comment">// (...)<br />        </span><span class="keyword">}<br />        else<br />        {<br />            </span><span class="comment">// (...)<br />            </span><span class="default">$read_socket_array   </span><span class="keyword">= array(</span><span class="default">$_socket_to_server</span><span class="keyword">);<br />            </span><span class="default">$write_socket_array  </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />            </span><span class="default">$except_socket_array </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br /><br />            </span><span class="default">$received_packet </span><span class="keyword">= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br />            if (!(</span><span class="default">FALSE </span><span class="keyword">=== </span><span class="default">socket_select</span><span class="keyword">(</span><span class="default">$read_socket_array</span><span class="keyword">, </span><span class="default">$write_socket_array</span><span class="keyword">, </span><span class="default">$except_socket_array</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_udp_timeout</span><span class="keyword">)))<br />            {<br />                if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$_socket_to_server</span><span class="keyword">, </span><span class="default">$read_socket_array</span><span class="keyword">))<br />                {<br />                    if (</span><span class="default">FALSE </span><span class="keyword">=== (</span><span class="default">$received_packet </span><span class="keyword">= @</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$_socket_to_server</span><span class="keyword">, </span><span class="default">1024</span><span class="keyword">))) </span><span class="comment">// @ used, than no error is displayed if the connection is closed by the remote host<br />                    </span><span class="keyword">{<br />                        </span><span class="comment">// (...)<br />                    </span><span class="keyword">}<br />                    else<br />                    {<br />                        </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$_socket_to_server</span><span class="keyword">);<br />                    }<br />                }<br />            }<br />            else<br />            {<br />                </span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$_socket_to_server</span><span class="keyword">);<br />            }<br />        }<br /><br />        </span><span class="comment">// (...)<br />        <br />        </span><span class="keyword">return (</span><span class="default">2 </span><span class="keyword">== (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">_radius_packet_received</span><span class="keyword">));<br />    }<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Example<br /><span class="default">&lt;?php<br />    </span><span class="keyword">require_once(</span><span class="string">'radius.class.php'</span><span class="keyword">);<br />    </span><span class="default">$radius </span><span class="keyword">= new </span><span class="default">Radius</span><span class="keyword">(</span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="string">'secret'</span><span class="keyword">);<br />    if (</span><span class="default">$radius</span><span class="keyword">-&gt;</span><span class="default">AccessRequest</span><span class="keyword">(</span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'pass'</span><span class="keyword">))<br />    {<br />        echo </span><span class="string">"Authentication accepted."</span><span class="keyword">;<br />    }<br />    else<br />    {<br />        echo </span><span class="string">"Authentication rejected."</span><span class="keyword">;<br />    }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="65242">  <div class="votes">
    <div id="Vu65242">
    <a href="/manual/vote-note.php?id=65242&amp;page=ref.radius&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd65242">
    <a href="/manual/vote-note.php?id=65242&amp;page=ref.radius&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V65242" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#65242" class="name">
  <strong class="user"><em>shaun at verticalevolution dot com</em></strong></a><a class="genanchor" href="#65242"> &para;</a><div class="date" title="2006-04-27 08:03"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom65242">
<div class="phpcode"><code><span class="html">To expand on the simple example by jengo at phpgroupware dot org you can add a NAS IP address to the request by using:<br /><br />radius_put_addr($radius, RADIUS_NAS_IP_ADDRESS, '127.0.0.1');<br /><br />and not radius_put_attr or radius_put_string. I also had to use radius_put_string for the user name and password.</span></code></div>
  </div>
 </div>
  <div class="note" id="60683">  <div class="votes">
    <div id="Vu60683">
    <a href="/manual/vote-note.php?id=60683&amp;page=ref.radius&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd60683">
    <a href="/manual/vote-note.php?id=60683&amp;page=ref.radius&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V60683" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#60683" class="name">
  <strong class="user"><em>brett at silcon dot com</em></strong></a><a class="genanchor" href="#60683"> &para;</a><div class="date" title="2006-01-13 10:20"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom60683">
<div class="phpcode"><code><span class="html">Here's a longer example that DOES do Challenge Response and works with SecurID Authentication Managers.<br /><br /><a href="http://www.webtrotter.com/securid_radius.txt" rel="nofollow" target="_blank">http://www.webtrotter.com/securid_radius.txt</a><br /><br />(script wouldn't let me post it because of the long lines, plus it was too long of an example).</span></code></div>
  </div>
 </div>
  <div class="note" id="58088">  <div class="votes">
    <div id="Vu58088">
    <a href="/manual/vote-note.php?id=58088&amp;page=ref.radius&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58088">
    <a href="/manual/vote-note.php?id=58088&amp;page=ref.radius&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58088" title="38% like this...">
    -3
    </div>
  </div>
  <a href="#58088" class="name">
  <strong class="user"><em>jengo at phpgroupware dot org</em></strong></a><a class="genanchor" href="#58088"> &para;</a><div class="date" title="2005-10-23 08:26"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58088">
<div class="phpcode"><code><span class="html">Here is a simple example on how to auth against radius.  Note:  This doesn't handle challenge responses.
<br />
<br /><span class="default">&lt;?php
<br />    $radius </span><span class="keyword">= </span><span class="default">radius_auth_open</span><span class="keyword">();
<br />    if (! </span><span class="default">radius_add_server</span><span class="keyword">(</span><span class="default">$radius</span><span class="keyword">,</span><span class="string">'localhost'</span><span class="keyword">,</span><span class="default">0</span><span class="keyword">,</span><span class="string">'radiussecret'</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">))
<br />    {
<br />        die(</span><span class="string">'Radius Error: ' </span><span class="keyword">. </span><span class="default">radius_strerror</span><span class="keyword">(</span><span class="default">$radius</span><span class="keyword">));
<br />    }
<br />
<br />    if (! </span><span class="default">radius_create_request</span><span class="keyword">(</span><span class="default">$radius</span><span class="keyword">,</span><span class="default">RADIUS_ACCESS_REQUEST</span><span class="keyword">))
<br />    {
<br />        die(</span><span class="string">'Radius Error: ' </span><span class="keyword">. </span><span class="default">radius_strerror</span><span class="keyword">(</span><span class="default">$radius</span><span class="keyword">));
<br />    }
<br />
<br />    </span><span class="default">radius_put_attr</span><span class="keyword">(</span><span class="default">$radius</span><span class="keyword">,</span><span class="default">RADIUS_USER_NAME</span><span class="keyword">,</span><span class="string">'username'</span><span class="keyword">);
<br />    </span><span class="default">radius_put_attr</span><span class="keyword">(</span><span class="default">$radius</span><span class="keyword">,</span><span class="default">RADIUS_USER_PASSWORD</span><span class="keyword">,</span><span class="string">'password'</span><span class="keyword">);
<br />
<br />    switch (</span><span class="default">radius_send_request</span><span class="keyword">(</span><span class="default">$radius</span><span class="keyword">))
<br />    {
<br />        case </span><span class="default">RADIUS_ACCESS_ACCEPT</span><span class="keyword">:
<br />            echo </span><span class="string">'GOOD LOGIN'</span><span class="keyword">;
<br />            break;
<br />        case </span><span class="default">RADIUS_ACCESS_REJECT</span><span class="keyword">:
<br />            echo </span><span class="string">'BAD LOGIN'</span><span class="keyword">;
<br />            break;
<br />        case </span><span class="default">RADIUS_ACCESS_CHALLENGE</span><span class="keyword">:
<br />            echo </span><span class="string">'CHALLENGE REQUESTED'</span><span class="keyword">;
<br />            break;
<br />        default:
<br />            die(</span><span class="string">'Radius Error: ' </span><span class="keyword">. </span><span class="default">radius_strerror</span><span class="keyword">(</span><span class="default">$radius</span><span class="keyword">));
<br />    }
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=ref.radius&amp;repo=en&amp;redirect=https://www.php.net/manual/en/ref.radius.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.radius.php">Radius</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.radius.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="radius.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="radius.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="radius.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="current">
                            <a href="ref.radius.php" title="Radius Functions">Radius Functions</a>
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
