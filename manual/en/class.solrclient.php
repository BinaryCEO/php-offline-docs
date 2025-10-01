<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SolrClient - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/class.solrclient.php">
 <link rel="shorturl" href="https://www.php.net/solrclient">
 <link rel="alternate" href="https://www.php.net/solrclient" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.solr.php">
 <link rel="prev" href="https://www.php.net/manual/en/solrobject.offsetunset.php">
 <link rel="next" href="https://www.php.net/manual/en/solrclient.adddocument.php">

 <link rel="alternate" href="https://www.php.net/manual/en/class.solrclient.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/class.solrclient.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/class.solrclient.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/class.solrclient.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/class.solrclient.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/class.solrclient.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/class.solrclient.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/class.solrclient.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/class.solrclient.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/class.solrclient.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/class.solrclient.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="The SolrClient class" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SolrClient - Manual" />
<meta name="twitter:description" content="The SolrClient class" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SolrClient - Manual" />
<meta itemprop="description" content="The SolrClient class" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="The SolrClient class" />

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
        <a href="solrclient.adddocument.php">
          SolrClient::addDocument &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="solrobject.offsetunset.php">
          &laquo; SolrObject::offsetUnset        </a>
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
            <option value='en/class.solrclient.php' selected="selected">English</option>
            <option value='de/class.solrclient.php'>German</option>
            <option value='es/class.solrclient.php'>Spanish</option>
            <option value='fr/class.solrclient.php'>French</option>
            <option value='it/class.solrclient.php'>Italian</option>
            <option value='ja/class.solrclient.php'>Japanese</option>
            <option value='pt_BR/class.solrclient.php'>Brazilian Portuguese</option>
            <option value='ru/class.solrclient.php'>Russian</option>
            <option value='tr/class.solrclient.php'>Turkish</option>
            <option value='uk/class.solrclient.php'>Ukrainian</option>
            <option value='zh/class.solrclient.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="class.solrclient" class="reference">

 <h1 class="title">The SolrClient class</h1>
 

 <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>


  <div class="section" id="solrclient.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    Used to send requests to a Solr server. Currently, cloning and serialization of SolrClient instances is not supported.
   </p>
  </div>


  <div class="section" id="solrclient.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <span class="ooclass"><strong class="classname"></strong></span>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <span class="modifier">final</span>
      <span class="modifier">class</span> <strong class="classname">SolrClient</strong>
     </span>
     {</div>

    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Constants */</div>
    <div class="fieldsynopsis">
     <span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.search-servlet-type"><var class="varname">SEARCH_SERVLET_TYPE</var></a></var><span class="initializer"> = 1</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.update-servlet-type"><var class="varname">UPDATE_SERVLET_TYPE</var></a></var><span class="initializer"> = 2</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.threads-servlet-type"><var class="varname">THREADS_SERVLET_TYPE</var></a></var><span class="initializer"> = 4</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.ping-servlet-type"><var class="varname">PING_SERVLET_TYPE</var></a></var><span class="initializer"> = 8</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.terms-servlet-type"><var class="varname">TERMS_SERVLET_TYPE</var></a></var><span class="initializer"> = 16</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.system-servlet-type"><var class="varname">SYSTEM_SERVLET_TYPE</var></a></var><span class="initializer"> = 32</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.default-search-servlet"><var class="varname">DEFAULT_SEARCH_SERVLET</var></a></var><span class="initializer"> = select</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.default-update-servlet"><var class="varname">DEFAULT_UPDATE_SERVLET</var></a></var><span class="initializer"> = update</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.default-threads-servlet"><var class="varname">DEFAULT_THREADS_SERVLET</var></a></var><span class="initializer"> = admin/threads</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.default-ping-servlet"><var class="varname">DEFAULT_PING_SERVLET</var></a></var><span class="initializer"> = admin/ping</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.default-terms-servlet"><var class="varname">DEFAULT_TERMS_SERVLET</var></a></var><span class="initializer"> = terms</span>;</div>

    <div class="fieldsynopsis"><span class="modifier">const</span>
     <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      <var class="fieldsynopsis_varname"><a href="class.solrclient.php#solrclient.constants.default-system-servlet"><var class="varname">DEFAULT_SYSTEM_SERVLET</var></a></var><span class="initializer"> = admin/system</span>;</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><a href="solrclient.construct.php" class="methodname">__construct</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$clientOptions</code></span>)</div>

    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.adddocument.php" class="methodname">addDocument</a></span>(<span class="methodparam"><span class="type"><a href="class.solrinputdocument.php" class="type SolrInputDocument">SolrInputDocument</a></span> <code class="parameter">$doc</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$overwrite</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$commitWithin</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="class.solrupdateresponse.php" class="type SolrUpdateResponse">SolrUpdateResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.adddocuments.php" class="methodname">addDocuments</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$docs</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$overwrite</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$commitWithin</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.commit.php" class="methodname">commit</a></span>(<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$softCommit</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$waitSearcher</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$expungeDeletes</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="class.solrupdateresponse.php" class="type SolrUpdateResponse">SolrUpdateResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.deletebyid.php" class="methodname">deleteById</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$id</code></span>): <span class="type"><a href="class.solrupdateresponse.php" class="type SolrUpdateResponse">SolrUpdateResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.deletebyids.php" class="methodname">deleteByIds</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$ids</code></span>): <span class="type"><a href="class.solrupdateresponse.php" class="type SolrUpdateResponse">SolrUpdateResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.deletebyqueries.php" class="methodname">deleteByQueries</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$queries</code></span>): <span class="type"><a href="class.solrupdateresponse.php" class="type SolrUpdateResponse">SolrUpdateResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.deletebyquery.php" class="methodname">deleteByQuery</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="class.solrupdateresponse.php" class="type SolrUpdateResponse">SolrUpdateResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.getbyid.php" class="methodname">getById</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$id</code></span>): <span class="type"><a href="class.solrqueryresponse.php" class="type SolrQueryResponse">SolrQueryResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.getbyids.php" class="methodname">getByIds</a></span>(<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$ids</code></span>): <span class="type"><a href="class.solrqueryresponse.php" class="type SolrQueryResponse">SolrQueryResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.getdebug.php" class="methodname">getDebug</a></span>(): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.getoptions.php" class="methodname">getOptions</a></span>(): <span class="type"><a href="language.types.array.php" class="type array">array</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.optimize.php" class="methodname">optimize</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$maxSegments</code><span class="initializer"> = 1</span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$softCommit</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$waitSearcher</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong></span></span>): <span class="type"><a href="class.solrupdateresponse.php" class="type SolrUpdateResponse">SolrUpdateResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.ping.php" class="methodname">ping</a></span>(): <span class="type"><a href="class.solrpingresponse.php" class="type SolrPingResponse">SolrPingResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.query.php" class="methodname">query</a></span>(<span class="methodparam"><span class="type"><a href="class.solrparams.php" class="type SolrParams">SolrParams</a></span> <code class="parameter">$query</code></span>): <span class="type"><a href="class.solrqueryresponse.php" class="type SolrQueryResponse">SolrQueryResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.request.php" class="methodname">request</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$raw_request</code></span>): <span class="type"><a href="class.solrupdateresponse.php" class="type SolrUpdateResponse">SolrUpdateResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.rollback.php" class="methodname">rollback</a></span>(): <span class="type"><a href="class.solrupdateresponse.php" class="type SolrUpdateResponse">SolrUpdateResponse</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.setresponsewriter.php" class="methodname">setResponseWriter</a></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$responseWriter</code></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.setservlet.php" class="methodname">setServlet</a></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$type</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.system.php" class="methodname">system</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>
