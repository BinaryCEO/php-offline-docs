<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ldap_start_tls - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ldap-start-tls.php">
 <link rel="shorturl" href="https://www.php.net/ldap-start-tls">
 <link rel="alternate" href="https://www.php.net/ldap-start-tls" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ldap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ldap-sort.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ldap-t61-to-8859.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ldap-start-tls.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ldap-start-tls.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ldap-start-tls.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ldap-start-tls.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ldap-start-tls.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ldap-start-tls.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ldap-start-tls.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ldap-start-tls.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ldap-start-tls.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ldap-start-tls.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ldap-start-tls.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Start TLS" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ldap_start_tls - Manual" />
<meta name="twitter:description" content="Start TLS" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ldap_start_tls - Manual" />
<meta itemprop="description" content="Start TLS" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Start TLS" />

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
        <a href="function.ldap-t61-to-8859.php">
          ldap_t61_to_8859 &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ldap-sort.php">
          &laquo; ldap_sort        </a>
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
            <option value='en/function.ldap-start-tls.php' selected="selected">English</option>
            <option value='de/function.ldap-start-tls.php'>German</option>
            <option value='es/function.ldap-start-tls.php'>Spanish</option>
            <option value='fr/function.ldap-start-tls.php'>French</option>
            <option value='it/function.ldap-start-tls.php'>Italian</option>
            <option value='ja/function.ldap-start-tls.php'>Japanese</option>
            <option value='pt_BR/function.ldap-start-tls.php'>Brazilian Portuguese</option>
            <option value='ru/function.ldap-start-tls.php'>Russian</option>
            <option value='tr/function.ldap-start-tls.php'>Turkish</option>
            <option value='uk/function.ldap-start-tls.php'>Ukrainian</option>
            <option value='zh/function.ldap-start-tls.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ldap-start-tls" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ldap_start_tls</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ldap_start_tls</span> &mdash; <span class="dc-title">Start TLS</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.ldap-start-tls-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ldap_start_tls</strong></span>(<span class="methodparam"><span class="type"><a href="class.ldap-connection.php" class="type LDAP\Connection">LDAP\Connection</a></span> <code class="parameter">$ldap</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ldap/functions/ldap-start-tls.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ldap-start-tls%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ldap-start-tls&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-start-tls.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">19 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="94815">  <div class="votes">
    <div id="Vu94815">
    <a href="/manual/vote-note.php?id=94815&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94815">
    <a href="/manual/vote-note.php?id=94815&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94815" title="68% like this...">
    12
    </div>
  </div>
  <a href="#94815" class="name">
  <strong class="user"><em>jcarlos at dsi dot uclm dot es</em></strong></a><a class="genanchor" href="#94815"> &para;</a><div class="date" title="2009-11-26 03:04"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94815">
<div class="phpcode"><code><span class="html">INTEGRATING ACTIVE DIRECTORY WITH PHP-LDAP AND TLS <br />==================================================<br /><br />My configuration:<br />Apache/2.2.14 (Win32) mod_ssl/2.2.14 OpenSSL/0.9.8k PHP/5.2.11<br /><br />NOTE 1: At the momment, the versión 5.3.1 fail with tls<br />NOTE 2: This example works on windows, but in linux is similar<br /><br />1) Download the Certificate X.509 (PEM format) from a web browser, I used Firefox. I put the name webcert.crt<br />2) Create the folder c:\openldap\sysconf<br />3) Copy the file webcert.crt to c:\openldap\sysconf<br />4) With notepad you must create the file c:\openldap\sysconf\ldap.conf file. The file contents:<br />TLS_REQCERT never<br />TLS_CACERT c:\openldap\sysconf\webcert.crt<br />5) The code:<br /><br /><span class="default">&lt;?php<br />   $ldap</span><span class="keyword">=</span><span class="string">"ldap.myDomain.com"</span><span class="keyword">;<br />   </span><span class="default">$usr</span><span class="keyword">=</span><span class="string">"user@myDomain.com"</span><span class="keyword">;<br />   </span><span class="default">$pwd</span><span class="keyword">=</span><span class="string">"mypassword"</span><span class="keyword">;<br />   <br />   </span><span class="default">$ds</span><span class="keyword">=</span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">);  <br />   </span><span class="default">$ldapbind</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br />   if(</span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">))<br />      if(</span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)) <br />         if(</span><span class="default">ldap_start_tls</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">)) <br />               </span><span class="default">$ldapbind </span><span class="keyword">= @</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$usr</span><span class="keyword">, </span><span class="default">$pwd</span><span class="keyword">);    <br />   </span><span class="default">ldap_close</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">);<br />   if(!</span><span class="default">$ldapbind</span><span class="keyword">)<br />       echo </span><span class="string">"ERROR"</span><span class="keyword">;<br />   else<br />       echo </span><span class="string">"OK"</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="51879">  <div class="votes">
    <div id="Vu51879">
    <a href="/manual/vote-note.php?id=51879&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd51879">
    <a href="/manual/vote-note.php?id=51879&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V51879" title="66% like this...">
    11
    </div>
  </div>
  <a href="#51879" class="name">
  <strong class="user"><em>bill at strosberg dot com</em></strong></a><a class="genanchor" href="#51879"> &para;</a><div class="date" title="2005-04-13 10:42"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom51879">
