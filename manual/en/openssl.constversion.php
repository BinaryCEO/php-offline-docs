<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Version constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/openssl.constversion.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/openssl.constversion.php">
 <link rel="alternate" href="https://www.php.net/manual/en/openssl.constversion.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/openssl.constants.php">
 <link rel="prev" href="https://www.php.net/manual/en/openssl.ciphers.php">
 <link rel="next" href="https://www.php.net/manual/en/openssl.constsni.php">

 <link rel="alternate" href="https://www.php.net/manual/en/openssl.constversion.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/openssl.constversion.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/openssl.constversion.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/openssl.constversion.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/openssl.constversion.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/openssl.constversion.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/openssl.constversion.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/openssl.constversion.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/openssl.constversion.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/openssl.constversion.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/openssl.constversion.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Version constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Version constants - Manual" />
<meta name="twitter:description" content="Version constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Version constants - Manual" />
<meta itemprop="description" content="Version constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Version constants" />

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
        <a href="openssl.constsni.php">
          Server Name Indication constants &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="openssl.ciphers.php">
          &laquo; Ciphers        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.crypto.php'>Cryptography Extensions</a></li>      <li><a href='book.openssl.php'>OpenSSL</a></li>      <li><a href='openssl.constants.php'>Predefined Constants</a></li>      </ul>
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
            <option value='en/openssl.constversion.php' selected="selected">English</option>
            <option value='de/openssl.constversion.php'>German</option>
            <option value='es/openssl.constversion.php'>Spanish</option>
            <option value='fr/openssl.constversion.php'>French</option>
            <option value='it/openssl.constversion.php'>Italian</option>
            <option value='ja/openssl.constversion.php'>Japanese</option>
            <option value='pt_BR/openssl.constversion.php'>Brazilian Portuguese</option>
            <option value='ru/openssl.constversion.php'>Russian</option>
            <option value='tr/openssl.constversion.php'>Turkish</option>
            <option value='uk/openssl.constversion.php'>Ukrainian</option>
            <option value='zh/openssl.constversion.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="openssl.constversion" class="section">
  <h2 class="title">Version constants</h2>
  <dl>
    
      <dt id="constant.openssl-version-text">
       <strong><code><a href="openssl.constversion.php#constant.openssl-version-text">OPENSSL_VERSION_TEXT</a></code></strong>
       (<span class="type"><a href="language.types.string.php" class="type string">string</a></span>)
      </dt>
      <dd>
        <span class="simpara">

        </span>
      </dd>
    
    
      <dt id="constant.openssl-version-number">
       <strong><code><a href="openssl.constversion.php#constant.openssl-version-number">OPENSSL_VERSION_NUMBER</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </dt>
      <dd>
        <span class="simpara">

        </span>
      </dd>
    
  </dl>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/openssl/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fopenssl.constversion%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=openssl.constversion&amp;repo=en&amp;redirect=https://www.php.net/manual/en/openssl.constversion.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="117843">  <div class="votes">
    <div id="Vu117843">
    <a href="/manual/vote-note.php?id=117843&amp;page=openssl.constversion&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117843">
    <a href="/manual/vote-note.php?id=117843&amp;page=openssl.constversion&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117843" title="77% like this...">
    5
    </div>
  </div>
  <a href="#117843" class="name">
  <strong class="user"><em>sebastian.goendoer</em></strong></a><a class="genanchor" href="#117843"> &para;</a><div class="date" title="2015-08-19 08:06"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117843">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">"openssl version text: " </span><span class="keyword">. </span><span class="default">OPENSSL_VERSION_TEXT </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br />echo </span><span class="string">"openssl version number:  " </span><span class="keyword">. </span><span class="default">OPENSSL_VERSION_NUMBER </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />will output something like:<br /><br />    openssl version text: OpenSSL 1.0.2d 9 Jul 2015<br />    openssl version number:  268443727<br /><br />see also: <a href="https://wiki.openssl.org/index.php/Manual:OPENSSL_VERSION_NUMBER(3" rel="nofollow" target="_blank">https://wiki.openssl.org/index.php/Manual:OPENSSL_VERSION_NUMBER(3</a>)</span></code></div>
  </div>
 </div>
  <div class="note" id="120092">  <div class="votes">
    <div id="Vu120092">
    <a href="/manual/vote-note.php?id=120092&amp;page=openssl.constversion&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120092">
    <a href="/manual/vote-note.php?id=120092&amp;page=openssl.constversion&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120092" title="60% like this...">
    2
    </div>
  </div>
  <a href="#120092" class="name">
  <strong class="user"><em>sergey dot dryabzhinsky at gmail dot com</em></strong></a><a class="genanchor" href="#120092"> &para;</a><div class="date" title="2016-10-27 02:18"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120092">
