<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Examples - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/solr.examples.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/solr.examples.php">
 <link rel="alternate" href="https://www.php.net/manual/en/solr.examples.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.solr.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.solr-get-version.php">
 <link rel="next" href="https://www.php.net/manual/en/class.solrutils.php">

 <link rel="alternate" href="https://www.php.net/manual/en/solr.examples.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/solr.examples.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/solr.examples.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/solr.examples.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/solr.examples.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/solr.examples.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/solr.examples.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/solr.examples.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/solr.examples.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/solr.examples.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/solr.examples.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Examples" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Examples - Manual" />
<meta name="twitter:description" content="Examples" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Examples - Manual" />
<meta itemprop="description" content="Examples" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Examples" />

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
        <a href="class.solrutils.php">
          SolrUtils &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.solr-get-version.php">
          &laquo; solr_get_version        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.search.php'>Search Engine Extensions</a></li>      <li><a href='book.solr.php'>Solr</a></li>      </ul>
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
            <option value='en/solr.examples.php' selected="selected">English</option>
            <option value='de/solr.examples.php'>German</option>
            <option value='es/solr.examples.php'>Spanish</option>
            <option value='fr/solr.examples.php'>French</option>
            <option value='it/solr.examples.php'>Italian</option>
            <option value='ja/solr.examples.php'>Japanese</option>
            <option value='pt_BR/solr.examples.php'>Brazilian Portuguese</option>
            <option value='ru/solr.examples.php'>Russian</option>
            <option value='tr/solr.examples.php'>Turkish</option>
            <option value='uk/solr.examples.php'>Ukrainian</option>
            <option value='zh/solr.examples.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="solr.examples" class="chapter">
 <h1 class="title">Examples</h1>

 
    <p class="para">
        Examples of how to use the Apache Solr extension in PHP
    </p>
    <div class="example" id="example-4918">
        <p><strong>Example #1 Contents of the BootStrap file</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #FF8000">/* Domain name of the Solr server */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SERVER_HOSTNAME'</span><span style="color: #007700">, </span><span style="color: #DD0000">'solr.example.com'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Whether or not to run in secure mode */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SECURE'</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* HTTP Port to connection */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SERVER_PORT'</span><span style="color: #007700">, ((</span><span style="color: #0000BB">SOLR_SECURE</span><span style="color: #007700">) ? </span><span style="color: #0000BB">8443 </span><span style="color: #007700">: </span><span style="color: #0000BB">8983</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">/* HTTP Basic Authentication Username */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SERVER_USERNAME'</span><span style="color: #007700">, </span><span style="color: #DD0000">'admin'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* HTTP Basic Authentication password */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SERVER_PASSWORD'</span><span style="color: #007700">, </span><span style="color: #DD0000">'changeit'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* HTTP connection timeout */<br />/* This is maximum time in seconds allowed for the http data transfer operation. Default value is 30 seconds */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SERVER_TIMEOUT'</span><span style="color: #007700">, </span><span style="color: #0000BB">10</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* File name to a PEM-formatted private key + private certificate (concatenated in that order) */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SSL_CERT'</span><span style="color: #007700">, </span><span style="color: #DD0000">'certs/combo.pem'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* File name to a PEM-formatted private certificate only */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SSL_CERT_ONLY'</span><span style="color: #007700">, </span><span style="color: #DD0000">'certs/solr.crt'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* File name to a PEM-formatted private key */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SSL_KEY'</span><span style="color: #007700">, </span><span style="color: #DD0000">'certs/solr.key'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Password for PEM-formatted private key file */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SSL_KEYPASSWORD'</span><span style="color: #007700">, </span><span style="color: #DD0000">'StrongAndSecurePassword'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Name of file holding one or more CA certificates to verify peer with*/<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SSL_CAINFO'</span><span style="color: #007700">, </span><span style="color: #DD0000">'certs/cacert.crt'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Name of directory holding multiple CA certificates to verify peer with */<br /></span><span style="color: #0000BB">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'SOLR_SSL_CAPATH'</span><span style="color: #007700">, </span><span style="color: #DD0000">'certs/'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>


    </div>

 <div class="example" id="example-4919">
  <p><strong>Example #2 Adding a document to the index</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />    </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrInputDocument</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">, </span><span style="color: #0000BB">334455</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Software'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Lucene'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$updateResponse </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addDocument</span><span style="color: #007700">(</span><span style="color: #0000BB">$doc</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$updateResponse</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
<div class="cdata"><pre>
SolrObject Object
(
    [responseHeader] =&gt; SolrObject Object
        (
            [status] =&gt; 0
            [QTime] =&gt; 446
        )

)
</pre></div>
  </div>
 </div>
 
 <div class="example" id="example-4920">
  <p><strong>Example #3 Merging one document into another document</strong></p>
  <div class="example-contents">
   <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrDocument</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$second_doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrDocument</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">, </span><span style="color: #0000BB">1123</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">features </span><span style="color: #007700">= </span><span style="color: #DD0000">"PHP Client Side"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">features </span><span style="color: #007700">= </span><span style="color: #DD0000">"Fast development cycles"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">[</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">] = </span><span style="color: #DD0000">'Software'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">[</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">] = </span><span style="color: #DD0000">'Custom Search'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cat   </span><span style="color: #007700">= </span><span style="color: #DD0000">'Information Technology'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$second_doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Lucene Search'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$second_doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">merge</span><span style="color: #007700">(</span><span style="color: #0000BB">$doc</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$second_doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">toArray</span><span style="color: #007700">());<br /><br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
   <div class="cdata"><pre>