<div class="phpcode"><code><span class="html">Please note there is a difference between ldaps and start-TLS for ldap.  start-TLS uses port 389, while ldaps uses port 636.  ldaps has been deprecated in favour of start-TLS for ldap.  Both encrypted (start-TLS ldap)  and unencrypted ldap (ldap) run on port 389 concurrently.<br /><br />Errors encountered are generally due to misunderstanding how to implement TLS-encrypted ldap.</span></code></div>
  </div>
 </div>
  <div class="note" id="129278">  <div class="votes">
    <div id="Vu129278">
    <a href="/manual/vote-note.php?id=129278&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129278">
    <a href="/manual/vote-note.php?id=129278&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129278" title="66% like this...">
    1
    </div>
  </div>
  <a href="#129278" class="name">
  <strong class="user"><em>andreas at heigl dot org</em></strong></a><a class="genanchor" href="#129278"> &para;</a><div class="date" title="2024-02-25 05:12"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129278">
<div class="phpcode"><code><span class="html">For a thorough walk through of how to support TLS with non-official certificates, check <a href="https://andreas.heigl.org/2020/01/31/handle-self-signed-certificates-with-phps-ldap-extension/" rel="nofollow" target="_blank">https://andreas.heigl.org/2020/01/31/handle-self-signed-certificates-with-phps-ldap-extension/</a></span></code></div>
  </div>
 </div>
  <div class="note" id="126424">  <div class="votes">
    <div id="Vu126424">
    <a href="/manual/vote-note.php?id=126424&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126424">
    <a href="/manual/vote-note.php?id=126424&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126424" title="66% like this...">
    1
    </div>
  </div>
  <a href="#126424" class="name">
  <strong class="user"><em>krunoslav at yottabyte dot hr</em></strong></a><a class="genanchor" href="#126424"> &para;</a><div class="date" title="2021-09-14 09:55"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126424">
<div class="phpcode"><code><span class="html">just moved CA certificate (b64 encoded) from <br />/root/cert/ldaps.pem to <br />/etc/openldap/certs/ldaps.pem<br />without permission setting, and it works fine<br /><br />cp /root/cert/ldaps.pem  /etc/openldap/certs/ldaps.pem <br /><br />ls -l  /root/cert/ldaps.cert /etc/openldap/certs/ldaps.pem<br /><br />-rw-r--r-- 1 root root 3696 Sep  3 16:12 /etc/openldap/certs/ldaps.pem<br />-rw-r--r-- 1 root root 3696 Sep 14 11:46 /root/cert/ldaps.pem<br /><br />cat  /etc/openldap/ldap.conf<br /><br />#TLS_CACERT /root/cert/ldaps.pem<br />TLS_CACERT /etc/openldap/certs/ldaps.pem</span></code></div>
  </div>
 </div>
  <div class="note" id="124290">  <div class="votes">
    <div id="Vu124290">
    <a href="/manual/vote-note.php?id=124290&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124290">
    <a href="/manual/vote-note.php?id=124290&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124290" title="58% like this...">
    2
    </div>
  </div>
  <a href="#124290" class="name">
  <strong class="user"><em>NOYB at NOYB dot info</em></strong></a><a class="genanchor" href="#124290"> &para;</a><div class="date" title="2019-10-12 05:34"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124290">