<div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.threads.php" class="methodname">threads</a></span>(): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

    <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="methodname"><a href="solrclient.destruct.php" class="methodname">__destruct</a></span>()</div>

   }</div>


  </div>


  <div class="section" id="solrclient.constants">
   <h2 class="title">Predefined Constants</h2>
   <dl>

    
     <dt id="solrclient.constants.search-servlet-type"><strong><code><a href="class.solrclient.php#solrclient.constants.search-servlet-type">SolrClient::SEARCH_SERVLET_TYPE</a></code></strong></dt>
     <dd>
      <p class="para">Used when updating the search servlet.</p>
     </dd>
    

    
     <dt id="solrclient.constants.update-servlet-type"><strong><code><a href="class.solrclient.php#solrclient.constants.update-servlet-type">SolrClient::UPDATE_SERVLET_TYPE</a></code></strong></dt>
     <dd>
      <p class="para">Used when updating the update servlet.</p>
     </dd>
    

    
     <dt id="solrclient.constants.threads-servlet-type"><strong><code><a href="class.solrclient.php#solrclient.constants.threads-servlet-type">SolrClient::THREADS_SERVLET_TYPE</a></code></strong></dt>
     <dd>
      <p class="para">Used when updating the threads servlet.</p>
     </dd>
    

    
     <dt id="solrclient.constants.ping-servlet-type"><strong><code><a href="class.solrclient.php#solrclient.constants.ping-servlet-type">SolrClient::PING_SERVLET_TYPE</a></code></strong></dt>
     <dd>
      <p class="para">Used when updating the ping servlet.</p>
     </dd>
    

    
     <dt id="solrclient.constants.terms-servlet-type"><strong><code><a href="class.solrclient.php#solrclient.constants.terms-servlet-type">SolrClient::TERMS_SERVLET_TYPE</a></code></strong></dt>
     <dd>
      <p class="para">Used when updating the terms servlet.</p>
     </dd>
    
    
    
     <dt id="solrclient.constants.system-servlet-type"><strong><code><a href="class.solrclient.php#solrclient.constants.system-servlet-type">SolrClient::SYSTEM_SERVLET_TYPE</a></code></strong></dt>
     <dd>
      <p class="para">Used when retrieving system information from the system servlet.</p>
     </dd>
    

    
     <dt id="solrclient.constants.default-search-servlet"><strong><code><a href="class.solrclient.php#solrclient.constants.default-search-servlet">SolrClient::DEFAULT_SEARCH_SERVLET</a></code></strong></dt>
     <dd>
      <p class="para">This is the initial value for the search servlet.</p>
     </dd>
    

    
     <dt id="solrclient.constants.default-update-servlet"><strong><code><a href="class.solrclient.php#solrclient.constants.default-update-servlet">SolrClient::DEFAULT_UPDATE_SERVLET</a></code></strong></dt>
     <dd>
      <p class="para">This is the initial value for the update servlet.</p>
     </dd>
    

    
     <dt id="solrclient.constants.default-threads-servlet"><strong><code><a href="class.solrclient.php#solrclient.constants.default-threads-servlet">SolrClient::DEFAULT_THREADS_SERVLET</a></code></strong></dt>
     <dd>
      <p class="para">This is the initial value for the threads servlet.</p>
     </dd>
    

    
     <dt id="solrclient.constants.default-ping-servlet"><strong><code><a href="class.solrclient.php#solrclient.constants.default-ping-servlet">SolrClient::DEFAULT_PING_SERVLET</a></code></strong></dt>
     <dd>
      <p class="para">This is the initial value for the ping servlet.</p>
     </dd>
    

    
     <dt id="solrclient.constants.default-terms-servlet"><strong><code><a href="class.solrclient.php#solrclient.constants.default-terms-servlet">SolrClient::DEFAULT_TERMS_SERVLET</a></code></strong></dt>
     <dd>
      <p class="para">This is the initial value for the terms servlet used for the TermsComponent</p>
     </dd>
    
    
    
     <dt id="solrclient.constants.default-system-servlet"><strong><code><a href="class.solrclient.php#solrclient.constants.default-system-servlet">SolrClient::DEFAULT_SYSTEM_SERVLET</a></code></strong></dt>
     <dd>
      <p class="para">This is the initial value for the system servlet used to obtain Solr Server information</p>
     </dd>
    

   </dl>
  </div>



 </div>

 


























































































































