Array
(
    [document_boost] =&gt; 0
    [field_count] =&gt; 3
    [fields] =&gt; Array
        (
            [0] =&gt; SolrDocumentField Object
                (
                    [name] =&gt; cat
                    [boost] =&gt; 0
                    [values] =&gt; Array
                        (
                            [0] =&gt; Software
                            [1] =&gt; Custom Search
                            [2] =&gt; Information Technology
                        )

                )

            [1] =&gt; SolrDocumentField Object
                (
                    [name] =&gt; id
                    [boost] =&gt; 0
                    [values] =&gt; Array
                        (
                            [0] =&gt; 1123
                        )

                )

            [2] =&gt; SolrDocumentField Object
                (
                    [name] =&gt; features
                    [boost] =&gt; 0
                    [values] =&gt; Array
                        (
                            [0] =&gt; PHP Client Side
                            [1] =&gt; Fast development cycles
                        )

                )

        )

)
</pre></div>
  </div>
 </div>
 
 
 <div class="example" id="example-4921">
  <p><strong>Example #4 Searching for documents - SolrObject responses</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />    </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrQuery</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setQuery</span><span style="color: #007700">(</span><span style="color: #DD0000">'lucene'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setStart</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setRows</span><span style="color: #007700">(</span><span style="color: #0000BB">50</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'features'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'timestamp'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query_response </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$response </span><span style="color: #007700">= </span><span style="color: #0000BB">$query_response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