<div class="phpcode"><code><span class="html">Security Warning:<br /><br />To avoid the StripTLS attack vulnerability of StartTLS, code your application to not continue unless the connection is successfully upgraded to TLS.<br /><br />For StripTLS attack vulnerability anatomy details please conduct a web search for "StripTLS".<br /><br />There is a good article on Wikipedia titled "Opportunistic TLS".  The "Weaknesses and mitigations" section details the StripTLS attack vulnerability.</span></code></div>
  </div>
 </div>
  <div class="note" id="94893">  <div class="votes">
    <div id="Vu94893">
    <a href="/manual/vote-note.php?id=94893&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd94893">
    <a href="/manual/vote-note.php?id=94893&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V94893" title="57% like this...">
    3
    </div>
  </div>
  <a href="#94893" class="name">
  <strong class="user"><em>jcarlos at dsi dot uclm dot es</em></strong></a><a class="genanchor" href="#94893"> &para;</a><div class="date" title="2009-12-01 05:10"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom94893">
<div class="phpcode"><code><span class="html">Tested in Linux, ubuntu 9.10, PHP/5.2.10-2 and Apache/2.2.1.2<br /><br />INTEGRATING ACTIVE DIRECTORY WITH PHP-LDAP AND TLS IN LINUX<br />=============================================================<br /><br />I'm not an expert, but it works.<br /><br />1)I have installed ubuntu 9.10 desktop<br /><br />2)Packages:<br /> apt-get install apache2<br /> apt-get install libapache2-mod-php5<br /> apt-get install libldap-2.4-2<br /> apt-get install ldap-utils<br /> apt-get install libsasl2-modules-ldap<br /> apt-get install openssl<br /> apt-get install libsasl2-2<br /> apt-get install libkrb5-3<br /> apt-get install php5-ldap<br /> apt-get install php5-sasl<br /> apt-get install php5-auth-pam<br /><br />3)Put the PEM certificate.<br /> cd /etc/ldap<br /> mkdir certs<br /> copy /myhome/mycert.pem /etc/ldap/certs/mycert.pem<br /> NOTE:webcert.crt rename to mycert.pem. It's the same<br /><br />4)Edit the file /etc/ldap/ldap.conf and Add:<br />  TLS_REQCERT never<br />  TLS_CACERT /etc/ldap/certs/mycert.pem<br /><br />5)Create file /var/www/ldaptlstest.php:<br /><br /><span class="default">&lt;?php<br /><br />   $ldap</span><span class="keyword">=</span><span class="string">"ldap.myDomain.com"</span><span class="keyword">;<br />   </span><span class="default">$usr</span><span class="keyword">=</span><span class="string">"user@myDomain.com"</span><span class="keyword">;<br />   </span><span class="default">$pwd</span><span class="keyword">=</span><span class="string">"mypassword"</span><span class="keyword">;<br />   <br />   </span><span class="default">$ds</span><span class="keyword">=</span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$ldap</span><span class="keyword">);  <br />   </span><span class="default">$ldapbind</span><span class="keyword">=</span><span class="default">false</span><span class="keyword">;<br />   if(</span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">))<br />      if(</span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">LDAP_OPT_REFERRALS</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">)) <br />         if(</span><span class="default">ldap_start_tls</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">)) <br />               </span><span class="default">$ldapbind </span><span class="keyword">= @</span><span class="default">ldap_bind</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">, </span><span class="default">$usr</span><span class="keyword">, </span><span class="default">$pwd</span><span class="keyword">);    <br />   </span><span class="default">ldap_close</span><span class="keyword">(</span><span class="default">$ds</span><span class="keyword">);<br /><br />   if(!</span><span class="default">$ldapbind</span><span class="keyword">)<br />      echo </span><span class="string">"ERROR"</span><span class="keyword">;<br />   else<br />      echo </span><span class="string">"OK"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />6)Restart the server: /etc/init.d/apache2 restart<br /><br />7)Open Firefox and write: <a href="http://localhost/ldaptlstest.php" rel="nofollow" target="_blank">http://localhost/ldaptlstest.php</a><br />;)</span></code></div>
  </div>
 </div>
  <div class="note" id="73689">  <div class="votes">
    <div id="Vu73689">
    <a href="/manual/vote-note.php?id=73689&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73689">
    <a href="/manual/vote-note.php?id=73689&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73689" title="100% like this...">
    2
    </div>
  </div>
  <a href="#73689" class="name">
  <strong class="user"><em>technosophos</em></strong></a><a class="genanchor" href="#73689"> &para;</a><div class="date" title="2007-03-06 12:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73689">