<div class="phpcode"><code><span class="html">Plase note that these constants show not<br />the current system openssl library version<br />but version PHP was compiled with.</span></code></div>
  </div>
 </div>
  <div class="note" id="119370">  <div class="votes">
    <div id="Vu119370">
    <a href="/manual/vote-note.php?id=119370&amp;page=openssl.constversion&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119370">
    <a href="/manual/vote-note.php?id=119370&amp;page=openssl.constversion&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119370" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119370" class="name">
  <strong class="user"><em>fontajos at phpeppershop dot com</em></strong></a><a class="genanchor" href="#119370"> &para;</a><div class="date" title="2016-05-23 12:02"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119370">
<div class="phpcode"><code><span class="html">Fixed version (patch hexdec conversion + version_compare usage)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// OPENSSL_VERSION_NUMBER parser, works from OpenSSL v.0.9.5b+ (e.g. for use with version_compare())<br />// OPENSSL_VERSION_NUMBER is a numeric release version identifier for OpenSSL<br />// Syntax: MNNFFPPS: major minor fix patch status (HEX)<br />// The status nibble meaning: 0 =&gt; development, 1 to e =&gt; betas, f =&gt; release<br />// Examples:<br />// - 0x000906023 =&gt; 0.9.6b beta 3<br />// - 0x00090605f =&gt; 0.9.6e release<br />// - 0x1000103f  =&gt; 1.0.1c<br />/**<br />* @param Return Patch-Part as decimal number for use with version_compare<br />* @param OpenSSL version identifier as hex value $openssl_version_number<br />*/<br /></span><span class="keyword">function </span><span class="default">get_openssl_version_number</span><span class="keyword">(</span><span class="default">$patch_as_number</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">,</span><span class="default">$openssl_version_number</span><span class="keyword">=</span><span class="default">null</span><span class="keyword">) {<br />    if (</span><span class="default">is_null</span><span class="keyword">(</span><span class="default">$openssl_version_number</span><span class="keyword">)) </span><span class="default">$openssl_version_number </span><span class="keyword">= </span><span class="default">OPENSSL_VERSION_NUMBER</span><span class="keyword">;<br />    </span><span class="default">$openssl_numeric_identifier </span><span class="keyword">= </span><span class="default">str_pad</span><span class="keyword">((string)</span><span class="default">dechex</span><span class="keyword">(</span><span class="default">$openssl_version_number</span><span class="keyword">),</span><span class="default">8</span><span class="keyword">,</span><span class="string">'0'</span><span class="keyword">,</span><span class="default">STR_PAD_LEFT</span><span class="keyword">);<br /><br />    </span><span class="default">$openssl_version_parsed </span><span class="keyword">= array();<br />    </span><span class="default">$preg </span><span class="keyword">= </span><span class="string">'/(?&lt;major&gt;[[:xdigit:]])(?&lt;minor&gt;[[:xdigit:]][[:xdigit:]])(?&lt;fix&gt;[[:xdigit:]][[:xdigit:]])'</span><span class="keyword">;<br />    </span><span class="default">$preg</span><span class="keyword">.= </span><span class="string">'(?&lt;patch&gt;[[:xdigit:]][[:xdigit:]])(?&lt;type&gt;[[:xdigit:]])/'</span><span class="keyword">;<br />    </span><span class="default">preg_match_all</span><span class="keyword">(</span><span class="default">$preg</span><span class="keyword">, </span><span class="default">$openssl_numeric_identifier</span><span class="keyword">, </span><span class="default">$openssl_version_parsed</span><span class="keyword">);<br />    </span><span class="default">$openssl_version </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    if (!empty(</span><span class="default">$openssl_version_parsed</span><span class="keyword">)) {<br />        </span><span class="default">$alphabet </span><span class="keyword">= array(</span><span class="default">1</span><span class="keyword">=&gt;</span><span class="string">'a'</span><span class="keyword">,</span><span class="default">2</span><span class="keyword">=&gt;</span><span class="string">'b'</span><span class="keyword">,</span><span class="default">3</span><span class="keyword">=&gt;</span><span class="string">'c'</span><span class="keyword">,</span><span class="default">4</span><span class="keyword">=&gt;</span><span class="string">'d'</span><span class="keyword">,</span><span class="default">5</span><span class="keyword">=&gt;</span><span class="string">'e'</span><span class="keyword">,</span><span class="default">6</span><span class="keyword">=&gt;</span><span class="string">'f'</span><span class="keyword">,</span><span class="default">7</span><span class="keyword">=&gt;</span><span class="string">'g'</span><span class="keyword">,</span><span class="default">8</span><span class="keyword">=&gt;</span><span class="string">'h'</span><span class="keyword">,</span><span class="default">9</span><span class="keyword">=&gt;</span><span class="string">'i'</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">=&gt;</span><span class="string">'j'</span><span class="keyword">,</span><span class="default">11</span><span class="keyword">=&gt;</span><span class="string">'k'</span><span class="keyword">,<br />                                       </span><span class="default">12</span><span class="keyword">=&gt;</span><span class="string">'l'</span><span class="keyword">,</span><span class="default">13</span><span class="keyword">=&gt;</span><span class="string">'m'</span><span class="keyword">,</span><span class="default">14</span><span class="keyword">=&gt;</span><span class="string">'n'</span><span class="keyword">,</span><span class="default">15</span><span class="keyword">=&gt;</span><span class="string">'o'</span><span class="keyword">,</span><span class="default">16</span><span class="keyword">=&gt;</span><span class="string">'p'</span><span class="keyword">,</span><span class="default">17</span><span class="keyword">=&gt;</span><span class="string">'q'</span><span class="keyword">,</span><span class="default">18</span><span class="keyword">=&gt;</span><span class="string">'r'</span><span class="keyword">,</span><span class="default">19</span><span class="keyword">=&gt;</span><span class="string">'s'</span><span class="keyword">,</span><span class="default">20</span><span class="keyword">=&gt;</span><span class="string">'t'</span><span class="keyword">,</span><span class="default">21</span><span class="keyword">=&gt;</span><span class="string">'u'</span><span class="keyword">,<br />                                       </span><span class="default">22</span><span class="keyword">=&gt;</span><span class="string">'v'</span><span class="keyword">,</span><span class="default">23</span><span class="keyword">=&gt;</span><span class="string">'w'</span><span class="keyword">,</span><span class="default">24</span><span class="keyword">=&gt;</span><span class="string">'x'</span><span class="keyword">,</span><span class="default">25</span><span class="keyword">=&gt;</span><span class="string">'y'</span><span class="keyword">,</span><span class="default">26</span><span class="keyword">=&gt;</span><span class="string">'z'</span><span class="keyword">);<br />        </span><span class="default">$openssl_version </span><span class="keyword">= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$openssl_version_parsed</span><span class="keyword">[</span><span class="string">'major'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]).</span><span class="string">'.'</span><span class="keyword">;<br />        </span><span class="default">$openssl_version</span><span class="keyword">.= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$openssl_version_parsed</span><span class="keyword">[</span><span class="string">'minor'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]).</span><span class="string">'.'</span><span class="keyword">;<br />        </span><span class="default">$openssl_version</span><span class="keyword">.= </span><span class="default">intval</span><span class="keyword">(</span><span class="default">$openssl_version_parsed</span><span class="keyword">[</span><span class="string">'fix'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]);<br />        </span><span class="default">$patchlevel_dec </span><span class="keyword">= </span><span class="default">hexdec</span><span class="keyword">(</span><span class="default">$openssl_version_parsed</span><span class="keyword">[</span><span class="string">'patch'</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]);<br />        if (!</span><span class="default">$patch_as_number </span><span class="keyword">&amp;&amp; </span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$patchlevel_dec</span><span class="keyword">, </span><span class="default">$alphabet</span><span class="keyword">)) {<br />            </span><span class="default">$openssl_version</span><span class="keyword">.= </span><span class="default">$alphabet</span><span class="keyword">[</span><span class="default">$patchlevel_dec</span><span class="keyword">]; </span><span class="comment">// ideal for text comparison<br />        </span><span class="keyword">}<br />        else {<br />            </span><span class="default">$openssl_version</span><span class="keyword">.= </span><span class="string">'.'</span><span class="keyword">.</span><span class="default">$patchlevel_dec</span><span class="keyword">; </span><span class="comment">// ideal for version_compare<br />        </span><span class="keyword">}<br />    }<br />    return </span><span class="default">$openssl_version</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119283">  <div class="votes">
    <div id="Vu119283">
    <a href="/manual/vote-note.php?id=119283&amp;page=openssl.constversion&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119283">
    <a href="/manual/vote-note.php?id=119283&amp;page=openssl.constversion&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119283" title="50% like this...">
    0
    </div>
  </div>
  <a href="#119283" class="name">
  <strong class="user"><em>fontajos at phpeppershop dot com</em></strong></a><a class="genanchor" href="#119283"> &para;</a><div class="date" title="2016-05-03 03:46"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119283">