<div class="cdata"><pre>
SolrObject Object
(
    [responseHeader] =&gt; SolrObject Object
        (
            [status] =&gt; 0
            [QTime] =&gt; 1
            [params] =&gt; SolrObject Object
                (
                    [wt] =&gt; xml
                    [rows] =&gt; 50
                    [start] =&gt; 0
                    [indent] =&gt; on
                    [q] =&gt; lucene
                    [fl] =&gt; cat,features,id,timestamp
                    [version] =&gt; 2.2
                )

        )

    [response] =&gt; SolrObject Object
        (
            [numFound] =&gt; 3
            [start] =&gt; 0
            [docs] =&gt; Array
                (
                    [0] =&gt; SolrObject Object
                        (
                            [cat] =&gt; Array
                                (
                                    [0] =&gt; Software
                                    [1] =&gt; Lucene
                                )

                            [id] =&gt; 334456
                        )

                    [1] =&gt; SolrObject Object
                        (
                            [cat] =&gt; Array
                                (
                                    [0] =&gt; Software
                                    [1] =&gt; Lucene
                                )

                            [id] =&gt; 334455
                        )

                    [2] =&gt; SolrObject Object
                        (
                            [cat] =&gt; Array
                                (
                                    [0] =&gt; software
                                    [1] =&gt; search
                                )

                            [features] =&gt; Array
                                (
                                    [0] =&gt; Advanced Full-Text Search Capabilities using Lucene
                                    [1] =&gt; Optimized for High Volume Web Traffic
                                    [2] =&gt; Standards Based Open Interfaces - XML and HTTP
                                    [3] =&gt; Comprehensive HTML Administration Interfaces
                                    [4] =&gt; Scalability - Efficient Replication to other Solr Search Servers
                                    [5] =&gt; Flexible and Adaptable with XML configuration and Schema
                                    [6] =&gt; Good unicode support: héllo (hello with an accent over the e)
                                )

                            [id] =&gt; SOLR1000
                            [timestamp] =&gt; 2009-09-04T20:38:55.906
                        )

                )

        )

)
</pre></div>
  </div>
 </div>
 
 <div class="example" id="example-4922">
  <p><strong>Example #5 Searching for documents - SolrDocument responses</strong></p>
  <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />    </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrQuery</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setQuery</span><span style="color: #007700">(</span><span style="color: #DD0000">'lucene'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setStart</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setRows</span><span style="color: #007700">(</span><span style="color: #0000BB">50</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'features'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'id'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">addField</span><span style="color: #007700">(</span><span style="color: #DD0000">'timestamp'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query_response </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query_response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParseMode</span><span style="color: #007700">(</span><span style="color: #0000BB">SolrQueryResponse</span><span style="color: #007700">::</span><span style="color: #0000BB">PARSE_SOLR_DOC</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$response </span><span style="color: #007700">= </span><span style="color: #0000BB">$query_response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
  </div>

  <div class="example-contents"><p>The above example will output
something similar to:</p></div>
  <div class="example-contents screen">
   <div class="cdata"><pre>
SolrObject Object
(
    [responseHeader] =&gt; SolrObject Object
        (
            [status] =&gt; 0
            [QTime] =&gt; 1
            [params] =&gt; SolrObject Object
                (
                    [wt] =&gt; xml
                    [rows] =&gt; 50
                    [start] =&gt; 0
                    [indent] =&gt; on
                    [q] =&gt; lucene
                    [fl] =&gt; cat,features,id,timestamp
                    [version] =&gt; 2.2
                )

        )

    [response] =&gt; SolrObject Object
        (
            [numFound] =&gt; 3
            [start] =&gt; 0
            [docs] =&gt; Array
                (
                    [0] =&gt; SolrDocument Object
                        (
                            [_hashtable_index:SolrDocument:private] =&gt; 19740
                        )

                    [1] =&gt; SolrDocument Object
                        (
                            [_hashtable_index:SolrDocument:private] =&gt; 25485
                        )

                    [2] =&gt; SolrDocument Object
                        (
                            [_hashtable_index:SolrDocument:private] =&gt; 25052
                        )

                )

        )

)
</pre></div>
  </div>
 </div>
    
 <div class="example" id="example-4923">
        <p><strong>Example #6 Simple TermsComponent example - basic</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />    </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrQuery</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTerms</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTermsField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$updateResponse </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$updateResponse</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output
something similar to:</p></div>
        <div class="example-contents screen">
<div class="cdata"><pre>
SolrObject Object
(
    [responseHeader] =&gt; SolrObject Object
        (
            [status] =&gt; 0
            [QTime] =&gt; 2
        )

    [terms] =&gt; SolrObject Object
        (
            [cat] =&gt; SolrObject Object
                (
                    [electronics] =&gt; 14
                    [Lucene] =&gt; 4
                    [Software] =&gt; 4
                    [memory] =&gt; 3
                    [card] =&gt; 2
                    [connector] =&gt; 2
                    [drive] =&gt; 2
                    [graphics] =&gt; 2
                    [hard] =&gt; 2
                    [monitor] =&gt; 2
                )

        )

)

</pre></div>
        </div>
 </div>
    
<div class="example" id="example-4924">
    <p><strong>Example #7 Simple TermsComponent example - using a prefix</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />    </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrQuery</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTerms</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Return only terms starting with $prefix */<br /></span><span style="color: #0000BB">$prefix </span><span style="color: #007700">= </span><span style="color: #DD0000">'c'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTermsField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setTermsPrefix</span><span style="color: #007700">(</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$updateResponse </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$updateResponse</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
SolrObject Object
(
    [responseHeader] =&gt; SolrObject Object
        (
            [status] =&gt; 0
            [QTime] =&gt; 1
        )

    [terms] =&gt; SolrObject Object
        (
            [cat] =&gt; SolrObject Object
                (
                    [card] =&gt; 2
                    [connector] =&gt; 2
                    [camera] =&gt; 1
                    [copier] =&gt; 1
                )

        )

)
</pre></div>
    </div>
</div>
    
<div class="example" id="example-4925">
    <p><strong>Example #8 Simple TermsComponent example - specifying a minimum frequency</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />    </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrQuery</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTerms</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* Return only terms starting with $prefix */<br /></span><span style="color: #0000BB">$prefix </span><span style="color: #007700">= </span><span style="color: #DD0000">'c'</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">/* Return only terms with a frequency of 2 or greater */<br /></span><span style="color: #0000BB">$min_frequency </span><span style="color: #007700">= </span><span style="color: #0000BB">2</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setTermsField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setTermsPrefix</span><span style="color: #007700">(</span><span style="color: #0000BB">$prefix</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setTermsMinCount</span><span style="color: #007700">(</span><span style="color: #0000BB">$min_frequency</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$updateResponse </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$updateResponse</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="cdata"><pre>
SolrObject Object
(
    [responseHeader] =&gt; SolrObject Object
        (
            [status] =&gt; 0
            [QTime] =&gt; 0
        )

    [terms] =&gt; SolrObject Object
        (
            [cat] =&gt; SolrObject Object
                (
                    [card] =&gt; 2
                    [connector] =&gt; 2
                )

        )

)
</pre></div>
    </div>
</div>
    
<div class="example" id="example-4926">
<p><strong>Example #9 Simple Facet Example</strong></p>
<div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />    </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrQuery</span><span style="color: #007700">(</span><span style="color: #DD0000">'*:*'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFacet</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFacetField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">addFacetField</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setFacetMinCount</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$updateResponse </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$response_array </span><span style="color: #007700">= </span><span style="color: #0000BB">$updateResponse</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$facet_data </span><span style="color: #007700">= </span><span style="color: #0000BB">$response_array</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">facet_counts</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">facet_fields</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$facet_data</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
</div>

<div class="example-contents"><p>The above example will output
something similar to:</p></div>
<div class="example-contents screen">
<div class="cdata"><pre>
SolrObject Object
(
    [cat] =&gt; SolrObject Object
        (
            [electronics] =&gt; 14
            [memory] =&gt; 3
            [Lucene] =&gt; 2
            [Software] =&gt; 2
            [card] =&gt; 2
            [connector] =&gt; 2
            [drive] =&gt; 2
            [graphics] =&gt; 2
            [hard] =&gt; 2
            [monitor] =&gt; 2
            [search] =&gt; 2
            [software] =&gt; 2
        )

    [name] =&gt; SolrObject Object
        (
            [gb] =&gt; 6
            [1] =&gt; 3
            [184] =&gt; 3
            [2] =&gt; 3
            [3200] =&gt; 3
            [400] =&gt; 3
            [500] =&gt; 3
            [ddr] =&gt; 3
            [i] =&gt; 3
            [ipod] =&gt; 3
            [memori] =&gt; 3
            [pc] =&gt; 3
            [pin] =&gt; 3
            [pod] =&gt; 3
            [sdram] =&gt; 3
            [system] =&gt; 3
            [unbuff] =&gt; 3
            [canon] =&gt; 2
            [corsair] =&gt; 2
            [drive] =&gt; 2
            [hard] =&gt; 2
            [mb] =&gt; 2
            [n] =&gt; 2
            [power] =&gt; 2
            [retail] =&gt; 2
            [video] =&gt; 2
            [x] =&gt; 2
        )

)
</pre></div>
</div>
</div>
    
<div class="example" id="example-4927">
    <p><strong>Example #10 Simple Facet Example - with optional field override for mincount</strong></p>
    <div class="example-contents">
        <div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />    </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrQuery</span><span style="color: #007700">(</span><span style="color: #DD0000">'*:*'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFacet</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFacetField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">addFacetField</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setFacetMinCount</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setFacetMinCount</span><span style="color: #007700">(</span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #DD0000">'name'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$updateResponse </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$response_array </span><span style="color: #007700">= </span><span style="color: #0000BB">$updateResponse</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$facet_data </span><span style="color: #007700">= </span><span style="color: #0000BB">$response_array</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">facet_counts</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">facet_fields</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$facet_data</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
        <div class="cdata"><pre>
SolrObject Object
(
    [cat] =&gt; SolrObject Object
        (
            [electronics] =&gt; 14
            [memory] =&gt; 3
            [Lucene] =&gt; 2
            [Software] =&gt; 2
            [card] =&gt; 2
            [connector] =&gt; 2
            [drive] =&gt; 2
            [graphics] =&gt; 2
            [hard] =&gt; 2
            [monitor] =&gt; 2
            [search] =&gt; 2
            [software] =&gt; 2
        )

    [name] =&gt; SolrObject Object
        (
            [gb] =&gt; 6
        )

)
</pre></div>
    </div>
</div>

<div class="example" id="example-4928">
<p><strong>Example #11 Facet Date Example</strong></p>
<div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />        </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrQuery</span><span style="color: #007700">(</span><span style="color: #DD0000">'*:*'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFacet</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFacetDateField</span><span style="color: #007700">(</span><span style="color: #DD0000">'manufacturedate_dt'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFacetDateStart</span><span style="color: #007700">(</span><span style="color: #DD0000">'2006-02-13T00:00:00Z'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFacetDateEnd</span><span style="color: #007700">(</span><span style="color: #DD0000">'2012-02-13T00:00:00Z'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFacetDateGap</span><span style="color: #007700">(</span><span style="color: #DD0000">'+1YEAR'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFacetDateHardEnd</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFacetDateOther</span><span style="color: #007700">(</span><span style="color: #DD0000">'before'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$updateResponse </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$response_array </span><span style="color: #007700">= </span><span style="color: #0000BB">$updateResponse</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$facet_data </span><span style="color: #007700">= </span><span style="color: #0000BB">$response_array</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">facet_counts</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">facet_dates</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$facet_data</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
</div>

<div class="example-contents"><p>The above example will output
something similar to:</p></div>
<div class="example-contents screen">
<div class="cdata"><pre>
SolrObject Object
(
    [manufacturedate_dt] =&gt; SolrObject Object
        (
            [2006-02-13T00:00:00Z] =&gt; 9
            [2007-02-13T00:00:00Z] =&gt; 0
            [2008-02-13T00:00:00Z] =&gt; 0
            [2009-02-13T00:00:00Z] =&gt; 0
            [2010-02-13T00:00:00Z] =&gt; 0
            [2011-02-13T00:00:00Z] =&gt; 0
            [gap] =&gt; +1YEAR
            [start] =&gt; 2006-02-13T00:00:00Z
            [end] =&gt; 2012-02-13T00:00:00Z
            [before] =&gt; 2
        )

)
</pre></div>
</div>
</div>

<div class="example" id="example-4929">
        <p><strong>Example #12 Connecting to SSL-Enabled Server</strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />    </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'timeout'  </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_TIMEOUT</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'secure'   </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SECURE</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'ssl_cert' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SSL_CERT_ONLY</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'ssl_key'  </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SSL_KEY</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'ssl_keypassword' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SSL_KEYPASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'ssl_cainfo' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SSL_CAINFO</span><span style="color: #007700">,<br />);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrQuery</span><span style="color: #007700">(</span><span style="color: #DD0000">'*:*'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setFacet</span><span style="color: #007700">(</span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addFacetField</span><span style="color: #007700">(</span><span style="color: #DD0000">'cat'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">addFacetField</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setFacetMinCount</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">)-&gt;</span><span style="color: #0000BB">setFacetMinCount</span><span style="color: #007700">(</span><span style="color: #0000BB">4</span><span style="color: #007700">, </span><span style="color: #DD0000">'name'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$updateResponse </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$response_array </span><span style="color: #007700">= </span><span style="color: #0000BB">$updateResponse</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">$facet_data </span><span style="color: #007700">= </span><span style="color: #0000BB">$response_array</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">facet_counts</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">facet_fields</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$facet_data</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output
something similar to:</p></div>
        <div class="example-contents screen">
            <div class="cdata"><pre>
SolrObject Object
(
    [cat] =&gt; SolrObject Object
        (
            [electronics] =&gt; 14
            [memory] =&gt; 3
            [Lucene] =&gt; 2
            [Software] =&gt; 2
            [card] =&gt; 2
            [connector] =&gt; 2
            [drive] =&gt; 2
            [graphics] =&gt; 2
            [hard] =&gt; 2
            [monitor] =&gt; 2
            [search] =&gt; 2
            [software] =&gt; 2
        )

    [name] =&gt; SolrObject Object
        (
            [gb] =&gt; 6
        )

)
</pre></div>
        </div>
    </div>
    

    <div class="example" id="example-4930">
        <p><strong>Example #13 Collapsing a <span class="type"><a href="class.solrquery.php" class="type SolrQuery">SolrQuery</a></span></strong></p>
        <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />        </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />        </span><span style="color: #DD0000">'path'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PATH<br /></span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrQuery</span><span style="color: #007700">(</span><span style="color: #DD0000">'*:*'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$collapseFunction </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrCollapseFunction</span><span style="color: #007700">(</span><span style="color: #DD0000">'manu_id_s'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$collapseFunction<br /></span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setSize</span><span style="color: #007700">(</span><span style="color: #0000BB">2</span><span style="color: #007700">)<br />-&gt;</span><span style="color: #0000BB">setNullPolicy</span><span style="color: #007700">(</span><span style="color: #0000BB">SolrCollapseFunction</span><span style="color: #007700">::</span><span style="color: #0000BB">NULLPOLICY_IGNORE</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$query<br /></span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">collapse</span><span style="color: #007700">(</span><span style="color: #0000BB">$collapseFunction</span><span style="color: #007700">)<br />-&gt;</span><span style="color: #0000BB">setRows</span><span style="color: #007700">(</span><span style="color: #0000BB">4</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$queryResponse </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">query</span><span style="color: #007700">(</span><span style="color: #0000BB">$query</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$response </span><span style="color: #007700">= </span><span style="color: #0000BB">$queryResponse</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
        </div>

        <div class="example-contents"><p>The above example will output
something similar to:</p></div>
        <div class="example-contents screen">
            <div class="cdata"><pre>
SolrObject Object
(
    [responseHeader] =&gt; SolrObject Object
        (
            [status] =&gt; 0
            [QTime] =&gt; 1
            [params] =&gt; SolrObject Object
                (
                    [q] =&gt; *:*
                    [indent] =&gt; on
                    [fq] =&gt; {!collapse field=manu_id_s size=2 nullPolicy=ignore}
                    [rows] =&gt; 4
                    [version] =&gt; 2.2
                    [wt] =&gt; xml
                )

        )

    [response] =&gt; SolrObject Object
        (
            [numFound] =&gt; 14
            [start] =&gt; 0
            [docs] =&gt; Array
                (
                    [0] =&gt; SolrObject Object
                        (
                            [id] =&gt; SP2514N
                            [name] =&gt; Array
                                (
                                    [0] =&gt; Samsung SpinPoint P120 SP2514N - hard drive - 250 GB - ATA-133
                                )

                            [manu] =&gt; Array
                                (
                                    [0] =&gt; Samsung Electronics Co. Ltd.
                                )

                            [manu_id_s] =&gt; samsung
                            [cat] =&gt; Array
                                (
                                    [0] =&gt; electronics
                                    [1] =&gt; hard drive
                                )

                            [features] =&gt; Array
                                (
                                    [0] =&gt; 7200RPM, 8MB cache, IDE Ultra ATA-133
                                    [1] =&gt; NoiseGuard, SilentSeek technology, Fluid Dynamic Bearing (FDB) motor
                                )

                            [price] =&gt; Array
                                (
                                    [0] =&gt; 92
                                )

                            [popularity] =&gt; Array
                                (
                                    [0] =&gt; 6
                                )

                            [inStock] =&gt; Array
                                (
                                    [0] =&gt; 1
                                )

                            [manufacturedate_dt] =&gt; 2006-02-13T15:26:37Z
                            [store] =&gt; Array
                                (
                                    [0] =&gt; 35.0752,-97.032
                                )

                            [_version_] =&gt; 1510294336412057600
                        )

                    [1] =&gt; SolrObject Object
                        (
                            [id] =&gt; 6H500F0
                            [name] =&gt; Array
                                (
                                    [0] =&gt; Maxtor DiamondMax 11 - hard drive - 500 GB - SATA-300
                                )

                            [manu] =&gt; Array
                                (
                                    [0] =&gt; Maxtor Corp.
                                )

                            [manu_id_s] =&gt; maxtor
                            [cat] =&gt; Array
                                (
                                    [0] =&gt; electronics
                                    [1] =&gt; hard drive
                                )

                            [features] =&gt; Array
                                (
                                    [0] =&gt; SATA 3.0Gb/s, NCQ
                                    [1] =&gt; 8.5ms seek
                                    [2] =&gt; 16MB cache
                                )

                            [price] =&gt; Array
                                (
                                    [0] =&gt; 350
                                )

                            [popularity] =&gt; Array
                                (
                                    [0] =&gt; 6
                                )

                            [inStock] =&gt; Array
                                (
                                    [0] =&gt; 1
                                )

                            [store] =&gt; Array
                                (
                                    [0] =&gt; 45.17614,-93.87341
                                )

                            [manufacturedate_dt] =&gt; 2006-02-13T15:26:37Z
                            [_version_] =&gt; 1510294336449806336
                        )

                    [2] =&gt; SolrObject Object
                        (
                            [id] =&gt; F8V7067-APL-KIT
                            [name] =&gt; Array
                                (
                                    [0] =&gt; Belkin Mobile Power Cord for iPod w/ Dock
                                )

                            [manu] =&gt; Array
                                (
                                    [0] =&gt; Belkin
                                )

                            [manu_id_s] =&gt; belkin
                            [cat] =&gt; Array
                                (
                                    [0] =&gt; electronics
                                    [1] =&gt; connector
                                )

                            [features] =&gt; Array
                                (
                                    [0] =&gt; car power adapter, white
                                )

                            [weight] =&gt; Array
                                (
                                    [0] =&gt; 4
                                )

                            [price] =&gt; Array
                                (
                                    [0] =&gt; 19.95
                                )

                            [popularity] =&gt; Array
                                (
                                    [0] =&gt; 1
                                )

                            [inStock] =&gt; Array
                                (
                                    [0] =&gt; 
                                )

                            [store] =&gt; Array
                                (
                                    [0] =&gt; 45.18014,-93.87741
                                )

                            [manufacturedate_dt] =&gt; 2005-08-01T16:30:25Z
                            [_version_] =&gt; 1510294336458194944
                        )

                    [3] =&gt; SolrObject Object
                        (
                            [id] =&gt; MA147LL/A
                            [name] =&gt; Array
                                (
                                    [0] =&gt; Apple 60 GB iPod with Video Playback Black
                                )

                            [manu] =&gt; Array
                                (
                                    [0] =&gt; Apple Computer Inc.
                                )

                            [manu_id_s] =&gt; apple
                            [cat] =&gt; Array
                                (
                                    [0] =&gt; electronics
                                    [1] =&gt; music
                                )

                            [features] =&gt; Array
                                (
                                    [0] =&gt; iTunes, Podcasts, Audiobooks
                                    [1] =&gt; Stores up to 15,000 songs, 25,000 photos, or 150 hours of video
                                    [2] =&gt; 2.5-inch, 320x240 color TFT LCD display with LED backlight
                                    [3] =&gt; Up to 20 hours of battery life
                                    [4] =&gt; Plays AAC, MP3, WAV, AIFF, Audible, Apple Lossless, H.264 video
                                    [5] =&gt; Notes, Calendar, Phone book, Hold button, Date display, Photo wallet, Built-in games, JPEG photo playback, Upgradeable firmware, USB 2.0 compatibility, Playback speed control, Rechargeable capability, Battery level indication
                                )

                            [includes] =&gt; Array
                                (
                                    [0] =&gt; earbud headphones, USB cable
                                )

                            [weight] =&gt; Array
                                (
                                    [0] =&gt; 5.5
                                )

                            [price] =&gt; Array
                                (
                                    [0] =&gt; 399
                                )

                            [popularity] =&gt; Array
                                (
                                    [0] =&gt; 10
                                )

                            [inStock] =&gt; Array
                                (
                                    [0] =&gt; 1
                                )

                            [store] =&gt; Array
                                (
                                    [0] =&gt; 37.7752,-100.0232
                                )

                            [manufacturedate_dt] =&gt; 2005-10-12T08:00:00Z
                            [_version_] =&gt; 1510294336562003968
                        )

                )

        )

)
</pre></div>
        </div>
    </div>
    
      <div class="example" id="example-4931">
   <p><strong>Example #14 Solr Real Time Get (RTG) example <span class="function"><a href="solrclient.getbyid.php" class="function">SolrClient::getById()</a></span></strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">"bootstrap.php"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$options </span><span style="color: #007700">= array<br />(<br />    </span><span style="color: #DD0000">'hostname' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_HOSTNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'login'    </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_USERNAME</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'password' </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PASSWORD</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'port'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PORT</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'path'     </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">SOLR_SERVER_PATH<br /></span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$client </span><span style="color: #007700">= new </span><span style="color: #0000BB">SolrClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$options</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$response </span><span style="color: #007700">= </span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getById</span><span style="color: #007700">(</span><span style="color: #DD0000">'GB18030TEST'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$response</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getResponse</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="cdata"><pre>
SolrObject Object
(
    [doc] =&gt; SolrObject Object
        (
            [id] =&gt; GB18030TEST
            [name] =&gt; Array
                (
                    [0] =&gt; Test with some GB18030 encoded characters
                )

            [features] =&gt; Array
                (
                    [0] =&gt; No accents here
                    [1] =&gt; 这是一个功能
                    [2] =&gt; This is a feature (translated)
                    [3] =&gt; 这份文件是很有光泽
                    [4] =&gt; This document is very shiny (translated)
                )

            [price] =&gt; Array
                (
                    [0] =&gt; 0
                )

            [inStock] =&gt; Array
                (
                    [0] =&gt; 1
                )

            [_version_] =&gt; 1510294336239042560
        )

)
</pre></div>
   </div>
  </div>
    
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/solr/examples.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsolr.examples%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=solr.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/solr.examples.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="100488">  <div class="votes">
    <div id="Vu100488">
    <a href="/manual/vote-note.php?id=100488&amp;page=solr.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100488">
    <a href="/manual/vote-note.php?id=100488&amp;page=solr.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100488" title="85% like this...">
    5
    </div>
  </div>
  <a href="#100488" class="name">
  <strong class="user"><em>jschwehn+php.a.t.gmail.com</em></strong></a><a class="genanchor" href="#100488"> &para;</a><div class="date" title="2010-10-19 05:51"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100488">
<div class="phpcode"><code><span class="html">If you like to access a different RequestHander than '/select' you can change it via <a href="http://php.net/manual/en/solrclient.setservlet.php" rel="nofollow" target="_blank">http://php.net/manual/en/solrclient.setservlet.php</a></span></code></div>
  </div>
 </div>
  <div class="note" id="100675">  <div class="votes">
    <div id="Vu100675">
    <a href="/manual/vote-note.php?id=100675&amp;page=solr.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100675">
    <a href="/manual/vote-note.php?id=100675&amp;page=solr.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100675" title="72% like this...">
    5
    </div>
  </div>
  <a href="#100675" class="name">
  <strong class="user"><em>jschwehn+php at IGNOrMEgmail dot com</em></strong></a><a class="genanchor" href="#100675"> &para;</a><div class="date" title="2010-10-29 06:05"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100675">
<div class="phpcode"><code><span class="html">If you are using Solr's multicore feature, you can access the cores via the path parameter in the $options array.<br />E.g. <br /><span class="default">&lt;?php<br />  $options </span><span class="keyword">= array(...., </span><span class="string">'path' </span><span class="keyword">=&gt; </span><span class="string">'solr/core0'</span><span class="keyword">, ...);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109042">  <div class="votes">
    <div id="Vu109042">
    <a href="/manual/vote-note.php?id=109042&amp;page=solr.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109042">
    <a href="/manual/vote-note.php?id=109042&amp;page=solr.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109042" title="65% like this...">
    6
    </div>
  </div>
  <a href="#109042" class="name">
  <strong class="user"><em>cliff</em></strong></a><a class="genanchor" href="#109042"> &para;</a><div class="date" title="2012-06-15 09:15"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109042">
<div class="phpcode"><code><span class="html">As of solr 4.0 the waitFlush parameter is removed.<br /><br />Source<br /><a href="http://wiki.apache.org/solr/UpdateXmlMessages" rel="nofollow" target="_blank">http://wiki.apache.org/solr/UpdateXmlMessages</a><br /><br />$client-&gt;commit() throws an error<br />[SolrClientException]<br />  Unsuccessful update request. Response Code 400. &lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />  &lt;response&gt;<br /><br />  &lt;lst name="responseHeader"&gt;<br />    &lt;int name="status"&gt;400&lt;/int&gt;<br />    &lt;int name="QTime"&gt;1&lt;/int&gt;<br />  &lt;/lst&gt;<br />  &lt;lst name="error"&gt;<br />    &lt;str name="msg"&gt;Unknown commit parameter 'waitFlush'&lt;/str&gt;<br />    &lt;int name="code"&gt;400&lt;/int&gt;<br />  &lt;/lst&gt;<br />  &lt;/response&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="113454">  <div class="votes">
    <div id="Vu113454">
    <a href="/manual/vote-note.php?id=113454&amp;page=solr.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113454">
    <a href="/manual/vote-note.php?id=113454&amp;page=solr.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113454" title="70% like this...">
    4
    </div>
  </div>
  <a href="#113454" class="name">
  <strong class="user"><em>tsengmeat at gmail dot com</em></strong></a><a class="genanchor" href="#113454"> &para;</a><div class="date" title="2013-10-12 02:24"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113454">
<div class="phpcode"><code><span class="html">As of solr 4.0 the waitFlush parameter is removed.<br />If you're using the solr 4.0 or later version (and you have to),when you do this<br /><span class="default">&lt;?php $client</span><span class="keyword">-&gt;</span><span class="default">commit</span><span class="keyword">(); </span><span class="default">?&gt;<br /></span>you will get a solr error like this:<br />"Unknown commit parameter 'waitFlush'."<br /><br />If you insist on using this PHP Solr extension and solr 4.0 or later version,you can edit the extension's source (version 1.0.2) php_solr_client.c.<br />for the SolrClient's optimize method:<br />at line 1490 :<br />  zend_bool waitFlush = 1, waitSearcher = 1; <br />  after edited:<br />  zend_bool waitSearcher = 1; <br />at line 1493:<br />  char *waitFlushValue, *waitSearcherValue;<br />  after edited:<br />  zend_bool waitSearcher = 1; <br />at line 1502:<br />  if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "|sbb", &amp;maxSegments, &amp;maxSegmentsLen, &amp;waitFlush, &amp;waitSearcher) == FAILURE) {<br />  after editd:<br />  if (zend_parse_parameters(ZEND_NUM_ARGS() TSRMLS_CC, "|sb", &amp;maxSegments, &amp;maxSegmentsLen, &amp;waitSearcher) == FAILURE) {<br /><br />remove the line 1509 and 1515.<br /><br />And do the same edit for the SolrClient's commit method at line 1561,1564,1573 and remove the line 1580,1586<br /><br />The final step, compile the code and install it.<br />Good luck!</span></code></div>
  </div>
 </div>
  <div class="note" id="113923">  <div class="votes">
    <div id="Vu113923">
    <a href="/manual/vote-note.php?id=113923&amp;page=solr.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113923">
    <a href="/manual/vote-note.php?id=113923&amp;page=solr.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113923" title="62% like this...">
    2
    </div>
  </div>
  <a href="#113923" class="name">
  <strong class="user"><em>tomanr1 at wp dot pl</em></strong></a><a class="genanchor" href="#113923"> &para;</a><div class="date" title="2013-12-17 10:22"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113923">
<div class="phpcode"><code><span class="html">In case someone would like to use this solrClient with solr v.4.0 and higher i've prepared my own commit function<br /><br />class solr {<br />        public function delete($query ) {<br />                $this-&gt;_client-&gt;deleteByQuery($query);<br />                $this-&gt;commit();<br />        }<br /><br />        public function commit() {<br />                $solrConfig= // array with solr host, port, path to collection (/solr/my_collection), <br />                $solrAddress = $solrConfig['hostname'] . ':' . $solrConfig['port'] . $solrConfig['path'];<br />                $output = array();<br />                $response = exec('curl ' . $solrAddress . '/update?commit=true', $output);<br />                return $output;<br />        }<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="94644">  <div class="votes">
    <div id="Vu94644">
    <a href="/manual/vote-note.php?id=94644&amp;page=solr.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94644">
    <a href="/manual/vote-note.php?id=94644&amp;page=solr.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94644" title="60% like this...">
    1
    </div>
  </div>
  <a href="#94644" class="name">
  <strong class="user"><em>trickito at yahoo</em></strong></a><a class="genanchor" href="#94644"> &para;</a><div class="date" title="2009-11-16 09:08"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94644">
<div class="phpcode"><code><span class="html">if your path to solr is something other than: /solr<br /><br />you should add this to the bootstrap file above:<br /><br />define('SOLR_SERVER_PATH', 'my-solr-url');<br /><br />and then a corresponding entry to the options array in your client php code like:<br /><br />'path'     =&gt; SOLR_SERVER_PATH<br /><br />I couldn't find this is in the documentation and had to peek at the source to figure it out.</span></code></div>
  </div>
 </div>
  <div class="note" id="99994">  <div class="votes">
    <div id="Vu99994">
    <a href="/manual/vote-note.php?id=99994&amp;page=solr.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99994">
    <a href="/manual/vote-note.php?id=99994&amp;page=solr.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99994" title="50% like this...">
    0
    </div>
  </div>
  <a href="#99994" class="name">
  <strong class="user"><em>bjorn at bjorn-erik dot biz</em></strong></a><a class="genanchor" href="#99994"> &para;</a><div class="date" title="2010-09-19 12:47"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99994">
<div class="phpcode"><code><span class="html">If you're testing these examples on a fresh install of solr, you will need to run a commit statement after you add documents to receive results when searching. 
<br />
<br />For example, add this: 
<br /><span class="default">&lt;?php $client</span><span class="keyword">-&gt;</span><span class="default">commit</span><span class="keyword">(); </span><span class="default">?&gt;
<br /></span>
<br />to example 3 to be able to get any results when doing a search using example 5.</span></code></div>
  </div>
 </div>
  <div class="note" id="107941">  <div class="votes">
    <div id="Vu107941">
    <a href="/manual/vote-note.php?id=107941&amp;page=solr.examples&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107941">
    <a href="/manual/vote-note.php?id=107941&amp;page=solr.examples&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107941" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#107941" class="name">
  <strong class="user"><em>khe77o at gmail dot youknowwhat</em></strong></a><a class="genanchor" href="#107941"> &para;</a><div class="date" title="2012-03-15 05:53"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107941">
<div class="phpcode"><code><span class="html">The documentation in the example section doesn't mention that you need to commit once you've added doc(s).<br /><br />So in short it would be something like:<br />$client = new SolrClient(array('hostname' =&gt; '127.0.0.1', 'port' =&gt; 8080));<br />$doc = new SolrInputDocument();<br />$doc-&gt;addField('id', 12345);<br />$doc-&gt;addField('name', 'some person');<br /><br />$result = $client-&gt;addDocument($doc);<br /><br />/* you are not done yet, you need to commit */<br />$client-&gt;commit();<br /><br />Now if you query you should see your doc =]</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=solr.examples&amp;repo=en&amp;redirect=https://www.php.net/manual/en/solr.examples.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.solr.php">Solr</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.solr.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="solr.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="">
                            <a href="solr.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="ref.solr.php" title="Solr Functions">Solr Functions</a>
                        </li>
                                                <li class="current">
                            <a href="solr.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.solrutils.php" title="SolrUtils">SolrUtils</a>
                        </li>
                                                <li class="">
                            <a href="class.solrinputdocument.php" title="SolrInputDocument">SolrInputDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.solrdocument.php" title="SolrDocument">SolrDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.solrdocumentfield.php" title="SolrDocumentField">SolrDocumentField</a>
                        </li>
                                                <li class="">
                            <a href="class.solrobject.php" title="SolrObject">SolrObject</a>
                        </li>
                                                <li class="">
                            <a href="class.solrclient.php" title="SolrClient">SolrClient</a>
                        </li>
                                                <li class="">
                            <a href="class.solrresponse.php" title="SolrResponse">SolrResponse</a>
                        </li>
                                                <li class="">
                            <a href="class.solrqueryresponse.php" title="SolrQueryResponse">SolrQueryResponse</a>
                        </li>
                                                <li class="">
                            <a href="class.solrupdateresponse.php" title="SolrUpdateResponse">SolrUpdateResponse</a>
                        </li>
                                                <li class="">
                            <a href="class.solrpingresponse.php" title="SolrPingResponse">SolrPingResponse</a>
                        </li>
                                                <li class="">
                            <a href="class.solrgenericresponse.php" title="SolrGenericResponse">SolrGenericResponse</a>
                        </li>
                                                <li class="">
                            <a href="class.solrparams.php" title="SolrParams">SolrParams</a>
                        </li>
                                                <li class="">
                            <a href="class.solrmodifiableparams.php" title="SolrModifiableParams">SolrModifiableParams</a>
                        </li>
                                                <li class="">
                            <a href="class.solrquery.php" title="SolrQuery">SolrQuery</a>
                        </li>
                                                <li class="">
                            <a href="class.solrdismaxquery.php" title="SolrDisMaxQuery">SolrDisMaxQuery</a>
                        </li>
                                                <li class="">
                            <a href="class.solrcollapsefunction.php" title="SolrCollapseFunction">SolrCollapseFunction</a>
                        </li>
                                                <li class="">
                            <a href="class.solrexception.php" title="SolrException">SolrException</a>
                        </li>
                                                <li class="">
                            <a href="class.solrclientexception.php" title="SolrClientException">SolrClientException</a>
                        </li>
                                                <li class="">
                            <a href="class.solrserverexception.php" title="SolrServerException">SolrServerException</a>
                        </li>
                                                <li class="">
                            <a href="class.solrillegalargumentexception.php" title="SolrIllegalArgumentException">SolrIllegalArgumentException</a>
                        </li>
                                                <li class="">
                            <a href="class.solrillegaloperationexception.php" title="SolrIllegalOperationException">SolrIllegalOperationException</a>
                        </li>
                                                <li class="">
                            <a href="class.solrmissingmandatoryparameterexception.php" title="SolrMissingMandatoryParameterException">SolrMissingMandatoryParameterException</a>
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