<div class="phpcode"><code><span class="html">If your version was linked against the OpenLDAP libraries, you may want to look at the ldap.conf file for more information about specifying SSL/TLS behavior. Apparently, the settings in ldap.conf make a different in the way SSL/TLS is handled by PHP.</span></code></div>
  </div>
 </div>
  <div class="note" id="115150">  <div class="votes">
    <div id="Vu115150">
    <a href="/manual/vote-note.php?id=115150&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115150">
    <a href="/manual/vote-note.php?id=115150&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115150" title="50% like this...">
    0
    </div>
  </div>
  <a href="#115150" class="name">
  <strong class="user"><em>deguich at hotmail dot com</em></strong></a><a class="genanchor" href="#115150"> &para;</a><div class="date" title="2014-06-04 12:51"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115150">
<div class="phpcode"><code><span class="html">When you have this error:<br />Warning: ldap_start_tls() [function.ldap-start-tls]: Unable to start TLS: Connect error in /var/www/X.php on line Y<br /><br />It's probably because of a certificate validity issue. You can check the error by adding debug level:<br /><span class="default">&lt;?php <br />ldap_set_option</span><span class="keyword">(</span><span class="default">NULL</span><span class="keyword">, </span><span class="default">LDAP_OPT_DEBUG_LEVEL</span><span class="keyword">, </span><span class="default">7</span><span class="keyword">); <br /></span><span class="default">?&gt;<br /></span>This can be done before the ldap_connect takes place.<br /><br />To fix the certificate validity issue:<br />add<br />TLS_REQCERT never<br />in file (create it if not exist)<br />c:\openldap\sysconf\ldap.conf    &lt;= Windows<br />/etc/ldap.conf     &lt;= linux<br />A restart of the web server may be required to apply changes<br />It's probably not the best solution but it works ...<br /><br />Another thing to be aware of is that it requires version 3 (version 2 is php default):<br /><span class="default">&lt;?php<br />$con </span><span class="keyword">= </span><span class="default">ldap_connect</span><span class="keyword">(</span><span class="default">$hostnameSSL</span><span class="keyword">);<br /></span><span class="default">ldap_set_option</span><span class="keyword">(</span><span class="default">$con</span><span class="keyword">, </span><span class="default">LDAP_OPT_PROTOCOL_VERSION</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Another tip : the second parameter of ldap_connect is not used if you use an URL like "ldap://..." (port 389 automatically used) or "ldaps://..."  (port 636 automatically used).</span></code></div>
  </div>
 </div>
  <div class="note" id="107767">  <div class="votes">
    <div id="Vu107767">
    <a href="/manual/vote-note.php?id=107767&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107767">
    <a href="/manual/vote-note.php?id=107767&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107767" title="50% like this...">
    0
    </div>
  </div>
  <a href="#107767" class="name">
  <strong class="user"><em>Richard Lynch</em></strong></a><a class="genanchor" href="#107767"> &para;</a><div class="date" title="2012-03-02 05:28"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107767">
<div class="phpcode"><code><span class="html">In my experience:<br /><br />1)<br />PHP / openldap / whatever could NOT read .pem files.<br />They had to be .pfx or .cer<br />(I don't even know which one worked. I converted the .pem to both and called it done.)<br /><br />2)<br />In /etc/openldap/ldap.conf you must:<br />Either set TLS_CACERT /etc/openldap/cacerts/YOURCERT.pfx<br />Or set TLS_CACERTDIR /etc/openldap/cacerts/<br />The first one constrains you to a specific cert.<br />The latter tries all of them in the directory.<br /><br />3)<br />You have various options for TLS_REQCERT:<br />allow (use it if you need it)<br />require (must have a cert)<br />You'll have to read openldap docs for the rest.<br />I used allow, and it worked.<br />ymmv<br /><br />4)<br />I did not change anything in the (very long) default /etc/ldap.conf file<br /><br />5)<br />I did not change anything in the self-documenting /etc/autofs_ldap_auth.conf<br />Mainly because I just found it while typing this up, and I have no idea what it does.  Presumably 'autofs' implies you can mount some LDAP server as a mount point or something at boot... Sounds funky to me, but knock yourself out playing with it.<br /><br />This was all with various versions of PHP ranging from 5.2 to 5.3  No promises about other versions.<br /><br />6)<br />ldapsearch -VV says it's 2.3.43<br />Dunno if that comes with openldap or I downloaded it separately. Long time ago.  Very handy CLI tool for mucking around without PHP in the middle, so you can cross-check that it's PHP or not.</span></code></div>
  </div>
 </div>
  <div class="note" id="105929">  <div class="votes">
    <div id="Vu105929">
    <a href="/manual/vote-note.php?id=105929&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd105929">
    <a href="/manual/vote-note.php?id=105929&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V105929" title="50% like this...">
    0
    </div>
  </div>
  <a href="#105929" class="name">
  <strong class="user"><em>schmunk at usrbin dot de</em></strong></a><a class="genanchor" href="#105929"> &para;</a><div class="date" title="2011-09-26 03:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom105929">