<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="solrclient.adddocument.php">SolrClient::addDocument</a> — Adds a document to the index</li><li><a href="solrclient.adddocuments.php">SolrClient::addDocuments</a> — Adds a collection of SolrInputDocument instances to the index</li><li><a href="solrclient.commit.php">SolrClient::commit</a> — Finalizes all add/deletes made to the index</li><li><a href="solrclient.construct.php">SolrClient::__construct</a> — Constructor for the SolrClient object</li><li><a href="solrclient.deletebyid.php">SolrClient::deleteById</a> — Delete by Id</li><li><a href="solrclient.deletebyids.php">SolrClient::deleteByIds</a> — Deletes by Ids</li><li><a href="solrclient.deletebyqueries.php">SolrClient::deleteByQueries</a> — Removes all documents matching any of the queries</li><li><a href="solrclient.deletebyquery.php">SolrClient::deleteByQuery</a> — Deletes all documents matching the given query</li><li><a href="solrclient.destruct.php">SolrClient::__destruct</a> — Destructor for SolrClient</li><li><a href="solrclient.getbyid.php">SolrClient::getById</a> — Get Document By Id. Utilizes Solr Realtime Get (RTG)</li><li><a href="solrclient.getbyids.php">SolrClient::getByIds</a> — Get Documents by their Ids. Utilizes Solr Realtime Get (RTG)</li><li><a href="solrclient.getdebug.php">SolrClient::getDebug</a> — Returns the debug data for the last connection attempt</li><li><a href="solrclient.getoptions.php">SolrClient::getOptions</a> — Returns the client options set internally</li><li><a href="solrclient.optimize.php">SolrClient::optimize</a> — Defragments the index</li><li><a href="solrclient.ping.php">SolrClient::ping</a> — Checks if Solr server is still up</li><li><a href="solrclient.query.php">SolrClient::query</a> — Sends a query to the server</li><li><a href="solrclient.request.php">SolrClient::request</a> — Sends a raw update request</li><li><a href="solrclient.rollback.php">SolrClient::rollback</a> — Rollbacks all add/deletes made to the index since the last commit</li><li><a href="solrclient.setresponsewriter.php">SolrClient::setResponseWriter</a> — Sets the response writer used to prepare the response from Solr</li><li><a href="solrclient.setservlet.php">SolrClient::setServlet</a> — Changes the specified servlet type to a new value</li><li><a href="solrclient.system.php">SolrClient::system</a> — Retrieve Solr Server information</li><li><a href="solrclient.threads.php">SolrClient::threads</a> — Checks the threads status</li></ul>
</div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/solr/solrclient.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fclass.solrclient%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.solrclient&amp;repo=en&amp;redirect=https://www.php.net/manual/en/class.solrclient.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="">
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
                                                <li class="current">
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