<div class="phpcode"><code><span class="html">// OPENSSL_VERSION_NUMBER parser, works from OpenSSL v.0.9.5b+ (e.g. for use with version_compare())<br />// OPENSSL_VERSION_NUMBER is a numeric release version identifier for OpenSSL<br />// Syntax: MNNFFPPS: major minor fix patch status (HEX)<br />// The status nibble meaning: 0 =&gt; development, 1 to e =&gt; betas, f =&gt; release<br />// Examples:<br />// - 0x000906023 =&gt; 0.9.6b beta 3<br />// - 0x00090605f =&gt; 0.9.6e release<br />// - 0x1000103f  =&gt; 1.0.1c<br />/**<br /> * @param OpenSSL version identifier as hex value $openssl_version_number<br /> */ <br />function get_openssl_version_number($patch_as_number=false,$openssl_version_number=null) {<br />    if (is_null($openssl_version_number)) $openssl_version_number = OPENSSL_VERSION_NUMBER;<br />    $openssl_numeric_identifier = str_pad((string)dechex($openssl_version_number),8,'0',STR_PAD_LEFT);          <br /><br />    $openssl_version_parsed = array();<br />    $preg = '/(?&lt;major&gt;[[:xdigit:]])(?&lt;minor&gt;[[:xdigit:]][[:xdigit:]])(?&lt;fix&gt;[[:xdigit:]][[:xdigit:]])';<br />    $preg.= '(?&lt;patch&gt;[[:xdigit:]][[:xdigit:]])(?&lt;type&gt;[[:xdigit:]])/';<br />    preg_match_all($preg, $openssl_numeric_identifier, $openssl_version_parsed);<br /><br />    $openssl_version = false;<br />    if (!empty($openssl_version_parsed)) {<br />        $alphabet = array(1=&gt;'a',2=&gt;'b',3=&gt;'c',4=&gt;'d',5=&gt;'e',6=&gt;'f',7=&gt;'g',8=&gt;'h',9=&gt;'i',10=&gt;'j',11=&gt;'k',12=&gt;'l',13=&gt;'m',<br />                                      14=&gt;'n',15=&gt;'o',16=&gt;'p',17=&gt;'q',18=&gt;'r',19=&gt;'s',20=&gt;'t',21=&gt;'u',22=&gt;'v',23=&gt;'w',24=&gt;'x',25=&gt;'y',26=&gt;'z');<br />        $openssl_version = intval($openssl_version_parsed['major'][0]).'.';<br />        $openssl_version.= intval($openssl_version_parsed['minor'][0]).'.';<br />        $openssl_version.= intval($openssl_version_parsed['fix'][0]);<br />        if (!$patch_as_number &amp;&amp; array_key_exists(intval($openssl_version_parsed['patch'][0]), $alphabet)) {<br />            $openssl_version.= $alphabet[intval($openssl_version_parsed['patch'][0])]; // ideal for text comparison<br />        }<br />        else {<br />            $openssl_version.= '.'.intval($openssl_version_parsed['patch'][0]); // ideal for version_compare<br />        }<br />    }<br />    <br />    return $openssl_version;<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=openssl.constversion&amp;repo=en&amp;redirect=https://www.php.net/manual/en/openssl.constversion.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="openssl.constants.php">Predefined Constants</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="openssl.purpose-check.php" title="Purpose checking flags">Purpose checking flags</a>
                        </li>
                                                <li class="">
                            <a href="openssl.padding.php" title="Padding flags for asymmetric encryption">Padding flags for asymmetric encryption</a>
                        </li>
                                                <li class="">
                            <a href="openssl.key-types.php" title="Key types">Key types</a>
                        </li>
                                                <li class="">
                            <a href="openssl.pkcs7.flags.php" title="PKCS7 Flags/Constants">PKCS7 Flags/Constants</a>
                        </li>
                                                <li class="">
                            <a href="openssl.cms.flags.php" title="CMS Flags/Constants">CMS Flags/Constants</a>
                        </li>
                                                <li class="">
                            <a href="openssl.signature-algos.php" title="Signature Algorithms">Signature Algorithms</a>
                        </li>
                                                <li class="">
                            <a href="openssl.ciphers.php" title="Ciphers">Ciphers</a>
                        </li>
                                                <li class="current">
                            <a href="openssl.constversion.php" title="Version constants">Version constants</a>
                        </li>
                                                <li class="">
                            <a href="openssl.constsni.php" title="Server Name Indication constants">Server Name Indication constants</a>
                        </li>
                                                <li class="">
                            <a href="openssl.constants.other.php" title="Other Constants">Other Constants</a>
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