<div class="phpcode"><code><span class="html">PHP Warning:  ldap_start_tls(): Unable to start TLS: Operations error in /path/to/script.php<br /><br />Do not use ldap_start_tls() if you've already connected to the LDAP Server via SSL e.g. "ldaps://hostame".</span></code></div>
  </div>
 </div>
  <div class="note" id="100489">  <div class="votes">
    <div id="Vu100489">
    <a href="/manual/vote-note.php?id=100489&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd100489">
    <a href="/manual/vote-note.php?id=100489&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V100489" title="50% like this...">
    0
    </div>
  </div>
  <a href="#100489" class="name">
  <strong class="user"><em>T. Le Meur</em></strong></a><a class="genanchor" href="#100489"> &para;</a><div class="date" title="2010-10-19 06:11"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom100489">
<div class="phpcode"><code><span class="html">Note that, on Windows, due to a bug in the php_ldap extension for php 5.3.2, the location of the ldap.conf may change.<br /><br />In this case, PHP expects the ldap.conf file to be in the root filesystem where the Webserver Document root is installed (for instance C:\ldap.conf).<br /><br />This seems to be fixed in PHP 5.3.3RC1<br /><br />See the following bug reference:<br /><a href="http://bugs.php.net/bug.php?id=48866" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=48866</a></span></code></div>
  </div>
 </div>
  <div class="note" id="98417">  <div class="votes">
    <div id="Vu98417">
    <a href="/manual/vote-note.php?id=98417&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98417">
    <a href="/manual/vote-note.php?id=98417&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98417" title="50% like this...">
    0
    </div>
  </div>
  <a href="#98417" class="name">
  <strong class="user"><em>victoriano at uma dot es</em></strong></a><a class="genanchor" href="#98417"> &para;</a><div class="date" title="2010-06-14 12:00"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98417">
<div class="phpcode"><code><span class="html">ldaps:// (on port 636) is NOT the same as using STARTTLS on port 389.<br /><br />The second method upgrades the security of a plain connection to an encrypted channel, which is strongly recommended for plain binding (DN/password).</span></code></div>
  </div>
 </div>
  <div class="note" id="79221">  <div class="votes">
    <div id="Vu79221">
    <a href="/manual/vote-note.php?id=79221&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79221">
    <a href="/manual/vote-note.php?id=79221&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79221" title="50% like this...">
    0
    </div>
  </div>
  <a href="#79221" class="name">
  <strong class="user"><em>pataisjsu at Yahoo.com</em></strong></a><a class="genanchor" href="#79221"> &para;</a><div class="date" title="2007-11-15 02:55"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79221">
<div class="phpcode"><code><span class="html">I seemingly take forever to make use of ldap_start_tls work.<br />Especially lacking in document, I was frustrate and almost gave up until I saw this link in the php forum. <br />I thought it is worth for put the link in here.<br /><br /><a href="http://marc.info/?l=php-windows&amp;m=116127873321748&amp;w=2" rel="nofollow" target="_blank">http://marc.info/?l=php-windows&amp;m=116127873321748&amp;w=2</a><br /><br />it is really work, and it saves me.</span></code></div>
  </div>
 </div>
  <div class="note" id="43632">  <div class="votes">
    <div id="Vu43632">
    <a href="/manual/vote-note.php?id=43632&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43632">
    <a href="/manual/vote-note.php?id=43632&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43632" title="50% like this...">
    0
    </div>
  </div>
  <a href="#43632" class="name">
  <strong class="user"><em>claar at no dot spam dot ksu dot edu</em></strong></a><a class="genanchor" href="#43632"> &para;</a><div class="date" title="2004-06-28 03:10"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43632">
<div class="phpcode"><code><span class="html">Note that (in my very limited experience) you cannot use the ldaps protocol with tls, or ldap_start_tls() will report "ldap_start_tls(): Unable to start TLS: Operations error", and ldap_error() will return error code 1.<br /><br />I found that I had to call ldap_connect() with ldap:// rather than ldaps:// for ldap_start_tls() to succeed.  Hope this helps someone!</span></code></div>
  </div>
 </div>
  <div class="note" id="23568">  <div class="votes">
    <div id="Vu23568">
    <a href="/manual/vote-note.php?id=23568&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd23568">
    <a href="/manual/vote-note.php?id=23568&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V23568" title="50% like this...">
    0
    </div>
  </div>
  <a href="#23568" class="name">
  <strong class="user"><em>wirges-at-cerias.purdue.edu</em></strong></a><a class="genanchor" href="#23568"> &para;</a><div class="date" title="2002-07-22 08:19"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom23568">
<div class="phpcode"><code><span class="html">It should be mentioned, that TLS connections for LDAP *REQUIRE* you to use LDAP Protocol version 3.  By default, PHP uses Protocol 2.  
<br />Therefore, if you do not know this, you may be puzzled as to why you get "TLS not supported" error.
<br />
<br />To get around this, just use ldap_set_option to make the LDAP connection use Protocol 3 (if supported).
<br />
<br />For example:
<br />
<br />$ds = ldap_connect($LDAP_SERVER,$LDAP_PORT);
<br />if ($ds) {
<br />   if (!ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3)) {
<br />      fatal_error("Failed to set LDAP Protocol version to 3, TLS not supported.");
<br />    }
<br />    if (!ldap_start_tls($ds)) {
<br />       fatal_error("Ldap_start_tls failed");
<br />    }
<br />    // now we need to bind anonymously to the ldap server
<br />    $bth = ldap_bind($ds);
<br />    //make your query
<br />}</span></code></div>
  </div>
 </div>
  <div class="note" id="68684">  <div class="votes">
    <div id="Vu68684">
    <a href="/manual/vote-note.php?id=68684&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68684">
    <a href="/manual/vote-note.php?id=68684&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68684" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#68684" class="name">
  <strong class="user"><em>on at cs dot ait dot ac dot th</em></strong></a><a class="genanchor" href="#68684"> &para;</a><div class="date" title="2006-08-07 12:00"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68684">
<div class="phpcode"><code><span class="html">More on TLS start.<br /><br />It seems that either you ldap_connect to ldaps://, port 636 or you ldap_tls_start.<br /><br />In my case, using ldaps on port 636 (to be sure I enforce TLS) the connection will go like:<br /><br />$LDAP_SERVER="ldaps://ldap.../";<br />$LDAP_PORT=636;<br /><br />$ds = ldap_connect($LDAP_SERVER,$LDAP_PORT);<br />if ($ds) {<br />   if (!ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3)) {<br />     fatal_error("Failed to set LDAP Protocol version to 3, TLS not supported.");<br />   }<br />/*** NO NEED ***<br />*   if (!ldap_start_tls($ds)) {<br />*      exit;<br />*   }<br />***/<br />   // now we need to bind anonymously to the ldap server<br />   $bth = ldap_bind($ds);<br />   //make your query</span></code></div>
  </div>
 </div>
  <div class="note" id="122296">  <div class="votes">
    <div id="Vu122296">
    <a href="/manual/vote-note.php?id=122296&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122296">
    <a href="/manual/vote-note.php?id=122296&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122296" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#122296" class="name">
  <strong class="user"><em>pficheux at prologue-numerique dot fr</em></strong></a><a class="genanchor" href="#122296"> &para;</a><div class="date" title="2018-01-22 09:30"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122296">
<div class="phpcode"><code><span class="html">Windows only: you must add a ldaprc file in your current directory so ldap can validate the server certificate<br /><br />something like :<br /><br /># no verification here<br />TLS_REQCERT never</span></code></div>
  </div>
 </div>
  <div class="note" id="115709">  <div class="votes">
    <div id="Vu115709">
    <a href="/manual/vote-note.php?id=115709&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115709">
    <a href="/manual/vote-note.php?id=115709&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115709" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#115709" class="name">
  <strong class="user"><em>med dot ezzairi at gmail dot com</em></strong></a><a class="genanchor" href="#115709"> &para;</a><div class="date" title="2014-09-11 10:05"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115709">
<div class="phpcode"><code><span class="html">For all users,admins how are using or taying to connect to Microsoft Active Directory with PHP openLDAP extension, Apache,OpenSSL and they are getting:<br />"Warning: ldap_bind(): Unable to bind to server: Can't contact LDAP server"<br />here is the solution as i did:<br />--------------------------------<br />upgrade to PHP 5.4.x<br />creat a directory as: C:\openldap\sysconf\ldap.conf<br /><br />write into this file (ldap.conf):<br />TLS_CACERT path\to\your\CA\cert\file.crt<br /><br />(like d:\monCA_Cert\ca.crt)<br /><br />restart your apache web server, and refresh your page and tell me (allah yar7am lwalidin)in arabic<br /><br />for more here's my mail:med.ezzairi@gmail.com</span></code></div>
  </div>
 </div>
  <div class="note" id="95939">  <div class="votes">
    <div id="Vu95939">
    <a href="/manual/vote-note.php?id=95939&amp;page=function.ldap-start-tls&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95939">
    <a href="/manual/vote-note.php?id=95939&amp;page=function.ldap-start-tls&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95939" title="0% like this...">
    -5
    </div>
  </div>
  <a href="#95939" class="name">
  <strong class="user"><em>josselin dot dulac at enscm dot fr</em></strong></a><a class="genanchor" href="#95939"> &para;</a><div class="date" title="2010-01-29 07:19"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95939">
<div class="phpcode"><code><span class="html">Note : if you are using OpenLdap client &gt; v2 and PHP &gt; 4.0.4, you don't have to use that function. You just have to specify it using<br /><span class="default">&lt;?php <br />ldap_connect</span><span class="keyword">(</span><span class="string">"ldaps://yourhostname"</span><span class="keyword">, </span><span class="default">636</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />If you use both ldaps:// uri and ldap_start_tls function, you'll get a warning saying that a TLS/SSL session is already open.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ldap-start-tls&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ldap-start-tls.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="function.ldap-set-option.php" title="ldap_&#8203;set_&#8203;option">ldap_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-set-rebind-proc.php" title="ldap_&#8203;set_&#8203;rebind_&#8203;proc">ldap_&#8203;set_&#8203;rebind_&#8203;proc</a>
                        </li>
                                                <li class="">
                            <a href="function.ldap-sort.php" title="ldap_&#8203;sort">ldap_&#8203;sort</a>
                        </li>
                                                <li class="current">
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
